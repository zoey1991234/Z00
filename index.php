<?php
session_start();
error_reporting(0);

// 確保資料庫連接使用 utf8mb4 編碼
include('includes/dbconnection.php');
mysqli_set_charset($con, "utf8mb4");  // 設置字符集為 utf8mb4
?>

<!DOCTYPE HTML>
<html>
<head>
<title> 動物園管理系統 | 主頁</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<meta charset="UTF-8"> <!-- 設置 HTML 頁面的字符編碼 -->

<body>
		<?php include_once('includes/header.php');?>
			<div class="header-banner">
				<div class="container">
					<div class="head-banner">
						<h3>♥</h3>
					</div>
					<div class="banner-grids">
						<div class="col-md-6 banner-grid">
							<h3>與大自然親密接觸</h3>
							<p>我們邀請您走進動物園，探索各種珍稀與野生動物的世界。動物園不僅是一個觀賞動物的地方，也是了解自然、認識物種多樣性的好機會。無論是孩子還是成人，都能在這裡找到屬於自己的學習與娛樂樂趣。</p>
						</div>
						<div class="col-md-6 banner-grid">
						<h3>奇幻動物之旅</h3>
							<p>動物園是孩子們學習與探索自然奧秘的樂園。在這裡，我們可以近距離觀察各種動物，並了解它們的生活習性與保護的重要性。參觀動物園不僅是娛樂，更是啟發對野生動物關懷的開始，讓每個人都能更珍惜這些自然界的奇蹟。</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>

			<div class="content">
				<div class="welcome">
					<div class="container">
						<h2>歡迎來到動物園星球</h2>
							<div class="welcome-grids">
								
								<?php 
 $query=mysqli_query($con,"select * from tblanimal order by rand() limit 4");
 while ($row=mysqli_fetch_array($query)) {
 ?>
								<div class="col-md-3 welcome-grid" >
									<img src="admin/images/<?php echo $row['AnimalImage'];?>" width='220' height='200' alt=" " class="img-responsive" />
									<div class="wel-info">
										<h4><a href="animal-detail.php?anid=<?php echo $row['ID'];?>"><?php echo $row['AnimalName'];?>(<?php echo $row['Breed'];?>)</a></h4>
										<p><?php echo substr($row['Description'],0,100);?>.</p>
									</div>
								</div><?php }?>

								<div class="clearfix"></div>
							</div>
					</div>
				</div>

				<div class="animals">
					<div class="container">
						<h3>動物們</h3>
						<div class="clients">
							<ul id="flexiselDemo3">
								<?php 
 $query=mysqli_query($con,"select * from tblanimal");
 while ($row=mysqli_fetch_array($query)) {
 ?>
								<li><img src="admin/images/<?php echo $row['AnimalImage'];?>" width='220' height='200' alt=" " class="img-responsive" /></li><?php }?>
							</ul>
							<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo3").flexisel({
									visibleItems: 5,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
							});
							</script>
							<script type="text/javascript" src="js/jquery.flexisel.js"></script>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
			
			<?php include_once('includes/special.php');?>
		</div>
		<?php include_once('includes/footer.php');?>
</body>
</html>
