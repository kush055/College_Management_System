<?php
include_once('header.php')
?>

<!-- main content -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Course</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Course Basic Information <small>Description text here...</small> </h2>
						<ul class="header-dropdown">
							<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
								<ul class="dropdown-menu pull-right">
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="body">                        
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="datepicker form-control" placeholder="Starts From">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Course Duration">
                                    </div>
                                </div>
                            </div>                            
                         
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Course Incharge">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <form action="https://thememakker.com/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                                    <div class="dz-message">
                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                        <h3>Drop files here or click to upload.</h3>
                                        <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em> </div>
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="form-group drop-custum">
                                    <select class="form-control show-tick">
                                        <option value="">-- Department --</option>
                                        <option value="10">Male</option>
                                        <option value="20">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" class="form-control" placeholder="Year">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Website URL">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" class="form-control no-resize" placeholder="Course Description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-raised waves-effect g-bg-blush2">Submit</button>
                                <button type="submit" class="btn btn-raised btn-default waves-effect">Cancel</button>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>        
        <div class="row clearfix">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h2>Online Bookstore <small>Description text here...</small> </h2>
						<ul class="header-dropdown">
							<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
								<ul class="dropdown-menu pull-right">
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="w3schools">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Website 1">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Website 2">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Website 3">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Website 4">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Website 5">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-raised btn-default waves-effect">Submit</button>
                                <button type="submit" class="btn btn-raised btn-default waves-effect">Cancel</button>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
    </div>
</section>
<!-- main content -->

<div class="color-bg"></div>

<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/morphingsearchscripts.bundle.js"></script> <!-- Main top morphing search --> 


<script src="assets/plugins/autosize/autosize.js"></script> <!-- Autosize Plugin Js --> 
<script src="assets/plugins/momentjs/moment.js"></script> <!-- Moment Plugin Js --> 
<script src="assets/plugins/dropzone/dropzone.js"></script> <!-- Dropzone Plugin Js -->
<!-- Bootstrap Material Datetime Picker Plugin Js --> 
<script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/pages/forms/basic-form-elements.js"></script>
</body>

<!-- Mirrored from thememakker.com/templates/swift/university/add-courses.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Feb 2023 06:15:34 GMT -->
</html>