  <?php
  session_start();
  include "db_conn.php";
global $trackingId;
global $sname;
global $rname;
global $from;
global $to;
global $email;
global $sphone;
global $rphone;
global $weight;
global $price;
global $trn_date;
$mailID=$_SESSION['user'];
if(isset($_POST['new'])==1){
    $trackingId=uniqid();
$sname=$_REQUEST['sname'];
$rname=$_REQUEST['rname'];
$from=$_REQUEST['from'];
$to=$_REQUEST['to'];
$sphone=$_REQUEST['sphone'];
$rphone=$_REQUEST['rphone'];
$weight=$_REQUEST['weight'];
$price=$_REQUEST['price'];
$trn_date=date("Y-m-d H:i:s");

$qry = "INSERT INTO `orders`(`trackingId`, `sender_name`, `sender_address`, `sender_contact`, `recipient_name`, `recipient_address`, `recipient_contact`, `weight`, `price`, `date_created` , `email` ) VALUES ('$trackingId','$sname','$from','$sphone','$rname','$to','$rphone','$weight','$price','$trn_date','$mailID')";
mysqli_query($conn,$qry);
    php_alert("Order Placed Successfully.");
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript">
        function calc(val)
        {
           document.getElementById('price').value=document.getElementById('weight').value*100;
             }
    </script>
        <title>Shipment Page</title>
        <style>
            * {
                margin: 0;
                padding: 0;
            }

            body {
  background-image: url(pic1.jpg);
                background-position: center;
                background-size: cover;
  font-family:  sans-serif;
}
.ul{
    padding: 8px;
}
    ul {
        top: 0;
        position: sticky;
        z-index: 2;
      font-size: 14px;
      list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  }

 
li{
display: inline;
float: left;
}
li a{
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
}
li a:hover {
  background-color: #111;
}
            .regform {
                width: 800px;
                background-color: rgba(0, 0, 0, 0.6);
                margin-left: 360px;
                margin-top: 10px;
                color: #FFFFFF;
                padding: 10px 0px 10px 0px;
                text-align: center;
                border-radius: 15px 15px 0px 0px;
            }

            .main {
                background-color: rgba(0, 0, 0, 0.5);
                width: 800px;
                margin: auto;
            }

            form {
                padding: 10px;

            }

            #name {
                width: 100%;
                height: 100px;


            }

            .name {
                margin-left: 25px;
                margin-top: 20px;
                width: 125px;
                color: white;
                font-size: 15px;
                font-weight: 700;

            }

                        input[type=text],.email{
                position: relative;
                left: 200px;
                top: -37px;
                line-height: 40px;
                width: 480px;
                border-radius: 6px;
                padding: 0 22px;
                font-size: 16px;
                color: #555;
            }
           .weight {
                position: relative;
                left: 200px;
                top: -37px;
                line-height: 40px;
                width: 526px;
                border-radius: 6px;
                padding: 13px;
                font-size: 16px;
                color: #555;
            }
        
            
            .number {
                position: relative;
                left: 200px;
                top: -37px;
                line-height: 40px;
                width: 265px;
                border-radius: 6px;
                padding: 0 22px;
                font-size: 16px;
                color: #555;

            }

            

            
                   
            

            .btn2 {
                background-color: #3BAF9F;
                display: block;
                margin: 20px 0px 0px 20px;
                text-align: center;
                border-radius: 12px;
                border: 2px solid #366437;
                padding: 14px 110px;
                outline: none;
                color: white;
                cursor: pointer;
                transition: 0.25px;
                margin-left: 230px;
            }
        </style>
    </head>

    <body>
        <div class="ul">
        <ul>
            <li><a href="dashboard.php">Home</a></li>
  <li><a href="userPayments.php">Payment</a></li>
  <li><a href="add_shipment.php">Add shipment</a></li>
  <li><a href="orderHistory.php">Order History</a></li>
  <li><a href="track.php">Track</a></li>
  <li><a href="cancelRequest.php">Cancel Order</a></li>
  <li><a href="feedback.php">Feedback</a></li>
  <li><a href="contact.php">Contact us</a></li>
            <li style="float:right"><a href="logout.php">Logout</a></li>
        </ul>
    </div>
        <div class="bg">
        <div class="regform">

            <h1>Shipment Details</h1>
        </div>
        <div class="main">
            <form action="" method="POST"  id="frm1">
          <input type="hidden" name="new" value="1" />
                <div id="name">
                    <h2 class="name">Sender's Name</h2>
                    <input type="text" class="sname" name="sname"><br>
                    </div>
                <div id="name">
                    <h2 class="name">Receiver's Name</h2>
                    <input type="text" class="rname" name="rname"><br>
                    </div>
               <div id="name">  <h2 class="name">From</h2>
                <input type="text" class="from" name="from" placeholder="Enter Street, City, State, Country, Pincode"></div>

                <div id="name"><h2 class="name">To</h2>
                <input type="text" class="to" name="to" placeholder="Enter Street, City, State, Country, Pincode"></div>

                <div id="name"><h2 class="name">Sender's Phone</h2>
                <input type="text" class="number" name="sphone" placeholder="Enter your Phone Number"></div>
                 <div id="name"><h2 class="name">Receiver's Phone</h2>
                <input type="text" class="number" name="rphone" placeholder="Enter your Phone Number"></div>
                <div id="name"><h2 class="name">Weights(in kgs)</h2>
                <select class="weight" id="weight" name="weight" placeholder="kgs" onchange="calc(this.val)" oninput="calc(this.val)"required>
                    <option value="" disabled selected>Choose your option</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
            <option value="32">32</option>
            <option value="33">33</option>
            <option value="34">34</option>
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
            <option value="41">41</option>
            <option value="42">42</option>
            <option value="43">43</option>
            <option value="44">44</option>
            <option value="45">45</option>
            <option value="46">46</option>
            <option value="47">47</option>
            <option value="48">48</option>
            <option value="49">49</option>
            <option value="50">50</option>
        </select></div>
                <div id="name"><h2 class="name" >Price</h2>
                <input type="text" id="price" class="price" name="price" readonly>
                </div>
                <div id="name"><input type="submit" name="submit" value="Place an order" class="btn2"></div> 
           </form>

        </div>
    </div>
      
    </body>
</html>