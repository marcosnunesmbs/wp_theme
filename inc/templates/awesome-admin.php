<h1>Theme Options</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
    <?php settings_fields('awesome-settigns-group'); ?>
    <?php do_settings_sections('awesome_theme'); ?>
    <?php submit_button(); ?>
</form>