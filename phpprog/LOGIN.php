<?php
session_start();
$conn = mysqli_connect("localhost", "root", "","finerthreads");
if($conn === false)
{
die("ERROR: Could not connect. ". mysqli_connect_error());
}
if (isset($_POST['submit']))
{
$hdnCnt=$_POST['hdnCnt']; 
if($hdnCnt=='0')
{
    if(!( $_POST['email'] == "") && !($_POST['pswd'] == "" ) )
    {
    $email=$_POST['email'];
    $password= $_POST['pswd'];
    $result = mysqli_query($conn,"SELECT * FROM registration WHERE Email='$email' and Password='$password'");
    if(mysqli_num_rows($result)>=1)
    {
        $row = mysqli_fetch_assoc($result);
        if($row['Email']=== $email && $row['Password']=== $password)
        {
            echo"<script>alert('Login successful!')</script>;";
            $_SESSION['Email'] = $row['Email'];
            $_SESSION['Password'] = $row['Password'];
            $_SESSION['Firstname'] = $row['Firstname'];
            $_SESSION['ID'] = $row['ID'];
            echo"<script>window.location = 'HOME.php';</script>";
            exit();
        }
    }
    else
    {
        echo"<script>alert('Login Failed!')</script>;";
        exit();
    }
    mysqli_close($conn);
    }
}
}
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="login.css"> 
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
        <div class="login">
            <br>
            <br>
            <br>
            <img src="loginlogo.png" style="height: 150px;width: 150px;position:relative ;left: 25px;top: 20px;">
            <br>
            <form id="frmLogin">
                <center>
                    <input type="hidden" id="hdnCnt" name="hdnCnt" value="0"/>
                <table>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td><img src="username.png" style="height: 36px;width: 30px;position:relative ;left: 19px;top: 3px;border: 2px solid;"></td>
                        <td> </td><td> </td><td> </td><td> </td>
                        <td><input type="text" id="email" name="email" placeholder="Email" onchange="check();"></td>
                    
                    </tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr>
                        <td><img src="lock.png" style="height: 36px;width: 30px;position:relative ;left: 19px;top: 2px;border: 2px solid;"></td>
                        <td> </td><td> </td><td> </td><td> </td>
                        <td><input type="password" id="pswd" name="pswd" placeholder="Password" onchange="check();"></td>
                    </tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    
                    <tr>
                        <br>
                        <td><a href="FORGOTPASSWORD.html" style="color:black;font-family:Arial;font-size:15px;position:fixed;margin-left: 18px;">Forgot Password?</a></td>
                        <br>
                        
                    </tr>
                </table>
                <br>
                <br>
                <button id="submit" name="submit" id="submit" onclick="fnSubmit()" style="background-color: black;color: #D9CDC3;border-radius: 4px;position: relative;top: 10px;left: 30px;font-size: 20px;padding: 10px;width: 125px;">Login</button>
            </center>
                
            </form>
        </div>
        <br>
        <br>
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
        
        var x = document.getElementById("email").value;
        var y = document.getElementById("pswd").value;
        var cnt=0;
        var reg1 = /^\w+([\.\_]?\w+)*\@\w+([\.]?\w{2,3})+$/;
            if (x=="" || x== null){
                cnt++;
                AddReqValidation("email");
            } 
            else
            {
                RemoveReqValidation("email");
                if(!(reg1.test(x)))
                {
                cnt++;
                AddReqValidation("email");
                alert("Please enter Valid Email-ID!!.")
                }
                else
                {
                RemoveReqValidation("email");
                }
            } 
            if (y=="" || y== null)
            {
                cnt++;
                AddReqValidation("pswd");
            } 
            else
            {
                RemoveReqValidation("pswd");
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
                var _form=document.getElementById("frmLogin");
                _form.action = '#';
                _form.method = 'POST';
                _form.submit();
            }  
        } 
    </script>
</body>
</html>

