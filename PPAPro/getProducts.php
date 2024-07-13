<?php
include 'connection.php'; // Database connection

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

$products = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
    echo json_encode($products);
} else {
    echo "0 results";
}

$conn->close();
?>
<script>
window.onload = function() {
    fetch('getProducts.php')
    .then(response => response.json())
    .then(data => {
        const productsContainer = document.querySelector('.product-grid');
        productsContainer.innerHTML = ''; // Clear existing content
        data.forEach(product => {
            productsContainer.innerHTML += `
                <div class="product-card">
                    <img src="${product.image}" alt="Tire ${product.size}">
                    <span class="product-size">${product.size}</span>
                    <span class="product-price">Rs. ${product.price}</span>
                </div>
            `;
        });
    });
};
$search = $_GET['search'] ?? ''; // Get the search term from URL parameter

$sql = "SELECT * FROM products WHERE size LIKE '%$search%' OR price LIKE '%$search%'";
</script>


