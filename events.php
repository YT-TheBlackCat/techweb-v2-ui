<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events - TechWeb V2</title>
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
        .event {
            display: flex;
            flex-direction: column;
            padding: 10px;
            border-bottom: 1px solid #ddd;
            background-color: #f4f4f4;
        }
        .event a {
            text-decoration: none;
            color: #333;
        }
        .event-time {
            font-size: 0.9em;
            color: #666;
        }
        .attendance-status {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            display: inline-block;
        }
        .green-dot {
            background-color: green;
        }
        .red-dot {
            background-color: red;
        }
        .yellow-dot {
            background-color: yellow;
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
        <section id="events">
            <h2>Upcoming Events</h2>
            <ul>
                <li class="event upcoming" style="background-color: #d4edda;">
                    <a href="event.php?id=1">Tech Meeting</a>
                    <span class="event-time">2023-05-01 10:00 - 2023-05-01 12:00</span>
                    <span class="attendance-status green-dot"></span>
                </li>
                <li class="event past" style="background-color: #f8d7da;">
                    <a href="event.php?id=2">Project Presentation</a>
                    <span class="event-time">2023-04-15 14:00 - 2023-04-15 16:00</span>
                    <span class="attendance-status red-dot"></span>
                </li>
                <li class="event upcoming" style="background-color: #fff3cd;">
                    <a href="event.php?id=3">Workshop</a>
                    <span class="event-time">2023-05-10 09:00 - 2023-05-10 11:00</span>
                    <span class="attendance-status yellow-dot"></span>
                </li>
            </ul>
        </section>
    </main>
</body>
</html>
