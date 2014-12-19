<?php

function post_install(){
    
        require_once (__DIR__.'/../vendor/autoload.php');
        require_once (__DIR__.'/theme_merge.config.php');
        require_once (__DIR__.'/metadata_merge.config.php');
    
    
        $theme = new Soulware\EditThemeOnInstall\themeMerge($theme_merge_config);
        $theme->install();
        
        $metadata = new Soulware\EditMetadataOnInstall\metadataMerge();
        $metadata->setMergeConfig($metadata_merge_config);
        $metadata->install();
} 

?>
