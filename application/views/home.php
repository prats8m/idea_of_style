<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet' type='text/css'>
<link href="https://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>   
<style>
</style>

<script>
function createList(){
    for(var idx = 1;idx<=document.getElementById("noi").value;idx++){
        document.getElementById("demo").innerHTML += '<div class="col-xs-4" ><input type="text" class="form-control " name="item'+idx+'" placeholder="Item '+idx+'" ></div><div class="col-xs-4" ><input type="number" class="form-control " name="quantity'+idx+'" placeholder="quantity '+idx+'"></div><div class="col-xs-4" ><input type="number" class="form-control " name="price'+idx+'" placeholder="Price '+idx+'"></div><br>';
    }
}
</script>
</head>

<body>
<div class="row">
<center>
<img src="http://www.ideaofstyle.tk/idea_of_style/assests/logo.png">
</center>
<form action="http://www.ideaofstyle.tk/idea_of_style/index.php/home/add_bill" method="post">
<div class="col-xs-12 " >
  <div class="form-group ">
    <input type="name" class="form-control" name="name" placeholder="Name">
  </div>
</div>
<div class="col-xs-12 ">
  <div class="form-group">
    <input type="number" class="form-control" name="mobile" placeholder="Mobile">
  </div>
</div>
<div class="col-xs-12">
  <div class="form-group ">
    <input type="address" class="form-control" name="address" placeholder="Address">
  </div>
</div>
<div class="col-xs-12">
  <div class="form-group ">
    <input type="noi" class="form-control" id="noi" name="noi" onchange="createList()" placeholder="Number of Items">
  </div>
</div>
<div id="demo">
</div>
<div class="col-xs-12">
  <div class="form-group ">
    <input type="number" class="form-control" name="due" placeholder="Balance Due">
  </div>
</div>
<div class="col-xs-12">
  <div class="form-group ">Delivery Date
    <input type="date" class="form-control" name="dd" placeholder="Balance Due">
  </div>
</div>

<div class="col-xs-2 col-xs-offset-5">
<button type="submit" class="btn btn-default">Submit</button>
</div>
</form>

</div>


</body>
</html>
