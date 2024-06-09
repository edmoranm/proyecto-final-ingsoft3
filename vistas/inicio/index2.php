<?php include_once '../../vistas/templates/header.php'?>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #0066cc, #66ccff);
            color: black;
            text-align: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        h1 {
            font-size: 3em;
            text-shadow: blue rgba(2, 4, 6, 0.5);
            margin: 50px;
        }
        video {
            width: 100%;
            max-width: 800px;
            border: 3px solid blue;
            border-radius: 10px;
            box-shadow: black rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <h1>ESCUELA DE INFORMATICA</h1>
    <video controls>
        <source src="../../images/videoplayback.mp4" type="video/mp4">
    </video>
</body>
<?php include_once '../../vistas/templates/footer.php'?>

