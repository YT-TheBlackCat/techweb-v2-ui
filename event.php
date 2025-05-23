<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Details - TechWeb V2</title>
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
        <section id="event-details">
            <h2>Event Details</h2>
            <p>Name: Tech Meeting</p>
            <p>Start: 2023-05-01 10:00</p>
            <p>End: 2023-05-01 12:00</p>
            <p>Required Technology: Projector, Laptop</p>
            <p>Additional Info: Bring your own laptop</p>
            <p>Contact Person: John Doe</p>
            <p>Sub-events: Introduction, Main Session, Q&A</p>
        </section>
        <section id="attendees">
            <h2>Attendees</h2>
            <ul>
                <li>User 1 (Present)</li>
                <li>User 2 (Absent)</li>
                <li>User 3 (Present, but no time entered)</li>
            </ul>
        </section>
        <section id="attendance-actions">
            <h2>Attendance Actions</h2>
            <button>Mark as Present</button>
            <button>Mark as Absent</button>
            <form action="attendance_update.php" method="post">
                <label for="additional-info">Additional Info:</label>
                <input type="text" id="additional-info" name="additional-info">
                <button type="submit">Submit</button>
            </form>
        </section>
        <section id="attendance-tracking">
            <h2>Attendance Tracking</h2>
            <form action="attendance_duration.php" method="post">
                <label for="attendance-duration">Duration of Attendance (hours):</label>
                <input type="number" id="attendance-duration" name="attendance-duration" required>
                <button type="submit">Submit</button>
            </form>
        </section>
    </main>
</body>
</html>
