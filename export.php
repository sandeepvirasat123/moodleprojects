<!DOCTYPE HTML><html lang='en' dir='ltr' class='chrome chrome70'><head><meta charset="utf-8" /><meta name="referrer" content="no-referrer" /><meta name="robots" content="noindex,nofollow" /><meta http-equiv="X-UA-Compatible" content="IE=Edge" /><style id="cfs-style">html{display: none;}</style><link rel="icon" href="favicon.ico" type="image/x-icon" /><link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /><link rel="stylesheet" type="text/css" href="./themes/pmahomme/jquery/jquery-ui-1.11.4.css" /><link rel="stylesheet" type="text/css" href="js/codemirror/lib/codemirror.css?v=4.6.6deb5" /><link rel="stylesheet" type="text/css" href="js/codemirror/addon/hint/show-hint.css?v=4.6.6deb5" /><link rel="stylesheet" type="text/css" href="js/codemirror/addon/lint/lint.css?v=4.6.6deb5" /><link rel="stylesheet" type="text/css" href="phpmyadmin.css.php?nocache=4437063584ltr" /><link rel="stylesheet" type="text/css" href="./themes/pmahomme/css/printview.css?v=4.6.6deb5" media="print" id="printcss"/><title>phpMyAdmin</title><script data-cfasync='false' type='text/javascript' src='js/whitelist.php?lang=en&amp;db=&amp;token=18d16f619a1c8668d22ecb775b46ac1d&v=4.6.6deb5'></script><script data-cfasync="false" type="text/javascript" src="js/get_scripts.js.php?scripts%5B%5D=jquery/jquery-2.1.4.min.js&amp;scripts%5B%5D=sprintf.js&amp;scripts%5B%5D=ajax.js&amp;scripts%5B%5D=keyhandler.js&amp;scripts%5B%5D=jquery/jquery-ui-1.11.4.min.js&amp;scripts%5B%5D=jquery/jquery.cookie.js&amp;scripts%5B%5D=jquery/jquery.mousewheel.js&amp;scripts%5B%5D=jquery/jquery.event.drag-2.2.js&amp;scripts%5B%5D=jquery/jquery-ui-timepicker-addon.js&amp;scripts%5B%5D=jquery/jquery.ba-hashchange-1.3.js&amp;v=4.6.6deb5"></script><script data-cfasync="false" type="text/javascript" src="js/get_scripts.js.php?scripts%5B%5D=jquery/jquery.debounce-1.0.5.js&amp;scripts%5B%5D=menu-resizer.js&amp;scripts%5B%5D=cross_framing_protection.js&amp;scripts%5B%5D=rte.js&amp;scripts%5B%5D=tracekit/tracekit.js&amp;scripts%5B%5D=error_report.js&amp;scripts%5B%5D=config.js&amp;scripts%5B%5D=doclinks.js&amp;scripts%5B%5D=functions.js&amp;scripts%5B%5D=navigation.js&amp;v=4.6.6deb5"></script><script data-cfasync="false" type="text/javascript" src="js/get_scripts.js.php?scripts%5B%5D=indexes.js&amp;scripts%5B%5D=common.js&amp;scripts%5B%5D=page_settings.js&amp;scripts%5B%5D=codemirror/lib/codemirror.js&amp;scripts%5B%5D=codemirror/mode/sql/sql.js&amp;scripts%5B%5D=codemirror/addon/runmode/runmode.js&amp;scripts%5B%5D=codemirror/addon/hint/show-hint.js&amp;scripts%5B%5D=codemirror/addon/hint/sql-hint.js&amp;scripts%5B%5D=codemirror/addon/lint/lint.js&amp;scripts%5B%5D=codemirror/addon/lint/sql-lint.js&amp;v=4.6.6deb5"></script><script data-cfasync="false" type="text/javascript" src="js/get_scripts.js.php?scripts%5B%5D=console.js&amp;v=4.6.6deb5"></script><script data-cfasync='false' type='text/javascript' src='js/messages.php?lang=en&amp;db=&amp;token=18d16f619a1c8668d22ecb775b46ac1d&v=4.6.6deb5'></script><script data-cfasync='false' type='text/javascript' src='js/get_image.js.php?theme=pmahomme&v=4.6.6deb5'></script><script data-cfasync="false" type="text/javascript">// <![CDATA[
PMA_commonParams.setAll({common_query:"?token=18d16f619a1c8668d22ecb775b46ac1d",opendb_url:"db_structure.php",safari_browser:"0",collation_connection:"utf8mb4_unicode_ci",lang:"en",server:"1",table:"",db:"",token:"18d16f619a1c8668d22ecb775b46ac1d",text_dir:"ltr",show_databases_navigation_as_tree:"1",pma_text_default_tab:"Browse",pma_text_left_default_tab:"Structure",pma_text_left_default_tab2:"",LimitChars:"50",pftext:"",confirm:"1",LoginCookieValidity:"1440",logged_in:"",PMA_VERSION:"4.6.6deb5",auth_type:"cookie"});
ConsoleEnterExecutes=false
AJAX.scriptHandler.add("jquery/jquery-2.1.4.min.js",0).add("whitelist.php?lang=en&amp;db=&amp;token=18d16f619a1c8668d22ecb775b46ac1d",1).add("sprintf.js",1).add("ajax.js",0).add("keyhandler.js",1).add("jquery/jquery-ui-1.11.4.min.js",0).add("jquery/jquery.cookie.js",0).add("jquery/jquery.mousewheel.js",0).add("jquery/jquery.event.drag-2.2.js",0).add("jquery/jquery-ui-timepicker-addon.js",0).add("jquery/jquery.ba-hashchange-1.3.js",0).add("jquery/jquery.debounce-1.0.5.js",0).add("menu-resizer.js",1).add("cross_framing_protection.js",0).add("rte.js",1).add("tracekit/tracekit.js",1).add("error_report.js",1).add("messages.php?lang=en&amp;db=&amp;token=18d16f619a1c8668d22ecb775b46ac1d",0).add("get_image.js.php?theme=pmahomme",0).add("config.js",1).add("doclinks.js",1).add("functions.js",1).add("navigation.js",1).add("indexes.js",1).add("common.js",1).add("page_settings.js",1).add("codemirror/lib/codemirror.js",0).add("codemirror/mode/sql/sql.js",0).add("codemirror/addon/runmode/runmode.js",0).add("codemirror/addon/hint/show-hint.js",0).add("codemirror/addon/hint/sql-hint.js",0).add("codemirror/addon/lint/lint.js",0).add("codemirror/addon/lint/sql-lint.js",0).add("console.js",1);
$(function() {AJAX.fireOnload("whitelist.php?lang=en&amp;db=&amp;token=18d16f619a1c8668d22ecb775b46ac1d");AJAX.fireOnload("sprintf.js");AJAX.fireOnload("keyhandler.js");AJAX.fireOnload("menu-resizer.js");AJAX.fireOnload("rte.js");AJAX.fireOnload("tracekit/tracekit.js");AJAX.fireOnload("error_report.js");AJAX.fireOnload("config.js");AJAX.fireOnload("doclinks.js");AJAX.fireOnload("functions.js");AJAX.fireOnload("navigation.js");AJAX.fireOnload("indexes.js");AJAX.fireOnload("common.js");AJAX.fireOnload("page_settings.js");AJAX.fireOnload("console.js");});
// ]]></script><noscript><style>html{display:block}</style></noscript></head><body id='loginform'><div id="pma_header"></div><div id="page_content">
    <div class="container">
    <a href="./url.php?url=https%3A%2F%2Fwww.phpmyadmin.net%2F" target="_blank" rel="noopener noreferrer" class="logo"><img src="./themes/pmahomme/img/logo_right.png" id="imLogo" name="imLogo" alt="phpMyAdmin" border="0" /></a>
       <h1>Welcome to <bdo dir="ltr" lang="en">phpMyAdmin</bdo></h1><div class="error"><img src="themes/dot.gif" title="" alt="" class="icon ic_s_error" /> No activity within 1440 seconds; please log in again.</div><noscript>
<div class="error"><img src="themes/dot.gif" title="" alt="" class="icon ic_s_error" /> Javascript must be enabled past this point!</div></noscript>
<div class='hide js-show'><form method="get" action="index.php" class="disableAjax"><input type="hidden" name="db" value="" /><input type="hidden" name="table" value="" /><input type="hidden" name="token" value="18d16f619a1c8668d22ecb775b46ac1d" /><fieldset><legend lang="en" dir="ltr">Language</legend><select name="lang" class="autosubmit" lang="en" dir="ltr" id="sel-lang"><option value="hy">Հայերէն - Armenian</option><option value="az">Az&#601;rbaycanca - Azerbaijani</option><option value="bn">বাংলা - Bangla</option><option value="pt_br">Portugu&ecirc;s - Brazilian Portuguese</option><option value="bg">&#1041;&#1098;&#1083;&#1075;&#1072;&#1088;&#1089;&#1082;&#1080; - Bulgarian</option><option value="ca">Catal&agrave; - Catalan</option><option value="zh_cn">&#20013;&#25991; - Chinese simplified</option><option value="zh_tw">&#20013;&#25991; - Chinese traditional</option><option value="cs">Čeština - Czech</option><option value="da">Dansk - Danish</option><option value="nl">Nederlands - Dutch</option><option value="en" selected="selected">English</option><option value="en_gb">English (United Kingdom)</option><option value="et">Eesti - Estonian</option><option value="fi">Suomi - Finnish</option><option value="fr">Fran&ccedil;ais - French</option><option value="gl">Galego - Galician</option><option value="de">Deutsch - German</option><option value="el">&Epsilon;&lambda;&lambda;&eta;&nu;&iota;&kappa;&#940; - Greek</option><option value="hu">Magyar - Hungarian</option><option value="id">Bahasa Indonesia - Indonesian</option><option value="ia">Interlingua</option><option value="it">Italiano - Italian</option><option value="ja">&#26085;&#26412;&#35486; - Japanese</option><option value="ko">&#54620;&#44397;&#50612; - Korean</option><option value="lt">Lietuvi&#371; - Lithuanian</option><option value="nb">Norsk - Norwegian</option><option value="pl">Polski - Polish</option><option value="pt">Portugu&ecirc;s - Portuguese</option><option value="ro">Rom&acirc;n&#259; - Romanian</option><option value="ru">&#1056;&#1091;&#1089;&#1089;&#1082;&#1080;&#1081; - Russian</option><option value="sr@latin">Srpski - Serbian (latin)</option><option value="si">&#3523;&#3538;&#3458;&#3524;&#3517; - Sinhala</option><option value="sq">Shqip - Slbanian</option><option value="sk">Sloven&#269;ina - Slovak</option><option value="sl">Sloven&scaron;&#269;ina - Slovenian</option><option value="es">Espa&ntilde;ol - Spanish</option><option value="sv">Svenska - Swedish</option><option value="tr">T&uuml;rk&ccedil;e - Turkish</option><option value="uk">&#1059;&#1082;&#1088;&#1072;&#1111;&#1085;&#1089;&#1100;&#1082;&#1072; - Ukrainian</option><option value="vi">Tiếng Việt - Vietnamese</option></select></fieldset></form></div>
    <br />
    <!-- Login form -->
    <form method="post" action="index.php" name="login_form" class="disableAjax login hide js-show">
        <fieldset>
        <legend>Log in<a href="./doc/html/index.html" target="documentation"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /></a></legend><div class="item">
                <label for="input_username">Username:</label>
                <input type="text" name="pma_username" id="input_username" value="guru" size="24" class="textfield"/>
            </div>
            <div class="item">
                <label for="input_password">Password:</label>
                <input type="password" name="pma_password" id="input_password" value="" size="24" class="textfield" />
            </div>    <input type="hidden" name="server" value="1" /></fieldset>
        <fieldset class="tblFooters">
            <input value="Go" type="submit" id="input_go" /><input type="hidden" name="target" value="export.php" /><input type="hidden" name="token" value="18d16f619a1c8668d22ecb775b46ac1d" /></fieldset>
    </form></div><div id="pma_footer"></div></div></body></html>