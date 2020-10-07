<div id="footer">
    <?php
    if (!DrawMenu($leftMenu, $vertical = false))
        echo ERR_LEFT_MENU;
    ?>
    <hr>
    &copy; Супер Мега Веб-мастер, 2000 &ndash; <?=$year?>
    <p>Powered by <?=$_SERVER['SERVER_SOFTWARE']?>/PHP <?=PHP_VERSION?> on <?=PHP_OS?></p>
</div>