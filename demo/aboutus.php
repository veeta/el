<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>About Us</title>

<link type="text/css" rel="stylesheet" href="css/aboutus.css">
<link type="text/css" rel="stylesheet" href="css/global.css">
<link type="text/css" rel="stylesheet" href="css/font.css">
<link type="text/css" rel="stylesheet" href="css/findhelp.css">

</head>

<body>

	<?php include("header.php"); ?>
    <!--header-->
    <?php include("findhelp.php"); ?>
    <!--findhelp-->


        <div class="container">
            <div class="page-next">
                <div class="breadcrumb">
                    <ol>
                      <li><a href="index.php">Home</a></li> //
                      <li class="active">About</li>
                    </ol>
                </div><!--breadcrumb-->
                <div class="sub-menu">
                    <ul>
                        <li><a class="active" href="aboutus.php">about us</a></li>
                        <li><a href="contact.php">contact us</a></li>
                        <li><a href="reportbug.php">report bug</a></li>
                        <li><a href="policies.php">policies</a></li>
                   </ul>
                </div><!--sub-menu-->
            </div><!--page-next-->
        </div><!--container-->
        <div class="container">
            <div class="about">
                <div class="whoweare">
                    <h1>Who We Are ?</h1>
                    <p>Easyeducation.com is an exciting new way to get involved
                        with education that operates outside the status quo. 
                        It’s an engaging platform that allows students and tutors
                        access to a diverse array of resources that just do not exist
                        in a normal classroom setting.</p>
                </div><!--whoweare-->
                <div class="whowedo">
                    <h1>Who We Do ?</h1>
                    <p>At EasyEducation.com, we’re building a community of learners
                    and educators that are interested in accessing quality 
                    education and expanding their knowledge base outside
                    the walls of the classroom.   We can’t build easyeducation.com
                    without you :  won’t you join us as we build the educational
                    community of tomorrow, today?</p>
                </div><!--whowedo-->
            </div><!--about-->
        </div><!--container-->
        
        <?php include("social.php"); ?>
    	<!--social-->

        
		<?php include("footer.php"); ?>
        <!--footer-->


</body>
</html>