<?php

$manifest = array(
	'acceptable_sugar_versions' => array (
		'regex_matches' => array (
			0 => "5.0.*",
			1 => "5.1.*",
			2 => "5.2.*",
			3 => "5.5.*",
			4 => "6.4.*",
			5 => "6.5.*",
		),
	),
	'acceptable_sugar_flavors' => array (
		0 => 'CE',
	),
	'name' 				=> 'SoulwareDocumentPreview',
	'description' 		=> 'Adds a document preview popup to documtn list view and subpanels.',
	'author' 			=> 'Zoltán Nagy, Soulware Ltd.',
	'published_date'	=> '2014/02/21',
	'version' 			=> '0.9.0',
	'type' 				=> 'module',
	'icon' 				=> '',
	'is_uninstallable' => true,
);
$installdefs = array(
	'id'=> 'SoulwareDocumentPreview',
	'copy' => array(
		0 => array(
		'from' => '<basepath>/custom/include/generic/SugarWidgets/SugarWidgetDocsSubpanelImageTooltip.php',
		'to' => 'custom/include/generic/SugarWidgets/SugarWidgetDocsSubpanelImageTooltip.php',
		),
		1 => array(
		'from' => '<basepath>/custom/include/javascript/imagesloaded.min.js',
		'to' => 'custom/include/javascript/imagesloaded.min.js',
		),
		2 => array(
		'from' => '<basepath>/custom/include/javascript/imageTooltip.js',
		'to' => 'custom/include/javascript/imageTooltip.js',
		),
		3 => array(
		'from' => '<basepath>/custom/include/javascript/jquery.qtip.css',
		'to' => 'custom/include/javascript/jquery.qtip.css',
		),
		4 => array(
		'from' => '<basepath>/custom/include/javascript/jquery.qtip.js',
		'to' => 'custom/include/javascript/jquery.qtip.js',
		),
		5 => array(
		'from' => '<basepath>/custom/modules/Documents/GetImagePreview.php',
		'to' => 'custom/modules/Documents/GetImagePreview.php',
		),
		6 => array(
		'from' => '<basepath>/custom/themes/default/images/ImageTooltip.gif',
		'to' => 'custom/themes/default/images/ImageTooltip.gif',
		),
	),
	'language' => array (
		0 => array('from'=> '<basepath>/custom/Extension/modules/Documents/Ext/Language/en_us.lang.php',
			 'to_module'=> 'Documents',
			 'language'=>'en_us'
		),
		1 => array('from'=> '<basepath>/custom/Extension/modules/Documents/Ext/Language/hu_hu.lang.php',
			 'to_module'=> 'Documents',
			 'language'=>'hu_hu'
		),
	 ),
);

?>
