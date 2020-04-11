<!-- start subheader -->
<section class="subHeader page">
    <div class="container">
    	<h1>Agent Form</h1>
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
                <h3>EDIT PROFILE</h3>
                <div class="divider"></div>
                <?php
                if ($error == true)
                {
                ?>
                    <div class="error" style="padding: 5px;">
                        <?php
                        if ($error_code == 1)
                        {
                            echo "Something Missing";
                        }
                        else if ($error_code == 2)
                        {
                            echo "Error: Email Already in use";
                        }
                        else if ($error_code == 3)
                        {
                            echo "Error: Username Already in use";
                        }
                        else if ($error_code == 4)
                        {
                            echo "Error: Sorry :( something wroung pleas try again";
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
                    <form method="post" action="<?php echo site_url('home/update_user_form'); ?>">
                        <div class="row">
                            <input type="text" name="user_id" value="<?=$q->user_id?>" hidden="hidden">
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                <label for="login">First Name <span>*</span></label><br/>
                                <input type="text" required name="fname" id="login" value="<?=$q->fname?>"/>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                <label for="login">Last Name <span>*</span></label><br/>
                                <input type="text" required name="lname" id="login" value="<?=$q->lname?>"/>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                <label for="login">Mobile <span>*</span></label><br/>
                                <input type="text" required name="mobile" id="login" value="<?=$q->mobile?>"/>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                <label for="login">Office Phone</label><br/>
                                <input type="text" name="phone" id="login" value="<?=$q->phone?>"/>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                <label for="login">City <span>*</span></label><br/>
                                <input type="text" required name="city" id="login" value="<?=$q->city?>"/>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                <label for="login">Address</label><br/>
                                <input type="text" name="address" id="login" value="<?=$q->address?>"/>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                <label for="login">About you</label><br/>
                                <textarea name="about"><?=$q->about?></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                    <input class="buttonColor" type="submit" value="UPDATE PROFILE" style="margin-top:24px;">
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
.formBlock label span{
    color: red;
}
</style>