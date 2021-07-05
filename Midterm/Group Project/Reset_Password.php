<?php
    $password="";
    $err_password="";
    $confirm_password="";
    $err_confirm_password="";
    $hasError=false;

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(empty($_POST["password"]))
        {
            $hasError=true;
            $err_password="Password required.";
        }
        elseif(strlen($_POST["password"])<7)
        {
            $hasError=true;
            $err_password="Password requires minimum 7 characters";
        }
        if(strlen($_POST["password"])>=7)
        {
            $passwordvariable=$_POST["password"];
            $uppercase= preg_match('@[A-Z]@',$passwordvariable);
            $lowercase= preg_match('@[a-z]@',$passwordvariable);
            if(!$uppercase)
            {
                $hasError=true;
                $err_password="Password requires uppercase latters";
            }
            elseif(!$lowercase)
            {
                $hasError=true;
                $err_password="Password requires uppercase latters";
            }
           
            {
                $password=$_POST["password"];
            }
        }
        if(empty($_POST["confirm_password"]))
        {
            $hasError=true;
            $err_confirm_password="Password required";
        }
        if((strlen($_POST["confirm_password"])>= 7))
        {
        
        
        
        $passwordvariable = $_POST["confirm_password"];
        $uppercase = preg_match('@[A-Z]@',$passwordvariable);
        $lowercase = preg_match('@[a-z]@',$passwordvariable);
        if(!$uppercase)
        {
        $hasError = true;
        $err_confirm_password = "Password requires uppercase letters";
        }
        else if(!$lowercase)
        {
        $hasError = true;
        $err_confirm_password = "Password requires lowercase letters";
        }
 
        
        else
        {
            $confirm_password = $_POST["confirm_password"];
        }
        }
        
        if(!$hasError)
        {
            echo $_POST["password"]."<br>";
        }
    }
 ?>
<html>
    <body>

    <form method="post" >
    <table align="center">
            <tr>
                <td>
                    <h1>
                        Change Password
                    </h1>
                </td>
            </tr>
            <tr>
                <td>
                    In order to <b>protect your account,</b>make sure your <br>
                    password:
                </td>
            </tr>
            <tr>
                <td>
                    <ul>
                        <li>
                            is  longer than 7 character
                        </li>
                        <li>
                            has atleast 1 lowercase and 1 uppercase letters
                        </li>
                        <li>
                            does not match or significantly contain your <br>
                            username, e.g. do not use 'username123'
                        </li>
                        <li>
                            is not a member of this <a target="_blank" href="https://en.wikipedia.org/wiki/List_of_the_most_common_passwords">list of common passwods</a>
                        </li>
                        <li>
                            is not a member of the <a target="_blank" href="https://gcn.com/articles/2018/03/05/haveibeenpwned-gov-users.aspx">Have been pwned </a>breach <br>
                            database
                        </li>
                    </ul>
                </td>
                
            </tr>
            <tr>
                <td>
                    <h3>
                        New Password <br>
                        <input name="password" value="<?php echo $password;?>" type="password" placeholder="Enter Password....">
                        <?php 
                        if($hasError)
                        {
                             echo $err_password;
                             echo "<form action='' method='post'>";
                            // echo "<input type='submit' value='Change Password'";
                             echo "</form>";
                        }
                        elseif(!$hasError&& $_SERVER["REQUEST_METHOD"]=="POST")
                        {
                            
                            echo $_POST["password"];
                           // echo "<form action='confirm_message.php' method='post'>";
                           // echo "<input type='submit' value='Change Password'>";
                            echo "</form>";

                        }

                        ?>
                    </h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>
                        Confirm Password <br>
                        <input name="confirm_password" value="<?php echo $password;?>"  value = "<?php echo $confirm_password;?>" type="password" placeholder="Enter Password....">
                    </h3>
                </td>
            </tr>
            <tr>
                <td align="center"> 
                <a href="confirm_message.php">
                <input type="submit" value="Change Password">
                </a>
                    </form>
                </td>
            </tr>
        
        </table>

        </form>
    </body>
</html>
