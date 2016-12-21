<?php  //Start the Session
	session_start();
	require('php/dbconnect.php');

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
			$fmsg = "Invalid Login Credentials.";
		}
	}

	if (isset($_SESSION['username'])){
		$username = $_SESSION['username'];
		echo "Hai " . $username . "
	";
		echo "This is the Members Area
	";
		echo "<a href='php/logout.php'>Logout</a>";

	}
	else
	{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Automobile Club - Register</title>
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
          	<?php 
        		include "dbconnect.php";
        		include "functions.php";
	        ?>
	        <?php 
	        	if(loggedIn()) {
					echo '<div class=cont-log></div>';
					echo '<a href=logout.php class=btnLogout>Log Out</a>';
	        	}
	        	else {
	        		
	        ?>
	        <div class="cont-log">
				<a href="login.php" class="btnLogin">Login</a>
	        </div>
	        <?php } ?>
            <!-- End of Login Menu !-->
            <!-- Start of Navbar !-->
            <div class="nav">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="blog.html">BLOG</a></li>
                    <li><a href="gallery.html">GALLERY</a></li>
                    <li><a href="videos.html">VIDEOS</a></li>
                    <li><a href="contacts.html">CONTACTS</a></li>
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
				<h2>Please Register</h2>
				<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      			<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
				<input class="field_user" type="text" name="username" id="username" value="" size="23" placeholder="Username"/>
				<input class="field_email" type="text" name="email" id="email" value="" size="32" placeholder="Email"/>
				<input class="field_pass" type="password" name="password" id="password" size="23" placeholder="Password" /> <br>
				</div>
				<input type="submit" name="register" value="Register" class="register_button" />
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
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="blog.html">BLOG</a></li>
                    <li><a href="gallery.html">GALLERY</a></li>
                    <li><a href="videos.html">VIDEOS</a></li>
                    <li><a href="contacts.html">CONTACTS</a></li>
                </ul>
            </div>
            <div class="sitemap2">
                <h1>Follow Us:</h1>

                <ul>
                    <li><a href="index.html">Facebook</a></li>
                    <li><a href="index.html">Twitter</a></li>
                    <li><a href="index.html">Instagram</a></li>
                    <li><a href="index.html">Snapchat</a></li>
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