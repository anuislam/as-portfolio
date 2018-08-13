<?php
$root_path = get_template_directory();
if (file_exists($root_path . '/vendor/autoload.php')) {
	require_once($root_path . '/vendor/autoload.php');
}

use Inc\AsPortfolioScripts;
use Inc\AsPortfolioAfterSetupTheme;
use Inc\AsThemeOption;
use Inc\AsMetaBox;

new AsPortfolioScripts();
new AsPortfolioAfterSetupTheme();
new AsThemeOption();
new AsMetaBox();