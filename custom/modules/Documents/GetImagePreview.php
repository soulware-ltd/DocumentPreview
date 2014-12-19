<?php
if(!defined('sugarEntry') || !sugarEntry) die("Not A Valid Entry Point");

$id = $_REQUEST['record'];

$document = new Document();
$document->retrieve($id);

$filename = $document->document_revision_id;
$filepath = "upload/$filename";

$document_name = $document->get_document_name($id);



// File típusának ellenőrzése
$image_formats = array('JPEG','GIF','PNG');

$finfo = new finfo();
$fileinfo = $finfo->file($filepath);
$fileinfo_array = explode(" ",$fileinfo);


if($fileinfo_array[0] == 'PDF') {
	
	$im = new imagick($filepath."[0]");
	$im->setImageFormat('png');
	$im->thumbnailImage(300,0);
	header('Content-Type:image/png');
	ob_clean();
	flush();
	echo $im;
	
} elseif(!in_array($fileinfo_array[0],$image_formats)) {
	
	header('Content-Type:image/png');
	ob_clean();
	flush();
	readfile('custom/themes/default/images/unknown.png');
	
} else {
	
	//Kép Átméretezése
	
	$image_attrs = getimagesize("upload/$filename");
	$layout="";
	if($image_attrs[0] > $image_attrs[1]) {
		$twidth = 300;
		$theight = round($twidth*$image_attrs[1]/$image_attrs[0]);
	} else{
		$theight = 300;
		$twidth = round($theight*$image_attrs[0]/$image_attrs[1]);
	}
	
	
	if($image_attrs[2] == 1) {
		$oimage = imagecreatefromgif($filepath);
	} elseif($image_attrs[2] == 2) {
		$oimage = imagecreatefromjpeg($filepath);
	} elseif($image_attrs[2] == 3) {
		$oimage = imagecreatefrompng($filepath);
	}
	
	$timage = imagecreatetruecolor($twidth, $theight);
	imagecopyresized($timage, $oimage, 0, 0, 0, 0, $twidth, $theight, $image_attrs[0], $image_attrs[1]);
	
	

	header('Content-Type:image/png');
	ob_clean();
	flush();
	imagepng($timage);

}

?>
