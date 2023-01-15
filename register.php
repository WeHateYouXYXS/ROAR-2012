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
   
      </center>
    <br>
<?php
// Include config file
require_once "config.php";
 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: /My/Home.php");
    exit;
}
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id, tix, robux, description FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

$username = str_replace("nigger","",$username);
$username = str_replace("<","",$username);
$username = str_replace(">","",$username);
$username = str_replace("","",$username);
$username = str_replace("fag","",$username);
$username = str_replace("faggot","",$username);
$username = str_replace("fuck","",$username);
$username = str_replace("bitch","",$username);
$username = str_replace("shit","",$username);
$username = str_replace("asshole","",$username);
$username = str_replace("dick","",$username);
$username = str_replace("bastard","",$username);
$username = str_replace("cunt","",$username);
$username = str_replace("twat","",$username);
$username = str_replace("gger","",$username);
$username = str_replace("pussy","",$username);
$username = str_replace("penis","",$username);
$username = str_replace("cock","",$username);
$username = str_replace("vag","",$username);
$username = str_replace("vagina","",$username);
$username = str_replace("ggot","",$username);
$username = str_replace("choad","",$username);
$username = str_replace("chode","",$username);
$username = str_replace("porn","",$username);
$username = str_replace("pron","",$username);
$username = str_replace("pr0n","",$username);
$username = str_replace("p0rn","",$username);
$username = str_replace("sex","",$username);
$username = str_replace("s3x","",$username);
$username = str_replace("$3x","",$username);
$username = str_replace("segz","",$username);
$username = str_replace("secks","",$username);
$username = str_replace("pube","",$username);
$username = str_replace("pubic","",$username);
$username = str_replace("$emen","",$username);
$username = str_replace("cum","",$username);
$username = str_replace("nak","",$username);
$username = str_replace("naked","",$username);
$username = str_replace("nude","",$username);
$username = str_replace("cp","",$username);
$username = str_replace("ndom","",$username);
$username = str_replace("condom","",$username);
$username = str_replace("nus","",$username);
$username = str_replace("nal","",$username);
$username = str_replace("anus","",$username);
$username = str_replace("anal","",$username);
$username = str_replace("meth","",$username);
$username = str_replace("cocaine","",$username);
$username = str_replace("tard","",$username);
$username = str_replace("retard","",$username);
$username = str_replace("kike","",$username);
$username = str_replace("pus","",$username);
$username = str_replace("hoe","",$username);
$username = str_replace("whore","",$username);
$username = str_replace("slut","",$username);
$username = str_replace("pawg","",$username);
$username = str_replace("twerk","",$username);
$username = str_replace("booty","",$username);
$username = str_replace("butthole","",$username);
$username = str_replace("hitler","",$username);
$username = str_replace("adolf","",$username);
$username = str_replace("ballsack","",$username);
$username = str_replace("cooter","",$username);
$username = str_replace("rectum","",$username);
$username = str_replace("rektum","",$username);
$username = str_replace("sphincter","",$username);
$username = str_replace("nazi","",$username);
$username = str_replace("jew","",$username);

$username = str_replace("Nigger","",$username);
$username = str_replace("Fag","",$username);
$username = str_replace("Faggot","",$username);
$username = str_replace("Fuck","",$username);
$username = str_replace("Bitch","",$username);
$username = str_replace("Shit","",$username);
$username = str_replace("Asshole","",$username);
$username = str_replace("Dick","",$username);
$username = str_replace("Bastard","",$username);
$username = str_replace("Cunt","",$username);
$username = str_replace("Twat","",$username);
$username = str_replace("Pussy","",$username);
$username = str_replace("Penis","",$username);
$username = str_replace("Cock","",$username);
$username = str_replace("Vag","",$username);
$username = str_replace("Vagina","",$username);
$username = str_replace("Choad","",$username);
$username = str_replace("Chode","",$username);
$username = str_replace("Porn","",$username);
$username = str_replace("Pron","",$username);
$username = str_replace("Pr0n","",$username);
$username = str_replace("P0rn","",$username);
$username = str_replace("Sex","",$username);
$username = str_replace("S3x","",$username);
$username = str_replace("$3X","",$username);
$username = str_replace("Segz","",$username);
$username = str_replace("Secks","",$username);
$username = str_replace("Pube","",$username);
$username = str_replace("Pubic","",$username);
$username = str_replace("Cum","",$username);
$username = str_replace("Nak","",$username);
$username = str_replace("Naked","",$username);
$username = str_replace("Nude","",$username);
$username = str_replace("Cp","",$username);
$username = str_replace("Condom","",$username);
$username = str_replace("Anus","",$username);
$username = str_replace("Anal","",$username);
$username = str_replace("Meth","",$username);
$username = str_replace("Cocaine","",$username);
$username = str_replace("Retard","",$username);
$username = str_replace("Kike","",$username);
$username = str_replace("Pus","",$username);
$username = str_replace("Hoe","",$username);
$username = str_replace("Whore","",$username);
$username = str_replace("Slut","",$username);
$username = str_replace("Pawg","",$username);
$username = str_replace("Twerk","",$username);
$username = str_replace("Booty","",$username);
$username = str_replace("Butthole","",$username);
$username = str_replace("Hitler","",$username);
$username = str_replace("Adolf","",$username);
$username = str_replace("Ballsack","",$username);
$username = str_replace("Cooter","",$username);
$username = str_replace("Rectum","",$username);
$username = str_replace("Rektum","",$username);
$username = str_replace("Sphincter","",$username);
$username = str_replace("Nazi","",$username);
$username = str_replace("Jew","",$username);
$username = str_replace("hentai","",$username);
$username = str_replace("Hentai","",$username);
$username = str_replace(".","",$username);
$username = str_replace(",","",$username);
$username = str_replace(" ","",$username);
$username = str_replace("Milf","",$username);
$username = str_replace("milf","",$username);
$username = str_replace("/","",$username);
$username = str_replace("?","",$username);
$username = str_replace("!","",$username);
$username = str_replace("@","",$username);
$username = str_replace("#","",$username);
$username = str_replace("$","",$username);
$username = str_replace("%","",$username);
$username = str_replace("^","",$username);
$username = str_replace("&","",$username);
$username = str_replace("*","",$username);
$username = str_replace("(","",$username);
$username = str_replace(")","",$username);
$username = str_replace("-","",$username);
$username = str_replace("+","",$username);
$username = str_replace("=","",$username);
$username = str_replace("[","",$username);
$username = str_replace("]","",$username);
$username = str_replace("   ","",$username);
$username = str_replace(":","",$username);
$username = str_replace("`","",$username);
$username = str_replace("~","",$username);
$username = str_replace("'","",$username);
$username = str_replace("scat","",$username);
$username = str_replace("Scat","",$username);
$username = str_replace("script","",$username);
$username = str_replace("Script","",$username);
$username = str_replace("div","",$username);
$username = str_replace("Div","",$username);
$username = str_replace("Nig","",$username);
$username = str_replace("nig","",$username);
$username = str_replace("http","",$username);
$username = str_replace("Http","",$username);
$username = str_replace('"',"",$username);
$username = str_replace(";","",$username);
$username = str_replace("var","",$username);
$username = str_replace("Var","",$username);
$username = str_replace("h1","",$username);
$username = str_replace("h2","",$username);
$username = str_replace("h3","",$username);
$username = str_replace("h4","",$username);
$username = str_replace("h5","",$username);
$username = str_replace("h6","",$username);
$username = str_replace("p","",$username);
$username = str_replace("p1","",$username);
$username = str_replace("p2","",$username);
$username = str_replace("p3","",$username);
$username = str_replace("p4","",$username);
$username = str_replace("p5","",$username);
$username = str_replace("p6","",$username);
$username = str_replace("/","",$username);
$username = str_replace("\\","",$username);
$username = str_replace("_","",$username);
$username = str_replace("SELECT","",$username);
$username = str_replace("DROP","",$username);
$username = str_replace("href","",$username);
$username = str_replace("VitaBIox","",$username);
$username = str_replace("VitaBIocks","",$username);
$username = str_replace("VitaBl0x","",$username);
$username = str_replace("VitaBl0cks","",$username);
$username = str_replace("vitabIox","",$username);
$username = str_replace("vitabIocks","",$username);
$username = str_replace("vitabl0x","",$username);
$username = str_replace("vitavl0cks","",$username);

    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";
          
    } elseif(strlen(trim($_POST["username"])) > 15){
        $username_err = "Username is too long.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password, robux, tix) VALUES (?, ?, 5, 50)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: index.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}
?>
    <b><h2>Sign up to ROAR</h2></b>
  <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
?>
     <div class="ShadowedStandardBox TopPanel" style="float: left; margin: 0px;">     
        <div id="ctl00_cphRoblox_FrontPageLogin" class="FrontPageLoginBox">
<div id="LoginViewContainer">
            <script type="text/javascript" language="javascript">
                function dologin() {
                    document.getElementById("username").value = document.getElementById("txtUsername").value;
                    document.getElementById("password").value = document.getElementById("txtPassword").value;
                    document.forms[1].submit();
                }
            </script>
<div class="DarkGradientBox DGBContainerShort">
    <div class="DGB_Header">Sign up to ROAR</div>
    <div class="DGB_Content">
      
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="was-validated">
    <div class="form-group">
      <label for="uname"><b>Username</b></label>
      <input type="text" name="username" placeholder=" " class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>" required>
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
      <div class="valid-feedback"> </div>
      <div class="invalid-feedback"> </div>
    </div>
    <div class="form-group">
      <label for="pwd"><b>Password</b></label>
      <input type="password" name="password" placeholder=" " class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>" required>
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
                <div class="valid-feedback"> </div>
                <div class="invalid-feedback"> </div>
                
           <div class="form-group">
                <label for="pwd"><b>Password</b></label>
                <input type="password" name="confirm_password" placeholder=" " class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>" required>
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
      <div class="valid-feedback"> </div>
      <div class="invalid-feedback"> </div>
    </div>
    <input type="submit" class="SignupButton" value="Sign Up">

