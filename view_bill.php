<?php
    include 'customer_header.php';
?>
                            <br><br>
                            <h1><font color="#606060"><center>BILL OF SERVICE</font></h1><br>
                            <?php
                                $y=$_GET['uid'];
                                $res1=mysqli_query($con,"select * from `tbl_appointment` where `Reg_no`='$y' and `Status`='2' ");
                                $row1=mysqli_fetch_array($res1);
                                if(empty($row1))
                                {
                                	echo "<br><br><center><font color=red size=3>No Bills Yet !!!</font></center>";
                                }
                                else
                                {
                            ?>
                                    <table width=75% align ="center">
                                        <tr>
                                            <th>Service Name</th>
                                            <th>Price</th>
                                            <th>View Details</th>
                                            <th>Pay</th>
                                        </tr>
                                        <?php
                                            include 'dbconnect.php';
                                            $results=mysqli_query($con,"SELECT * FROM `tbl_appointment` where `Reg_no`='$y' and `Status`='2'");
                                            while($row=mysqli_fetch_array($results))
                                            {
                                            	$i=$row['ser_cat_id'];
                                            	$_SESSION['Reg_id']=$y;
                                            	$res=mysqli_query($con,"select * from `tbl_category` where `ser_cat_id`='$i'");
                                            	$row1=mysqli_fetch_array($res);
                                                echo "<tr><td>$row1[ser_cat_name]</td>
                                                        <td>$row1[ser_cat_price]</td>
                                                        <td><a href=view_details_bill.php?uid=$row[App_id]>View Details</a></td>
                                                        <td><a href=payment_bill.php?uid=$row[App_id]>Pay</a></td>
                                                    <tr>";
                                        ?>
                                        <?php 
                                            }
                                        ?>
                                    </table><br><br>    
                                    <?php
                                }
                                    ?>
                            <style>
                            table {
                                border-collapse: collapse;
                                width: 100%;
                            }
                            th, td {
                                text-align: left;
                                padding: 8px;
                            }
                            tr:nth-child(even){background-color: #f2f2f2}
                            th {
                                background-color: #872f9c;
                                color: white;
                            }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
