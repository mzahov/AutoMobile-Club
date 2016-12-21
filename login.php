<?php  //Start the Session
	session_start();
	require('dbconnect.php');

	if (isset($_POST['username']) and isset($_POST['password'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "SELECT * FROM `user` WHERE username='$username' and password='$password'";
	
		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		$count = mysqli_num_rows($result);
		
		if ($count == 1){
			$_SESSION['username'] = $username;
		}
		else {
			$fmsg = "Invalid username or password.";
		}
	}

	if (isset($_SESSION['username'])){
		header('location: index.php');
		exit();
	}
	else
	{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Automobile Club - Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
    <!-- Start of Wrapper !-->
    <div class="wrapper">
        <header>
            <!-- Start of Logo !-->
            <div id="logo">

            </div>
            <!-- End of Logo !-->
            <!-- Start of Login Menu !-->
            <div class="cont-log">
			
            </div>
            <!-- End of Login Menu !-->
            <!-- Start of Navbar !-->
            <div class="nav">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="videos.php">VIDEOS</a></li>
                    <li><a href="contacts.php">CONTACTS</a></li>
                </ul>
            </div>
            <!-- End of Navbar !-->
        </header>
        <!-- Start of Slider !-->
        <div id="slider">

        </div>
        <!-- End of Slider !-->
        <section class="maincont">
            <form id="login" action="login.php" method="post" accept-charset="UTF-8">
				<div class="centro">
				<h2>Please Login In</h2>
				<input class="field_user" type="text" name="username" id="username" value="" size="23" placeholder="Username"/>
				<?php if(isset($fmsg)){ ?><div class="wrong" role="wrong"> <?php echo $fmsg; ?> </div><?php } ?>
				<input class="field_pass" type="password" name="password" id="password" size="23" placeholder="Password" /> <br>
				<a href="register.php">Need account? Please click here.</a>
				</div>
				<input type="submit" name="login" value="Login" class="login_button" />
			</form>
        </section>
        <footer>
            <div class="aboutus">
                <h1>About Us:</h1>

                <p>Our bussiness company presenting one of the top models cars for 2016/2017 year. You can read and learn about newest cars and be ahead in things.</p>
            </div>
            <div class="sitemap">
                <h1>Site Map:</h1>

                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="videos.php">VIDEOS</a></li>
                    <li><a href="contacts.php">CONTACTS</a></li>
                </ul>
            </div>
            <div class="sitemap2">
                <h1>Follow Us:</h1>

                <ul>
                    <li><a href="index.php">Facebook</a></li>
                    <li><a href="index.php">Twitter</a></li>
                    <li><a href="index.php">Instagram</a></li>
                    <li><a href="index.php">Snapchat</a></li>
                </ul>
            </div>
            <div class="copyright">
                <p>&copy 2016/2017 Automobile Club</p>
            </div>
        </footer>
    </div>
    <!-- End of Wrapper !-->
</body>
</html>
<?php } ?>