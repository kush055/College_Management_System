<?php
include_once('header.php')
?>

<!-- main content -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>FORM EXAMPLES</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
        
        <!-- Vertical Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> VERTICAL LAYOUT </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <form>
                            <label for="email_address">Email Address</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="email_address" class="form-control" placeholder="Enter your email address">
                                </div>
                            </div>
                            <label for="password">Password</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="password" id="password" class="form-control" placeholder="Enter your password">
                                </div>
                            </div>
                            <input type="checkbox" id="remember_me" class="filled-in">
                            <label for="remember_me">Remember Me</label>
                            <br>
                            <button type="button" class="btn btn-raised btn-primary m-t-15 waves-effect">LOGIN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Vertical Layout --> 
        <!-- Vertical Layout | With Floating Label -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> VERTICAL LAYOUT <small>With floating label</small> </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <form>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="email_address" class="form-control">
                                    <label class="form-label">Email Address</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="password" id="password" class="form-control">
                                    <label class="form-label">Password</label>
                                </div>
                            </div>
                            <input type="checkbox" id="remember_me_2" class="filled-in">
                            <label for="remember_me_2">Remember Me</label>
                            <br>
                            <button type="button" class="btn btn-raised btn-primary m-t-15 waves-effect">LOGIN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Vertical Layout | With Floating Label --> 
        <!-- Horizontal Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> HORIZONTAL LAYOUT </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <form class="form-horizontal">
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="email_address_2">Email Address</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group mt-0 mb-4">
                                        <div class="form-line">
                                            <input type="text" id="email_address_2" class="form-control" placeholder="Enter your email address">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="password_2">Password</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group mt-0">
                                        <div class="form-line">
                                            <input type="password" id="password_2" class="form-control" placeholder="Enter your password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="offset-lg-2 col-lg-10">
                                    <input type="checkbox" id="remember_me_3" class="filled-in">
                                    <label for="remember_me_3">Remember Me</label>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="offset-lg-2 col-lg-10">
                                    <button type="button" class="btn btn-raised btn-primary m-t-15 waves-effect">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Horizontal Layout --> 
        <!-- Inline Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> INLINE LAYOUT </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <form class="row clearfix">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Email Address">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input type="checkbox" id="remember_me_4" class="filled-in">
                                <label for="remember_me_4">Remember Me</label>
                                <button type="button" class="btn btn-raised btn-primary m-l-15 waves-effect">LOGIN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Inline Layout --> 
        <!-- Inline Layout | With Floating Label -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> INLINE LAYOUT <small>With floating label</small> </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <form class="row clearfix">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control">
                                        <label class="form-label">Email Address</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control">
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input type="checkbox" id="remember_me_5" class="filled-in">
                                <label for="remember_me_5">Remember Me</label>
                                <button type="button" class="btn btn-raised btn-primary m-l-15 waves-effect">LOGIN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Inline Layout | With Floating Label --> 
        <!-- Multi Column -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> MULTI COLUMN </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-md-12">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-md-6">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-md-6">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-md-4">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-md-4">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-md-4">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-md-3">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-md-3">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-md-3">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-md-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-md-2">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-md-2">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-md-2">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-md-2">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-md-2">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="col-md-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Multi Column --> 
    </div>
</section>
<!-- main content -->

<div class="color-bg"></div>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/morphingsearchscripts.bundle.js"></script> <!-- Main top morphing search --> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
</body>

<!-- Mirrored from thememakker.com/templates/swift/university/form-examples.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Feb 2023 06:16:08 GMT -->
</html>