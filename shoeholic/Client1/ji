
                                            </li>
                                            <li class="static"><a href="#">Category <i class="fa fa-angle-down"></i></a>
                                                <ul class="megamenu dropdown">
                                                    <li class="mega-title"><a href="#">Men</a>
                                                        <ul>
														<?php
												$sql="select*from `sub-category` s join category c where s.C_id =c.C_id and s.C_id='3'";
												$result=mysqli_query($conn,$sql);
										        while($row=mysqli_fetch_array($result))
												{
										    ?><li><a href="shop-list-right-sidebar.html"><?php echo $row['Sub_C_name']?></a></li>
                                                         <?php
												}
														 ?>          
                                            		  </ul>
                                                    </li>
                                                    <li class="mega-title"><a href="#">Women</a>
                                                        <ul>
																<?php
												$sql="select*from `sub-category` s join category c where s.C_id =c.C_id and s.C_id='4'";
												$result=mysqli_query($conn,$sql);
										        while($row=mysqli_fetch_array($result))
												{
                                                           
                                                           ?> <li><a href="product-details-group.html"><?php echo $row['Sub_C_name']?></a></li>
                                                        <?php
												}
														?>
														</ul>
                                                    </li>
                                                    <li class="mega-title"><a href="#">Kids</a>
                                                        <ul>
																		<?php
												$sql="select*from `sub-category` s join category c where s.C_id =c.C_id and s.C_id='5'";
												$result=mysqli_query($conn,$sql);
										        while($row=mysqli_fetch_array($result))
												{
                                                            
                                                           ?> <li><a href="wishlist.html"><?php echo $row['Sub_C_name']?></a></li>
														   <?php
												}
														   ?>
                                                        </ul>
                                                    </li>