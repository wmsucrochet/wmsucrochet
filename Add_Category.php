<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yarn Craft Emporium</title>
    <link rel="stylesheet" href="Add_Categories.css" />
  </head>
  <body>
    <main>
      <div class="sidebar">
        <button
          class="accordion"
          onclick="window.location.href='Dashboard.php'"
        >
          Dashboard
        </button>
        <div class="panel">
          <p>Dashboard content goes here...</p>
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
          <ul>
            <li><a href="add_product.php">New Orders</a></li>
            <li><a href="All_Produts.php">Completed Orders</a></li>
          </ul>
        </div>
        <button class="accordion">Product Categories</button>
        <div class="panel">
          <ul>
            <li><a href="all_category.php">All Categories</a></li>
          </ul>
        </div>
        <button class="accordion" onclick="window.location.href='Payment.php'">
          Payments
        </button>
        <button
          class="accordion"
          onclick="window.location.href='Shipping_Rates.php'"
        >
          Shipping Rates
        </button>

        <button class="accordion" onclick="window.location.href='Login.php'">
          Log out
        </button>
      </div>

      <div class="content"></div>
    </main>
  </body>
  <script>
    // for the dashboard button
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
          panel.style.display = "none";
        } else {
          panel.style.display = "block";
        }
      });
    }
    // JavaScript for the admin dashboard functionality
    document.addEventListener("DOMContentLoaded", function () {
      var acc = document.getElementsByClassName("accordion");
      var i;
    });

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
  </script>
</html>
