<?php
$stagiaires = [
    "WEBDEV01" => [
        "Nom" => "Dupont",
        "Prenom" => "Jean",
        "Sites" => [
            "SitePerso" => "https://example.com/jean/",
            "github" => "https://github.com/jean",
        ],
    ],
    "WEBDEV02" => [
        "Nom" => "Martin",
        "Prenom" => "Marie",
        "Sites" => [
            "SitePerso" => "https://example.com/marie/",
            "github" => "https://github.com/marie",
        ],
    ],
    "WEBDEV03" => [
        "Nom" => "Dakir",
        "Prenom" => "Badr",
        "Sites" => [
            "SitePerso" => "https://dakirbadr49-coder.github.io/TI-Prefo/",
            "github" => "https://github.com/dakirbadr49-coder",
        ],
    ],
];

// Accéder au github de Marie
echo $stagiaires["WEBDEV03"]["Sites"]["github"];
var_dump ($stagiaires)
// https://github.com/marie