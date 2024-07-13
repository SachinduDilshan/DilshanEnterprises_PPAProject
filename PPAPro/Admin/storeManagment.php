<?php 

require_once '../connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Dilshan Enterprises</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" type="text/css" href="admincss/adminstyle.css">
    <link rel="stylesheet"  type="text/css" hred="admincss/style.css">
</head>
<style>
    body {

    font-family: Arial, sans-serif;
    display: grid;
    grid-template-areas:
        "aside header"
        "aside main";
    grid-template-columns: 240px 1fr;
    grid-template-rows: auto 1fr;
    gap: 20px;
    height: 100vh;
    margin: 0;
    background-color: #e0e0e0;
}

aside {
    grid-area: aside;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.logo {
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
}

nav ul {
    list-style: none;
    padding: 0;
}

nav ul li a {
    display: block;
    padding: 10px;
    background-color: yellow;
    margin-bottom: 5px;
    text-decoration: none;
    color: black;
    border-radius: 5px;
    text-align: center;
}

header {
    grid-area: header;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-color: #777777;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

main {
    grid-area: main;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.search-bar input {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.form-container {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 20px;
}

.form-container input, .form-container button {
    padding: 10px;
    flex-grow: 1;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.form-container button {
    background-color: yellow;
    color: black;
    cursor: pointer;
    border: none;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
}

th, td {
    padding: 10px;
    text-align: left;
}

.delete-btn {
    background: none;
    border: none;
    cursor: pointer;
    font-size: 16px;
    color: red;
}

@media screen and (max-width: 768px) {
    body {
        grid-template-areas:
            "header"
            "main";
        grid-template-columns: 1fr;
    }

    aside {
        display: none;  /* Hide the sidebar on smaller screens */
    }

    .form-container {
        flex-direction: column;
    }
}

</style>
<body>
<div class="sidebar">
        <div class="adlogo">
        <img src="dilshan-enterprises-high-resolution-logo-transparent.png">
    </div><br><br><br><br><br><br><br>
            <a href="#">Admin Dashboard Management</a>
            <a href="usermanagement.php">User Management</a>
            <a href="chatmanage.php">Feedback Management</a>
            <a class="active" href="#">Store Management</a>
            <a href="employee.php">Employee Management</a>
            <div class="time-date"><br>
            <span id="current-time"></span><br><br>
            <span id="current-date"></span>
        </div>
        </div>
    <header>
        <h1 style="margin-left: 330px; font-family: ">Store Management</h1>
        <div class="user-info">
            Ms. Kiyara A.
        </div>
    </header>
    <main>
        <div class="search-bar">
            <input type="text" placeholder="Search Order">
        </div>
        <div class="form-container">
            <input type="text" placeholder="Order Id">
            <input type="text" placeholder="Client details">
            <input type="text" placeholder="Shipping details">
            <input type="text" placeholder="Order">
            <button>Add item</button>
            <button>Update</button>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Client details</th>
                    <th>Shipping Details</th>
                    <th>Order</th>
                    <th>Review</th>
                    <th>Decision</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>SD023</td>
                    <td>Sachindu</td>
                    <td>Uyandana, Kurunegala</td>
                    <td>TRAC-XL 10.00 - 20 Qty - 1</td>
                    <td>Successful</td>
                    <td><button class="delete-btn">🗑️</button></td>
                </tr>
            </tbody>
        </table>
    </main>
    <script src="Adminjs/date.js"></script>
</body>
</html>
