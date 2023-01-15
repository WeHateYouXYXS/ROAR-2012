<?php
// Initialize the session
session_start();
  

 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../../index.php");
    exit;
}
?>
<head>
<head runat="server">
<title>ROAR | RCCService.xyz</title>
<link id="ctl00_ctl00_Imports" rel="stylesheet" type="text/css" href="https://web.archive.org/web/20120821135622cs_/http://www.roblox.com/CSS/Base/CSS/AllCSS.ashx?v=20120820&t=RBX2">
<link rel="icon" href="https://rccsevice.xyz/roars.png" type="image/x-icon"/>
<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.2.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-1.7.2.min.js'><\/script>")</script>
<script src="https://ajax.aspnetcdn.com/ajax/4.0/1/WebForms.js" type="text/javascript"></script>
<script type="text/javascript">window.WebForm_PostBackOptions||document.write('<script type="text/javascript" src="/WebResource.axd?d=pynGkmcFUV13He1Qd6_TZH6GgOgBQtqMPCPjRUnhj_pzNesAXKuAdu2pj-Sq-3JDJIgwEw2&amp;t=635792847671809273"><\/script>');//]]></script>
<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/4.0/1/MicrosoftAjax.js"></script>
<script type="text/javascript">window.Sys || document.write("<script type='text/javascript' src='/js/Microsoft/MicrosoftAjax.js'><\/script>")</script>
<script src="https://ajax.aspnetcdn.com/ajax/4.0/1/MicrosoftAjaxWebForms.js" type="text/javascript"></script>
<script type="text/javascript">(window.Sys && Sys.WebForms)||document.write('<script type="text/javascript" src="/ScriptResource.axd?d=dwY9oWetJoJoVpgL6Zq8OC_Qyj6iPZ9-IhfgU1PKd92NqwesSi5IgR2kHUAQCLPPKv5dmGb59sQmqQu3G6_D3NKJrjUgXZeod0TXb9neDij-vtT2tW5WrVuyLXf9BqECFbVGd3-sTKQ_7e03iLz9XRbz2Yc1&t=72e85ccd"><\/script>');//]]></script>
</head>
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
                <a id="ctl00_ctl00_cphBanner_cphBannerHeader_BannerAlertsLoginView_BannerAlerts_Authenticated_rbxBannerAlert_rbxAlerts_MessageAlertCaptionHyperLink" class="MessageAlertCaption tooltip-bottom" title="Inbox" href="/Messages.php">0</a>
            </div>
            <div class="FriendsAlert">
                <div class="icons friends_icon">
                </div>
                <a id="ctl00_ctl00_cphBanner_cphBannerHeader_BannerAlertsLoginView_BannerAlerts_Authenticated_rbxBannerAlert_rbxAlerts_FriendsAlertCaptionHyperLink" class="FriendsAlertCaption tooltip-bottom" title="Friend Requests" href="/My/EditFriends.php">0</a>
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
         <a id="ctl00_ctl00_cphBanner_cphBannerHeader_BannerAlertsLoginView_BannerAlerts_Authenticated_lsLoginStatus" class="logoutButton" href="../../resetsession.php">Logout</a>
  </span>
</div>

                    </div>
                </div>
        </div>
        <div id="Header" class="iframeHeader" style="position:static;width:100%;">
            

<div id="Nav" class="Navigation">
    <ul id="ctl00_ctl00_cphBanner_cphBannerHeader_Menu_MenuUL">
        
                <li>
                    <a href="/" style="font-weight:bold;" ref="nav-myroblox"><h1>My ROAR</h1></a>
                </li>
            
        
        <li class="gamesLink"><a id="hlGames" href="../Games.php" style="" title="Games" ref="nav-games">Games</a> </li>
        <li><a id="hlCatalog" href="../Catalog.php" style="" title="Catalog" ref="nav-catalog">Catalog</a></li>
        <li><a id="hlBrowse" href="../Browse.php" style="" title="People" ref="nav-people">People</a></li>
        <li><a id="hlForum" onclick="" href="/Forum/Default.php" style="" title="Forum" ref="nav-forum">Forum</a></li>
        <li><a id="hlNews" href="#" title="Blog" ref="nav-news">Blog</a></li>
        <li><a id="hlHelp" href="#" style="" title="Help" ref="nav-help">Help</a></li>
      <li><?php
if (isset($_SESSION['admin']) && $_SESSION['admin'] == "Yes" ) {
echo '<a href="/admin/" class="btn btn-danger">Admin Panel</a>';
} else {
echo " ";
}
?></li>
    </ul>
</div>

        </div>
        </div>
 
    
        
    

<div class="mySubmenuFixed">
    <div id="ctl00_ctl00_cphBanner_cphSubmenu_UserSubmenu1_subMenu" class="subMenu">
        <ul>
            <li><a class=""
                href="https://rccservice.xyz/My/Home.php">Home</a></li>
            <li><a class=""
                href="Places.php">Places</a></li>
            <li><a class=""
                href="https://rccservice.xyz/My/Messages.php">Inbox</a></li>
            <li><a class=""
                href="https://rccservice.xyz/My/Profile.php">Account</a></li>
            <li><a href="https://rccservice.xyz/My/User.php">Profile</a></li>
            <li><a class=""
                href="https://rccservice.xyz/My/EditFriends.php">Friends</a></li>
            <li><a class=""
                href="https://rccservice.xyz/My/Character.php">Character</a></li>
            <li><a class=""
                href="https://rccservice.xyz/My/Stuff.php">Stuff</a></li>
            <li id="ctl00_ctl00_cphBanner_cphSubmenu_UserSubmenu1_SetsUrl"><a class=""
                href="https://rccservice.xyz//My/Sets.php">Sets</a></li>
            <li><a class=""
                href="https://rccservice.xyz/My/Groups.php">Groups</a></li>
            <li><a class=""
                href="https://rccservice.xyz/My/AccountBalance.php">Money</a></li>
            <li><a class=""
                href="AdInventory.aspx">Advertising</a></li>
            <li><a style="border: none;" class=""
                href="InviteAFriend.aspx">Share</a>
                <ul>
                    <li><a href="/My/Share/PleaseUpgradeMe.aspx">Please Upgrade Me</a></li>
                    <li><a href="/My/InviteAFriend.aspx">Invite A Friend</a></li>
                    <li id="ctl00_ctl00_cphBanner_cphSubmenu_UserSubmenu1_ref1"><a href="/My/Share/ReferralLeaderboards.aspx">Referral Leaderboards</a></li>
                </ul>

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
                <div id="ctl00_ctl00_cphBanner_SystemAlertTextColor" class="SystemAlertText" style="background-color:orange;"><div class="Exclamation"></div><div id="ctl00_ctl00_cphBanner_LabelAnnouncement">Admin panel is in alpha stage</div>
            </div>
        
</div>
        
        
    </div>
</div>
