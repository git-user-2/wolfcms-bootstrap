wolfcms-bootstrap
=================

##### Bootstrap theme for WolfCMS

### Installing the Theme

1. Download/clone the project into your wolfcms/public/themes directory

2. Navigate to the 'Layouts' tab of the WolfCMS admin
   * Click on 'New Layout'
   * Name the layout and set the 'Content-type' to `text/html`
   * Copy and paste the contents of the entire `bs_layout.php` into the 'Body' section of the layout creation page and click the 'Save' button

### Using the Theme

To use the theme on a given page, do the following:

1. Navigate to the 'Pages' tab in the Wolf admin and select the page you wish to apply the theme to
2. Go to the 'Settings' tab on the 'Edit Page' of the selected page
3. Select the layout we created during the installation steps above from the 'Page Type' dropdown menu and save the page (I named mine wolfcms-bootstrap)
4. Click 'View this page' to see the theme in action and verify success of the install

### After Installation

Consult the Bootstrap docs at http://getbootstrap.com in order to find out about features made available by the framework.

#### Using Bootswatch Themes

Download themes for Bootsrap from http://bootswatch.com, place the themed `bootstrap.min.css` file into a directory named after the theme (you can create one in the provided bootswatch folder), and comment out the default theme in your layout in favor of the new theme.  For example:

```html
<!-- Bootstrap Default Theme -->
<!-- <link href="/public/themes/wolfcms-bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> -->

<!-- Bootswatch Flatly Theme-->
<link href="/public/themes/wolfcms-bootstrap/bootstrap/css/bootswatch/flatly/bootstrap.min.css" rel="stylesheet" media="screen">
```

### Change Log

#### 0.0.3

* Updated layout to Bootstrap v3.x.x
* Included more Bootswatch themes (Flatly, United, Darkly, Simplex)

#### 0.0.2

* Fixed issue with mobile scaling, missing necessary meta declaration

#### 0.0.1

* Initial release based on Bootstrap 2.3.2

### License

This project is made available under The MIT License (MIT)
http://opensource.org/licenses/MIT

Copyright (C) 2013-2014 Kyle Jones

Any other licensed work included with this project is copyright its respective author(s), and subject to the terms of their chosen license.
