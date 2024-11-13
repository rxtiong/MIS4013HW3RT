<?php
// Ensure a video ID is passed to the script
if (!isset($_GET['coffeeVideo']) || empty($_GET['coffeeVideo'])) {
    echo "Error: No video ID provided.";
    exit;
}

// Sanitize the input to prevent security issues
$coffeeVideo = htmlspecialchars($_GET['coffeeVideo'], ENT_QUOTES, 'UTF-8');
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
        src="https://www.youtube.com/watch?v=0jIeCAOkgcQ<?php echo $coffeeVideo; ?>"
        title="YouTube video player"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
    </iframe>
</body>
</html>

