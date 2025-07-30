<?php
include_once('config.php')
?>

<!-- main content -->


<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Government Polytechnic Himatnagar</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/themes/all-themes.css"/>
</head>

<?php
include_once('header.php');
?>


<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Total Students</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                     <div class="card-body">
                    <div class="body table-responsive">
                        <div class="row">
                <div class="col-md-12" >
                  <form action="" method="POST">
                    <div class="form-group">
                      <input type="text" name="search" id="search" placeholder="Name" required="" class="form-control" style="border: 1px solid black;">           
                    </div>
                                     
                  </form>                  
                </div>                
              </div>
                        <table class="table table-bordered table-striped table-hover dataTable" id="employee_table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>FirstName</th>
                                    <th>LastName</th>
                                      <th> Phone No.</th>

                                    <th>DOB</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>department</th>
                                    <th>Email</th>
                                    <th></th>
                                </tr>
                                 
        <?php
                                $jj=mysqli_query($link,"select * from add_students");
                                while($row=mysqli_fetch_array($jj))
                                {
                                  echo "<tr>";
                                  echo "<td>"; echo $row["id"]; echo "</td>";
                                  echo "<td>"; echo $row["first_name"]; echo "</td>";
                                  echo "<td>"; echo $row["last_name"]; echo "</td>";
                                  echo "<td>"; echo $row["phone"]; echo "</td>";
                                  echo "<td>"; echo $row["dob"]; echo "</td>";
                                  echo "<td>"; echo $row["age"]; echo "</td>";
                                  echo "<td>"; echo $row["gender"]; echo "</td>";
                                  echo "<td>"; echo $row["department"]; echo "</td>";
                                  echo "<td>"; echo $row["email"]; echo "</td>";
                                
                                echo "<td>"; ?>  
 <a href="delete_student.php?id=<?php echo $row["id"];?>"><button type="button" >Delete</button></a><?php echo "</td>";
                                  echo "</tr>";

                                }
                  ?>


                                
                            </thead>     
                        </table>
                    </div>
                </div>
            </div>
        </div>
 
    </div>
</section>

<div class="color-bg"></div>
<script src="assets/bundles/libscripts.bundle.js"></script> 
<script src="assets/bundles/vendorscripts.bundle.js"></script>
<script src="assets/bundles/morphingsearchscripts.bundle.js"></script>
<script src="assets/bundles/datatablescripts.bundle.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.flash.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.php5.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/tables/jquery-datatable.js"></script>

 <script>  
      $(document).ready(function(){  
           $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#employee_table tr').each(function(){  
                     var found = 'false';  
                     $(this).each(function(){  
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                          {  
                               found = 'true';  
                          }  
                     });  
                     if(found == 'true')  
                     {  
                          $(this).show();  
                     }  
                     else  
                     {  
                          $(this).hide();  
                     }  
                });  
           }  
      });  
 </script>  

</body>

</html>
<!-- main content -->

<div class="color-bg"></div>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/morphingsearchscripts.bundle.js"></script> <!-- Main top morphing search --> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
</body>

</html>