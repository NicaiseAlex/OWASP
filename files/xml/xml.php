
<?php 
    libxml_disable_entity_loader (true);
    $xmlfile = file_get_contents('vuln.xml');
    $dom = new DOMDocument();
    $dom->loadXML($xmlfile, LIBXML_NOENT | LIBXML_DTDLOAD);
    $creds = simplexml_import_dom($dom);
    $user = $creds->user;
    $pass = $creds->pass;
    echo "You have logged in as user $user";
?>