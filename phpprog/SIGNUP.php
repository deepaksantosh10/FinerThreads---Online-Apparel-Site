<?php
$conn = mysqli_connect("localhost", "root","","finerthreads");
if($conn === false)
{
die("ERROR: Could not connect. ". mysqli_connect_error());
}
if(isset($_POST['submit']))
{  
$hdnCnt = $_POST['hdnCnt']; 
if($hdnCnt==0){
    if(!(empty($_POST['Fname'])) && !(empty($_POST['Lname'])) && !(empty($_POST['Email'])) && !(empty($_POST['Pno'])) && !(empty($_POST['gen'])) && !(empty($_POST['dob'])) && !(empty($_POST['pswd'])) && !(empty($_POST['cpswd'])) && !(empty($_POST['te'])) && !(empty($_POST['securityq'])))
    {
        $Firstname = $_POST['Fname']; 
        $Lastname = $_POST['Lname'];
        $Email = $_POST['Email']; 
        $Phonenumber = $_POST['Pno']; 
        $Gender = $_POST['gen']; 
        $DOB = $_POST['dob'];
        $Password = $_POST['pswd']; 
        $Address = $_POST['te'];    
        $NativeP =  $_POST['securityq'];
        $result = mysqli_query($conn,"SELECT * FROM registration WHERE Email='$Email'");
        $data = mysqli_num_rows($result);
        if($data>=1)     
        {
            echo"<script>alert('User already exists!!! Please try with another e-Mail Id !!.');</script>";
            echo"<script>window.location = 'SIGNUP.php';</script>";
        }
        else
        {
            $sql = "INSERT INTO `registration` (`Firstname`, `Lastname`, `Email`, `Phonenumber`, `Gender`, `DOB`, `Password`,`Address`,`NativePlace`) 
                VALUES ('$Firstname', '$Lastname', '$Email', '$Phonenumber', '$Gender', '$DOB', '$Password','$Address','$NativeP');";
            $result = mysqli_query($conn, $sql);
        }
        if($result) 
        {
              echo "<script>alert('Account created successfully!');</script>";              
              echo"<script>window.location = 'MAIN.php';</script>";
        }
        
    }
    else{
        return false;
    }
}
else{
    return false;
}

}
?>
<html>
    <head>
        <link rel="stylesheet" href="SIGNUP.css">
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
        <div class="signup">
            <fieldset>
            <legend><span style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-size: 30px;text-shadow: 4px 4px 4px rgba(0,0,0,0.59);color: black;">SIGN UP</span></legend>
           
            <form id="frmSignUp">
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
                        <td><input type="email" id="Email"  name="Email" onchange="check();"></td>
                        <td><label for="Pno">Phone Number</label></td>
                        <td> </td><td> </td><td> </td><td> </td>
                        <td><input type="tel" id="Pno" name="Pno" onchange="check();"></td>
                    </tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr>
                        <td><label for="gen">Gender</label></td>
                        <td> </td><td> </td><td> </td><td> </td>
                        <td>
                            <select id="gen" name="gen" style="width: 200;height: 30px;" onchange="check();">
                                <option value="" selected disabled hidden>--Select your gender--</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select>
                        </td>
                        <td><label for="dob">Date Of Birth</label></td>
                        <td> </td><td> </td><td> </td><td> </td>
                        <td><input type="date" id="dob" name="dob" onchange="check();"></td>
                    </tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr>
                        <td><label for ="pswd">Password</label></td>
                        <td> </td><td> </td><td> </td><td> </td>
                        <td><input type="password" id="pswd" name="pswd" onchange="check();"></td>
                        <td><label for ="cpswd">Confirm Password</label></td></td>
                        <td> </td><td> </td><td> </td><td> </td>
                        <td><input type="password" id="cpswd" name="cpswd" onchange="check();"></td>
                    </tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr>
                        <td><label for="te">Address</label></td>
                        <td> </td><td> </td><td> </td><td> </td>
                        <td><textarea cols="40" rows="5" name="te" id="te" style="resize: none;" onchange="check();"></textarea></td>
                    </tr>
                    
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr>
                        <td><label for ="securityq">Native Place</label></td>
                        <td> </td><td> </td><td> </td><td> </td>
                        <td><input type="text" id="securityq" name="securityq" onchange="check();"></td>
                    </tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr>
                        <td colspan="15"><input type="checkbox" id="TC" name="TC" style="width: 15px;height: 15px;" onchange="check();"><label for="TC">I agree to <a href="">Terms & Conditions</a></label></td>
                    </tr>

                </table>
                <div>
                    <span id="spnMsg" style="color:Red;font-size:14px"></span><br>
                    <span id="spnMsg1" style="color:Red;font-size:14px"></span><br>
                    <span id="spnMsg2" style="color:Red;font-size:14px"></span><br>
                    <span id="spnMsg3" style="color:Red;font-size:14px"></span><br>
                </div>
                <button type='submit' id='submit' name='submit' onclick="fnSubmit()"  style="background-color: black;color: #D9CDC3;border-radius: 4px;position: relative;top: -2px;font-size: 20px;padding: 10px;width: 125px;">Submit</button>

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
            var g = document.getElementById("gen").value;
            var d = document.getElementById("dob").value;
            var pd = document.getElementById("pswd").value;
            var cpd = document.getElementById("cpswd").value;
            var a = document.getElementById("te").value;
            var np = document.getElementById("securityq").value;
            var tcval = document.getElementById("TC").checked;
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
                if(!(reg1.test(e)))
            {
                cnt++;
                AddReqValidation("Email");
                spnMsg2.innerHTML="Please enter valid Email-ID!!."; 
            }
            else
            {
                RemoveReqValidation("Email");
                spnMsg2.innerHTML="";  
            }  
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
                spnMsg3.innerHTML="Please enter valid Phone Number!!."; 
            }
            else
            {
                RemoveReqValidation("Pno");
                spnMsg3.innerHTML="";  
            }
            } 
            if (g=="" || g== null)
            {
                cnt++;
                AddReqValidation("gen");
            } 
            else
            {
                RemoveReqValidation("gen");
            } 
            if (d=="" || d== null)
            {
                cnt++;
                AddReqValidation("dob");
            } 
            else
            {
                RemoveReqValidation("dob");
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
                spnMsg.innerHTML="Passwords do not match!!."; 
            }   
            else
            {
                RemoveReqValidation("pswd");
                RemoveReqValidation("cpswd");
                spnMsg.innerHTML="";
            }  
            } 
            if (a=="" || a== null)
            {
                cnt++;
                AddReqValidation("te");
            } 
            else
            {
                RemoveReqValidation("te");
            } 
            if (np=="" || np== null)
            {
                cnt++;
                AddReqValidation("securityq");
            } 
            else
            {
                RemoveReqValidation("securityq");
            } 
            if (tcval=="" || tcval== null)
            {
                cnt++;
                AddReqValidation("TC");
            } 
            else
            {
                RemoveReqValidation("TC");
            } 
            if(tcval != true)
            {
                cnt++;                
                spnMsg1.innerHTML="Please agree to Terms & Conditions!!!.";  
            }
            else
            {
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
                var _form=document.getElementById("frmSignUp");
                _form.action = '#';
                _form.method = 'POST';
                _form.submit();
            } 
            else{
                return false;
            } 
        }   
</script>
</body>
</html>