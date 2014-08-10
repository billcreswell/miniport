<?php //Make sure the file isn't accessed directly.
defined('IN_PLUCK') or exit('Access denied!');
?><!DOCTYPE html>
<html lang="<?php echo LANG; ?>">
    <head>
        <?php theme_meta(true); ?>
            <meta charset="UTF-8"/>
    <meta name="HandheldFriendly" content="true"/><!--Blackberry Column View-->
    <meta name="viewport" content="initial-scale=1.0"/><!--iPod-->
    <meta name="viewport" content="width=device-width"/><!--android-->
    </head>
    <body>
    <div id="header" class="header">
        <h1><a href="<?php echo SITE_URL; ?>/"><?php theme_sitetitle(); ?></a></h1>
        <?php theme_menu('ul', 'li', 'active', 1); ?>
        <br style="clear:both"/>
    </div>
    <div id="container">

    <div id="content">
        <h2><?php theme_pagetitle(); ?></h2>
        <?php theme_content(); ?>
        <?php theme_area('main'); ?>
    </div>
    <div id="footer">
        <?php theme_area('footer'); ?>
        <a href="<?php echo SITE_URL; ?>/login.php">admin</a> | powered by <a href="http://www.pluck-cms.org">pluck</a>  | <a href="http://www.arvixe.com" target="_blank">Hosted By Arvixe</a>
    </div>
</div>
<style>
.sticky {
  position: fixed;
  top: 0;
}
.header {
  width: 100%;
}
</style>
<script>
var header = document.querySelector('.header');
var origOffsetY = header.offsetTop;
function onScroll(e) {
  window.scrollY >= origOffsetY ? header.classList.add('sticky') :
                                  header.classList.remove('sticky');
}
document.addEventListener('scroll', onScroll);
</script>
</body>
</html>
