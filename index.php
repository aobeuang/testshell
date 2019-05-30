<?php 
$file = 'deploy.sh';
$fp = fopen($file, 'w');
    fwrite($fp, $content);
    fclose($fp);
    chmod($file, 0777);  //changed to add the zero
echo "ssss";
$ss = shell_exec('/app/deploy.sh');

echo $ss;

?>