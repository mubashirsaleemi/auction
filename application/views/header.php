<?php 
	// echo BASEPATH;
	// echo base_url();
?>
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/style.css"> -->
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Easy Living - Responsive Real Estate Template">
<meta name="keywords" content="Themes, real estate, responsive, themeforest, Templates">
<meta name="author" content="Rype Pixel [Chris Gipple]">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?=$page_title?></title>
<!-- html5 support in IE8 and later -->
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<!-- CSS file links -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<link href="<?=CSS?>bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?=CSS?>jquery.bxslider.css" rel="stylesheet" media="screen">
<link href="<?=CSS?>style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?=CSS?>responsive.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?=CSS?>yamm.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?=CSS?>jquery.nouislider.min.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
<link href="<?=CSS?>jvectormap.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>

<?php if (isset($sidebar_listing_menu) && $sidebar_listing_menu == true): ?>
    <div class="sidebar-listing-meun-cover"></div><!-- /sidebar-listing-meun-cover -->
    <div class="sidebar-listing-meun">
        <ul>
            <li><a href="javascript://" class="close-sidebar-listing-menu">Close</a></li>
            <?php
                switch ($menu) {
                    case 'all':
                        ?>
                        <li><a href="<?php echo site_url('home/properties/all'); ?>" data-filter="*" class="current triangle">ALL</a></li>
                        <li><a href="<?php echo site_url('home/properties/sale'); ?>" data-filter=".sale">FOR SALE</a></li>
                        <li><a href="<?php echo site_url('home/properties/rent'); ?>" data-filter=".rent">FOR RENT</a></li>
                        <?php
                        break;
                    case 'sale':
                        ?>
                        <li><a href="<?php echo site_url('home/properties/all'); ?>" data-filter="*">ALL</a></li>
                        <li><a href="<?php echo site_url('home/properties/sale'); ?>" data-filter=".sale" class="current triangle">FOR SALE</a></li>
                        <li><a href="<?php echo site_url('home/properties/rent'); ?>" data-filter=".rent">FOR RENT</a></li>
                        <?php
                        break;
                    case 'rent':
                        ?>
                        <li><a href="<?php echo site_url('home/properties/all'); ?>" data-filter="*">ALL</a></li>
                        <li><a href="<?php echo site_url('home/properties/sale'); ?>" data-filter=".sale">FOR SALE</a></li>
                        <li><a href="<?php echo site_url('home/properties/rent'); ?>" data-filter=".rent" class="current triangle">FOR RENT</a></li>
                        <?php
                        break;
                    default:
                        ?>
                        <li><a href="<?php echo site_url('home/properties/all'); ?>" data-filter="*" class="current triangle">ALL</a></li>
                        <li><a href="<?php echo site_url('home/properties/sale'); ?>" data-filter=".sale">FOR SALE</a></li>
                        <li><a href="<?php echo site_url('home/properties/rent'); ?>" data-filter=".rent">FOR RENT</a></li>
                        <?php
                        break;
                }
                ?>
                <li><a href="javascript://">AUCTION</a></li>
                <li><a href="javascript://">BIDDING</a></li>
                <?php if ($login == true): ?>
                    <li><a href="<?=BASEURL.'home/dash'?>">DASHBOARD</a></li>
                    <li><a href="<?=BASEURL.'home/logout'?>">LOGOUT</a></li>
                <?php else: ?>
                    <li><a href="<?=BASEURL.'home/login'?>">LOGIN</a></li>
                    <li><a href="<?=BASEURL.'home/pre_register'?>">REGISTER</a></li>
                <?php endif ?>
        </ul>
    </div><!-- /sidebar-listing-meun -->
<?php endif ?>




<!-- rbg(46,207,191) -->

<!-- Start Header -->
<header class="navbar yamm navbar-default navbar-fixed-top">
    <?php if (isset($sidebar_listing_menu) && $sidebar_listing_menu == true): ?>
        <a href="javascript://" class="sidebar-listing-menu-btn"><i class="fas fa-bars"></i></a>
    <?php endif ?>
    <!-- <div class="topBar">
        <div class="container">
            <p class="topBarText"><img class="icon" src="<?php echo base_url(); ?>asset/img/icon-phone.png" alt="" />1-800-192-0978</p>
            <p class="topBarText"><img class="icon" src="<?php echo base_url(); ?>asset/img/icon-mail.png" alt="" />info@easyLivingTheme.com</p>
            <ul class="socialIcons">
                <?php
                if ($login == true)
                {
                ?>
                    <li class="topBarText"><a href="<?php echo site_url('home/dash'); ?>">DASHBOARD</a></li>
                    <li class="topBarText"><a href="<?php echo site_url('home/logout'); ?>">LOGOUT</a></li>
                <?php
                }
                else
                {
                ?>
                    <li class="topBarText"><a href="<?php echo site_url('home/login'); ?>">LOGIN</a></li>
                    <li class="topBarText"><a href="<?php echo site_url('home/register'); ?>">REGISTER</a></li>
                <?php
                }
                ?>
                <li><a href="#"><img src="<?php echo base_url(); ?>asset/img/icon-fb.png" alt="" /></a></li>
                <li><a href="#"><img src="<?php echo base_url(); ?>asset/img/icon-twitter.png" alt="" /></a></li>
                <li><a href="#"><img src="<?php echo base_url(); ?>asset/img/icon-google.png" alt="" /></a></li>
                <li><a href="#"><img src="<?php echo base_url(); ?>asset/img/icon-rss.png" alt="" /></a></li>
            </ul>
        </div>
    </div> -->
    <div class="container">
       	<div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand" href="<?=BASEURL?>"><img src="<?=IMG?>logo.png" alt="INFINITI" />EASY <span>LIVING</span></a> -->
            <a class="navbar-brand" href="<?=BASEURL?>"><img src="<?=IMG?>logo.png" class="logo" alt="INFINITI"/></a>
        </div>
        <div class="navbar-collapse collapse">

            <!--  start login/register -->
            <ul class="userButtons">
                <?php
                if ($login == true)
                {
                ?>
                    <li class="userBtn"><a href="<?=BASEURL.'home/dash'?>" class="buttonTheme">DASHBOARD</a></li>
                    <li class="userBtn"><a href="<?=BASEURL.'home/logout'?>" class="buttonTheme">LOGOUT</a></li>
                <?php
                }
                else
                {
                ?>
                    <!-- <li class="userBtn userBtn-white"><a href="<?=BASEURL.'home/login'?>" class="buttonTheme">LOGIN</a></li> -->
                    <li class="userBtn"><a href="<?=BASEURL.'home/login'?>" class="buttonTheme" style="background-color: #fff; color: #0D2D47;">LOGIN</a></li>
                    <li class="userBtn"><a href="<?=BASEURL.'home/register'?>" class="buttonTheme">REGISTER</a></li>
                <?php
                }
                ?>
            </ul>
            <!-- end login/register -->

            <ul class="nav navbar-nav">
                <!-- <li class="dropdown menu-item-has-children"><a href="<?php echo site_url(); ?>" class="current">HOME</a></li> -->
                <li class="dropdown menu-item-has-children"><a href="<?=BASEURL?>" class="current">HOME</a></li>
                <li class="dropdown menu-item-has-children"><a href="<?=BASEURL?>about">ABOUT US</a></li>
                <li class="dropdown menu-item-has-children"><a href="<?=BASEURL?>contact">CONTACT</a></li>
                <!-- <li class="dropdown menu-item-has-children"><a href="<?php echo site_url('home/properties'); ?>">PROPERTIES</a></li> -->
                <!-- <li class="dropdown menu-item-has-children">
                    <a href="<?php echo site_url('home/properties'); ?>">PROPERTIES</a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('home/properties/all'); ?>">All</a></li>
                        <li class="dropdown-submenu menu-item-has-children">
                            <a href="<?php echo site_url('home/properties/sale'); ?>" data-toggle="dropdown">For Sale</a>
                            <?php
                            if (isset($property_type) && count($property_type) > 0)
                            {
                            ?>
                            <ul class="dropdown-menu">
                            <?php
                            foreach ($property_type as $key => $val)
                            {
                            ?>
                                <li><a href="<?php echo site_url('home/properties/sale/'.$val['property_type'].''); ?>"><?=$val['name']?></a></li>
                            <?php
                            }
                            ?>
                            </ul>
                            <?php
                            }
                            ?>
                        </li>
                        <li class="dropdown-submenu menu-item-has-children">
                            <a href="<?php echo site_url('home/properties/rent'); ?>" data-toggle="dropdown">For Rent</a>
                            <?php
                            if (isset($property_type) && count($property_type) > 0)
                            {
                            ?>
                            <ul class="dropdown-menu">
                            <?php
                            foreach ($property_type as $key => $val)
                            {
                            ?>
                                <li><a href="<?php echo site_url('home/properties/rent/'.$val['property_type'].''); ?>"><?=$val['name']?></a></li>
                            <?php
                            }
                            ?>
                            </ul>
                            <?php
                            }
                            ?>
                        </li>
                    </ul>
                </li> -->
                <!-- <li class="dropdown yamm-fw">
                    <a href="#" class="dropdown-toggle">MEGA MENU</a>
                    <ul class="dropdown-menu">
                        <li> 
                            <div class="yamm-content">
                                <div class="row">
                                <div class="col-lg-4">
                                    start recent posts widget
                                        <h4>RECENT POSTS</h4>
                                        <div class="recentPosts megaMenu">
                                            <h4><a href="#">AWESOME DREAM HOUSE IN A GREAT LOCATION</a></h4>
                                            <a href="#">READ MORE</a>
                                            <p class="date">Feb 5, 2014</p>
                                            <div style="clear:both;"></div>
                                            <div class="divider thin"></div>
                                            <h4><a href="#">AWESOME DREAM HOUSE IN A GREAT LOCATION</a></h4>
                                            <a href="#">READ MORE</a>
                                            <p class="date">Feb 5, 2014</p>
                                            <div style="clear:both;"></div>
                                            <div class="divider thin"></div>
                                            <h4><a href="#">AWESOME DREAM HOUSE IN A GREAT LOCATION</a></h4>
                                            <a href="#">READ MORE</a>
                                            <p class="date">Feb 5, 2014</p>
                                            <div style="clear:both;"></div>
                                        </div>
                                        end recent posts widget
                                </div>
                                <div class="col-lg-4 map">
                                    <h4>GOOGLE MAPS</h4>
                                    <iframe class="googleMap" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=towson+md&amp;aq=&amp;sll=39.310394,-76.575394&amp;sspn=0.320357,0.676346&amp;ie=UTF8&amp;hq=&amp;hnear=Towson,+Baltimore,+Maryland&amp;ll=39.401495,-76.601912&amp;spn=0.019996,0.042272&amp;t=m&amp;z=14&amp;output=embed"></iframe><br/><br/>
                                    <p>Lorem ipsum dolor amet, consectetur adipiscing elit. Sed ut purus eget nunc ut dignissim cursus at a nisl. 
                                    Mauris vitae turpis quis eros egestas tempor sit amet a arcu.</p>
                                </div>
                                <div class="col-lg-4">
                                    <h4>TEXT WIDGET</h4>
                                    <p>Lorem ipsum dolor amet, consectetur adipiscing elit. Sed ut purus eget nunc ut dignissim cursus at a nisl. 
                                    Mauris vitae turpis quis eros egestas tempor sit amet a arcu. Duis egestas hendrerit diam. Lorem ipsum dolor amet, consectetur adipiscing elit. Sed ut purus eget nunc ut dignissim cursus at a nisl. 
                                    Mauris vitae turpis quis eros egestas tempor sit amet a arcu.</p>
                                    <p>Lorem ipsum dolor amet, consectetur adipiscing elit. Sed ut purus eget nunc ut dignissim cursus at a nisl. 
                                    Mauris vitae turpis quis eros egestas tempor sit amet a arcu. Duis egestas hendrerit diam. Lorem ipsum dolor amet.</p>
                                </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li> -->
                <!-- <li class="dropdown menu-item-has-children"><a href="javascript://">BUSINESSES</a></li> -->
                
            </ul>        
        </div><!--/.navbar-collapse -->
    </div><!-- end header container -->
</header><!-- End Header -->




