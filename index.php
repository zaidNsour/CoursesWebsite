<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnTech</title>
    
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/style.css">
    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Open+Sans:wght@400;700&family=Roboto+Slab&family=Work+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"> 
  </head>
  <body>
    <!--Start header--> 
    <div class="header">
      <div class="logo">
        <img src="images/logo.png" class="img" alt="logo">
      </div>
        <ul class="main-nav">
          <li><a href="#">HOME</a></li>
          <li><a href="#about">ABOUT</a></li>
          <li><a href="#courses">COURSES</a></li>
          <li><a href="#reviews">REVIEWS</a></li>
          <li><a href="#contact">CONTACT</a></li>
        </ul>


        <?php
			  
			  session_start();
			  
		 if(isset($_SESSION['name']))
			{
				$name=$_SESSION['name']; 
        echo"<ul class='main-nav'>";
				echo"<li><a>welcome "."$name"."</a></li>"; 
				echo "<li><a href='logout.php'>Log out</a></li>"; 
        echo "</ul>"; 
			}
			  
	    else
				
			{
           echo  "<ul class='main-nav'>";
           echo  "<li><a href='login.php'>Log in</a></li>";
           echo  "<li><a href='signup.php'>Sign up</a></li>";
           echo  "</ul>";
			}
					  
			  ?>
    </div>
    <!--End header-->

     <!--Start landing-->
     <div class="landing">
      <div class="container">
        <div class="text">
          <h1>WE ENSURE A BETTER EDUCATION <br> FOR A BETTER WORLD</h1>
          <p>
          Our online courses are built in partnership with technology
          leaders and are designed to meet industry demands.
          </p>
        </div>
        <div class="image">
          <img src="images/landing.jpg" alt="">
        </div>
      </div>
    </div>
    <!--End landing-->

    <!-- Start About -->
    <div class="about" id="about">
      <h2 class="main-title">About Us</h2>
      <div class="container">   
        <p>
          <span style="font-size:40px">Learntech</span> is an online learning community with thousands
          of classes for creative and curious people, on topics including 
           programming , Networks , AI , Design , vedio editing and more.
          On Learntech, members come together to find inspiration and 
          take the next step in creative journey.
          </p>
      </div>
    </div>
    <!-- End About -->

    <!--Start courses-->
    <div class="courses" id="courses">
      <h2 class="main-title">COURSES</h2>
      <div class="container">
        
        <div class="product">
          <img src="images/web_dev.png">
          <div class="product-info">
            <h4 class="product-title">Web development</h4>
            <p class="product-price">$129</p>
            <form action="add_to_cart.php" method="post">
                       <input type="hidden" name="productTitle" value="Web">
                       <input type="submit"value="Add to cart" class="product_input" >
                       </form>
          </div>
        </div>

        <div class="product">
          <img src="images/cyber.png">
          <div class="product-info">
            <h4 class="product-title">Cyber Security
            </h4>
            <p class="product-price">$223</p>
            <form action="add_to_cart.php" method="post">
                       <input type="hidden" name="productTitle" value="Cyber">
                       <input type="submit"value="Add to cart" class="product_input" >
                       </form> 
          </div>
        </div>

        <div class="product">
          <img src="images/flutter.png">
          <div class="product-info">
            <h4 class="product-title">Flutter & Dart
            </h4>
            <p class="product-price">$160</p>
             <form action="add_to_cart.php" method="post">
                       <input type="hidden" name="productTitle" value="Flutter">
                       <input type="submit"value="Add to cart" class="product_input" >
                       </form> 
          </div>
        </div>

        <div class="product">
          <img src="images/data.png">
          <div class="product-info">
            <h4 class="product-title">Data Science
              </h4>
            <p class="product-price">$220</p>
            <form action="add_to_cart.php" method="post">
                       <input type="hidden" name="productTitle" value="Data_Science">
                       <input type="submit"value="Add to cart" class="product_input" >
                       </form> 
          </div>
        </div>

        <div class="product">
          <img src="images/cloud.png">
          <div class="product-info">
            <h4 class="product-title">Cloud Computing 
            </h4>
            <p class="product-price">$89</p>
            <form action="add_to_cart.php" method="post">
                       <input type="hidden" name="productTitle" value="cloud">
                       <input type="submit"value="Add to cart" class="product_input">
                       </form> 
          </div>
        </div>

        <div class="product">
          <img src="images/network.png">
          <div class="product-info">
            <h4 class="product-title">Network 
            </h4>
            <p class="product-price">$99</p>
            <form action="add_to_cart.php" method="post">
                       <input type="hidden" name="productTitle" value="network">
                       <input type="submit"value="Add to cart" class="product_input">
                       </form> 
          </div>
        </div>

        <div class="product">
          <img src="images/nlp.png">
          <div class="product-info">
            <h4 class="product-title">NLP
            </h4>
            <p class="product-price">$129</p>
            <form action="add_to_cart.php" method="post">
                       <input type="hidden" name="productTitle" value="nlp">
                       <input type="submit"value="Add to cart" class="product_input" >
                       </form> 
          </div>
        </div>

        <div class="product">
          <img src="images/database.png">
          <div class="product-info">
            <h4 class="product-title">Mango DB
              </h4>
            <p class="product-price">$88</p>
            <form action="add_to_cart.php" method="post">
                       <input type="hidden" name="productTitle" value="mango">
                       <input type="submit"value="Add to cart" class="product_input" >
                       </form> 
          </div>
        </div>

        <div class="product">
          <img src="images/web_design.png">
          <div class="product-info">
            <h4 class="product-title">Web Design
            </h4>
            <p class="product-price">$144</p>
            <form action="add_to_cart.php" method="post">
                       <input type="hidden" name="productTitle" value="web_design">
                       <input type="submit"value="Add to cart" class="product_input" >
                       </form> 
          </div>
        </div>

        <div class="product">
          <img src="images/video_editing.png">
          <div class="product-info">
            <h4 class="product-title"> Video editing
            </h4>
            <p class="product-price">$123</p>
            <form action="add_to_cart.php" method="post">
                       <input type="hidden" name="productTitle" value="video_editing">
                       <input type="submit"value="Add to cart" class="product_input" >
                       </form> 
          </div>
        </div>
        
        <div class="product">
          <img src="images/content.png">
          <div class="product-info">
            <h4 class="product-title">Content Writer
            </h4>
            <p class="product-price">$144</p>
            <form action="add_to_cart.php" method="post">
                       <input type="hidden" name="productTitle" value="content_writer">
                       <input type="submit"value="Add to cart" class="product_input" >
                       </form> 
          </div>
        </div>
        
        <div class="product">
          <img src="images/marketing.png">
          <div class="product-info">
            <h4 class="product-title">Markiting
              </h4>
            <p class="product-price">$99</p>
            <form action="add_to_cart.php" method="post">
                       <input type="hidden" name="productTitle" value="Marketing">
                       <input type="submit"value="Add to cart" class="product_input" >
                       </form> 
          </div>

  
      </div>
    </div>
    <!--End courses-->

    <!--Start reviews-->
    <div class="reviews" id="reviews">
      <h2 class="main-title">Reviews</h2>
      <div class="container">

          <div class="reviewItem">
            <div class="top">   
              <span>MATTHEW V.</span>   
            </div>
            <article>
              <p class="review">
                The course progressed smoothly and was enjoyable in the beginning,
                which was great for getting warmed up and comfortable with the subject.
                </p>
              <p>Jan 01, 2023</p>
            </article>
          </div>

          <div class="reviewItem">
            <div class="top">   
              <span>DARREN K</span>   
            </div>
            <article>
              <p class="review">
                The course progressed smoothly and was enjoyable in the beginning,
                which was great for getting warmed up and comfortable with the subject.
              </p>
              <p>Jan 01, 2023</p>
            </article>
          </div>

          <div class="reviewItem">
            <div class="top">   
              <span>JENNIFER P.</span>   
            </div>
            <article>
              <p class="review">
                The course progressed smoothly and was enjoyable in the beginning,
                which was great for getting warmed up and comfortable with the subject.  
              </p>
              <p>Jan 01, 2023</p>
            </article>
          </div>

      </div>
    </div>
    <!--End reviews-->

    <!--Start contact-us-->
    <div class="contact" id="contact">
      <div class="container" >
        <div class="contact-box">
          <div class="left"></div>
          <div class="right">
            <h2 style=" color:white;">Contact Us</h2>


            <script>
              function validateForm() {
                var uname = document.forms['contact_us_form']['uname'].value.trim();
                var email = document.forms['contact_us_form']['email'].value.trim();
                var phone = document.forms['contact_us_form']['phone'].value.trim();
                var message = document.forms['contact_us_form']['message'].value.trim();
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; 
                var phoneRegex = /^\d{10}$/;

                if (uname === '' || email === '' || phone === '' || message === '') {
                  alert('Please fill in all fields before submitting the form.');
                  return false; // prevent form submission
                  }
 
                else if (!emailRegex.test(email)) {
                  alert('Please enter a valid email address.');
                  return false; // prevent form submission
                 }
                else if (!phoneRegex.test(phone)) {
                  alert('Please enter a valid 10-digit phone number.');
                  return false; // prevent form submission
                  } 
                // If all fields are filled, the form will be submitted
               return true;
              }
            </script>
            
            <form name="contact_us_form" action="contact_us.php" method="post" onsubmit="return validateForm()">
            <input type="text" name="uname" class="field" placeholder="Your Name">
            <input type="email" name="email" class="field" pattern="[^\s@]+@[^\s@]+\.[^\s@]+" placeholder="Your Email">
            <input type="phone" name="phone" class="field"  pattern="\d{10}"  placeholder="Phone">
            <textarea name="message" placeholder="Message" class="field"></textarea >
            <input type="submit" value="send" class="btn" >
            </form>

          </div>
        </div>
      </div> 
    </div>

    <!--End contact-us-->

    <!--End footer-->
      <div class="footer">
      <p>Copyright &copy; 2024, Zaid Nsour</p> 
      </div>
    <!--End footer-->


    
    
  </body>
</html>