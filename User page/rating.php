
<!DOCTYPE html>

<html lang="en" dir="ltr";>
<head>
    <meta charset="utf-8">
    <title>Rating US</title>
    <link rel="stylesheet" type="text/css" href="rating.css">
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="navbar">
        <div class="logo">
            <img src="../images/rating-icon.jpg" width="20px">
            <h1> RATING US</h1>
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

    <div class="headingrate">
        <h1>Rating & Feedback</h1>
        <h2>Thank you for taking time to provide feedback. We appreciate hearing from
            you and will review your feedback carefully.
        </h2>
    </div>

    <form name="newrating" method="post">
        <div class="body">
            <div class="rate_details">
                <textarea cols="30" placeholder="Enter Your Name" name="rate_name"></textarea>  
                <textarea cols="20" placeholder="Enter Your Email" name="rate_email"></textarea>
            </div>
        </div>

        <div class="container">
            <div class="heading2rate">
                <h1>How Would You Rate Our Page</h1>
            </div>
            <div class="post">
                <div class="text">Thanks for your rating and feedback!</div>
                <div class="edit">EDIT</div>
            </div>
            <div class="star-widget">
                <input type="radio" name="rate" id="rate-5">
                <label for="rate-5" class="fa fa-star"></label>

                <input type="radio" name="rate" id="rate-4">
                <label for="rate-4" class="fa fa-star"></label>

                <input type="radio" name="rate" id="rate-3">
                <label for="rate-3" class="fa fa-star"></label>

                <input type="radio" name="rate" id="rate-2">
                <label for="rate-2" class="fa fa-star"></label>

                <input type="radio" name="rate" id="rate-1">    
                <label for="rate-1" class="fa fa-star"></label>

                <form action="#">
                    <header>
                    </header>
                    <div class="textarea">
                        <textarea cols="30" placeholder="Leave your comment here.." name="rate_comment"></textarea>
                    </div>
                    <div class="btn">
                        <button type="submit" name="savebtn" value="savecomment">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    

    <script>
        const btn = document.querySelector("button");
        const post = document.querySelector(".post");
        const widget = document.querySelector(".star-widget");
        const editBtn = document.querySelector(".edit");
        btn.onclick =()=>
        {
            widget.style.display="none";
            post.style.display="block";
            heading2rate.style.display="block";
            editBtn.onclick =()=>
            {
                widget.style.display="block";
                post.style.display="none";
            }
            
            return false;
        }
    </script>
    </form>
</body>
</html>


<?php
include("dataconnection.php");
if(isset($_POST["savebtn"])) 	
{
	$rname = $_POST["rate_name"];  	
	$remail = $_POST["rate_email"];  	
	$rcomment = $_POST["rate_comment"];  	
	  	
	
	$sql = mysqli_query($connect,"INSERT INTO rating(rate_name, rate_email, rate_comment) VALUES ('$rname','$remail','$rcomment') ");

	if($sql)
	{
	?>
		<script type="text/javascript">
			alert("Thanks for your rating and feedback ! ");
		</script>
	<?php
    header("refresh:0.5; url=home.html");
	}
	
}

?>



