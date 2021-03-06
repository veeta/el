

	<?php $this->import("/layout/header"); ?>
    <!--header-->
    <?php $this->import("/layout/findhelp"); ?>
    <!--findhelp-->

	<div class="container">
    	<div class="page-next">
         	<div class="breadcrumb">
            	<ol>
                	<li><a href="<?php echo \Main\Helper\URL::absolute("/")?>">Home</a></li> //
                    <li class="active">How it work</li>
                </ol>
			</div><!--breadcrumb-->
            <!--<div class="sub-menu">
            	<ul>
                	<li><a class="active" href="">about us</a></li>
                  	<li><a href="">contact us</a></li>
                    <li><a href="">report bug</a></li>
                    <li><a href="">policies</a></li>
               	</ul>
           </div><!--sub-menu-->
		</div><!--page-next-->
	</div><!--container-->
    <div class="container">
    	<div class="itwork">
        	<div class="video">
                <!--<video></video>-->
                <img src="<?php echo \Main\Helper\URL::absolute("/public/images/video.jpg")?>" alt="">
            </div><!--video-->
        	<div class="itwork-detail">
            	<div class="box-itwork">
                	<div class="subject">
                    	Register with
						EASY EDUCATION
                    </div>
                    <div class="specs">
                        Create your EasyEucation profile and
                        connect with top online experts
                        today. Sign up is quick and easy. We
                        never share any of your information 
                        with third parties. Get started with
                        just your email!
                    </div>
                </div><!--box-itwork-->
                <div class="box-itwork">
                	<div class="subject">
                    	Find Experts Easily
                    </div>
                    <div class="specs">
                        No matter what subject you’re
                        interested in Easyeducation has an expert
                        that fits your  needs and availability.
                         Click here to search our community 
                        of experts and  start learning on 
                        your terms today!
                    </div>
                </div><!--box-itwork-->
                <div class="box-itwork">
                	<div class="subject">
                    	Learning Tools
                    </div>
                    <div class="specs">
                        easyeducation features an extensive
                        collection of intuitive online learning
                         tools including a virtual white board, 
                        video chat and text editor so you can
                        become fully immersed in your subject
                        and learn they way you choose. 
                        Click here to get started!
                    </div>
                </div><!--box-itwork-->
                <div class="box-itwork">
                	<div class="subject">
                    	Rate your Expert
                    </div>
                    <div class="specs">
                        Tell us about your experiences.
                        easyeducation community gets bigger 
                        and better with great feedback. Let 
                        instructors and the community know 
                        what was awesome and how to 
                        improve. Click here to rate your 
                        instructor now!
                    </div>
                </div><!--box-itwork-->
            </div><!--itwork-detail-->
        </div><!--itwork-->
    </div><!--container-->
    <div class="word">
    	<div class="container">
        	<h1>What’s important to know ?</h1>
            <pre>EasyEducation is an online learning community connecting experts with online learners across the globe.
Now you can take back control of your education and follow your passions on your schedule.
Our experts are here to help you transform your learning experience into real world results.</pre>
			<h2>Get started on EasyEducation today !</h2>
        </div><!--container-->
    </div><!--word-->
    <div class="pricing">
    	<div class="container">
        	<div class="word-pricing">
                <h1>How pricing works</h1>
                <p>EasyEducation connects online learners with leading experts who set their own per minute and/or per hour rates
    of which EasyEducation takes a 30% fee. Botangle's community is always free to join and is committed to promoting
    educational access worldwide.</p>
    		</div><!--word-pricing-->
			<div class="social">
                <span>
                	Get in touch with us
                    <a href=""><img src="<?php echo \Main\Helper\URL::absolute("/public/images/aboutus/icon-facebook.png")?>" alt="facebook"></a>
                    <a href=""><img src="<?php echo \Main\Helper\URL::absolute("/public/images/aboutus/icon-twitter.png")?>" alt="twitter"></a>
                    <a href=""><img src="<?php echo \Main\Helper\URL::absolute("/public/images/aboutus/icon-g+.png")?>" alt="googleplus"></a>
                    <a href=""><img src="<?php echo \Main\Helper\URL::absolute("/public/images/aboutus/icon-linkedin.png")?>" alt="linked in"></a>
               </span>
            </div><!--social-->
        </div><!--container-->
    </div><!--pricing-->

    <?php $this->import("/layout/footer"); ?>
    <!--footer-->
