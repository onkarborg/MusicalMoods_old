<?php
$dir = 'myDir';
if( !file_exists($dir)){
    $oldmask = umask(0);
    mkdir ($dir, 0744);
}
if($_POST['json_string'] != null) {
    $txt = $_POST['json_string'];
    file_put_contents($dir . '/1.csv', $txt);
}
/*if($_GET['data'] != null){
    $myfile = fopen("myDir/1.csv","r");
    echo fread($myfile,filesize("myDir/1.csv"));
    fclose($myfile);
}*/

?>