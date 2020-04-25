
<!-- start main content -->
<section class="login-section">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-7">
                <h2>REGISTER</h2>
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
                        <input type="hidden" name="reason" value="<?=$reason?>">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock input-type">
                                <input type="text" required name="fname"  />
                                <label for="login">First Name <span>*</span></label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock input-type">
                                <input type="text" required name="lname"  />
                                <label for="login">Last Name <span>*</span></label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock input-type">
                                <input type="email" required name="email"  />
                                <label for="login">Email <span>*</span></label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock input-type">
                                <input type="text" required name="username"  />
                                <label for="login">Username <span>*</span></label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock input-type">
                                <input type="password" required name="password" />
                                <label for="pass">Password <span>*</span></label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock input-type">
                                <input type="text" required name="mobile"  />
                                <label for="login">Mobile <span>*</span></label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock input-type"><!-- /input-type-invalid -->
                                <input type="text" required name="phone"  />
                                <label for="login">Office Phone </label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock input-type">
                                <input type="text" required name="address"  />
                                <label for="login">Address <span>*</span></label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock input-type">
                                <input type="text" required name="city"  />
                                <label for="login">City <span>*</span></label>
                                </div>
                            </div>
                            <!-- <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock input-type">
                                <input type="text" name="state"  />
                                <label for="login">State</label>
                                </div>
                            </div> -->
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock input-type">
                                <input type="text" required name="zip_code"  />
                                <label for="login">Zipcode</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="formBlock input-type">
                                <textarea name="about" required></textarea>
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