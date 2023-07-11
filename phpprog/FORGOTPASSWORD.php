<?php
$conn = mysqli_connect("localhost", "root","","finerthreads");
if($conn === false)
{
die("ERROR: Could not connect. ". mysqli_connect_error());
}
if(isset($_POST['submit']))
{ 
$hdnCnt = $_POST['hdnCnt']; 
if($hdnCnt==0)
{
if(!(empty($_POST['pswd'])) && !(empty($_POST['cpswd'])) && !(empty($_POST['Email'])) && !(empty($_POST['securityq'])))
{
    $Email = $_POST['Email'];
    $Password = $_POST['pswd'];
    $CPassword = $_POST['cpswd'];
    $SecurityQ = $_POST['securityq'];
    $result = mysqli_query($conn,"SELECT * FROM registration WHERE Email='$Email';");
    $row = mysqli_fetch_assoc($result);
    $sq = $row['NativePlace'];
    if($SecurityQ === $sq)
    {
        $sql = "UPDATE registration SET Password='$Password' WHERE Email='$Email';";
        $result1=mysqli_query($conn,$sql);
        if($result)
        {
            echo"<script>alert('Password change successful!!.');</script>";
            echo"<script>window.location = 'LOGIN.php';</script>";
            exit();
        }
    }
    else
    {
        echo"<script>alert('Check the entered details!!.');</script>";
    }
}
}
}
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="FORGOTPASSWORD.css"> 
            <div class="first">
            <p><img src="logo.png" style="margin-top: 15px;margin-left: 10px;height:130px;width:220px;"></p>
            <a href=""><img src="profile1.png" style="position: relative;left: 1190px;top: -136px;"></a>
            <a href=""><p style="position: relative;left: 1244px;top: -186px;">Account</p></a>
            <img src="line.png" style="position: relative;left: 1342px;top: -240px;">
            <a href=""><img src="wishlist.png" style="position: relative;left: 1347px;top: -236px;"></a>
            <a href=""><p style="position: relative;left: 1420px;top: -290px;">Wishlist</p></a>
            <img src="line.png" style="position: relative;left: 1510px;top: -340px;">
            <a href=""><img src="cart.png" style="position: relative;left: 1515px;top: -338px;"></a>
            <a href=""><p style="position: relative;left: 1600px;top: -388px;">Cart</p></a>
            <button type="button" name="HOME" style="position:relative;margin-left:880px;top: -360px;"><a href="">HOME</a></button>
            <button type="button" name="TAILOR-MADE" style="position:relative;margin-left:20px;top: -360px;"><a href="">TAILOR-MADE</a></button>
            <button type="button" name="OFFERS" style="position:relative;margin-left:20px;top: -360px;"><a href="">OFFERS</a></button>
            <button type="button" name="ABOUT US" style="position:relative;margin-left:20px;top: -360px;"><a href="">ABOUT US</a></button>
            <button type="button" name="CONTACT US" style="position:relative;margin-left:20px;top: -360px;"><a href="">CONTACT US</a></button>
            <button type="button" name="FEEDBACK" style="position:relative;margin-left:20px;top: -360px;"><a href="">FEEDBACK</a></button>
            </div>
            <div class="fp">
                <form id="frmforgot">
                <input type="hidden" name="hdnCnt" id="hdnCnt" value="0" />
                <img src="password.png" style="height:200px;width:200px;position:relative;left:8px;top:-10px;">
                <p style="text-align: center;position:relative;top:-70px;font-size: 25px;color:black;">FORGOT YOUR PASSWORD?</p>
                <p style="text-align: center;position:relative;top:-80px;font-size: 15px;color:black;">No worries! Reset your password and answer the security question.</p>
                <hr style="width: 410px;height: 1px;colour: #D9CDC3;position: relative;top: -70px">
                <input type="email" id="Email" name="Email"  style="position:relative;left: 570px; top:-60px;width: 380px;height: 35px;border-radius: 10px;font-size: medium;font-weight: bold;" placeholder=" Email-ID" onchange="check();">
                <input type="password" id="pswd" name="pswd"  style="position:relative;left: 187px; top:-15px;width: 380px;height: 35px;border-radius: 10px;font-size: medium;font-weight: bold;" placeholder=" New Password" onchange="check();">
                <input type="password" id="cpswd" name="cpswd"  style="position:relative;left: -197px; top:35px;width: 380px;height: 35px;border-radius: 10px;font-size: medium;font-weight: bold;" placeholder=" Confirm Password" onchange="check();">
                <label for ="securityq" style="position: relative;left:-580px;top:80px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size: 18px;"><b>Security Question: </b></label>
                <input type="text" id="securityq" name="securityq" style="position:relative;left: -570px; top:80px;width: 215px;height: 35px;border-radius: 10px;" placeholder="Your native place?" onchange="check();"><br>
                <div>
                <span id="spnMsg1" style="color:Red;font-size:16px;position:relative;top: 90px;"></span><br>
                <span id="spnMsg2" style="color:Red;font-size:16px;position:relative;top: 90px;"></span><br>
                </div>
                <br>
                <button type="submit" id="submit" name="submit" onclick="fnSubmit()" style="background-color: black;color: #D9CDC3;border-radius: 4px;position: relative;top: 80px;left: 0px;font-size: 20px;padding: 10px;width: 125px;">Submit</button>
                </form>
            </div>
            <div class="third">
                <p style="color: #D9CDC3;position: relative;left: 600px;top: 28px;font-size:20px;">KEEP IN TOUCH</p>
                <a href=""><img src="instagram.png" style="position: relative;left: 800px;top: -20px;"></a>
                <a href=""><img src="twitter.png" style="position: relative;left: 840px;top: -20px;"></a>
                <a href=""><img src="youtube.png" style="position: relative;left: 880px;top: -20px;"></a>
                <a href=""><img src="facebook.png" style="position: relative;left: 920px;top: -20px;"></a>
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
            var e = document.getElementById("Email").value;
            var pd = document.getElementById("pswd").value;
            var cpd = document.getElementById("cpswd").value;
            var sq = document.getElementById("securityq").value;
            var reg1 = /^\w+([\.\_]?\w+)*\@\w+([\.]?\w{2,3})+$/;
            var cnt=0;
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
                spnMsg1.innerHTML="Please enter valid Email-ID!!."; 
            }
            else
            {
                RemoveReqValidation("Email");
                spnMsg1.innerHTML="";  
            }  
            } 
            if (pd=="" || pd== null)
            {
                cnt++;
                AddReqValidation("pswd");
            } 
            else
            {
                RemoveReqValidation("pswd");
            } 
            if (cpd=="" || cpd== null)
            {
                cnt++;
                AddReqValidation("cpswd");
            } 
            else
            {
            if(pd != cpd)
            {
                cnt++;
                AddReqValidation("pswd");
                AddReqValidation("cpswd");
                spnMsg2.innerHTML="Passwords do not match!!."; 
            }   
            else
            {
                RemoveReqValidation("pswd");
                RemoveReqValidation("cpswd");
                spnMsg2.innerHTML="";
            }  
            } 
            if (sq=="" || sq== null)
            {
                cnt++;
                AddReqValidation("securityq");
            } 
            else
            {
                RemoveReqValidation("securityq");
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
                var _form=document.getElementById("frmforgot");
                _form.action = '#';
                _form.method = 'POST';
                _form.submit();
            }  
        }
    </script>
    </body>
</html>