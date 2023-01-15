<?php include 'headerlo.php'?>
<?php
    $conn = mysqli_connect("mysql.ct8.pl", "m26459_users", "K7(5hxP5A$2F#qu@wiyC","m26459_users");
    if ($conn-> connect_error) {
      die("Connection failed:". $conn-> connect_error);
    }
// Initialize the session
session_start();
  
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../index.php");
    exit;
}
$sql = "SELECT id, username, description, robux ,tix FROM users WHERE id = " . $_GET["user"] . "";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo " ";
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>



<div class="MyRobloxContainer">
        
<div style="width:900px;height:30px;font-family:Verdana, Helvetica, Sans-Serif; clear:both; display:none;">
    <span id="ctl00_cphRoblox_rbxHeaderPane_nameRegion" style="font-size:20px; font-weight:bold;"></span>
</div>



        
        <div style="clear: both; margin: 0; padding: 0;">
        </div>
        <!--[if IE 6]>
      <table><tr><td width="450px" valign="top">
      <![endif]-->
       
        <div id="ctl00_cphRoblox_OBCmember" class="blank-box" style="margin-top: 10px; width: 951px; float: left; padding: 8px">
            <div style="float: left; margin-right: 10px;">
                <img src=http://images.rbxcdn.com/9cb3b66f03c1129835cc9f78d6e4c423.png border="0" alt="OBC" title="OBC member" /></div>
            <div style="float: left; line-height: 30px;">
                You are viewing the profile of an <a href="Upgrades/BuildersClubMemberships.aspx">Outrageous Builders
                    Club</a> member.</div>
        </div>
  <?php
if (isset($row["admin"]) && $row["admin"] == "Yes" ) {
echo '<a href="/badges" class="btn btn-danger">This user is a ROAR administrator.</a>';
} else {
echo " ";
}
?>
  
  <br>
  <div class="Column1d">
            

<div class="StandardBoxHeader">
    <span id="ctl00_cphRoblox_rbxUserPane_lUserRobloxURL"><?php echo ''. $row["username"] .'';?>'s Profile</span></div>
<div class="StandardBox" style="position: relative;z-index:3">
    <div style="width: 100%">
        <div id="ctl00_cphRoblox_rbxUserPane_onlineStatusRow">
            <div style="text-align: center;">
                
                <span id="ctl00_cphRoblox_rbxUserPane_lUserOnlineStatus" class="UserOnlineMessage">[ Online: Website ]</span>
              <script>    
              $onlinetext = ($user['lastseen'] + 300 <= time()) ? "<span class=\"UserOfflineMessage\">[ Offline ]</span>" : "<span class=\"UserOnlineMessage\">[ Online: Website ]</span>";
     </script>
              
                
            </div>
        </div>
        <div>
            <div>
                <center>
                    <div style="margin-bottom: 10px;">
                        <span style="font-size: 13px;">
                            <a id="ctl00_cphRoblox_rbxUserPane_hlUserRobloxURL" href="#">https://rccservice.xyz/User.php?user=<?php echo ''. $row["id"] .'';?></a></span><br>
                        
                    </div>
                    <a id="ctl00_cphRoblox_rbxUserPane_AvatarImage" disabled="disabled" title="USER_AVATAR" onclick="return false" style="display:inline-block;height:200px;width:200px;"><img src="https://rccservice.xyz/img/av.png" height="200" width="200" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="<?php echo htmlspecialchars(_SESSION["username"]); ?>" blankurl="http://t4ak.roblox.com/p1-blank-150x200.gif"></a>
                    <br>
                    
                    

<div class="UserBlurb" style="margin-top: 10px; overflow-y: auto; max-height: 450px; ">
   <?php echo ''. $row["description"] .'';?>
</div>
<div id="ProfileButtons" style="margin: 10px auto; width: 256px;">
      
        <a id="FriendButton" class="GrayButton " href="#">Send Friend Request</a>
    
    <a id="MessageButton" style="margin:0 5px" class="GrayButton " href="/Messages.php">Send Message</a>
    
    <div class="clear"></div>
    <script type="text/javascript">
        function hideDropdowns() {
            $('.GrayDropdown .Button.Active').removeClass('Active').siblings('.Menu').hide();
        }

        $('#ProfileButtons').width($('#FriendButton').outerWidth() + $('#MessageButton').outerWidth() + $('#MoreButton').outerWidth() + 10);
        $('.GrayDropdown .Button').click(function () {
            var show = !$(this).hasClass('Active');
            hideDropdowns();
            if (show) {
                $(this).addClass('Active').siblings('.Menu').show();
            }

            return false;
        });
        $(document).click(function () {
            hideDropdowns();
        });
    </script>
</div>

                    <div class="ProfileAlertPanel" style="display: none; margin: 15px auto 0px auto; width: 205px;">
                        
                        <br>
                    </div>
                    
                    
                </center>
            </div>
        </div>
    </div>
</div>

            

<div class="StandardTabWhite">
<span>Funny Badges</span>
</div>

<div class="StandardBoxWhite">
  <table id="ctl00_cphRoblox_rbxUserBadgesPane_dlBadges" cellspacing="0" align="Center" border="0" style="border-collapse:collapse;">
  <tbody><tr>
    <td>
      <div class="Badge">
        <div class="BadgeImage"><a id="ctl00_cphRoblox_rbxUserBadgesPane_dlBadges_ctl00_hlHeader" href="Badges.aspx#Badge12"><img id="ctl00_cphRoblox_rbxUserBadgesPane_dlBadges_ctl00_iBadge" src="https://web.archive.org/web/20121004013711im_/http://imagesak.roblox.com/088451f70609387491bbf8e85f285065.png" alt="This decoration is awarded to all citizens who have played ROBLOX for at least a year. It recognizes stalwart community members who have stuck with us over countless releases and have helped shape ROBLOX into the game that it is today. These medalists are the true steel, the core of the Robloxian history ... and its future." style="height:75px;width:75px;border-width:0px;"></a></div>
        <div class="BadgeLabel"><a id="ctl00_cphRoblox_rbxUserBadgesPane_dlBadges_ctl00_HyperLink1" href="Badges.aspx#Badge12">Veteran</a></div>
      </div>
    </td><td>
      <div class="Badge">
        <div class="BadgeImage"><a id="ctl00_cphRoblox_rbxUserBadgesPane_dlBadges_ctl02_hlHeader" href="Badges.aspx#Badge8"><img id="ctl00_cphRoblox_rbxUserBadgesPane_dlBadges_ctl02_iBadge" src="https://web.archive.org/web/20121004013711im_/http://imagesak.roblox.com/156b077267b7848d38df4471e2a2c540.png" alt="Robloxia is a vast uncharted realm, as large as the imagination. Individuals who invite others to join in the effort of mapping this mysterious region are honored in Robloxian society. Citizens who successfully recruit three or more fellow explorers via the Share Roblox with a Friend mechanism are awarded with this badge." style="height:75px;width:75px;border-width:0px;"></a></div>
        <div class="BadgeLabel"><a id="ctl00_cphRoblox_rbxUserBadgesPane_dlBadges_ctl02_HyperLink1" href="Badges.aspx#Badge8">Inviter</a></div>
      </div>
    </td><td>
      <div class="Badge">
        <div class="BadgeImage"><a id="ctl00_cphRoblox_rbxUserBadgesPane_dlBadges_ctl03_hlHeader" href="Badges.aspx#Badge3"><img id="ctl00_cphRoblox_rbxUserBadgesPane_dlBadges_ctl03_iBadge" src="https://web.archive.org/web/20121004013711im_/http://imagesak.roblox.com/d111059fca163b9824716cff2fe4aec5.png" alt="This badge is given to any player who has proven his or her combat abilities by accumulating 10 victories in battle. Players who have this badge are not complete newbies and probably know how to handle their weapons." style="height:75px;width:75px;border-width:0px;"></a></div>
        <div class="BadgeLabel"><a id="ctl00_cphRoblox_rbxUserBadgesPane_dlBadges_ctl03_HyperLink1" href="Badges.aspx#Badge3">Combat Initiation</a></div>
      </div>
    </td>
  </tr>
</body></table>
  
</div>

            <div id="BadgesDisplayPane" style="clear: both;">
                



<div class="StandardTabWhite"><span>Player Badges</span></div>
<div class="StandardBoxWhite" style="">
      
    <div id="ctl00_cphRoblox_rbxBadgesDisplay_BadgesUpdatePanel" class="BadgesUpdatePanel">
  
            <div class="BadgesLoading_Container"></div>
            <div class="BadgesListView_Container">
                
                         
                        <div class="TileBadges">
                                <a id="ctl00_cphRoblox_rbxBadgesDisplay_BadgeListView_ctrl0_AssetThumbnailHyperLink" title="Welcome to Spleef! (Creator: CloneTrooper1019)" href="/web/20121004013711/http://roblox.com/Welcome-to-Spleef-item?id=76285821" style="display:inline-block;height:75px;width:75px;cursor:pointer;"><img src="https://web.archive.org/web/20121004013711im_/http://t1ak.roblox.com/b479f2c86ebd432b84ccf5479d0366a8" height="75" width="75" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Welcome to Spleef! (Creator: CloneTrooper1019)" blankurl="http://t2ak.roblox.com/p1-blank-75x75.gif"></a>
                        
                    
                            <div class="AssetDetails" style="display:none;" id="badgeInfo1021466078">
                                <div class="AssetName"><a id="ctl00_cphRoblox_rbxBadgesDisplay_BadgeListView_ctrl0_AssetNameHyperLink" title="click to view" href="/web/20121004013711/http://roblox.com/Welcome-to-Spleef-item?id=76285821">Welcome to Spleef!</a></div>
                                <div class="AssetCreator"><span class="Label">Creator:</span> <span class="Detail"><a id="ctl00_cphRoblox_rbxBadgesDisplay_BadgeListView_ctrl0_AssetCreatorHyperLink" href="User.aspx?ID=2032622">CloneTrooper1019</a></span></div>
                            </div>
                        </div>
                    
                        <div class="TileBadges">
                                <a id="ctl00_cphRoblox_rbxBadgesDisplay_BadgeListView_ctrl1_AssetThumbnailHyperLink" title="OMG ITS CLONETROOPER1019! (You Met the Creator!) (Creator: CloneTrooper1019)" href="/web/20121004013711/http://roblox.com/OMG-ITS-CLONETROOPER1019-You-Met-the-Creator-item?id=76286530" style="display:inline-block;height:75px;width:75px;cursor:pointer;"><img src="https://web.archive.org/web/20121004013711im_/http://t6ak.roblox.com/fc7c381dee385b2dd532514713487d53" height="75" width="75" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="OMG ITS CLONETROOPER1019! (You Met the Creator!) (Creator: CloneTrooper1019)" blankurl="http://t2ak.roblox.com/p1-blank-75x75.gif"></a>
                        
                    
                            <div class="AssetDetails" style="display:none;" id="badgeInfo1021442863">
                                <div class="AssetName"><a id="ctl00_cphRoblox_rbxBadgesDisplay_BadgeListView_ctrl1_AssetNameHyperLink" title="click to view" href="/web/20121004013711/http://roblox.com/OMG-ITS-CLONETROOPER1019-You-Met-the-Creator-item?id=76286530">OMG ITS CLONETROOPER1019! (You Met the Creator!)</a></div>
                                <div class="AssetCreator"><span class="Label">Creator:</span> <span class="Detail"><a id="ctl00_cphRoblox_rbxBadgesDisplay_BadgeListView_ctrl1_AssetCreatorHyperLink" href="User.aspx?ID=2032622">CloneTrooper1019</a></span></div>
                            </div>
                        </div>
                    
                        <div class="TileBadges">
                                <a id="ctl00_cphRoblox_rbxBadgesDisplay_BadgeListView_ctrl2_AssetThumbnailHyperLink" title="House Tipper (Creator: CloneTrooper1019)" href="/web/20121004013711/http://roblox.com/House-Tipper-item?id=76286206" style="display:inline-block;height:75px;width:75px;cursor:pointer;"><img src="https://web.archive.org/web/20121004013711im_/http://t7ak.roblox.com/5a2e166455a3c4507ffc7e4d8b4e6c68" height="75" width="75" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="House Tipper (Creator: CloneTrooper1019)" blankurl="http://t2ak.roblox.com/p1-blank-75x75.gif"></a>
                        
                    
                            <div class="AssetDetails" style="display:none;" id="badgeInfo1021442862">
                                <div class="AssetName"><a id="ctl00_cphRoblox_rbxBadgesDisplay_BadgeListView_ctrl2_AssetNameHyperLink" title="click to view" href="/web/20121004013711/http://roblox.com/House-Tipper-item?id=76286206">House Tipper</a></div>
                                <div class="AssetCreator"><span class="Label">Creator:</span> <span class="Detail"><a id="ctl00_cphRoblox_rbxBadgesDisplay_BadgeListView_ctrl2_AssetCreatorHyperLink" href="User.aspx?ID=2032622">CloneTrooper1019</a></span></div>
                            </div>
                        </div>
                    
                        <div class="TileBadges">
                                <a id="ctl00_cphRoblox_rbxBadgesDisplay_BadgeListView_ctrl3_AssetThumbnailHyperLink" title="Diploma of Unstupidity. (Creator: CloneTrooper1019)" href="/web/20121004013711/http://roblox.com/Diploma-of-Unstupidity-item?id=82012770" style="display:inline-block;height:75px;width:75px;cursor:pointer;"><img src="https://web.archive.org/web/20121004013711im_/http://t1ak.roblox.com/db52bfabe89ab6df0a537e42e102b91d" height="75" width="75" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Diploma of Unstupidity. (Creator: CloneTrooper1019)" blankurl="http://t2ak.roblox.com/p1-blank-75x75.gif"></a>
                        
                    
                            <div class="AssetDetails" style="display:none;" id="badgeInfo1021442860">
                                <div class="AssetName"><a id="ctl00_cphRoblox_rbxBadgesDisplay_BadgeListView_ctrl3_AssetNameHyperLink" title="click to view" href="/web/20121004013711/http://roblox.com/Diploma-of-Unstupidity-item?id=82012770">Diploma of Unstupidity.</a></div>
                                <div class="AssetCreator"><span class="Label">Creator:</span> <span class="Detail"><a id="ctl00_cphRoblox_rbxBadgesDisplay_BadgeListView_ctrl3_AssetCreatorHyperLink" href="User.aspx?ID=2032622">CloneTrooper1019</a></span></div>
                            </div>
                        </div>
                    
                        <div class="TileBadges">
                                <a id="ctl00_cphRoblox_rbxBadgesDisplay_BadgeListView_ctrl4_AssetThumbnailHyperLink" title="Winner! (Creator: CloneTrooper1019)" href="/web/20121004013711/http://roblox.com/Winner-item?id=76285879" style="display:inline-block;height:75px;width:75px;cursor:pointer;"><img src="https://web.archive.org/web/20121004013711im_/http://t2ak.roblox.com/a33968dfc790550998a22f00d19af0ee" height="75" width="75" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Winner! (Creator: CloneTrooper1019)" blankurl="http://t2ak.roblox.com/p1-blank-75x75.gif"></a>
                        
                    
                            <div class="AssetDetails" style="display:none;" id="badgeInfo1021442858">
                                <div class="AssetName"><a id="ctl00_cphRoblox_rbxBadgesDisplay_BadgeListView_ctrl4_AssetNameHyperLink" title="click to view" href="/web/20121004013711/http://roblox.com/Winner-item?id=76285879">Winner!</a></div>
                                <div class="AssetCreator"><span class="Label">Creator:</span> <span class="Detail"><a id="ctl00_cphRoblox_rbxBadgesDisplay_BadgeListView_ctrl4_AssetCreatorHyperLink" href="User.aspx?ID=2032622">CloneTrooper1019</a></span></div>
                            </div>
                        </div>
                    
                        <div class="TileBadges">
                                <a id="ctl00_cphRoblox_rbxBadgesDisplay_BadgeListView_ctrl5_AssetThumbnailHyperLink" title="Scripter Badge (Creator: brad1342)" href="/web/20121004013711/http://roblox.com/Scripter-Badge-item?id=83516904" style="display:inline-block;height:75px;width:75px;cursor:pointer;"><img src="https://web.archive.org/web/20121004013711im_/http://t2ak.roblox.com/9317f97d44a962ecbf1c973aed90f6d9" height="75" width="75" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Scripter Badge (Creator: brad1342)" blankurl="http://t2ak.roblox.com/p1-blank-75x75.gif"></a>
                        
                    
                            <div class="AssetDetails" style="display:none;" id="badgeInfo1021250660">
                                <div class="AssetName"><a id="ctl00_cphRoblox_rbxBadgesDisplay_BadgeListView_ctrl5_AssetNameHyperLink" title="click to view" href="/web/20121004013711/http://roblox.com/Scripter-Badge-item?id=83516904">Scripter Badge</a></div>
                                <div class="AssetCreator"><span class="Label">Creator:</span> <span class="Detail"><a id="ctl00_cphRoblox_rbxBadgesDisplay_BadgeListView_ctrl5_AssetCreatorHyperLink" href="User.aspx?ID=2467279">brad1342</a></span></div>
                            </div>
                        </div>
                    
                        <div class="TileBadges">
                                <a id="ctl00_cphRoblox_rbxBadgesDisplay_BadgeListView_ctrl6_AssetThumbnailHyperLink" title="You played for 1 Minute (Creator: CloneTrooper1019)" href="/web/20121004013711/http://roblox.com/You-played-for-1-Minute-item?id=52419688" style="display:inline-block;height:75px;width:75px;cursor:pointer;"><img src="https://web.archive.org/web/20121004013711im_/http://t2ak.roblox.com/350d2c37e35f63a438dd920045c1437d" height="75" width="75" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="You played for 1 Minute (Creator: CloneTrooper1019)" blankurl="http://t2ak.roblox.com/p1-blank-75x75.gif"></a>
                        
                    
                            <div class="AssetDetails" style="display:none;" id="badgeInfo1021113128">
                                <div class="AssetName"><a id="ctl00_cphRoblox_rbxBadgesDisplay_BadgeListView_ctrl6_AssetNameHyperLink" title="click to view" href="/web/20121004013711/http://roblox.com/You-played-for-1-Minute-item?id=52419688">You played for 1 Minute</a></div>
                                <div class="AssetCreator"><span class="Label">Creator:</span> <span class="Detail"><a id="ctl00_cphRoblox_rbxBadgesDisplay_BadgeListView_ctrl6_AssetCreatorHyperLink" href="User.aspx?ID=2032622">CloneTrooper1019</a></span></div>
                            </div>
                        </div>
                    
                        <div class="TileBadges">
                                <a id="ctl00_cphRoblox_rbxBadgesDisplay_BadgeListView_ctrl7_AssetThumbnailHyperLink" title="You Entered the Game! (Creator: CloneTrooper1019)" href="/web/20121004013711/http://roblox.com/You-Entered-the-Game-item?id=52331725" style="display:inline-block;height:75px;width:75px;cursor:pointer;"><img src="https://web.archive.org/web/20121004013711im_/http://t0ak.roblox.com/6c22786d8b80b44bae010d408ccb963f" height="75" width="75" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="You Entered the Game! (Creator: CloneTrooper1019)" blankurl="http://t2ak.roblox.com/p1-blank-75x75.gif"></a>
                        
                    
                            <div class="AssetDetails" style="display:none;" id="badgeInfo1019407690">
                                <div class="AssetName"><a id="ctl00_cphRoblox_rbxBadgesDisplay_BadgeListView_ctrl7_AssetNameHyperLink" title="click to view" href="/web/20121004013711/http://roblox.com/You-Entered-the-Game-item?id=52331725">You Entered the Game!</a></div>
                                <div class="AssetCreator"><span class="Label">Creator:</span> <span class="Detail"><a id="ctl00_cphRoblox_rbxBadgesDisplay_BadgeListView_ctrl7_AssetCreatorHyperLink" href="User.aspx?ID=2032622">CloneTrooper1019</a></span></div>
                            </div>
                        </div>
                    
                        <div class="TileBadges">
                                <a id="ctl00_cphRoblox_rbxBadgesDisplay_BadgeListView_ctrl8_AssetThumbnailHyperLink" title="The Last Egg (Creator: Games)" href="/web/20121004013711/http://roblox.com/The-Last-Egg-item?id=76680134" style="display:inline-block;height:75px;width:75px;cursor:pointer;"><img src="https://web.archive.org/web/20121004013711im_/http://t0ak.roblox.com/fa94c0f4e76170280e4de9701554d39a" height="75" width="75" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="The Last Egg (Creator: Games)" blankurl="http://t2ak.roblox.com/p1-blank-75x75.gif"></a>
                        
                    
                            <div class="AssetDetails" style="display:none;" id="badgeInfo1013117560">
                                <div class="AssetName"><a id="ctl00_cphRoblox_rbxBadgesDisplay_BadgeListView_ctrl8_AssetNameHyperLink" title="click to view" href="/web/20121004013711/http://roblox.com/The-Last-Egg-item?id=76680134">The Last Egg</a></div>
                                <div class="AssetCreator"><span class="Label">Creator:</span> <span class="Detail"><a id="ctl00_cphRoblox_rbxBadgesDisplay_BadgeListView_ctrl8_AssetCreatorHyperLink" href="User.aspx?ID=21557">Games</a></span></div>
                            </div>
                        </div>
                    
                    
            </div>
            
            <div class="BadgesPager_Container" style="clear:both;text-align:center;bottom: 5px;left: 75px;">
                
            </div>
        
</div>
  <div style="clear:both;"></div>
</div>

<script type="text/javascript">
    $('#' + 'ctl00_cphRoblox_rbxBadgesDisplay_BadgesUpdatePanel').bind('click', function (e) {
        var target = $(e.target);
        if (target.parentsUntil('.BadgesUpdatePanel', '.BadgesPager_Container').length > 0 && target[0].tagName == 'A') {
            //put up loading sign
            $('.BadgesListView_Container').html("");

            window.setTimeout(function () {
                if ($('.BadgesListView_Container').html() == "") {
                    $('.BadgesLoading_Container').html('<div style="text-align: center;margin-top: 25px;"><img src="/images/spinners/spinner100x100.gif" alt="Loading..." /></div>');
                }
            }, 1000);
        }
    });
</script>
            </div>
            

<style>
.statsLabel { font-weight:bold; width:200px; text-align:right; padding-right:10px;}
.statsValue { font-weight:normal; width:200px; text-align:left;}
.statsTable { width:400px; }
</style>
<div class="StandardTabWhite"><span>Statistics</span></div>

<div class="StandardBoxWhite">
<table class="statsTable">
    <tbody><tr>
        <td class="statsLabel">
        <acronym title="The number of this user's friends.">Friends</acronym>:
        </td>
        <td class="statsValue">
        <span id="ctl00_cphRoblox_rbxUserStatisticsPane_lFriendsStatistics">2</span>
        </td>
    </tr>
    
    <tr>
        <td class="statsLabel"><acronym title="The number of posts this user has made to the ROBLOX forum.">Forum Posts</acronym>:</td>
        <td class="statsValue"><span id="ctl00_cphRoblox_rbxUserStatisticsPane_lForumPostsStatistics">0</span></td>
    </tr>
    <tr>
        <td class="statsLabel"><acronym title="The number of times this user's profile has been viewed.">Profile Views</acronym>:</td>
        <td class="statsValue"><span id="ctl00_cphRoblox_rbxUserStatisticsPane_lProfileViewsStatistics">0</span></td>
    </tr>
    <tr>
        <td class="statsLabel"><acronym title="The number of times this user's place has been visited.">Place Visits</acronym>:</td>
        <td class="statsValue"><span id="ctl00_cphRoblox_rbxUserStatisticsPane_lPlaceVisitsStatistics">0</span></td>
    </tr>
    <tr>
        <td class="statsLabel"><acronym title="The number of times this user's character has destroyed another user's character in-game.">Knockouts</acronym>:</td>
        <td class="statsValue"><span id="ctl00_cphRoblox_rbxUserStatisticsPane_lKillsStatistics">0</span></td>
    </tr>
    
     <tr>
        <td class="statsLabel"><acronym title="The all-time highest voting accuracy this user has achieved when voting in contests.">Highest Ever Voting Accuracy</acronym>:</td>
        <td class="statsValue"><span id="ctl00_cphRoblox_rbxUserStatisticsPane_lHighestEverVotingAccuracyStatistics">0</span>%</td>
    </tr>
     
</tbody></table>    
</div>
            

<div class="StandardTabWhite">
<span><?php echo ''. $row["username"] .'';?>'s Sets (<a href="" id="ToggleBetweenOwnedSubscribedSets" onclick="Roblox.SetsPaneObject.toggleBetweenSetsOwnedSubscribed();return false;">View Subscribed</a>)</span>
</div>

<div class="StandardBoxWhite">
    <div id="OwnedSetsContainerDiv">
        <div id="SetsItemContainer"><div class="NoSets">This user has no sets.</div></div>
        <div style="clear:both;"></div>
        <div class="SetsPager_Container">
            <div id="SetsPagerContainer"></div>
        </div>
    </div>
    <div id="SubscribedSetsContainerDiv" style="display:none;">
        <div id="SubscribedSetsItemContainer"><div class="NoSets">This user is not subscribed to any sets.</div></div>
        <div style="clear:both;"></div>
        <div class="SetsPager_Container">
            <div id="SubscribedSetsPagerContainer"></div>
        </div>
    </div>
    
    <div id="SetsPaneItemTemplate" style="display:none;">
        <div class="AssetThumbnail">
            <img class="$ImageAssetID">
        </div>
        <div class="AssetDetails">
            <div class="AssetName">
                <a href="/web/20121004013711/http://roblox.com/My/Sets.aspx?id=$ID">$Name</a>
            </div>
            <div class="AssetCreator">
                <span class="Label">Creator:&nbsp;</span>
                <span class="Detail">
                    <a href="/web/20121004013711/http://roblox.com/User.aspx?id=$CreatorUserID">$CreatorName</a>
                </span>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    if (typeof Roblox === "undefined") {
        Roblox = {};
    }

    $(function () {
        Roblox.SetsPaneObject = Roblox.SetsPane('https://web.archive.org/web/20121004013711/http://www.roblox.com/', 2);

        Roblox.OwnedSetsJSDataPager = new DataPager(0, 9, 'SetsItemContainer', 'SetsPagerContainer',
            Roblox.SetsPaneObject.getSetsPaged, Roblox.SetsPaneObject.ownedItemFormatter, Roblox.SetsPaneObject.getSetAssetImageThumbnail
        );
        Roblox.SubscribedSetsJSDataPager = new DataPager(0, 9, 'SubscribedSetsItemContainer', 'SubscribedSetsPagerContainer',
            Roblox.SetsPaneObject.getSubscribedSetsPaged, Roblox.SetsPaneObject.subscribedItemFormatter, Roblox.SetsPaneObject.getSetAssetImageThumbnail
        );
    });
</script>

            
            <div id="UserGroupsPane" style="clear: both;">
                <div class="StandardTabWhite">
                    <span>Groups</span></div>
                

<div class="StandardBoxWhite" style="clear:both;">

<a name="friendreqs"> </a> 
    <div id="ctl00_cphRoblox_rbxUserGroupsPane_pNoResults">
  
    <p class="NoResults"><span id="ctl00_cphRoblox_rbxUserGroupsPane_lNoResults"><?php echo ''. $row["username"] .'';?>is not in any groups.</span></p>
  
</div>
    
</div>
            </div>
        </div>
        <!--[if IE 6]>
      </td><td width="450px" valign="top">
      <![endif]-->
        <div class="Column2d" style="overflow: hidden">
            <div class="StandardBoxHeader">
                <span>Active Places
                    
                </span>
            </div>
            <div id="UserPlacesPane" class="StandardBox">
                
<div id="ctl00_cphRoblox_rbxUserPlacesPane_pnlUserPlaces">
  
<div id="UserPlaces" style="overflow: visible;">

    <div id="accordion" class="ui-accordion ui-widget ui-helper-reset ui-accordion-icons" role="tablist">
    
    </div>

  <div id="ctl00_cphRoblox_rbxUserPlacesPane_ShowcaseFooter" class="PanelFooter">
    
      
      
  
  </div>
 </div>
 
</div>

            </div>
            

<div style="margin-top:10px;" class="StandardTabWhite"><span><?php echo ''. $row["username"] .'';?>'s Friends (<a href="Friends.aspx?UserID=2">See all 2</a>)</span></div>
<div class="StandardBoxWhite">

    
  <table id="ctl00_cphRoblox_rbxFriendsPane_dlFriends" cellspacing="0" align="Center" border="0" style="border-collapse:collapse;">
  <tbody><tr>
    <td>
      <div class="Friend">
        <div class="Avatar"><a id="ctl00_cphRoblox_rbxFriendsPane_dlFriends_ctl00_hlAvatar" title="TheJoker21" href="#" style="display:inline-block;height:100px;width:100px;cursor:pointer;"><img src="http://rccservice.xyz/img/av.png" height="100" width="100" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="الحمار حقيقي" blankurl="http://t2ak.roblox.com/p1-blank-100x100.gif"></a></div>
        <div class="Summary">
          <span class="OnlineStatus"><img id="ctl00_cphRoblox_rbxFriendsPane_dlFriends_ctl00_iOnlineStatus" src="../img/Offline.png" alt="الحمار حقيقي is offline (last seen at 3/9/2012 9:14:29 AM)." style="border-width:0px;"></span>
          <span class="Name"><a id="ctl00_cphRoblox_rbxFriendsPane_dlFriends_ctl00_hlFriend" href="/My//User2.php">الحمار حقيقي</a></span>
        </div>
      </div>
    </td><td>
      <div class="Friend">
        <div class="Avatar"><a id="ctl00_cphRoblox_rbxFriendsPane_dlFriends_ctl01_hlAvatar" title="Garty983chub" href="/User/id.php?user=44" style="display:inline-block;height:100px;width:100px;cursor:pointer;"><img src="http://rccservice.xyz/img/av.png" height="100" width="100" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Garty983chub" blankurl="http://t2ak.roblox.com/p1-blank-100x100.gif"></a></div>
        <div class="Summary">
          <span class="OnlineStatus"><img id="ctl00_cphRoblox_rbxFriendsPane_dlFriends_ctl01_iOnlineStatus" src="https://rccservice.xyz/img/Offline.png" alt="Garty983chub is offline (last seen at 9/20/2012 8:16:44 PM)." style="border-width:0px;"></span>
          <span class="Name"><a id="ctl00_cphRoblox_rbxFriendsPane_dlFriends_ctl01_hlFriend" href="/User/id.php?user=44">Computer</a></span>
        </div>
      </div>
    </td><td>
      
    </td>
  </tr>
</tbody></table>
  
</div>
            <div style="clear: both; margin-bottom: 10px;">
                <div class="StandardTabWhite">
                    <span>Favorites</span></div>
                <div id="ctl00_cphRoblox_rbxFavoritesPane_FavoritesPane">
  
    <div class="StandardBoxWhite">
      
      <div id="FavoritesContent">
        
        
        <div id="ctl00_cphRoblox_rbxFavoritesPane_NoResultsPanel" class="NoResults">
    
            <span id="ctl00_cphRoblox_rbxFavoritesPane_NoResultsLabel" class="NoResults"><?php echo ''. $row["username"] .'';?> has not chosen any favorite places.</span>
        
  </div>
        
      </div>
      <div class="PanelFooter">
          Category:&nbsp;
          <select name="ctl00$cphRoblox$rbxFavoritesPane$AssetCategoryDropDownList" id="ctl00_cphRoblox_rbxFavoritesPane_AssetCategoryDropDownList">
    <option value="17">Heads</option>
    <option value="18">Faces</option>
    <option value="19">Gear</option>
    <option value="8">Hats</option>
    <option value="2">T-Shirts</option>
    <option value="11">Shirts</option>
    <option value="12">Pants</option>
    <option value="13">Decals</option>
    <option value="10">Models</option>
    <option selected="selected" value="9">Places</option>
            
           
      <div id="UserContainer">
<div id="UserAssetsPane">
<div id="ctl00_cphRoblox_rbxUserAssetsPane_upUserAssetsPane">
<div class="StandardBoxHeader">
<span>Stuff</span></div>
<div id="UserAssets" class="StandardBox">
<div id="AssetsMenu">
<div id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl00_AssetCategorySelectorPanel" class="AssetsMenuItem">
<a id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl00_AssetCategorySelector" class="AssetsMenuButton" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$rbxUserAssetsPane$AssetCategoryRepeater$ctl00$AssetCategorySelector&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">Heads</a>
</div>
<div id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl01_AssetCategorySelectorPanel" class="AssetsMenuItem">
<a id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl01_AssetCategorySelector" class="AssetsMenuButton" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$rbxUserAssetsPane$AssetCategoryRepeater$ctl01$AssetCategorySelector&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">Faces</a>
</div>
<div id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl02_AssetCategorySelectorPanel" class="AssetsMenuItem">
<a id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl02_AssetCategorySelector" class="AssetsMenuButton" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$rbxUserAssetsPane$AssetCategoryRepeater$ctl02$AssetCategorySelector&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">Gear</a>
</div>
<div id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl03_AssetCategorySelectorPanel" class="AssetsMenuItem_Selected">
<a id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl03_AssetCategorySelector" class="AssetsMenuButton_Selected" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$rbxUserAssetsPane$AssetCategoryRepeater$ctl03$AssetCategorySelector&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">Hats</a>
</div>
<div id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl04_AssetCategorySelectorPanel" class="AssetsMenuItem">
<a id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl04_AssetCategorySelector" class="AssetsMenuButton" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$rbxUserAssetsPane$AssetCategoryRepeater$ctl04$AssetCategorySelector&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">T-Shirts</a>
</div>
<div id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl05_AssetCategorySelectorPanel" class="AssetsMenuItem">
<a id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl05_AssetCategorySelector" class="AssetsMenuButton" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$rbxUserAssetsPane$AssetCategoryRepeater$ctl05$AssetCategorySelector&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">Shirts</a>
</div>
<div id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl06_AssetCategorySelectorPanel" class="AssetsMenuItem">
<a id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl06_AssetCategorySelector" class="AssetsMenuButton" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$rbxUserAssetsPane$AssetCategoryRepeater$ctl06$AssetCategorySelector&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">Pants</a>
</div>
<div id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl07_AssetCategorySelectorPanel" class="AssetsMenuItem">
<a id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl07_AssetCategorySelector" class="AssetsMenuButton" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$rbxUserAssetsPane$AssetCategoryRepeater$ctl07$AssetCategorySelector&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">Decals</a>
</div>
<div id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl08_AssetCategorySelectorPanel" class="AssetsMenuItem">
<a id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl08_AssetCategorySelector" class="AssetsMenuButton" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$rbxUserAssetsPane$AssetCategoryRepeater$ctl08$AssetCategorySelector&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">Models</a>
</div>
<div id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl09_AssetCategorySelectorPanel" class="AssetsMenuItem">
<a id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl09_AssetCategorySelector" class="AssetsMenuButton" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$rbxUserAssetsPane$AssetCategoryRepeater$ctl09$AssetCategorySelector&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">Places</a>
</div>
<div id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl10_AssetCategorySelectorPanel" class="AssetsMenuItem">
<a id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl10_AssetCategorySelector" class="AssetsMenuButton" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$rbxUserAssetsPane$AssetCategoryRepeater$ctl10$AssetCategorySelector&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">Badges</a>
</div>
<div id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl11_AssetCategorySelectorPanel" class="AssetsMenuItem">
<a id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl11_AssetCategorySelector" class="AssetsMenuButton" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$rbxUserAssetsPane$AssetCategoryRepeater$ctl11$AssetCategorySelector&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">Left Arms</a>
</div>
<div id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl12_AssetCategorySelectorPanel" class="AssetsMenuItem">
<a id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl12_AssetCategorySelector" class="AssetsMenuButton" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$rbxUserAssetsPane$AssetCategoryRepeater$ctl12$AssetCategorySelector&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">Right Arms</a>
</div>
<div id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl13_AssetCategorySelectorPanel" class="AssetsMenuItem">
<a id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl13_AssetCategorySelector" class="AssetsMenuButton" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$rbxUserAssetsPane$AssetCategoryRepeater$ctl13$AssetCategorySelector&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">Left Legs</a>
</div>
<div id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl14_AssetCategorySelectorPanel" class="AssetsMenuItem">
<a id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl14_AssetCategorySelector" class="AssetsMenuButton" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$rbxUserAssetsPane$AssetCategoryRepeater$ctl14$AssetCategorySelector&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">Right Legs</a>
</div>
<div id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl15_AssetCategorySelectorPanel" class="AssetsMenuItem">
<a id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl15_AssetCategorySelector" class="AssetsMenuButton" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$rbxUserAssetsPane$AssetCategoryRepeater$ctl15$AssetCategorySelector&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">Torsos</a>
</div>
<div id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl16_AssetCategorySelectorPanel" class="AssetsMenuItem">
<a id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl16_AssetCategorySelector" class="AssetsMenuButton" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$rbxUserAssetsPane$AssetCategoryRepeater$ctl16$AssetCategorySelector&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">Packages</a>
</div>
</div>
<div id="AssetsContent">
<table id="ctl00_cphRoblox_rbxUserAssetsPane_UserAssetsDataList" cellspacing="0" border="0" style="border-collapse:collapse;">
<tbody><tr>
<td class="Asset" valign="top">
<div style="padding: 5px">

<div class="AssetThumbnail">
<a id="ctl00_cphRoblox_rbxUserAssetsPane_UserAssetsDataList_ctl00_AssetThumbnailHyperLink" title="Helmet For Retards" href="/Item?id=2" style="display:inline-block;height:110px;width:110px;cursor:pointer;"><img src="https://web.archive.org/web/20121102184652im_/http://t1ak.roblox.com/db5574f48c64431ca5e2e063a0cdddc3" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Test" blankurl="http://t6ak.roblox.com/blank-110x110.gif"></a>
</div>
<div class="AssetDetails">
<div class="AssetName">
<a id="ctl00_cphRoblox_rbxUserAssetsPane_UserAssetsDataList_ctl00_AssetNameHyperLink" href="/Item?id=2"> Helmet For Retards</a></div>
<div class="AssetCreator">
<span class="Label">Creator:</span> <span class="Detail">
<a id="ctl00_cphRoblox_rbxUserAssetsPane_UserAssetsDataList_ctl00_AssetCreatorHyperLink" href="/user?id=2">ROAR</a></span></div>
</div>
</div>
</td>
</tr>
</tbody></table>
<div id="ctl00_cphRoblox_rbxUserAssetsPane_FooterPagerPanel" class="FooterPager">
<span id="ctl00_cphRoblox_rbxUserAssetsPane_FooterPagerLabel">Page 1 of 1</span>
</div>
<div>
<div class="StandardTabWhite"><span>Recommendations</span></div>
<div class="StandardBoxWhite">
<div style="font-size: x-small;">Here are some other Hats that we think you might like.</div>
<table id="ctl00_cphRoblox_rbxUserAssetsPane_AssetRec_dlAssets" cellspacing="0" align="Center" border="0" style="height:200px;width:100px;border-collapse:collapse;">
<tbody><tr>
<td>
</td><td>
<div class="PortraitDiv" style="width: 140px; height: 190px; overflow: hidden;" visible="True">
<div class="AssetThumbnail">
<a id="ctl00_cphRoblox_rbxUserAssetsPane_AssetRec_dlAssets_ctl05_AssetThumbnailHyperLink" title=" Elf" href="#" style="display:inline-block;height:110px;width:110px;cursor:pointer;"><img src="https://rccservice.xyz/spunk.MP4" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt=" Elf" blankurl="http://t6ak.roblox.com/blank-110x110.gif"></a>
</div>
<div class="AssetDetails" style="height:90px;">
<div class="AssetName">
<a id="ctl00_cphRoblox_rbxUserAssetsPane_AssetRec_dlAssets_ctl05_AssetNameHyperLinkPortrait" href="/Catalog/Item.php?id=1">Elf Shit</a>
</div>
<div class="AssetCreator">
<span class="Label">Creator:</span> <span class="Detail"><a id="ctl00_cphRoblox_rbxUserAssetsPane_AssetRec_dlAssets_ctl05_CreatorHyperLinkPortrait" href="/user?id=2">Stuff</a></span>
</div>
 </div>
</div>
</td>
</tr>
</tbody></table>
</div>
</div>
</div>
<div style="clear: both;">
</div>
</div>
<div id="ctl00_cphRoblox_rbxUserAssetsPane_CreateSetPanelDiv" class="createSetPanelPopup" style="width: 400px; height: 100%; padding: 0px; float: left; display: none">
</div>
</div>
</div>
</div>
      
    

    
<?php
  }
  echo "</table>";
} else {
  echo "No users found with this ID.";
}
?>
          
          