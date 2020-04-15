<div class="login-section">
    <div class="container">
        <div class="col-lg-6 col-md-7">
            <h2>sign in.</h2>
            <p>Please enter your email and password below.</p>
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
            <div class="defaultTab">
                <form method="post" action="<?php echo site_url('home/process_login'); ?>">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="formBlock input-type">
                                <input type="text" required name="username" id="login" />
                                <label for="login">Username</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="formBlock input-type">
                                <input type="password" required name="password" id="pass" />
                                <label for="pass">Password</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="formBlock">
                                <input class="buttonColor" type="submit" value="LOGIN" style="margin-top:24px;">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="formBlock" style="margin-top:32px; text-align: right;">
                                <a href="javascript://" class="forget-password">FORGOT PASSWORD?</a>
                            </div>
                        </div>
                        <div style="clear:both;"></div>
                    </div><!-- end row -->
                </form><!-- end form -->
            </div><!-- end login form -->
        </div>
    </div><!-- /container --> 
</div><!-- login-section -->