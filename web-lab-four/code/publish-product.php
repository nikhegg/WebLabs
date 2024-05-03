<?php
require_once 'vendor/autoload.php';
if(true === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    $client = new Google_Client();
    $client->setApplicationName('WebLab4');
    $client->setScopes(['https://www.googleapis.com/auth/spreadsheets']);
    $client->setAccessType('offline');
    $client->setAuthConfig('credentials.json');

    $service = new Google_Service_Sheets($client);
    $spreadsheetId = "1bKXPauAFhzRgPlBbTjeXsAt1RMr5CbobKJfHi4Vtc-g";
    $listName = "List1";
}
header('Location: /index.php');
exit();