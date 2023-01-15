<?php
 
session_start();
 
if(isset($_GET['logout'])){    
     
    //Simple exit message
    $logout_message = "<div class='msgln'><span class='left-info'>User <b class='user-name-left'>". $_SESSION['name'] ."</b> has left the chat session.</span><br></div>";
    file_put_contents("log.html", $logout_message, FILE_APPEND | LOCK_EX);
     
    session_destroy();
    header("Location: ../index.php"); //Redirect the user
}
 
if(isset($_POST['enter'])){
    if($_POST['name'] != ""){
        $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['username']));
    }
    else{
        echo '<span class="error">Please enter a display name.</span>';
    }
}
 
function loginForm(){
    echo
    '<div id="loginform">
    <p>Please enter a display name.</p>
    <form action="index.php" method="post">
      <label for="name">Name &mdash;</label>
      <input type="text" name="name" id="name" />
      <input type="submit" name="enter" id="enter" value="Enter" />
    </form>
  </div>';
}
 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
 
        <title>Chat :: ROAR</title>
<?php
// Initialize the session
session_start();
  

 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>

<title>ROAR | RCCService.xyz</title>
<link id="ctl00_ctl00_Imports" rel="stylesheet" type="text/css" href="https://web.archive.org/web/20120821135622cs_/http://www.roblox.com/CSS/Base/CSS/AllCSS.ashx?v=20120820&t=RBX2">

             <div id="Container">
            
        
        <div id="SmallHeaderContainer">
        
            
                <div id="Banner">
                    <div class="BannerCenterContainer">
                        <a href="/" class="btn-logo"></a>
                        

<div id="AuthenticatedUserName">
    <span class="loginSpan">Hi <a href="#"><?php echo htmlspecialchars($_SESSION["username"]); ?></a></span>
  <img id="over13icon" src="http://rccservice.xyz/img/13.png" alt="" title="This is a 13+ account."/>
    
</div>

                        
<div id="Alerts">
    
        

<div id="ctl00_ctl00_cphBanner_cphBannerHeader_BannerAlertsLoginView_BannerAlerts_Authenticated_rbxBannerAlert_rbxAlerts_AlertSpacePanel">
  
    <div class="SmallHeaderAlertSpaceLeft">
        <div class="AlertSpace">
            <div class="MessageAlert">
                <div class="icons message_icon">
                </div>
                <a id="ctl00_ctl00_cphBanner_cphBannerHeader_BannerAlertsLoginView_BannerAlerts_Authenticated_rbxBannerAlert_rbxAlerts_MessageAlertCaptionHyperLink" class="MessageAlertCaption tooltip-bottom" title="Inbox" href="/Messages.php">sex</a>
            </div>
            <div class="FriendsAlert">
                <div class="icons friends_icon">
                </div>
                <a id="ctl00_ctl00_cphBanner_cphBannerHeader_BannerAlertsLoginView_BannerAlerts_Authenticated_rbxBannerAlert_rbxAlerts_FriendsAlertCaptionHyperLink" class="FriendsAlertCaption tooltip-bottom" title="Friend Requests" href="/My/EditFriends.php">sex</a>
            </div>
            <div class="RobuxAlert">
                <div class="icons robux_icon">
                </div>
                <a id="ctl00_ctl00_cphBanner_cphBannerHeader_BannerAlertsLoginView_BannerAlerts_Authenticated_rbxBannerAlert_rbxAlerts_RobuxAlertCaptionHyperLink" class="RobuxAlertCaption tooltip-bottom" title="ROBUX" href="../testrobux.php"> <?php echo htmlspecialchars($_SESSION["robux"]); ?></a>
            </div>
            <div class="TicketsAlert">
                <div class="icons tickets_icon">
                </div>
                <a id="ctl00_ctl00_cphBanner_cphBannerHeader_BannerAlertsLoginView_BannerAlerts_Authenticated_rbxBannerAlert_rbxAlerts_TicketsAlertCaptionHyperLink" class="TicketsAlertCaption tooltip-bottom" title="Tickets" href="../testrobux.php"> <?php echo htmlspecialchars($_SESSION["tix"]); ?></a>
            </div>
        </div>
    </div>

</div>

    
</div>
<div id="AuthenticationButton">
    <span id="AuthenticationBannerSpan" style="background:none;">
         <a id="ctl00_ctl00_cphBanner_cphBannerHeader_BannerAlertsLoginView_BannerAlerts_Authenticated_lsLoginStatus" class="logoutButton" href="../resetsession.php">Logout</a>
  </span>
</div>

                    </div>
                </div>
        </div>
        <div id="Header" class="iframeHeader" style="position:static;width:100%;">
            

<div id="Nav" class="Navigation">
    <ul id="ctl00_ctl00_cphBanner_cphBannerHeader_Menu_MenuUL">
        
                <li>
                    <a href="../" style="font-weight:bold;" ref="nav-myroblox"><h1>Admin Panel</h1></a>
                </li>
            
        
 
    </ul>
</div>

        </div>
        </div>
 
    
        
    

            </li>
        </ul>
    </div>
</div>
<div class="forceSpaceUnderSubmenu">&nbsp;</div> <!-- add additional spacing underneath ad -->


        
<div id="pluginObjDiv" style="height: 0px; width:1px;visibility:hidden;"></div>
<iframe id="downloadInstallerIFrame" style="visibility:hidden; height: 0px; width:1px;position:absolute;"></iframe>

<div id="InstallationInstructions"  class="modalPopup blueAndWhite" style="display: none;overflow:hidden;" >
    <a id="CancelButton2" onclick="return Roblox.Client._onCancel();" class="ImageButton closeBtnCircle_35h ABCloseCircle"></a>
    <div style="padding-bottom: 10px; text-align:center;">
        
                <img class="InstallInstructionsImage" modalwidth="597" delaysrc="http://imagesak.roblox.com/ed0d14e6d52d6aebb75371710c7e21c9.jpg" alt="Installation Instructions"/><br /><br />
            
    </div>
</div>
<script type="text/javascript" language="javascript">
    Roblox.Client.runInstallABTest = function () {
        /**/
    }
</script>
        

<div ID="PlaceLauncherStatusPanel" style="display: none; width: 300px;">
    <div class="modalPopup blueAndWhite PlaceLauncherModal" style="min-height: 160px;">
        <div id="Spinner" class="Spinner" style="margin:0 1em 1em 0; padding:20px 0px;">
            <img src="http://imagesak.roblox.com/e998fb4c03e8c2e30792f2f3436e9416.gif" alt="Progress" /></div>
        <div id="status" style="min-height:40px; text-align:center; margin: 5px 20px;">
            <div id="Starting" class="PlaceLauncherStatus MadStatusStarting" style="display:block">
                Starting Roblox...
                </div>
            <di
                  <div id="Waiting" class="PlaceLauncherStatus MadStatusField">Connecting to Players...</div>
            <div id="StatusBackBuffer" class="PlaceLauncherStatus PlaceLauncherStatusBackBuffer MadStatusBackBuffer"></div>
        </div>
       <div style="text-align: center; margin-top: 1em;">
            <input type="button" class="Button CancelPlaceLauncherButton" value="Cancel" />
        </div>
    </div>
</div>


<div id="videoPrerollPanel" style="display:none;">
    <div id="videoPrerollTitleDiv">
        Gameplay sponsored by:
    </div>
    <div id="videoPrerollMainDiv"></div>
    <div id="videoPrerollCompanionAd"></div>
    <div id="videoPrerollLoadingDiv">
        Loading <span id="videoPrerollLoadingPercent">0%</span> - <span id="videoPrerollMadStatus" class="MadStatusField">Starting game...</span><span id="videoPrerollMadStatusBackBuffer" class="MadStatusBackBuffer"></span>
        <div id="videoPrerollLoadingBar">
            <div id="videoPrerollLoadingBarCompleted">
            </div>
        </div>
    </div>
    <div id="videoPrerollJoinBC">
        <span>Want to get rid of these ads?</span>
        <a href="/Upgrades/BuildersClubMemberships.aspx?ref=vpr" target="_blank" id="videoPrerollJoinBCButton"></a>
    </div>
</div>

                    <br>
                    <br>
                    <br>
                    <br>

        <div id="ctl00_ctl00_cphBanner_Announcement">
  
            <div class="SystemAlert">
                <div id="ctl00_ctl00_cphBanner_SystemAlertTextColor" class="SystemAlertText" style="background-color:orange;"><div class="Exclamation"></div><div id="ctl00_ctl00_cphBanner_LabelAnnouncement">Click <a href="https://discord.gg/caxhMQJq7d">here to join the Discord</div></a> </div>
            </div>
        
</div>
        
        
    </div>
</div>

    </head>
   <center> <body>
     <center>
    <?php
    if(!isset($_SESSION['name'])){
        loginForm();
    }
    else {
    ?>
        <div id="wrapper">
            <div id="menu">
                <div style="text-align:right;"><p class="logout"><a id="exit" href="#">Exit Chat</a></p></div>
            </div>
 
            <div id="chatbox">
            <?php
            if(file_exists("log.html") && filesize("log.html") > 0){
                $contents = file_get_contents("log.html");          
                echo $contents;
            }
            ?>
            </div>
 
            <form name="message" action="">
                <input name="usermsg" type="text" id="usermsg" />
                <input name="submitmsg" type="submit" id="submitmsg" value="Send" />
            </form>
        </div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">
            // jQuery Document
            $(document).ready(function () {
                $("#submitmsg").click(function () {
                    var clientmsg = $("#usermsg").val();
                    $.post("post.php", { text: clientmsg });
                    $("#usermsg").val("");
                    return false;
                });
 
                function loadLog() {
                    var oldscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Scroll height before the request
 
                    $.ajax({
                        url: "log.html",
                        cache: false,
                        success: function (html) {
                            $("#chatbox").html(html); //Insert chat log into the #chatbox div
 
                            //Auto-scroll           
                            var newscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Scroll height after the request
                            if(newscrollHeight > oldscrollHeight){
                                $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
                            }   
                        }
                    });
                }
 
                setInterval (loadLog, 500);
 
                $("#exit").click(function () {
                    var exit = confirm("Are you sure you want to leave?");
                    if (exit == true) {
                    window.location = "https://rccservice.xyz/My.Home.php";
                    }
                });
            });
        </script>
    </center>
      </body>
</html>
<?php
}
?>
