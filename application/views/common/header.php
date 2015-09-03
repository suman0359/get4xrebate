<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap 101 Template</title>

        <!-- Bootstrap -->
        <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
        <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/gg.css" rel="stylesheet">

        <link rel="stylesheet" href="<?php echo base_url(); ?>css/custom.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <header class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="logo">
                            <a href="<?php echo base_url(); ?>">
                                <img src="<?php echo base_url(); ?>images/logo.png" alt="Forex Cash Book | Forex Rebate | GlobeGain Corp" class="logo-img">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="conatact-no">
                            <p class="text-center">+44 (0) 20 8133 6188</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="login-register">
                            <ul class="nav navbar-nav pull-right">
                                <li><a href="" class="btn btn-1" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#loginModal">Login</a></li>
                                <li><a href="" class="btn btn-1" data-toggle="modal" data-target="#RegisterModal">Sign Up</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>



            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo base_url(); ?>"> <i class="icon icon-home"></i> Home </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo base_url(); ?>">Forex Rebates </a></li>
                            <li><a href="<?php echo base_url(); ?>">Brokers</a></li>
                            <li><a href="<?php echo base_url(); ?>">Analytics</a></li>
                            <li><a href="<?php echo base_url(); ?>">Education</a></li>
                            <li><a href="<?php echo base_url(); ?>">FAQ</a></li>
                            <li><a href="<?php echo base_url(); ?>">About us</a></li>
                            <li><a href="<?php echo base_url(); ?>">Contact us</a></li>

                            <!-- <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                              </ul>
                            </li> -->
                        </ul>

                        <!-- <ul class="nav navbar-nav navbar-right">
                          <li><a href="#">Link</a></li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="#">Action</a></li>
                              <li><a href="#">Another action</a></li>
                              <li><a href="#">Something else here</a></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="#">Separated link</a></li>
                            </ul>
                          </li>
                        </ul> -->
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

        </header>

        <!-- Login Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myLoginLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h3 class="modal-title" id="login-title">Sign In</h3>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-11">
                                <div class="gorm-group">
                                    <div class="row login-content">

                                        <div class="col-md-5">
                                            <label for="Email">Email Address <span class="pull-right text-right">:</span> </label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="user_email_address" class="form-control">
                                        </div>

                                        <div class="col-md-5">
                                            <label for="Email">Password <span class="pull-right text-right">:</span> </label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="password" name="user_password" class="form-control">
                                        </div>

                                        <div class="col-md-5"></div>

                                        <div class="col-md-7">
                                            <button type="submit" class="btn btn-super" name="login-button">Sign In <span class="glyphicon glyphicon-arrow-right pull-right"></span></button>

                                            <div class="forget-password">
                                                <a href="" class="pull-left">Sign Up</a>
                                                <a href="" class="pull-right">Forget Password</a>
                                            </div>

                                        </div>

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

        <!-- Registration Modal -->
        <div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="RegisterModalLabel">
            <div class="modal-dialog modal-register" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title" id="login-title">Sign Up</h3>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-11">
                                <div class="gorm-group">
                                    <div class="row login-content">

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
                                            <input type="text" name="user_last_name" class="form-control">
                                        </div>

                                        <div class="col-md-5">
                                            <label for="Email">Email Address <span class="pull-right text-right">:</span> </label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="user_email_address" class="form-control">
                                        </div>

                                        <div class="col-md-5">
                                            <label for="Email">Password <span class="pull-right text-right">:</span> </label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="password" name="user_password" class="form-control">
                                        </div>

                                        <div class="col-md-5">
                                            <label for="Email">Gender <span class="pull-right text-right">:</span> </label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="radio" name="gender"> Male
                                            <input type="radio" name="gender"> Female <br/>
                                        </div>
                                        
                                        <div class="clearfix"></div>

                                        <div class="col-md-5">
                                            <label for="Email">Country Name <span class="pull-right text-right">:</span> </label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="user_country" class="form-control">
                                        </div>

                                        <div class="col-md-5">
                                            <label for="Email">Phone No <span class="pull-right text-right">:</span> </label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="user_phone_no" class="form-control">
                                        </div>

                                        <div class="col-md-5"></div>

                                        <div class="col-md-7">
                                            <button type="submit" class="btn btn-super" name="login-button">Sign In <span class="glyphicon glyphicon-arrow-right pull-right"></span></button>

                                            <div class="forget-password">
                                                <a href="" class="pull-left">Sign Up</a>
                                                <a href="" class="pull-right">Forget Password</a>
                                            </div>

                                        </div>

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



        <div style="width: 100%; height: 155px;"></div>