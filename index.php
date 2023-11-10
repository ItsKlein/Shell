<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharaoh's Egyptian Theme</title>
    <style>
        body {
            font-family: 'Goudy Bookletter 1911', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100vh;
            position: relative;
            overflow: hidden;
           
            background: url('https://images8.alphacoders.com/423/423891.jpg');
            background-color: grey;
            font-size: 20px;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        img {
            max-width: 50%;
            max-height: 50%;
            display: block;
            position: relative;
            z-index: 1;
        }

        h1 {
            font-family: 'Papyrus', sans-serif;
            font-size: 3em;
            text-align: center;
            margin: 0;
            position: relative;
            z-index: 1;
            background: linear-gradient(45deg, gold, black);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        h1 span {
           
            display: inline-block;
            animation: spinLetters 3s linear infinite;
        }

        @keyframes spinLetters {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>
<body>
    <div class="background"></div>
    <img src="https://media.tenor.com/OHBCs2ivZKIAAAAC/pharaoh.gif" alt="Pharaoh" />
    <h1><span></span>&#x2625;<span>P</span>HARAOH W<span>A</span>S HERE &#x2625;</h1>
   
</body>
</html>
