

<!-- start main content section -->
<section class="properties">
    <div class="container">
    	
        <div class="row">


            <!-- start sidebar -->
            <div class="col-lg-3 col-md-3 col-sm-4">
                <div class="dash-sidebar">
                    <div class="profile">
                        <div class="img-block">
                            <img class="agentImg" src="<?php echo base_url(); ?>asset/img/768x507.gif" alt="" />
                        </div><!-- /img-block -->   
                        <div class="content-block">
                            <h5><?=$user_meta['name']?></h5>
                            <h6>BUYER</h6>
                        </div><!-- /img-block -->   
                    </div>
                    <div class="sidebar-options">
                        <ul>
                            <li><a href="javascript://"><i class="fas fa-home"></i>Dashboard</a></li>
                            <li><a href="javascript://"><i class="far fa-bookmark"></i>&nbsp; Favorites</a></li>
                            <li><a href="javascript://"><i class="fas fa-search"></i> Saved Searches</a></li>
                            <li><a href="javascript://"><i class="far fa-bell"></i> Notifications</a></li>
                            <li><a href="javascript://"><i class="far fa-edit"></i>Profile</a></li>
                        </ul>
                    </div><!-- /sidebar-options -->
                </div><!-- /dash-sidebar -->
                <div class="bottom-sidebar">
                    <div class="img-block">
                        <img class="agentImg" src="<?php echo base_url(); ?>asset/img/768x507.gif" alt="" />
                    </div><!-- /img-block -->
                    <p class="text-center">
                        <small> Chris </small> <br>
                        Your Personal Advisor <br> 
                        <small>Free & Friendly </small> <br>
                        <a href="">(123) 123-1234</a></p>
                    <ul>
                        <li><a href=""><i class="fas fa-phone"></i></a> Call</li>
                        <li><a href=""><i class="far fa-envelope"></i></a> Chat</li>
                        <li><a href=""><i class="far fa-comment-alt"></i></a> Email</li>
                    </ul>
                </div><!-- /bottom-sidebar --> 
            </div><!-- end col -->

            <!-- start content -->
            <div class="col-lg-9 col-md-9 col-sm-8">
                <div class="right-profile-bar">
                    <p class="heading-top">Profile</p>
                    <p class="info-heading">Account Info</p>
                </div>
                <form action="" method="post">
                    <div class="info-block-section">
                        <p>Contact Info</p>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Title (Optional)</label>
                                <input type="text" class="form-info" placeholder="Title">
                            </div>
                            <div class="col-md-4">
                                <label for="">First Name</label>
                                <input type="text" class="form-info" placeholder="First Name">
                            </div>
                            <div class="col-md-4">
                                <label for="">Last Name</label>
                                <input type="text" class="form-info" placeholder="Last Name">
                            </div>
                            <div class="col-md-4">
                                    <label for="">Company Name (Optional)</label>
                                    <input type="text" class="form-info" placeholder="Company Name">
                            </div>
                            <div class="col-md-4">
                                <label for="">Primary Role</label>
                                <div class="select">
                                    <select name="" class="form-info">
                                        <option value=""> -- Select Role -- </option>
                                        <option value="individual">Individual</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Assets Owned</label>
                                <div class="select">
                                    <select name="" class="form-info">
                                        <option value="less">Less then $50,000</option>
                                        <option value="less">$50,000 - $100,000</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div><!-- /info-block-section -->
                    <div class="info-block-section">
                        <p>Address</p>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Country</label>
                                <div class="select">
                                    <select name="" class="form-info">
                                        <option value=""> -- Select Country -- </option>
                                        <option value="US">US</option>
                                        <option value="UK">UK</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">State</label>
                                <div class="select">
                                    <select name="" class="form-info">
                                        <option value="">Select State</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">City</label>
                                <input type="text" class="form-info" placeholder="City">
                            </div>
                            <div class="col-md-4">
                                <label for="">Address</label>
                                <input type="text" class="form-info" placeholder="Address">
                            </div>
                            <div class="col-md-4">
                                <label for="">Zipcode</label>
                                <input type="text" class="form-info" placeholder="Zip Code">
                            </div>
                        </div>
                    </div><!-- /info-block-section -->
                    <div class="info-block-section">
                        <p>Phone</p>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Primary Phone (Optional)</label>
                                <input type="text" class="form-info" placeholder="(123) 123-1234">
                            </div>
                            <div class="col-md-4">
                                <label for="">Mobile Phone (Optional)</label>
                                <input type="text" class="form-info" placeholder="(123) 123-1234">
                            </div>
                        </div>
                    </div><!-- /info-block-section -->
                    <input type="submit" class="button-theme" value="Update Info">
                </form>
                <form action="" method="post">
                    <div class="info-block-section">
                        <p>Change Password</p>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Current Password</label>
                                <input type="Password" class="form-info" placeholder="Current Password">
                            </div>
                            <div class="col-md-4">
                                <label for="">New Password</label>
                                <input type="Password" class="form-info" placeholder="New Password">
                            </div>
                            <div class="col-md-4">
                                <label for="">Confirm New Password</label>
                                <input type="Password" class="form-info" placeholder="Confirm New Password">
                            </div>
                        </div>
                    </div><!-- /info-block-section -->
                    <input type="submit" class="button-theme" value="Update Password">
                </form>
                <form action="" method="post">
                    <div class="info-block-section">
                        <p>Email</p>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Current Email Address</label>
                                <input type="Password" class="form-info" placeholder="Current Email Address">
                            </div>
                            <div class="col-md-4">
                                <label for="">Confirm Email Address</label>
                                <input type="Password" class="form-info" placeholder="Confirm New Address">
                            </div>
                        </div>
                    </div><!-- /info-block-section -->
                    <input type="submit" class="button-theme" value="Update Email">
                </form>
            </div><!-- end content -->

        </div><!-- end row -->

    </div><!-- end container -->
</section>
<!-- end main content -->

<style>
.edit-img-link{
    padding: 7px 0px 7px 7px;
    position: absolute;
    border-radius: 5px;
    border: 1px solid #cfcfcf;
    background-color: #f6f6f6;
    background: -webkit-linear-gradient(#f8f8f8, #f2f2f2);
    background: -o-linear-gradient(#f8f8f8, #f2f2f2);
    background: -moz-linear-gradient(#f8f8f8, #f2f2f2);
    background: linear-gradient(#ffffff, #f2f2f2);
    -webkit-transition: color 0.2s linear;
    -moz-transition: color 0.2s linear;
    -ms-transition: color 0.2s linear;
    -o-transition: color 0.2s linear;
    transition: color 0.2s linear;
    display: none;
}
.col-lg-4:hover > a .edit-img-link{
    display: block;
}
p.forSale{
    text-transform: uppercase;
}
</style>