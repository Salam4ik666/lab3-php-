<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <style>
        /* CSS стили для примера */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header,
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        nav {
            background-color: #444;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 0 10px;
        }

        nav a:hover {
            background-color: #555;
        }

        .content {
            padding: 20px;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .gallery img {
            margin: 10px;
            max-width: 300px;
            max-height: 300px;
        }
    </style>
</head>

<body>
    <header>
        <h1>My Website</h1>
    </header>
    <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Gallery</a>
        <a href="#">Contact</a>
    </nav>
    <div class="content">
        <h2>Welcome to Our Gallery</h2>
        <div class="gallery">
            <?php
            $imageDir = 'images/';
            $images = glob($imageDir . '*.jpg');
            foreach ($images as $image) {
                echo '<img src="' . $image . '" alt="Image">';
            }
            ?>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 My Website. All rights reserved.</p>
    </footer>
</body>

</html>