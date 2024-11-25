<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <link rel="stylesheet" href="styles/style.css">
    <style>
        /* CSS for the gallery */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url("image1.jpeg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
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
<nav class="navbar">
        <ul>
        <li><a href="../index.php"> back Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="services.php">product</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <main></main>
    <h1>our fish farming product </h1>
    
    <div class="gallery">
        <!-- Add your images here -->
        <img src="images/image2.jpg" alt="Image 2">
        <img src="images/image3.jpg" alt="Image 3">
        <img src="images/image4.jpg" alt="Image 4">
        <img src="images/image5.jpg" alt="Image 5">
        <img src="images/image6.jpg" alt="Image 6">
        <img src="images/image7.jpg" alt="Image 7">
        <img src="images/image8.jpg" alt="Image 8">
        <img src="images/image12.jpg" alt="Image 12">
        <img src="images/image13.jpg" alt="Image 13">
        <img src="images/image14.jpg" alt="Image 14">
        <img src="images/image15.jpg" alt="Image 15">
        <img src="images/image16.jpg" alt="Image 16">
        <img src="images/image1.jpg" alt="Image 1">
        <img src="images/image2.jpg" alt="Image 2">
        <img src="images/image3.jpg" alt="Image 3">
        <img src="images/image4.jpg" alt="Image 4">
        <img src="images/image5.jpg" alt="Image 5">
        <img src="images/image6.jpg" alt="Image 6">
        <img src="images/image12.jpg" alt="Image 12">
    </div>
    </main>
</body>
</html>

