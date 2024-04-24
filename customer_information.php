<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yarn Craft Emporium</title>
    <link rel="stylesheet" href="customer_information.css" />
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
            <li><a href="All_Produts.php">All Products</a></li>
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
        <h2>Customer Information</h2>
        <table>
          <thead>
            <tr>
              <th>Name</th>
              <th>Email Address</th>
              <th>Phone Number</th>
              <th>Shipping Address</th>
            </tr>
          </thead>
          <tbody id="customer-table">
            <!-- Customer information rows will be added here -->
          </tbody>
        </table>
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
    document.addEventListener("DOMContentLoaded", function () {
      // Dummy customer data (for demonstration purposes)
      var customers = [
        {
          name: "John Doe",
          email: "john.doe@example.com",
          phone: "123-456-7890",
          address: "123 Main St, Anytown, USA",
        },
        {
          name: "Jane Smith",
          email: "jane.smith@example.com",
          phone: "987-654-3210",
          address: "456 Elm St, Othertown, USA",
        },
        {
          name: "Jane Smith",
          email: "jane.smith@example.com",
          phone: "987-654-3210",
          address: "456 Elm St, Othertown, USA",
        },
        {
          name: "Jane Smith",
          email: "jane.smith@example.com",
          phone: "987-654-3210",
          address: "456 Elm St, Othertown, USA",
        },
      ];

      var customerTable = document.getElementById("customer-table");

      // Populate the customer table
      customers.forEach(function (customer) {
        var row = document.createElement("tr");
        row.innerHTML = `
      <td>${customer.name}</td>
      <td>${customer.email}</td>
      <td>${customer.phone}</td>
      <td>${customer.address}</td>
    `;
        customerTable.appendChild(row);
      });
    });
  </script>
</html>
