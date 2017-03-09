<?php
											ini_set('mysql.connection_timeout', 300);
                                        	ini_set('default_socket_timmeout', 300);
										
											$con=mysql_connect("localhost","root","");
											mysql_select_db("alvyodsdb",$con);

											$qry='select * from images Order By id DESC';

											$result=mysql_query($qry,$con);

                                            echo "<div id='replace'>";
											while ($row = mysql_fetch_array($result))
											{
												echo '<div class="col-sm-6" style="float:left;border:1px solid black;margin:8px;background-color:#f4f5fc;height:350px;width:350px">';
												
												echo '<img height="260" src="uploads/'.$row[1].' " style="margin: 16px; max-width: 260px" alt="'.$row[2].'" >';		
																						
												echo "<p>";
												echo "$row[2]";
												echo "</p>";
												
												echo "</div>";

											}
											mysql_close($con);
                                            echo "</div>"
										
									?>