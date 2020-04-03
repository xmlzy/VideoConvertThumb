<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>convertToFlv</title>
   <style type="text/css">
      input {width:40%;height:20px;}
   </style>
</head>
<body>
<?php
header('X-Accel-Buffering: no');
ob_end_flush();
ob_implicit_flush(1);
$handler = opendir('video');
while( ($filename = readdir($handler)) !== false ) {
   if($filename != "." && $filename != "..") {
      $without_extension = substr($filename, 0, strrpos($filename, "."));
      convertToFlv( $filename, "$without_extension.jpg" );
   }
   sleep(1);
}
?>
<?php
function convertToFlv( $input, $output ) {
   $input_view = iconv('GB2312', 'UTF-8', $input);
   $output_view = iconv('GB2312', 'UTF-8', $output);
   echo "<input type='text' readonly='readonly' value='$input_view'>-><input type='text' readonly='readonly' value='$output_view'>";
   exec("ffmpeg -v 0 -y -i video\\$input -vframes 1 -ss 1 -vcodec mjpeg -f rawvideo thumb\\$output", $out, $info);
   if ($info == '0'){
      echo '&nbsp;&nbsp;————&nbsp;&nbsp;successful<br>'.PHP_EOL;
   }else{
      echo '&nbsp;&nbsp;————&nbsp;&nbsp;failed<br>'.PHP_EOL;
   }
}
?>
</body>
</html>