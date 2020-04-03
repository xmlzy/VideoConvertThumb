<?php
header("Content-type:text/html;charset=utf-8");

$arr = array();
$count = 0;
$handler = opendir('video');
while( ($filename = readdir($handler)) !== false ) {
	if($filename != "." && $filename != "..") {
		$without_extension = substr($filename, 0, strrpos($filename, "."));
		//$arr['v_url'][] = "/video/$filename";
        //$arr['img_url'][] = "/thumb/$without_extension.jpg";
        //$arr['text'][] = $without_extension;
        $count ++;
        $arr[] = array('id' => $count, 'v_url' => "/video/$filename", 'img_url' => "/thumb/$without_extension.jpg", 'text' => $without_extension);
    }
}
echo json_encode($arr);
?>