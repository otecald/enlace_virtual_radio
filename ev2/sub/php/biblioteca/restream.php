<?php
header('Cache-Control: no-cache,no-store,must-revalidate,max-age=0');
header('Accept-Ranges: none');
header('Connection: close');
header('Content-Type: audio/aacp');
header('X-Clacks-Overhead: GNU Terry Pratchett');
header('icy-br: 26');
header('icy-genre: Various');
header('icy-name: caracol');
header('icy-notice1: <BR>This stream requires <a href="http://www.winamp.com">Winamp</a><BR>');
header('icy-notice2: SHOUTcast DNAS/posix(linux x64) v2.5.5.733<BR>');
header('icy-pub: 0');
header('icy-sr: 22050');

$url = $_GET["url"];

$handle = fopen($url, 'r');
while (($data = fread($handle, 1024))) {
    echo $data;
    ob_flush();
    flush();
}
?>