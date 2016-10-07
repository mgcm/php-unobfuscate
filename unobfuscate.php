<?php

$filename = $argv[1];
$file_content = file_get_contents($filename);
$instructions = explode(";", $file_content);

$step_3 = str_replace("eval(", "", $instructions[3]);
$step_3 = str_replace("))", ");", $step_3);
$step_3 = str_replace("\$_D", "return base64_decode", $step_3);
$result = eval($step_3);
$result = str_replace("\$_R=str_replace('__FILE__',\"'\".\$_F.\"'\",\$_X);eval(\$_R);\$_R=0;\$_X=0;", "return \$_X;", $result);
$result = "$instructions[1];$result";
echo eval($result);

?>
