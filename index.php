<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yarn Craft Emporium</title>
    <link rel="icon" type="image/png" href="images/LOGO/LOGO.jpg" />
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
            <a href="cart.php">
              <span class="material-icons" style="color: #8b6741"
                >shopping_cart
              </span>
            </a>
            <a href="Login.php">
              <span class="material-icons" style="color: #8b6741">
                account_circle
              </span>
            </a>
          </div>
        </div>
        <div class="Items">
          <nav class="NavBar">
            <ul class="menu-drawer__menu has-submenu list-menu" role="list">
              <li>
                <a
                  href="index.php"
                  class="menu-drawer__menu-item has-submenu"
                  aria-current="page"
                >
                  Home
                </a>
              </li>
              <li class="menu-drawer__menu-item has-submenu">
                <span class="dropdown-btn">
                  Shop
                  <svg
                    viewBox="0 0 14 10"
                    fill="none"
                    aria-hidden="true"
                    focusable="false"
                    role="presentation"
                    class="icon icon-arrow"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z"
                      fill="currentColor"
                    ></path>
                  </svg>
                </span>
                <div
                  class="menu-drawer__submenu has-submenu gradient motion-reduce"
                >
                  <ul class="menu-drawer__menu list-menu" role="list">
                    <li>
                      <a
                        href="product.php"
                        class="menu-drawer__menu-item link link--text list-menu__item"
                        >Shop All</a
                      >
                    </li>
                    <li>
                      <a
                        href="/collections/keychains"
                        class="menu-drawer__menu-item link link--text list-menu__item"
                        >Tops</a
                      >
                    </li>
                    <li>
                      <a
                        href="/collections/desk-friends"
                        class="menu-drawer__menu-item link link--text list-menu__item"
                        >Beanies</a
                      >
                    </li>
                    <li>
                      <a
                        href="/collections/earrings"
                        class="menu-drawer__menu-item link link--text list-menu__item"
                        >Sweatshirts</a
                      >
                    </li>
                    <li>
                      <a
                        href="/collections/keycaps"
                        class="menu-drawer__menu-item link link--text list-menu__item"
                        >Tees</a
                      >
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <a
                  href="contact.php"
                  class="menu-drawer__menu-item list-menu__item link link--text"
                  >Contact</a
                >
              </li>
              <li>
                <a
                  href="#shipping-policy"
                  class="menu-drawer__menu-item list-menu__item link link--text"
                  >Shipping Policy</a
                >
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <main>
      <div class="container">
        <div class="card" onclick="showDetails('Tops')">
          <div class="card-header"><a href="#">Tops</a></div>
          <div class="card-body">
            <img src="images/top.jpg" alt="Tops" />
          </div>
        </div>
        <div class="card" onclick="showDetails('Beanies')">
          <div class="card-header"><a href="#">Beanies</a></div>
          <div class="card-body">
            <img src="images/beanie.jpg" alt="Beanies" />
          </div>
        </div>
        <div class="card" onclick="showDetails('Sweatshirts')">
          <div class="card-header"><a href="#">Sweatshirts</a></div>
          <div class="card-body">
            <img src="images/sweater.jpg" alt="Sweatshirts" />
          </div>
        </div>
        <div class="card" onclick="showDetails('Tees')">
          <div class="card-header"><a href="#">Tees</a></div>
          <div class="card-body">
            <img src="images/tees.jpg" alt="Tees"/>
          </div>
        
      </div>

      <!-- Modal for product details -->
      <div id="productDetailsModal" class="modal">
        <div class="modal-content">
          <span class="close" onclick="hideDetails()">&times;</span>
          <h2 id="productName"></h2>
          //TODO:<!-- Add more details here like price, description, etc. -->
          <button onclick="addToCart()">Add to Cart</button>
          <button onclick="buyNow()">Buy Now</button>
        </div>
      </div>

      <!-- for the shipping policy -->
      <div class="isolate" id="shipping-policy">
        <div class="allignment">
          <div class="page_width">
            <div class="text center">
              <h2>
                <span> Shipping Policy</span>
              </h2>
              <div class="content">
                <p class="p1">
                  1. Processing Time: - Orders are typically processed within
                  1-3 business days after payment confirmation. - Custom or
                  made-to-order items may require additional processing time.
                  Please refer to the product description for more details.
                </p>
                <p class="p2">
                  2. Shipping Rates: - Shipping rates are calculated based on
                  the weight of your order and the shipping destination. - We
                  offer flat-rate shipping for domestic orders and international
                  shipping rates vary depending on the destination.
                </p>
                <p class="p3">
                  3. Shipping Methods: - We use JnT for all our shipments. -
                  Delivery times vary depending on the shipping method selected
                  at checkout.
                </p>
                <p class="p4">
                  4. Estimated Delivery Times: - Domestic orders typically
                  arrive within 3-7 business days after processing. -
                  International orders may take 1-4 weeks to arrive, depending
                  on the destination and customs processing times.
                </p>
              </div>
            </div>
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

      // TODO: this is for the navbar higlight
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

      //TODO: for product details

      function showDetails(productName) {
      document.getElementById("productName").innerText = productName;
      document.getElementById("productDetailsModal").style.display = "block";
    }

    function hideDetails() {
      document.getElementById("productDetailsModal").style.display = "none";
    }

      function addToCart() {
        // Add logic to add product to cart
        alert("Product added to cart!");
      }

      function buyNow() {
        // Add logic to proceed to checkout
        alert("Redirecting to checkout...");
      }
    </script>
  </body>
</html>
