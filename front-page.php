<?php
include 'connect.php';

if(isset($_POST['submit'])){
	$name = $_POST['Name'];
	$pno = $_POST['Phone_no'];
	$email = $_POST['Email'];
	$ds = $_POST['Description'];

	$sql = "INSERT INTO user_info VALUES ('$name', $pno, '$email','$ds')";
  
	 $res=mysqli_query($conn,$sql);
	 if($res){
		
		exit();
	 }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="front-page.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
      integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <header>
      <a href="#" class="logo" style="color: rgb(218, 218, 218);
      text-shadow: -0.3px 0.3px 0 #000, 0.3px 0.3px 0 #000,
        0.3px -0.3px 0 #000, -0.3px -0.3px 0 #000;">Digital
        <span style="color: rgb(106, 187, 214)"
          >Touch</span
        >
      </a>
      <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a style="color: rgb(106, 187, 214)" href="#srv">Services</a></li>
        <li><a href="#rch">About</a></li>
        <li><a href="#cnt">Contact Us</a></li>
        <li><a href="#flw">Follow Us</a></li>
      </ul>
      <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
    </header>
    <section class="banner">
      <h2>
        Digital<span style="color: rgb(106, 187, 214)"> Touch </span>is a
        <span style="color: rgb(106, 187, 214)">Bridge</span> <br />
        that <span style="color: rgb(106, 187, 214)">Connects</span> you with
        the <span style="color: rgb(106, 187, 214)">Digital World</span>.
      </h2>
      <section class="vid">
        <video src="img2/glow2.mp4" autoplay="" muted="" loop=""></video>
        <div class="slider">
          <div class="slides">
            <!--radio buttons start-->
            <input type="radio" name="radio-btn" id="radio1" />
            <input type="radio" name="radio-btn" id="radio2" />
            <input type="radio" name="radio-btn" id="radio3" />
            <input type="radio" name="radio-btn" id="radio4" />
            <!--radio buttons end-->
            <!--slide images start-->
            <div class="slide first">
              <img src="img2/adv.jpg" alt="" />
            </div>
            <div class="slide">
              <img src="img2/grp.jpg" alt="" />
            </div>
            <div class="slide">
              <img src="img2/pg.jpg" alt="" />
            </div>
            <div class="slide">
              <img src="img2/pic1.jpg" alt="" />
            </div>
            <!--slide images end-->
            <!--automatic navigation start-->
            <div class="navigation-auto">
              <div class="auto-btn1"></div>
              <div class="auto-btn2"></div>
              <div class="auto-btn3"></div>
              <div class="auto-btn4"></div>
            </div>
            <!--automatic navigation end-->
          </div>
          <!--manual navigation start-->
          <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
          </div>
          <!--manual navigation end-->
        </div>
      </section>
    </section>
    <section id="servi">
      <div class="popup" id="popup-1">
        <div class="overlay"></div>
        <div class="popup-content">
          <div class="close-btn" onclick="togglepopup1()">&times;</div>
          <h1>title</h1>
          <div class="para">
            <p>
              Lorem 1 ipsum dolor sit amet consectetur adipisicing elit. Numquam
              odio commodi nemo necessitatibus itaque, odit accusamus ullam
              voluptates, officiis, cupiditate eius et architecto sit. Saepe eum
              culpa dicta tenetur cum.
            </p>
            <img
              class="img-para"
              src="img2/adv.jpg"
              style="height: 200px; width: 400px"
              alt=""
            />
          </div>
        </div>
      </div>
      <div class="popup" id="popup-2">
        <div class="overlay"></div>
        <div class="popup-content">
          <div class="close-btn" onclick="togglepopup2()">&times;</div>
          <h1>title</h1>
          <div class="para">
            <p>
              Lorem 2 ipsum dolor sit amet consectetur adipisicing elit. Numquam
              odio commodi nemo necessitatibus itaque, odit accusamus ullam
              voluptates, officiis, cupiditate eius et architecto sit. Saepe eum
              culpa dicta tenetur cum.
            </p>
            <img
              class="img-para"
              src="img2/adv.jpg"
              style="height: 200px; width: 400px"
              alt=""
            />
          </div>
        </div>
      </div>
      <div class="popup" id="popup-3">
        <div class="overlay"></div>
        <div class="popup-content">
          <div class="close-btn" onclick="togglepopup3()">&times;</div>
          <h1>title</h1>
          <div class="para">
            <p>
              Lorem 3 ipsum dolor sit amet consectetur adipisicing elit. Numquam
              odio commodi nemo necessitatibus itaque, odit accusamus ullam
              voluptates, officiis, cupiditate eius et architecto sit. Saepe eum
              culpa dicta tenetur cum.
            </p>
            <img
              class="img-para"
              src="img2/adv.jpg"
              style="height: 200px; width: 400px"
              alt=""
            />
          </div>
        </div>
      </div>
      <div class="popup" id="popup-4">
        <div class="overlay"></div>
        <div class="popup-content">
          <div class="close-btn" onclick="togglepopup4()">&times;</div>
          <h1>title</h1>
          <div class="para">
            <p>
              Lorem 4 ipsum dolor sit amet consectetur adipisicing elit. Numquam
              odio commodi nemo necessitatibus itaque, odit accusamus ullam
              voluptates, officiis, cupiditate eius et architecto sit. Saepe eum
              culpa dicta tenetur cum.
            </p>
            <img
              class="img-para"
              src="img2/adv.jpg"
              style="height: 200px; width: 400px"
              alt=""
            />
          </div>
        </div>
      </div>
      <div class="popup" id="popup-5">
        <div class="overlay"></div>
        <div class="popup-content">
          <div class="close-btn" onclick="togglepopup5()">&times;</div>
          <h1>title</h1>
          <div class="para">
            <p>
              Lorem 5 ipsum dolor sit amet consectetur adipisicing elit. Numquam
              odio commodi nemo necessitatibus itaque, odit accusamus ullam
              voluptates, officiis, cupiditate eius et architecto sit. Saepe eum
              culpa dicta tenetur cum.
            </p>
            <img
              class="img-para"
              src="img2/adv.jpg"
              style="height: 200px; width: 400px"
              alt=""
            />
          </div>
        </div>
      </div>
      <div class="popup" id="popup-6">
        <div class="overlay"></div>
        <div class="popup-content">
          <div class="close-btn" onclick="togglepopup6()">&times;</div>
          <h1>title</h1>
          <div class="para">
            <p>
              Lorem 6 ipsum dolor sit amet consectetur adipisicing elit. Numquam
              odio commodi nemo necessitatibus itaque, odit accusamus ullam
              voluptates, officiis, cupiditate eius et architecto sit. Saepe eum
              culpa dicta tenetur cum.
            </p>
            <img
              class="img-para"
              src="img2/adv.jpg"
              style="height: 200px; width: 400px"
              alt=""
            />
          </div>
        </div>
      </div>
      <h2 id="srv" style="color: black; margin-top: -140px; font-size: 40px">
        Services
      </h2>
      <div class="container" >
        <div class="box">
          <div class="vidbox">
            <img src="img2/pic1.jpg" alt="" />
          </div>
          <div class="contentBx">
            <div class="content">
              <p class="cap">Caption One</p>
              <a class="button" onclick="togglepopup1()">Dive In</a>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="vidbox">
            <img src="img2/pic2.jpg" alt="" />
          </div>
          <div class="contentBx">
            <div class="content">
              <p class="cap">Caption Two</p>
              <a class="button" onclick="togglepopup2()">Dive In</a>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="vidbox">
            <img src="img2/adv.jpg" alt="" />
          </div>
          <div class="contentBx">
            <div class="content">
              <p class="cap">Caption One</p>
              <a class="button" onclick="togglepopup3()">Dive In</a>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="vidbox">
            <img src="img2/grp.jpg" alt="" />
          </div>
          <div class="contentBx">
            <div class="content">
              <p class="cap">Caption One</p>
              <a class="button" onclick="togglepopup4()">Dive In</a>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="vidbox">
            <img src="img2/pg.jpg" alt="" />
          </div>
          <div class="contentBx">
            <div class="content">
              <p class="cap">Caption One</p>
              <a class="button" onclick="togglepopup5()">Dive In</a>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="vidbox">
            <img src="img2/web-d.jpg" alt="" />
          </div>
          <div class="contentBx">
            <div class="content">
              <p class="cap">Caption One</p>
              <a class="button" onclick="togglepopup6()">Dive In</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr style="margin-top: 100px;">
    <p id="rch">Reach Us</p>
    <div class="map" >
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14738.
        842145350294!2d72.923825!3d22.5525136!3m2!1i1024!2i768!4f13.1!3m3!1m2!
        1s0x0%3A0xab364c66fd4834c!2sBirla%20Vishvakarma%20Mahavidyalaya%20(BVM)!
        5e0!3m2!1sen!2sin!4v1659850678822!5m2!1sen!2sin" 
        width="650" height="400" style="border:0; margin-left: 450px; margin-top: 60px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="contact">
      <h2 id="cnt" style="font-size: 36px;
        font-weight: 500;
        color: #000; margin-bottom: 0px;">Contact Us</h2>
      <div class="cont-content">
    </div>
    <div class="cont-container">
        <div class="contextInfo">
            <div class="cont-box">
                <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                <div class="text">
                    <h3 style="font-weight: 500;
                    color: #00bcd4;">Address</h3>
                    <p style="font-weight: 300;
                    color: #000;">text-text-text-text-text-text</p>
                </div>
            </div>
            <div class="cont-box">
                <div class="icon"><i class="fa-solid fa-phone"></i></div>
                <div class="text">
                    <h3 style="font-weight: 500;
                    color: #00bcd4;">Phone-No</h3>
                    <p>texttexttext</p>
                </div>
            </div>
            <div class="cont-box">
                <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                <div class="text">
                    <h3 style="font-weight: 500;
                    color: #00bcd4;">Email</h3>
                    <p style="font-weight: 300;
                    color: #000;">texttexttext</p>
                </div>
            </div>
        </div>
        <div class="contactForm">
            <form action="" method="post">
                <div class="inBox">
                    <input type="text" name="Name" required="required">
                    <span style="position: absolute;
                    left: 0;
                    padding: 5px 0;
                    font-size: 16px;
                    margin: 10px 0;
                    pointer-events: none;
                    transition: 0.5s;
                    color: #666;">Full Name</span>
                </div>
                <div class="inBox">
                  <input type="text" name="Phone_no" required="required">
                  <span style="position: absolute;
                  left: 0;
                  padding: 5px 0;
                  font-size: 16px;
                  margin: 10px 0;
                  pointer-events: none;
                  transition: 0.5s;
                  color: #666;">Phone-No</span>
              </div>
                <div class="inBox">
                    <input type="text" name="Email" required="required">
                    <span style="position: absolute;
                    left: 0;
                    padding: 5px 0;
                    font-size: 16px;
                    margin: 10px 0;
                    pointer-events: none;
                    transition: 0.5s;
                    color: #666;">Email</span>
                </div>
                <div class="inBox">
                    <input type="text" name="Description" required="required">
                    <span style="position: absolute;
                    left: 0;
                    padding: 5px 0;
                    font-size: 16px;
                    margin: 10px 0;
                    pointer-events: none;
                    transition: 0.5s;
                    color: #666;">Type your request...</span>
                </div>
                <div class="inBox">
                    <input type="submit" name="" value="Send">
                </div>
                
            </form>
        </div>
    </div>
    </div>
    </div>
    <footer id="flw">
      <div class="foot-cont">
        <div class="row">
          <div class="foot-col">
            <h4>Follow us</h4>
            <div class="social-links">
              <a class="s-lnk" href="#"><i class="fab fa-instagram"></i></a>
              <a class="s-lnk" href="#"><i class="fab fa-facebook-f"></i></a>
              <a class="s-lnk" href="#"><i class="fab fa-twitter"></i></a>
              <a class="s-lnk" href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script type="text/javascript">
      var counter = 1;
      setInterval(function () {
        document.getElementById("radio" + counter).checked = true;
        counter++;
        if (counter > 4) {
          counter = 1;
        }
      }, 5000);
      window.addEventListener("scroll", function () {
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
      });
      const navSlide = () => {
        const burger = document.querySelector(".burger");
        const nav = document.querySelector(".nav-links");
        const navLink = document.querySelectorAll(".nav-link li");

        burger.addEventListener("click", () => {
          nav.classList.toggle("nav-active");
          navLink.forEach((link, index) => {
            if (link.style.animation) link.style.animation = "";
            else
              link.style.animation = `navLinkfade 0.5s ease forwards ${
                index / 7 + 1.5
              }s`;
          });
          burger.classList.toggle("toggle");
        });
      };

      function togglepopup1() {
        document.getElementById("popup-1").classList.toggle("active");
      }
      function togglepopup2() {
        document.getElementById("popup-2").classList.toggle("active");
      }
      function togglepopup3() {
        document.getElementById("popup-3").classList.toggle("active");
      }
      function togglepopup4() {
        document.getElementById("popup-4").classList.toggle("active");
      }
      function togglepopup5() {
        document.getElementById("popup-5").classList.toggle("active");
      }
      function togglepopup6() {
        document.getElementById("popup-6").classList.toggle("active");
      }
      navSlide();
    </script>
  </body>
</html>
