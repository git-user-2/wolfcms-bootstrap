<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $this->title(); ?></title>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="robots" content="index, follow" />
  <meta name="description" content="<?php echo ($this->description() != '') ? $this->description() : 'Default description goes here'; ?>" />
  <meta name="keywords" content="<?php echo ($this->keywords() != '') ? $this->keywords() : 'default, keywords, here'; ?>" />
  <meta name="author" content="Author Name" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap Default Theme -->
  <link href="<?php echo THEMES_URI; ?>wolfcms-bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

  <!-- Bootswatch Flatly Theme -->
  <!-- <link href="<?php echo THEMES_URI; ?>wolfcms-bootstrap/bootstrap/css/bootswatch/flatly/bootstrap.min.css" rel="stylesheet" media="screen"> -->
 
  <style type="text/css">
    body {
      padding-top: 20px;
      padding-bottom: 60px;
    }

    /* Custom container */
    .container {
      margin: 0 auto;
      max-width: 1000px;
    }
    .container > hr {
      margin: 60px 0;
    }
  </style>

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="public/themes/wolfcms-bootstrap/bootstrap/js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="icon" href="<?php echo THEMES_URI; ?>simple/images/favicon.ico" />

  <!-- Bootstrap Responsive -->
  <link href="<?php echo THEMES_URI; ?>wolfcms-bootstrap/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

  <!-- RSS -->
  <link rel="alternate" type="application/rss+xml" title="Wolf Default RSS Feed" href="<?php echo URL_PUBLIC.((USE_MOD_REWRITE)?'':'/?'); ?>rss.xml" />

</head>

<body>

  <div class="container">
    <div class="masthead">
      <h3 class="muted">WolfCMS Bootstrap Theme</h3>
      <div class="navbar">
        <div class="navbar-inner">
          <div class="container">
            <ul class="nav">
              <?php
              echo url_match('/') ? '<li class="active"><a ' : '<li><a ';
              echo 'href="' . URL_PUBLIC . '">Home</a></li>' . "\n";
              foreach($this->find('/')->children() as $menu) {
                echo in_array($menu->slug, explode('/', $this->uri())) ? '<li class="active">' : '<li>';
                echo $menu->link($menu->title) . "</li>\n";
              }
              ?>
            </ul>
          </div><!--/.container-->
        </div><!--/.navbar-inner--> 
      </div><!--/.navbar--> 
    </div><!--/.masthead-->

    <!-- Main content -->
    <div class="row-fluid">
      <div class="span12">
        <h2><?php echo $this->title(); ?></h2>
        <?php echo $this->content(); ?> 
        <?php if ($this->hasContent('extended')) echo $this->content('extended'); ?> 
      </div><!--/.span12-->
    </div><!--/.row-fluid-->
  
    <hr>
  
    <div class="row-fluid">
      <footer class="span12">
        <p><span>&copy; <?php echo date('Y'); ?> Author Name. </span> <a href="http://www.wolfcms.org/">Wolf CMS</a> Inside</p>
      </footer><!--/.span12-->
    </div><!--/.row-fluid-->
  </div><!--/.container-->

  <!-- Le javascript -->
  <!-- Any unused scripts should be removed to prevent unnecessary loading -->
  <script src="<?php echo THEMES_URI; ?>wolfcms-bootstrap/bootstrap/js/jquery.js"></script>
  <script src="<?php echo THEMES_URI; ?>wolfcms-bootstrap/bootstrap/js/bootstrap-transition.js"></script>
  <script src="<?php echo THEMES_URI; ?>wolfcms-bootstrap/bootstrap/js/bootstrap-alert.js"></script>
  <script src="<?php echo THEMES_URI; ?>wolfcms-bootstrap/bootstrap/js/bootstrap-modal.js"></script>
  <script src="<?php echo THEMES_URI; ?>wolfcms-bootstrap/bootstrap/js/bootstrap-dropdown.js"></script>
  <script src="<?php echo THEMES_URI; ?>wolfcms-bootstrap/bootstrap/js/bootstrap-scrollspy.js"></script>
  <script src="<?php echo THEMES_URI; ?>wolfcms-bootstrap/bootstrap/js/bootstrap-tab.js"></script>
  <script src="<?php echo THEMES_URI; ?>wolfcms-bootstrap/bootstrap/js/bootstrap-tooltip.js"></script>
  <script src="<?php echo THEMES_URI; ?>wolfcms-bootstrap/bootstrap/js/bootstrap-popover.js"></script>
  <script src="<?php echo THEMES_URI; ?>wolfcms-bootstrap/bootstrap/js/bootstrap-button.js"></script>
  <script src="<?php echo THEMES_URI; ?>wolfcms-bootstrap/bootstrap/js/bootstrap-collapse.js"></script>
  <script src="<?php echo THEMES_URI; ?>wolfcms-bootstrap/bootstrap/js/bootstrap-carousel.js"></script>
  <script src="<?php echo THEMES_URI; ?>wolfcms-bootstrap/bootstrap/js/bootstrap-typeahead.js"></script>
 
</body>
</html>
