<?php
include 'config.php';

function insertContact($name, $phone, $address, $email) {
    global $dom, $xmlFilePath;
    $contact = $dom->createElement('contact');
    $contact->appendChild($dom->createElement('name', $name));
    $contact->appendChild($dom->createElement('phone', $phone));
    $contact->appendChild($dom->createElement('address', $address));
    $contact->appendChild($dom->createElement('email', $email));
    $dom->documentElement->appendChild($contact);
    $dom->save($xmlFilePath);
}

function updateContact($oldName, $newName, $newPhone, $newAddress, $newEmail) {
    global $dom, $xmlFilePath;
    $contacts = $dom->getElementsByTagName('contact');
    foreach ($contacts as $contact) {
        if ($contact->getElementsByTagName('name')->item(0)->nodeValue == $oldName) {
            $contact->getElementsByTagName('name')->item(0)->nodeValue = $newName;
            $contact->getElementsByTagName('phone')->item(0)->nodeValue = $newPhone;
            $contact->getElementsByTagName('address')->item(0)->nodeValue = $newAddress;
            $contact->getElementsByTagName('email')->item(0)->nodeValue = $newEmail;
            $dom->save($xmlFilePath);
            return;
        }
    }
}

function deleteContact($name) {
    global $dom, $xmlFilePath;
    $contacts = $dom->getElementsByTagName('contact');
    foreach ($contacts as $contact) {
        if ($contact->getElementsByTagName('name')->item(0)->nodeValue == $name) {
            $dom->documentElement->removeChild($contact);
            $dom->save($xmlFilePath);
            return;
        }
    }
}

function searchContacts($searchValue, $searchField) {
    global $dom;
    $searchResults = [];
    $contacts = $dom->getElementsByTagName('contact');
    foreach ($contacts as $contact) {
        $currentFieldValue = $contact->getElementsByTagName($searchField)->item(0)->nodeValue;
        if (str_contains(strtolower($currentFieldValue), strtolower($searchValue))) {
            array_push($searchResults, $contact);
        }
    }
    return $searchResults;
}
?>
