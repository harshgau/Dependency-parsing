<?php
$command= "sh test.sh";
$output= shell_exec($command);
$url = '~(?:(https?)://([^\s<]+)|(www\.[^\s<]+?\.[^\s<]+))(?<![\.,:])~i'; 
$output = preg_replace($url, '<a href="$0" target="_blank" title="$0">$0</a>', $output);
echo "<pre>$output</pre>";
?>