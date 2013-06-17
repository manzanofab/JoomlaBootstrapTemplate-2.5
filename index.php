<?php
defined('_JEXEC') or die;
// detecting site title
$app = JFactory::getApplication();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<jdoc:include type="head" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap.min.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap-responsive.min.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/yourstyles.css" type="text/css" media="screen" />
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> 
    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
    <span class="icon-bar"></span> 
    <span class="icon-bar"></span> 
    <span class="icon-bar"></span>
     </a> 
     <a class="brand" href="#">Joomla Bootstrap Free Template by Fabian Manzano</a>
      <div class="nav-collapse">
        <jdoc:include type="modules" name="menu" style="xhtml" />
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="span12">
      <jdoc:include type="modules" name="header" style="xhtml" />
    </div>
  </div>
  <!-- END FIRST ROW -->
    <div class="row" >
    <div class="span6">
      <jdoc:include type="modules" name="half-left" style="xhtml" />
    </div>
    <div class="span6">
      <jdoc:include type="modules" name="half-right" style="xhtml" />
    </div>
  </div>
  <!--!!!!!!!!end ROW!!!!!!!!!--> 
  <div class="row">
    <?php if($this->countModules('small-left')) : ?>
    <div class="span3">
      <jdoc:include type="modules" name="small-left" style="xhtml" />
    </div>
    <div class="span9">
      <jdoc:include type="message" />
      <jdoc:include type="component" />
    </div>
    <?php else: ?>
    <div class="span12">
      <jdoc:include type="message" />
      <jdoc:include type="component" />
    </div>
    <?php endif; ?>
  </div>

</div>
<!--!!!!!!!!end container!!!!!!!!!-->

<footer class="container">
  <div class="row">
    <div class="span6">
      <h4>Contact Information</h4>
      <ul>
        <li><strong class="fabfooter">Phone :</strong> (61) ########</li>
        <li><strong class="fabfooter">Email :</strong> manzanofab@hotmail.com</li>
        <li><strong class="fabfooter">Location :</strong> Sydney, NSW, Australia</li>
      </ul>
    </div>
    <div class="span6">
      <h4>Some other information</h4>
      <jdoc:include type="modules" name="footer" style="xhtml" />
    </div>
  </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> 
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap.min.js"></script> 
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap-carousel.js"></script> 
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap-transition.js"></script> 
<script>
  $('.carousel').carousel({  
  interval: 3000 // in milliseconds  
})  
  </script>
</body>
</html>