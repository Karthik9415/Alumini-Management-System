
<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/16-12-2017/best_study-demo_Free/450558598/web/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Feb 2019 05:05:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Alumni Management</title>
    <!-- meta-tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Soft Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <!-- //meta-tags -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- fonts -->
    <link href="http://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>

<body>
<script src='../../../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125810435-1"></script>

<body>
<!-- header -->

<div class="header">
    <?php include_once ('application/views/includes/header.php')?>
</div>
<!-- banner -->
<div class="inner_page_agile">

</div>
<!--//banner -->
<!-- short-->
<div class="services-breadcrumb">
    <div class="inner_breadcrumb">
        <ul class="short_ls">
            <li>
                <a href="home">Home</a>
                <span>| |</span>
            </li>
            <li>Login</li>
        </ul>
    </div>
</div>
<!-- //short-->
<!---728x90--->

<div class="register-form-main">
    <div class="container">
        <div class="title-div">
            <h3 class="tittle">
                <span>S</span>tudent
                <span>L</span>ogin
                <span>F</span>orm
            </h3>
            <div class="tittle-style">

            </div>
        </div>
        <div class="login-form">
            <form action="<?php echo base_url();?>studentlogin/login" method="post">
                <div class="">
                    <p>User Name </p>
                    <input type="text" class="name" name="username" required="" />
                </div>
                <div class="">
                    <p>Password</p>
                    <input type="password" class="password" name="password" required="" />
                </div><br><br>

                <input type="submit" value="Login">
                <div class="register-forming">
                    <p>To Register New Account --
                        <a href="register">Click Here</a>
                    </p>
                </div>
            </form>
        </div>

    </div>
</div>
<!---728x90--->

<!-- footer -->
<div class="mkl_footer">
    <div class="sub-footer">
        <div class="container">
            <div class="mkls_footer_grid">



                <div class="clearfix"> </div>
            </div>

            <!-- footer-button-info -->

            <!-- footer-button-info -->
        </div>
    </div>
    <div class="footer-copy-right">
        <div class="container">
            <div class="allah-copy">
                <p>© 2019 Best Study. All rights reserved | Design by
                    <a href=""></a>
                </p>
            </div>
            <div class="footercopy-social">
                <ul>
                    <li>
                        <a href="#">
                            <span class="fa fa-facebook"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-twitter"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-rss"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-vk"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--/footer -->
<!---728x90--->

<!-- js files -->
<!-- js -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.js"></script>
<!-- smooth scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<!-- here stars scrolling icon -->
<script>
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //here ends scrolling icon -->
<!-- smooth scrolling -->
<!-- //js-files -->

</body>


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/16-12-2017/best_study-demo_Free/450558598/web/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Feb 2019 05:05:24 GMT -->
</html>