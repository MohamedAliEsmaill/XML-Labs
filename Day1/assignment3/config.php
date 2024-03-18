<?php
$xmlFilePath = 'data.xml';
$dom = new DOMDocument();
if (!file_exists($xmlFilePath)) {
    $dom->version = '1.0';
    $dom->encoding = 'UTF-8';
    $root = $dom->createElement('contacts');
    $dom->appendChild($root);
} else {
    $dom->load($xmlFilePath);
}
?>
