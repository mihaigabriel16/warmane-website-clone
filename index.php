<?php
    require_once("config.php");
?>

<!DOCTYPE html>
<html lang="en" class="active">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="NDdmMzNhYWE5MGIwYTA0NWE5YjBkNTMyZDQ1MDRkZDI=" />
    <meta name="robots" content="noodp, noydir">
    <meta name="google-site-verification" content="YW87KZKk-q94TWTgngHnf4ej3VUW3mWfFgznDZM_HB4" />
    <meta name="Description" content="Private Server Community." />
    <meta name="Keywords" content="Warmane, WoW, World of Warcraft, Warcraft, Private Server, Private WoW Server, WoW Server, Private WoW Server, wow private server, wow server, wotlk server, cataclysm private server, wow cata server, best free private server, largest private server, wotlk private server, blizzlike server, mists of pandaria, mop, cataclysm, cata, anti-cheat, sentinel anti-cheat, warden" />
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <title>Warmane | WoW Private Server</title>
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
    	<?php include("template/homepage_nav.php"); ?>
            </ul>
    <ul>
        <li>16:18</li>
    </ul>
</div>


	
<div class="content-wrapper">
    <div class="content-inner page-articles-left wm-ui-generic-frame page-articles wm-ui-top-border wm-ui-right-border">
        <?php include("template/content.php"); ?>
    </div>
    <div class="content-inner wm-ui-generic-frame page-articles page-articles-right wm-ui-statisticbox wm-ui-left-border wm-ui-top-border">
        <table id="wm-ui-plugin-statistics">
            <?php include("template/realms_info.php"); ?>
        </table>
<script>
$(function() {
    $('tr[data-tooltip]')
    .mouseenter(function(e) {
        $.warmane('showTooltip', e, '<span class="tooltip-override gray"><span class="yellow">' + $(this).attr('data-tooltip') + '</span></span>');
    })
    .mouseleave(function(e) {
        $.warmane('hideTooltip');
    })
    .mousemove(function(e) {
        $.warmane('moveTooltip', e);
    });
});
</script>
    </div>
</div>
<div class="clear"></div>
<script type="text/javascript">
$(function() {
    $(window).load(function() {
        $('.page-articles-right, .page-articles-left').equalizeCols();
    });
});
</script>


                <div class="clear"></div>
            </div>
        </div>
        <div class="footer"></div>
        <div class="frame-corners bl"></div>
        <div class="frame-corners br"></div>
    </div>
    
<?php include("template/footer.php"); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59798617-1', 'auto');
  ga('send', 'pageview');
</script>

    <script>
        $(function() {
            $.warmane({
                currentBackground: -1,
                alertTime: 1651249118
            });
    
                    });
    </script>
</body>
</html>