<?php include("connect.php") ?>
<!DOCTYPE html>

 <html class="no-js">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Kwynch &mdash; Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />




	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />


	<link rel="shortcut icon" href="favicon.ico">


	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Salvattore -->
	<link rel="stylesheet" href="css/salvattore.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>


	</head>
	<body>

	<div id="fh5co-offcanvass">
		<a href="#" class="fh5co-offcanvass-close js-fh5co-offcanvass-close">Menu <i class="icon-cross"></i> </a>
		<h1 class="fh5co-logo"><a class="navbar-brand" href="index.html">Kwynch</a></h1>
		<ul>
			<li class="active"><a href="index.html">Home</a></li>
			<li><a href="about.html">About</a></li>
			<li><a href="authors.php">Authors</a></li>
			<li><a href="contact.html">Contact Us</a></li>
		</ul>
		<h3 class="fh5co-lead">Connect with us</h3>
		<p class="fh5co-social-icons">
			<a href="#"><i class="icon-twitter"></i></a>
			<a href="https://www.facebook.com/Kwynch-147182295828971/"><i class="icon-facebook"></i></a>
			<a href="#"><i class="icon-instagram"></i></a>
		</p>
	</div>
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="#" class="fh5co-menu-btn js-fh5co-menu-btn">Menu <i class="icon-menu"></i></a>
					<a class="navbar-brand" href="index.html">Kwynch</a>
				</div>
			</div>
		</div>
	</header>

	<!-- END .header -->

	<div id="fh5co-main">
		<div class="container" style="ba>

			<div class="row">

        <div id="fh5co-board" data-columns>
          <?php
            $query = "select * from topics";
            $result = mysqli_query($connection, $query);
          while($row = mysqli_fetch_array($result)) {
          ?>
        	<div class="item">
        		<div class="animate-box">
	        		<a href="topics.php?tid=<?php echo $row['tid'];?>" ><img src="<?php echo $row['timg'];?>" alt="Kwynch Photo"></a>
        		</div>
        		<div class="fh5co-desc"><?php echo $row['tname'];?></div>
        	</div>
        <?php } ?>
        </div>
        </div>
        <div class="row">

            <div class="col-md-8 col-md-offset-2" style="font-size:17px;">
              <table class="table table-sm table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Trending Posts</th>
                    <th scope="col" style="float:right;">Views</th>
                  </tr>
                </thead><tbody>
                <?php

                  $query = "SELECT *,sum(view) a FROM count NATURAL JOIN post group by pid order by a desc";
                  $result = mysqli_query($connection, $query);
                  $count = 0;
                while($row = mysqli_fetch_array($result)) {
                  $pid=$row['pid'];
                  if($count==4) { break ;}
                ?>
                <tr>
                    <td><?php echo $count +=1; ?></td>
                    <td><a href="content.php?pid=<?php echo $row['pid']; ?>&tid=<?php echo $row['tid']; ?>" style="color:white;text-decoration:none;" ><?php echo $row['title']; ?></a></td>
                    <td><button type="button" class="btn btn-success btn-xs" style="float:right;margin-bottom:2px;"><?php echo $row['a']; ?></button></td>
                </tr>
              <?php } ?>
              </tbody>
              </table>


              </div>

            </div>
       </div>
	</div>

	<footer id="fh5co-footer">

		<div class="container">
			<div class="row row-padded">
				<div class="col-md-12 text-center">
					<p class="fh5co-social-icons">
						<a href="#"><i class="icon-twitter"></i></a>
						<a href="https://www.facebook.com/Kwynch-147182295828971/"><i class="icon-facebook"></i></a>
						<a href="#"><i class="icon-instagram"></i></a>
					</p>
					<p><small>Copyright &copy; Kwynch. All Right Reserved. </small></p>
				</div>
			</div>
		</div>
	</footer>


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- Salvattore -->
	<script src="js/salvattore.min.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>




	</body>
</html>
