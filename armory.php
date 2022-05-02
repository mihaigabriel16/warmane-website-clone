<?php require_once("config.php") ?>
<!DOCTYPE html>
<html lang="en" class="active">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="csrf-token" content="OTJlN2MwNmMwMWM2ODczMzY5YmUzMzBhNDhiM2E3ZjM=" />
<meta name="robots" content="noodp, noydir">
<meta name="Description" content="Private Server Community." />
<meta name="Keywords" content="Warmane, WoW, World of Warcraft, Warcraft, Private Server, Private WoW Server, WoW Server, Private WoW Server, wow private server, wow server, wotlk server, cataclysm private server, wow cata server, best free private server, largest private server, wotlk private server, blizzlike server, mists of pandaria, mop, cataclysm, cata, anti-cheat, sentinel anti-cheat, warden" />
<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<title>Warmane Armory | PvP Ladder</title>
<link rel="stylesheet" href="/themes/warmane/stylesheets/global.css">
<link rel="stylesheet" href="/themes/warmane/stylesheets/ui.css">
<link rel="stylesheet" href="/themes/warmane/stylesheets/armory.css">
<link rel="stylesheet" href="/themes/warmane/stylesheets/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="/themes/warmane/script/ui.js?"></script>
<script src="/themes/warmane/script/armory.js"></script>
<script src="//www.warmane.com/script/jquery.wm-listener.js"></script>
<script src="//www.warmane.com/script/warmane.js"></script>
<script src="//www.warmane.com/script/jquery.wm.bpopup.js"></script>
<script src="//cdn.cavernoftime.com/api/tooltip.js"></script>
<script src="//www.warmane.com/script/jquery.wm-contextmenu.js"></script>
<script>
$.ajaxSetup({cache: true});
</script>
<link rel="stylesheet" href="/stylesheets/wm-contextmenu.css">
</head>
<body>
<noscript>
    <div id="noscript-override">
        <p>This site makes extensive use of JavaScript.</b><br>Please <a href="https://www.google.com/support/adsense/bin/answer.py?answer=12654" target="_blank">enable JavaScript</a> in your browser.</p>
    </div>
</noscript>
<div class="navigation-wrapper">
    <a href="https://www.warmane.com/" class="navigation-logo"></a>
    <div class="navigation">
        <ul class="navbits">
            <?php include("template/navbar_header.php") ?>
        </ul>        
    </div>
    <div class="social-buttons">
        <a href="https://www.facebook.com/warmane" class="social-button facebook" title="Warmane Facebook" target="_blank"><div class="fa fa-facebook"></div></a>
        <a href="https://www.youtube.com/c/warmane" class="social-button youtube" s title="Warmane Youtube" target="_blank"><div class="fa fa-youtube-play"></div></a>
        <a href="https://www.reddit.com/r/warmane" class="social-button reddit" title="Warmane Reddit" target="_blank"><div class="fa fa-reddit"></div></a>
        <a href="https://www.twitch.tv/warmane" class="social-button twitch" s title="Warmane Twitch" target="_blank"><div class="fa fa-twitch"></div></a>
        <a href="https://www.reddit.com/r/warmane" class="social-button reddit" title="Warmane Reddit" target="_blank"><div class="fa fa-reddit"></div></a>
    </div>
</div>
<div id="page-frame">
	<div class="frame-corners tl"></div>
    <div class="frame-corners tr"></div>
    <div class="leftmost-frame"></div>
	<div class="header"></div>
    <div class="center">
        <video style="position:relative;z-index:-999;" width="100%" height="100%" autoplay loop>
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
        <li><a href="/" class="">HOME</a></li>
        <li><a href="/ladder" class="active">PVP LADDER</a></li>
        <li><a href="/pveladder" class="">PVE LADDER</a></li>
        <li><a href="/leaderboard" class="">LEADERBOARD</a></li>
        <li><a href="/prestige" class="">PRESTIGE</a></li>
    	    </ul>
    <ul>
        <li>
            <input type="text" name="nav-search-input" id="nav-search-input" class="wm-ui-input-generic wm-ui-generic-frame wm-ui-all-border">
        </li>
        <li>
            <a href="javascript:;" id="nav-search" class="">SEARCH</a>
        </li>
    </ul>
</div>

<link href="/themes/warmane/assets/datatables/css/data-table.css" rel="stylesheet" />
<div class="wm-ui-generic-subnav">
    <table>
        <tr>
            <td>
                <select name="battlegroup" id="battlegroup">
                                        <option value="1" selected>Battlegroup 1</option>
                                        <option value="2" >Battlegroup 2</option>
                                                                                                                                                                                                                                                <option value="Frostwolf" >Frostwolf</option>
                                                                                                                                                                                                                                                                                                                                                                                                                                </select>
            </td>
                        <td>
                <select name="leveltype" id="leveltype">
                                        <option value="80" selected>Level 80</option>
                                        <option value="79" >Level 79</option>
                                        <option value="70" >Level 70</option>
                                        <option value="69" >Level 69</option>
                                        <option value="60" >Level 60</option>
                                        <option value="59" >Level 59</option>
                                        <option value="49" >Level 49</option>
                                        <option value="39" >Level 39</option>
                                        <option value="29" >Level 29</option>
                                        <option value="19" >Level 19</option>
                                    </select>
            </td>
                        <td>
                <select name="bracket" id="bracket">
                                        <option value="2v2" selected>2v2</option>
                                        <option value="3v3" >3v3</option>
                                        <option value="5v5" >5v5</option>
                                        <option value="SoloQ" >SoloQ</option>
                                    </select>
            </td>
        </tr>
    </table>
</div>
<div id="content-wrapper">
    <div id="content-inner" class="wm-ui-generic-frame wm-ui-leaderbox wm-ui-content-fontstyle wm-ui-top-border">
                <table id="data-table" class="stripe dataTable" width="100%">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th class="dt-left">Name</th>
                    <th>Composition</th>
                    <th>Faction</th>
                    <th>Realm</th>
                    <th>Wins</th>
                    <th>Losses</th>
                    <th>Rating</th>
                </tr>
            </thead>
            <tbody id="data-table-list">
                                <tr>
                    <td class="dt-center">1</td>
                    <td><a href="/team/No+wintrade+no+rank+one/Blackrock/summary">No wintrade no rank one</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Babe" src="/images/icons/classes/2.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">229</td>
                    <td class="dt-center">26</td>
                    <td class="dt-center">2917</td>
                </tr>
                                <tr>
                    <td class="dt-center">2</td>
                    <td><a href="/team/dzdqse/Blackrock/summary">dzdqse</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Torstenstock" src="/images/icons/classes/1.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Fox" src="/images/icons/classes/1.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Rndmpl" src="/images/icons/classes/2.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Iamfatwhale" src="/images/icons/classes/2.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">162</td>
                    <td class="dt-center">23</td>
                    <td class="dt-center">2780</td>
                </tr>
                                <tr>
                    <td class="dt-center">3</td>
                    <td><a href="/team/aadssdds/Blackrock/summary">aadssdds</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Shutong" src="/images/icons/classes/2.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Jhamels" src="/images/icons/classes/1.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">126</td>
                    <td class="dt-center">2</td>
                    <td class="dt-center">2754</td>
                </tr>
                                <tr>
                    <td class="dt-center">4</td>
                    <td><a href="/team/poiuk/Blackrock/summary">poiuk</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Aleiqab" src="/images/icons/classes/1.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Vagabondz" src="/images/icons/classes/2.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">182</td>
                    <td class="dt-center">23</td>
                    <td class="dt-center">2740</td>
                </tr>
                                <tr>
                    <td class="dt-center">5</td>
                    <td><a href="/team/fnu+taem/Blackrock/summary">fnu taem</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Drznxz" src="/images/icons/classes/8.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alienzx" src="/images/icons/classes/5.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">149</td>
                    <td class="dt-center">19</td>
                    <td class="dt-center">2729</td>
                </tr>
                                <tr>
                    <td class="dt-center">6</td>
                    <td><a href="/team/Supreme+Deleted/Blackrock/summary">Supreme Deleted</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Pvelordx" src="/images/icons/classes/1.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Skyzan" src="/images/icons/classes/2.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">135</td>
                    <td class="dt-center">12</td>
                    <td class="dt-center">2713</td>
                </tr>
                                <tr>
                    <td class="dt-center">7</td>
                    <td><a href="/team/just+play+better/Icecrown/summary">just play better</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Bicitrici" src="/images/icons/classes/1.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Pqr" src="/images/icons/classes/2.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Pvelord" src="/images/icons/classes/1.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Icecrown</td>
                    <td class="dt-center">254</td>
                    <td class="dt-center">95</td>
                    <td class="dt-center">2708</td>
                </tr>
                                <tr>
                    <td class="dt-center">8</td>
                    <td><a href="/team/saving+warmane+dignity/Blackrock/summary">saving warmane dignity</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Doujax" src="/images/icons/classes/7.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Dieinsetd" src="/images/icons/classes/2.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">141</td>
                    <td class="dt-center">29</td>
                    <td class="dt-center">2707</td>
                </tr>
                                <tr>
                    <td class="dt-center">9</td>
                    <td><a href="/team/boosted+hoe/Blackrock/summary">boosted hoe</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Youproboldaf" src="/images/icons/classes/2.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Mycatkillu" src="/images/icons/classes/1.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">149</td>
                    <td class="dt-center">26</td>
                    <td class="dt-center">2704</td>
                </tr>
                                <tr>
                    <td class="dt-center">10</td>
                    <td><a href="/team/zyzzmirinbrah/Icecrown/summary">zyzzmirinbrah</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Kalypthique" src="/images/icons/classes/2.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Salesguy" src="/images/icons/classes/1.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Icecrown</td>
                    <td class="dt-center">242</td>
                    <td class="dt-center">81</td>
                    <td class="dt-center">2703</td>
                </tr>
                                <tr>
                    <td class="dt-center">11</td>
                    <td><a href="/team/need/Blackrock/summary">need</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Agostino" src="/images/icons/classes/1.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Waynext" src="/images/icons/classes/2.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">149</td>
                    <td class="dt-center">19</td>
                    <td class="dt-center">2697</td>
                </tr>
                                <tr>
                    <td class="dt-center">12</td>
                    <td><a href="/team/t+cool+toi/Blackrock/summary">t cool toi</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Chovyx" src="/images/icons/classes/2.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Tsugikuni" src="/images/icons/classes/1.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">133</td>
                    <td class="dt-center">21</td>
                    <td class="dt-center">2696</td>
                </tr>
                                <tr>
                    <td class="dt-center">13</td>
                    <td><a href="/team/lets+go/Blackrock/summary">lets go</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Safekick" src="/images/icons/classes/2.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Famous" src="/images/icons/classes/1.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">281</td>
                    <td class="dt-center">109</td>
                    <td class="dt-center">2686</td>
                </tr>
                                <tr>
                    <td class="dt-center">14</td>
                    <td><a href="/team/gearing+this+lock/Blackrock/summary">gearing this lock</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Gladlockjk" src="/images/icons/classes/9.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Satsuu" src="/images/icons/classes/8.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Notpreg" src="/images/icons/classes/2.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">183</td>
                    <td class="dt-center">51</td>
                    <td class="dt-center">2680</td>
                </tr>
                                <tr>
                    <td class="dt-center">15</td>
                    <td><a href="/team/Unbroken+lOO+pull+ups/Blackrock/summary">Unbroken lOO pull ups</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Mirmyx" src="/images/icons/classes/7.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Oldmaan" src="/images/icons/classes/9.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Thugodlike" src="/images/icons/classes/9.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Horde" src="/images/icons/faction-1.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">399</td>
                    <td class="dt-center">242</td>
                    <td class="dt-center">2650</td>
                </tr>
                                <tr>
                    <td class="dt-center">16</td>
                    <td><a href="/team/fqfqfqfqfqfqfq/Icecrown/summary">fqfqfqfqfqfqfq</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Kekhands" src="/images/icons/classes/2.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Furysert" src="/images/icons/classes/7.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Icecrown</td>
                    <td class="dt-center">188</td>
                    <td class="dt-center">66</td>
                    <td class="dt-center">2647</td>
                </tr>
                                <tr>
                    <td class="dt-center">17</td>
                    <td><a href="/team/mypriestamonstah/Blackrock/summary">mypriestamonstah</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Iloveface" src="/images/icons/classes/4.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Tsunderex" src="/images/icons/classes/5.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">277</td>
                    <td class="dt-center">111</td>
                    <td class="dt-center">2632</td>
                </tr>
                                <tr>
                    <td class="dt-center">18</td>
                    <td><a href="/team/GTA+Vice+City/Blackrock/summary">GTA Vice City</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Halflifebest" src="/images/icons/classes/7.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Warlockx" src="/images/icons/classes/9.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Daxbin" src="/images/icons/classes/2.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">291</td>
                    <td class="dt-center">69</td>
                    <td class="dt-center">2632</td>
                </tr>
                                <tr>
                    <td class="dt-center">19</td>
                    <td><a href="/team/Into+Dust/Icecrown/summary">Into Dust</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Emilyblunt" src="/images/icons/classes/2.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Releases" src="/images/icons/classes/1.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Icecrown</td>
                    <td class="dt-center">147</td>
                    <td class="dt-center">25</td>
                    <td class="dt-center">2630</td>
                </tr>
                                <tr>
                    <td class="dt-center">20</td>
                    <td><a href="/team/Getting+ditched+again/Icecrown/summary">Getting ditched again</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Guts" src="/images/icons/classes/1.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Moonlightboy" src="/images/icons/classes/2.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Icecrown</td>
                    <td class="dt-center">245</td>
                    <td class="dt-center">115</td>
                    <td class="dt-center">2629</td>
                </tr>
                                <tr>
                    <td class="dt-center">21</td>
                    <td><a href="/team/Classic+LS/Blackrock/summary">Classic LS</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Peterololz" src="/images/icons/classes/7.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Quilava" src="/images/icons/classes/9.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">288</td>
                    <td class="dt-center">114</td>
                    <td class="dt-center">2620</td>
                </tr>
                                <tr>
                    <td class="dt-center">22</td>
                    <td><a href="/team/Im+end+wopal+X/Blackrock/summary">Im end wopal X</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Eaeaeae" src="/images/icons/classes/2.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Traktorcho" src="/images/icons/classes/7.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">195</td>
                    <td class="dt-center">77</td>
                    <td class="dt-center">2615</td>
                </tr>
                                <tr>
                    <td class="dt-center">23</td>
                    <td><a href="/team/need+gearxz/Blackrock/summary">need gearxz</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Sullenkitten" src="/images/icons/classes/2.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Rndmshm" src="/images/icons/classes/7.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">132</td>
                    <td class="dt-center">33</td>
                    <td class="dt-center">2615</td>
                </tr>
                                <tr>
                    <td class="dt-center">24</td>
                    <td><a href="/team/I+like+myself/Blackrock/summary">I like myself</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Justajokejk" src="/images/icons/classes/1.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Holydefxx" src="/images/icons/classes/2.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">137</td>
                    <td class="dt-center">24</td>
                    <td class="dt-center">2610</td>
                </tr>
                                <tr>
                    <td class="dt-center">25</td>
                    <td><a href="/team/aadcb/Blackrock/summary">aadcb</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Shiawase" src="/images/icons/classes/5.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Radagon" src="/images/icons/classes/8.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">192</td>
                    <td class="dt-center">26</td>
                    <td class="dt-center">2607</td>
                </tr>
                                <tr>
                    <td class="dt-center">26</td>
                    <td><a href="/team/Blank+Love/Icecrown/summary">Blank Love</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Pqrsuspect" src="/images/icons/classes/1.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Pacifical" src="/images/icons/classes/2.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Icecrown</td>
                    <td class="dt-center">148</td>
                    <td class="dt-center">36</td>
                    <td class="dt-center">2605</td>
                </tr>
                                <tr>
                    <td class="dt-center">27</td>
                    <td><a href="/team/baslo+do+dmg+pls/Blackrock/summary">baslo do dmg pls</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Bobbybanger" src="/images/icons/classes/1.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">137</td>
                    <td class="dt-center">17</td>
                    <td class="dt-center">2594</td>
                </tr>
                                <tr>
                    <td class="dt-center">28</td>
                    <td><a href="/team/Penny+and+Modhack+biS/Blackrock/summary">Penny and Modhack biS</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Pennycilin" src="/images/icons/classes/2.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">132</td>
                    <td class="dt-center">14</td>
                    <td class="dt-center">2593</td>
                </tr>
                                <tr>
                    <td class="dt-center">29</td>
                    <td><a href="/team/warpal+again/Blackrock/summary">warpal again</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alphakewn" src="/images/icons/classes/2.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Cazziex" src="/images/icons/classes/1.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">153</td>
                    <td class="dt-center">22</td>
                    <td class="dt-center">2580</td>
                </tr>
                                <tr>
                    <td class="dt-center">30</td>
                    <td><a href="/team/Humblemens/Blackrock/summary">Humblemens</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Firearm" src="/images/icons/classes/1.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">133</td>
                    <td class="dt-center">14</td>
                    <td class="dt-center">2576</td>
                </tr>
                                <tr>
                    <td class="dt-center">31</td>
                    <td><a href="/team/retmmretmmretmm/Icecrown/summary">retmmretmmretmm</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Fledan" src="/images/icons/classes/3.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Hammerjunior" src="/images/icons/classes/2.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Icecrown</td>
                    <td class="dt-center">226</td>
                    <td class="dt-center">119</td>
                    <td class="dt-center">2557</td>
                </tr>
                                <tr>
                    <td class="dt-center">32</td>
                    <td><a href="/team/Aesthetics+for+ZYZZ/Blackrock/summary">Aesthetics for ZYZZ</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Kid" src="/images/icons/classes/1.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">172</td>
                    <td class="dt-center">36</td>
                    <td class="dt-center">2557</td>
                </tr>
                                <tr>
                    <td class="dt-center">33</td>
                    <td><a href="/team/jpjpjpjpjpjp/Blackrock/summary">jpjpjpjpjpjp</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Leyndell" src="/images/icons/classes/5.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Ezonax" src="/images/icons/classes/4.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">164</td>
                    <td class="dt-center">36</td>
                    <td class="dt-center">2556</td>
                </tr>
                                <tr>
                    <td class="dt-center">34</td>
                    <td><a href="/team/ililili+fanclub/Blackrock/summary">ililili fanclub</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Deserteagle" src="/images/icons/classes/2.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Needwotlich" src="/images/icons/classes/1.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">200</td>
                    <td class="dt-center">97</td>
                    <td class="dt-center">2552</td>
                </tr>
                                <tr>
                    <td class="dt-center">35</td>
                    <td><a href="/team/TDV/Blackrock/summary">TDV</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Lolxscriptx" src="/images/icons/classes/1.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Editx" src="/images/icons/classes/2.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Disyu" src="/images/icons/classes/2.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">154</td>
                    <td class="dt-center">61</td>
                    <td class="dt-center">2544</td>
                </tr>
                                <tr>
                    <td class="dt-center">36</td>
                    <td><a href="/team/muchRusty/Blackrock/summary">muchRusty</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Hafu" src="/images/icons/classes/11.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Istckprayer" src="/images/icons/classes/5.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">110</td>
                    <td class="dt-center">58</td>
                    <td class="dt-center">2542</td>
                </tr>
                                <tr>
                    <td class="dt-center">37</td>
                    <td><a href="/team/asdasaasd/Blackrock/summary">asdasaasd</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Samosa" src="/images/icons/classes/1.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Slaughterer" src="/images/icons/classes/1.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Know" src="/images/icons/classes/2.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">124</td>
                    <td class="dt-center">14</td>
                    <td class="dt-center">2541</td>
                </tr>
                                <tr>
                    <td class="dt-center">38</td>
                    <td><a href="/team/Ddl+pqr+script/Blackrock/summary">Ddl pqr script</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Numistar" src="/images/icons/classes/6.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Rateerita" src="/images/icons/classes/5.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">190</td>
                    <td class="dt-center">84</td>
                    <td class="dt-center">2537</td>
                </tr>
                                <tr>
                    <td class="dt-center">39</td>
                    <td><a href="/team/escape+from+targow/Blackrock/summary">escape from targow</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Exyth" src="/images/icons/classes/6.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Breathdude" src="/images/icons/classes/2.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">112</td>
                    <td class="dt-center">16</td>
                    <td class="dt-center">2535</td>
                </tr>
                                <tr>
                    <td class="dt-center">40</td>
                    <td><a href="/team/eww/Blackrock/summary">eww</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Srenix" src="/images/icons/classes/8.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">436</td>
                    <td class="dt-center">282</td>
                    <td class="dt-center">2532</td>
                </tr>
                                <tr>
                    <td class="dt-center">41</td>
                    <td><a href="/team/Your+lag+is+my+ms/Blackrock/summary">Your lag is my ms</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Faylaxp" src="/images/icons/classes/2.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Tjenarelol" src="/images/icons/classes/1.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">143</td>
                    <td class="dt-center">36</td>
                    <td class="dt-center">2526</td>
                </tr>
                                <tr>
                    <td class="dt-center">42</td>
                    <td><a href="/team/RMyo/Blackrock/summary">RMyo</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Diyos" src="/images/icons/classes/8.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Maslovtwo" src="/images/icons/classes/4.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Poiulkjmnb" src="/images/icons/classes/4.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">497</td>
                    <td class="dt-center">280</td>
                    <td class="dt-center">2523</td>
                </tr>
                                <tr>
                    <td class="dt-center">43</td>
                    <td><a href="/team/EAsyLose/Blackrock/summary">EAsyLose</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Judenslayed" src="/images/icons/classes/3.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Hafulol" src="/images/icons/classes/11.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">119</td>
                    <td class="dt-center">49</td>
                    <td class="dt-center">2515</td>
                </tr>
                                <tr>
                    <td class="dt-center">44</td>
                    <td><a href="/team/Florin+and+Bruce/Blackrock/summary">Florin and Bruce</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Lildicky" src="/images/icons/classes/6.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Ciganpreg" src="/images/icons/classes/2.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">122</td>
                    <td class="dt-center">22</td>
                    <td class="dt-center">2514</td>
                </tr>
                                <tr>
                    <td class="dt-center">45</td>
                    <td><a href="/team/plsduelist/Icecrown/summary">plsduelist</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Deathlender" src="/images/icons/classes/4.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Kunx" src="/images/icons/classes/4.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Icecrown</td>
                    <td class="dt-center">120</td>
                    <td class="dt-center">60</td>
                    <td class="dt-center">2509</td>
                </tr>
                                <tr>
                    <td class="dt-center">46</td>
                    <td><a href="/team/pvelord+dodge+us/Blackrock/summary">pvelord dodge us</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Hammerstrike" src="/images/icons/classes/2.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Intikamx" src="/images/icons/classes/3.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Bouncer" src="/images/icons/classes/3.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">192</td>
                    <td class="dt-center">87</td>
                    <td class="dt-center">2508</td>
                </tr>
                                <tr>
                    <td class="dt-center">47</td>
                    <td><a href="/team/fake+shaman+plz/Blackrock/summary">fake shaman plz</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Chevron" src="/images/icons/classes/9.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Shamanikq" src="/images/icons/classes/7.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">419</td>
                    <td class="dt-center">238</td>
                    <td class="dt-center">2504</td>
                </tr>
                                <tr>
                    <td class="dt-center">48</td>
                    <td><a href="/team/sadsdasad/Blackrock/summary">sadsdasad</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Resteficken" src="/images/icons/classes/7.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Wkrull" src="/images/icons/classes/2.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">247</td>
                    <td class="dt-center">154</td>
                    <td class="dt-center">2501</td>
                </tr>
                                <tr>
                    <td class="dt-center">49</td>
                    <td><a href="/team/adseawe/Blackrock/summary">adseawe</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Ripscripting" src="/images/icons/classes/1.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Royaltyx" src="/images/icons/classes/2.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">203</td>
                    <td class="dt-center">84</td>
                    <td class="dt-center">2500</td>
                </tr>
                                <tr>
                    <td class="dt-center">50</td>
                    <td><a href="/team/warrior+from+ebay/Blackrock/summary">warrior from ebay</a></td>
                    <td class="dt-center">
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Tankerpro" src="/images/icons/classes/2.gif" />
                        </span>
                                            <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Soora" src="/images/icons/classes/1.gif" />
                        </span>
                                        </td>
                    <td class="dt-center">
                        <span class="icon-frame size-14">
                            <img width="14" height="14" alt="Alliance" src="/images/icons/faction-0.jpg" />
                        </span>
                    </td>
                    <td class="dt-center">Blackrock</td>
                    <td class="dt-center">123</td>
                    <td class="dt-center">23</td>
                    <td class="dt-center">2499</td>
                </tr>
                            </tbody>
        </table>
            </div>
</div>
<script>
var table;
$.getScript('/themes/warmane/assets/datatables/js/jquery.dataTables.js').done(function() {
    $.getScript('/themes/warmane/assets/datatables/js/dataTables.responsive.js').done(function() {
        if ($('#data-table').length !== 0) {
            table = $('#data-table').DataTable({
                "bFilter": false,
                "dom": '<"top">rt<"bottom"flp><"clear">',
                "bLengthChange": false,
                iDisplayLength: 100,
            });
        }

        $('#battlegroup, #leveltype, #bracket').bind('change',function() {
            if(!isNaN($('#battlegroup').val())) {
                var levelType = $('#leveltype').val();
                
                window.location = '/ladder/' + $('#bracket').val() + '/' + $('#battlegroup').val() + (typeof levelType !== 'undefined' ? '/' + levelType : '');
            } else {
                window.location = '/ladder/' + $('#bracket').val() + '/' + $('#battlegroup').val();
            }
        });

        $('select').msDropDown();
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

<div id="page-footer">
	<a href="https://www.warmane.com/policies/terms">Terms of Service</a> &nbsp; <a href="https://www.warmane.com/policies/privacy">Privacy Policy</a> &nbsp; <a href="https://www.warmane.com/policies/refund"> Refund Policy </a> &nbsp; <a href="http://forum.warmane.com/forumdisplay.php?132-Support-amp-Q-A">Contact Us</a><br>
	Copyright &copy; Warmane&trade; 2022. All Rights Reserved.
</div>
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
        currentBackground: -1
    });
});
</script>
</body>
</html>
