<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gim Tank Hanifah</title>
    <style>
    body {
        background-image: url(tnh.jpg);
        background-size: cover;
        overflow: hidden;
        height: 100vh;
        background-repeat: no-repeat;
        background-size: cover;
        animation: scrollBackground 0.7s linear infinite;
        /* Sesuaikan durasi animasi dan nama animasi jika diperlukan */
    }

    @keyframes scrollBackground {
        from {
            background-position: 0 100%;
        }

        to {
            background-position: 0 0;
        }


    }

    .img {
        position: absolute;
        margin: 0 5px;


    }

    .img-container {
        position: relative;
        right: 0;
        top: 0;

    }

    .atas {
        width: 100%;
        height: 90%;
    }

    .bawah {
        width: 100%;
        height: 10%;
        position: fixed;
        bottom: 0;
    }

   



    .moving-image {
        width: 100px;
        position: relative;
        top: -500px;
        left: ;
        transform: translateX(20);
        animation: moveLeftRight 10s linear infinite;
        /* Adjust the duration and timing function as needed */
    }

    @keyframes moveLeftRight {
        0% {
            transform: translateX(0);
        }

        50% {
            transform: translateX(calc(80vw - 10px));
        }

        100% {
            transform: translateX(0);
        }
    }
    </style>
</head>

<body>
    <div class="atas"></div>
    <div class="bawah">
        <div class="img-container">
            <img src="plr.png" id="tendang" class="img" width="50px">
            <img src="tank.png" id="img" class="img" width="50px">
            <audio id="sound" src="soundtank.mp3"></audio>
            <div class="musuh">
                <img src="tentara.png" alt="" class="moving-image">
            </div>
            <div></div>
</body>

</html>
<script src="main.js"></script>