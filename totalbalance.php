<?php

include('includes/database.php');

$sql="SELECT SUM(balance) FROM  `saving`";
$query_run=mysqli_query($con,$sql);

if(mysqli_num_rows($query_run) > 0)
                          {
                            while($row= mysqli_fetch_assoc($query_run))
                            {
                                $bal = $row['SUM(balance)'];
                               


                            }
                        }



                        $sql="SELECT SUM(balance) FROM  `current`";
                        $query_run=mysqli_query($con,$sql);

if(mysqli_num_rows($query_run) > 0)
                          {
                            while($row= mysqli_fetch_assoc($query_run))
                            {
                                $bal1 = $row['SUM(balance)'];
                               


                            }
                        }



                        $sql="SELECT SUM(depositamount) FROM  `recurring`";
                        $query_run=mysqli_query($con,$sql);

if(mysqli_num_rows($query_run) > 0)
                          {
                            while($row= mysqli_fetch_assoc($query_run))
                            {
                                $bal2 = $row['SUM(depositamount)'];
                               


                            }
                        }



                        $sql="SELECT SUM(dipoamount) FROM  `fixed`";
                        $query_run=mysqli_query($con,$sql);

if(mysqli_num_rows($query_run) > 0)
                          {
                            while($row= mysqli_fetch_assoc($query_run))
                            {
                                $bal3 = $row['SUM(dipoamount)'];
                               


                            }
                        }

                        $sql="SELECT SUM(samount) FROM  `sharesacc`";
                        $query_run=mysqli_query($con,$sql);
                        
                        if(mysqli_num_rows($query_run) > 0)
                                                  {
                                                    while($row= mysqli_fetch_assoc($query_run))
                                                    {
                                                        $bal4 = $row['SUM(samount)'];
                                                       
                        
                        
                                                    }
                                                }




                        $bal += $bal1 +$bal2 +$bal3 + $bal4 ;
                        echo $bal;

?>