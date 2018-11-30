<?php

defined('_JEXEC') or die;

$lnkPath = JURI::base(true).'/templates/ol_escapos/';
$document = JFactory::getDocument(); 
$slider_items    = $this->params->get('slider_items'); 
$slides          = $this->params->get('slides');
$shadows         = $this->params->get('shadows');
$headHeigh	     = $this->params->get('headHeigh');
$socialCode         = $this->params->get ('socialCode');
$ol_title            = $this->params->get('ol_title');
$ol_image            = $this->params->get('ol_image');
$ol_target_url       = $this->params->get('ol_target_url');
$ol_target           = $this->params->get('ol_target');

$document->addStyleSheet($lnkPath.'slider/css/settings.css');

?>

<style>
.tp-banner-container{
width:100% !important;		
position:relative;
padding:0;
margin: 0px;
max-height:550px !important;
overflow:hidden;
}
</style>
<div class="tp-banner-container">
<div class="tp-banner">          
<ul>
<?php foreach ($slider_items as $item) : ?>
<li data-transition="random-static" data-slotamount="1" data-masterspeed="1000" data-title="<?php echo $item->ol_title; ?>" > <img src="<?php echo $item->ol_image; ?>"  alt="<?php echo $item->ol_title; ?>"  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">
</li>
<?php endforeach; ?>
</ul>
<div class="tp-bannertimer"></div>
</div>
</div>

<script type = "text/javascript" src = "<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/slider/js/jquery.tools.min.js"></script>
<script type = "text/javascript" src = "<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/slider/js/jquery.revolution.min.js"></script>		
<script type="text/javascript">
jQuery(document).ready(function() {
jQuery('.tp-banner').revolution(
{
delay:7000,												
startwidth:890,
startheight:550,							
onHoverStop:"on",		
thumbWidth:100,							
thumbHeight:30,
thumbAmount:3,
hideThumbs:10,
navigationType:"none",	
navigationStyle:"preview1",				
touchenabled:"on",			
navOffsetHorizontal:0,
navOffsetVertical:20,
fullWidth:"on",
shadow:0,	
stopLoop:"off"				
});	
});
</script>


