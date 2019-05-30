<?php 
chmod('deploy.sh', 0777);
echo "ss99";
$ss = shell_exec('deploy.sh');

echo $ss;

?>