<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yarn Craft Emporium</title>
    <link rel="icon" type="image/png" href="images/LOGO/LOGO.jpg" />
    <link href="buyer.css" rel="stylesheet" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <div class="crochet-co">
        <h1 class="Comname"><a href="index.php">Yarn Craft Emporium</a></h1>
      </div>
      <div class="Icons">
        <div class="CA">
          <a href="cart.php">
            <span class="material-icons" style="color: #8b6741"
              >shopping_cart</span
            >
          </a>
          <a href="index.php">
            <span class="material-icons" style="color: #8b6741">
              <div class="profile">
                <button onclick="logout()">Logout</button>
              </div>
            </span>
          </a>
        </div>
      </div>
    </header>
    <main>
      <div class="sidebar">
        <div class="sidebar-item">
          <button class="accordion">My Account</button>
          <div class="panel">
            <ul>
              <li><a href="Profile.php">Edit Profile</a></li>
              <li><a href="shipping address.php">Shipping Address</a></li>
            </ul>
          </div>
        </div>
        <div class="sidebar-item">
          <button class="accordion">Purchase History</button>
          <div class="panel">
            <div class="purchase-history-container"></div>
          </div>
        </div>
      </div>
      <div class="content">
        <!-- profile and purchase history content -->
        <div class="purchase-history-container">
          <div class="purchase-history-list">
            //TODO:<!-- Purchase history list will be dynamically added here -->
          </div>
        </div>
      </div>
    </main>
    <footer>
      <div class="footer-container">
        <div class="footer-logo">
          <h2>Crochet.Co</h2>
        </div>
        <div class="footer-links">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Shipping Policy</a></li>
          </ul>
        </div>
        <div class="footer-social">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2024 Crochet.Co. All Rights Reserved.</p>
      </div>
    </footer>
    <script>
      function previewImage(event) {
        var image = event.target.files[0];
        var reader = new FileReader();
        reader.onload = function (e) {
          document.querySelector(".profile-image img").src = e.target.result;
        };
        reader.readAsDataURL(image);
      }

      document.addEventListener("DOMContentLoaded", function () {
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

        // Populate purchase history dynamically (dummy data for demonstration)
        var purchaseHistoryContainer = document.querySelector(
          ".purchase-history-list"
        );
        var purchaseHistoryData = [
          {
            name: "Product 1",
            price: "$10",
            status: "Completed",
            image: "path_to_image.jpg",
          },
          {
            name: "Product 2",
            price: "$20",
            status: "Cancelled",
            image: "path_to_image.jpg",
          },
          {
            name: "Product 3",
            price: "$15",
            status: "Completed",
            image: "path_to_image.jpg",
          },
        ];

        purchaseHistoryData.forEach(function (item) {
          var purchaseHistoryItem = document.createElement("div");
          purchaseHistoryItem.classList.add("purchase-history-item");
          purchaseHistoryItem.innerHTML = `
          <img src="${item.image}" alt="${item.name}" />
          <div class="purchase-history-item-details">
            <h3>${item.name}</h3>
            <p>Price: ${item.price}</p>
            <p>Status: ${item.status}</p>
          </div>
        `;
          purchaseHistoryContainer.appendChild(purchaseHistoryItem);
        });
      });
    </script>
  </body>
</html>
