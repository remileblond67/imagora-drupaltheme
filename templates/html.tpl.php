<!DOCTYPE html>
<html xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" xmlns:og="http://opengraphprotocol.org/schema/">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <?php print $head; ?>
    <title><?php print "$head_title" ; ?></title>
    <?php print $styles; ?>
  </head>
  <body class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <!-- Haut de page -->
    <?php print $page_top; ?>
    <!-- Page -->
    <?php print $page; ?>
    <!-- Pied de page -->
    <?php print $page_bottom; ?>
  </body>
  <?php print $scripts; ?>
</html>
