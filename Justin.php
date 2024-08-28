<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> &#128525; I LOVE YOU JUSTIN OMG PLEASE NOTICE ME &#128525; </title>
    <style>
        body {
            margin: 0;
            height: 200vh; /* Makes the page scrollable */
            font-family: Arial, sans-serif;
            background-color: #000; /* Optional: for better contrast */
        }

        .background {
            background-image: url('Justin/justin1.jpg');
            background-size: 100% auto; /* Start with 100% width */
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
            position: fixed; /* Keeps the background fixed while scrolling */
            width: 100%;
            z-index: -1;
            transition: background-size 0.1s linear; /* Smooth transition */
        }

        .content {
            position: relative;
            z-index: 1;
            padding: 20px;
            color: red;
        }

        .video-container {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%); /* Center the container */
            width: 640px; /* Increase the width */
            height: 360px; /* Increase the height */
            opacity: 0;
            transition: opacity 0.5s ease;
            pointer-events: none; /* Prevent interaction until the video is visible */
            z-index: 1; /* Ensure the video is above other content */
        }

        .video-container iframe {
            width: 100%;
            height: 100%;
        }
        
    </style>
</head>
<body>
    <div class="background" id="background"></div>
    <div class="content">
        <h1> &#128525;&#128525; Welcome to your worst nightmare! &#128525;&#128525;</h1>
        <p>Give in. Give up.</p>
        <p>There is no hope; no escape</p>
        <!-- Add more content here to make the page scrollable -->
    </div>

    <div class="video-container" id="videoContainer">
        <iframe id="video" src="https://www.youtube.com/embed/kffacxfA7G4?enablejsapi=1&controls=1&autoplay=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <script>
        
        window.addEventListener('scroll', function() {
            const scrollPosition = window.scrollY; // Get the current scroll position
            const zoomFactor = 100 + scrollPosition * 0.2; // Adjust zoom speed
            document.getElementById('background').style.backgroundSize = zoomFactor + '% auto';
        });

        window.addEventListener('scroll', function() {
            const scrollableHeight = document.documentElement.scrollHeight - window.innerHeight;
            const scrollPosition = window.scrollY;
            const videoContainer = document.getElementById('videoContainer');
            const video = document.getElementById('video').contentWindow;

            if (scrollPosition >= scrollableHeight) {
                videoContainer.style.opacity = 1; // Show the video
                videoContainer.style.pointerEvents = 'auto'; // Allow interaction
                video.postMessage('{"event":"command","func":"playVideo","args":""}', '*'); // Play the video
            } else {
                videoContainer.style.opacity = 0; // Hide the video
                videoContainer.style.pointerEvents = 'none'; // Disable interaction
                video.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*'); // Pause the video
            }
        });
    </script>
</body>
</html>
