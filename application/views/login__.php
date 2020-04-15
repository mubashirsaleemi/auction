<!-- start main content -->
<section class="properties">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-lg-offset-4">
                <h3>LOGIN</h3>
                <div class="divider"></div>
                <p style="font-size:13px;">Don't have an account yet? <a href="<?php echo site_url('home/register'); ?>">Register here!</a></p>
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
                    <form method="post" action="<?php echo site_url('home/process_login'); ?>">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                <label for="login">Username</label><br/>
                                <input type="text" required name="username" id="login" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                <label for="pass">Password</label><br/>
                                <input type="password" required name="password" id="pass" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                    <input class="buttonColor" type="submit" value="LOGIN" style="margin-top:24px;">
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