<?php session_start() ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}
input[type=number] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
select {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=email] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
<?php 
include("connection.php");
if(isset($_GET['price'])){
  $_SESSION['price']=$_GET['price'];
}
if(isset($_GET['qty'])){
  $_SESSION['qty']=$_GET['qty'];
}
  
if(isset($_GET['pro'])){
  $_SESSION['pro']=$_GET['pro'];

}
$product = $_SESSION['pro'];
$price = $_SESSION['price'];
$qty = $_SESSION['qty'];
?>
</head>
<body>
<span style="color:red"><?php if(isset($_GET['error'])){ echo $_GET['error']; } ?></span>
<h2>Billing Information</h2>
<p></p>
<div class="row">
  <div class="col-75">
    
    <div class="container">
      <form method="POST" >
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe" required> 
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="email" id="email" name="email" placeholder="john@example.com" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York" required>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY" required>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="number" id="zip" name="zip" pattern=".{0}|.{6,}" placeholder="10001" onKeyPress="if(this.value.length==6) return false;" required>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe" required>
            <label for="ccnum">Credit card number</label>
            <input type="number" id="ccnum" name="cardnumber" pattern=".{0}|.{16,}" placeholder="1111-2222-3333-4444" required onKeyPress="if(this.value.length==16) return false;">
            <label for="expmonth">Exp Month</label>
            <select id='expmonth' name="expmonth" required>
                <option value=''>--Select Month--</option>
                 <option value='Jan'>Janaury</option>
                 <option value='Feb'>February</option>
                  <option value='Mar'>March</option>
                 <option value='Apr'>April</option>
                 <option value='May'>May</option>
                 <option value='Jun'>June</option>
                 <option value='Jul'>July</option>
                <option value='Aug'>August</option>
                 <option value='Sep'>September</option>
                 <option value='Oct'>October</option>
                 <option value='Nov'>November</option>
                 <option value='Dec'>December</option>
            </select> 
            <br>
           <!-- <input type="text" id="expmonth" name="expmonth" placeholder="September" required> -->
           <br>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="number" required  id="expyear" name="expyear" placeholder="2018" onKeyPress="if(this.value.length==4) return false;" >
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="number" id="cvv" name="cvv" placeholder="123" required onKeyPress="if(this.value.length==3) return false;">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          
        </label>
        <input type="submit" value="Pay" class="btn" name="paybutton">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b></b></span></h4>
      <p><?php echo $product;  ?> <span class="price"><?php echo $qty ; ?></span></p>
      <p>$ per unit : <?php echo $price; ?> <span class="price"></span></p>
      <p> <span class="price"><?php echo $qty;?> x <?php echo $price;?> </span></p>
      <p> <span class="price"></span></p>
       <p> <span class="price"></span></p>
       <br>
      <hr>
      <?php $total=$price*$qty; ?>
      <p>Total <span class="price" style="color:black"><b><?php echo $total; ?></b></span></p>
    </div>
   
  </div>
</div>
<?php 
if(isset($_POST['paybutton']))
{
  include("connection.php");
  $cardname=$_POST['cardname'];
  $cvv=$_POST['cvv'];
  $cardno=$_POST['cardnumber'];
  $expyear=$_POST['expyear'];
  $expmonth=$_POST['expmonth'];
  $fname=$_POST['firstname'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $zip=$_POST['zip'];
  $state=$_POST['state'];
  if(strlen($cardno)<16) {
    header("Location:checkout.php?error=Enter valid card number");
    goto end;
  }
  if(strlen($zip)<6) {
    header("Location:checkout.php?error=Enter valid zip code");
    goto end;
  }
  if(strlen($cvv)<3) {
    header("Location:checkout.php?error=Enter valid cvv number");
    goto end;
  }
  if(strlen($expyear)<4) {
    header("Location:checkout.php?error=Enter valid expiry date");
    goto end;
  }

  $query1="insert into stockpayment(F_name,Email,Address,City,Zip,State,Cardname,Cardno,Expmonth,Cvv,Expyear) values ('$fname','$email','$address','$city','$zip','$state','$cardname','$cardno','$expmonth','$cvv','$expyear')";
  
  $inp=mysql_query($query1,$con);
  if(!$inp){
    echo "error".mysql_error($con);
  }

  if($inp){
    $_SESSION['payment_success'] = "Payment Success";
  }

$query="select * from stock";
$result=mysql_query($query,$con);
$res=mysql_fetch_array($result);
if($product=='Consumables') 
{
  $t=$qty;
  $query2="update stock set Consumables=Consumables+$t";
  mysql_query($query2,$con);
  header("Location:admindash.php");
}
if($product=='Body Parts')
{
   $t=$qty;
  $query3="update stock set Body=Body+$t";
  mysql_query($query3,$con);
  header("Location:admindash.php");
}
if($product=='Engine Parts')
{
   $t=$qty;
  $query4="update stock set Engine=Engine+$t";
  mysql_query($query4,$con);
  header("Location:admindash.php");
}
end:
}
?>
</body>
</html>
