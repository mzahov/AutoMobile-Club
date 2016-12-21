<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Automobile Club - Gallery</title>
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
	        		if (isset($_SESSION['username'])){
	        			$username = $_SESSION['username'];
	        			echo "<div class=get_username><span>Welcome " . $username . "</span></div>";
						echo '<div class=cont-log></div>';
						echo '<a href=logout.php class=btnLogout>Log Out</a>';
						echo '<a href=logout.php class=btnAdmin>Admin Panel</a>';
	        		}
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