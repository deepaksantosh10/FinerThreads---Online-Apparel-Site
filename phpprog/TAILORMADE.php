<?php
session_start();
$conn = mysqli_connect("localhost", "root", "","finerthreads");
if($conn === false)
{
die("ERROR: Could not connect. ". mysqli_connect_error());
}
if(isset($_POST['submit'])) 
{  
$hdnCnt = $_POST['hdnCnt']; 
if($hdnCnt==0)
{
if(!(empty($_POST['Fname'])) && !(empty($_POST['Email'])) && !(empty($_POST['Pno'])) && !(empty($_POST['Cname'])) && !(empty($_POST['Colour'])) && !(empty($_POST['Com'])) && !(empty($_POST['EDD'])) && !(empty($_POST['Mat'])) && !(empty($_POST['neck'])) && !(empty($_POST['waist'])) && !(empty($_POST['armlength'])) && !(empty($_POST['PantLength'])) && !(empty($_POST['Desc'])) )
{
    $Firstname = $_POST['Fname'];
    $Email = $_POST['Email']; 
    $Phonenumber = $_POST['Pno']; 
    $categoryName = $_POST['Cname'];
    $color = $_POST['Colour'];
    $composition = $_POST['Com'];
    $expectedDeliveryDate = $_POST['EDD'];
    $material = $_POST['Mat'];
    $Neck = $_POST['neck'];
    $waist = $_POST['waist'];
    $armLength = $_POST['armlength'];
    $shoulder = $_POST['Shoulder'];
    $pantLength = $_POST['PantLength'];
    $description = $_POST['Desc'];
    $sql = "INSERT INTO `tailormade`(`Firstname`,`Email`,`Phonenumber`,`ExpectedDeliveryDate`,`CategoryName`,`Color`,`Composition`,`Material`,`Neck`,`Waist`,`ArmLength`,`Shoulder`,`PantLength`,`Description`) 
            VALUES('$Firstname','$Email','$Phonenumber','$expectedDeliveryDate','$categoryName','$color','$composition','$material','$Neck','$waist','$armLength','$shoulder','$pantLength','$description');";
    $result = mysqli_query($conn, $sql);
    $sql1 = "SELECT * FROM `tailormade` WHERE Email='$Email';";
    $result1 = mysqli_query($conn,$sql1);
    $row = mysqli_fetch_assoc($result1);
    $_SESSION['Email'] = $row['Email'];
    if($result) 
    {       
          echo "<script>alert('Order placed successfully!!.');</script>";
          exit();
    }  
}
}
}
$Email = $_SESSION['Email'];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
               
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'finerthreads1234@gmail.com';                    
    $mail->Password   = 'bxqzjchjoahmtgvr';                             
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;    //ENABLE TLS ENCRYPTION        
    $mail->Port       = 465; 
    $mail->addAttachment('catalogue.pdf');                                

  
    $mail->setFrom('finerthreads1234@gmail.com', 'Finer Threads');

    $mail->addAddress($Email); 


    $mail->isHTML(true);                                 
    $mail->Subject = 'Order Confirmation of Tailor-made Apparels';
    $mail->Body    = '<h3>Thank you for choosing Finerthreads to get your custom-made clothes!</h3> <br>We are glad to confirm your order placed at Finerthreads. We have received your form and we will shortly start the stitching process. <br>We will contact you once your apparel is ready. Kindly note that we accept only Cash On Delivery(COD) payment for Tailor-made clothing.<br><br><mark>PLEASE REFER TO THE CATALOGUE ATTACHED BELOW FOR MORE IDEAS AND PRICE DETAILS AND FILL IN THE GOOGLE FORM GIVEN BELOW!</mark><br><br><a href="https://docs.google.com/forms/d/e/1FAIpQLSePOvRQVpr-rVQy9fkqbNmL5HuRzsOfyvF4f3ErpsqMEA5vtA/viewform?usp=sf_link">FinerThreads-Google Form</a><br><br>Thank You! Visit us again!';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo"<script>'window.location='TAILORMADE.php'</script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
<html>
    <head>
        <link rel="stylesheet" href="TAILORMADE.css">
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
        <div class="tailormade">
            <fieldset>
                <legend align="left"><span style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-size: 30px;text-shadow: 4px 4px 4px rgba(0,0,0,0.59);color: black;">TAILOR-MADE</span></legend>
                <form id="frmTailor">
                <input type="hidden" name="hdnCnt" id="hdnCnt" value="0" />
                    <center>
                    <table>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td><label for ="patternimage">Pattern Image</label></td>
                            <td> </td><td> </td><td> </td><td> </td>
                            <td>
                                <input type="file" id="patternimage" name="patternimage" style="background-color: #FFFAF2;">
                                <button id="upload" name="upload" onclick="fnUpload();" style="font-size:15px;border:1px black solid;background-color:#e8ebed;padding: 4px;border-radius: 4px;position:relative;top:1;">Upload</button>
                            </td>
                            <td><label for ="CategoryImage">Category Image</label></td></td>
                            <td> </td><td> </td><td> </td><td> </td>
                            <td>
                                <input type="file" id="CategoryImage" name="CategoryImage" style="background-color: #FFFAF2;">
                                <button id="upload1" name="upload1" onclick="fnUpload1();" style="font-size:15px;border:1px black solid;background-color:#e8ebed;padding: 4px;border-radius: 4px;position:relative;top:1;">Upload</button>
                            </td>
                        </tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr>
                        <td>
                            <label for="Pno">Phone Number</label></td>
                            <td> </td><td> </td><td> </td><td> </td>
                            <td><input type="tel" id="Pno" name="Pno" onchange="check();"></td>
                            <td><label for="EDD">Expected Delivery Date</label></td>
                            <td> </td><td> </td><td> </td><td> </td>
                            <td><input type="date" id="EDD" name="EDD" onchange="check();"></td>
                        </tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr>
                        <td>
                            <label for="Cname">Category Name</label></td>
                            <td> </td><td> </td><td> </td><td> </td>
                            <td><input type="text" id="Cname" name="Cname" onchange="check();"></td>
                            <td><label for="Colour">Colour</label></td>
                            <td> </td><td> </td><td> </td><td> </td>
                            <td><input type="color" id="Colour" name="Colour" onchange="check();"></td>
                        </tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr>
                            <td><label for="Fname">Name</label></td>
                            <td> </td><td> </td><td> </td><td> </td>
                            <td><input type="text" id="Fname" name="Fname" onchange="check();"></td>
                            <td><label for="Email">Email-ID</label></td>
                            <td> </td><td> </td><td> </td><td> </td>
                            <td><input type="email" id="Email" name="Email" onchange="check();"></td>
                        </tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr>
                            <td><label for="Com">Composition</label></td>
                            <td> </td><td> </td><td> </td><td> </td>
                            <td><input type="text" id="Com" name="Com" onchange="check();"></td>
                            <td><label for="Mat">Material</label></td>
                            <td> </td><td> </td><td> </td><td> </td>
                            <td>
                                <select id="Mat" name="Mat" style="width: 200;height: 30px;" onchange="check();">
                                    <option value="" selected disabled hidden>Select your choice of material</option>
                                    <option value="cotton">Cotton</option>
                                    <option value="polyster">Polyster</option>
                                    <option value="silk">Silk</option>
                                    <option value="wool">Wool</option>
                                    <option value="linen">Linen</option>
                                </select>
                            </td>
                        </tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr>
                            <td><label for ="measurements">Measurements</label></td>
                        </tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr>
                            <td colspan="20"><label for="neck">Neck</label>
                            <input type="number" id="neck" name="neck" style="width: 50;" onchange="check()">
                            <label for="waist">Waist</label>
                            <input type="number" id="waist" name="waist" style="width: 50;" onchange="check()">
                            <label for="armlength">Arm Length</label>
                            <input type="number" id="armlength" name="armlength" style="width: 50;" onchange="check()">
                            <label for="Shoulder">Shoulder</label>
                            <input type="number" id="Shoulder" name="Shoulder" style="width: 50;" onchange="check()">
                            <label for="PantLength">Pant Length</label>
                            <input type="number" id="PantLength" name="PantLength" style="width: 50;" onchange="check()"></td>
                        </tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr>
                            <td><label for="Desc">Description</label></td>
                            <td> </td><td> </td><td> </td><td> </td>
                            <td><textarea onchange="check()" cols="40" rows="5" id="Desc" name="Desc" style="resize: none;" ></textarea></td>
                        </tr>
                    </table>
                </center> 
                <button id="submit" name="submit" onclick="fnSubmit()" style="background-color: black;color: #D9CDC3;border-radius: 4px;position: relative;top:20px;left: 20px; font-size: 20px;padding: 10px;width: 125px;">Place Order</button><br><br>
                </form>
            </fieldset>
            </div> 
            <br><br>
            <div class="third">
          <p style="color: #D9CDC3;position: relative;left: 600px;top: 13px;font-size:20px;">KEEP IN TOUCH</p>
          <a href=""><img src="instagram.png" style="position: relative;left: 800px;top: -34px;"></a>
          <a href=""><img src="twitter.png" style="position: relative;left: 840px;top: -34px;"></a>
          <a href=""><img src="youtube.png" style="position: relative;left: 880px;top: -34px;"></a>
          <a href=""><img src="facebook.png" style="position: relative;left: 920px;top: -34px;"></a>
            </div>
        </div>
    </head>
<body>
<script type="text/javascript">
    function AddReqValidation(element)
    {
        document.getElementById(element).style.border="2px solid #f00";
    }
    function RemoveReqValidation(element)
    {
        document.getElementById(element).style.border="1px solid #000";
    }


        function check()
        {
            var returnval=true;
            var hdnCnt = document.getElementById("hdnCnt");
            var fn = document.getElementById("Fname").value;
            var e = document.getElementById("Email").value;
            var cn = document.getElementById("Cname").value;
            var c = document.getElementById("Colour").value;
            var p = document.getElementById("Pno").value;
            var edd = document.getElementById("EDD").value;
            var com = document.getElementById("Com").value;
            var mat = document.getElementById("Mat").value;
            var neck = document.getElementById("neck").value;
            var waist = document.getElementById("waist").value;
            var armlength = document.getElementById("armlength").value;
            var shoulder = document.getElementById("Shoulder").value;
            var pantlength = document.getElementById("PantLength").value;
            var Desc = document.getElementById("Desc").value;
            var reg1 = /^\w+([\.\_]?\w+)*\@\w+([\.]?\w{2,3})+$/;
            var reg2 = /^\d{10}$/;
            var cnt=0; 
            if (fn=="" || fn== null){
                cnt++;
                AddReqValidation("Fname");
            } 
            else{
                RemoveReqValidation("Fname");
            } 
            if (e=="" || e== null){
                cnt++;
                AddReqValidation("Email");
            } 
            else{
                RemoveReqValidation("Email");
                if(!(reg1.test(e)))
            {
                cnt++;
                AddReqValidation("Email");
                alert("Please enter a valid Email-ID!!.") 
            }
            else
            {
                RemoveReqValidation("Email");
            }  
            } 
            if (cn=="" || cn== null){
                cnt++;
                AddReqValidation("Cname");
            } 
            else{
                RemoveReqValidation("Cname");   
            } 
            if (p=="" || p== null)
            {
                cnt++;
                AddReqValidation("Pno");
            } 
            else
            {
                RemoveReqValidation("Pno");
                if(!(reg2.test(p)))
            {
                cnt++;
                AddReqValidation("Pno");
                alert("Please enter valid Phone Number!!."); 
            }
            else
            {
                RemoveReqValidation("Pno");
            }
            } 
            if (edd=="" ||edd== null){
                cnt++;
                AddReqValidation("EDD");
            } 
            else{
                RemoveReqValidation("EDD");   
            } 
            if (com=="" || com== null){
                cnt++;
                AddReqValidation("Com");
            } 
            else{
                RemoveReqValidation("Com");   
            } 
            if (mat=="" || mat== null){
                cnt++;
                AddReqValidation("Mat");
            } 
            else
            {
                RemoveReqValidation("Mat");   
            } 
            if (neck==""||neck== null)
            {
                cnt++;
                AddReqValidation("neck");
            } 
            else
            {
                RemoveReqValidation("neck");   
            } 
            if (waist==""||waist== null)
            {
                cnt++;
                AddReqValidation("waist");
            } 
            else
            {
                RemoveReqValidation("waist");
            } 
            if (armlength==""||armlength== null)
            {
                cnt++;
                AddReqValidation("armlength");
            } 
            else
            {
                RemoveReqValidation("armlength");
            } 
            if (shoulder==""||shoulder== null)
            {
                cnt++;
                AddReqValidation("Shoulder");
            } 
            else
            {
                RemoveReqValidation("Shoulder");
            } 
            if (pantlength==""||pantlength== null)
            {
                cnt++;
                AddReqValidation("PantLength");
            } 
            else
            {
                RemoveReqValidation("PantLength");
            }
            if (Desc=="" || Desc== null)
            {
                cnt++;
                AddReqValidation("Desc");
            } 
            else
            {
                RemoveReqValidation("Desc");
            }
            hdnCnt.value=cnt;
            if(cnt>0)  
            {
                returnval=false;
                return false;      
            }
            else
            {
                return returnval;
            }
        }
        function fnSubmit()
        {
            var ret=check();          
            if(ret)
            {
                var _form=document.getElementById("frmTailor");
                _form.action = '#';
                _form.method = 'POST';
                _form.submit();
            }  
        }   
        function fnUpload()
        {
                     
                var _form=document.getElementById("frmTailor");
                _form.action = 'FU.php';
                _form.method = 'POST';
                _form.enctype = 'multipart/form-data';
                _form.submit(); 
        }  
        function fnUpload1()
        {
                     
                var _form=document.getElementById("frmTailor");
                _form.action = 'FU1.php';
                _form.method = 'POST';
                _form.enctype = 'multipart/form-data';
                _form.submit(); 
        }  
</script>
</body>
</html>