<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechWeb V2</title>
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
        button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #555;
        }
        #gallery-preview img {
            width: 100px;
            height: 100px;
            margin-right: 10px;
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
            <button onclick="window.location.href='profile.php'">Open Profile</button>
            <button onclick="window.location.href='logout.php'">Logout</button>
        </div>
    </header>
    <main>
        <section id="news">
            <h2>News</h2>
            <p>"Sometimes you should put the gag the right way around."</p>
        </section>
        <section id="next-event">
            <h2>Next Event</h2>
            <p>Name: Tech Meeting</p>
            <p>Start: 2023-05-01 10:00</p>
            <p>End: 2023-05-01 12:00</p>
            <p>Location: Room 101</p>
            <p>Countdown: <span id="countdown">10 days</span></p>
        </section>
        <section id="gallery-preview">
            <h2>Gallery Preview</h2>
            <img src="image1.jpg" alt="Image 1">
            <img src="image2.jpg" alt="Image 2">
            <img src="image3.jpg" alt="Image 3">
        </section>
        <section id="attendance-ranking">
            <h2>Attendance Ranking</h2>
            <ul>
                <li>User 1 - 10 events</li>
                <li>User 2 - 8 events</li>
                <li>User 3 - 7 events</li>
            </ul>
        </section>
    </main>
</body>
</html>
