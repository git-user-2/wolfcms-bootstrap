<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $this->title(); ?></title>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="robots" content="index, follow" />
  <meta name="description" content="<?php echo ($this->description() != '') ? $this->description() : 'Default description goes here'; ?>" />
  <meta name="keywords" content="<?php echo ($this->keywords() != '') ? $this->keywords() : 'default, keywords, here'; ?>" />
  <meta name="author" content="Author Name" />

  <!-- Bootstrap -->
  <link href="/public/themes/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

  <!-- jQuery -->
  <script src="/public/themes/bootstrap/js/jquery.js"></script>

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="public/themes/bootstrap/js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="icon" href="<?php echo THEMES_URI; ?>simple/images/favicon.ico" />

  <!-- Bootstrap Responsive -->
  <link href="/public/themes/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

  <!-- RSS -->
  <link rel="alternate" type="application/rss+xml" title="Wolf Default RSS Feed" href="<?php echo URL_PUBLIC.((USE_MOD_REWRITE)?'':'/?'); ?>rss.xml" />

</head>

<body>

  <!-- Main navbar -->
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container-fluid">
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <small><a class="brand" href="<?php echo URL_PUBLIC; ?>">WolfCMS Bootstrap Responsive Theme</a></small>
        <div class="nav-collapse collapse">
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
        </div><!--/.nav-collapse-->
      </div><!--/.container-fluid--> 
    </div><!--/.navbar-inner-->
  </div><!--/.navbar-->

  <!-- Main content -->
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span8">
        <h2><?php echo $this->title(); ?></h2>
        <?php echo $this->content(); ?> 
        <?php if ($this->hasContent('extended')) echo $this->content('extended'); ?> 
      </div><!--/.span8-->

      <div class="span4">
        <?php echo $this->content('sidebar', true); ?> 
      </div><!--/.span4-->
    </div><!--/.row-fluid-->

    <hr>

    <div class="row-fluid">
      <footer class="span12">
        <p><span>&copy; <?php echo date('Y'); ?> Author Name. </span> <a href="http://www.wolfcms.org/">Wolf CMS</a> Inside</p>
      </footer><!--/.span12-->
    </div><!--/.row-fluid-->
  </div><!--/.fluid-container-->

  <!-- Le javascript -->
  <script src="/public/themes/bootstrap/js/jquery.js"></script>
  <script src="/public/themes/bootstrap/js/bootstrap-transition.js"></script>
  <script src="/public/themes/bootstrap/js/bootstrap-alert.js"></script>
  <script src="/public/themes/bootstrap/js/bootstrap-modal.js"></script>
  <script src="/public/themes/bootstrap/js/bootstrap-dropdown.js"></script>
  <script src="/public/themes/bootstrap/js/bootstrap-scrollspy.js"></script>
  <script src="/public/themes/bootstrap/js/bootstrap-tab.js"></script>
  <script src="/public/themes/bootstrap/js/bootstrap-tooltip.js"></script>
  <script src="/public/themes/bootstrap/js/bootstrap-popover.js"></script>
  <script src="/public/themes/bootstrap/js/bootstrap-button.js"></script>
  <script src="/public/themes/bootstrap/js/bootstrap-collapse.js"></script>
  <script src="/public/themes/bootstrap/js/bootstrap-carousel.js"></script>
  <script src="/public/themes/bootstrap/js/bootstrap-typeahead.js"></script>
 
</body>
</html>
