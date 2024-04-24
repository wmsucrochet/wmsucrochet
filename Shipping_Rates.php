<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yarn Craft Emporium - Shipping Rates</title>
    <link rel="stylesheet" href="Shipping_Rates.css" />
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

      <div class="content">
        <div class="shipping-rates">
          <h2>Shipping Rates</h2>
          <button id="addRateBtn">Edit Shipping Rate</button>
          <div id="shippingRatesViewport"></div>
        </div>
      </div>
    </main>
    <div id="editModal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Edit Shipping Rate</h2>
        <label for="newRate">New Rate (PHP):</label>
        <input type="text" id="newRate" placeholder="Enter new rate..." />
        <button id="saveRateBtn">Save</button>
      </div>
    </div>

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

      // Sample initial shipping rates
      let shippingRates = {
        luzon: 100,
        visayas: 150,
        mindanao: 200,
      };

      // Function to render shipping rates
      function renderShippingRates() {
        const viewport = document.getElementById("shippingRatesViewport");
        viewport.innerHTML = "";
        for (const region in shippingRates) {
          const rate = shippingRates[region];
          const rateDiv = document.createElement("div");
          rateDiv.innerHTML = `<strong>${region}</strong>: ${rate} PHP`;
          viewport.appendChild(rateDiv);
        }
      }

      // Function to handle adding/editing shipping rates
      function editShippingRate(region, newRate) {
        shippingRates[region] = newRate;
        renderShippingRates();
      }

      // Add event listener to add shipping rate button
      const addRateBtn = document.getElementById("addRateBtn");
      addRateBtn.addEventListener("click", () => {
        const region = prompt("Enter region (Luzon, Visayas, Mindanao):");
        if (region) {
          const newRate = parseFloat(
            prompt(`Enter shipping rate for ${region} (in PHP):`)
          );
          if (!isNaN(newRate)) {
            editShippingRate(region.toLowerCase(), newRate);
          } else {
            alert("Invalid rate. Please enter a valid number.");
          }
        }
      });

      // Initial render of shipping rates
      renderShippingRates();
      document.addEventListener("DOMContentLoaded", function () {
        // Edit modal
        const editModal = document.getElementById("editModal");
        const modalClose = editModal.querySelector(".close");
        const saveRateBtn = editModal.querySelector("#saveRateBtn");
        const newRateInput = editModal.querySelector("#newRate");

        modalClose.addEventListener("click", function () {
          editModal.style.display = "none";
        });

        window.addEventListener("click", function (event) {
          if (event.target == editModal) {
            editModal.style.display = "none";
          }
        });

        // Show modal on edit button click
        document
          .getElementById("shippingRatesViewport")
          .addEventListener("click", function (event) {
            if (event.target.classList.contains("edit-rate")) {
              editModal.style.display = "block";
              // Set the current rate in the modal
              const region = event.target.getAttribute("data-region");
              const currentRate = shippingRates[region];
              newRateInput.value = currentRate;
              // Save the new rate on button click
              saveRateBtn.onclick = function () {
                const newRate = parseFloat(newRateInput.value);
                if (!isNaN(newRate)) {
                  editShippingRate(region, newRate);
                  editModal.style.display = "none";
                } else {
                  alert("Invalid rate. Please enter a valid number.");
                }
              };
            }
          });
      });
    </script>
  </body>
</html>
