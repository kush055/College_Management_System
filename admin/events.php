<?php
include_once('header.php')
?>

<!-- main content -->
<section class="content page-calendar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-12">
                <div class="card">
                    <div class="body">
                        <button type="button" class="btn btn-raised btn-primary btn-block m-t-0" data-toggle="modal" href="#cal-new-event"> <i class="zmdi zmdi-plus"></i> Events</button>
                        <div class="">
                            <div class="event-name b-greensea"> The Custom Event #1 <a class=" text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                            <div class="event-name b-lightred"> The Custom Event #2 <a class=" text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                            <div class="event-name b-amethyst"> The Custom Event #3 <a class=" text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                            <div class="event-name b-amethyst"> The Custom Event #4 <a class=" text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                            <div class="event-name b-success"> The Custom Event #5 <a class=" text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                            <div class="event-name b-lightred"> The Custom Event #6 <a class=" text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                            <div class="event-name b-greensea"> The Custom Event #7 <a class=" text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                            <div class="event-name b-success"> The Custom Event #8 <a class=" text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                            <div class="event-name b-success"> The Custom Event #9 <a class=" text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                            <div class="event-name b-primary"> The Custom Event #10 <a class=" text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>                
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-md-12">
                <div class="card">
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-4 col-md-5 col-sm-12">
                                <h4 class="custom-font text-default m-0">Events Schedule</h4>
                            </div>
                            <div class="col-lg-8 col-md-7 col-sm-12 text-right">
                                <button class="btn btn-raised btn-success btn-sm" id="change-view-today">today</button>
                                <button class="btn btn-raised btn-default btn-sm" id="change-view-day" >Day</button>
                                <button class="btn btn-raised btn-default btn-sm" id="change-view-week">Week</button>
                                <button class="btn btn-raised btn-default btn-sm" id="change-view-month">Month</button>
                            </div>
                        </div>
                        <div class="tcol">                       
                            <div id="calendar"></div>                       
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

<script src="assets/bundles/fullcalendarscripts.bundle.js"></script><!--/ calender javascripts --> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/pages/calendar/calendar.js"></script>
</body>

<!-- Mirrored from thememakker.com/templates/swift/university/events.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Feb 2023 06:15:21 GMT -->
</html>