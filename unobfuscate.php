<?php

function lame_decode($content) {
  $instructions = explode(";", $content);
  $step_3 = str_replace("eval(", "", $instructions[3]);
  $step_3 = str_replace("))", ");", $step_3);
  $step_3 = str_replace("\$_D", "return base64_decode", $step_3);
  $result = eval($step_3);
  $result = str_replace("\$_R=str_replace('__FILE__',\"'\".\$_F.\"'\",\$_X);eval(\$_R);\$_R=0;\$_X=0;", "return \$_X;", $result);
  $result = "$instructions[1];$result";
  return $result;
}

$filename = $argv[1];
$file_content = file_get_contents($filename);
$result = lame_decode($file_content);
$code = eval($result);

// support for recursive encoding
while (strpos($code, "edoced_46esab") !== false) {
  $result = lame_decode($code);
  $code = eval($result);
}

echo "$code\n";

?>
