<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $this->title(); ?></title>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="robots" content="index, follow" />
  <meta name="description" content="<?php echo ($this->description() != '') ? $this->description() : 'Default description goes here'; ?>" />
  <meta name="keywords" content="<?php echo ($this->keywords() != '') ? $this->keywords() : 'default, keywords, here'; ?>" />
  <meta name="author" content="Author Name" />

  <!-- Bootstrap Default Theme -->
  <link href="/public/themes/wolfcms-bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

  <!-- Bootswatch United Theme-->
  <!-- <link href="/public/themes/wolfcms-bootstrap/bootstrap/css/bootswatch/united/bootstrap.min.css" rel="stylesheet" media="screen"> -->

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="public/themes/wolfcms-bootstrap/bootstrap/js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="icon" href="<?php echo THEMES_URI; ?>simple/images/favicon.ico" />

  <!-- Fixes for navbar overlapping top of contect in responsive layouts -->
  <style>

    @media (min-width: 980px) {
      body {
        padding-top: 60px;
      }
    }
    
    .sidebar-nav {
      padding: 9px 0;
      margin-top: 20px;
    }
    
    @media (max-width: 980px) {
      /* Enable use of floated navbar text */
      .navbar-text.pull-right {
        float: none;
        padding-left: 5px;
        padding-right: 5px;
      }
    }
    
  </style>

  <!-- Bootstrap Responsive -->
  <link href="/public/themes/wolfcms-bootstrap/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

  <!-- RSS -->
  <link rel="alternate" type="application/rss+xml" title="Wolf Default RSS Feed" href="<?php echo URL_PUBLIC.((USE_MOD_REWRITE)?'':'/?'); ?>rss.xml" />

</head>

<body>

  <!-- Main navbar -->
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container-fluid">
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="brand" href="<?php echo URL_PUBLIC; ?>">WolfCMS Bootstrap Responsive Theme</a>
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

        <!-- Uncomment to inherit sidebar from Main Page -->
        <?php //echo $this->content('sidebar', true); ?> 

        <!-- Example sidebar -->
        <div class="row-fluid">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">

              <li class="nav-header">About This Site</li>
              <li><p>About info here.<br><a href="<?php echo BASE_URL; ?>about-us">Read more...</a></p></li>
              <li class="divider"></li>

              <li class="nav-header">Recent Entries</li>
              <?php $page_article = $this->find('/articles/'); ?>
              <?php foreach ($page_article->children(array('limit' => 5, 'order' => 'page.created_on DESC')) as $article): ?>
                <li><?php echo $article->link(); ?></li>
              <?php endforeach; ?>
              <li class="divider"></li>

              <!-- Uncomment following 3 lines to show tag cloud (requires Tag plugin) -->
              <!-- <li class="nav-header">Tags</li> -->
              <?php //Tags::render(array('type' => 'cloud')); ?>
              <!-- <li class="divider"></li> -->

              <li class="nav-header">Archives by Month</li>
              <?php $article = $this->find('articles'); ?>
              <?php $archives = $article->archive->archivesByMonth(); ?>
              <?php foreach ($archives as $date): ?>
                <li><a href="<?php echo BASE_URL . 'articles/'. $date . URL_SUFFIX; ?>"><?php echo strftime('%B %Y', strtotime(strtr($date, '/', '-'))); ?></a></li>
              <?php endforeach; ?>
              <li class="divider"></li>

              <li class="nav-header">Syndicate</li>
              <li><a href="<?php echo BASE_URL; ?>rss.xml">Articles RSS Feed</a></li>

            </ul>
          </div><!--/.sidebar-nav-->
        </div><!--/.row-fluid-->
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
  <!-- Any unused scripts should be removed to prevent unnecessary loading -->
  <script src="/public/themes/wolfcms-bootstrap/bootstrap/js/jquery.js"></script>
  <script src="/public/themes/wolfcms-bootstrap/bootstrap/js/bootstrap-transition.js"></script>
  <script src="/public/themes/wolfcms-bootstrap/bootstrap/js/bootstrap-alert.js"></script>
  <script src="/public/themes/wolfcms-bootstrap/bootstrap/js/bootstrap-modal.js"></script>
  <script src="/public/themes/wolfcms-bootstrap/bootstrap/js/bootstrap-dropdown.js"></script>
  <script src="/public/themes/wolfcms-bootstrap/bootstrap/js/bootstrap-scrollspy.js"></script>
  <script src="/public/themes/wolfcms-bootstrap/bootstrap/js/bootstrap-tab.js"></script>
  <script src="/public/themes/wolfcms-bootstrap/bootstrap/js/bootstrap-tooltip.js"></script>
  <script src="/public/themes/wolfcms-bootstrap/bootstrap/js/bootstrap-popover.js"></script>
  <script src="/public/themes/wolfcms-bootstrap/bootstrap/js/bootstrap-button.js"></script>
  <script src="/public/themes/wolfcms-bootstrap/bootstrap/js/bootstrap-collapse.js"></script>
  <script src="/public/themes/wolfcms-bootstrap/bootstrap/js/bootstrap-carousel.js"></script>
  <script src="/public/themes/wolfcms-bootstrap/bootstrap/js/bootstrap-typeahead.js"></script>
 
</body>
</html>
