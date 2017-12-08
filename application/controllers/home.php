<?php

/**
* @file:school.php
* @brief:This class deal with all operation for an school.
* @Author:Harsh Singhal
*/
defined('BASEPATH') OR exit('No direct script access allowed');

header('Access-Control-Allow-Origin: *');
Class Home extends CI_CONTROLLER {
  /**
  *  @function   :__construct()
  *  @param      :none
  *  @Method     :none
  *  @return     :none
  *  @brief      :Called automatically by class
  *  @caller     :class
  */


  public function __construct()
  {

    parent::__construct();
    $this->load->database();
    $this->load->library('form_validation');
    $this->load->model('home_model','hm');
   }

public function index(){
    $this->load->view('index');
}

public function bill(){
    $this->load->view('bill');
}

public function order(){
    $this->load->view('order');
}


  public function add_bill(){
      $item = array();
      $quantity = array();
      $price = array();
      $name = $this->input->post('name');
      $mobile = $this->input->post('mobile');
      $address = $this->input->post('address');
      $noi = $this->input->post('noi');
      $due = $this->input->post('due');
      $dd = $this->input->post('dd');
      if(!$due){
        $due = 0;
      }
      if(!$due){
        $dd = null;
      }
      for($i = 1; $i<= $noi; $i++){
        $fetchItem = "item".$i;
        $item[$i-1] = $this->input->post($fetchItem);
        $fetchQuantity = "quantity".$i;
        $quantity[$i-1] = $this->input->post($fetchQuantity);
        $fetchPrice = "price".$i;
        $price[$i-1] = $this->input->post($fetchPrice);
      }

// echo 'hi'.$dd;echo "<br>";
// echo date("Y-m-d");
// die;
$insert_data = array(
    'name'=>$name,
    'mobile'=>$mobile,
    'address'=>$address,
    'time'=> date("Y/m/d"),
    'due' => $due,
    'dd'=>$dd
);
$total_amount = 0;
$order_id = $this->hm->insert_order($insert_data);
      for($i = 0; $i< $noi; $i++){
      $insert_data = array(
        'order_id' => $order_id,
        'item' => $item[$i],
        'quantity' => $quantity[$i],
        'price' => $price[$i]
      );
      $total_amount = $total_amount + $price[$i];
      $this->hm->insert_order_details($insert_data);
    }
    $data = array(
    'name'=>$name,
    'mobile'=>$mobile,
    'address'=>$address,
    'order_id'=> $order_id,
    'total_amount' => $total_amount,
    'due'=>$due,
    'dd'=>$dd,
    'date'=>date("Y/m/d")
    );
$data['details'] = array();
      for($i = 0; $i< $noi; $i++){
        $data['details'][$i]['item'] = $item[$i];
        $data['details'][$i]['quantity'] = $quantity[$i];
        $data['details'][$i]['price'] = $price[$i];
      }
    $this->load->view('reciept',$data);
}

  





}
?>