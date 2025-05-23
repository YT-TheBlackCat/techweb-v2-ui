<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events - TechWeb V2</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="inventory.php">Inventory</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="events">
            <h2>Upcoming Events</h2>
            <ul>
                <li class="event upcoming">
                    <a href="event.php?id=1">Tech Meeting</a>
                    <span class="event-time">2023-05-01 10:00 - 2023-05-01 12:00</span>
                    <span class="attendance-status green-dot"></span>
                </li>
                <li class="event past">
                    <a href="event.php?id=2">Project Presentation</a>
                    <span class="event-time">2023-04-15 14:00 - 2023-04-15 16:00</span>
                    <span class="attendance-status red-dot"></span>
                </li>
                <li class="event upcoming">
                    <a href="event.php?id=3">Workshop</a>
                    <span class="event-time">2023-05-10 09:00 - 2023-05-10 11:00</span>
                    <span class="attendance-status yellow-dot"></span>
                </li>
            </ul>
        </section>
    </main>
</body>
</html>
