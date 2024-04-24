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
      <div class="filters">
        <label for="product-type-filter">Product Type:</label>
        <select id="product-type-filter">
          <option value="all">All</option>
          <option value="tops">Tops</option>
          <option value="beanies">Beanies</option>
          <option value="sweatshirts">Sweatshirts</option>
          <option value="tees">Tees</option>
        </select>

        <label for="price-filter">Price:</label>
        <input type="text" id="price-filter" placeholder="Enter price" />

        <label for="sort-by">Sort By:</label>
        <select id="sort-by">
          <option value="name-asc">Name (A-Z)</option>
          <option value="name-desc">Name (Z-A)</option>
        </select>
      </div>
      <div class="Result">
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
            <!-- Add more details here like price, description, etc. -->
            <button onclick="addToCart()">Add to Cart</button>
            <button onclick="buyNow()">Buy Now</button>
          </div>
        </div>

      </div>

      <div class="product-list">
        <!-- Product items will be dynamically added here -->
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

      <!-- scrpipt for the function -->

      <script>
        // for shipping
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
        // for the filter
        document.addEventListener("DOMContentLoaded", function () {
          const productTypeFilter = document.getElementById(
            "product-type-filter"
          );
          const priceFilter = document.getElementById("price-filter");
          const sortBy = document.getElementById("sort-by");
          const productList = document.querySelector(".product-list");

          // Function to filter products based on selected criteria
          function filterProducts() {
            const productType = productTypeFilter.value;
            const priceRange = parseFloat(priceFilter.value);

            document.querySelectorAll(".product-item").forEach(function (item) {
              const type = item.getAttribute("data-type");
              const price = parseFloat(item.getAttribute("data-price"));

              if (
                (productType === "all" || productType === type) &&
                (isNaN(priceRange) || price <= priceRange)
              ) {
                item.style.display = "block";
              } else {
                item.style.display = "none";
              }
            });
          }

          // Function to sort products based on selected criteria
          function sortProducts() {
            const sortedItems = Array.from(
              document.querySelectorAll(".product-item")
            ).sort(function (a, b) {
              const nameA = a.getAttribute("data-name").toUpperCase();
              const nameB = b.getAttribute("data-name").toUpperCase();

              if (sortBy.value === "name-asc") {
                return nameA.localeCompare(nameB);
              } else if (sortBy.value === "name-desc") {
                return nameB.localeCompare(nameA);
              }
            });

            productList.innerHTML = "";
            sortedItems.forEach(function (item) {
              productList.appendChild(item);
            });
          }

          // Event listeners for filter and sort changes
          productTypeFilter.addEventListener("change", filterProducts);
          priceFilter.addEventListener("input", filterProducts);
          sortBy.addEventListener("change", sortProducts);

          // Initial filtering and sorting
          filterProducts();
          sortProducts();
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
    </main>
  </body>

  <!-- <div class="facets_container">
  //       <form id="FacetFiltersForm" class="facets small-hide">
  //         <div id="FacetWrapperDesktop" class="facets__wrapper">
  //           <h2
  //             class="facets__heading caption-large text body"
  //             id="verticalTile"
  //             tabindex="-1"
  //           >
  //             Filter:
  //           </h2>
  //           <script src="#" defer="defer"></scrip>
  //           <details
  //             id="Details-1__main-collection-prodcut=grid"
  //             class="disclosure-has-popup facet__disclosure"
  //             data-index="1"
  //           >
  //             <summary
  //               class="facets__summary focus-offset"
  //               role="button"
  //               aria-expanded="false"
  //               aria-controls="Facet-1-template__main-collection-product_grid"
  //             >
  //               <div>
  //                 <span>Price</span>
  //                 <svg
  //                   aria-hidden="true"
  //                   focusable="false"
  //                   role="presentation"
  //                   class="icon icon-caret"
  //                   viewBox="0 0 10 6"
  //                 >
  //                   <path
  //                     fil-rule="evenodd"
  //                     clip-rule="evenodd"
  //                     d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z"
  //                     fill="currentColor"
  //                   ></path>
  //                 </svg>
  //               </div>
  //             </summary>
  //           </details>
  //         </div>
  //       </form>
  //     </div> -->
</html>
