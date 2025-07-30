<?php 
include_once('header.php')
?>

<div class="breadcrumb-bar">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-md-12 col-12">
<nav aria-label="breadcrumb" class="page-breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Schedule Timings</li>
</ol>
</nav>
<h2 class="breadcrumb-title">Schedule Timings</h2>
</div>
</div>
</div>
</div>


<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

<div class="profile-sidebar">
<div class="user-widget">
<div class="pro-avatar">JD</div>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
 <i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
</div>
<div class="user-info-cont">
<h4 class="usr-name">Jonathan Doe</h4>
<p class="mentor-type">English Literature (M.A)</p>
</div>
</div>
<div class="progress-bar-custom">
<h6>Complete your profiles ></h6>
<div class="pro-progress">
<div class="tooltip-toggle" tabindex="0"></div>
<div class="tooltip">80%</div>
</div>
</div>
<div class="custom-sidebar-nav">
<ul>
<li><a href="dashboard.php"><i class="fas fa-home"></i>Dashboard <span><i class="fas fa-chevron-right"></i></span></a></li>
<li><a href="bookings.php"><i class="fas fa-clock"></i>Bookings <span><i class="fas fa-chevron-right"></i></span></a></li>
<li><a href="schedule-timings.php" class="active"><i class="fas fa-hourglass-start"></i>Schedule Timings <span><i class="fas fa-chevron-right"></i></span></a></li>
<li><a href="chat.php"><i class="fas fa-comments"></i>Messages <span><i class="fas fa-chevron-right"></i></span></a></li>
<li><a href="invoices.php"><i class="fas fa-file-invoice"></i>Invoices <span><i class="fas fa-chevron-right"></i></span></a></li>
<li><a href="reviews.php"><i class="fas fa-eye"></i>Reviews <span><i class="fas fa-chevron-right"></i></span></a></li>
<li><a href="blog.php"><i class="fab fa-blogger-b"></i>Blog <span><i class="fas fa-chevron-right"></i></span></a></li>
<li><a href="profile.php"><i class="fas fa-user-cog"></i>Profile <span><i class="fas fa-chevron-right"></i></span></a></li>
<li><a href="login.php"><i class="fas fa-sign-out-alt"></i>Logout <span><i class="fas fa-chevron-right"></i></span></a></li>
</ul>
</div>
</div>

</div>
<div class="col-md-7 col-lg-8 col-xl-9">
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<h4 class="card-title">Schedule Timings</h4>
<div class="profile-box">
<div class="row">
<div class="col-lg-4">
<div class="form-group">
<label>Timing Slot Duration</label>
<select class="select form-control">
<option>Select</option>
<option>15 mins</option>
<option selected="selected">30 mins</option>
<option>45 mins</option>
<option>1 Hour</option>
</select>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="card schedule-widget mb-0">

<div class="schedule-header">

<div class="schedule-nav">
<ul class="nav nav-tabs nav-justified">
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#slot_sunday">Sunday</a>
</li>
<li class="nav-item">
<a class="nav-link active" data-bs-toggle="tab" href="#slot_monday">Monday</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#slot_tuesday">Tuesday</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#slot_wednesday">Wednesday</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#slot_thursday">Thursday</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#slot_friday">Friday</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#slot_saturday">Saturday</a>
</li>
</ul>
</div>

</div>


<div class="tab-content schedule-cont">

<div id="slot_sunday" class="tab-pane fade">
<h4 class="card-title d-flex justify-content-between">
<span>Time Slots</span>
<a class="edit-link" data-bs-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
</h4>
<p class="text-muted mb-0">Not Available</p>
</div>


<div id="slot_monday" class="tab-pane fade show active">
<h4 class="card-title d-flex justify-content-between">
<span>Time Slots</span>
<a class="edit-link" data-bs-toggle="modal" href="#edit_time_slot"><i class="fa fa-edit me-1"></i>Edit</a>
</h4>

<div class="user-times">
<div class="user-slot-list">
8:00 pm - 11:30 pm
<a href="javascript:void(0)" class="delete_schedule">
<i class="fa fa-times"></i>
</a>
</div>
<div class="user-slot-list">
11:30 pm - 1:30 pm
<a href="javascript:void(0)" class="delete_schedule">
<i class="fa fa-times"></i>
</a>
</div>
<div class="user-slot-list">
3:00 pm - 5:00 pm
<a href="javascript:void(0)" class="delete_schedule">
<i class="fa fa-times"></i>
</a>
</div>
<div class="user-slot-list">
6:00 pm - 11:00 pm
<a href="javascript:void(0)" class="delete_schedule">
<i class="fa fa-times"></i>
</a>
</div>
</div>

</div>


<div id="slot_tuesday" class="tab-pane fade">
<h4 class="card-title d-flex justify-content-between">
<span>Time Slots</span>
<a class="edit-link" data-bs-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
</h4>
<p class="text-muted mb-0">Not Available</p>
</div>


<div id="slot_wednesday" class="tab-pane fade">
<h4 class="card-title d-flex justify-content-between">
<span>Time Slots</span>
<a class="edit-link" data-bs-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
</h4>
<p class="text-muted mb-0">Not Available</p>
</div>


<div id="slot_thursday" class="tab-pane fade">
<h4 class="card-title d-flex justify-content-between">
<span>Time Slots</span>
<a class="edit-link" data-bs-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
</h4>
<p class="text-muted mb-0">Not Available</p>
</div>


<div id="slot_friday" class="tab-pane fade">
<h4 class="card-title d-flex justify-content-between">
<span>Time Slots</span>
<a class="edit-link" data-bs-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
</h4>
<p class="text-muted mb-0">Not Available</p>
</div>


<div id="slot_saturday" class="tab-pane fade">
<h4 class="card-title d-flex justify-content-between">
<span>Time Slots</span>
<a class="edit-link" data-bs-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
</h4>
<p class="text-muted mb-0">Not Available</p>
</div>

</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php 
include_once('footer.php')
?>

</div>


<div class="modal fade custom-modal" id="add_time_slot">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Add Time Slots</h5>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form>
<div class="hours-info">
<div class="row form-row hours-cont">
<div class="col-12 col-md-10">
<div class="row form-row">
<div class="col-12 col-md-6">
<div class="form-group">
<label>Start Time</label>
<select class="form-control form-select">
<option>Select</option>
<option>12.00 am</option>
<option>1.00 am</option>
<option>2.00 am</option>
<option>3.00 am</option>
<option>4.00 am</option>
<option>5.00 am</option>
<option>6.00 am</option>
<option>7.00 am</option>
<option>8.00 am</option>
<option>9.00 am</option>
<option>10.00 am</option>
<option>11.00 am</option>
<option>12.00 pm</option>
<option>1.00 pm</option>
<option>2.00 pm</option>
<option>3.00 pm</option>
<option>4.00 pm</option>
<option>5.00 pm</option>
<option>6.00 pm</option>
<option>7.00 pm</option>
<option>8.00 pm</option>
<option>9.00 pm</option>
<option>10.00 pm</option>
<option>11.00 pm</option>
</select>
</div>
</div>
<div class="col-12 col-md-6">
<div class="form-group">
<label>End Time</label>
<select class="form-control form-select">
<option>Select</option>
<option>12.00 am</option>
<option>1.00 am</option>
<option>2.00 am</option>
<option>3.00 am</option>
<option>4.00 am</option>
<option>5.00 am</option>
<option>6.00 am</option>
<option>7.00 am</option>
<option>8.00 am</option>
<option>9.00 am</option>
<option>10.00 am</option>
<option>11.00 am</option>
<option>12.00 pm</option>
<option>1.00 pm</option>
<option>2.00 pm</option>
<option>3.00 pm</option>
<option>4.00 pm</option>
 <option>5.00 pm</option>
<option>6.00 pm</option>
<option>7.00 pm</option>
<option>8.00 pm</option>
<option>9.00 pm</option>
<option>10.00 pm</option>
<option>11.00 pm</option>
</select>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="add-more mb-3">
<a href="javascript:void(0);" class="add-hours"><i class="fa fa-plus-circle"></i> Add More</a>
</div>
<div class="submit-section text-center">
<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
</div>
</form>
</div>
</div>
</div>
</div>


<div class="modal fade custom-modal" id="edit_time_slot">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Edit Time Slots</h5>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form>
<div class="hours-info">
<div class="row form-row hours-cont">
<div class="col-12 col-md-10">
<div class="row form-row">
<div class="col-12 col-md-6">
<div class="form-group">
<label>Start Time</label>
<select class="form-control form-select">
<option>Select</option>
<option>12.00 am</option>
<option>1.00 am</option>
<option>2.00 am</option>
<option>3.00 am</option>
<option>4.00 am</option>
<option>5.00 am</option>
<option>6.00 am</option>
<option>7.00 am</option>
<option>8.00 am</option>
<option>9.00 am</option>
<option>10.00 am</option>
<option>11.00 am</option>
<option>12.00 pm</option>
<option>1.00 pm</option>
<option>2.00 pm</option>
<option>3.00 pm</option>
<option>4.00 pm</option>
<option>5.00 pm</option>
<option>6.00 pm</option>
<option>7.00 pm</option>
<option>8.00 pm</option>
<option>9.00 pm</option>
<option>10.00 pm</option>
<option>11.00 pm</option>
</select>
</div>
</div>
<div class="col-12 col-md-6">
<div class="form-group">
<label>End Time</label>
<select class="form-control form-select">
<option>Select</option>
<option>12.00 am</option>
<option>1.00 am</option>
<option>2.00 am</option>
<option>3.00 am</option>
<option>4.00 am</option>
<option>5.00 am</option>
<option>6.00 am</option>
<option>7.00 am</option>
<option>8.00 am</option>
<option>9.00 am</option>
<option>10.00 am</option>
<option>11.00 am</option>
<option>12.00 pm</option>
<option>1.00 pm</option>
<option>2.00 pm</option>
<option>3.00 pm</option>
<option>4.00 pm</option>
<option>5.00 pm</option>
<option>6.00 pm</option>
<option>7.00 pm</option>
<option>8.00 pm</option>
<option>9.00 pm</option>
<option>10.00 pm</option>
<option>11.00 pm</option>
</select>
</div>
</div>
</div>
</div>
</div>
<div class="row form-row hours-cont">
<div class="col-12 col-md-10">
<div class="row form-row">
<div class="col-12 col-md-6">
<div class="form-group">
<label>Start Time</label>
<select class="form-control form-select">
<option>Select</option>
<option>12.00 am</option>
<option>1.00 am</option>
<option>2.00 am</option>
<option>3.00 am</option>
<option>4.00 am</option>
<option>5.00 am</option>
<option>6.00 am</option>
<option>7.00 am</option>
<option>8.00 am</option>
<option>9.00 am</option>
<option>10.00 am</option>
<option>11.00 am</option>
<option>12.00 pm</option>
<option>1.00 pm</option>
<option>2.00 pm</option>
<option>3.00 pm</option>
<option>4.00 pm</option>
<option>5.00 pm</option>
<option>6.00 pm</option>
<option>7.00 pm</option>
<option>8.00 pm</option>
<option>9.00 pm</option>
<option>10.00 pm</option>
<option>11.00 pm</option>
</select>
</div>
</div>
<div class="col-12 col-md-6">
<div class="form-group">
<label>End Time</label>
<select class="form-control form-select">
<option>Select</option>
<option>12.00 am</option>
<option>1.00 am</option>
<option>2.00 am</option>
<option>3.00 am</option>
<option>4.00 am</option>
<option>5.00 am</option>
<option>6.00 am</option>
<option>7.00 am</option>
<option>8.00 am</option>
<option>9.00 am</option>
<option>10.00 am</option>
<option>11.00 am</option>
<option>12.00 pm</option>
<option>1.00 pm</option>
<option>2.00 pm</option>
<option>3.00 pm</option>
<option>4.00 pm</option>
<option>5.00 pm</option>
<option>6.00 pm</option>
<option>7.00 pm</option>
<option>8.00 pm</option>
<option>9.00 pm</option>
<option>10.00 pm</option>
<option>11.00 pm</option>
</select>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-2"><label class="d-md-block d-sm-none d-none">&nbsp;</label><a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a></div>
</div>
<div class="row form-row hours-cont">
<div class="col-12 col-md-10">
<div class="row form-row">
<div class="col-12 col-md-6">
<div class="form-group">
<label>Start Time</label>
<select class="form-control form-select">
<option>Select</option>
<option>12.00 am</option>
<option>1.00 am</option>
<option>2.00 am</option>
<option>3.00 am</option>
<option>4.00 am</option>
<option>5.00 am</option>
<option>6.00 am</option>
<option>7.00 am</option>
<option>8.00 am</option>
<option>9.00 am</option>
<option>10.00 am</option>
<option>11.00 am</option>
<option>12.00 pm</option>
<option>1.00 pm</option>
<option>2.00 pm</option>
<option>3.00 pm</option>
<option>4.00 pm</option>
<option>5.00 pm</option>
<option>6.00 pm</option>
<option>7.00 pm</option>
<option>8.00 pm</option>
<option>9.00 pm</option>
<option>10.00 pm</option>
<option>11.00 pm</option>
</select>
</div>
</div>
<div class="col-12 col-md-6">
<div class="form-group">
<label>End Time</label>
<select class="form-control form-select">
<option>Select</option>
<option>12.00 am</option>
<option>1.00 am</option>
<option>2.00 am</option>
<option>3.00 am</option>
<option>4.00 am</option>
<option>5.00 am</option>
<option>6.00 am</option>
<option>7.00 am</option>
<option>8.00 am</option>
<option>9.00 am</option>
<option>10.00 am</option>
<option>11.00 am</option>
<option>12.00 pm</option>
<option>1.00 pm</option>
<option>2.00 pm</option>
<option>3.00 pm</option>
<option>4.00 pm</option>
<option>5.00 pm</option>
<option>6.00 pm</option>
<option>7.00 pm</option>
<option>8.00 pm</option>
<option>9.00 pm</option>
<option>10.00 pm</option>
<option>11.00 pm</option>
</select>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-2"><label class="d-md-block d-sm-none d-none">&nbsp;</label><a href="#" class="btn btn-danger trash"><i class="far fa-trash-alt"></i></a></div>
</div>
</div>
<div class="add-more mb-3">
<a href="javascript:void(0);" class="add-hours"><i class="fa fa-plus-circle"></i> Add More</a>
</div>
<div class="submit-section text-center">
<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
</div>
</form>
</div>
</div>
</div>
</div>


<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from mentoring-html.dreamguystech.com/template/schedule-timings.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Sep 2022 16:21:01 GMT -->
</html>