<?php

$folderPath = './src/';

$videos = glob($folderPath . '*.{mp4,avi,webm}', GLOB_BRACE);

if (empty($videos)) {
    echo 'No videos';
    exit;
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Video Lejatszo</title>
</head>

<style>
    #myVideo {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        object-fit: cover;
    }
</style>

<body>
    <video id="myVideo" autoplay muted playsinline></video>
    <script>
        const videos = <?php echo json_encode($videos); ?>;
        const videoElement = document.getElementById('myVideo');
        let videoIndex = 0;

        function playNextVideo() {
            if (videoIndex >= videos.length) {
                videoIndex = 0;
            }
            videoElement.src = videos[videoIndex];
            videoElement.load();
            videoElement.play();
            videoIndex++;
        }

        videoElement.addEventListener('ended', playNextVideo);

        playNextVideo();
    </script>
</body>

</html>