<?php
include 'functions.php';

$searchResults = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'] ?? '';
    $name = trim($_POST['name'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $address = trim($_POST['address'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $searchValue = trim($_POST['searchValue'] ?? '');
    $searchField = $_POST['searchField'] ?? 'name';

    switch ($action) {
        case 'Insert':
            insertContact($name, $phone, $address, $email);
            break;
        case 'Update':
            updateContact($name, $name, $phone, $address, $email);
            break;
        case 'Delete':
            deleteContact($name);
            break;
        case 'Search':
            $searchResults = searchContacts($searchValue, $searchField);
            break;
    }
}

function displaySearchResults($searchResults) {
    if (!empty($searchResults)) {
        echo '<div class="search-results mt-4">';
        echo '<h2 class="mb-3">Search Results</h2>';
        foreach ($searchResults as $contact) {
            echo '<div class="card mb-3">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . htmlspecialchars($contact->getElementsByTagName('name')->item(0)->nodeValue) . '</h5>';
            echo '<p class="card-text"><strong>Phone:</strong> ' . htmlspecialchars($contact->getElementsByTagName('phone')->item(0)->nodeValue) . '</p>';
            echo '<p class="card-text"><strong>Address:</strong> ' . htmlspecialchars($contact->getElementsByTagName('address')->item(0)->nodeValue) . '</p>';
            echo '<p class="card-text"><strong>Email:</strong> ' . htmlspecialchars($contact->getElementsByTagName('email')->item(0)->nodeValue) . '</p>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
    }
}
include 'layout.php';
?>
