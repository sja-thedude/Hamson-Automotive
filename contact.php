<!DOCTYPE html>
<html lang="en">
 
 <?php 
    include ("include/head.php");
  ?>

    <section class="hero-wrap hero-wrap-2 d-flex" style="background-image: url(images/bg_2.jpg);">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-flex align-items-center">
    			<div class="col-md-7 col-sm-12 ftco-animate text-bread d-flex align-items-center">
    				<div class="text">
	          	<h1 class="mb-3 mt-5 bread">Contact us</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php"></a>Home</span> <span></span></p>
            </div>
          </div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="heading">Contact Information</h2>
            <p>Your Suggestions and Reviews are Precious...</p>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="con align-self-stretch p-4">
	            <p><span>Address:</span> Head Office Address : No. 10 3rd Cross Rd, Health Layout, Sunkudakatte, Bengaluru, Karnataka 560091</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="con align-self-stretch p-4">
	            <p><span>Phone:</span> <a href="tel: +91 9947606151">+91 9947606151</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="con align-self-stretch p-4">
	            <p><span>Email:</span> <a href="mailto:info@hamsonautomative.com">info@hamsonautomative.com</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="con align-self-stretch p-4">
	            <p><span>Website</span> <a href="#">www.hamsonautomotive.com</a></p>
	          </div>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
            <form action="send-mail.php" method="post" role="form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<!--<div id="map"></div>-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.8237886227257!2d77.50246341464529!3d12.983119738123053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3dac1e03699d%3A0xff1a54d65d60ad40!2sHamson%20Automotive!5e0!3m2!1sen!2ssa!4v1619554211767!5m2!1sen!2ssa" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </section>

     <?php
    include ("include/footer.php");
   ?>
    
  </body>
</html>