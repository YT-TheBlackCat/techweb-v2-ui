<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechWeb V2</title>
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
        <section id="news">
            <h2>News</h2>
            <p>"Sometimes you should put the gag the right way around."</p>
        </section>
        <section id="gallery-preview">
            <h2>Gallery Preview</h2>
            <img src="image1.jpg" alt="Image 1">
            <img src="image2.jpg" alt="Image 2">
            <img src="image3.jpg" alt="Image 3">
        </section>
        <section id="user-actions">
            <button onclick="window.location.href='profile.php'">Open Profile</button>
            <button onclick="window.location.href='logout.php'">Logout</button>
        </section>
        <section id="next-event">
            <h2>Next Event</h2>
            <p>Name: Tech Meeting</p>
            <p>Start: 2023-05-01 10:00</p>
            <p>End: 2023-05-01 12:00</p>
            <p>Location: Room 101</p>
            <p>Countdown: <span id="countdown">10 days</span></p>
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
