<?php require_once("config.php") ?>
<!DOCTYPE html>
<html lang="en" class="active">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="ZWI0OTg2ZDg2MTliYjBmMzY1NzE2OWVlNjc3ZWQ5OTQ=" />
    <meta name="robots" content="noodp, noydir">
    <meta name="google-site-verification" content="YW87KZKk-q94TWTgngHnf4ej3VUW3mWfFgznDZM_HB4" />
    <meta name="Description" content="Private Server Community." />
    <meta name="Keywords" content="Warmane, WoW, World of Warcraft, Warcraft, Private Server, Private WoW Server, WoW Server, Private WoW Server, wow private server, wow server, wotlk server, cataclysm private server, wow cata server, best free private server, largest private server, wotlk private server, blizzlike server, mists of pandaria, mop, cataclysm, cata, anti-cheat, sentinel anti-cheat, warden" />
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <title>Warmane | Create an Account</title>
    <link rel="stylesheet" href="/themes/warmane/stylesheets/global.css">
    <link rel="stylesheet" href="/themes/warmane/stylesheets/ui.css">
    <link rel="stylesheet" href="/themes/warmane/stylesheets/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/themes/warmane/script/ui.js"></script>
    <script src="/script/jquery.wm-listener.js"></script>
    <script src="/script/warmane.js"></script>
    <script src="/script/jquery.wm.bpopup.js"></script>
    <script src="/script/jquery.wm-contextmenu.js"></script>
    <script src="/script/jquery.cookie.js"></script>
    <script src="//cdn.cavernoftime.com/api/tooltip.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=recaptchaLoaded&render=explicit"></script>

    </head>
<body>
    <noscript>
        <div id="noscript-override">
            <p>This site makes extensive use of JavaScript.</b><br>Please <a href="https://www.google.com/support/adsense/bin/answer.py?answer=12654" target="_blank">enable JavaScript</a> in your browser.</p>
        </div>
    </noscript>
    <div class="navigation-wrapper">
        <a href="/" class="navigation-logo"></a>
        <div class="navigation">
            <ul class="navbits">
                <?php include("template/navbar_header.php"); ?>
            </ul>
        </div>
        <div class="social-buttons">
            <?php include("template/socials.php"); ?>
        </div>
    </div>
    <div id="page-frame">
        <div class="frame-corners tl"></div>
        <div class="frame-corners tr"></div>
        <div class="leftmost-frame"></div>
        <div class="header"></div>
        <div class="center">
            <video style="position:relative;z-index:-999;" width="100%" height="100%" autoplay loop muted>
                <source src="//www.warmane.com/renders/spring.mp4">
                <source src="//www.warmane.com/renders/spring.webm">
            </video>
        </div>
        <div id="wm-theme-navigation"></div>
        <div class="footer"></div>
        <div class="rightmost-frame"></div>
        <div class="frame-corners bl"></div>
        <div class="frame-corners br"></div>
    </div>
    <div id="page-content-wrapper">
        <div id="wm-ui-flash-message"></div>
        <div class="frame-corners tl"></div>
        <div class="frame-corners tr"></div>
        <div class="header"></div>
        <div class="center">
            <div id="page-content">
                

<div id="page-navigation" class="wm-ui-generic-frame wm-ui-bottom-border">
	<ul>
    	    		<li><a href="/account/create" class="active">CREATE AN ACCOUNT</a></li>
            </ul>
    <ul>
        <li>20:13</li>
    </ul>
</div>


<div class="content-wrapper">
    <form name="frmRegister" id="frmRegister" method="post" autocomplete="off">
        <div class="content-inner wm-ui-generic-frame wm-ui-genericform wm-ui-two-side-page-left wm-ui-content-fontstyle wm-ui-right-border wm-ui-top-border">
            <table>
                <tr>
                    <td><span class="wm-ui-form-identifier">Account name</span></td>
                </tr>
                <tr>
                    <td><input class="wm-ui-input-generic wm-ui-generic-frame wm-ui-all-border" type="text" maxlength="25" name="userID" id="userID" required></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><span class="wm-ui-form-identifier">Password</span></td>
                </tr>
                <tr>
                    <td><input class="wm-ui-input-generic wm-ui-generic-frame wm-ui-all-border" type="password" maxlength="16" name="userPW" id="userPW" required></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><span class="wm-ui-form-identifier">Confirm password</span></td>
                </tr>
                <tr>
                    <td><input class="wm-ui-input-generic wm-ui-generic-frame wm-ui-all-border" type="password" maxlength="25" name="userConfirmPW" id="userConfirmPW" required></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><span class="wm-ui-form-identifier">Google email address</span></td>
                </tr>
                <tr>
                    <td><input class="wm-ui-input-generic wm-ui-generic-frame wm-ui-all-border" type="text" maxlength="125" name="userEmail" id="userEmail" required></td>
                </tr>
            </table>
        </div>
        <div class="content-inner wm-ui-generic-frame wm-ui-genericform wm-ui-two-side-page-right wm-ui-content-fontstyle wm-ui-two-side-page-ulist wm-ui-left-border wm-ui-top-border">
            <table>
                <tr>
                    <td><span class="wm-ui-form-identifier">Forum username</span></td>
                </tr>
                <tr>
                    <td><input class="wm-ui-input-generic wm-ui-generic-frame wm-ui-all-border" type="text" maxlength="25" name="userForumID" id="userForumID" required></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><div id="createWidget"></div></td>
                </tr>
            </table>
            <div class="wm-ui-position-abottom">
                <div class="wm-ui-checkbox-agreement">
                    <input type="checkbox" name="userCM" class="wm-ui-checkbox-generic" id="userCM" /><label for="userCM"></label>I agree to <a href="/policies/terms" target="_blank" class="wm-ui-hyper-custom-b">Terms of Service</a> and <a href="/policies/privacy" target="_blank" class="wm-ui-hyper-custom-b">Privacy Policy</a>
                </div>
                <button type="submit" class="wm-ui-btn">CREATE AN ACCOUNT</button>
            </div>
        </div>
    </form>
</div>



                <div class="clear"></div>
            </div>
        </div>
        <div class="footer"></div>
        <div class="frame-corners bl"></div>
        <div class="frame-corners br"></div>
    </div>
    
<?php include("template/footer.php"); ?>


    <script>
        $(function() {
            $.warmane({
                currentBackground: -1,
                alertTime: 1651263227
            });
    
                    });
    </script>
</body>
</html>