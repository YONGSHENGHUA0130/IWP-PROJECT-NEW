<!DOCTYPE html>
<html>
    <head>
        <title>
            The Econ at Genting
        </title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="FirstWorld.css">
        <link rel="stylesheet" type="text/css" href="header.css">

    </head>

    <body>
    <div class="navbar">
        <div class="logo">
            <img src="../images/hotel-icon.png  " width="20px">
            <h1> First World Hotel</h1>
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
<div class="container">
            <div class="header1">
        <div class="slideshow-container">

            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="../images/theecon.jpg" style="width:70%">
              <div class="text">The ECON at Genting Highlands</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <img src="../images/theecon_view.jpg" style="width:70%">
              <div class="text">The view</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img src="../images/theecon_room.jpg" style="width: 70%">
              <div class="text">Room</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>

            </div>
            <br>

            <div style="text-align:center">
              <span class="dot" onclick="currentSlide(1)"></span>
              <span class="dot" onclick="currentSlide(2)"></span>
              <span class="dot" onclick="currentSlide(3)"></span>
            </div>

        </div>

        <hr>
        <div class="backgroundcolor2">
          <div>
            <fieldset>
              <h1>The ECON at Genting Highlands</h1>

              <div class="manytext">The ECON at Genting Highlands offers wellness packages and a fitness room, as well as air-conditioned accommodation in Genting Highlands, 6.3 km from First World Plaza. This property offers access to a balcony and free private parking. The apartment provides a pool with a view with a pool bar, as well as spa facilities and a 24-hour front desk.</div>
            </fieldset>
          </div>
          <br>
          <div>
            <fieldset>
              <div class="manytext2"> Facilities</div>
              <div class="manytext">
                <ol>
                  <li>Front desk [24-hour]</li>
                  <li>Free parking</li>
                  <li>Free Wi-Fi in all rooms!</li>
                  <li>Non-smoking rooms</li>
                  <li>Fitness center</li>
                  <li>Swimming pool [indoor]</li>
                  <li>Family rooms</li>
                  <li>Bar</li>
                </ol>
              </div>
            </fieldset>
          </div>
          <hr>
          <div class="booking">
        <p class="manytext2 pattern">Select Date</p>
        <form>
            <p class="manytext">Check-in date
            <input type="date" id="check_indate" value="2023-06-04" min="2023-06-04">
            </p>
          </form>
        <form>

            <p class="manytext">
            Check-out date
            <input type="date" id="check_outdate" value="2023-06-05" min="2023-06-04">
            </p>
          </form>
        <form>

            <hr>
          <p class="manytext2 pattern">
          Select room
          </p>
          <p class="manytext">
            Family Suite with Balcony <b>(RM585/night)</b>
            <input style="margin-left:10px"type="number" value="1" min="0" max="31">
          </p>
          <p class="manytext">
            1 extra-large double bed  and 1 bunk bed.
          </p>
          <div class="row">
            <div class="column">
          <img src="../images/theecon_familysuite.jpg" alt="executive resident" style="width:100%;height:auto">
          </div>
          <div class="column">
          <img src="../images/theecon_familysuite2.jpg" alt="executive resident" style="width:50%;height:auto">
          </div>
          <div class="column">
            <img src="../images/theecon_familysuite3.jpg" alt="executive resident" style="width:50%;height:auto">
            </div>
          </div>
        </form>
<hr>
          <div class="image2">
          <form>
            <p class="manytext">
              Two Bedroom Suite<b>(Rm 650/night)</b>

              <input style="margin-left:90px"type="number" value="1" min="0" max="31">
            </p>
            <p class="manytext">
                <b>Bedroom 1:</b> 1 extra-large double bed<br>
                <b>Bedroom 2: </b> 2 single beds<br>
                <b>Bathrooms:</b> 2
            </p>
          </div>
            <div class="row">
              <div class="column">
              <img src="../images/theecon_doubleroom.jpg" style="width:100%;height:auto">
              </div>
            </form>
          </div>
          <hr>
          <div class="image2">
            <form>
              <p class="manytext">
                Deluxe Studio <b>(RM395/night)</b>
                <input style="margin-left:77px"type="number" value="1" min="0" max="31">
              </p>
            </form>
            </div>
                <div class="row">
                  <div class="column">
                <img src="../images/theecon_Deluxedouble.jpg" style="width:90%;height:auto">
                  </div>
          </div>
<hr>
  <div class="manytext2 pattern">
    <br>
    Breakfast
  </div>
  <div class="manytext">
    We have breakfast buffet for you and the price is<b> Rm 38/person </b>.<br>
    Would you like it?
  </div>
  <form class="manytext">
  <input type="radio" id="yes" name="breakfast" value="YES">Yes
  <input type="radio" id="no" name="breakfast" value="NO">No
  <br>
  How many person:
  <input type="number" min="1" value="1">
  </form>
  <br><br>


  <a class="bookbtn" href="Payment.php">Book</a>
          </div>
        <script>
          let slideIndex = 1;
          showSlides(slideIndex);

          function plusSlides(n) {
            showSlides(slideIndex += n);
          }

          function currentSlide(n) {
            showSlides(slideIndex = n);
          }

          function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
          }
          </script>

</html>







