<?php
        $Name="";
        $err_Name="";
        $Username="";
        $err_Username="";
        $Password="";
        $err_Password="";
        $Confirmpassword="";
        $err_Confirmpassword="";
        $Email="";
        $err_Email="";
        $Phone=" ";
        $err_Phone="";
        $Address="";
        $err_Address="";
        $dob="";
        $err_dob="";
        $Gender="";
        $err_Gender="";
        $hear=[];
        $err_hear="";
        $Bio="";
        $err_Bio="";
        
        $hasError=false;
        
        $Mon=array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
        
        function hearExist($h)
        {
            global $hear;
            foreach($hear as $hr)
            {
                if($h==$hr) return true;
            }
                return false;
        }
        
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(empty($_POST["Name"]))
                {
                    $hasError=true;
                    $err_Name="Name Required";
                }
                elseif(strlen($_POST["Name"])<=2)
                {
                    $hasError=true;
                    $err_Name="Name must be greater than 2 characters";
                }
                else
                {
                    $Name=$_POST["Name"];
                }
                
                
                if(empty($_POST["Username"]))
                {
                    $hasError=true;
                    $err_Username="Username Required";
                }
                elseif(strlen($_POST["Username"])<=6)
                {
                    $hasError=true;
                    $err_Username="Username must be contain at least 6 characters";
                }
                elseif(strpos($_POST["Username"]," ")==true)
                {
                    $hasError=true;
                    $err_Username="Username must not have a space";
                }
                else
                {
                    $Username=$_POST["Username"];
                }
                
                
                if(empty($_POST["Password"]))
                {
                    $hasError=true;
                    $err_Password="Password Required";
                }
                
                
                else
                {
                    $Password=$_POST["Password"];
                }
                
                
                
                if(empty($_POST["Confirmpassword"]))
                {
                    $hasError=true;
                    $err_Confirmpassword="Confirm Password Required";
                }
                elseif(($_POST["Confirmpassword"])!=($_POST["Confirmpassword"]))
                {
                    $hasError=true;
                    $err_Confirmpassword="Both password must be similar";
                }
                else
                {
                    $Confirmpassword=$_POST["Confirm password"];
                }
                
                
                
                
                if(empty($_POST["Email"]))
                {
                    $hasError=true;
                    $err_Email="Email Required";
                }
				elseif((strpos($_POST["Email"],"@")==false)&&(strpos($_POST["Email"],".")==false))
                {
                    $hasError=true;
                    $err_Email="Username must  have @ and .";
                }
				
                else
                {
                    $Email=$_POST["Email"];
                }
                
                
                
                
                if(empty($_POST["Phone"]))
                {
                    $hasError=true;
                    $err_Phone="Phone Required";
                }
                else
                {
                    $Phone=$_POST["Phone"];
                }
                
                
                
                if(empty($_POST["Address"]))
                {
                    $hasError=true;
                    $err_Address="Address Required";
                }
                else
                {
                    $Address=$_POST["Address"];
                }
                
                
                
                
                
                if(empty($_POST["dob"]))
                {
                    $hasError=true;
                    $err_dob="Date of Birth Required";
                }
                else
                {
                    $dob=$_POST["dob"];
                }
                
                
                
                
                
                if(!isset($_POST["Gender"]))
                {
                    $hasError=true;
                    $err_Gender="Gender Required";
                }
                else
                {
                    $Gender=$_POST["Gender"];
                }
                
                
                
                
                
                if(empty($_POST["hear"]))
                {
                    $hasError=true;
                    $err_hear="This information Required";
                }
                else
                {
                    $hear=$_POST["hear"];
                }
                
                
                
                
                if(empty($_POST["Bio"]))
                {
                    $hasError=true;
                    $err_Bio="Bio Required";
                }
                else
                {
                    $Bio=$_POST["Bio"];
                }
                
                
                
            
        if(!$hasError)    
            {    
            echo $_POST["Name"]."<br>";
            echo $_POST["Username"]."<br>";
            echo $_POST["Password"]."<br>";
            echo $_POST["Confirmpassword"]."<br>";
            echo $_POST["Email"]."<br>";
            echo $_POST["Phone"]."<br>";
            echo $_POST["Address"]."<br>";
            echo $_POST["dob"]."<br>";
            echo $_POST["Gender"]."<br>";
            echo $_POST["hear"]."<br>";
            echo $_POST["Bio"]."<br>";
            $arr = $_POST["dob"];
            
            foreach($arr as $m)
                echo "$m<br>";
            }
        }
    
?>
    

<html>
    <body>
        <form action="" method="post">
        <fieldset>
            <table align="center">
                
                <tr>
                    <td colspan="2" align="center"><h1><b>Club Member Registration</b></h1></td>
                </tr>
                   <td align="right">Name</td>
                   <td>:<input name="Name" value="<?php echo $Name;?>" type="text"> <br><span><?php echo $err_Name;?></span></td>
                </tr>
                <tr>
                   <td align="right">Username</td>
                   <td>:<input name="Username" value="<?php echo $Username;?>" type="text"> <br> <span><?php echo $err_Username;?></span> </td>
                </tr>
                <tr>
                   <td  align="right">Password</td>
                   <td>:<input name="Password" value="<?php echo $Password;?>" type="Password"> <br> <span><?php echo $err_Password;?></span></td>
                </tr>
                <tr>
                   <td align="right">Confirm Password</td>
                   <td>:<input name="Confirmpassword" value="<?php echo $Confirmpassword;?>" type="Password"> <br> <span><?php echo $err_Confirmpassword;?></span></td>
                </tr>
                <tr>
                   <td align="right">Email</td>
                   <td>:<input name="Email" value="<?php echo $Email;?>" type="text"> <br><span><?php echo $err_Email;?></span></td>
                </tr>
                <tr>
                       <td align="right">Phone</td>
                       <td>:<input name="Phone" value="<?php echo $Phone;?>" type="number" placeholder="code">-<input name="Phone" value="<?php echo $Phone;?>" type="number" placeholder="Number"><br> <span><?php echo $err_Phone;?></span> </td>
                </tr>
                <tr>
                   <td align="right">Address</td>
                   <td>:<input name="Address" value="<?php echo $Address;?>" type="text" placeholder="Street Address"> 
                   </td>
                <tr>  
                   <td colspan="2" align="right"><input name="Address" value="<?php echo $Address;?>" type="text" placeholder="City">-<input name="Address" value="<?php echo $Address;?>" type="text" placeholder="State"> </td>
                </tr>
                <tr>
                    <td></td>
                   <td  align="left">&nbsp;<input name="Address" value="<?php echo $Address;?>" type="text" placeholder="Postal/Zip Code"><br> <span><?php echo $err_Address;?></span></td>
                </tr>
                <tr>
                  <td align="right">Birth Date</td>
                   <td>:
                      <select name="dob">
                        <option selected disabled>Day</option>
                        <?php for($i=1;$i<=31;$i++) echo "<option>$i</option>"; ?>
                      </select>
                      
                     
                      <select name="dob" value="<?php echo $dob;?>">
                        <option selected disabled>Month</option>
                        <?php
                            foreach($Mon as $m)
                            {
                                if($m == $dob)
                                    echo "<option selected>$m</option>";
                                else
                                    echo "<option>$m</option>";
                            }
                        ?>
                      </select>
                     
                      <select name="dob">
                        <option selected disabled>Year</option>
                        <?php for($j=1990;$j<=2050;$j++) echo "<option>$j</option>"; ?>
                      </select>
                      <span>&nbsp; <br><?php echo $err_dob; ?></span>
                     </td>
                </tr>
                
                
                
                
                <tr>
                   <td align="right">Gender</td>
                   <td>:<input type="radio" value="Male" <?php if ($Gender == "Male") echo "checked"; ?> name="Gender"> Male <input type="radio" value="Female" <?php if ($Gender == "Female") echo "checked"; ?> name="Gender">Female
                   <br> <span><?php echo $err_Gender;?></span></td>
                </tr>
                
                
                
                <tr>
                   <td  align="right">Where did you hear<br>about us?</td>
                   <td> <input type="checkbox" value="A Friend or Colleague" <?php if(hearExist("A Friend or Colleague")) echo "checked";?> name="hear[]"> A Friend or Colleague
                   <br><input type="checkbox" value="Google" <?php if(hearExist("Google")) echo "checked";?> name="hear[]"> Google
                     <br><input type="checkbox" value="Blog Post" <?php if(hearExist("Blog Post")) echo "checked";?> name="hear[]"> Blog Post 
                     <br><input type="checkbox" value="Games" <?php if(hearExist("Games")) echo "checked";?> name="hear[]"> Games
                   <br> <span><?php echo $err_hear;?></span></td>
                </tr>
                
                <tr>
                   <td align="right">Bio</td>
                   <td>: <textarea name="Bio"><?php echo "$Bio";?></textarea>
                        <br><span><?php echo $err_Bio;?></span>
                   </td>
                </tr>
                
                <tr>
                   <td align="right"><input type="Submit" value="Register"></td>
                </tr>
                
            </table>
        </fieldset>
        </form>
    </body>
</html>

