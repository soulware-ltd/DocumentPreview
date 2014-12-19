<?php

if (!isset($metadata_merge_config))
    $metadata_merge_config = array();

$content = array('list_fields' =>
    array(
        'document_tooltip_link' => array(
            'name' => 'document_tooltip_link',
            'vname' => 'LBL_LIST_IMAGE_TOOLTIP',
            'width' => '10%',
            'sortable' => false,
            'widget_class' => 'DocsSubpanelImageTooltip',
        ),
    ),
);
$config = new Soulware\EditMetadataOnInstall\metadataMergeConfig('Documents', 'default.php', 'metadata/subpanels', 'subpanel_layout', $content);
$metadata_merge_config[] = $config;

$content = array("Documents" =>
    array('DOCUMENT_TOOLTIP_LINK' =>
        array(
            'width' => '10%',
            'label' => 'LBL_LIST_IMAGE_TOOLTIP',
            'default' => true,
            'sortable' => false,
            'customCode' => '<img src="custom/themes/default/images/ImageTooltip.gif" class="imageReviewTooltip" title="{$ID}">',
        ),
    )
);

$config = new Soulware\EditMetadataOnInstall\metadataMergeConfig('Documents', 'listviewdefs.php', 'metadata', 'listViewDefs', $content);
$metadata_merge_config[] = $config;
?>
