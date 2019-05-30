<?php 
$file = 'deploy.sh';
$fp = fopen($file, 'w');
    fwrite($fp, $content);
    fclose($fp);
    chmod($file, 0777);  //changed to add the zero
echo "99ss99";
$ss = shell_exec('deploy.sh');

echo $ss;

?>