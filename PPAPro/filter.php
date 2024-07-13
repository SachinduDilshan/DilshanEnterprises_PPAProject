<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dilshan Enterprises - Tire Selection</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
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

.filter-section form {
    display: flex;
    justify-content: center;
    gap: 10px;
    padding: 20px;
}

.filter-section input,
.filter-section button {
    padding: 10px;
}

.products {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    padding: 10px;
}

.product-card {
    background-color: #fff;
    padding: 20px;
    margin: 10px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    text-align: center;
    width: 200px; /* adjust based on design requirements */
}

.product-card img {
    width: 100%;
    height: auto;
}

@media (max-width: 768px) {
    .filter-section form {
        flex-direction: column;
        align-items: center;
    }

    .products {
        flex-direction: column;
    }

    .product-card {
        width: 90%;
    }
}
</style>
<body>
    <header>
        <div class="logo">DILSHAN ENTERPRISES</div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Store</a></li>
            </ul>
        </nav>
        <div class="user-info">
            <img src="user-icon.png" alt="User Icon">
            <span>Sachindu Dilshan</span>
            <img src="cart-icon.png" alt="Shopping Cart">
        </div>
    </header>
    <section class="filter-section">
        <form action="#" method="GET">
            <input type="text" placeholder="Make" >
            <input type="text" placeholder="Model" >
            <input type="text" placeholder="Category">
            <input type="text" placeholder="Width">
            <input type="text" placeholder="Height">
            <input type="text" placeholder="Diameter">
            <button type="submit">Filter</button>
        </form>
    </section>
    <section class="products">
        <div class="product-card">
            <img src="tire1.png" alt="Tire 100/80-17">
            <span>100/80-17</span>
            <span>Rs. 11,000</span>
        </div>
        <!-- Repeat for other products -->
    </section>
</body>
</html>
