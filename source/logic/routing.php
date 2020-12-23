<?php
    $BASE_URL = "/COVID-19-Website";
    $VIEW_DIR = __DIR__ . "/../views";

    switch ($_SERVER["REQUEST_URI"]) {
        case "$BASE_URL/local-updates":
            $PAGE_INDEX = 0;
            $PAGE_TITLE = "Local updates - GOV.UK";
            $PAGE_VIEW = $VIEW_DIR ."/local-updates.php";
            break;

        case "$BASE_URL/about-covid-19":
            $PAGE_INDEX = 1;
            $PAGE_TITLE = "About COVID-19 - GOV.UK";
            $PAGE_VIEW = $VIEW_DIR ."/about-covid-19.php";
            break;

        case "$BASE_URL/getting-tested":
            $PAGE_INDEX = 2;
            $PAGE_TITLE = "Getting tested - GOV.UK";
            $PAGE_VIEW = $VIEW_DIR ."/getting-tested.php";
            break;

        default:
            $url = "$BASE_URL/local-updates";
            header("Location: $url");
            break;
    }
?>