<?php
/*---------------------------------------------------------------
# Package - Joomla Template based on Sboost Framework   
# ---------------------------------------------------------------
# Author - olwebdesign http://www.olwebdesign.com
# Copyright (C) 2008 - 2017 olwebdesign.com. All Rights Reserved.
# Websites: http://www.olwebdesign.com
-----------------------------------------------------------------*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');
require_once(dirname(__FILE__).'/lib/sboost.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language;?>" >
<head>
<?php
$sboost->loadHead();
$sboost->addCSS('template.css,joomla.css,menu.css,override.css,modules.css,ama.css');
if ($sboost->isRTL()) $sboost->addCSS('template_rtl.css');
?>
<?php if($this->params->get('float')=='1') : ?>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/slide.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/js/slide.js"></script> 
<?php endif; ?>
<?php if($this->params->get('social_api_type', '1') == '1') : ?>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/social.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
<?php if($this->params->get('show_awesome')=='1') : ?>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/font-awesome.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/js/custom.js"></script>
</head>
<?php $sboost->addFeatures('ie6warn'); ?>
<?php if ($this->params->get('niceScroll') =="1" ) { ?>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.nicescroll.js"></script> 
<script type="text/javascript">
jQuery(document).ready(
function() { 
jQuery("html").niceScroll();
}
);	
</script>
<?php } ?>
<body class="bg <?php echo $sboost->direction ?> clearfix">
<div id="topbgr" class="clearfix">
<div class="mx-base clearfix">
<div id="mx-top-header" class="clearfix">
<?php $sboost->addFeatures('social'); //social ?>
<?php 
$sboost->addModules('search'); // search
$sboost->addModules('login'); // login
?>
</div>
</div>	
</div>
<div id="menuHeader">
<div class="mx-base">	
<?php 
$sboost->addFeatures('logo');//Logo
?>
<div class="main_menu">
<?php 
$sboost->addModules("mainmenu"); //position mainmenu
?>
</div>
<div class="clearfix"></div>
</div>
</div>

<?php if($this->countModules ( 'page1 or page1-top or page2 or page2-top or page3 or page3-top or page4 or page4-top or page5 or page5-top or page6 or page6-top or page7 or page7-top' )) : ?>
<div id="mx-header" class="mx-header">
<div class="mx-base clearfix">
<nav class="menu menu--ama">
<?php if($this->countModules ( 'page1 or page1-top' )) : ?>
<a class="menu__item" href="#page1">
<span class="menu__item-name"><?php echo ($this->params->get('menu_item1')); ?></span>
</a>
<?php endif; ?>
<?php if($this->countModules ( 'page2 or page2-top' )) : ?>
<a class="menu__item" href="#page2">
<span class="menu__item-name"><?php echo ($this->params->get('menu_item2')); ?></span>
</a>
<?php endif; ?>
<?php if($this->countModules ( 'page3 or page3-top' )) : ?>
<a class="menu__item" href="#page3">
<span class="menu__item-name"><?php echo ($this->params->get('menu_item3')); ?></span>
</a>
<?php endif; ?>
<?php if($this->countModules ( 'page4 or page4-top' )) : ?>
<a class="menu__item" href="#page4">
<span class="menu__item-name"><?php echo ($this->params->get('menu_item4')); ?></span>
</a>
<?php endif; ?>
<?php if($this->countModules ( 'page5 or page5-top' )) : ?>
<a class="menu__item" href="#page5">
<span class="menu__item-name"><?php echo ($this->params->get('menu_item5')); ?></span>
</a>
<?php endif; ?>
<?php if($this->countModules ( 'page6 or page6-top' )) : ?>
<a class="menu__item" href="#page6">
<span class="menu__item-name"><?php echo ($this->params->get('menu_item6')); ?></span>
</a>
<?php endif; ?>
<?php if($this->countModules ( 'page7 or page7-top' )) : ?>
<a class="menu__item" href="#page7">
<span class="menu__item-name"><?php echo ($this->params->get('menu_item7')); ?></span>
</a>
<?php endif; ?>
</nav>
</div>
</div>
<?php endif; ?>
<?php if ($sboost->showSlideItem()): ?>
<?php include 'slider/slider.php'; ?> 
<?php endif; ?>
<div class="mx-base clearfix">
<?php
$sboost->addModules("header"); //position header
?>
</div>
<?php if($this->countModules ( 'page1 or page1-top' )) : ?>
<div id="page1">
<?php $sboost->addModules("video"); //position video ?>
<?php if ($this->countModules ( 'topage1' )!= '' || $this->params->get('TextPage1')!= '' || $this->params->get('TextiPage1')!= '') { ?>
<div id="imgPage1" class="stage">
<div class="info">
<div class="quote"><h1><?php echo htmlspecialchars($this->params->get('TextPage1')); ?></h1><?php echo htmlspecialchars($this->params->get('TextiPage1')); ?>
<div class="container">	
<jdoc:include type="modules" name="topage1"  style="block"  />
</div></div>
</div>
</div>
<?php } ?>
<?php $sboost->addModules("page1-top"); //position page1-top ?>
<div class="mx-base clearfix">
<?php $sboost->addModules("page1"); //position page1 ?>	
</div>
</div>
<?php endif; ?>
<?php if($this->countModules ( 'page2' )) : ?>
<div id="page2">
<?php if ( $this->countModules ( 'topage2' )!= '' || $this->params->get('TextPage2')!= '' || $this->params->get('TextiPage2')!= '') { ?>
<div id="imgPage2" class="stage">
<div class="info">
<div class="quote"><h1><?php echo htmlspecialchars($this->params->get('TextPage2')); ?></h1><?php echo htmlspecialchars($this->params->get('TextiPage2')); ?>
<div class="container">	
<jdoc:include type="modules" name="topage2"  style="block"  />
</div></div>
</div>
</div>
<?php } ?>
<?php $sboost->addModules("page2-top"); //position page1-top ?>
<div class="mx-base clearfix">
<?php $sboost->addModules("page2"); //position page2 ?>	
</div>
</div>
<?php endif; ?>
<?php if($this->countModules ( 'page3' )) : ?>
<div id="page3">
<?php if ( $this->countModules ( 'topage3' )!= '' || $this->params->get('TextPage3')!= '' || $this->params->get('TextiPage3')!= '') { ?>
<div id="imgPage3" class="stage">
<div class="info">
<div class="quote"><h1><?php echo htmlspecialchars($this->params->get('TextPage3')); ?></h1><?php echo htmlspecialchars($this->params->get('TextiPage3')); ?>
<div class="container">	
<jdoc:include type="modules" name="topage3"  style="block"  />
</div></div>
</div>
</div>
<?php } ?>
<?php $sboost->addModules("page3-top"); //position page1-top ?>
<div class="mx-base clearfix">	
<?php $sboost->addModules("page3", 'mx_block'); //position page3 ?>
</div>
</div>
<?php endif; ?>
<?php if($this->countModules ( 'page4' )) : ?>
<div id="page4">
<?php $sboost->addModules("page4wide"); //position page4wide ?>
<?php if ( $this->countModules ( 'topage4' )!= '' || $this->params->get('TextPage4')!= '' || $this->params->get('TextiPage4')!= '') { ?>
<div id="imgPage4" class="stage">
<div class="info">
<div class="quote"><h1><?php echo htmlspecialchars($this->params->get('TextPage4')); ?></h1><?php echo htmlspecialchars($this->params->get('TextiPage4')); ?>
<div class="container">	
<jdoc:include type="modules" name="topage4"  style="block"  />
</div>
</div>
</div>
</div>
<?php } ?>
<?php $sboost->addModules("page4-top"); //position page1-top ?>
<div class="mx-base clearfix">	
<?php $sboost->addModules("page4"); //position page4 ?>
</div>
</div>
<?php endif; ?>
<?php if($this->countModules ( 'page5' )) : ?>
<div id="page5">
<?php if ( $this->countModules ( 'topage5' )!= '' || $this->params->get('TextPage5')!= '' || $this->params->get('TextiPage5')!= '') { ?>
<div id="imgPage5" class="stage">
<div class="info">
<div class="quote"><h1><?php echo htmlspecialchars($this->params->get('TextPage5')); ?></h1><?php echo htmlspecialchars($this->params->get('TextiPage5')); ?>
<div class="container">	
<jdoc:include type="modules" name="topage5"  style="block"  />
</div></div>
</div>
</div>
<?php } ?>
<?php $sboost->addModules("page5-top"); //position page1-top ?>
<div class="mx-base clearfix">	
<?php $sboost->addModules("page5"); //position page5 ?>
</div>
</div>
<?php endif; ?>
<?php if($this->countModules ( 'page6 or gmap' )) : ?>
<div id="page6">
<?php if ( $this->countModules ( 'topage6' )!= '' || $this->params->get('TextPage6')!= '' || $this->params->get('TextiPage6')!= '') { ?>
<div id="imgPage6" class="stage">
<div class="info">
<div class="quote"><h1><?php echo htmlspecialchars($this->params->get('TextPage6')); ?></h1><?php echo htmlspecialchars($this->params->get('TextiPage6')); ?>
<div class="container">	
<jdoc:include type="modules" name="topage6"  style="block"  />
</div></div>
</div>
</div>
<?php } ?>
<?php $sboost->addModules("page6-top"); //position page1-top ?>
<div class="mx-base clearfix">	
<?php $sboost->addModules("page6"); //position page6 ?>
</div>
</div>
<?php endif; ?>
<?php if($this->countModules ( 'page7' )) : ?>
<div id="page7">
<?php if ( $this->countModules ( 'topage7' )!= '' || $this->params->get('TextPage7')!= '' || $this->params->get('TextiPage7')!= '') { ?>
<div id="imgPage7" class="stage">
<div class="info">
<div class="quote"><h1><?php echo htmlspecialchars($this->params->get('TextPage7')); ?></h1><?php echo htmlspecialchars($this->params->get('TextiPage7')); ?>
<div class="container">	
<jdoc:include type="modules" name="topage7"  style="block"  />
</div></div>
</div>
</div>
<?php } ?>
<?php $sboost->addModules("page7-top"); //position page1-top ?>
<div class="mx-base clearfix">	
<?php $sboost->addModules("page7"); //position page7 ?>
</div>
</div>
<?php endif; ?>
<div id="tophead">
<div class="mx-base clearfix">
<?php
$sboost->addModules('top1, top2, top3, top4, top5, top6', 'mx_block', 'mx-userpos'); //positions top1-top6 
?>
</div>
</div>
<div id="mx-basebody">	
<div class="mx-base main-bg clearfix">
<?php 
$sboost->addModules('top', 'mx_xhtml'); //top 
?>
<?php 
$sboost->addModules("breadcrumbs"); //breadcrumbs
?>
<div class="clearfix">
<?php $sboost->loadLayout(); //mainbody ?>
</div>
<?php $sboost->addModules('map', 'mx_xhtml'); //map  ?>
</div>
</div>
<div id="bottsite" class="clearfix">
<?php
$sboost->addModules('bottom1, bottom2, bottom3, bottom4, bottom5, bottom6', 'mx_block', 'mx-bottom', '', false, true); //positions bottom1-bottom6 
?>
</div>


<!--Start Footer-->
<?php
$sboost->addModules('bottom', 'mx_xhtml'); //bottom 
?>
<div id="mx-footer">
<div class="mx-base">
<div id="mx-bft" class="clearfix">
<div class="cp">
<?php $sboost->addFeatures('copyright')  ?>					
</div>
<?php 
$sboost->addFeatures('gotop');			
$sboost->addModules("footer-nav"); 
?>
</div>
</div>
</div>
<!--End Footer-->

<?php 
$sboost->addFeatures('analytics,jquery,ieonly'); /*--- analytics, jquery features ---*/
?>
<jdoc:include type="modules" name="debug" />
</body>
</html>