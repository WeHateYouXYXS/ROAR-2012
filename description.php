<?php include 'headerlo.php'?>
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$param_password = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new username.";     
    } elseif(strlen(trim($_POST["new_password"])) > 50){
        $new_password_err = "Your username is too long.";
    } else{
        $param_password = trim($_POST["new_password"]);
    }

$param_password = str_replace("nigger","",$param_password);
$param_password = str_replace("nigga","",$param_password);
$param_password = str_replace("Nigga","",$param_password);
$param_password = str_replace("gga","",$param_password);
$param_password = str_replace("Gger","",$param_password);
$param_password = str_replace("Gga","",$param_password);
$param_password = str_replace("niger","",$param_password);
$param_password = str_replace("niga","",$param_password);
$param_password = str_replace("Niger","",$param_password);
$param_password = str_replace("Niga","",$param_password);
$param_password = str_replace("gger","",$param_password);
$param_password = str_replace("'","",$param_password);
$param_password = str_replace('"',"",$param_password);
$param_password = str_replace("{","",$param_password);
$param_password = str_replace("}","",$param_password);
$param_password = str_replace("[","",$param_password);
$param_password = str_replace("]","",$param_password);
$param_password = str_replace(";","",$param_password);
$param_password = str_replace("<","",$param_password);
$param_password = str_replace(">","",$param_password);
$param_password = str_replace("/","",$param_password);
$param_password = str_replace("+","",$param_password);
$param_password = str_replace("=","",$param_password);
$param_password = str_replace("|","",$param_password);
$param_password = str_replace("&","",$param_password);
$param_password = str_replace("$","",$param_password);
$param_password = str_replace("@","",$param_password);
$param_password = str_replace("^","",$param_password);
$param_password = str_replace("*","",$param_password);
$param_password = str_replace("h1","",$param_password);
$param_password = str_replace("h2","",$param_password);
$param_password = str_replace("h3","",$param_password);
$param_password = str_replace("h4","",$param_password);
$param_password = str_replace("h5","",$param_password);
$param_password = str_replace("h6","",$param_password);
$param_password = str_replace("p1","",$param_password);
$param_password = str_replace("p2","",$param_password);
$param_password = str_replace("p3","",$param_password);
$param_password = str_replace("p4","",$param_password);
$param_password = str_replace("p5","",$param_password);
$param_password = str_replace("p6","",$param_password);
$param_password = str_replace("fag","",$param_password);
$param_password = str_replace("faggot","",$param_password);
$param_password = str_replace("fuck","",$param_password);
$param_password = str_replace("semen","",$param_password);
$param_password = str_replace("Semen","",$param_password);
$param_password = str_replace("Fuck","",$param_password);
$param_password = str_replace("Nigger","",$param_password);
$param_password = str_replace("Fag","",$param_password);
$param_password = str_replace("Faggot","",$param_password);
$param_password = str_replace("Nazi","",$param_password);
$param_password = str_replace("nazi","",$param_password);
$param_password = str_replace("porn","",$param_password);
$param_password = str_replace("p0rn","",$param_password);
$param_password = str_replace("Porn","",$param_password);
$param_password = str_replace("P0rn","",$param_password);
$param_password = str_replace("Sex","",$param_password);
$param_password = str_replace("sex","",$param_password);
$param_password = str_replace("s3x","",$param_password);
$param_password = str_replace("S3x","",$param_password);
$param_password = str_replace("scat","",$param_password);
$param_password = str_replace("Scat","",$param_password);
$param_password = str_replace("www","",$param_password);
$param_password = str_replace("href","",$param_password);
$param_password = str_replace("bitch","",$param_password);
$param_password = str_replace("Bitch","",$param_password);
$param_password = str_replace("cum","",$param_password);
$param_password = str_replace("Cum","",$param_password);
$param_password = str_replace("Cock","",$param_password);
$param_password = str_replace("cock","",$param_password);
$param_password = str_replace("pussy","",$param_password);
$param_password = str_replace("puss","",$param_password);
$param_password = str_replace("Puss","",$param_password);
$param_password = str_replace("Pussy","",$param_password);
$param_password = str_replace("Dick","",$param_password);
$param_password = str_replace("dick","",$param_password);
$param_password = str_replace("Jew","",$param_password);
$param_password = str_replace("jew","",$param_password);
$param_password = str_replace("hitler","",$param_password);
$param_password = str_replace("Hitler","",$param_password);
$param_password = str_replace("Vagina","",$param_password);
$param_password = str_replace("Vag","",$param_password);
$param_password = str_replace("vag","",$param_password);
$param_password = str_replace("vagina","",$param_password);
$param_password = str_replace("Choad","",$param_password);
$param_password = str_replace("chode","",$param_password);
$param_password = str_replace("Chode","",$param_password);
$param_password = str_replace("choad","",$param_password);
$param_password = str_replace("Anus","",$param_password);
$param_password = str_replace("Anal","",$param_password);
$param_password = str_replace("anal","",$param_password);
$param_password = str_replace("anus","",$param_password);
$param_password = str_replace("http","",$param_password);
$param_password = str_replace("redirect","",$param_password);
$param_password = str_replace("Http","",$param_password);
$param_password = str_replace("condom","",$param_password);
$param_password = str_replace("Condom","",$param_password);

    // Check input errors before updating the database
        if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET description = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            // Set parameters
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                header("location: resetsession.php");
                exit();
            } else{
                echo "This username is already taken!";
            }
var_dump(filter_var($param_password,FILTER_SANITIZE_SPECIAL_CHARS));
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 

<center>
    <div class="wrapper">
        <br>
      <br>
      <br>
      <br>
      <h2>Change Description</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                <label></label>
                <input type="text" name="new_password" class="form-control" value="<?php echo $param_password; ?>">
                <span class="help-block"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group">
                 <input type="submit" class="SignupButton">Submit
                <a class="btn btn-link" href="../My/Home.php">Cancel</a>
                </center>
            </div>
        </form>
    </div>    
</body>
</html>