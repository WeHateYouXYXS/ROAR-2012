<?php include 'header.php'?>
 <div id="SiteWideHeaderLogin">
    <div id="HeaderLoginButton" class="iFrameLoginSignUp">
    <a id="HeaderSignUp" href="Login/NewAge.html">Sign Up</a>
    <span id="HeaderOr">or</span>
        <span id="loginSpan">
      <a id="headerLogin"></a>
        </span>
    <div id="iFrameLogin" style="display:none">
    <iframe class="loginFrame" src="Default/" scrolling="no" frameborder="0"></iframe>
  </div>
   </div>
  </div>  
    </div>
</div>
        </div>
        <div class="forceSpace" style="width: 100%;height: 47px;padding-top: 0px;">&nbsp;</div>
    <div id="ctl00_cphBannerAd_topAdPanel">
</div>
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
        <!-- Enter key submission hack - IE -->
        <div class="TextInputLogin UsernameRowLogin">
            <label for="txtUsername" class="DGB_Label">Username:</label>
                <input type="text" class="DGB_TextBox" id="txtUsername" tabindex="1"/>
        </div>
        <div class="TextInputLogin">
            <label for="txtPassword" class="DGB_Label passwordInput">Password:</label>
            <input type="password" onkeypress="if (event.which || event.keyCode){if ((event.which == 13) || (event.keyCode == 13)) {dologin(); return false;} else {return true;}}" id="txtPassword" class="DGB_TextBox" tabindex="2"/>
        </div>
        <span id="ForgetPasswordPrompt"><a href="Login/ResetPasswordRequest.html">Forget your password?</a></span>
        <div style="margin-top: 9px; text-align: center;">
            <a class="ControlLoginButton" onclick="dologin(); return false;" href="#" ref="form-login" tabindex="3">Sign In</a>
        </div>       
    </div>
</div>
</div>
            <div id="ctl00_cphRoblox_SeparateSignup" class="separateSignUpFromLoginWithBorder">
<script type="text/javascript">
    var appid = '190191627665278';
    window.fbAsyncInit = function () {
        FB.init({
            appId: appid,
            status: true,
            cookie: true,
            oauth: true,
            channelUrl  : 'http://' + window.location.host + 'fbChannel.html'
        });
        // fetch the status on load
        FB.getLoginStatus(handleSessionResponse);
        $('#fconnectlogin').bind('click', function () {
            FB.login(login, { scope: 'email, user_birthday, publish_stream' });
        });
        $('#fconnectlogout').live('click', function () {
            FB.logout(handleSessionResponse);
        });
        $('#disconnect').bind('click', function () {
            FB.api({ method: 'Auth.revokeAuthorization' }, function (response) {
                clearDisplay();
            });
        });
        $('#facebookdisconnect').bind('click', function () {
            FB.api({ method: 'Auth.revokeAuthorization' }, function (response) {
                clearDisplay();
            });
        });
    };
    (function () {
        var e = document.createElement('script'); 
        e.async = true;
        e.src = document.location.protocol + 'http://connect.facebook.net/en_US/all.js';
        document.getElementById('fb-root').appendChild(e);
    } ());
    function getFacebookUser(callback, desiredData)
    {
        var desiredDataString = desiredData.join(',');
        FB.api(
            {
                method: 'fql.query',
                query: 'SELECT '+ desiredDataString + ' FROM user WHERE uid= me()'
            },
            function (response) 
            {
                var user = response[0];
                callback(user);
            }
        );
    }   
    function login(response) {
      // if we dont have a session, just hide the user info
      if (!response.authResponse) {
        clearDisplay();
        return;
      }
      //We have the session.
      //Check for existing SNU.
      var onSuccess = function(result, context) {
        if (result === "") {
          //Just redirect the parent to Login/Default.aspx page to handle Facebook Sync
          var parentUrl = $(document.body).data("parent-url");
          if (typeof parentUrl !== 'undefined') {
            getFacebookUser(function(user) {
              var msg = "fbRegister^" + user.name + "^" + user.email + "^" + user.birthday_date;
              $.postMessage(msg, parentUrl, parent);
            }, ['name', 'email', 'birthday_date']);
          } else
            getFacebookUser(function(user) { FBConnectNewCharacterModal.open(user.name, user.email, user.birthday_date); }, ['name', 'email', 'birthday_date']);
        } else {
          //Drop cookie
          document.getElementById("SNAccessToken").value = FBaccessToken;
          document.getElementById("FacebookAssociation").value = "true";
          if (document.forms.length == 1) {
            $('#FacebookLoginForm')[0].submit();
          } else {
            document.forms[1].submit();
          }
        }
      };
      var onError = function(result, context) {
      };
        var FBaccessToken = FB.getAccessToken()
           var FBuserId = FB.getUserID();
            Roblox.Website.Services.UserCheck.GetSocialNetworkUserNameBySocialNetworkId(1, FBaccessToken, FBuserId, onSuccess, onError);
    }
    // no user, clear display
    function clearDisplay() {
        $('#facepile').fadeOut(1000);
    }
    // handle a session response from any of the auth related calls
    function handleSessionResponse(response) {
        // if we dont have a session, just hide the user info
        if (!response.authResponse) {
            clearDisplay();
            return;
        }
    }
</script>
<div id="ctl00_cphRoblox_rbxFacebookLogin_SplashPageConnect" class="fbSplashPageConnect">
        <a id="fconnectlogin" class="fbLoginButton" href="#" ref="form-facebook"></a>       
    </div>
<style type="text/css">
    .show { display:inline; }
    .hide { display: none; }
    .left {margin-left:150px;}
</style>
<div id="FBConnectNewCharacterModal" class="GuestModePromptModal" style="width:450px; display:none">
    <div class="simplemodal-close">
        <a class="ImageButton closeBtnCircle_35h" style="cursor: pointer; margin-left:445px; position:absolute; top:-20px; left:-10px"></a>
    </div>
    <div id="GuestDialog" style="background-color: white;">
        <div style="height:20px;"></div>
        <div id="Greeting" style="font-size:large; text-align:center;"> Welcome </div>
        <div style="height:20px;"></div>
        <div class="NewToRobloxDiv" style="display:none;"> </div>
        <div class="ExistingRobloxianDiv" style="display:none;"> </div>
        <div style="height:20px;"></div>
    </div>
    <input name="ctl00$cphRoblox$rbxFacebookLoginNewCharacter$fbmail" type="hidden" id="ctl00_cphRoblox_rbxFacebookLoginNewCharacter_fbmail"/> 
  <input name="ctl00$cphRoblox$rbxFacebookLoginNewCharacter$fbDateOfBirth" type="hidden" id="ctl00_cphRoblox_rbxFacebookLoginNewCharacter_fbDateOfBirth"/>
</div>
<div id="NewSignUp" class="hide">
    <div style="height:10px"></div>        
    <div style="font-size:medium; text-align:center; font-weight:bold">Please make up a name for your character on ROBLOX.</div>
        <div id="ctl00_cphRoblox_rbxFacebookLoginNewCharacter_upNameAndPass">
                <div class="Validators" style="text-align:center;">
                    <div>
                    </div>
                  <div>
                    </div>
                    <div>
                    </div>
                    <div>
                    </div>
                    <div>
                    </div>
                    <div>
                    </div>
                    <div>
                        <span id="ctl00_cphRoblox_rbxFacebookLoginNewCharacter_Exception" style="color:Red;visibility:hidden;">ROBLOX service is experiencing some difficulties at this time. Please try to Play as Guest instead.</span>
                        <img id="ctl00_cphRoblox_rbxFacebookLoginNewCharacter_Spinner" src="images/ProgressIndicator3.gif" alt="Progress" src="http://www.roblox.com/" style="border-width:0px;display:none"/>
                  </div>
                </div>
            <div class="left">
                <input name="ctl00$cphRoblox$rbxFacebookLoginNewCharacter$NewFBUserName" type="text" id="ctl00_cphRoblox_rbxFacebookLoginNewCharacter_NewFBUserName"/>
                <div style="height:20px;"></div>
                <div style="text-align:center; margin-left:-150px">
            <div id="fbBirthday" style="font-size:medium; text-align:center; font-weight:bold;margin-right:5px"></div>
                    <div style="height:10px;"></div>
          <div id="gender" style="font-size:medium; text-align:center; font-weight:bold;margin-right:5px">
            Gender: 
            <select name="ctl00$cphRoblox$rbxFacebookLoginNewCharacter$fbGenderDropDown" id="fbGenderDropDown">
    <option selected="selected" value="0">Male</option>
    <option value="1">Female</option>
  </select>
          </div>
            <center>
          <br/>
                <i>Your information will not be given out to any third party.</i>
                </center>
                <br/>
                </div>
                <div style="height:5px;"></div>
                <div style="margin:15px auto;width:442px;margin-left:-150px;">
                </div>
                <div style="margin-left:30px;">
                    <a onclick="ShowSpinner();" id="ctl00_cphRoblox_rbxFacebookLoginNewCharacter_ButtonCreateAccount" tabindex="8" class="GreenButton" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$rbxFacebookLoginNewCharacter$ButtonCreateAccount&quot;, &quot;&quot;, true, &quot;NewFBUserGroup&quot;, &quot;&quot;, false, true))">
                        <span>Sign Up!</span>
                    </a>
                </div>
            </div>
</div>
        <div style="height:20px;"></div>
        <div style="font-size:medium; text-align:center; cursor:pointer">
            <a class="ExistingRobloxian" style="color:green; font-weight:bold">
                Have an Account ?
            </a>
        </div>
</div>
<div id="SyncUp" class="hide">
    <div style="height:10px"></div>
    <div style="font-size:medium; text-align:center;"><b>Sync Up your Facebook account with current ROBLOX Account.</b></div>
    <p style="color:red; text-align:center">If you have multiple accounts, please sync your primary account with your Facebook. </p>
    <div style="height:10px"></div>
        <div id="LoginViewContainer" style="margin-left:150px;">
                   <div class="DarkGradientBox" style="text-align: center;">
                       <div class="DGB_Content">
                            <!-- Enter key submission hack - IE -->
                            <div style="padding-top: 4px; padding-bottom: 4px;">
                                <div style="margin-bottom: 7px;">
                                </div>
                                <label for="rbxUsername" class="DGB_Label"> ROBLOX Username:</label>
                                <input type="text" class="DGB_TextBox" id="rbxUsernameInput" tabindex="3"/>
                            </div>
                            <div style="padding-top: 4px; padding-bottom: 4px;">
                                <div style="margin-bottom: 7px;">
                                </div>
                                <label for="rbxPassword" class="DGB_Label"> ROBLOX Password:</label>
                                <input type="password" onkeypress="if (event.which || event.keyCode){if ((event.which == 13) || (event.keyCode == 13)) {dologin(); return false;} else {return true;}}" id="rbxPasswordInput" class="DGB_TextBox" tabindex="4"/>
                            </div>
                            <div style="height:15px;"></div>
                            <a class="GreenButton" style="width: 75%" onclick="SyncUp()">
                            <span>Sync Up!</span>
                            </a>
                            <div style="margin-top: 8px; margin-bottom: 7px; text-align: center; white-space: nowrap;">
                                <a href="Login/ResetPasswordRequest.html" id="ctl00_cphRoblox_rbxFacebookLoginNewCharacter_lvLoginView_hlPasswordRecovery" style="color: #FFFFFF; font-weight: bold; font-size: 10px;" tabindex="7" target="_parent">
                                    Forgot your password?</a>
                            </div>
                         </div>
                    </div>
            <div style="height:5px"></div>
            <a class="NewToRoblox" style="color:green; font-weight:bold; font-size:medium; text-align:center; cursor:pointer; margin-left:20px;">
                New To Roblox ?
            </a>
        </div>
</div>
<script type="text/javascript">
    function ShowSpinner() {
        if (!Page_IsValid) { return false; }
        var spinnerId = 'ctl00_cphRoblox_rbxFacebookLoginNewCharacter_Spinner';
        var spinnerDom = document.getElementById(spinnerId);
        if (spinnerDom) {
            spinnerDom.style.display = 'block';
        }
    }
    $(function () { $('.NewToRoblox:first').click(); });
    function SyncUp() {
        document.getElementById("username").value = document.getElementById("rbxUsernameInput").value;
        document.getElementById("password").value = document.getElementById("rbxPasswordInput").value;
        document.getElementById("IsSyncUp").value = "true";
        document.forms[1].submit();
    }
    var FBConnectNewCharacterModal = {};
    FBConnectNewCharacterModal.open = function (fbUserName, fbMail, fbDob) {
      if (Page_Validators.length > 0) {
        for (i = 0; i < Page_Validators.length; i++) {
          if (Page_Validators[i].validationGroup == "NewFBUserGroup") {
            ValidatorEnable(Page_Validators[i], true);
          }
        }
      }
      $('#Greeting').html("<b> Hi </b><i style='color:#488AC7'>" + fbUserName + "</i>");
      $('#fbBirthday').text("Date of birth:" + fbDob);
      var modalProperties = { escClose: true, opacity: 80, overlayCss: { backgroundColor: "#000" }, position: [100, 0] };
      $("#FBConnectNewCharacterModal").modal(modalProperties);
      $("#FBConnectNewCharacterModal").parent().parent().appendTo($("form:first"));
      var hiddenMail = 'ctl00_cphRoblox_rbxFacebookLoginNewCharacter_fbmail';
      document.getElementById(hiddenMail).value = fbMail;
      var dateOfBirth = 'ctl00_cphRoblox_rbxFacebookLoginNewCharacter_fbDateOfBirth';
      document.getElementById(dateOfBirth).value = fbDob;
    }
    var newSignUp;
    var userLogin;
    var newMemberhipOpen;
    var loginOpen;
    $('.NewToRoblox').click(function () {
        if (loginOpen && loginOpen == true) {
            userLogin = $('#SyncUp').detach();
            loginOpen = false;
        }
        newMemberhipOpen = true;
        if (newSignUp) {
            newSignUp.insertAfter($('.NewToRobloxDiv'));
        }
        else {
            $('#NewSignUp').removeClass("hide");
            $('#NewSignUp').addClass("show");
            $('#NewSignUp').insertAfter($('.NewToRobloxDiv'));
        }
    });
    $('.ExistingRobloxian').click(function () {
        if (newMemberhipOpen && newMemberhipOpen == true) {
            newSignUp = $('#NewSignUp').detach();
            newMemberhipOpen = false;
        }
        loginOpen = true;
        if (userLogin) {
            userLogin.insertAfter($('.ExistingRobloxianDiv'));
        }
        else {
            $('#SyncUp').removeClass("hide");
            $('#SyncUp').addClass("show");
            $('#SyncUp').insertAfter($('.ExistingRobloxianDiv'));
        }
   });
</script>
                <div class="CenterSignupText">
                    <span style="float: left;padding-top: 8px;padding-right: 5px;">Not a member?</span>
                    <a href="Login/NewAge.html" class="SignupButtonImage"></a>
                </div>
            </div> 
        </div>
        <div class="FrontPageVideoIntro">
                    <object class="videoURL">
                        <param name="movie" value="http://www.youtube.com/v/97dyt7MXWpo&amp;fs=1&amp;rel=0"/>
                        <param name="allowFullScreen" value="true"/>
                        <param name="allowscriptaccess" value="always"/>
                        <param name="wmode" value="transparent"/>
                        <embed wmode="transparent" src="http://www.youtube.com/v/97dyt7MXWpo&amp;fs=1&amp;rel=0&amp;autoplay=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" allownetworking="internal" width="380" height="250"></embed>
                    </object>
            </div>
            <div style="float:right">
        <div id="FeaturedGameButtonContainer" style="height:1px;">
            <div id="ctl00_cphRoblox_rbxVisitButtons_FeaturedGameButton" class="FeaturedGameButton VisitButtonPlay" ref="bigplaynow" placeid="41324860"></div>
          
          
          
          
          
          
          <?php
    $conn = mysqli_connect("mysql.ct8.pl", "m26459_users", "K7(5hxP5A$2F#qu@wiyC","m26459_users");
    if ($conn-> connect_error) {
      die("Connection failed:". $conn-> connect_error);
    }?>
          <?php

    $resultsperpage = 100;

            $sql = "SELECT count(*) FROM `feed`";
            $result = $db->prepare($sql);
            $result->execute();
            $usercount = $result->fetchColumn();

            $numberofpages = ceil($usercount/$resultsperpage);

            if($page < 1) $page = 1;
            $thispagefirstresult = ($page-1)*$resultsperpage;          
          ?>
        </div>