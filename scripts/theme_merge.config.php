<?php

if(!isset($theme_merge_config)) $theme_merge_config = array();

$content = '<style>
{literal}
.ui-tooltip {
	padding: 8px;
	position: absolute;
	z-index: 9999;
	max-width: 300px;
	-webkit-box-shadow: 0 0 5px #aaa;
	box-shadow: 0 0 5px #aaa;
}
body .ui-tooltip {
	border-width: 2px;
}
{/literal}
</style>
<script src="custom/include/javascript/jquery.qtip.js"></script>
<script src="custom/include/javascript/imagesloaded.min.js"></script>
<link href="custom/include/javascript/jquery.qtip.css" type="text/css" rel="stylesheet">
<script src="custom/include/javascript/imageTooltip.js"></script>';

$config = new Soulware\EditThemeOnInstall\themeMergeConfig('header.tpl',$content);
$config->type = 'template';
$config->tag = '<div id="main">';
$config->insert_method = 'prepend';
$theme_merge_config[] = $config;

?>
