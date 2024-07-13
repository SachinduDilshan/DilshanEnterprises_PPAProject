<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAC-XL 10.00 - 20</title>
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

.product-details {
    display: flex;
    align-items: start;
    padding: 20px;
    background-color: white;
    margin: 20px;
}

.product-details img {
    width: 300px;
    height: auto;
    margin-right: 20px;
}

.description {
    flex-grow: 1;
}

.description h1 {
    color: #333;
}

.description p {
    font-size: 16px;
    color: #666;
}

.price {
    font-size: 24px;
    color: #333;
    margin: 10px 0;
}

.quantity {
    display: flex;
    align-items: center;
    margin: 10px 0;
}

.quantity button {
    padding: 5px 10px;
    margin-right: 5px;
    font-size: 16px;
}

.quantity input {
    width: 50px;
    text-align: center;
}

.buy-now, .add-to-cart {
    background-color: #fa0;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    margin-right: 10px;
    cursor: pointer;
}

.add-to-cart {
    background-color: #333;
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
    <main>
        <section class="product-details">
            <img src="tire.png" alt="TRAC-XL Tire">
            <div class="description">
                <h1>TRAC-XL 10.00 - 20</h1>
                <p>For terrain with scattered logs, coal, and rocks, the TRAC - XL is a heavy-duty tire. It is made to provide the exceptional traction and grip needed to function well in challenging conditions.</p>
                <p>Qualities & Advantages:</p>
                <ul>
                    <li>High ground contact area for greater grip on terrain with rock, coal, and logs.</li>
                    <li>Specially designed non-directional tread pattern.</li>
                </ul>
                <div class="price">Rs. 290,000.00</div>
                <div class="quantity">
                    <button>-</button>
                    <input type="number" value="1" min="1">
                    <button>+</button>
                </div>
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </section>
    </main>
</body>
</html>
