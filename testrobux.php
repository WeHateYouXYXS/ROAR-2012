<?php include 'headerlo.php' ?>
<?php
    $conn = mysqli_connect("mysql.ct8.pl", "m26459_users", "K7(5hxP5A$2F#qu@wiyC","m26459_users");
    if ($conn-> connect_error) {
      die("Connection failed:". $conn-> connect_error);
    }
// Initialize the session
session_start();
 
// poop
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>

<title>V0.1 BETA</title>
 <div class="MyRobloxContainer" style = "width:900px;">
        <!--Intro header for page -->
        <!-- Middle column -->
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_TopFriends" class="Column1b" style="overflow: show; margin: 5px 5px 0px 0px; width: 210px;">
            <!-- Profile pic and inbox -->
           <h3 style = "margin: 0px 0px 5px 0px;" class = "HomeSide" >&nbspMy Account <a style="font:bold 12px Arial; color: #363636"</a></h3>
            <div class="StandardBox"  style = "overflow:hidden;margin: 0px 0px 5px 0px; border: 1px solid #9e9e9e; background: white;width:198px;">
                <center>
                    
                   
                  <a id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_AvatarImage">          <p>Your Username: <?php echo htmlspecialchars($_SESSION["username"]); ?></p>
<p>Your Description: <a><?php echo htmlspecialchars($_SESSION["description"]); ?></a></p>
<p>Your ID: <?php echo htmlspecialchars($_SESSION["id"]); ?></p>
<p>Your Registration Date: <?php echo htmlspecialchars($_SESSION["created_at"]); ?></p>
<p>Your Robux: <?php echo htmlspecialchars($_SESSION["robux"]); ?></p>
<p>Your Tix: <?php echo htmlspecialchars($_SESSION["tix"]); ?></p>
<br>
<br>
<br>
<hr></a>

                </center>
                
               
                    <div style="margin: 0px 0px 0px 0px;width: 188px; background-color: white; padding: 5px">
                        <center>
                            <b><a style="color: #5470bd;">
                                V0.1 BETA</a></b></center>
                    </div>
                </div>
            </div>

            <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_pnlBestFriends">
  
                <div class="StandardBox" style="margin: 0px 0px 0px 0px;width:198px;text-align: left; border: 1px solid #9e9e9e; background: white;">
                    <h3 style = "margin: 0px 0px 5px 0px;" class = "HomeSide" >My Stats <a style="font:bold 12px Arial; color: #363636"</a></h3>
                    
                            <table width="inherit">
                        
                            
                        
                            </table><div style="clear:both;"></div>
                    
                    <div style="clear:both;"></div>
                </div>
                <div style="clear:both;"></div>
            
</div>
      
                      Description changing has moved to <a href="/description.php">here</a>