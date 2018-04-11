<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
        
        //defining all variable to the empty string
        $firstname = $lastname = $day = $month = $year = $gender = $phone = $email = $password = $Cpassword = "";
        
        //defining the error varible which will show the validation error
        $errorfname = $errorlname = $errorday = $errormonth = $erroryear = $errorgender = $errorphone = $erroremail = $errorpass = $errorCpass = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {         // catching the value using POST method
          if(empty($_POST['firstname'])){
        //$_SESSION['errorfname'] = "<span>First Name is required </span>";
                $errorfname = "<span>First Name is required </span>";
            }
            else{
                $firstname = formvalidate($_POST['firstname']);
            }

            // validating lastname
            if(empty($_POST['lastname'])){
                //$_SESSION['errorlname'] = "<span>Last Name is required </span>";
                $errorlname = "<span>Last Name is required </span>";
            }
            else{
                $lastname = formvalidate($_POST['lastname']);
            }

            //validating day dropdown
            if(empty($_POST['day'])){
                //$_SESSION['errorday'] = "<span> Day is required </span>";
                $errorday = "<span> Day is required </span>";
            }
            else{
                $day = formvalidate($_POST['day']);
            }

            //validating month  dropdown
            if(empty($_POST['month'])){
                //$_SESSION['errormonth'] = "<span> Month is required </span>";
                $errormonth = "<span> Month is required </span>";
            }
            else{
                $day = formvalidate($_POST['day']);
            }

            // validating year dropdown
            if(empty($_POST['year'])){
                //$_SESSION['erroryear'] = "<span> Year is required </span>";
                $erroryear = "<span> Year is required </span>";
            }
            else{
                $year = formvalidate($_POST['year']);
            }

            // validating gender dropdown
            if(empty($_POST['gender'])){
                //$_SESSION['errorgender'] = "<span> Gender is required </span> ";
                $errorgender = "<span> Gender is required </span> ";
            }
            else{
                $gender = formvalidate($_POST['gender']);
            }

            //validating phone field
            if(empty($_POST['phone'])){
                //$_SESSION['errorphone'] = "<span> Phone number is required </span>";
                $errorphone = "<span> Phone number is required </span>";
            }
            else{
                $phone = formvalidate($_POST['phone']);
            }

            //validating email field
            if(empty($_POST['email'])){
                //$_SESSION['erroremail'] = "<span> email is required  </span>";
                $erroremail = "<span> email is required  </span>";
            }
            else{
                $email = formvalidate($_POST['email']);
            }

            // validating password field
            if(empty($_POST['password'])){
                //$_SESSION['errorpass'] = " Password is required ";
                $errorpass = "<span> Password is required </span>";
            }
            else{
                $password = formvalidate($_POST['password']);
                
                // checking the password lenth and 8 characters using regular expression
                if(!preg_match( '/[^A-Za-z0-9]+/', $password) || strlen($password) < 8){
                    $errorpass = "<span>Password must greter than 8 character and a special character</span>";
                }
            }

            //validating confirm password field.
            if(empty($_POST['Cpassword'])){
                //$_SESSION['errorCpass'] = " Confirm Pass is required ";
                $errorCpass = " <span>Confirm Pass is required </span> ";
            }
            else{
                $Cpassword = formvalidate($_POST['Cpassword']);
                
                // Checking the password is matched or not.
                if($_POST['password'] != $_POST['Cpassword']){
                $errorCpass =  "<span>Password didnt match so try again thank You !!</span>";
                }
                
                // checking the password lenth and 8 characters using regular expression
                elseif(!preg_match( '/[^A-Za-z0-9]+/', $password) || strlen($password) < 8){
                    $errorCpass = "<span>Password must greter then 8 character and a special character</span>";
                }
            }
            
            
            
        }

        function formvalidate($value){
        $value = trim($value);   //trim() build in fuction block -> user can not use white space before input
        $value = stripslashes($value); //stripslashes() build in function check that user can not use '\\' slashes into the input field.
        $value = htmlspecialchars($value); //htmlspecialchars() build in function check that the user can not use any html code into the input field.
        return $value;
        }
        
        /*
        Before validation how i catch the value form the input field

        $firstname   = $_POST['firstname'];  
        $lastname    = $_POST['lastname'];
        $day         = $_POST['day'];
        $month       = $_POST['month'];
        $year        = $_POST['year'];
        $gender      = $_POST['gender'];
        $phone       = $_POST['phone'];
        $email       = $_POST['email'];
        $password    = $_POST['password'];
        $Cpassword   = $_POST['Cpassword'];
        */
        
        
        ?>
        
        <h1><center>Form Data Submission</center></h1>
        <section>
        <fieldset>
            <form action="" method="post">
                <center>
                    <table>
                        <p>* Required Field</p>
                        <tr>
                            <td>FirstName: </td>
                            <td><input type="text" name="firstname" placeholder="input firstname" />*<?php echo $errorfname; ?></td>
                        </tr>
                        <tr>
                            <td>LastName: </td>
                            <td><input type="text" name="lastname" placeholder="input lastname" />*<?php echo $errorlname; ?></td>
                        </tr>
                        <tr>
                            <td>DOB:</td>
                            <td>DAY: <select name="day">
                                <option value="">Select Day</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                              </select>*<?php echo $errorday; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>MONTH: <select name="month">
                                <option value="">Select Month</option>
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="Octobar">Octobar</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                              </select>*<?php echo $errormonth; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>YEAR: <select name="year">
                                <option value="">Select Year</option>
                                <option value="1980">1980</option>
                                <option value="1981">1981</option>
                                <option value="1982">1982</option>
                                <option value="1983">1983</option>
                                <option value="1984">1984</option>
                                <option value="1985">1985</option>
                                <option value="1986">1986</option>
                                <option value="1987">1987</option>
                                <option value="1988">1988</option>
                                <option value="1989">1989</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                              </select>*<?php echo $erroryear; ?></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td>
                            <input type="radio" name="gender" value="Male"> Male 
                            <input type="radio" name="gender" value="Female"> 
                            Female    *<?php echo $errorgender; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Phone:</td>
                            <td><input type="text" name="phone" placeholder="input your phone number" />*<?php echo $errorphone; ?></td>
                        </tr>
                        <tr>
                            <td>Email ID: </td>
                            <td><input type="email" name="email"  placeholder="input your email"/>*<?php echo $erroremail; ?></td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td><input type="password" name="password" placeholder="give a password" />*<?php echo $errorpass; ?></td>
                        </tr>
                        <tr>
                            <td>Confirm Password:</td>
                            <td><input type="password" name="Cpassword" placeholder="input same password again" />*<?php echo $errorCpass; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Submit" /></td>
                        </tr>
                       
                    </table>
                </center>
            </form>
        </fieldset>
            <center>
            <div>
                <?php
                echo "First name:  ".$firstname;
                echo "<br>";
                echo " Last name:  ".$lastname;
                echo "<br";
                echo " Day name:  ".$day;
                echo "<br>";
                echo " Month name:  ".$month;
                echo "<br>";
                echo " Year name:  ".$year;
                echo "<br>";
                echo " Gender :  ".$gender;
                echo "<br>";
                echo " Phone number:  ".$phone;
                echo "<br>";
                echo " email name:  ".$email;
                echo "<br>";
                echo " Password :  ".$password;
                echo "<br>";
                echo " Confirm password :  ".$Cpassword;
                echo "<br>";
                ?>
            </div>
          </center>
        </section>    
    </body>
</html>

