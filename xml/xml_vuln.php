
<?php 
    $xmlfile = file_get_contents('vuln.xml');
    $dom = new DOMDocument();
    $dom->loadXML($xmlfile, LIBXML_NOENT | LIBXML_DTDLOAD);
    $credentials = simplexml_import_dom($dom);
    $user = $credentials->user;
    $pwd = $credentials->pwd;
    echo "You have logged in as user $user";
?>

