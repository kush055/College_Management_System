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
