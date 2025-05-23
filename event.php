<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Details - TechWeb V2</title>
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
