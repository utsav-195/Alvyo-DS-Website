<?php
                                        ini_set('mysql.connection_timeout', 300);
                                        ini_set('default_socket_timmeout', 300);
                                                            
                                      
                                          # code...
                                      


                                        $find=$_POST['searcht'];
                                        $find=mysql_real_escape_string($find);
                                                                               
                                        
                                        $con=mysql_connect("localhost","root","");
                                        mysql_select_db("alvyodsdb",$con);

                                        
                                        $qry="select * from images WHERE descript LIKE '%$find%'";
                                        $result=mysql_query($qry,$con);

                                        $i=0;
                                        while ($row = mysql_fetch_array($result))
                                        {
                                            echo "<center>";
                                            echo '<div class="col-sm-6" style="border:1px solid black;margin:16px;background-color:#f4f5fc;height:350px;width:350px">';

                                            echo '<img height="260" src="uploads/'.$row[1].' " style="margin: 16px; max-width:260px" alt="'.$row[2].'">';
                                            
                                            echo "<p>";
                                                echo "$row[2]";
                                                echo "</p>";
                                                
                                                echo "</div>";
                                                echo "</center>";
                                        }
                                        mysql_close($con);
                                      
                                        
                                

                                    ?>

