<div class="" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="RegisterModalLabel">
    <div class="modal-dialog modal-register" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h3 class="modal-title" id="login-title">Sign Up</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-11">
                        <div class="gorm-group">
                            <div class="row login-content">
                                <form action="<?php echo base_url() . "user/save_user_info"; ?>" method="POST" >
                                    <div class="col-md-5">
                                        <label for="Email">First Name <span class="pull-right text-right">:</span> </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="user_first_name" class="form-control">
                                    </div>

                                    <div class="col-md-5">
                                        <label for="Email">Last Name <span class="pull-right text-right">:</span> </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="email" name="user_last_name" class="form-control">
                                    </div>

                                    <div class="col-md-5">
                                        <label for="Email">Email Address <span class="pull-right text-right">:</span> </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="mail" name="user_email_address" class="form-control">
                                    </div>

                                    <div class="col-md-5">
                                        <label for="Password">Password <span class="pull-right text-right">:</span> </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="password" name="user_password" class="form-control">
                                    </div>
                                    
                                    <div class="col-md-5">
                                        <label for="Confirm Password">Confirm Password <span class="pull-right text-right">:</span> </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="password" name="user_confirm_password" class="form-control">
                                    </div>

                                    <div class="col-md-5">
                                        <label for="Gender">Gender <span class="pull-right text-right">:</span> </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="radio" value="1" name="user_gender"> Male
                                        <input type="radio" value="0" name="user_gender"> Female <br/>
                                    </div>

                                    <div class="clearfix"></div>

                                    <div class="col-md-5">
                                        <label for="Country Name">Country Name <span class="pull-right text-right">:</span> </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="user_country" class="form-control">
                                    </div>

                                    <div class="col-md-5">
                                        <label for="Date of Birth">Date of Birth <span class="pull-right text-right">:</span> </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="date" name="date_of_birth" class="form-control">
                                    </div>

                                    <div class="col-md-5">
                                        <label for="Email">Phone No <span class="pull-right text-right">:</span> </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="user_phone_no" class="form-control">
                                    </div>

                                    <div class="col-md-5"></div>

                                    <div class="col-md-7">
                                        <button type="submit" class="btn btn-super" name="login-button">Sign Up <span class="glyphicon glyphicon-arrow-right pull-right"></span></button>

                                        <div class="forget-password">
                                            <a href="<?php echo base_url()."user/login"; ?>" class="pull-left">Sign in</a>
                                            <a href="<?php echo base_url()."user/forget_password"; ?>" class="pull-right">Forget Password</a>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div> <!-- /Modal -->