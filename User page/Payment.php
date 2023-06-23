
<!DOCTYPE html>
<html>
<head>
    <title>Payment</title>
    <link rel="stylesheet" type="text/css" href="Payment.css">
    <link rel="stylesheet" type="text/css" href="header.css">
</head>
<body>
<div class="navbar">
        <div class="logo">
            <img src="../images/payment-icon.png" width="20px">
            <h1> Payment</h1>
        </div>

        <div class="menu">
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="about.html">About Genting Highlands</a></li>
            <li><a href="Hotel.html">Hotel</a></li>
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="ContactUs.html">Contact Us</a></li>
            <li><a href="rating.php">Rate </a></li>
                </ul>
        </div>
    </div>
    <div class="body">
    <form method="post" action="">
    <div class="container" >


        <h1>Confirm Your Payment</h1>
        <div class="first-row">
            <div class="owner">
                <h3>Owner</h3>
                <div class="input-field" >
                    <input type="text" placeholder="Name" name="payment_name" >
                </div>
            </div>
            <div class="cvv">
                <h3>CVV</h3>
                <div class="input-field">
                    <input type="password" maxlength="3" placeholder="111">
                </div>
            </div>
        </div>
        <div>
            <div class="card-number">
                <h3>Card Number</h3>
                <div class="input-field" >
                    <input type="text" maxlength="19" placeholder="1111-2222-3333-4444 (Enter with - )" name="payment_cardnumber">
                </div>
            </div>
        </div>
        <div>
            <h3>Exp. Date</h3>
            <div class="selection">
                <div class="date">
                    <select name="months" id="months">
                        <option value="Jan">Jan</option>
                        <option value="Feb">Feb</option>
                        <option value="Mar">Mar</option>
                        <option value="Apr">Apr</option>
                        <option value="May">May</option>
                        <option value="Jun">Jun</option>
                        <option value="Jul">Jul</option>
                        <option value="Aug">Aug</option>
                        <option value="Sep">Sep</option>
                        <option value="Oct">Oct</option>
                        <option value="Nov">Nov</option>
                        <option value="Dec">Dec</option>
                      </select>
                      <select name="years" id="years">
                      <option value="2020">2025</option>
                      <option value="2020">2024</option>
                      <option value="2020">2023</option>
                      <option value="2020">2022</option>
                      <option value="2020">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                      </select>
                </div>
                <div class="cards">
                    <img src="images/mc.png" alt="">
                    <img src="images/vi.png" alt="">
                    <img src="images/pp.png" alt="">
                </div>
                <br>
            </div>
            <h3>Amount（MYR）</h3>
            <div class="input-field">
                <input type="number" placeholder="1222" name="payment_amount">
            </div>
        </div>
        <button class="aa" type="submit" name="savebtn" value="payment" >Confirm </button>


    </div>
    </form>
    </div>
    
</body>
</html>

<?php
include("dataconnection.php");
if(isset($_POST["savebtn"])) 	
{
	$payname= $_POST["payment_name"];  	
	$payamount = $_POST["payment_amount"];  	
	$paynocard = $_POST["payment_cardnumber"];  	
	  	
	
	$sql = mysqli_query($connect,"INSERT INTO payment(payment_name, payment_amount, payment_cardnumber) VALUES ('$payname','$payamount','$paynocard') ");

    if($sql)
	{
	?>
		<script>
		if(confirm("Confirm to make payment"))
        {
            prompt("Please enter your password");
            alert("Payment successful");
        }
        else
        {
            alert("Payment Cancelled");
        }
		</script>
    
	<?php
    header("refresh:0.5; url=home.html");
	}
    
	
}

?>
