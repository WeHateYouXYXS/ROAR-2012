<?php include 'header.php';?>
<style>
div.c {
  text-align: center;
}

div.l {
  text-align: left;
}

div.r {
  text-align: right;
} 

div.j {
  text-align: justify;
} 
</style>
    <br>
    <?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: My/Home.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "请输入用户名";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "请输入您的密码";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: My/Home.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "无效的用户名或密码";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "无效的用户名或密码";
                }
            } else{
                echo "哎呀！出了些问题。请稍后再试。";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>

     <div style="clear: both;"></div>
        <div class="Column1a">
            <div class="StandardBoxHeader" id="newLoginHeader" style="width:300px;">
               
               <span id="ctl00_cphRoblox_LoginHeader2">Login</span>
            </div>
            <div class="StandardBox" id="newLogin" style="height: 170px;width:300px;">
                <div id="ctl00_cphRoblox_LOLOLOLOL">
  
                    
  <div class="AspNet-Login">
                            <table style="margin: 0px auto;">
                                <tbody><tr>
                                    <td colspan="2" style="color: #FF0000">
                                        
                                    </td>
                                </tr>
                                <tr>
<?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="was-validated">
    <div class="form-group">
      <label for="uname">Username</label>
      <input type="text" name="username" placeholder=" " class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>" required>
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
      <div class="valid-feedback"> </div>
      <div class="invalid-feedback"> </div>
    </div>
    <div class="form-group">
      <label for="pwd">Password</label>
      <input type="password" name="password" placeholder=" " class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" required>
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
      <div class="valid-feedback"> </div>
      <div class="invalid-feedback"> </div>
    </div>
<input type="submit" class="loginButton" value="Login">
                                </tr>
                            </tbody></table>
                        
  </div>
                
</div>
            </div>
        </div>
    
        <div class="Column2a">
            <div id="ctl00_cphRoblox_NewUserPanel2">
                <div class="StandardBoxHeader" style="width: 558px;float:right;">
                    <span>Create a Free ROBLOX Account</span>
                </div>
                <div class="StandardBox" id="newSignupBox" style="width: 558px;float:right;min-height:170px;">
                    <div id="ChooseBirthdate" style="height:111px">
                    <p>
                        Creating an account on ROBLOX allows you to customize your character, make friends,
                        build places, earn money, and more!
                    </p>
                    <center>
                        <span>Your Date of Birth: </span>
                        <select name="ctl00$cphRoblox$lstMonths" id="lstMonths">
  <option value="0">Select Month</option>
  <option value="1">January</option>
  <option value="2">February</option>
  <option value="3">March</option>
  <option value="4">April</option>
  <option value="5">May</option>
  <option value="6">June</option>
  <option value="7">July</option>
  <option value="8">August</option>
  <option value="9">September</option>
  <option value="10">October</option>
  <option value="11">November</option>
  <option value="12">December</option>

</select>
                    <select name="ctl00$cphRoblox$lstDays" id="lstDays">
  <option value="0">Select Day</option>
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

</select>
                        <select name="ctl00$cphRoblox$lstYears" id="lstYears">
  <option value="0">Select Year</option>
  <option value="2012">2012</option>
  <option value="2011">2011</option>
  <option value="2010">2010</option>
  <option value="2009">2009</option>
  <option value="2008">2008</option>
  <option value="2007">2007</option>
  <option value="2006">2006</option>
  <option value="2005">2005</option>
  <option value="2004">2004</option>
  <option value="2003">2003</option>
  <option value="2002">2002</option>
  <option value="2001">2001</option>
  <option value="2000">2000</option>
  <option value="1999">1999</option>
  <option value="1998">1998</option>
  <option value="1997">1997</option>
  <option value="1996">1996</option>
  <option value="1995">1995</option>
  <option value="1994">1994</option>
  <option value="1993">1993</option>
  <option value="1992">1992</option>
  <option value="1991">1991</option>
  <option value="1990">1990</option>
  <option value="1989">1989</option>
  <option value="1988">1988</option>
  <option value="1987">1987</option>
  <option value="1986">1986</option>
  <option value="1985">1985</option>
  <option value="1984">1984</option>
  <option value="1983">1983</option>
  <option value="1982">1982</option>
  <option value="1981">1981</option>
  <option value="1980">1980</option>
  <option value="1979">1979</option>
  <option value="1978">1978</option>
  <option value="1977">1977</option>
  <option value="1976">1976</option>
  <option value="1975">1975</option>
  <option value="1974">1974</option>
  <option value="1973">1973</option>
  <option value="1972">1972</option>
  <option value="1971">1971</option>
  <option value="1970">1970</option>
  <option value="1969">1969</option>
  <option value="1968">1968</option>
  <option value="1967">1967</option>
  <option value="1966">1966</option>
  <option value="1965">1965</option>
  <option value="1964">1964</option>
  <option value="1963">1963</option>
  <option value="1962">1962</option>
  <option value="1961">1961</option>
  <option value="1960">1960</option>
  <option value="1959">1959</option>
  <option value="1958">1958</option>
  <option value="1957">1957</option>
  <option value="1956">1956</option>
  <option value="1955">1955</option>
  <option value="1954">1954</option>
  <option value="1953">1953</option>
  <option value="1952">1952</option>
  <option value="1951">1951</option>
  <option value="1950">1950</option>
  <option value="1949">1949</option>
  <option value="1948">1948</option>
  <option value="1947">1947</option>
  <option value="1946">1946</option>
  <option value="1945">1945</option>
  <option value="1944">1944</option>
  <option value="1943">1943</option>
  <option value="1942">1942</option>
  <option value="1941">1941</option>
  <option value="1940">1940</option>
  <option value="1939">1939</option>
  <option value="1938">1938</option>
  <option value="1937">1937</option>
  <option value="1936">1936</option>
  <option value="1935">1935</option>
  <option value="1934">1934</option>
  <option value="1933">1933</option>
  <option value="1932">1932</option>
  <option value="1931">1931</option>
  <option value="1930">1930</option>
  <option value="1929">1929</option>
  <option value="1928">1928</option>
  <option value="1927">1927</option>
  <option value="1926">1926</option>
  <option value="1925">1925</option>
  <option value="1924">1924</option>
  <option value="1923">1923</option>
  <option value="1922">1922</option>
  <option value="1921">1921</option>
  <option value="1920">1920</option>
  <option value="1919">1919</option>
  <option value="1918">1918</option>
  <option value="1917">1917</option>
  <option value="1916">1916</option>
  <option value="1915">1915</option>
  <option value="1914">1914</option>
  <option value="1913">1913</option>

</select>
                        &nbsp;&nbsp;
                        <input id="btnContinue" type="button" class="MediumButton translate" onclick="CheckDate()" value="Continue">
                        <div id="lblError" style="display: none">
                            <b>Please choose a valid date</b></div>
                        <div style="font-style:italic;margin-top:15px">Your birthday will not be given out to any third party!</div>
                    </center>
                    </div>
                        <div id="ChooseGender" style="text-align:center;display:none">
                            

<div style="text-align:left">Are you a boy or a girl?</div>
<div style="text-align:center;position:relative;height:250px">
    <div style="position:absolute;left:50%;margin-left:-175px">
        <label for="MaleBtn"><img src="https://s3.amazonaws.com:443/t3.roblox.com/ef1ff929b9373a85f2b873f17a5305e9" id="ctl00_cphRoblox_SelectGenderPane_BoyThumbnail" style="cursor:pointer"><br></label>
        <input id="MaleBtn" type="radio" name="ctl00$cphRoblox$SelectGenderPane$Gender" value="MaleBtn"><label for="MaleBtn">Boy</label>
    </div>
    <div style="position:absolute;left:50%;margin-left:25px">
        <label for="FemaleBtn"><img src="https://s3.amazonaws.com:443/t3.roblox.com/9458fba608ad69e5d88ccb58b74c7dc4" id="ctl00_cphRoblox_SelectGenderPane_GirlThumbnail" style="cursor:pointer"><br></label>
        <input id="FemaleBtn" type="radio" name="ctl00$cphRoblox$SelectGenderPane$Gender" value="FemaleBtn"><label for="FemaleBtn">Girl</label>
    </div>
</div>
                            <div id="genderError" style="color:Red;font-weight:bold;margin-bottom:10px;display:none">Please select a gender</div>
                            <input type="submit" name="ctl00$cphRoblox$btnSignup2" value="Continue" onclick="return CheckGender();" id="ctl00_cphRoblox_btnSignup2" class="MediumButton translate">
                        </div>
                    <br>
                </div>
            </div>
        </div>
        <div style="clear: both;"></div>
        
        <div id="ExpandBorder" style="float:right; width:568px;height:40px;border:1px solid #AAAAAA;border-top:none;margin-top:-49px">&nbsp;</div>

        <div class="StandardBoxHeader" style="width: 878px;">
            <span>You  need an account to play ROAR!</span>
        </div>
        <div class="StandardBox" style="width: 878px">
            <div id="ctl00_cphRoblox_GuestMode" style="text-align: center;">
  
                <p>
                    You can't start playing right now, in guest mode! You cannot just click on the game you want
                    to play.</p>
                <a id="ctl00_cphRoblox_PlayNow" tabindex="2" class="MediumButton" href="https://www.roblox.com/Games.aspx" style="text-decoration: none; color: #222222;
                    width: 20%;">Play as Guest</a>
                <p></p>
            
</div>
        </div>
    </div>  
