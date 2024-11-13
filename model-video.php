<?php
// Ensure a video ID is passed to the script
if (!isset($_GET['coffee-video']) || empty($_GET['coffe-video'])) {
    echo "Error: No video ID provided.";
    exit;
}

// Sanitize the input to prevent security issues
$video_id = htmlspecialchars($_GET['coffe-video'], ENT_QUOTES, 'UTF-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Player</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f4f4f9;
        }
        iframe {
            border: none;
        }
    </style>
</head>
<body>
    <iframe
        width="640"
        height="360"
        src="https://www.youtube.com/embed/<?php echo $coffee-video; ?>"
        title="YouTube video player"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
    </iframe>
</body>
</html>

