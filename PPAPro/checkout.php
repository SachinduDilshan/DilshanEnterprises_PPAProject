<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Dilshan Enterprises</title>
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

main {
    display: flex;
    justify-content: space-around;
    padding: 20px;
}

.summary, .checkout-info {
    background-color: white;
    padding: 20px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.summary h2, .totals div, .product-summary div {
    margin-bottom: 10px;
}

.totals div, .product-summary div {
    display: flex;
    justify-content: space-between;
}

fieldset {
    border: none;
    margin: 10px 0;
}

label {
    display: block;
    margin-bottom: 10px;
}

input[type="text"], input[type="email"] {
    width: calc(100% - 20px);
    padding: 10px;
}

button {
    background-color: #333;
    color: white;
    border: none; 
    padding: 15px 30px;
    font-size: 16px;
    cursor: pointer; 
    border-radius: 5px; 
    margin-top: 20px; 
    transition: background-color 0.3s; 
}

button:hover {
    background-color: #fa0;
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
        <section class="summary">
            <h2>Summary</h2>
            <div class="product-summary">
                <img src="tire.png" alt="TRAC-XL Tire">
                <div>TRAC-XL 10.00 - 20</div>
                <div>Rs. 290,000.00</div>
                <div>Qty 1</div>
            </div>
            <div class="totals">
                <div>Subtotal</div>
                <div>Rs. 290,000.00</div>
                <div>Shipping</div>
                <div>Rs. 0.00</div>
                <div>Total</div>
                <div>Rs. 290,000.00</div>
            </div>
        </section>
        <section class="checkout-info">
            <form action="#">
                <fieldset>
                    <legend>Shipping information</legend>
                    <label>Email<input type="email" name="email"></label>
                    <label>Name<input type="text" name="name"></label>
                    <label>Address<input type="text" name="address"></label>
                </fieldset>
                <fieldset>
                    <legend>Payment details</legend>
                    <label>Card Information<input type="text" name="card-info"></label>
                    <label>MM/YY<input type="text" name="expiry"></label>
                    <label>CVC<input type="text" name="cvc"></label>
                    <label><input type="checkbox"> Billing address is same as shipping</label>
                </fieldset>
                <button type="submit">Pay Rs. 290,000.00</button>
            </form>
        </section>
    </main>
</body>
</html>
