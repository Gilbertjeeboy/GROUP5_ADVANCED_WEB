<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fish Farming</title>
    <link rel="stylesheet" href="styles/style.css">
    <style>
        /* CSS for the gallery */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            padding: 15px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .gallery img:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <header class="header">
        <h1>Welcome to AquaFresh Fish Farming</h1>
        <p>Your trusted partner in sustainable aquaculture.</p>
    </header>

    <nav class="navbar">
        <ul>
        <li><a href="../index.php">back Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="services.php">product</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>

    <main>
    <h1>our fish farming services </h1>
    
    <div class="gallery">
        <!-- Add your images here -->
         <div>
            <h3>Fish Breeding and Hatcheries</h3>
            <img src="images/image2.jpg" alt="Image 2">
         </div>
         <div>
            <h3>Pond Management</h3>
            <img src="images/image3.jpg" alt="Image 3">
         </div>
        <div>
            <h3>Feed Supply and Nutrition</h3>
              <img src="images/image4.jpg" alt="Image 4">
        </div>
        <div>
            <h3>Consultation on Sustainable</h3> 
            <img src="images/image5.jpg" alt="Image 5">
        </div>
        </div>
        <div>
  

        <section id="services" class="section">
            <center>
            <h2>Our Services</h2>
            <ul>
               <h4>Fish Breeding and Hatcheries</h4> 
                <h4>Pond Management</h4>
                <h4>Feed Supply and Nutrition</h4>
                <h4>Consultation on Sustainable Practices</h4>
            </ul>
            </center>
        </section>
        </div>
    </main>

</body>
</html>
