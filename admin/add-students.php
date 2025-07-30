<?php
include_once('header.php')
?>

<!-- main content -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Student</h2>
           
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Basic Information</h2>
						
					</div>
					<div class="body">
                        <form action="reg_data.php" id="frmFileUpload" class="" method="post" enctype="multipart/form-data">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="phone" class="form-control" placeholder="Phone No." required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="date" name="dob" class="datepicker form-control" placeholder="Date of Birth" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="age" class="form-control" placeholder="Age" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group drop-custum">
                                    <select class="form-control show-tick" name="gender">
                                        <option value="">-- Gender --</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group drop-custum">
                                    <select class="form-control show-tick" name="department" >
                                        <option value="">-- Department --</option>
                                        <option value="CE">ce</option>
                                        <option value="IT">it</option>
                                        <option value="CDDM">cddm</option>
                                       
                                    </select>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="email" class="form-control" placeholder="Enter Your Email">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                
                                    <div class="dz-message">
                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                        <h3>Drop files here or click to upload.</h3>
                                        <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em> </div>
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
                               
                            </div>
                        </div> -->
                        <div class="row clearfix">                            
                            <!-- <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" name="message" class="form-control no-resize" placeholder="Description"></textarea>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-sm-12">
                                <button type="submit" value="submit" name="submit" class="btn btn-raised g-bg-blush2">Submit</button>
                                <button type="submit" class="btn btn-raised btn-default ">Cancel</button>
                            </div>
                        </div> </form>
                    </div>
				</div>
			</div>
		</div>
        
</section>

<div class="color-bg"></div>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/morphingsearchscripts.bundle.js"></script> <!-- Main top morphing search --> 


 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/pages/forms/basic-form-elements.js"></script>
</body>

<!-- Mirrored from thememakker.com/templates/swift/university/add-students.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Feb 2023 06:15:31 GMT -->
</html>