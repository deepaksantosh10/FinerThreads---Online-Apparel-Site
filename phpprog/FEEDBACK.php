<?php
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
if(!(empty($_POST['Fname'])) && !(empty($_POST['Lname'])) && !(empty($_POST['Email'])) && !(empty($_POST['Pno'])) && !(empty($_POST['service'])) && !(empty($_POST['fe'])) && !(empty($_POST['rate'])) )
{
    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $Email = $_POST['Email'];
    $Pno = $_POST['Pno'];
    $service = $_POST['service'];
    $fb = $_POST['fe'];
    $rate = $_POST['rate']; 
    $sql = "INSERT INTO `feedback` (`Firstname`, `Lastname`, `Email`, `Phonenumber`, `Service`, `Feedback`, `Rating`) 
            VALUES ('$Fname', '$Lname', '$Email', '$Pno', '$service', '$fb', '$rate');";
    $result = mysqli_query($conn, $sql);
    if ($result) 
    {
          
          echo "<script>alert('Feedback submitted successfully!!.');</script>";
    }
}
}
}
?>
<html>
    <head>
        <link rel="stylesheet" href="FEEDBACK.css">
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
        <div class="feedback">
            <fieldset>
            <legend><span style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-size: 30px;text-shadow: 4px 4px 4px rgba(0,0,0,0.59);color: black;">FEEDBACK FORM</span></legend>
            <form id="frmfeedback">
                <center>
                <input type="hidden" name="hdnCnt" id="hdnCnt" value="0" />
                <table>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td><label for="Fname">First Name</label></td>
                        <td> </td><td> </td><td> </td><td> </td>
                        <td><input type="text" id="Fname" name="Fname" onchange="check();"></td>
                        <td><label for="Lname">Last Name</label></td>
                        <td> </td><td> </td><td> </td><td> </td>
                        <td><input type="text" id="Lname" name="Lname" onchange="check();"></td>
                    </tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr>
                        <td><label for="Email">Email</label></td>
                        <td> </td><td> </td><td> </td><td> </td>
                        <td><input type="email" id="Email" name="Email" onchange="check();"></td>
                        <td><label for="Pno">Phone Number</label></td>
                        <td> </td><td> </td><td> </td><td> </td>
                        <td><input type="tel" id="Pno" name="Pno" onchange="check();"></td>
                    </tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr>
                        <td><label for="service">How was your experience?</label></td>
                        <td> </td><td> </td><td> </td><td> </td>
                        <td>
                            <select id="service" name="service" style="width: 200;height: 30px;" onchange="check();">
                                <option value="" selected disabled hidden>--Select your experience--</option>
                                <option value="excellent">Excellent</option>
                                <option value="verygood">Very Good</option>
                                <option value="good">Good</option>
                                <option value="average">Average</option>
                                <option value="poor">Poor</option>
                            </select>
                        </td>
                    </tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr>
                        <td><label for="fe">Please provide your feedback</label></td>
                        <td> </td><td> </td><td> </td><td> </td>
                        <td><textarea cols="40" rows="5" name="fe" id="fe" style="resize: none;" onchange="check();"></textarea></td>
                    </tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr>
                        <td>
                            <label for="rate">Choose your Rating :</label></td>
                            <input type="text" id="rate" name="rate"  placeholder="(1-10)" style="position:relative;top:300;left:-100;" onchange="check();">
                    </tr>
                </table>
                <div>
                    <span id="spnMsg" style="color:Red;font-size:14px"></span><br>
                    <span id="spnMsg1" style="color:Red;font-size:14px"></span><br>
                </div>
                <br>
                <button type="submit" id="submit" name="submit"  value="submit" onclick="fnSubmit()" style="background-color: black;color: #D9CDC3;border-radius: 4px;position: relative;top: 10px;font-size: 20px;padding: 10px;width: 125px;">Submit</button>
            </center> 
            </form>
        </fieldset>
        </div>
        <div class="third">
        <p style="color: #D9CDC3;position: relative;left: 600px;top: 13px;font-size:20px;">KEEP IN TOUCH</p>
                <a href=""><img src="instagram.png" style="position: relative;left: 800px;top: -34px;"></a>
                <a href=""><img src="twitter.png" style="position: relative;left: 840px;top: -34px;"></a>
                <a href=""><img src="youtube.png" style="position: relative;left: 880px;top: -34px;"></a>
                <a href=""><img src="facebook.png" style="position: relative;left: 920px;top: -34px;"></a>
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
            var ln = document.getElementById("Lname").value;
            var e = document.getElementById("Email").value;
            var p = document.getElementById("Pno").value;
            var r = document.getElementById("rate").value;
            var f = document.getElementById("fe").value;
            var s = document.getElementById("service").value;
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
            if (ln=="" || ln== null){
                cnt++;
                AddReqValidation("Lname");
            } 
            else{
                RemoveReqValidation("Lname");
            } 
            if (e=="" || e== null){
                cnt++;
                AddReqValidation("Email");
            } 
            else{
                RemoveReqValidation("Email");
            } 
            if (p=="" || p== null)
            {
                cnt++;
                AddReqValidation("Pno");
            } 
            else
            {
                RemoveReqValidation("Pno");
            } 
            if (r=="" || r== null)
            {
                cnt++;
                AddReqValidation("rate");
            } 
            else
            {
                RemoveReqValidation("rate");
            } 
            if (f=="" || f== null)
            {
                cnt++;
                AddReqValidation("fe");
            } 
            else
            {
                RemoveReqValidation("fe");
            } 
            if (s=="" || s== null)
            {
                cnt++;
                AddReqValidation("service");
            } 
            else
            {
                RemoveReqValidation("service");
            } 
            if(!(reg1.test(e)))
            {
                cnt++;
                AddReqValidation("Email");
                spnMsg.innerHTML="Please enter valid Email-ID!!."; 
            }
            else
            {
                RemoveReqValidation("Email");
                spnMsg.innerHTML="";  
            }    
            if(!(reg2.test(p)))
            {
                cnt++;
                AddReqValidation("Pno");
                spnMsg1.innerHTML="Please enter valid Phone Number!!."; 
            }
            else
            {
                RemoveReqValidation("Pno");
                spnMsg1.innerHTML="";  
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
                var _form=document.getElementById("frmfeedback");
                _form.action = '#';
                _form.method = 'POST';
                _form.submit();
            }  
        }   
    </script>
</body>
</html>