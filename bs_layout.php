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

  <!-- Bootswatch Flatly Theme-->
  <!-- <link href="<?php echo THEMES_URI; ?>wolfcms-bootstrap/bootstrap/css/bootswatch/flatly/bootstrap.min.css" rel="stylesheet" media="screen"> -->

  <!-- Custom styles -->
  <link href="<?php echo THEMES_URI; ?>wolfcms-bootstrap/custom_styles.css" rel="stylesheet" media="screen">

  <!-- Fav and touch icons -->
  <link rel="icon" href="<?php echo THEMES_URI; ?>simple/images/favicon.ico" />

  <!-- RSS -->
  <link rel="alternate" type="application/rss+xml" title="Wolf Default RSS Feed" href="<?php echo URL_PUBLIC.((USE_MOD_REWRITE)?'':'/?'); ?>rss.xml" />

</head>

<body>

  <!-- Navbar -->
  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo URL_PUBLIC; ?>">WolfCMS Bootstrap Theme</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <?php
          echo url_match('/') ? '<li class="active"><a ' : '<li><a ';
          echo 'href="' . URL_PUBLIC . '">Home</a></li>' . "\n";
          foreach($this->find('/')->children() as $menu) {
            echo in_array($menu->slug, explode('/', $this->uri())) ? '<li class="active">' : '<li>';
            echo $menu->link($menu->title) . "</li>\n";
          }
          ?>
        </ul>
      </div><!--/.navbar-collapse-->
    </div><!--/.container-fluid--> 
  </div><!--/.navbar-->
  <!-- End Navbar -->

  <!-- Main content -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <h2><?php echo $this->title(); ?></h2>
        <?php echo $this->content(); ?> 
        <?php if ($this->hasContent('extended')) echo $this->content('extended'); ?> 
      </div><!--/.col-md-8-->

      <div class="col-md-4">

        <!-- Uncomment to inherit sidebar from Main Page instead of using custom sidebar below -->
        <?php //echo $this->content('sidebar', true); ?> 

        <!-- Example customer sidebar -->

        <div class="panel panel-default top-sidebar-panel">
          <div class="panel-heading">
            <h3 class="panel-title">About This Site:</h3>
          </div>
          <div class="panel-body">
            <p>About info here.<br><a href="<?php echo BASE_URL; ?>about-us">Read more...</a></p>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Recent Entries:</h3>
          </div>
          <div class="panel-body">
            <?php $page_article = $this->find('/articles/'); ?>
            <?php foreach ($page_article->children(array('limit' => 5, 'order' => 'page.created_on DESC')) as $article): ?>
              <div><?php echo $article->link(); ?></div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Uncomment the following panel to show tag cloud (requires Tagger plugin) -->
        <!-- <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Tags:</h3>
          </div>
          <div class="panel-body">
            <?php //Tags::render(array('type' => 'cloud')); ?>
          </div>
        </div> -->

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Archives by Month:</h3>
          </div>
          <div class="panel-body">
            <?php $article = $this->find('articles'); ?>
            <?php $archives = $article->archive->archivesByMonth(); ?>
            <?php foreach ($archives as $date): ?>
              <div><a href="<?php echo BASE_URL . 'articles/'. $date . URL_SUFFIX; ?>"><?php echo strftime('%B %Y', strtotime(strtr($date, '/', '-'))); ?></a></div>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Syndicate:</h3>
          </div>
          <div class="panel-body">
            <div><a href="<?php echo BASE_URL; ?>rss.xml">Articles RSS Feed</a></div>
          </div>
        </div>

      </div><!--/.col-md-4-->
    </div><!--/.row-->

    <br>

  </div><!--/.fluid-container-->

  <div id="footer">
    <div class="container">
      <p>&copy; <?php echo date('Y'); ?> Author Name. <a href="http://www.wolfcms.org/">Wolf CMS</a> Inside</p>
    </div><!--/.container-->
  </div><!--/.footer-->

  <!-- Bootstrap core JavaScript - placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="<?php echo THEMES_URI; ?>wolfcms-bootstrap/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo THEMES_URI; ?>wolfcms-bootstrap/bootstrap/js/docs.min.js"></script>
 
</body>
</html>
