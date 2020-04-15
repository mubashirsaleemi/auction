
<!-- start main content -->
<section class="login-section">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-7">
                <h3>REGISTER</h3>
                <div class="divider"></div>
                <p style="font-size:13px;">Already have an account? <a href="<?php echo site_url('home/login'); ?>">Login here!</a></p>
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
                <div class="defaultTab">
                    <form method="post" action="<?php echo site_url('home/post_user_form'); ?>">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock input-type">
                                <input type="text" required name="fname" id="login" />
                                <label for="login">First Name <span>*</span></label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock input-type">
                                <input type="text" required name="lname" id="login" />
                                <label for="login">Last Name <span>*</span></label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock input-type">
                                <input type="email" required name="email" id="login" />
                                <label for="login">Email <span>*</span></label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock input-type">
                                <input type="text" required name="username" id="login" />
                                <label for="login">Username <span>*</span></label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock input-type">
                                <input type="password" required name="password" id="pass" />
                                <label for="pass">Password <span>*</span></label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock input-type">
                                <input type="text" required name="mobile" id="login" />
                                <label for="login">Mobile <span>*</span></label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock input-type-invalid">
                                <input type="text" name="phone" id="login" />
                                <label for="login">Office Phone </label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock input-type">
                                <input type="text" required name="address" id="login" />
                                <label for="login">Address <span>*</span></label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock input-type">
                                <input type="text" required name="city" id="login" />
                                <label for="login">City <span>*</span></label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock input-type-invalid">
                                <input type="text" name="state" id="login" />
                                <label for="login">State</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock input-type-invalid">
                                <input type="text" name="zip_code" id="login" />
                                <label for="login">Zipcode</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock input-type-invalid">
                                <textarea name="about"></textarea>
                                <label for="login">About you</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock">
                                    <input class="buttonColor" type="submit" value="REGISTER" style="margin-top:24px;">
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