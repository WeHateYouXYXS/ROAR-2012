<?php include 'header.php' ?>
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
        $sql = "SELECT id, username, password, tix, robux, description, admin, status FROM users WHERE username = ?";
        
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
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password, $tix, $robux, $description, $admin, $status);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            $_SESSION["tix"] = $tix;
                            $_SESSION["robux"] = $robux;
                            $_SESSION["description"] = $description;
                            $_SESSION["admin"] = $admin;
                            $_SESSION["status"] = $status;
                          
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
<?php
// Count how many people visited site
$handle = fopen("counter.txt", "r");
if(!$handle) {
    echo "could not open the file";
} else {
    $counter =(int )fread($handle,20);
        fclose($handle);
        $counter++;
    $handle = fopen("counter.txt", "w" );
    
    fwrite($handle,$counter);
    fclose ($handle);
}
?>


        <noscript><div class="SystemAlert"><div class="SystemAlertText">Please enable Javascript to use all the features on this site.</div></div></noscript>
        </asp:contentplaceholder>
        <div id="BodyWrapper">
            <div id="RepositionBody"><div id="Body" style="width:970px;">
    <script type="text/javascript">
        //Code for A|B|C test- just one/all goto burning ma
            switch (0) {
                case 0:
                    break;
                case 1:
                    $("#PlayNowButton").css('visibility', 'hidden');
                    $(function () {
                        $('.FeaturedGameHeader').css('visibility', 'hidden');
                        $('.FeaturedGameHeader').css('height', '0px');
                        $('.FeaturedGamePlayButton').css('height', '290px');
                    });
                    break;
                case 2:
                    $('.SignUpAndPlay').attr('href', "");
                    $('.SignUpAndPlay').click(function () {
                        $('.VisitButtonPlay').click();
                        return false;
                    });
                    $(function () {
                        $('#ctl00_cphRoblox_MoneyMachine_PlayNowButton').attr('href', "");
                        $('#ctl00_cphRoblox_MoneyMachine_PlayNowButton').click(function () {
                            $('.VisitButtonPlay').click();
                            return false;
                        });
                    });
                    //set href of FeaturedGamesPlay to "burning man"s
                    break;
            }
            //Code for bigPlayNowButtonLocation A|B test
            if(false){
                $(function () {
                $('#ctl00_cphRoblox_rbxVisitButtons_FeaturedGameButton').attr('placeid', 1818);
                });
            }
            //else is already acting as needed
        </script>
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
    <div class="DGB_Header">Member Login</div>
    <div class="DGB_Content">
<?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="was-validated">
    <div class="form-group">
      <label for="uname">Username</label>
      <input type="text" name="username" class="DGB_TextBox" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>" required>
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
      <div class="valid-feedback"> </div>
      <div class="invalid-feedback"> </div>
    </div>
    <div class="form-group">
      <label for="pwd">Password</label>
      <input type="password" name="password" class="DGB_TextBox" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" required>
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
      <div class="valid-feedback"> </div>
      <div class="invalid-feedback"> </div>
    </div>
      <div style="margin-top: 9px; text-align: center;">
<input type="submit" class="ControlLoginButton" value="Sign In">
        <a class="ControlLoginButton" onclick="dologin(); return false;" href="#" ref="form-login" tabindex="3">Sign In</a>

        </div>
  </form>
</div>
</div>
  <div id="ctl00_cphRoblox_SeparateSignup" class="separateSignUpFromLoginWithBorder">
    <div class="CenterSignupText">
                   <div class="CenterSignupText">
                     <span style="font-family:arial;font-size:11px;">Not a member?</span>
                    <a href="register.php" class="SignupButtonImage"></a>
                </div>
            </div> 
        </div>       
    </div>
    </div> 
          <div class="FrontPageVideoIntro">
               
                    <object class="videoURL">
                        <param name="movie" value="http://www.youtube.com/v/97dyt7MXWpo&amp;fs=1&amp;rel=0">
                        <param name="allowFullScreen" value="true">
                        <param name="allowscriptaccess" value="always">
                          <param name="wmode" value="transparent">
                        <embed wmode="transparent" src="https://web.archive.org/web/20120601002407oe_/http://www.youtube.com/v/97dyt7MXWpo&amp;fs=1&amp;rel=0&amp;autoplay=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" allownetworking="internal" width="380" height="250">
                        </object>
                         </div>
                          
            <div style="float:right">
        <div id="FeaturedGameButtonContainer" style="height:1px;">
            <div id="ctl00_cphRoblox_rbxVisitButtons_FeaturedGameButton" class="FeaturedGameButton VisitButtonPlay" ref="bigplaynow" placeid="41324860"></div>
        </div>
              </div>

<script type="text/javascript">
         //Code for A|B|C test- just one/all goto burning ma
             switch (0) {
                 case 0:
                     break;
                 case 1:
                     $("#PlayNowButton").css('visibility', 'hidden');
                     $(function () {
                         $('.FeaturedGameHeader').css('visibility', 'hidden');
                         $('.FeaturedGameHeader').css('height', '0px');
                         $('.FeaturedGamePlayButton').css('height', '290px');
                     });
                     break;
                 case 2:
                     $('.SignUpAndPlay').attr('href', "");
                     $('.SignUpAndPlay').click(function () {
                         $('.VisitButtonPlay').click();
                         return false;
                     });
                     $(function () {
                         $('#ctl00_cphRoblox_MoneyMachine_PlayNowButton').attr('href', "");
                         $('#ctl00_cphRoblox_MoneyMachine_PlayNowButton').click(function () {
                             $('.VisitButtonPlay').click();
                             return false;
                         });
                     });

                     //set href of FeaturedGamesPlay to "burning man"s
                     break;
             }
             //Code for bigPlayNowButtonLocation A|B test
             if(false){
                 $(function () {
                    $('#ctl00_cphRoblox_rbxVisitButtons_FeaturedGameButton').attr('placeid', 1818);
                  });
             }
                //else is already acting as needed
         </script>
         

        

    <script type="text/javascript">
        var play_placeId = 41324860;
        function redirectPlaceLauncherToLogin() {
            location.href = "/login/default.aspx?ReturnUrl=" + encodeURIComponent("/Default.aspx");
        }
        function redirectPlaceLauncherToRegister() {
            location.href = "/login/NewAge.aspx?ReturnUrl=" + encodeURIComponent("/Default.aspx");
        }
        function fireEventAction(action) {
            RobloxEventManager.triggerEvent('rbx_evt_popup_action', { action: action });
        }
        $(function() {
            if (Roblox.Client.isIDE()) {
                $('.VisitButtonEdit').show();
              $('#LearnMoreStudio2').show();
              //Center the link if the build and edit are missing.
              if($('.VisitButtonBuild').length == 0 && $('.VisitButtonEdit').length == 0 ) {
                $('#LearnMoreStudio2').css({'width':'inherit','float':'left'});
              }
            }
        });
    </script>
    

<div id="BCOnlyModal" class="modalPopup unifiedModal smallModal" style="display:none;">
   <div style="margin:4px 0px;">
        <span>Builders Club Only</span>
    </div>
    <div class="simplemodal-close">
        <a class="ImageButton closeBtnCircle_20h" style="margin-left:400px;"></a>
    </div>
    <div class="unifiedModalContent" style="padding-top:5px; margin-bottom: 3px; margin-left: 3px; margin-right: 3px">
        <div class="ImageContainer">
            <img class="GenericModalImage BCModalImage" alt="Builder's Club" src="https://web.archive.org/web/20120921193359im_/http://imagesak.roblox.com/ae345c0d59b00329758518edc104d573.png">
            <div id="BCMessageDiv" class="BCMessage Message">
                Builders Club membership is required to play in this place.
            </div>
        </div>
        <div style="clear:both;"></div>
        <div style="clear:both;"></div>
        <div class="GenericModalButtonContainer" style="padding-bottom: 13px">
            <div class="ButtonUpgradeNow">
                <a id="BClink" href="/web/20120921193359/http://www.roblox.com/Upgrades/BuildersClubMemberships.aspx" style="display:block; height:50px; width:173px;"></a>
            </div>
            <div style="clear:both;"></div>
        </div>
        <div style="clear:both;"></div>
    </div>
</div>

<script type="text/javascript">
    function showBCOnlyModal(modalId) {
        var modalProperties = { overlayClose: true, escClose: true, opacity: 80, overlayCss: { backgroundColor: "#000" } };
        if (typeof modalId === "undefined")
            $("#BCOnlyModal").modal(modalProperties);
        else
            $("#" + modalId).modal(modalProperties);
    }
    $(document).ready(function () {
        $('#VOID').click(function () {
            showBCOnlyModal("BCOnlyModal");
            return false;
        });
    });
</script>
 

<div class="GenericModal modalPopup unifiedModal smallModal" style="display:none;">
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div>
            <div class="ImageContainer">
                <img class="GenericModalImage" alt="generic image">
            </div>
            <div class="Message"></div>
        </div>
        <div class="clear"></div>
        <div class="GenericModalButtonContainer">
        <a class="ImageButton btn-ok"></a>
        </div>  
    </div>
</div>




            </div>

        

    <script type="text/javascript">
        var play_placeId = 41324860;
        function redirectPlaceLauncherToLogin() {
            location.href = "/login/default.aspx?ReturnUrl=" + encodeURIComponent("/Default.aspx");
        }
        function redirectPlaceLauncherToRegister() {
            location.href = "/login/NewAge.aspx?ReturnUrl=" + encodeURIComponent("/Default.aspx");
        }
        function fireEventAction(action) {
            RobloxEventManager.triggerEvent('rbx_evt_popup_action', { action: action });
        }
        $(function() {
            if (Roblox.Client.isIDE()) {
                $('.VisitButtonEdit').show();
            }
        });
    </script>
    

<div id="BCOnlyModal" style="width:470px;padding:10px;background:white;display:none;*position:absolute;*top:-150px">
   <div class="simplemodal-close">
        <a class="ImageButton closeBtnCircle_35h" style="cursor: pointer;position:absolute; top:-15px; right:-15px"></a>
    </div>
    <div>
        <div style="margin-bottom:15px;font-size:16px">
            <div style="float:left;width:150px">
                <img src="https://web.archive.org/web/20120601002407im_/http://imagesak.roblox.com/4f47987bd9f079251ce881d4e242aee2.png">
            </div>
            <div style="float:left;width:295px;margin-left:5px">
                <div style="font-size: 18px; font-weight: bold; padding:30px 0 10px;">
                    You need Builders Club for this!
                </div>
                <div>
                    Builders Club membership is required to play in this place.
                </div>
            </div>
            <div style="clear:both; text-align:center;">
                <a class="GreenButton" href="/web/20120601002407/http://www.roblox.com/Upgrades/BuildersClubMemberships.aspx"><span>Upgrade Now</span></a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function showBCOnlyModal(modalId) {
        var modalProperties = { overlayClose: true, escClose: true, opacity: 80, overlayCss: { backgroundColor: "#000"} };
        if (typeof modalId === "undefined")
            $("#BCOnlyModal").modal(modalProperties);
        else
            $("#" + modalId).modal(modalProperties);
    }
    $(document).ready(function () {
        $('#VOID').click(function () {
            showBCOnlyModal("BCOnlyModal");
            return false;
        });
    });
</script>


            </div>
<div id="Footer">
    <div class="FooterNav">
        <a id="ctl00_cphFooter_rbxFooter_PrivacyHyperLink" ref="footer-privacy" href="/web/20120511022120/http://www.roblox.com/info/Privacy.aspx"><b>Privacy Policy</b></a>
         |  
        <a id="ctl00_cphFooter_rbxFooter_AdvertiseHyperLink" ref="footer-advertise" href="https://web.archive.org/web/20120511022120/http://corp.roblox.com/advertise-on-roblox">Advertise with Us</a>
         |  
        <a id="ctl00_cphFooter_rbxFooter_PressHyperLink" ref="footer-press" href="https://web.archive.org/web/20120511022120/http://corp.roblox.com/roblox-press">Press</a>
         |  
        <a id="ctl00_cphFooter_rbxFooter_ContactHyperLink" ref="footer-contact" href="https://web.archive.org/web/20120511022120/http://corp.roblox.com/contact-us">Contact Us</a>
         | 
        <a id="ctl00_cphFooter_rbxFooter_AboutHyperLink" ref="footer-about" href="https://web.archive.org/web/20120511022120/http://corp.roblox.com/">About Us</a>
         | 
        <a id="ctl00_cphFooter_rbxFooter_BlogHyperLink" ref="footer-blog" href="https://web.archive.org/web/20120511022120/http://blog.roblox.com/">Blog</a>
         | 
        <a id="ctl00_cphFooter_rbxFooter_JobsHyperLink" ref="footer-jobs" href="https://web.archive.org/web/20120511022120/http://corp.roblox.com/jobs">Jobs</a>
         | 
        <a id="ctl00_cphFooter_rbxFooter_ParentsHyperLink" ref="footer-parents" href="/web/20120511022120/http://www.roblox.com/Parents.aspx">Parents</a>
    </div>
    <div class="FooterNav">
        <div id="ctl00_cphFooter_rbxFooter_SEOGenreLinks" class="SEOGenreLinks"><a href="/web/20120511022120/http://www.roblox.com/FreeGames.aspx" ref="footer-games">Free Games</a> | <a href="/web/20120511022120/http://www.roblox.com/all-games" title="All Games" ref="footer-genres">All</a> | <a href="/web/20120511022120/http://www.roblox.com/gametutorials-games" title="Tutorial Games" ref="footer-tutorial">Tutorial</a> | <a href="/web/20120511022120/http://www.roblox.com/scary-games" title="Scary Games" ref="footer-genres">Scary</a> | <a href="/web/20120511022120/http://www.roblox.com/town-and-city-games" title="Town and City Games" ref="footer-genres">Town and City</a> | <a href="/web/20120511022120/http://www.roblox.com/war-games" title="War Games" ref="footer-genres">War</a> | <a href="/web/20120511022120/http://www.roblox.com/funny-games" title="Funny Games" ref="footer-genres">Funny</a> | <a href="/web/20120511022120/http://www.roblox.com/medieval-games" title="Fantasy Games" ref="footer-genres">Fantasy</a> | <a href="/web/20120511022120/http://www.roblox.com/adventure-games" title="Adventure Games" ref="footer-genres">Adventure</a> | <a href="/web/20120511022120/http://www.roblox.com/sci-fi-games" title="Sci-Fi Games" ref="footer-genres">Sci-Fi</a> | <a href="/web/20120511022120/http://www.roblox.com/pirate-games" title="Pirate Games" ref="footer-genres">Pirate</a> | <a href="/web/20120511022120/http://www.roblox.com/fps-games" title="FPS Games" ref="footer-genres">FPS</a> | <a href="/web/20120511022120/http://www.roblox.com/rpg-games" title="RPG Games" ref="footer-genres">RPG</a> | <a href="/web/20120511022120/http://www.roblox.com/sports-games" title="Sports Games" ref="footer-genres">Sports</a> | <a href="/web/20120511022120/http://www.roblox.com/ninja-games" title="Ninja Games" ref="footer-genres">Ninja</a> | <a href="/web/20120511022120/http://www.roblox.com/wild-west-cowboy-games" title="Wild West Games" ref="footer-genres">Wild West</a></div>
    </div>
    <div class="legal">
        <div class="left">
            <a href="https://web.archive.org/web/20120511022120/http://www.truste.org/ivalidate.php?url=www.roblox.com&sealid=105" id="ctl00_cphFooter_rbxFooter_TrusteeSeal" ref="parents-truste"><img height="60" src="https://web.archive.org/web/20120511022120im_/http://imagesak.roblox.com/b92246c852ef789ec8edba47fabed179.png" border="0" id="TrusteLogo" alt="Truste"/></a>
            <a target="_blank" href="https://web.archive.org/web/20120511022120/https://www.bbb.org/online/consumer/cks.aspx?id=109111915116750" ref="parents-bbb"><img height="60" title="Click to verify BBB accreditation and to see a BBB report." border="0" src="https://web.archive.org/web/20120511022120im_/http://imagesak.roblox.com/4c792571feaf5ace01d2da52e49e31de.gif" alt="Click to verify BBB accreditation and to see a BBB report."/></a>
        </div>
        <div class="right">
            

<p class="Legalese">
    ROBLOX, "Online Building Toy", characters, logos, names, and all related indicia are trademarks of <a href="https://web.archive.org/web/20120511022120/http://corp.roblox.com/" ref="footer-smallabout">ROBLOX Corporation</a>, ©2012. Patents pending.
    ROBLOX is not sponsored, authorized or endorsed by any producer of plastic building bricks, including The LEGO Group, MEGA Brands, and K'Nex, and no resemblance to the products of these companies is intended. Use of this site signifies your acceptance of the <a href="/web/20120511022120/http://www.roblox.com/info/TermsOfService.aspx" ref="footer-terms">Terms and Conditions</a>.
</p>

        </div>
        <div class="clear"></div>
    </div>
</div>
        
        
    </div>
    <div id="ChatContainer" style="width: 100%">
        
    </div>

    
        
        
        
        <script src="https://web.archive.org/web/20120511022120js_/http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
        <script type="text/javascript">
            _uacct = "UA-486632-1";
            _udn = "roblox.com";
            _uccn = "rbx_campaign";
            _ucmd = "rbx_medium";
            _ucsr = "rbx_source";
            urchinTracker();
            __utmSetVar('Visitor/Spider');
        </script>
    

    

<script type="text/javascript">
//<![CDATA[
$(function() {{ }});$(function() {{ }});if (new Date() > new Date('5/19/2012 5:21:20 AM')){alert('Your system time is incorrect') };$(function() {{ }});$(function() { RobloxEventManager.triggerEvent('rbx_evt_pageview_custom', { page: 'Home Page', userType: 'Guest' }); });$(function() {{ }});if(typeof __utmSetVar !== 'undefined'){ __utmSetVar(''); };(function() {var fn = function() {RobloxLaunch._LaunchGamePage = "/Install/Download.aspx";Sys.Application.remove_load(fn);};Sys.Application.add_load(fn);})();if(typeof __utmSetVar !== 'undefined'){ __utmSetVar('Roblox_Home_Only_Top_728x90'); }$(function () { $('.VisitButtonPlay').click(function () {$(function() { RobloxEventManager.triggerEvent('rbx_evt_generic', { type: 'PlayGameGuestClick'}); });play_placeId=$(this).attr('placeid');Roblox.CharacterSelect.placeid = play_placeId;Roblox.CharacterSelect.show();});$('.FeaturedGameButton').click(function () {$(function() { RobloxEventManager.triggerEvent('rbx_evt_generic', { type: 'PlayGameGuestClick'}); });$(function() { RobloxEventManager.triggerEvent('rbx_evt_generic', { type: 'FeaturedGameButtonClick'}); });});$('.VisitButtonPersonalServer').click(function () {play_placeId=$(this).attr('placeid');Roblox.CharacterSelect.placeid = play_placeId;Roblox.CharacterSelect.show();});$('.VisitButtonSoloPlay').click(function () {RobloxLaunch._GoogleAnalyticsCallback = function() { GoogleAnalyticsEvents.FireEvent(['PlaySolo', 'Guest', '']); }; play_placeId = (typeof $(this).attr('placeid') === 'undefined') ? play_placeId : $(this).attr('placeid'); if (Roblox.Client.WaitForRoblox(function() { window.location = '/Login/Default.aspx?ReturnUrl=http%3a%2f%2fwww.roblox.com%2fDefault.aspx' })) {  } return false;});$('.VisitButtonBuild').click(function () {RobloxLaunch._GoogleAnalyticsCallback = function() { GoogleAnalyticsEvents.FireEvent(['Build', 'Guest', '']); }; play_placeId = (typeof $(this).attr('placeid') === 'undefined') ? play_placeId : $(this).attr('placeid'); if (Roblox.Client.WaitForRoblox(function() { window.location = '/Login/Default.aspx?ReturnUrl=http%3a%2f%2fwww.roblox.com%2fDefault.aspx' })) {  } return false;});$('.VisitButtonEdit').click(function () {RobloxLaunch._GoogleAnalyticsCallback = function() { GoogleAnalyticsEvents.FireEvent(['Edit', 'Guest', '']); }; play_placeId = (typeof $(this).attr('placeid') === 'undefined') ? play_placeId : $(this).attr('placeid'); if (Roblox.Client.WaitForRoblox(function() { window.location = '/Login/Default.aspx?ReturnUrl=http%3a%2f%2fwww.roblox.com%2fDefault.aspx' })) {  } return false;});Roblox.CharacterSelect.robloxLaunchFunction = function (genderTypeID) { if (genderTypeID == 3) { GoogleAnalyticsEvents.FireEvent(['Play', 'Guest', '', 0]);$(function(){ RobloxEventManager.triggerEvent('rbx_evt_play_guest', {age:'Unknown',gender:'Female'});});} else { GoogleAnalyticsEvents.FireEvent(['Play', 'Guest', '', 1]);$(function(){ RobloxEventManager.triggerEvent('rbx_evt_play_guest', {age:'Unknown',gender:'Male'});});}play_placeId = (typeof $(this).attr('placeid') === 'undefined') ? play_placeId : $(this).attr('placeid'); if (Roblox.Client.WaitForRoblox(function() { RobloxLaunch.RequestGame('PlaceLauncherStatusPanel', play_placeId, genderTypeID); })) {  } return false;};});if(typeof __utmSetVar !== 'undefined'){ __utmSetVar('Roblox_Home_Only_Medium_Rectangle_300x250'); }Roblox.Controls.Image.ErrorUrl = "https://web.archive.org/web/20120511022120/http://www.roblox.com/Analytics/BadHtmlImage.ashx";//]]>
</script>
</form>
    
<form id="LoginForm" action="https://web.archive.org/web/20120511022120/https://www.roblox.com/login/dologin.aspx" method="post">
<input type="hidden" id="username" name="username"/>
<input type="hidden" id="password" name="password"/>
<input type="hidden" id="IsSyncUp" name="IsSyncUp"/>
<input type="hidden" id="FacebookAssociation" name="FacebookAssociation"/>
<input type="hidden" id="SNAccessToken" name="SNAccessToken"/>
</form>
<div id="ctl00_ClientSideContent_rbxAdwordsTracker_AdWordConversionTracker">
   <!-- Google Code for General Remarketing Remarketing List --> 
   <script type="text/javascript">
        var google_conversion_id = 1065449093;
        var google_conversion_language = "en";
        var google_conversion_format = "3";
        var google_conversion_color = "666666";
        var google_conversion_label = "A-sJCLfZnQIQhe2F_AM";
        var google_conversion_value = 0; 
    </script> 
    <script type="text/javascript" src="https://web.archive.org/web/20120511022120js_/http://www.googleadservices.com/pagead/conversion.js"> </script> 
    <noscript> 
        <div style="display:inline;"> <img height="1" width="1" style="border-style:none;" alt="" src="https://web.archive.org/web/20120511022120im_/http://www.googleadservices.com/pagead/conversion/1065449093/?label=A-sJCLfZnQIQhe2F_AM&guid=ON&script=0"/> </div> 
    </noscript>
</div>

                

</body>
</html>
