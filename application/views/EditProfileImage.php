<!-- start subheader -->
<section class="subHeader page">
    <div class="container">
    	<h1>Profile Form</h1>
    	<form class="searchForm" method="post" action="#">
            <input type="text" name="search" value="Search our site" />
        </form>
    </div><!-- end subheader container -->
</section><!-- end subheader section -->

<!-- start main content -->
<section class="properties">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-4 col-lg-offset-4">
                <h3>EDIT PROFILE IMAGE</h3>
                <div class="divider"></div>
                <img src="<?php echo base_url(); ?>asset/img/768x507.gif">
                <?php
                if ($error == true)
                {
                ?>
                    <div class="error" style="padding: 5px;">
                        <?php
                        if ($error_code == 1)
                        {
                            echo "Username/Password Missing";
                        }
                        else if ($error_code == 2)
                        {
                            echo "Username/Password invalid";
                        }
                        else
                        {
                            echo "DIE HARD";
                        }
                        ?>

                    </div><!-- /error -->
                <?php
                }
                else
                {
                    echo "";
                }
                ?>
                <!-- start login form -->
                <div class="filterContent defaultTab sidebarWidget">
                    <form method="post" action="<?php echo site_url('home/update_profile_image'); ?>" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                <label for="login">Image</label><br/>
                                <input type="file" required name="img" id="login" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                    <input class="buttonColor" type="submit" value="UPDATE" style="margin-top:24px;">
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                        </div><!-- end row -->
                    </form><!-- end form -->
                </div><!-- end login form -->
            </div><!-- end col -->
            
        </div>
    </div><!-- end container -->
</section>
<!-- end main content -->


<style>
.col-lg-4 img{
    max-width: 100%;
}
</style>