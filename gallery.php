<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - TechWeb V2</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            background-image: url('background.jpg');
            background-size: cover;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        main {
            padding: 20px;
        }
        section {
            margin-bottom: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .gallery-images img {
            width: 150px;
            height: 150px;
            margin-right: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .logo {
            width: 50px;
            height: 50px;
        }
        .user-actions {
            display: flex;
            gap: 10px;
        }
    </style>
</head>
<body>
    <header>
        <img src="logo.png" alt="Logo" class="logo">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="inventory.php">Inventory</a></li>
            </ul>
        </nav>
        <div class="user-actions">
            <button onclick="window.location.href='logout.php'">Logout</button>
        </div>
    </header>
    <main>
        <section id="gallery">
            <h2>Gallery</h2>
            <div class="gallery-images">
                <img src="image1.jpg" alt="Image 1">
                <img src="image2.jpg" alt="Image 2">
                <img src="image3.jpg" alt="Image 3">
                <img src="image4.jpg" alt="Image 4">
                <img src="image5.jpg" alt="Image 5">
            </div>
        </section>
    </main>
</body>
</html>
