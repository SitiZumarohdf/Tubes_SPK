<?php
include "koneksi.php";
?>
<html>

<head>
    <title>About | Profile Matching</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            padding-top: 50px;
        }

        .navbar {
            margin-bottom: 20px;
        }

        .container {
            margin-top: 40px;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-success font-weight-bold fixed-top">
        <a class="navbar-brand text-white" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="inputdata.php">Input Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="inputdata.php">Update Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="proses.php">Record</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="ranking.php">Ranking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="about.php">About</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /Navbar -->

    <div class="container">
        <h1 class="mt-5">About</h1>
        <p>Created by:
            - Rina Puji Hariyanti
            - Siti Zumaroh Dian Febrianti
        </p>
    </div>

    <footer class="footer  bg-dark">
        <div class="container text-white">
            <p>&copy;
                <?php echo date('Y'); ?> Profile Matching
            </p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7qjB2lc0hVQ3Q5dY+bLb/B1O6Xt/sa4DX+kF4E59I1GUyJ6Xk"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEa0kXmB8/1iRMNLz6tU8igM6U7M+"
        crossorigin="anonymous"></script>

</body>

</html