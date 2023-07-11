
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

if(!(empty($_POST['Fname'])) && !(empty($_POST['Lname'])) && !(empty($_POST['Email'])) && !(empty($_POST['Phone'])) && !(empty($_POST['message'])))
{ 
        $FirstName = $_POST['Fname'];
        $LastName = $_POST['Lname'];
        $Email = $_POST['Email'];
        $PhoneNumber = $_POST['Phone'];
        $Message = $_POST['message'];
        $sql = "INSERT INTO `contact` (`Firstname`,`Lastname`,`Email`,`Phonenumber`,`Queries`) 
                values('$FirstName','$LastName','$Email','$PhoneNumber','$Message');";
        $result = mysqli_query($conn, $sql);
        if ($result) 
        {
            echo '<script>alert("Thank you!")</script>';
        }
}
}
}
?>   
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="contact.css">
    </head>
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
    <div class="contact">
        <fieldset>
        <legend><span style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-size: 30px;text-align: center;text-shadow: 4px 4px 4px rgba(0,0,0,0.59);color: black;">CONTACT US</span></legend>
        <br><br>
        <form id="frmcontact">
            <input type="hidden" name="hdnCnt" id="hdnCnt" value="0" />
            <center>
                <br>
            <table>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td><label for="Fname">First Name</label></td>
                    <td> </td><td> </td><td> </td><td> </td>
                    <td><input type="text" id="Fname" name="Fname" onchange="check();"></td>
                    <br>
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
                    <td><label for="Phone">Phone Number</label></td>
                    <td> </td><td> </td><td> </td><td> </td>
                    <td><input type="tel" id="Phone" name="Phone" onchange="check();"></td>
                </tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
                
                <tr>
                    <td><label for="message">Message/Queries</label></td>
                    <td> </td><td> </td><td> </td><td> </td>
                    <td><textarea cols="40" rows="5" name="message" id="message" style="resize: none;" onchange="check();"></textarea></td>
                </tr>
                <tr><td></td></tr>
                <tr><td></td></tr>
            </table>
            <div>
            <span id="spnMsg1" style="color:Red;font-size:14px"></span><br>
            <span id="spnMsg2" style="color:Red;font-size:14px"></span><br>
</div>
            <br>
            <button type="submit" id="submit" name="submit"  onclick="fnSubmit()" style="background-color: black;color: #D9CDC3;border-radius: 4px;position: relative;top: 10px;font-size: 20px;padding: 10px;width: 125px;">Submit</button>
        </center>
            
        </form>
    </fieldset>
    </div>
    <div class="third">
            <p style="color: #D9CDC3;position: relative;left: 600px;top: 10px;">KEEP IN TOUCH</p>
            <a href=""><img src="instagram.png" style="position: relative;left: 800px;top: -30px;"></a>
            <a href=""><img src="twitter.png" style="position: relative;left: 840px;top: -30px;"></a>
            <a href=""><img src="youtube.png" style="position: relative;left: 880px;top: -30px;"></a>
            <a href=""><img src="facebook.png" style="position: relative;left: 920px;top: -30px;"></a>
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
        var p = document.getElementById("Phone").value;
        var m = document.getElementById("message").value;
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
                spnMsg1.innerHTML="Please enter valid Email-ID!!."; 
            }
            else
            {
                RemoveReqValidation("Email");
                spnMsg1.innerHTML="";  
            } 
            } 
            if (p=="" || p== null)
            {
                cnt++;
                AddReqValidation("Phone");
            } 
            else
            {
                RemoveReqValidation("Phone");
                if(!(reg2.test(p)))
            {
                cnt++;
                AddReqValidation("Phone");
                spnMsg2.innerHTML="Please enter valid Phone Number!!."; 
            }
            else
            {
                RemoveReqValidation("Phone");
                spnMsg2.innerHTML="";  
            }  
            } 
            if (m=="" || m== null)
            {
                cnt++;
                AddReqValidation("message");
            } 
            else
            {
                RemoveReqValidation("message");
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
                var _form=document.getElementById("frmcontact");
                _form.action = '#';
                _form.method = 'POST';
                _form.submit();
            }  
        }   
      </script>
</body>
</html>