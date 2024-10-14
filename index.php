<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover beautiful destinations and plan your next adventure with ease.">
    <title>TravelMate - Plan Your Journey</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <h1>TravelMate</h1>
        <nav>
            <ul>
                <li><a href="#destinations">Destinations</a></li>
                <li><a href="#itineraries">Itineraries</a></li>
                <li><a href="#bookings">Book Now</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <section id="hero">
        <h2>Explore the World with TravelMate</h2>
        <p>Find your next destination and plan your adventure with ease.</p>
        <a href="#bookings" class="btn">Book Now</a>
    </section>

    <section id="destinations">
        <h2>Popular Destinations</h2>
        <div class="destination-card">
            <img src="paris.jpg" alt="Paris">
            <h3>Paris</h3>
            <p>The City of Lights, known for its culture and history.</p>
        </div>
        <div class="destination-card">
            <img src="tokyo.jpg" alt="Tokyo">
            <h3>Tokyo</h3>
            <p>A vibrant city blending technology with tradition.</p>
        </div>
        <div class="destination-card">
            <img src="newyork.jpg" alt="New York">
            <h3>New York</h3>
            <p>The city that never sleeps, filled with attractions and culture.</p>
        </div>
    </section>

    <section id="itineraries">
        <h2>Sample Itineraries</h2>
        <div class="itinerary">
            <h3>3 Days in Paris</h3>
            <p>Day 1: Eiffel Tower, Louvre Museum, and Seine River cruise...</p>
        </div>
        <div class="itinerary">
            <h3>5 Days in Tokyo</h3>
            <p>Day 1: Shibuya Crossing, Tokyo Tower, and Meiji Shrine...</p>
        </div>
    </section>

    <section id="bookings">
        <h2>Book Your Trip</h2>
        <form action="book.php" method="POST">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="destination">Select Destination:</label>
            <select id="destination" name="destination" required>
                <option value="paris">Paris</option>
                <option value="tokyo">Tokyo</option>
                <option value="newyork">New York</option>
            </select>

            <label for="date">Travel Date:</label>
            <input type="date" id="date" name="date" required>

            <button type="submit">Book Now</button>
        </form>
    </section>

    <footer id="contact">
        <h2>Contact Us</h2>
        <form action="contact.php" method="POST">
            <label for="contact-name">Name:</label>
            <input type="text" id="contact-name" name="contact-name" required>

            <label for="contact-email">Email:</label>
            <input type="email" id="contact-email" name="contact-email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Send Message</button>
        </form>
        <p>Follow us on:</p>
        <a href="#">Facebook</a> | <a href="#">Instagram</a> | <a href="#">Twitter</a>
    </footer>

</body>
</html>
