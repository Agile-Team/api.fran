/*
colred=235 colgreen=235 colblue=235
isred=0 isgreen=0 isblue=0
colorbacklineimpair1=242,242,242
colorbacklineimpair2=248,248,248
colorbacklineimpairhover=
colorbacklinepair1=255,255,255
colorbacklinepair2=255,255,255
colorbacklinepairhover=
usecss3=1
dol_hide_topmenu=
dol_hide_leftmenu=
dol_optimize_smallscreen=
dol_no_mouse_hover=
dol_use_jmobile=
*/

/* ============================================================================== */
/* Default styles                                                                 */
/* ============================================================================== */


body {
	background: #fcfcfc;;
	color: #101010;
	font-size: 12px;
	font-family: arial,tahoma,verdana,helvetica;
    margin-top: 0;
    margin-bottom: 0;
    margin-right: 0;
    margin-left: 0;
    direction: ltr;
}

a:link, a:visited, a:hover, a:active { font-family: arial,tahoma,verdana,helvetica; font-weight: bold; color: #4A4A4A; text-decoration: none;  }

a:hover { text-decoration: underline; color: #000000;}


input:focus, textarea:focus, button:focus, select:focus {
    box-shadow: 0 0 4px #8091BF;
}
textarea.cke_source:focus
{
	box-shadow: none;
}

input, input.flat, textarea, textarea.flat, form.flat select, select.flat {
    font-size: 12px;
	font-family: arial,tahoma,verdana,helvetica;
	background: #FDFDFD;
    border: 1px solid #C0C0C0;
    /*padding: 1px 1px 1px 1px; */
    margin: 0px 0px 0px 0px;
}

input, textarea, select {
	border-radius:4px;
	border:solid 1px rgba(0,0,0,.3);
	border-top:solid 1px rgba(0,0,0,.3);
	border-bottom:solid 1px rgba(0,0,0,.2);
	/* box-shadow: 1px 1px 1px rgba(0,0,0,.2) inset;*/
	padding:2px;
	margin-left:1px;
	margin-bottom:1px;
	margin-top:1px;
	}

select.flat, form.flat select {
	font-weight: normal;
}
input:disabled {
	background:#ddd;
}

input.liste_titre {
	box-shadow: none !important;
}
input.removedfile {
	padding: 0px !important;
	border: 0px !important;
}
textarea:disabled {
	background:#ddd;
}
input[type=checkbox] { background-color: transparent; border: none; box-shadow: none; }
input[type=radio]    { background-color: transparent; border: none; box-shadow: none; }
input[type=image]    { background-color: transparent; border: none; box-shadow: none; }
input[type=text]     { min-width: 20px; }
input:-webkit-autofill {
	background-color: #FBFFEA !important;
	background-image:none !important;
	-webkit-box-shadow: 0 0 0 50px #FBFFEA inset;
}
::-webkit-input-placeholder { color:#ccc; }
::-moz-placeholder { color:#ccc; } /* firefox 19+ */
:-ms-input-placeholder { color:#ccc; } /* ie */
input:-moz-placeholder { color:#ccc; }

fieldset { border: 1px solid #AAAAAA !important; box-shadow: 2px 2px 3px #DDD; }


.button {
    font-family: arial,tahoma,verdana,helvetica;
	background-image: url(/theme/eldy/img/button_bg.png);
	background-position: bottom;
    border: 1px solid #C0C0C0;
	padding: 0.1em 0.7em;
	margin: 0em 0.5em;
    -moz-border-radius:0px 5px 0px 5px;
	-webkit-border-radius:0px 5px 0px 5px;
	border-radius:0px 5px 0px 5px;
    -moz-box-shadow: 2px 2px 3px #DDD;
    -webkit-box-shadow: 2px 2px 3px #DDD;
    box-shadow: 2px 2px 3px #DDD;
}
.button:focus  {
    font-family: arial,tahoma,verdana,helvetica;
	color: #222244;
	background-image: url(/theme/eldy/img/button_bg.png);
	background-position: bottom;
    border: 1px solid #C0C0C0;
}
.button:hover   {
	background: #dee7ec;
}
.button:disabled {
	background: #ddd;
}
.buttonajax {
    font-family: arial,tahoma,verdana,helvetica;
	border: 0px;
	background-image: url(/theme/eldy/img/button_bg.png);
	background-position: bottom;
	padding: 0.1em 0.7em;
	margin: 0em 0.5em;
    -moz-border-radius:0px 5px 0px 5px;
	-webkit-border-radius:0px 5px 0px 5px;
	border-radius:0px 5px 0px 5px;
    -moz-box-shadow: 3px 3px 4px #DDD;
    -webkit-box-shadow: 3px 3px 4px #DDD;
    box-shadow: 3px 3px 4px #DDD;
}
form {
    padding:0px;
    margin:0px;
}
div.float
{
    float:left;
}
div.floatright
{
    float:right;
}
.inline-block
{
	display:inline-block;
}

th .button {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
	-moz-border-radius:0px !important;
	-webkit-border-radius:0px !important;
	border-radius:0px !important;
}

.valignmiddle {
	vertical-align: middle;
}
.centpercent {
	width: 100%;
}
.center {
    text-align: center;
}
.left {
	text-align: left;
}
.right {
	text-align: right;
}
.nowrap {
	white-space: nowrap;
}
.nobold {
	font-weight: normal !important;
}
.nounderline {
    text-decoration: none;
}


/* ============================================================================== */
/* Styles to hide objects                                                         */
/* ============================================================================== */

.hideobject { display: none; }
.linkobject { cursor: pointer; }


/* ============================================================================== */
/* Styles for dragging lines                                                      */
/* ============================================================================== */

.dragClass {
	color: #002255;
}
td.showDragHandle {
	cursor: move;
}
.tdlineupdown {
	white-space: nowrap;
	min-width: 10px;
}


/* ============================================================================== */
/* Styles de positionnement des zones                                             */
/* ============================================================================== */

#id-container {
	margin-top: 8px;
	margin-bottom: 8px;
	display: table;
	table-layout: fixed;
}
#id-right, #id-left {
	display: table-cell;
	float: none;
	vertical-align: top;
}
#id-right {	/* This must stay id-right ant not be replaced with echo $right */
	width: 100%;
}

div.fiche {
	margin-left: 20px;
	margin-right: 12px;
	}

div.fichecenter {
	width: 100%;
	clear: both;	/* This is to have div fichecenter that are true rectangles */
}
div.fichethirdleft {
	float: left;
	width: 35%;
	}
div.fichetwothirdright {
	float: right;
	width: 65%;
	}
div.fichehalfleft {
	float: left;
	width: 50%;
}
div.fichehalfright {
	float: right;
	width: 50%;
}
div.ficheaddleft {
	padding-left: 16px;
}
.containercenter {
display : table;
margin : 0px auto;
}


/* ============================================================================== */
/* Menu top et 1ere ligne tableau                                                 */
/* ============================================================================== */


div#tmenu_tooltip {
	height: 41px;
	padding-right: 100px;
	background: ;
	box-shadow: 0 0 6px rgba(0, 0, 0, .4) !important;
    	background-image: linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(128,128,128,.3) 100%);
	background-image: -o-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(128,128,128,.3) 100%);
	background-image: -moz-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(128,128,128,.3) 100%);
	background-image: -webkit-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(128,128,128,.3) 100%);
	background-image: -ms-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(128,128,128,.3) 100%);
	background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgba(255,255,255,.3)), color-stop(1, rgba(128,128,128,.3)) );
	}

div.tmenudiv {
    position: relative;
    display: block;
    white-space: nowrap;
    border-top: 0px;
    border-left: 0px;
    border-right: 0px;
    padding: 0px 0px 0px 0px;	/* t r b l */
    margin: 0px 0px 0px 0px;	/* t r b l */
	font-size: 13px;
    font-weight: normal;
    height: 53px;
	color: #000000;
    text-decoration: none;
}
div.tmenudisabled, a.tmenudisabled {
	opacity: 0.6;
}
a.tmenudisabled:link, a.tmenudisabled:visited, a.tmenudisabled:hover, a.tmenudisabled:active {
    font-weight: normal;
	padding: 0px 5px 0px 5px;
	white-space: nowrap;
	color: #FFF;
	text-decoration: none;
	cursor: not-allowed;
}

a.tmenu:link, a.tmenu:visited, a.tmenu:hover, a.tmenu:active {
    font-weight: normal;
	padding: 0px 5px 0px 5px;
	white-space: nowrap;
	/*	text-shadow: 1px 1px 1px #000000; */
	color: #FFF;
    text-decoration: none;
}
a.tmenusel:link, a.tmenusel:visited, a.tmenusel:hover, a.tmenusel:active {
	font-weight: normal;
	padding: 0px 5px 0px 5px;
	margin: 0px 0px 0px 0px;
	white-space: nowrap;
	color: #FFF;
	text-decoration: none !important;
}


ul.tmenu {	/* t r b l */
    padding: 0px 0px 0px 0px;
    margin: 0px 0px 0px 0px;
	list-style: none;
    /* height: 52px; */
	box-shadow: 0 0 6px rgba(0, 0, 0, .4) !important;
}
ul.tmenu li {
	background: rgb(140,160,185);

    	background-image: linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image: -o-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image: -moz-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image: -webkit-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image: -ms-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgba(255,255,255,.3)), color-stop(1, rgba(0,0,0,.3)) );
	}
li.tmenu, li.tmenusel {
	min-width: 66px;	text-align: center;
	vertical-align: bottom;
		float: left;
    height: 52px;
    	position:relative;
	display: block;
	padding: 0px 0px 2px 0px;
	margin: 0px 0px 0px 0px;
	font-weight: normal;
}
li.tmenusel, li.tmenu:hover {
    background-image: -o-linear-gradient(bottom, rgba(250,250,250,0.3) 0%, rgba(0,0,0,0.3) 100%) !important;
    background-image: -moz-linear-gradient(bottom, rgba(250,250,250,0.3) 0%, rgba(0,0,0,0.3) 100%) !important;
    background-image: -webkit-linear-gradient(bottom, rgba(0,0,0,0.3) 0%, rgba(250,250,250,0) 100%) !important;
    background-image: -ms-linear-gradient(bottom, rgba(250,250,250,0.3) 0%, rgba(0,0,0,0.3) 100%) !important;
    background-image: linear-gradient(bottom, rgba(250,250,250,0.3) 0%, rgba(0,0,0,0.3) 100%) !important;
	background: rgb(140,160,185);
	/* background: url(/theme/eldy/img/nav-overlay3.png) 50% 0 repeat-x !important; Nicer but problem when menu wrap on 2 lines */
}
.tmenuend .tmenuleft { width: 0px; }
div.tmenuleft
{
	width: 5px;
	float: left;
    height: 56px;
	background: url(/theme/eldy/img/menutab-r.png) 0 0 no-repeat;
	margin-top: 0px;
}
div.tmenucenter
{
	padding-top: 2px;
	padding-left: 0px;
	padding-right: 0px;
    height: 52px;
    width: 100%;
}
.mainmenuaspan
{
	padding-right: 4px;
	/*text-shadow: 1px 1px 1px #DDD;*/
}

div.mainmenu {
	position : relative;
	background-repeat:no-repeat;
	background-position:center top;
	height: 33px;
	margin-left: 0px;
	min-width: 40px;
}


div.mainmenu.home{
	background-image: url(/theme/eldy/img/menus/home.png);
	background-position-x: middle;
}

div.mainmenu.accountancy {
	background-image: url(/theme/eldy/img/menus/money.png);
}

div.mainmenu.agenda {
	background-image: url(/theme/eldy/img/menus/agenda.png);
}

div.mainmenu.bank {
    background-image: url(/theme/eldy/img/menus/bank.png);
}

div.mainmenu.bookmark {
}

div.mainmenu.cashdesk {
	background-image: url(/theme/eldy/img/menus/pointofsale.png);
}

div.mainmenu.click2dial {
}

div.mainmenu.companies {
	background-image: url(/theme/eldy/img/menus/company.png);
}

div.mainmenu.commercial {
	background-image: url(/theme/eldy/img/menus/commercial.png);
}

div.mainmenu.ecm {
	background-image: url(/theme/eldy/img/menus/ecm.png);
}

div.mainmenu.externalsite {
	background-image: url(/theme/eldy/img/menus/externalsite.png);
}

div.mainmenu.ftp {
    background-image: url(/theme/eldy/img/menus/tools.png);
}

div.mainmenu.gravatar {
}

div.mainmenu.geopipmaxmind {
}

div.mainmenu.hrm {
	background-image: url(/theme/eldy/img/menus/holiday.png);
}

div.mainmenu.members {
	background-image: url(/theme/eldy/img/menus/members.png);
}

div.mainmenu.paypal {
}

div.mainmenu.products {
	background-image: url(/theme/eldy/img/menus/products.png);
	margin-left: 10px;
}

div.mainmenu.project {
	background-image: url(/theme/eldy/img/menus/project.png);
}

div.mainmenu.tools {
	background-image: url(/theme/eldy/img/menus/tools.png);
}

div.mainmenu.shop {
	background-image: url(/theme/eldy/img/menus/shop.png);
}

div.mainmenu.webservices {
}

div.mainmenu.google {
	background-image: url(/theme/eldy/img/menus/globe.png);
}


/* A mainmenu entry but img file comptabilite.png not found (check /comptabilite/img/comptabilite.png), so we use a generic one */
div.mainmenu.comptabilite {
	background-image: url(/theme/eldy/img/menus/generic1.png);
}
/* A mainmenu entry but img file margin.png not found (check /margin/img/margin.png), so we use a generic one */
div.mainmenu.margin {
	background-image: url(/theme/eldy/img/menus/generic2.png);
}
/* A mainmenu entry but img file propal.png not found (check /propal/img/propal.png), so we use a generic one */
div.mainmenu.propal {
	background-image: url(/theme/eldy/img/menus/generic3.png);
}
/* A mainmenu entry but img file workflow.png not found (check /workflow/img/workflow.png), so we use a generic one */
div.mainmenu.workflow {
	background-image: url(/theme/eldy/img/menus/generic4.png);
}
/* A mainmenu entry but img file cron.png not found (check /cron/img/cron.png), so we use a generic one */
div.mainmenu.cron {
	background-image: url(/theme/eldy/img/menus/generic4.png);
}
/* A mainmenu entry but img file skype.png not found (check /skype/img/skype.png), so we use a generic one */
div.mainmenu.skype {
	background-image: url(/theme/eldy/img/menus/generic4.png);
}
/* A mainmenu entry but img file externalsite.png not found (check /externalsite/img/externalsite.png), so we use a generic one */
div.mainmenu.externalsite {
	background-image: url(/theme/eldy/img/menus/generic4.png);
}
/* A mainmenu entry but img file ftp.png not found (check /ftp/img/ftp.png), so we use a generic one */
div.mainmenu.ftp {
	background-image: url(/theme/eldy/img/menus/generic4.png);
}
/* A mainmenu entry but img file boutique.png not found (check /boutique/img/boutique.png), so we use a generic one */
div.mainmenu.boutique {
	background-image: url(/theme/eldy/img/menus/generic4.png);
}
/* A mainmenu entry but img file mailmanspip.png not found (check /mailmanspip/img/mailmanspip.png), so we use a generic one */
div.mainmenu.mailmanspip {
	background-image: url(/theme/eldy/img/menus/generic4.png);
}
/* A mainmenu entry but img file ldap.png not found (check /ldap/img/ldap.png), so we use a generic one */
div.mainmenu.ldap {
	background-image: url(/theme/eldy/img/menus/generic4.png);
}
/* A mainmenu entry but img file notification.png not found (check /notification/img/notification.png), so we use a generic one */
div.mainmenu.notification {
	background-image: url(/theme/eldy/img/menus/generic4.png);
}
/* A mainmenu entry but img file product.png not found (check /product/img/product.png), so we use a generic one */
div.mainmenu.product {
	background-image: url(/theme/eldy/img/menus/generic4.png);
}


.tmenuimage {
    padding:0 0 0 0 !important;
    margin:0 0px 0 0 !important;
}



/* Login */

.bodylogin
{
	background: #ffffff url(/theme/eldy/img/headbg2.jpg) 0 0 no-repeat;
}
form#login {
	margin-top: 60px;
	margin-bottom: 30px;
	font-size: 13px;
	vertical-align: middle;
}
.login_table_title {
	max-width: 540px;
	color: #888888;
	text-shadow: 1px 1px 1px #FFF;
}
.login_table label {
	text-shadow: 1px 1px 1px #FFF;
}
.login_table {
	margin-left: 10px;
	margin-right: 10px;
	padding-left:6px;
	padding-right:6px;
	padding-top:12px;
	padding-bottom:12px;
	max-width: 540px;
	border: 1px solid #C0C0C0;
	background-color: #E0E0E0;

    -moz-box-shadow: 3px 3px 4px #DDD;
    -webkit-box-shadow: 3px 3px 4px #DDD;
    box-shadow: 3px 3px 4px #DDD;

	border-radius: 8px;
	border:solid 1px rgba(168,168,168,.4);
	border-top:solid 1px f8f8f8;
	background-color: #f8f8f8;
	background-image: -o-linear-gradient(top, rgba(250,250,250,.6) 0%, rgba(192,192,192,.3) 100%);
	background-image: -moz-linear-gradient(top, rgba(250,250,250,.6) 0%, rgba(192,192,192,.3) 100%);
	background-image: -webkit-linear-gradient(top, rgba(250,250,250,.6) 0%, rgba(192,192,192,.3) 100%);
	background-image: -ms-linear-gradient(top, rgba(250,250,250,.6) 0%, rgba(192,192,192,.3) 100%);
	background-image: linear-gradient(top, rgba(250,250,250,.6) 0%, rgba(192,192,192,.3) 100%);
}
div#login_left, div#login_right {
	display: inline-block;
	min-width: 245px;
	padding-top: 10px;
	text-align: center;
	vertical-align: middle;
}
table.login_table tr td table.none tr td {
	padding: 2px;
}
#securitycode {
	min-width: 60px;
}
#img_securitycode {
	border: 1px solid #DDDDDD;
}
#img_logo {
	max-width: 200px;
	max-height: 100px;
}

div.login_block {
	position: absolute;
	right: 5px;
	top: 3px;
	font-weight: bold;
	max-width: 110px;
	}
div.login_block table {
	display: inline;
}
div.login {
	white-space:nowrap;
	font-weight: bold;
	float: right;
}
div.login a {
	color: #444;
}
div.login a:hover {
	color: #444;
	text-decoration:underline;
}
div.login_block_user, div.login_block_other { clear: both; }
div.login_block_other { padding-top: 3px; }
.login_block_elem {
	float: right;
	vertical-align: top;
	padding: 0px 0px 0px 4px !important;
	height: 16px;
}
.alogin, .alogin:hover {
	color: #888 !important;
	font-weight: normal !important;
	font-size: 12px !important;
}
.alogin:hover {
	text-decoration:underline !important;
}
img.login, img.printer, img.entity {
	/* padding: 0px 0px 0px 4px; */
	/* margin: 0px 0px 0px 8px; */
	text-decoration: none;
	color: white;
	font-weight: bold;
}


/* ============================================================================== */
/* Menu gauche                                                                    */
/* ============================================================================== */

div.vmenu, td.vmenu {
    margin-right: 2px;
    position: relative;
    float: left;
    padding: 0px;
    padding-bottom: 0px;
    padding-top: 1px;
    width: 174px;
}

.vmenu {
	margin-left: 4px;
	}

.menu_contenu { padding-top: 1px; }

a.vmenu:link, a.vmenu:visited, a.vmenu:hover, a.vmenu:active { font-size:12px; font-family: arial,tahoma,verdana,helvetica; text-align: left; font-weight: bold; }
font.vmenudisabled  { font-size:12px; font-family: arial,tahoma,verdana,helvetica; text-align: left; font-weight: bold; color: #93a5aa; }
a.vmenu:link, a.vmenu:visited { color: #444; }

a.vsmenu:link, a.vsmenu:visited, a.vsmenu:hover, a.vsmenu:active { font-size:12px; font-family: arial,tahoma,verdana,helvetica; text-align: left; font-weight: normal; color: #202020; margin: 1px 1px 1px 8px; }
font.vsmenudisabled { font-size:12px; font-family: arial,tahoma,verdana,helvetica; text-align: left; font-weight: normal; color: #93a5aa; }
a.vsmenu:link, a.vsmenu:visited { color: #444; }
font.vsmenudisabledmargin { margin: 1px 1px 1px 8px; }

a.help:link, a.help:visited, a.help:hover, a.help:active { font-size:12px; font-family: arial,tahoma,verdana,helvetica; text-align: left; font-weight: normal; color: #666666; text-decoration: none; }


div.blockvmenupair, div.blockvmenuimpair, div.blockvmenubookmarks
{
	font-family: arial,tahoma,verdana,helvetica;
	color: #000000;
	text-align: left;
	text-decoration: none;
    padding-left: 5px;
    padding-right: 1px;
    padding-top: 3px;
    padding-bottom: 3px;
    margin: 1px 0px 8px 2px;


    background-image: -o-linear-gradient(bottom, rgb(240,240,240) 0px, rgb(255,255,255) 3px);
    background-image: -moz-linear-gradient(bottom, rgb(240,240,240) 0px, rgb(255,255,255) 3px);
    background-image: -webkit-linear-gradient(right, rgb(240,240,240) 0px, rgb(255,255,255) 3px);
    background-image: -ms-linear-gradient(bottom, rgb(240,240,240) 0px, rgb(255,255,255) 3px);
    background-image: linear-gradient(bottom, rgb(240,240,240) 0px, rgb(255,255,255) 3px);

    border-left: 1px solid #CCCCCC;
    border-right: 1px solid #D0D0D0;
    border-bottom: 1px solid #DDDDDD;
    border-top: 1px solid #DDDDDD;
    border-radius: 5px;
	-moz-border-radius: 5px;
    -moz-box-shadow: 3px 3px 4px #DDD;
    -webkit-box-shadow: 3px 3px 4px #DDD;
    box-shadow: 3px 3px 4px #DDD;
}

div.blockvmenusearch
{
	font-family: arial,tahoma,verdana,helvetica;
	color: #000000;
	text-align: left;
	text-decoration: none;
    padding-left: 5px;
    padding-right: 1px;
    padding-top: 3px;
    padding-bottom: 3px;
    margin: 1px 0px 8px 2px;
	background: #E3E6E8;

    background-image: -o-linear-gradient(bottom, rgb(255,255,255) 90%, rgb(240,240,240) 100%);
    background-image: -moz-linear-gradient(bottom, rgb(255,255,255) 90%, rgb(240,240,240) 100%);
    background-image: -webkit-linear-gradient(bottom, rgb(255,255,255) 90%, rgb(240,240,240) 100%);
    background-image: -ms-linear-gradient(bottom, rgb(255,255,255) 90%, rgb(240,240,240) 100%);
    background-image: linear-gradient(bottom, rgb(255,255,255) 90%, rgb(240,240,240) 100%);

    border-left: 1px solid #DDDDDD;
    border-right: 1px solid #CCCCCC;
    border-bottom: 1px solid #CCCCCC;
    border-top: 1px solid #E8E8E8;
    border-radius: 5px;
	-moz-border-radius: 5px;
    -moz-box-shadow: 3px 3px 4px #DDD;
    -webkit-box-shadow: 3px 3px 4px #DDD;
    box-shadow: 3px 3px 4px #DDD;
}

div.blockvmenubookmarksold
{
    border-right: 1px solid #555555;
    border-bottom: 1px solid #555555;
    font-family: arial,tahoma,verdana,helvetica;
    color: #000000;
    text-align: left;
    text-decoration: none;
    padding-left: 5px;
    padding-right: 1px;
    padding-top: 3px;
    padding-bottom: 3px;
    margin: 6px 0px 8px 2px;
    background: #E3E6E8;

    background-image: -o-linear-gradient(bottom, rgb(230,232,232) 90%, rgb(240,240,240) 100%);
    background-image: -moz-linear-gradient(bottom, rgb(230,232,232) 90%, rgb(240,240,240) 100%);
    background-image: -webkit-linear-gradient(bottom, rgb(230,232,232) 90%, rgb(240,240,240) 100%);
    background-image: -ms-linear-gradient(bottom, rgb(230,232,232) 90%, rgb(240,240,240) 100%);
    background-image: linear-gradient(bottom, rgb(230,232,232) 90%, rgb(240,240,240) 100%);

    border-left: 1px solid #CCCCCC;
    border-right: 1px solid #BBBBBB;
    border-bottom: 1px solid #BBBBBB;
	border-radius: 5px;
	-moz-border-radius: 5px;
    -moz-box-shadow: 3px 3px 4px #DDD;
    -webkit-box-shadow: 3px 3px 4px #DDD;
    box-shadow: 3px 3px 4px #DDD;
}

div.blockvmenuhelp
{
	font-family: arial,tahoma,verdana,helvetica;
	color: #000000;
	text-align: center;
	text-decoration: none;
    padding-left: 0px;
    padding-right: 3px;
    padding-top: 3px;
    padding-bottom: 3px;
    margin: 4px 0px 0px 0px;
}


td.barre {
	border-right: 1px solid #000000;
	border-bottom: 1px solid #000000;
	background: #b3c5cc;
	font-family: arial,tahoma,verdana,helvetica;
	color: #000000;
	text-align: left;
	text-decoration: none;
}

td.barre_select {
	background: #b3c5cc;
	color: #000000;
}

td.photo {
	background: #F4F4F4;
	color: #000000;
    border: 1px solid #b3c5cc;
}

/* ============================================================================== */
/* Panes for Main                                                   */
/* ============================================================================== */

/*
 *  PANES and CONTENT-DIVs
 */

#mainContent, #leftContent .ui-layout-pane {
    padding:    0px;
    overflow:	auto;
}

#mainContent, #leftContent .ui-layout-center {
	padding:    0px;
	position:   relative; /* contain floated or positioned elements */
    overflow:   auto;  /* add scrolling to content-div */
}


/* ============================================================================== */
/* Toolbar for ECM or Filemanager                                                 */
/* ============================================================================== */

.largebutton {
    background-image: -o-linear-gradient(bottom, rgba(200,200,200,0.1) 0%, rgba(255,255,255,0.3) 120%) !important;
    background-image: -moz-linear-gradient(bottom, rgba(200,200,200,0.1) 0%, rgba(255,255,255,0.3) 120%) !important;
    background-image: -webkit-linear-gradient(bottom, rgba(200,200,200,0.1) 0%, rgba(255,255,255,0.3) 120%) !important;
    background-image: -ms-linear-gradient(bottom, rgba(200,200,200,0.1) 0%, rgba(255,255,255,0.3) 120%) !important;
    background-image: linear-gradient(bottom, rgba(200,200,200,0.1) 0%, rgba(255,255,255,0.3) 120%) !important;
    background: #FFF;
    background-repeat: repeat-x !important;
	border: 1px solid #CCC !important;

    -moz-border-radius: 5px 5px 5px 5px !important;
	-webkit-border-radius: 5px 5px 5px 5px !important;
	border-radius: 5px 5px 5px 5px !important;
    -moz-box-shadow: 2px 2px 4px #DDD;
    -webkit-box-shadow: 2px 2px 4px #DDD;
    box-shadow: 2px 2px 4px #DDD;

    padding: 0 4px 0 4px !important;
    min-height: 32px;
}


a.toolbarbutton {
    margin-top: 0px;
    margin-left: 4px;
    margin-right: 4px;
    height: 30px;
}
img.toolbarbutton {
	margin-top: 1px;
    height: 30px;
}

/* ============================================================================== */
/* Panes for ECM or Filemanager                                                   */
/* ============================================================================== */

#containerlayout .layout-with-no-border {
    border: 0 !important;
    border-width: 0 !important;
}

#containerlayout .layout-padding {
    padding: 2px !important;
}

/*
 *  PANES and CONTENT-DIVs
 */
#containerlayout .ui-layout-pane { /* all 'panes' */
    background: #FFF;
    border:     1px solid #BBB;
    /* DO NOT add scrolling (or padding) to 'panes' that have a content-div,
       otherwise you may get double-scrollbars - on the pane AND on the content-div
    */
    padding:    0px;
    overflow:   auto;
}
/* (scrolling) content-div inside pane allows for fixed header(s) and/or footer(s) */
#containerlayout .ui-layout-content {
	padding:    10px;
	position:   relative; /* contain floated or positioned elements */
	overflow:   auto; /* add scrolling to content-div */
}


/*
 *  RESIZER-BARS
 */
.ui-layout-resizer  { /* all 'resizer-bars' */
	width: 8px !important;
}
.ui-layout-resizer-hover    {   /* affects both open and closed states */
}
/* NOTE: It looks best when 'hover' and 'dragging' are set to the same color,
    otherwise color shifts while dragging when bar can't keep up with mouse */
/*.ui-layout-resizer-open-hover ,*/ /* hover-color to 'resize' */
.ui-layout-resizer-dragging {   /* resizer beging 'dragging' */
    background: #DDD;
    width: 8px;
}
.ui-layout-resizer-dragging {   /* CLONED resizer being dragged */
    border-left:  1px solid #BBB;
    border-right: 1px solid #BBB;
}
/* NOTE: Add a 'dragging-limit' color to provide visual feedback when resizer hits min/max size limits */
.ui-layout-resizer-dragging-limit { /* CLONED resizer at min or max size-limit */
    background: #E1A4A4; /* red */
}
.ui-layout-resizer-closed {
    background-color: #DDDDDD;
}
.ui-layout-resizer-closed:hover {
    background-color: #EEDDDD;
}
.ui-layout-resizer-sliding {    /* resizer when pane is 'slid open' */
    opacity: .10; /* show only a slight shadow */
    filter:  alpha(opacity=10);
}
.ui-layout-resizer-sliding-hover {  /* sliding resizer - hover */
    opacity: 1.00; /* on-hover, show the resizer-bar normally */
    filter:  alpha(opacity=100);
}
/* sliding resizer - add 'outside-border' to resizer on-hover */
/* this sample illustrates how to target specific panes and states */
/*.ui-layout-resizer-north-sliding-hover  { border-bottom-width:  1px; }
.ui-layout-resizer-south-sliding-hover  { border-top-width:     1px; }
.ui-layout-resizer-west-sliding-hover   { border-right-width:   1px; }
.ui-layout-resizer-east-sliding-hover   { border-left-width:    1px; }
*/

/*
 *  TOGGLER-BUTTONS
 */
.ui-layout-toggler {
        border-top: 1px solid #AAA; /* match pane-border */
    border-right: 1px solid #AAA; /* match pane-border */
    border-bottom: 1px solid #AAA; /* match pane-border */
    background-color: #DDD;
    top: 5px !important;
	}
.ui-layout-toggler-open {
	height: 54px !important;
	width: 7px !important;
    -moz-border-radius:0px 10px 10px 0px;
	-webkit-border-radius:0px 10px 10px 0px;
	border-radius:0px 10px 10px 0px;
}
.ui-layout-toggler-closed {
	height: 54px !important;
	width: 7px !important;
    -moz-border-radius:0px 10px 10px 0px;
	-webkit-border-radius:0px 10px 10px 0px;
	border-radius:0px 10px 10px 0px;
}
.ui-layout-toggler .content {	/* style the text we put INSIDE the togglers */
    color:          #666;
    font-size:      12px;
    font-weight:    bold;
    width:          100%;
    padding-bottom: 0.35ex; /* to 'vertically center' text inside text-span */
}

/* hide the toggler-button when the pane is 'slid open' */
.ui-layout-resizer-sliding  ui-layout-toggler {
    display: none;
}

.ui-layout-north {
	height: 54px !important;
}


/* ECM */

#containerlayout .ecm-layout-pane { /* all 'panes' */
    background: #FFF;
    border:     1px solid #BBB;
    /* DO NOT add scrolling (or padding) to 'panes' that have a content-div,
       otherwise you may get double-scrollbars - on the pane AND on the content-div
    */
    padding:    0px;
    overflow:   auto;
}
/* (scrolling) content-div inside pane allows for fixed header(s) and/or footer(s) */
#containerlayout .ecm-layout-content {
	padding:    10px;
	position:   relative; /* contain floated or positioned elements */
	overflow:   auto; /* add scrolling to content-div */
}

.ecm-layout-toggler {
    border-top: 1px solid #AAA; /* match pane-border */
    border-right: 1px solid #AAA; /* match pane-border */
    border-bottom: 1px solid #AAA; /* match pane-border */
    background-color: #CCC;
    }
.ecm-layout-toggler-open {
	height: 48px !important;
	width: 6px !important;
    -moz-border-radius:0px 10px 10px 0px;
	-webkit-border-radius:0px 10px 10px 0px;
	border-radius:0px 10px 10px 0px;
}
.ecm-layout-toggler-closed {
	height: 48px !important;
	width: 6px !important;
}

.ecm-layout-toggler .content {	/* style the text we put INSIDE the togglers */
    color:          #666;
    font-size:      12px;
    font-weight:    bold;
    width:          100%;
    padding-bottom: 0.35ex; /* to 'vertically center' text inside text-span */
}
#ecm-layout-west-resizer {
	width: 6px !important;
}

.ecm-layout-resizer  { /* all 'resizer-bars' */
    border:         1px solid #BBB;
    border-width:   0;
    }
.ecm-layout-resizer-closed {
}

.ecm-in-layout-center {
    border-left: 1px !important;
    border-right: 0px !important;
    border-top: 0px !important;
}

.ecm-in-layout-south {
    border-left: 0px !important;
    border-right: 0px !important;
    border-bottom: 0px !important;
    padding: 4px 0 4px 4px !important;
}



/* ============================================================================== */
/* Onglets                                                                        */
/* ============================================================================== */
div.tabs {
/*    margin: 0px 0px 2px 6px;
    padding: 0px 6px 3px 0px; */
    text-align: left;
    margin-left: 4px !important;
	clear:both;
	height:100%;
}
div.tabsElem { margin-top: 8px; }		/* To avoid overlap of tabs when not browser */

div.tabBar {
    color: #444;
    padding-top: 9px;
    padding-left: 8px;
    padding-right: 8px;
    padding-bottom: 8px;
    margin: 0px 0px 14px 0px;
    -moz-border-radius:6px;
    -webkit-border-radius: 6px;
	border-radius: 6px;
    border-right: 1px solid #CCCCCC;
    border-bottom: 1px solid #CCCCCC;
    border-left: 1px solid #D0D0D0;
    border-top: 1px solid #D8D8D8;
	width: auto;
	background-image: -o-linear-gradient(bottom, rgba(234,234,234, 0.5) 25%, rgba(210,210,210, 0.5) 100%);
	background-image: -moz-linear-gradient(bottom, rgba(234,234,234, 0.5) 25%, rgba(210,210,210, 0.5) 100%);
	background-image: -webkit-linear-gradient(bottom, rgba(234,234,234, 0.5) 25%, rgba(210,210,210, 0.5) 100%);
	background-image: -ms-linear-gradient(bottom, rgba(234,234,234, 0.5) 25%, rgba(210,210,210, 0.5) 100%);
	background-image: linear-gradient(bottom, rgba(234,234,234, 0.5) 25%, rgba(210,210,210, 0.5) 100%);
    -moz-box-shadow: 3px 3px 4px #DDD;
    -webkit-box-shadow: 3px 3px 4px #DDD;
    box-shadow: 3px 3px 4px #DDD;
}

div.tabsAction {
    margin: 20px 0em 10px 0em;
    padding: 0em 0em;
    text-align: right;
}


a.tabTitle {
/*    background: #657090;
    color: white;*/
    color:rgba(0,0,0,.5);
    margin-right:10px;
    text-shadow:1px 1px 1px #ffffff;
	font-family: arial,tahoma,verdana,helvetica;
	font-weight: normal;
    padding: 4px 6px 2px 6px;
    margin: 0px 6px;
    text-decoration: none;
    white-space: nowrap;
}

a.tab:link, a.tab:visited, a.tab:hover, a.tab#active {
	font-family: arial,tahoma,verdana,helvetica;
	padding: 5px 12px 5px;
	/*	padding: 3px 6px 2px 6px;*/
    margin: 0em 0.2em;
    text-decoration: none;
    white-space: nowrap;

    -moz-border-radius:6px 6px 0px 0px;
	-webkit-border-radius:6px 6px 0px 0px;
	border-radius:6px 6px 0px 0px;

	-moz-box-shadow: 0 -1px 4px rgba(0,0,0,.1);
	-webkit-box-shadow: 0 -1px 4px rgba(0,0,0,.1);
	box-shadow: 0 -1px 4px rgba(0,0,0,.1);

	border-bottom: none;
	border-right: 1px solid #CCCCCC;
	border-left: 1px solid #D0D0D0;
	border-top: 1px solid #D8D8D8;

    background-image: -o-linear-gradient(bottom, rgb(255,255,255) 35%, rgb(240,240,240) 100%);
    background-image: -moz-linear-gradient(bottom, rgb(255,255,255) 35%, rgb(240,240,240) 100%);
    background-image: -webkit-linear-gradient(bottom, rgb(255,255,255) 35%, rgb(240,240,240) 100%);
    background-image: -ms-linear-gradient(bottom, rgb(255,255,255) 35%, rgb(240,240,240) 100%);
    background-image: linear-gradient(bottom, rgb(255,255,255) 35%, rgb(240,240,240) 100%);
	background-image: none !important;
}

.tabactive {
/*    border-bottom: 1px solid rgb(234,234,234) !important; */
	background: rgba(210,210,210, 0.5)  url(/theme/eldy/img/nav-overlay3.png) 50% 0 repeat-x;
	/*background-image: none !important; */
	color: #444;
}
a.tab:hover
{
	background: rgba(234,234,234, 0.5)  url(/theme/eldy/img/nav-overlay3.png) 50% 0 repeat-x;
	color: #444;
}
a.tab:link, a.tab:visited
{
	/* color: #888; */
	/* font-weight: normal !important; */
}
a.tabimage {
    color: #434956;
	font-family: arial,tahoma,verdana,helvetica;
    text-decoration: none;
    white-space: nowrap;
}

td.tab {
    background: #dee7ec;
}

span.tabspan {
    background: #dee7ec;
    color: #434956;
	font-family: arial,tahoma,verdana,helvetica;
    padding: 0px 6px;
    margin: 0em 0.2em;
    text-decoration: none;
    white-space: nowrap;
    -moz-border-radius:6px 6px 0px 0px;
	-webkit-border-radius:6px 6px 0px 0px;
	border-radius:6px 6px 0px 0px;

    border-right: 1px solid #555555;
    border-left: 1px solid #D8D8D8;
    border-top: 1px solid #D8D8D8;
}

/* ============================================================================== */
/* Boutons actions                                                                */
/* ============================================================================== */

div.divButAction { margin-bottom: 1.4em; }

.butAction, .butAction:link, .butAction:visited, .butAction:hover, .butAction:active, .butActionDelete, .butActionDelete:link, .butActionDelete:visited, .butActionDelete:hover, .butActionDelete:active {
	font-family: arial,tahoma,verdana,helvetica;
	font-weight: bold;
	background: white;
	border: 1px solid #8CACBB;
	color: #434956;
	text-decoration: none;
	white-space: nowrap;
	padding: 0.4em 0.7em;
	margin: 0em 0.9em;
    -moz-border-radius:0px 5px 0px 5px;
	-webkit-border-radius:0px 5px 0px 5px;
	border-radius:0px 5px 0px 5px;
    -moz-box-shadow: 2px 2px 3px #DDD;
    -webkit-box-shadow: 2px 2px 3px #DDD;
    box-shadow: 2px 2px 3px #DDD;
}

.butAction:hover   {
	background: #dee7ec;
}

.butActionDelete, .butActionDelete:link, .butActionDelete:visited, .butActionDelete:hover, .butActionDelete:active {
	border: 1px solid #997777;
}

.butActionDelete:hover {
	background: #FFe7ec;
}

.butActionRefused {
	font-family: arial,tahoma,verdana,helvetica !important;
	font-weight: bold !important;
	background: white !important;
	border: 1px solid #AAAAAA !important;
	color: #AAAAAA !important;
	text-decoration: none !important;
	white-space: nowrap !important;
	cursor: not-allowed;
	padding: 0.4em 0.7em;
	margin: 0em 0.7em;
    -moz-border-radius:0px 5px 0px 5px;
	-webkit-border-radius:0px 5px 0px 5px;
	border-radius:0px 5px 0px 5px;
    -moz-box-shadow: 3px 3px 4px #DDD;
    -webkit-box-shadow: 3px 3px 4px #DDD;
    box-shadow: 3px 3px 4px #DDD;
}

.butActionRefused {
	display: none;
}

span.butAction, span.butActionDelete {
	cursor: pointer;
}


/* ============================================================================== */
/* Tables                                                                         */
/* ============================================================================== */

.allwidth {
	width: 100%;
}

#undertopmenu {
	background-repeat: repeat-x;
	margin-top: 0px;
}


.paddingrightonly {
	border-collapse: collapse;
	border: 0px;
	margin-left: 0px;
	padding-left: 0px !important;
	padding-right: 4px !important;
}
.nocellnopadd {
	list-style-type:none;
	margin: 0px !important;
	padding: 0px !important;
}

.notopnoleft {
	border-collapse: collapse;
	border: 0px;
	padding-top: 0px;
	padding-left: 0px;
	padding-right: 16px;
	padding-bottom: 4px;
	margin-right: 0px 0px;
}
.notopnoleftnoright {
	border-collapse: collapse;
	border: 0px;
	padding-top: 0px;
	padding-left: 0px;
	padding-right: 0px;
	padding-bottom: 4px;
	margin: 0px 0px 0px 0px;
}


table.border, table.dataTable, .table-border, .table-border-col, .table-key-border-col, .table-val-border-col, div.border {
	border: 1px solid #D0D0D0;
	border-collapse: collapse;
	padding: 1px 2px 1px 3px;			/* t r b l */
}

table.border td, div.border div div.tagtd {
	padding: 1px 2px 1px 2px;
	border: 1px solid #D0D0D0;
	border-collapse: collapse;
}

td.border, div.tagtable div div.border {
	border-top: 1px solid #000000;
	border-right: 1px solid #000000;
	border-bottom: 1px solid #000000;
	border-left: 1px solid #000000;
}

.table-key-border-col {
	width: 25%;
	vertical-align:top;
}
.table-val-border-col {
	width:auto;
}

/* Main boxes */

table.noborder, table.formdoc, div.noborder {
	width: 100%;

	border-collapse: separate !important;
	border-spacing: 0px;

	border-right-width: 1px;
	border-right-color: #BBBBBB;
	border-right-style: solid;

	border-left-width: 1px;
	border-left-color: #CCCCCC;
	border-left-style: solid;

	border-bottom-width: 1px;
	border-bottom-color: #BBBBBB;
	border-bottom-style: solid;

	margin: 0px 0px 2px 0px;
	/*padding: 1px 2px 1px 2px;*/

	-moz-box-shadow: 3px 3px 4px #DDD;
	-webkit-box-shadow: 3px 3px 4px #DDD;
	box-shadow: 3px 3px 4px #DDD;

	-moz-border-radius: 0.2em;
	-webkit-border-radius: 0.2em;
	border-radius: 0.2em;
}

table.noborder tr, div.noborder form {
	border-top-color: #FEFEFE;

	border-right-width: 1px;
	border-right-color: #BBBBBB;
	border-right-style: solid;

	border-left-width: 1px;
	border-left-color: #BBBBBB;
	border-left-style: solid;
	height: 20px;
}

table.noborder th, table.noborder td, div.noborder form, div.noborder form div {
	padding: 1px 2px 1px 3px;			/* t r b l */
}

table.nobordernopadding {
	border-collapse: collapse !important;
	border: 0px;
}
table.nobordernopadding tr {
	border: 0px !important;
	padding: 0px 0px;
}
table.nobordernopadding td {
	border: 0px !important;
	padding: 0px 0px;
}

/* For lists */

table.liste {
	width: 100%;
	border-collapse: collapse;
	border-top-color: #FEFEFE;

	border-right-width: 1px;
	border-right-color: #BBBBBB;
	border-right-style: solid;

    border-left-width: 1px;
    border-left-color: #CCCCCC;
    border-left-style: solid;

	border-bottom-width: 1px;
	border-bottom-color: #BBBBBB;
	border-bottom-style: solid;

	margin-bottom: 2px;
	margin-top: 0px;

    -moz-box-shadow: 3px 3px 4px #DDD;
    -webkit-box-shadow: 3px 3px 4px #DDD;
    box-shadow: 3px 3px 4px #DDD;
}
table.liste td {
	padding-right: 2px;
}

.tagtable, .table-border { display: table; }
.tagtr, .table-border-row  { display: table-row; }
.tagtd, .table-border-col, .table-key-border-col, .table-val-border-col { display: table-cell; }

tr.liste_titre, tr.liste_titre_sel, form.liste_titre, form.liste_titre_sel, table.dataTable.tr
{
	height: 26px !important;
}
div.liste_titre, tr.liste_titre, tr.liste_titre_sel, form.liste_titre, form.liste_titre_sel, table.dataTable thead tr
{
    background: rgb(140,160,185);
    background-repeat: repeat-x;
		background-image: -o-linear-gradient(bottom, rgba(0,0,0,0.3) 0%, rgba(250,250,250,0.3) 100%);
	background-image: -moz-linear-gradient(bottom, rgba(0,0,0,0.3) 0%, rgba(250,250,250,0.3) 100%);
	background-image: -webkit-linear-gradient(bottom, rgba(0,0,0,0.3) 0%, rgba(250,250,250,0.3) 100%);
	background-image: -ms-linear-gradient(bottom, rgba(0,0,0,0.3) 0%, rgba(250,250,250,0.3) 100%);
	background-image: linear-gradient(bottom, rgba(0,0,0,0.3) 0%, rgba(250,250,250,0.3) 100%);
    font-weight: bold;
	    color: #FFF;
    font-family: arial,tahoma,verdana,helvetica;
    border-bottom: 1px solid #FDFFFF;
    text-align: left;
}
tr.liste_titre th, th.liste_titre, tr.liste_titre td, td.liste_titre, form.liste_titre div, div.liste_titre
{
    font-family: arial,tahoma,verdana,helvetica;
    font-weight: bold;
    border-bottom: 1px solid #FDFFFF;
	text-shadow: 1px 0px 1px #888;
    vertical-align: middle;
}
tr.liste_titre th a, th.liste_titre a, tr.liste_titre td a, td.liste_titre a, form.liste_titre div a, div.liste_titre a {
	text-shadow: none !important;
}
.liste_titre td a {
	text-shadow: none !important;
	color: #FFF;
}
div.liste_titre {
	padding-left: 3px;
}
tr.liste_titre_sel th, th.liste_titre_sel, tr.liste_titre_sel td, td.liste_titre_sel, form.liste_titre_sel div
{
    font-family: arial,tahoma,verdana,helvetica;
    font-weight: normal;
    border-bottom: 1px solid #FDFFFF;
    text-decoration: underline;
	text-shadow: 1px 0px 1px #888;
}
input.liste_titre {
    background: transparent;
    border: 0px;
}

tr.liste_total, form.liste_total {
	background: #F0F0F0;
}
tr.liste_total td, form.liste_total div {
    border-top: 1px solid #DDDDDD;
    color: #332266;
    font-weight: normal;
    white-space: nowrap;
}

.impair:hover {
	border: 0px;
}

.impair, .nohover .impair:hover, tr.impair td.nohover {
	background: linear-gradient(bottom, rgb(242,242,242) 85%, rgb(248,248,248) 100%);
	background: -o-linear-gradient(bottom, rgb(242,242,242) 85%, rgb(248,248,248) 100%);
	background: -moz-linear-gradient(bottom, rgb(242,242,242) 85%, rgb(248,248,248) 100%);
	background: -webkit-linear-gradient(bottom, rgb(242,242,242) 85%, rgb(248,248,248) 100%);
	background: -ms-linear-gradient(bottom, rgb(242,242,242) 85%, rgb(248,248,248) 100%);
	font-family: arial,tahoma,verdana,helvetica;
	border: 0px;
	margin-bottom: 1px;
	color: #202020;
	min-height: 18px; /* seems to not be used */
}

.pair:hover {
	border: 0px;
}

.pair, .nohover .pair:hover, tr.pair td.nohover {
	background: linear-gradient(bottom, rgb(255,255,255) 85%, rgb(255,255,255) 100%);
	background: -o-linear-gradient(bottom, rgb(255,255,255) 85%, rgb(255,255,255) 100%);
	background: -moz-linear-gradient(bottom, rgb(255,255,255) 85%, rgb(255,255,255) 100%);
	background: -webkit-linear-gradient(bottom, rgb(255,255,255) 85%, rgb(255,255,255) 100%);
	background: -ms-linear-gradient(bottom, rgb(255,255,255) 85%, rgb(255,255,255) 100%);
	font-family: arial,tahoma,verdana,helvetica;
	border: 0px;
	margin-bottom: 1px;
	color: #202020;
}

.tableforservicepart1 .impair, .tableforservicepart1 .pair, .tableforservicepart2 .impair, .tableforservicepart2 .pair {
	background: none;
}

/* Disable shadows */
.noshadow {
	-moz-box-shadow: 0px 0px 0px #DDD !important;
	-webkit-box-shadow: 0px 0px 0px #DDD !important;
	box-shadow: 0px 0px 0px #DDD !important;
}

div.tabBar .noborder {
	-moz-box-shadow: 0px 0px 0px #DDD !important;
	-webkit-box-shadow: 0px 0px 0px #DDD !important;
	box-shadow: 0px 0px 0px #DDD !important;
}


/*
 *  Boxes
 */

.tdboxstats {
    background: -o-linear-gradient(bottom, rgb(255,255,255) 85%, rgb(255,255,255) 120%) !important;
    background: -moz-linear-gradient(bottom, rgb(255,255,255) 85%, rgb(255,255,255) 120%) !important;
    background: -webkit-linear-gradient(bottom, rgb(255,255,255) 85%, rgb(255,255,255) 120%) !important;
    background: -ms-linear-gradient(bottom, rgb(255,255,255) 85%, rgb(255,255,255) 120%) !important;
    background: linear-gradient(bottom, rgb(255,255,255) 85%, rgb(255,255,255) 120%) !important;
}

.boxstats {
    float: left;
    margin: 3px;
    padding: 3px;
	/*-moz-box-shadow: 3px 3px 4px #DDD;
    -webkit-box-shadow: 3px 3px 4px #DDD;
    box-shadow: 3px 3px 4px #DDD;
    margin-bottom: 8px !important;*/
    border: 1px solid #AAA;
    text-align: center;
    border-radius: 5px;
}

.boxtable {
    -moz-box-shadow: 3px 3px 4px #DDD;
    -webkit-box-shadow: 3px 3px 4px #DDD;
    box-shadow: 3px 3px 4px #DDD;
    margin-bottom: 8px !important;
}


.box {
    padding-right: 0px;
    padding-left: 0px;
    padding-bottom: 4px;
}

tr.box_titre {
    height: 20px;
    background: rgb(140,160,185);
    background-repeat: repeat-x;
		background-image: linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image: -o-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image: -moz-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image: -webkit-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image: -ms-linear-gradient(top, rgba(255,255,255,.3) 0%, rgba(0,0,0,.3) 100%);
	background-image: -webkit-gradient( linear, left top, left bottom, color-stop(0, rgba(255,255,255,.3)), color-stop(1, rgba(0,0,0,.3)) );
	    color: #FFF;
	text-shadow: 1px 0px 1px #888;
    font-family: arial,tahoma,verdana,helvetica, sans-serif;
    font-weight: bold;
    border-bottom: 1px solid #FDFFFF;
    white-space: nowrap;
}

tr.box_titre td.boxclose {
	width: 30px;
}

tr.box_impair {
    background: -o-linear-gradient(bottom, rgb(242,242,242) 85%, rgb(248,248,248) 100%);
    background: -moz-linear-gradient(bottom, rgb(242,242,242) 85%, rgb(248,248,248) 100%);
    background: -webkit-linear-gradient(bottom, rgb(242,242,242) 85%, rgb(248,248,248) 100%);
    background: -ms-linear-gradient(bottom, rgb(242,242,242) 85%, rgb(248,248,248) 100%);
    background: linear-gradient(bottom, rgb(242,242,242) 85%, rgb(248,248,248) 100%);
    font-family: arial,tahoma,verdana,helvetica;
}

tr.box_pair {
    background: -o-linear-gradient(bottom, rgb(255,255,255) 85%, rgb(255,255,255) 100%);
    background: -moz-linear-gradient(bottom, rgb(255,255,255) 85%, rgb(255,255,255) 100%);
    background: -webkit-linear-gradient(bottom, rgb(255,255,255) 85%, rgb(255,255,255) 100%);
    background: -ms-linear-gradient(bottom, rgb(255,255,255) 85%, rgb(255,255,255) 100%);
    background: linear-gradient(bottom, rgb(255,255,255) 85%, rgb(255,255,255) 100%);
    font-family: arial,tahoma,verdana,helvetica;
}

.formboxfilter {
	vertical-align: middle;
	margin-bottom: 6px;
}
.formboxfilter input[type=image]
{
	top: 5px;
	position: relative;
}






/*
 *   Ok, Warning, Error
 */
.ok      { color: #114466; }
.warning { color: #887711; }
.error   { color: #550000 !important; font-weight: bold; }

div.ok {
  color: #114466;
}

div.warning {
  color: #302020;
  padding: 0.3em 0.3em 0.3em 0.3em;
  margin: 0.5em 0em 0.5em 0em;
  border: 1px solid #e0d0b0;
  -moz-border-radius:6px;
  -webkit-border-radius: 6px;
  border-radius: 6px;
  background: #EFDF9A;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
}

div.error {
  color: #550000; font-weight: bold;
  padding: 0.3em 0.3em 0.3em 0.3em;
  margin: 0.5em 0em 0.5em 0em;
  border: 1px solid #DC9CAB;
  -moz-border-radius:6px;
  -webkit-border-radius: 6px;
  border-radius: 6px;
  background: #EFCFCF;
}

/* Info admin */
div.info {
  color: #302010;
  padding: 0.4em 0.4em 0.4em 0.4em;
  margin: 0.5em 0em 0.5em 0em;
  border: 1px solid #DFBF9A;
  -moz-border-radius:6px;
  -webkit-border-radius: 6px;
  border-radius:6px;
  background: #EFCFAA;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
}


/*
 *   Liens Payes/Non payes
 */

a.normal:link { font-weight: normal }
a.normal:visited { font-weight: normal }
a.normal:active { font-weight: normal }
a.normal:hover { font-weight: normal }

a.impayee:link { font-weight: bold; color: #550000; }
a.impayee:visited { font-weight: bold; color: #550000; }
a.impayee:active { font-weight: bold; color: #550000; }
a.impayee:hover { font-weight: bold; color: #550000; }



/*
 *  Other
 */

.product_line_stock_ok { color: #002200; }
.product_line_stock_too_low { color: #664400; }

.fieldrequired { font-weight: bold; color: #000055; }

.dolgraphtitle { margin-top: 6px; margin-bottom: 4px; }
.dolgraphtitlecssboxes { margin: 0px; }
.legendColorBox, .legendLabel { border: none !important; }
div.dolgraph div.legend, div.dolgraph div.legend div { background-color: rgba(255,255,255,0) !important; }
div.dolgraph div.legend table tbody tr { height: auto; }

.photo {
border: 0px;
/* filter:alpha(opacity=55); */
/* opacity:.55; */
}

.logo_setup
{
	content:url(/theme/eldy/img/logo_setup.svg);
}

div.titre {
	font-family: arial,tahoma,verdana,helvetica;
	font-weight: bold;
	color: rgb(50,50,130);
	text-decoration: none;
	text-shadow: 1px 1px 2px #FFFFFF;
	}

#dolpaymenttable { width: 600px; font-size: 13px; }
#tablepublicpayment { border: 1px solid #CCCCCC !important; width: 100%; }
#tablepublicpayment .CTableRow1  { background-color: #F0F0F0 !important; }
#tablepublicpayment tr.liste_total { border-bottom: 1px solid #CCCCCC !important; }
#tablepublicpayment tr.liste_total td { border-top: none; }

#divsubscribe { width: 700px; }
#tablesubscribe { width: 100%; }




/* ============================================================================== */
/* Formulaire confirmation (When Ajax JQuery is used)                             */
/* ============================================================================== */

.ui-dialog-titlebar {
}
.ui-dialog-content {
    font-size: 12px !important;
}

/* ============================================================================== */
/* Formulaire confirmation (When HTML is used)                                    */
/* ============================================================================== */

table.valid {
    border-top: solid 1px #E6E6E6;
    border-left: solid 1px #E6E6E6;
    border-right: solid 1px #444444;
    border-bottom: solid 1px #555555;
	padding-top: 0px;
	padding-left: 0px;
	padding-right: 0px;
	padding-bottom: 0px;
	margin: 0px 0px;
    background: #D5BAA8;
}

.validtitre {
    background: #D5BAA8;
	font-weight: bold;
}


/* ============================================================================== */
/* Tooltips                                                                       */
/* ============================================================================== */

#tooltip {
position: absolute;
width: 450px;
border-top: solid 1px #BBBBBB;
border-left: solid 1px #BBBBBB;
border-right: solid 1px #444444;
border-bottom: solid 1px #444444;
padding: 2px;
z-index: 3000;
background-color: #EFCFAA;
opacity: 1;
-moz-border-radius:6px;
-webkit-border-radius: 6px;
border-radius: 6px;
}
#tiptip_content {
    background-color: rgb(252,248,246);
	background-color: rgba(252,248,246,0.95);
}

/* ============================================================================== */
/* Calendar                                                                       */
/* ============================================================================== */

img.datecallink { padding-left: 2px !important; padding-right: 2px !important; }

.ui-datepicker-trigger {
	vertical-align: middle;
	cursor: pointer;
}

.bodyline {
	-moz-border-radius: 8px;
	-webkit-border-radius: 8px;
	border-radius: 8px;
	border: 1px #E4ECEC outset;
	padding: 0px;
	margin-bottom: 5px;
}
table.dp {
    width: 180px;
    background-color: #FFFFFF;
    border-top: solid 2px #DDDDDD;
    border-left: solid 2px #DDDDDD;
    border-right: solid 1px #222222;
    border-bottom: solid 1px #222222;
    padding: 0px;
	border-spacing: 0px;
	border-collapse: collapse;
}
.dp td, .tpHour td, .tpMinute td{padding:2px; font-size:10px;}
/* Barre titre */
.dpHead,.tpHead,.tpHour td:Hover .tpHead{
	font-weight:bold;
	background-color:#b3c5cc;
	color:white;
	font-size:11px;
	cursor:auto;
}
/* Barre navigation */
.dpButtons,.tpButtons {
	text-align:center;
	background-color:#617389;
	color:#FFFFFF;
	font-weight:bold;
	cursor:pointer;
}
.dpButtons:Active,.tpButtons:Active{border: 1px outset black;}
.dpDayNames td,.dpExplanation {background-color:#D9DBE1; font-weight:bold; text-align:center; font-size:11px;}
.dpExplanation{ font-weight:normal; font-size:11px;}
.dpWeek td{text-align:center}

.dpToday,.dpReg,.dpSelected{
	cursor:pointer;
}
.dpToday{font-weight:bold; color:black; background-color:#DDDDDD;}
.dpReg:Hover,.dpToday:Hover{background-color:black;color:white}

/* Jour courant */
.dpSelected{background-color:#0B63A2;color:white;font-weight:bold; }

.tpHour{border-top:1px solid #DDDDDD; border-right:1px solid #DDDDDD;}
.tpHour td {border-left:1px solid #DDDDDD; border-bottom:1px solid #DDDDDD; cursor:pointer;}
.tpHour td:Hover {background-color:black;color:white;}

.tpMinute {margin-top:5px;}
.tpMinute td:Hover {background-color:black; color:white; }
.tpMinute td {background-color:#D9DBE1; text-align:center; cursor:pointer;}

/* Bouton X fermer */
.dpInvisibleButtons
{
    border-style:none;
    background-color:transparent;
    padding:0px;
    font-size:9px;
    border-width:0px;
    color:#0B63A2;
    vertical-align:middle;
    cursor: pointer;
}


/* ============================================================================== */
/*  Afficher/cacher                                                               */
/* ============================================================================== */

div.visible {
    display: block;
}

div.hidden {
    display: none;
}

tr.visible {
    display: block;
}

td.hidden {
    display: none;
}


/* ============================================================================== */
/*  Module agenda                                                                 */
/* ============================================================================== */

table.cal_month    { border-spacing: 0px; }
.cal_current_month { border-top: 0; border-left: solid 1px #E0E0E0; border-right: 0; border-bottom: solid 1px #E0E0E0; }
.cal_other_month   { border-top: 0; border-left: solid 1px #C0C0C0; border-right: 0; border-bottom: solid 1px #C0C0C0; }
.cal_current_month_right { border-right: solid 1px #E0E0E0; }
.cal_other_month_right   { border-right: solid 1px #C0C0C0; }
.cal_other_month   { opacity: 0.6; background: #EAEAEA; padding-left: 2px; padding-right: 1px; padding-top: 0px; padding-bottom: 0px; }
.cal_past_month    { opacity: 0.6; background: #EEEEEE; padding-left: 2px; padding-right: 1px; padding-top: 0px; padding-bottom: 0px; }
.cal_current_month { background: #FFFFFF; border-left: solid 1px #E0E0E0; padding-left: 2px; padding-right: 1px; padding-top: 0px; padding-bottom: 0px; }
.cal_today         { background: #FFFFFF; border: solid 2px #6C7C7B; padding-left: 2px; padding-right: 1px; padding-top: 0px; padding-bottom: 0px; }
.cal_past          { }
table.cal_event    { border: none; border-collapse: collapse; margin-bottom: 1px; -webkit-border-radius: 6px; border-radius: 6px;
						-webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.25), 0 1px 2px rgba(0, 0, 0, 0.25);
						moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.25), 0 1px 2px rgba(0, 0, 0, 0.25);
						box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.25), 0 1px 2px rgba(0, 0, 0, 0.25);
						background: -webkit-gradient(linear, left top, left bottom, from(#006aac), to(#00438d));
						}
table.cal_event td { border: none; padding-left: 2px; padding-right: 2px; padding-top: 0px; padding-bottom: 0px; }
ul.cal_event       { padding-right: 2px; padding-top: 1px; border: none; list-style-type: none; margin: 0 auto; padding-left: 0px; padding-start: 0px; -khtml-padding-start: 0px; -o-padding-start: 0px; -moz-padding-start: 0px; -webkit-padding-start: 0px; }
li.cal_event       { border: none; list-style-type: none; }
.cal_event a:link    { color: #111111; font-size: 11px; font-weight: normal !important; }
.cal_event a:visited { color: #111111; font-size: 11px; font-weight: normal !important; }
.cal_event a:active  { color: #111111; font-size: 11px; font-weight: normal !important; }
.cal_event a:hover   { color: #111111; font-size: 11px; font-weight: normal !important; color:rgba(255,255,255,.75); }


/* ============================================================================== */
/*  Ajax - Liste deroulante de l'autocompletion                                   */
/* ============================================================================== */

.ui-widget-content { border: solid 1px rgba(0,0,0,.3); background: #fff; }

.ui-autocomplete-loading { background: white url(/theme/eldy/img/working.gif) right center no-repeat; }
.ui-autocomplete {
	       position:absolute;
	       width:auto;
	       font-size: 1.0em;
	       background-color:white;
	       border:1px solid #888;
	       margin:0px;
/*	       padding:0px; This make combo crazy */
	     }
.ui-autocomplete ul {
	       list-style-type:none;
	       margin:0px;
	       padding:0px;
	     }
.ui-autocomplete ul li.selected { background-color: #D3E5EC;}
.ui-autocomplete ul li {
	       list-style-type:none;
	       display:block;
	       margin:0;
	       padding:2px;
	       height:18px;
	       cursor:pointer;
	     }

/* ============================================================================== */
/*  jQuery - jeditable                                                            */
/* ============================================================================== */

.editkey_textarea, .editkey_ckeditor, .editkey_string, .editkey_email, .editkey_numeric, .editkey_select, .editkey_autocomplete {
	background: url(/theme/eldy/img/edit.png) right top no-repeat;
	cursor: pointer;
}

.editkey_datepicker {
	background: url(/theme/eldy/img/calendar.png) right center no-repeat;
	cursor: pointer;
}

.editval_textarea.active:hover, .editval_ckeditor.active:hover, .editval_string.active:hover, .editval_email.active:hover, .editval_numeric.active:hover, .editval_select.active:hover, .editval_autocomplete.active:hover, .editval_datepicker.active:hover {
	background: white;
	cursor: pointer;
}

.viewval_textarea.active:hover, .viewval_ckeditor.active:hover, .viewval_string.active:hover, .viewval_email.active:hover, .viewval_numeric.active:hover, .viewval_select.active:hover, .viewval_autocomplete.active:hover, .viewval_datepicker.active:hover {
	background: white;
	cursor: pointer;
}

.viewval_hover {
	background: white;
}


/* ============================================================================== */
/* Admin Menu                                                                     */
/* ============================================================================== */

/* CSS for treeview */
.treeview ul { background-color: transparent !important; margin-top: 0; }
.treeview li { background-color: transparent !important; padding: 0 0 0 16px !important; min-height: 20px; }
.treeview .hover { color: black !important; }



/* ============================================================================== */
/*  Show Excel tabs                                                               */
/* ============================================================================== */

.table_data
{
	border-style:ridge;
	border:1px solid;
}
.tab_base
{
	background:#C5D0DD;
	font-weight:bold;
	border-style:ridge;
	border: 1px solid;
	cursor:pointer;
}
.table_sub_heading
{
	background:#CCCCCC;
	font-weight:bold;
	border-style:ridge;
	border: 1px solid;
}
.table_body
{
	background:#F0F0F0;
	font-weight:normal;
	font-family:sans-serif;
	border-style:ridge;
	border: 1px solid;
	border-spacing: 0px;
	border-collapse: collapse;
}
.tab_loaded
{
	background:#222222;
	color:white;
	font-weight:bold;
	border-style:groove;
	border: 1px solid;
	cursor:pointer;
}


/* ============================================================================== */
/*  CSS for color picker                                                          */
/* ============================================================================== */

A.color, A.color:active, A.color:visited {
 position : relative;
 display : block;
 text-decoration : none;
 width : 10px;
 height : 10px;
 line-height : 10px;
 margin : 0px;
 padding : 0px;
 border : 1px inset white;
}
A.color:hover {
 border : 1px outset white;
}
A.none, A.none:active, A.none:visited, A.none:hover {
 position : relative;
 display : block;
 text-decoration : none;
 width : 10px;
 height : 10px;
 line-height : 10px;
 margin : 0px;
 padding : 0px;
 cursor : default;
 border : 1px solid #b3c5cc;
}
.tblColor {
 display : none;
}
.tdColor {
 padding : 1px;
}
.tblContainer {
 background-color : #b3c5cc;
}
.tblGlobal {
 position : absolute;
 top : 0px;
 left : 0px;
 display : none;
 background-color : #b3c5cc;
 border : 2px outset;
}
.tdContainer {
 padding : 5px;
}
.tdDisplay {
 width : 50%;
 height : 20px;
 line-height : 20px;
 border : 1px outset white;
}
.tdDisplayTxt {
 width : 50%;
 height : 24px;
 line-height : 12px;
 font-family : arial,tahoma,verdana,helvetica;
 font-size : 8pt;
 color : black;
 text-align : center;
}
.btnColor {
 width : 100%;
 font-family : arial,tahoma,verdana,helvetica;
 font-size : 10pt;
 padding : 0px;
 margin : 0px;
}
.btnPalette {
 width : 100%;
 font-family : arial,tahoma,verdana,helvetica;
 font-size : 8pt;
 padding : 0px;
 margin : 0px;
}


/* Style to overwrites JQuery styles */
.ui-menu .ui-menu-item a {
    text-decoration:none;
    display:block;
    padding:.2em .4em;
    line-height:1.5;
    zoom:1;
    font-weight: normal;
    font-family:arial,tahoma,verdana,helvetica;
    font-size:1em;
}
.ui-widget {
    font-family:arial,tahoma,verdana,helvetica;
    font-size:12px;
}
.ui-button { margin-left: -2px; padding-top: 1px; }
.ui-button-icon-only .ui-button-text { height: 8px; }
.ui-button-icon-only .ui-button-text, .ui-button-icons-only .ui-button-text { padding: 2px 0px 6px 0px; }
.ui-button-text
{
    line-height: 1em !important;
}
.ui-autocomplete-input { margin: 0; padding: 2px; }


/* ============================================================================== */
/*  CKEditor                                                                      */
/* ============================================================================== */

.cke_editable 
{
	margin: 5px !important;
}
.cke_editor table, .cke_editor tr, .cke_editor td
{
    border: 0px solid #FF0000 !important;
}
span.cke_skin_kama { padding: 0 !important; }
.cke_wrapper { padding: 4px !important; }
a.cke_dialog_ui_button
{
    font-family: arial,tahoma,verdana,helvetica !important;
	background-image: url(/theme/eldy/img/button_bg.png) !important;
	background-position: bottom !important;
    border: 1px solid #C0C0C0 !important;
    -moz-border-radius:0px 5px 0px 5px !important;
	-webkit-border-radius:0px 5px 0px 5px !important;
	border-radius:0px 5px 0px 5px !important;
    -moz-box-shadow: 3px 3px 4px #DDD !important;
    -webkit-box-shadow: 3px 3px 4px #DDD !important;
    box-shadow: 3px 3px 4px #DDD !important;
}
.cke_dialog_ui_hbox_last
{
	vertical-align: bottom ! important;
}
.cke_editable
{
	line-height: 1.4 !important;
	margin: 6px !important;
}


/* ============================================================================== */
/*  File upload                                                                   */
/* ============================================================================== */

.template-upload {
    height: 72px !important;
}


/* ============================================================================== */
/*  JSGantt                                                                       */
/* ============================================================================== */

div.scroll2 {
	width: 450px !important;
}


/* ============================================================================== */
/*  jFileTree                                                                     */
/* ============================================================================== */

.ecmfiletree {
	width: 99%;
	height: 99%;
	background: #FFF;
	padding-left: 2px;
	font-weight: normal;
}

.fileview {
	width: 99%;
	height: 99%;
	background: #FFF;
	padding-left: 2px;
	padding-top: 4px;
	font-weight: normal;
}

div.filedirelem {
    position: relative;
    display: block;
    text-decoration: none;
}

ul.filedirelem {
    padding: 2px;
    margin: 0 5px 5px 5px;
}
ul.filedirelem li {
    list-style: none;
    padding: 2px;
    margin: 0 10px 20px 10px;
    width: 160px;
    height: 120px;
    text-align: center;
    display: block;
    float: left;
    border: solid 1px #DDDDDD;
}

ui-layout-north {

}

ul.ecmjqft {
	font-size: 11px;
	line-height: 16px;
	padding: 0px;
	margin: 0px;
	font-weight: normal;
}

ul.ecmjqft li {
	list-style: none;
	padding: 0px;
	padding-left: 20px;
	margin: 0px;
	white-space: nowrap;
	display: block;
}

ul.ecmjqft a {
	line-height: 16px;
	vertical-align: middle;
	color: #333;
	padding: 0px 0px;
	font-weight:normal;
	display: inline-block !important;
/*	float: left;*/
}
ul.ecmjqft a:active {
	font-weight: bold !important;
}
ul.ecmjqft a:hover {
    text-decoration: underline;
}
div.ecmjqft {
	vertical-align: middle;
	display: inline-block !important;
	text-align: right;
	position:absolute;
	right:4px;
}

/* Core Styles */
.ecmjqft LI.directory { font-weight:normal; background: url(/theme/common/treemenu/folder2.png) left top no-repeat; }
.ecmjqft LI.expanded { font-weight:normal; background: url(/theme/common/treemenu/folder2-expanded.png) left top no-repeat; }
.ecmjqft LI.wait { font-weight:normal; background: url(/theme/eldy/img/working.gif) left top no-repeat; }


/* ============================================================================== */
/*  jNotify                                                                       */
/* ============================================================================== */

.jnotify-container {
	position: fixed !important;
	text-align: center;
	min-width: 480px;
	width: auto;
	padding-left: 10px !important;
	padding-right: 10px !important;
}

/* use or not ? */
div.jnotify-background {
	opacity : 0.95 !important;
    -moz-box-shadow: 3px 3px 4px #888 !important;
    -webkit-box-shadow: 3px 3px 4px #888 !important;
    box-shadow: 3px 3px 4px #888 !important;
}

/* ============================================================================== */
/*  blockUI                                                                      */
/* ============================================================================== */

/*div.growlUI { background: url(check48.png) no-repeat 10px 10px }*/
div.dolEventValid h1, div.dolEventValid h2 {
	color: #567b1b;
	background-color: #e3f0db;
	padding: 5px 5px 5px 5px;
	text-align: left;
}
div.dolEventError h1, div.dolEventError h2 {
	color: #a72947;
	background-color: #d79eac;
	padding: 5px 5px 5px 5px;
	text-align: left;
}

/* ============================================================================== */
/*  Maps                                                                          */
/* ============================================================================== */

.divmap, #google-visualization-geomap-embed-0, #google-visualization-geomap-embed-1, google-visualization-geomap-embed-2 {
    -moz-box-shadow: 0px 0px 10px #AAA;
    -webkit-box-shadow: 0px 0px 10px #AAA;
    box-shadow: 0px 0px 10px #AAA;
}


/* ============================================================================== */
/*  Datatable                                                                     */
/* ============================================================================== */

.sorting_asc  { background: url('/theme/eldy/img/sort_asc.png') no-repeat center right; }
.sorting_desc { background: url('/theme/eldy/img/sort_desc.png') no-repeat center right; }
.sorting_asc_disabled  { background: url('/theme/eldy/img/sort_asc_disabled') no-repeat center right; }
.sorting_desc_disabled { background: url('/theme/eldy/img/sort_desc_disabled') no-repeat center right; }
.paginate_disabled_previous:hover, .paginate_enabled_previous:hover, .paginate_disabled_next:hover, .paginate_enabled_next:hover
{
	font-weight: normal;
}
.paginate_enabled_previous:hover, .paginate_enabled_next:hover
{
	text-decoration: underline !important;
}

/* For jquery plugin combobox */
/* Disable this. It breaks wrapping of boxes
.ui-corner-all { white-space: nowrap; } */


/* ============================================================================== */
/*  JMobile                                                                       */
/* ============================================================================== */

li.ui-li-divider .ui-link {
	color: #FFF !important;
}
.ui-btn {
	margin: 0.1em 2px
}
a.ui-link, a.ui-link:hover, .ui-btn:hover, span.ui-btn-text:hover, span.ui-btn-inner:hover {
	text-decoration: none !important;
}

.ui-btn-inner {
	min-width: .4em;
	padding-left: 10px;
	padding-right: 10px;
		font-size: 12px;
		/* white-space: normal; */		/* Warning, enable this break the truncate feature */
}
.ui-btn-icon-right .ui-btn-inner {
	padding-right: 34px;
}
.ui-btn-icon-left .ui-btn-inner {
	padding-left: 34px;
}
.ui-select .ui-btn-icon-right .ui-btn-inner {
	padding-right: 38px;
}
.ui-select .ui-btn-icon-left .ui-btn-inner {
	padding-left: 38px;
}
.fiche .ui-controlgroup {
	margin: 0px;
	padding-bottom: 0px;
}
div.ui-controlgroup-controls div.tabsElem
{
	margin-top: 2px;
}
div.ui-controlgroup-controls div.tabsElem a
{
	-moz-box-shadow: 0 -3px 6px rgba(0,0,0,.2);
	-webkit-box-shadow: 0 -3px 6px rgba(0,0,0,.2);
	box-shadow: 0 -3px 6px rgba(0,0,0,.2);
}
div.ui-controlgroup-controls div.tabsElem a#active {
	-moz-box-shadow: 0 -3px 6px rgba(0,0,0,.3);
	-webkit-box-shadow: 0 -3px 6px rgba(0,0,0,.3);
	box-shadow: 0 -3px 6px rgba(0,0,0,.3);
}

a.tab span.ui-btn-inner
{
	border: none;
	padding: 0;
}

.ui-link {
	color: rgb(50,50,130);
}
.liste_titre .ui-link {
	color: #FFF !important;
}

a.ui-link {
	word-wrap: break-word;
}

/* force wrap possible onto field overflow does not works */
.formdoc .ui-btn-inner
{
	white-space: normal;
	overflow: hidden;
	text-overflow: hidden;
}

/* Warning: setting this may make screen not beeing refreshed after a combo selection */
.ui-body-c {
	background: #fff;
}

div.ui-radio, div.ui-checkbox
{
	display: inline-block;
	border-bottom: 0px !important;
}
.ui-checkbox input, .ui-radio input {
	height: auto;
	width: auto;
	margin: 4px;
	position: static;
}
div.ui-checkbox label+input, div.ui-radio label+input {
	position: absolute;
}
.ui-mobile fieldset
{
	padding-bottom: 10px; margin-bottom: 4px; border-bottom: 1px solid #AAAAAA !important;
}

ul.ulmenu {
	border-radius: 0;
	-webkit-border-radius: 0;
}

.ui-field-contain label.ui-input-text {
	vertical-align: middle !important;
}
.ui-mobile fieldset {
	border-bottom: none !important;
}

/* Style for first level menu with jmobile */
.ui-bar-b, .lilevel0 {
	border: 1px solid #5f5f7a !important;
    background: rgb(140,160,185);
    background-repeat: repeat-x;
		background-image: -o-linear-gradient(bottom, rgba(0,0,0,0.3) 0%, rgba(250,250,250,0.3) 100%);
	background-image: -moz-linear-gradient(bottom, rgba(0,0,0,0.3) 0%, rgba(250,250,250,0.3) 100%);
	background-image: -webkit-linear-gradient(bottom, rgba(0,0,0,0.3) 0%, rgba(250,250,250,0.3) 100%);
	background-image: -ms-linear-gradient(bottom, rgba(0,0,0,0.3) 0%, rgba(250,250,250,0.3) 100%);
	background-image: linear-gradient(bottom, rgba(0,0,0,0.3) 0%, rgba(250,250,250,0.3) 100%);
    font-weight: bold;
	    color: #FFF !important;
}
.alilevel0 {
    color: #FFF !important;
	text-shadow: 1px 0px 1px #888;
}

.ui-body-c {
	border: 1px solid #ccc;
	text-shadow: none;
}
.ui-btn-up-c, .ui-btn-hover-c {
	border: 1px solid #ccc;
	text-shadow: none;
}
.ui-body-c .ui-link, .ui-body-c .ui-link:visited, .ui-body-c .ui-link:hover {
	color: rgb(50,50,130);
}
.ui-btn-up-c .vsmenudisabled {
	color: #888 !important;
	text-shadow: none !important;
}
.ui-controlgroup-horizontal .ui-btn.ui-first-child {
-webkit-border-top-left-radius: 6px;
border-top-left-radius: 6px;
}
.ui-controlgroup-horizontal .ui-btn.ui-last-child {
-webkit-border-top-right-radius: 6px;
border-top-right-radius: 6px;
}
.alilevel1 {
    color: #FFF !important;
	text-shadow: 1px 0px 1px #888;
}
.lilevel1 {
	background-image: -webkit-gradient(linear,left top,left bottom,from( #ddd ),to( #d1d1d1 )) !important;
	background-image: -webkit-linear-gradient( #ddd,#d1d1d1 ) !important;
	background-image: -moz-linear-gradient( #ddd,#d1d1d1 ) !important;
	background-image: -ms-linear-gradient( #ddd,#d1d1d1 ) !important;
	background-image: -o-linear-gradient( #ddd,#d1d1d1 ) !important;
	background-image: linear-gradient( #ddd,#d1d1d1 ) !important;
}

