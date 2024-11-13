<?php
// Ensure a video ID is passed to the script
if (!isset($_GET['coffee-video']) || empty($_GET['coffee-video'])) {
    echo "Error: No video ID provided.";
    exit;
}
?>
