<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yarn Craft Emporium</title>
    <link rel="stylesheet" href="add_product.css" />
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
            <li><a href="All_Category.php">All Categories</a></li>
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

      <div class="content">
        <h2>Add Product</h2>
        <div class="admin-dashboard-item" id="add-product-form">
          <label for="product-name">Product Name:</label>
          <input type="text" id="product-name" name="product-name" />
        </div>
        <div class="admin-dashboard-item">
          <label for="quantity">Quantity:</label>
          <input type="text" id="quantity" name="quantity" />
        </div>
        <div class="admin-dashboard-item">
          <label for="price">Price:</label>
          <input type="text" id="price" name="price" />
        </div>
        <div class="admin-dashboard-item">
          <label for="description">Product Description:</label>
          <textarea id="description" name="description"></textarea>
        </div>
        <div class="admin-dashboard-item">
          <label for="category">Category:</label>
          <select id="category" name="category">
            <option value="Tops">Tops</option>
            <option value="Beanies">Beanies</option>
            <option value="Sweatshirt">Sweatshirt</option>
            <option value="Tees">Tees</option>
            <option value="Accessories">Accessories</option>
          </select>
        </div>
        <div class="admin-dashboard-item">
          <label for="image">Image:</label>
          <input type="file" id="image" name="image" />
        </div>
        <div class="admin-dashboard-item">
          <button onclick="addProduct()">Add Product</button>
        </div>
      </div>
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

    document.addEventListener("DOMContentLoaded", function () {
      document
        .getElementById("add-category")
        .addEventListener("click", function () {
          var categoryName = prompt("Enter category name:");
          if (categoryName) {
            var li = document.createElement("li");
            li.textContent = categoryName + " ";
            var editButton = document.createElement("button");
            editButton.textContent = "Edit";
            editButton.classList.add("edit-category");
            var deleteButton = document.createElement("button");
            deleteButton.textContent = "Delete";
            deleteButton.classList.add("delete-category");
            li.appendChild(editButton);
            li.appendChild(deleteButton);
            document.querySelector(".category-list ul").appendChild(li);
          }
        });

      document
        .getElementById("update-category")
        .addEventListener("click", function () {
          var selectedCategory = document.querySelector(
            ".category-list li.selected"
          );
          var categoryName = prompt(
            "Enter new category name:",
            selectedCategory.textContent.trim()
          );
          if (categoryName) {
            selectedCategory.textContent = categoryName + " ";
          }
        });

      document
        .getElementById("delete-category")
        .addEventListener("click", function () {
          var selectedCategory = document.querySelector(
            ".category-list li.selected"
          );
          if (selectedCategory) {
            selectedCategory.remove();
          }
        });

      document.querySelectorAll(".edit-category").forEach(function (button) {
        button.addEventListener("click", function () {
          document.querySelectorAll(".category-list li").forEach(function (li) {
            li.classList.remove("selected");
          });
          this.parentNode.classList.add("selected");
        });
      });

      document.querySelectorAll(".delete-category").forEach(function (button) {
        button.addEventListener("click", function () {
          this.parentNode.remove();
        });
      });
    });
  </script>
</html>
