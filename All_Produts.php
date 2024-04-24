<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yarn Craft Emporium</title>
    <link rel="stylesheet" href="All_Products.css" />
  </head>
  <body>
    <main>
      <div class="sidebar">
        <button class="accordion">Dashboard</button>
        <div class="panel">
          <ul>
            <li><a href="add_product.php">Sales</a></li>
            <li><a href="all_produts.php">All Products</a></li>
          </ul>
        </div>
        <button class="accordion">Products</button>
        <div class="panel">
          <ul>
            <li><a href="add_product.php">Add Product</a></li>
            <li><a href="all_produts.php">All Products</a></li>
          </ul>
        </div>
        <button class="accordion">View Customer</button>
        <div class="panel">
          <ul>
            <li>
              <a href="customer_information.php">Customer Information</a>
            </li>
          </ul>
        </div>
        <button class="accordion">View Order</button>
        <div class="panel">
          <p>View Order Content</p>
        </div>
        <button class="accordion">Product Categories</button>
        <div class="panel">
          <ul>
            <li><a href="all_category.php">All Categories</a></li>
          </ul>

          <p>Product Categories Content</p>
        </div>
        <button class="accordion">View Payments</button>
        <div class="panel">
          <p>View Payments Content</p>
        </div>
        <button class="accordion">Log out</button>
      </div>

      <div class="content">
        <table id="product-table">
          <thead>
            <tr>
              <th>Product Number</th>
              <th>Image</th>
              <th>Product Name</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td><img src="product_image.jpg" alt="Product Image" width="50"></td>
              <td>Product Name</td>
              <td>10</td>
              <td>$50</td>
              <td>
                <button onclick="editProduct(1)">Edit</button>
                <button onclick="removeProduct(1)">Remove</button>
              </td>
            </tr>
            <!-- Add more rows as needed -->
          </tbody>
        </table>
        </div>
      </div>
    </main>
  </body>
  <script>
      // JavaScript for the admin dashboard functionality
document.addEventListener("DOMContentLoaded", function () {
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
      // Hide the "Add Product" form when another accordion button is clicked
      var panels = document.getElementsByClassName("panel");
      for (var j = 0; j < panels.length; j++) {
        if (panels[j].style.display === "block") {
          panels[j].style.display = "none";
        }
      }

      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
    });
  }
});

// Sample product data
let products = [
  { id: 1, name: 'Product 1', quantity: 10, price: 50 },
  // Add more products here
];

// Function to edit a product
function editProduct(id) {
  let product = products.find(p => p.id === id);
  if (!product) return;

  // Example: Redirect to edit page
  window.location.href = `edit_product.php?id=${id}`;
}

// Function to remove a product
function removeProduct(id) {
  let index = products.findIndex(p => p.id === id);
  if (index === -1) return;

  // Remove the product from the array
  products.splice(index, 1);

  // Update the table
  renderProducts();
}

// Function to render products in the table
function renderProducts() {
  let tableBody = document.querySelector('#product-table tbody');
  tableBody.innerHTML = '';

  products.forEach(product => {
    let row = `
      <tr>
        <td>${product.id}</td>
        <td><img src="product_image.jpg" alt="Product Image" width="50"></td>
        <td>${product.name}</td>
        <td>${product.quantity}</td>
        <td>$${product.price}</td>
        <td>
          <button onclick="editProduct(${product.id})">Edit</button>
          <button onclick="removeProduct(${product.id})">Remove</button>
        </td>
      </tr>
    `;
    tableBody.innerHTML += row;
  });
}

// Initial render
renderProducts();



  </script>
</html>
