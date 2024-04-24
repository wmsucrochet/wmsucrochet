<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yarn Craft Emporium</title>
    <link rel="icon" type="image/png" href="images/LOGO/LOGO.jpg" />
    <link href="cart.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />

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
      <div>
        <div class="crochet-co">
          <h1 class="Comname"><a href="index.php">Yarn Craft Emporium</a></h1>
        </div>
        <div class="Icons">
          <div class="CA">
            <a>
              <span class="material-icons" style="color: #8b6741"
                >shopping_cart</span
              >
            </a>
            <a href="Login.php">
              <span class="material-icons" style="color: #8b6741"
                >account_circle</span
              >
            </a>
          </div>
        </div>
      </div>
    </header>

    <main>
      <div class="cart">
        <h2>Cart</h2>
        <ul id="cart-items">
          <!-- Cart items will be dynamically added here -->
        </ul>
        <button id="checkout-btn">Checkout</button>
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
      //TODO: for the cart

      let cartItems = [];

      function renderCart() {
        const cartList = document.getElementById("cart-items");
        cartList.innerHTML = "";

        cartItems.forEach((item) => {
          const li = document.createElement("li");
          li.innerHTML = `
          <img src="${item.image}" alt="${item.name}" style="width: 50px; height: 50px;">
          <span>${item.name}</span>
          <div class="quantity">
            <button onclick="decrementQuantity(${item.id})">-</button>
            <span>${item.quantity}</span>
            <button onclick="incrementQuantity(${item.id})">+</button>
          </div>
          <button onclick="removeItem(${item.id})">Delete</button>
        `;
          cartList.appendChild(li);
        });
      }

      function incrementQuantity(itemId) {
        const itemIndex = cartItems.findIndex((item) => item.id === itemId);
        if (itemIndex !== -1) {
          cartItems[itemIndex].quantity++;
          renderCart();
        }
      }

      function decrementQuantity(itemId) {
        const itemIndex = cartItems.findIndex((item) => item.id === itemId);
        if (itemIndex !== -1 && cartItems[itemIndex].quantity > 1) {
          cartItems[itemIndex].quantity--;
          renderCart();
        }
      }

      function removeItem(itemId) {
        cartItems = cartItems.filter((item) => item.id !== itemId);
        renderCart();
      }

      document.getElementById("checkout-btn").addEventListener("click", () => {
        // Redirect to Checkout.html
        window.location.href = "Checkout.php";
      });

      // Example usage
      cartItems.push({
        id: 1,
        name: "Product 1",
        quantity: 1,
        image: "path/to/product1.jpg",
      });
      cartItems.push({
        id: 2,
        name: "Product 2",
        quantity: 2,
        image: "path/to/product2.jpg",
      });

      renderCart();

      //TODO: for the shipping policy

      document.addEventListener("DOMContentLoaded", function () {
        document
          .querySelector('a[href="#shipping-policy"]')
          .addEventListener("click", function (event) {
            event.preventDefault();
            document.querySelector("#shipping-policy").scrollIntoView({
              behavior: "smooth",
            });
          });
      });

      // TODO: this is for the navbar highlight
      document.addEventListener("DOMContentLoaded", function () {
        const menuItems = document.querySelectorAll(".menu-drawer__menu-item");
        menuItems.forEach(function (item) {
          item.addEventListener("click", function () {
            menuItems.forEach(function (element) {
              element.classList.remove("active");
            });
            this.classList.add("active");
          });
        });
      });
    </script>
  </body>
</html>
