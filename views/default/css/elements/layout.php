<?php
/**
 * Page Layout
 *
 * Contains CSS for the page shell and page layout
 *
 * Default layout: 100% wide, centered. Used in default page shell
 *
 */
?>
/* <style>
/* ***************************************
	PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/
.elgg-page-default .elgg-page-header > .elgg-inner {width: 100%;margin: 0 auto;height: 60px;}.elgg-page-default .elgg-page-body > .elgg-inner {width: 100%;margin: 0 auto;}

.elgg-page-footer {width: 100%;margin: 0 auto;}.elgg-page-default .elgg-page-footer > .elgg-inner {margin-left: 181px;padding: 8px;}.elgg-page-footer > .elgg-inner:after {display:block;content: '.';clear:both;visibility:hidden;height:0;}


/***** TOPBAR ******/
.elgg-page-topbar {position: fixed;right: 0;left: 0;z-index: 1030;margin-bottom: 0;padding-left: 20px;padding-right: 20px;background:#008080;}.elgg-page-topbar > .elgg-inner {padding-top: 6px;width: 100%;margin: 0 auto;position: relative;}.elgg-page-topbar ~ .elgg-page-body {padding-top: 38px;}

/***** PAGE MESSAGES ******/
.elgg-system-messages {position: fixed;top: 24px;right: 20px;max-width: 500px;z-index: 1000;}.elgg-system-messages li {margin-top: 10px;}.elgg-system-messages li p {margin: 0;}
/***** PAGE HEADER ******/
.elgg-page-header {position: relative;background:#008080;}.elgg-page-header > .elgg-inner {position: relative;}
/***** PAGE BODY LAYOUT ******/
.elgg-layout {min-height: 360px;}.elgg-layout-one-column {padding: 10px 0;}.elgg-sidebar {position: relative;padding: 20px 0;float: left;width: 181px;min-height: 360px;}.elgg-sidebar-alt {position: relative;float: right;width: 244px;margin-left: 20px;min-height: 360px;}.elgg-main {position: relative;min-height: 360px;}.elgg-layout-two-sidebar > .elgg-body,.elgg-layout-one-sidebar > .elgg-body {border: 1px solid #B3B3B3;border-top: 0;padding: 15px 20px;}.elgg-layout > .elgg-body > .elgg-head {padding-bottom: 3px;margin-bottom: 10px;}
/***** PAGE FOOTER ******/
.elgg-page-footer {background:#008080;color:#fff;clear:both;margin-bottom:0px;}
.elgg-page-footer a:hover {color: #666;}
.elgg-page-default .elgg-page-footer > .elgg-inner {border:0;margin-top:20px;margin-bottom:20px;}
/***ajout cadre pour le copyright **/
.elgg-footer-copyright{width:50%;float:left;margin-top:10px;}
/***ajout cadre pour des logos footer **/
.elgg-footer-logos{width:30%;float:right;margin-left:20px;margin-top:3px;}