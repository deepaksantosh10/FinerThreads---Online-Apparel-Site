<?php

 $conn = mysqli_connect("localhost", "root","","finerthreads");
 if($conn === false)
{
    die("Connection failed".mysql_connect_error());
}
    $sql = "SELECT * FROM registration;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $firstname = $row['Firstname'];
    $lastname = $row['Lastname'];
    $email = $row['Email'];
    $phonenumber = $row['Phonenumber'];
    $gender = $row['Gender'];
    $dob = $row['DOB'];
    $address = $row['Address'];
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="ACCOUNT.css">
        <div class="first">
            <p><img src="logo.png" style="margin-top: 15px;margin-left: 10px;height:130px;width:220px;"></p>
            <a href="ACCOUNT.php"><img src="profile1.png" style="position: relative;left: 1030px;top: -137px;"></a>
            <a href="ACCOUNT.php"><p style="position: relative;left: 1078px;top: -186px;">Account</p></a>
            <img src="line.png" style="position: relative;left: 1170px;top: -242px;">
            <a href="WISHLIST.php"><img src="wishlist.png" style="position: relative;left: 1175px;top: -238px;"></a>
            <a href="WISHLIST.php"><p style="position: relative;left: 1250px;top: -290px;">Wishlist</p></a>
            <img src="line.png" style="position: relative;left: 1340px;top: -342px;">
            <a href="cart.html"><img src="cart.png" style="position: relative;left: 1350px;top: -338px;"></a>
            <a href="cart.html"><p style="position: relative;left: 1432px;top: -388px;">Cart</p></a>
            <img src="line.png" style="position: relative;left: 1490px;top: -450px;">
            <a href="LOGOUT.php"><img src="logout.png" style="width:40px;height:40px;position: relative;left: 1500px;top: -440px;"></a>
            <a href="LOGOUT.php"><p style="position: relative;left: 1578px;top: -495px;">LOGOUT</p></a>
            <button type="button" name="HOME" style="position:relative;margin-left:880px;top: -460px;"><a href="HOME.php">HOME</a></button>
            <button type="button" name="TAILOR-MADE" style="position:relative;margin-left:20px;top: -460px;"><a href="TAILORMADE.php">TAILOR-MADE</a></button>
            <button type="button" name="OFFERS" style="position:relative;margin-left:20px;top: -460px;"><a href="OFFER.php">OFFERS</a></button>
            <button type="button" name="ABOUT US" style="position:relative;margin-left:20px;top: -460px;"><a href="ABOUTUS.php">ABOUT US</a></button>
            <button type="button" name="CONTACT US" style="position:relative;margin-left:20px;top: -460px;"><a href="CONTACT.php">CONTACT US</a></button>
            <button type="button" name="FEEDBACK" style="position:relative;margin-left:20px;top: -460px;"><a href="FEEDBACK.php">FEEDBACK</a></button>
        </div>
        <div class="account">
        <fieldset>
            <legend><span style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-size: 30px;text-shadow: 4px 4px 4px rgba(0,0,0,0.59);color: black;">PROFILE</span></legend>
            <br>    
            <div style="position:relative;border: 2px solid black;width:400px;height:400px;margin-left:804px;margin-bottom:-408px;padding: 2px;">
                  <p style="text-align: left;margin-top:55px;">Firstname :  <?php echo $firstname; ?></p>
                  <p style="text-align: left;">Lastname :  <?php echo $lastname; ?></p>
                  <p style="text-align: left;">Email :  <?php echo $email; ?></p>
                  <p style="text-align: left;">Phone Number :  <?php echo $phonenumber; ?></p>
                  <p style="text-align: left;">Gender :  <?php echo $gender; ?></p>
                  <p style="text-align: left;">DOB:  <?php echo $dob; ?></p>
                  <p style="text-align: left;">Address :  <?php echo $address; ?></p>
                </div>
                  <div style="position:relative;border: 2px solid black;display: flex;width:400px;height:400px;margin-left: 400px;margin-bottom: 200px;">
                  <center><img src="ACC_PROFILE.png" style="width:350;height:350;padding: 20px;" ></center>
                  </div>     
        </fieldset>
        </div>
        <div class="third">
                <p style="color: #D9CDC3;position: relative;left: 600px;top: 20px;font-size:20px;">KEEP IN TOUCH</p>
                <a href=""><img src="instagram.png" style="position: relative;left: 800px;top: -28px;"></a>
                <a href=""><img src="twitter.png" style="position: relative;left: 840px;top: -28px;"></a>
                <a href=""><img src="youtube.png" style="position: relative;left: 880px;top: -28px;"></a>
                <a href=""><img src="facebook.png" style="position: relative;left: 920px;top: -28px;"></a>
        </div>
        </head>
        </html>

        

