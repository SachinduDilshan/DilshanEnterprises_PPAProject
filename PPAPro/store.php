<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dilshan Enterprises - Home Delivery Promotion</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

header {
    background-color: #000;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
}

.logo {
    font-size: 24px;
}

nav ul {
    list-style: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 10px;
}

nav ul li a {
    color: white;
    text-decoration: none;
}

.user-info img {
    width: 24px;
    vertical-align: middle;
}

.user-info span {
    margin-left: 5px;
}

.search-bar input[type="search"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    font-size: 16px;
}

.promotion {
    text-align: center;
    background-color: #333;
    color: white;
    padding: 20px;
}

.promotion h1 {
    margin: 0;
    padding-bottom: 20px;
}

.promotion button {
    padding: 10px 20px;
    font-size: 16px;
    color: white;
    background-color: #fa0;
    border: none;
    cursor: pointer;
}

.product-grid {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    padding: 10px;
}

.product-card {
    background-color: #fff;
    text-align: center;
    padding: 20px;
    margin: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    width: 220px; /* adjust as necessary */
}

.product-card img {
    width: 100%;
    height: auto;
}

.product-size, .product-price {
    display: block;
    margin-top: 10px;
}
</style>
<body>
    <header>
        <div class="logo">DILSHAN ENTERPRISES</div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="#">Store</a></li>
            </ul>
        </nav>
        <div class="user-info">
            <img src="user-icon.png" alt="User Icon">
            <span>Sachindu Dilshan</span>
            <img src="cart-icon.png" alt="Shopping Cart">
        </div>
    </header>
    <div class="search-bar">
        <input type="search" placeholder="Search">
    </div>
    <section class="promotion">
        <h1>Enjoy free home delivery this time of the year</h1>
        <button>Get Started</button>
    </section>
    <section class="product-grid">
        <!-- Sample product card -->
        <div class="product-card">
            <img src="tire1.png" alt="Tire 100/80-17">
            <span class="product-size">100/80-17</span>
            <span class="product-price">Rs. 11,000</span>
        </div>
        <div class="product-card">
            <img src="tire1.png" alt="Tire 100/80-17">
            <span class="product-size">100/80-17</span>
            <span class="product-price">Rs. 11,000</span>
        </div>
        <div class="product-card">
            <img src="tire1.png" alt="Tire 100/80-17">
            <span class="product-size">100/80-17</span>
            <span class="product-price">Rs. 11,000</span>
        </div>
        <div class="product-card">
            <img src="tire1.png" alt="Tire 100/80-17">
            <span class="product-size">100/80-17</span>
            <span class="product-price">Rs. 11,000</span>
        </div>
        <div class="product-card">
            <img src="tire1.png" alt="Tire 100/80-17">
            <span class="product-size">100/80-17</span>
            <span class="product-price">Rs. 11,000</span>
        </div>
        <div class="product-card">
            <img src="tire1.png" alt="Tire 100/80-17">
            <span class="product-size">100/80-17</span>
            <span class="product-price">Rs. 11,000</span>
        </div>
        <div class="product-card">
            <img src="tire1.png" alt="Tire 100/80-17">
            <span class="product-size">100/80-17</span>
            <span class="product-price">Rs. 11,000</span>
        </div>
        <div class="product-card">
            <img src="tire1.png" alt="Tire 100/80-17">
            <span class="product-size">100/80-17</span>
            <span class="product-price">Rs. 11,000</span>
        </div>
        <div class="product-card">
            <img src="tire1.png" alt="Tire 100/80-17">
            <span class="product-size">100/80-17</span>
            <span class="product-price">Rs. 11,000</span>
        </div>
        <div class="product-card">
            <img src="tire1.png" alt="Tire 100/80-17">
            <span class="product-size">100/80-17</span>
            <span class="product-price">Rs. 11,000</span>
        </div>
        <!-- Additional product cards would be similar -->
    </section>
</body>
</html>
