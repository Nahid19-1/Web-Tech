<?php
    require_once 'Controllers/AdminController.php'
?>

 

<html>
    <head><legend align= "center"><h1 >Welcome <?php echo $_SESSION["name"]; ?> </h1></legend>
            <div align="center">
            <a href ="CreateAdmin.php"> Add New Admin </a> &nbsp;  &nbsp;
            <a href ="AllAdmin.php"> All Admin </a>     &nbsp;  &nbsp;
            <a href ="MyProfile.php"> My profile </a> 
            </div>
    </head>
    
    
    <body>
    
    <fieldset>
        <legend align= "center"><h2 >Add new admin</h2></legend>
        <form action="" method= "post" onsubmit="return validate()">
            <table align= "center">
                <tr>
                    <td> <span>Name</span> </td>
                    <td> :<input  type = "text" value="<?php echo $name;?>"  name= "name" id="name"> 
                    <span id="err_name"> <?php echo $err_name; ?> </span> </td>
                </tr>
                
                <tr>
                    <td> <span>Email</span> </td>
                    <td> :<input type = "text" value= "<?php echo $email;?>" name= "email" id="email">
                    <span id="err_email"> <?php echo $err_email; ?> </span> </td>
                    
                </tr>
                <tr>
                    <td> <span>Password</span> </td>
                    <td> :<input type = "password" value="<?php echo $password; ?>" name= "pass" id="pass"> 
                    <span id="err_password"> <?php echo $err_password; ?> </span> </td>
                </tr>
                
                <tr>
                    <td> <span>Confirm Password</span> </td>
                    <td> :<input type = "password" value="<?php echo $cpass; ?>"  name= "cpass"> 
                    <span > <?php echo $err_cpass; ?> </span>  </td>
                </tr>
                
                <tr>
                    <td> <span>Phone</span> </td>
                    <td> :<input type = "text" placeholder="Number" value="<?php echo $number?>"  name= "number"  id="number" > 
                        <span id="err_phone"> <?php echo $err_number; ?> </span> </td> 
                
                    
                </tr>
                
                
                <tr>
                    <td> <span>Address</span> </td>
                    <td> :<textarea name="address" id="address"> <?php echo $address; ?> </textarea> 
                    <span id="err_address"> <?php echo $err_address; ?> </span> </td>
                </tr>
                
                
                <tr>
                    <td align= "center" colspan= "2"> <input type="submit" name="btn_addAdmin" value="Register"> </td>
                </tr>
        
            </table>
        </form>
    </fieldset>    
</body>
    
    <script>
        function get(id) { return document.getElementById(id); }
        
        function validate()
        {
            debugger;
            cleanUP();
            var hasError=false ;
            if(get("name").value=="")
            {
                get("err_name").innerHTML="*Name required a";
                get("err_name").style.color="red";
                hasError=true;
            }
            
            if(get("email").value=="")
            {
                get("err_email").innerHTML="*Email required";
                get("err_email").style.color="red";
                hasError=true;
            }
            
            if(get("pass").value=="")
            {
                get("err_password").innerHTML="*Password required";
                get("err_password").style.color="red";
                hasError=true;
            }
            
            if(get("number").value=="")
            {
                get("err_phone").innerHTML="*Phone number required";
                get("err_phone").style.color="red";
                hasError=true;
            }
            
            if(get("address").value=="")
            {
                get("err_address").innerHTML="*Address required";
                get("err_address").style.color="red";
                hasError=true;
            }
            
            if(!hasError)
            {
                return true;
            }
            return false;
        }
        
        function cleanUP()
        {
            get("err_name").innerHTML="";
            get("err_email").innerHTML="";
            get("err_password").innerHTML="";
            get("err_phone").innerHTML="";
            get("err_address").innerHTML="";
        }
        
    </script>
</html>
















	


