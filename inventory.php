<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory - TechWeb V2</title>
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
        <section id="inventory">
            <h2>Current Technology Inventory</h2>
            <ul>
                <li>Projector</li>
                <li>Laptop</li>
                <li>Microphone</li>
                <li>Speakers</li>
                <li>Camera</li>
            </ul>
        </section>
    </main>
</body>
</html>
