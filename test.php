<?php 

$command = escapeshellcmd('sudo /usr/bin/python /var/www/html/test/test_ssh.py');
$output = shell_exec($command);
echo $output;

?>
