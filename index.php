<?php 
chmod('deploy.sh', 0777);
echo "99ss99";
$ss = shell_exec('deploy.sh');

echo $ss;

?>