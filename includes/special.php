<div class="specials-section">
					<div class="container">
						<div class="specials-grids">
							
							<div class="col-md-4 specials1">
								<h3> 詳細資訊</h3>
								<ul>
									<li><a href="about.php">關於我們</a></li>
									<li><a href="index.php">主頁</a></li>
									<li><a href="contact.php">聯絡方式</a></li>
									<li><a href="admin/index.php">管理員</a></li>
								</ul>
							</div>
							<div class="col-md-4 specials1">
								<h3>聯絡我們</h3>
								<?php 
 $query=mysqli_query($con,"select * from  tblpage where PageType='contactus'");
 while ($row=mysqli_fetch_array($query)) {


 ?>
								<address>
									<p>Email : <?php  echo $row['Email'];?></p>
								 <p>Phone : <?php  echo $row['MobileNumber'];?></p>
								 <p><?php  echo $row['PageDescription'];?></p>
								</address><?php } ?>
							</div>
							<div class="col-md-4 specials1">
								<h3>社群</h3>
								<ul>
									<li><a href="#">facebook</a></li>
									<li><a href="#">twitter</a></li>
									<li><a href="#">google+</a></li>
									<li><a href="#">vimeo</a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>