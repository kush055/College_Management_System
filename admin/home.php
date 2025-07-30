    <?php
include_once('header.php')
?>

<!--Side menu and right menu -->

<!-- main content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <div class="d-sm-flex justify-content-between">
                <div>
                    <h2>Dashboard</h2>
                    
                </div>
             
            </div>
        </div>
        
        <div class="row clearfix top-report row-deck">
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="card">
                    <div class="body">
                        <h3>1,100</h3>
                        <p class="text-muted">New Admission</p>
                        <div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <span class="text-small">4% higher than last Year</span> </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="card">
                    <div class="body">
                        <h3>500</h3>
                        <p class="text-muted">Total Students</p>
                        <div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <span class="text-small">4% higher than last Year</span> </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="card">
                    <div class="body">
                        <h3>25</h3>
                        <p class="text-muted">Total Teacher</p>
                        <div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <span class="text-small"></span> </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="card">
                    <div class="body">
                        <h3> 70%</h3>
                        <p class="text-muted">Total Material Access (Years)</p>
                        <div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                     </div>
                </div>
            </div>            
        </div>                
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card">
                    <div class="header">
                        <h2>Student Addmission Rate</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <canvas id="line_chart" height="150"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card">
                    <div class="header">
                        <h2>Student Passing</h2>
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
                        <canvas id="bar_chart" height="150"></canvas>
                    </div>
                </div>
            </div>
        </div>
        
                    
            
                    
           
        <div class="row clearfix row-deck">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Exam Toppers</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body table-responsive">                        
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Charts</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Param</td>
                                    <td>
                                        <span class="sparkbar">5,8,6,3,5,9,2</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kush</td>
                                    <td>
                                       <span class="sparkbar">10,8,9,3,5,8,5</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Harsh</td>
                                    <td>
                                        <span class="sparkbar">10,8,1,3,3,8,7</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Harshil</td>
                                    <td>
                                        <span class="sparkbar">2,8,9,8,5,1,5</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Darshan</td>
                                    <td>
                                        <span class="sparkbar">1,8,2,3,9,8,5</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sarthak</td>
                                    <td>
                                        <span class="sparkbar">10,8,1,3,2,8,5</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card activities">
                    <div class="header">
                        <h2>Activities</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body" id="timeline">
                            <div class="timeline-body">
                            <div class="timeline m-border">
                                <div class="timeline-item">
                                    <div class="item-content">
                                        <div class="text-small">Just now</div>
                                        <p>It is a long established.</p>
                                    </div>
                                </div>
                                <div class="timeline-item border-info">
                                    <div class="item-content">
                                        <div class="text-small">11:30</div>
                                        <p>There are many variations</p>
                                    </div>
                                </div>
                                <div class="timeline-item border-warning border-l">
                                    <div class="item-content">
                                        <div class="text-small">10:30</div>
                                        <p>Contrary to popular belief </p>
                                    </div>
                                </div>
                                <div class="timeline-item border-warning">
                                    <div class="item-content">
                                        <div class="text-small">3 days ago</div>
                                        <p>vacation</p>
                                    </div>
                                </div>
                                <div class="timeline-item border-danger">
                                    <div class="item-content">
                                        <div class="text--muted">Thu, 10 Mar</div>
                                        <p>Contrary to popular belief</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Attendance</h2>
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
                        <ul class="basic-list">
                            <li class="pt-0">param <span class="float-right label-danger label">91%</span></li>
                            <li>Kush <span class="float-right label-purple label">50%</span></li>
                            <li>Harsh<span class="float-right label-success label">90%</span></li>
                            <li>harshil <span class="float-right label-info label">75%</span></li>
                            <li>Darshan <span class="float-right label-warning label">60%</span></li>
                            <li class="pb-0">Sarthak <span class="float-right label-success label">91%</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix"> 
            <!-- Task Info -->
            
            <!-- #END# Task Info --> 
        
</section>
<!-- main content -->

<div class="color-bg"></div>

<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/morphingsearchscripts.bundle.js"></script> <!-- Main top morphing search -->

<script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script> <!-- Sparkline Plugin Js -->
<script src="assets/plugins/chartjs/Chart.bundle.min.js"></script> <!-- Chart Plugins Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/pages/charts/sparkline.min.js"></script> 
<script src="assets/js/pages/index.js"></script>
</body>


</html>