<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['files'])) {
    // Créer un nouveau fichier ZIP
    $zip = new ZipArchive();
    $zipFileName = "archive_" . date("Ymd_His") . ".zip";

    if ($zip->open($zipFileName, ZipArchive::CREATE) !== TRUE) {
        exit("Impossible de créer le fichier ZIP\n");
    }

    // Parcourir les fichiers téléchargés et les ajouter à l'archive ZIP
    foreach ($_FILES['files']['tmp_name'] as $key => $tmpName) {
        $fileName = $_FILES['files']['name'][$key];
        $filePath = $_FILES['files']['tmp_name'][$key];
        
        if (file_exists($filePath)) {
            $zip->addFile($filePath, $fileName);
        }
    }

    // Fermer le fichier ZIP
    $zip->close();

    // Permettre le téléchargement du fichier ZIP
    header('Content-Type: application/zip');
    header('Content-Disposition: attachment; filename="' . basename($zipFileName) . '"');
    header('Content-Length: ' . filesize($zipFileName));
    readfile($zipFileName);

    // Supprimer le fichier ZIP du serveur après le téléchargement
    unlink($zipFileName);
    exit;
}
?>