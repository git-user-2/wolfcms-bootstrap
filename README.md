wolfcms-bootstrap
=================

##### Bootstrap theme for WolfCMS

### Installing the Theme

1. Download/clone the project into your wolf/public/themes directory

2. Navigate to the 'Layouts' tab of the WolfCMS admin
   * Click on 'New Layout'
   * Name the layout and set the 'Content-type' to `text/html`
   * Copy and paste the contents of the entire `bs_responsive_layout.php` into the 'Body' section of the layout creation page and click the 'Save' button

### Using the Theme

To use the theme on a given page, do the following:

1. Navigate to the 'Pages' tab in the Wolf admin and select the page you wish to apply the theme to
2. Go to the 'Settings' tab on the 'Edit Page' of the selected page
3. Select the layout we created during the installation steps above from the 'Page Type' dropdown menu and save the page
4. View the updated page to see the theme in action and verify success of the install

### Miscellaneous

This release is based on Bootstrap 2.3.2, future releases with likely be based off of future Bootstrap releases in order to take advantage of improvements and new features.  Old releases will remain available here.

#### Using Bootswatch Themes

Download themes for Bootsrap 2.x.x from http://bootswatch.com/2/, place the themed `bootstrap.min.css` file into a directory named after the theme (you can create one in the provided bootswatch folder), and comment out the default theme in your layout in favor of the new theme.  For example:

```html
<!-- Bootstrap Default Theme -->
<!-- <link href="/public/themes/wolfcms-bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> -->

<!-- Bootswatch United Theme-->
<link href="/public/themes/wolfcms-bootstrap/bootstrap/css/bootswatch/united/bootstrap.min.css" rel="stylesheet" media="screen">
```

#### Optimizing

To prevent unnecessary inclusion of unused javascript files, delete/comment out any unused .js files at the bottom of the layout.

### Change Log

#### 0.0.1

* Initial release based on Bootstrap 2.3.2

### License

This project is made available under The MIT License (MIT)
http://opensource.org/licenses/MIT

Copyright (C) 2013 Kyle Jones

Any other licensed work included with this project is copyright its respective author(s).
