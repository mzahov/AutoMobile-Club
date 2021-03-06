<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Automobile Club - Home</title>
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
        <!-- Start of Container !-->
        <table class="cont1">
            <tr>
                <td>
                    <img src="images/col1.jpg" alt="Audi R8 Spyder"/>
                    <h1>Audi R8 Spyder 2017 </h1>
                    <hr>
                    <h3>Characteristic</h3>
                    <table class="texter">
                        <tr><th>Engine: <span style="color:white">5.2L V10</span></th></tr>
                        <tr><th>Power: <span style="color:white">540 hp</span></th></tr>
                        <tr><th>Transmission: <span style="color:white">7-speed dual-clutch</span></th></tr>
                        <tr><th>EPA Fuel Economy (MPG): <span style="color:white">14 city / 22 hwy</span></th></tr>
                        <tr><th>Top Speed: <span style="color:white">197.6 mph</span></th></tr>
                        <tr><th>Price: <span style="color:white">Starts at $180,000</span></th></tr>
                    </table>
                    <div class="morePhotos">
                        <a href="index.php"></a>
                    </div>
                </td>
                <td>
                    <img src="images/col3.jpg" alt="Audi R8 Spyder"/>
                    <h1>BMW I8 2016</h1>
                    <hr>
                    <h3>Characteristic</h3>
                    <table class="texter">
                        <tr><th>Engine: <span style="color:white">Turbocharged 1.5-Liter I3 + Electric Motor</span></th></tr>
                        <tr><th>Power: <span style="color:white">357 hp</span></th></tr>
                        <tr><th>Transmission: <span style="color:white">7-speed automatic</span></th></tr>
                        <tr><th>EPA Fuel Economy (MPG): <span style="color:white">76 city / 28 hwy</span></th></tr>
                        <tr><th>Top Speed: <span style="color:white">155 mph</span></th></tr>
                        <tr><th>Price: <span style="color:white">Starts at $140,000</span></th></tr>
                    </table>
                    <div class="morePhotos">
                        <a href="index.php"></a>
                    </div>
                </td>
                <td>
                    <img src="images/col2.jpg" alt="Audi R8 Spyder"/>
                    <h1>Mercedes-Benz AMG 2016</h1>
                    <hr>
                    <h3>Characteristic</h3>
                    <table class="texter">
                        <tr><th>Engine: <span style="color:white">4.0-liter twin-turbo V8</span></th></tr>
                        <tr><th>Power: <span style="color:white">503 hp</span></th></tr>
                        <tr><th>Transmission: <span style="color:white">6-speed automatic</span></th></tr>
                        <tr><th>EPA Fuel Economy (MPG): <span style="color:white">16 city / 22 hwy</span></th></tr>
                        <tr><th>Top Speed: <span style="color:white">195 mph</span></th></tr>
                        <tr><th>Price: <span style="color:white">Starts at $129,000</span></th></tr>
                    </table>
                    <div class="morePhotos">
                        <a href="index.php"></a>
                    </div>
                </td>

            </table>

            <table class="cont2">
                <tr>
                    <td>
                        <img src="images/col4.jpg" alt="Audi R8 Spyder"/>
                        <h1>Nissan GTR 2017</h1>
                        <hr>
                        <h3>Characteristic</h3>
                        <table class="texter2">
                            <tr><th>Engine: <span style="color:white">3.8-liter twin-turbocharged 24-valve V6</span></th></tr>
                            <tr><th>Power: <span style="color:white">565 hp</span></th></tr>
                            <tr><th>Transmission: <span style="color:white">6-speed automatic</span></th></tr>
                            <tr><th>EPA Fuel Economy (MPG): <span style="color:white">16 city / 22 hwy</span></th></tr>
                            <tr><th>Top Speed: <span style="color:white">196 mph</span></th></tr>
                            <tr><th>Price: <span style="color:white">Starts at $109,990</span></th></tr>
                        </table>
                        <div class="morePhotos2">
                            <a href="index.php"></a>
                        </div>
                    </td>
                    <td>
                        <img src="images/col5.jpg" alt="Audi R8 Spyder"/>
                        <h1>Dodge Viper ACR 2016</h1>
                        <hr>
                        <h3>Characteristic</h3>
                        <table class="texter2">
                            <tr><th>Engine: <span style="color:white">8.4-Liter V10</span></th></tr>
                            <tr><th>Power: <span style="color:white">645 hp</span></th></tr>
                            <tr><th>Transmission: <span style="color:white">6-speed manual</span></th></tr>
                            <tr><th>EPA Fuel Economy (MPG): <span style="color:white">12 city / 21 hwy</span></th></tr>
                            <tr><th>Top Speed: <span style="color:white">177 mph</span></th></tr>
                            <tr><th>Price: <span style="color:white">Starts at $117,895</span></th></tr>
                        </table>
                        <div class="morePhotos2">
                            <a href="index.php"></a>
                        </div>
                    </td>
                    <td>
                        <img src="images/col6.jpg" alt="Audi R8 Spyder"/>
                        <h1>Lamborghini Aventador 700</h1>
                        <hr>
                        <h3>Characteristic</h3>
                        <table class="texter2">
                            <tr><th>Engine: <span style="color:white">6.5-Liter V12</span></th></tr>
                            <tr><th>Power: <span style="color:white">700 hp</span></th></tr>
                            <tr><th>Transmission: <span style="color:white">7-speed ISR</span></th></tr>
                            <tr><th>EPA Fuel Economy (MPG): <span style="color:white">24,7 city / 10,7 hwy</span></th></tr>
                            <tr><th>Top Speed: <span style="color:white">217 mph</span></th></tr>
                            <tr><th>Price: <span style="color:white">Starts at $402,995</span></th></tr>
                        </table>
                        <div class="morePhotos2">
                            <a href="index.php"></a>
                        </div>
                    </td>
            </tr>
        </table>
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