<?php
/**
 * @package Helios Calendar
 * @subpackage Default Theme
 */
	if(!defined('isHC')){exit(-1);}?>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/_resources/includes/tag-manager.inc"); ?>
    <a class="navbar-brand initial visible-xs-block" href="#"><span class="sr-only">Bard College at Simon's Rock: the Early College</span></a>
      <nav class="navbar navbar-default navbar-fixed-top" id="mainnav">
         <div class="container-fluid">
            <div class="container">
               <div class="navbar-header"><button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand initial hidden-xs" href="#"><span class="sr-only">Bard College at Simon's Rock: the Early College</span></a></div>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
               <div class="navbar-mobile-header"></div>
               <div class="container-fluid supernav">
                  <div id="navbar_l2" class="container">
                     <ul class="nav navbar-nav"><?php include($_SERVER['DOCUMENT_ROOT'] . "/_resources/includes/action-nav.inc"); ?><?php include($_SERVER['DOCUMENT_ROOT'] . "/_resources/includes/search.inc"); ?></ul>
                  </div>
               </div>
               <div class="container-fluid section-nav initial">
                  <div class="container section-nav-inner"><?php include($_SERVER['DOCUMENT_ROOT'] . "/_resources/includes/primary-nav.inc"); ?></div>
               </div><?php include($_SERVER['DOCUMENT_ROOT'] . "/_resources/includes/action-nav-mobile.inc"); ?>
            </div>
         </div>
      </nav>