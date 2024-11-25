<!DOCTYPE html>
<html>
<head> <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fish Farming</title>
    <link rel="stylesheet" href="styles/style.css">
    
</head>
<body>
    <header>

    </header>
    <nav class="navbar">
        <ul>
        <li><a href="../index.php">back Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="services.php">product</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <center>
    <h2>Contact Us</h2>
    <section id="services" class="section">
        <form action="contact.php" method="post">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="5" required></textarea><br><br>

            <button type="submit">Send</button>
        </form>
        </section>
        <section id="services" class="section">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Simulating form processing
    echo "<h1>Thank you, $name!</h1>";
    echo "<p>Your message has been received:</p>";
    echo "<blockquote>$message</blockquote>";
    echo "<p>We will contact you at $email shortly.</p>";
}
?>
</section>
</center>

    </main>
   
</body>
</html>