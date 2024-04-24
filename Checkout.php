<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link rel="stylesheet" href="Checkout.css" />
  </head>
  <body>
    <!-- Modal for displaying items -->
    <div id="item-modal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Items in Your Cart</h2>
        <ul id="item-list"></ul>
      </div>
    </div>

    <div class="container">
      <h1>Checkout</h1>
      <form id="checkout-form">
        <div class="section">
          <h2>Shipping Information</h2>
          <!-- Shipping information fields -->
        </div>
        <div class="section">
          <h2>Payment Details</h2>
          <!-- Payment details fields -->
        </div>
        <div class="section">
          <h2>Payment Method</h2>
          <label for="paypal">
            <input
              type="radio"
              id="paypal"
              name="payment-method"
              value="paypal"
              checked
            />
            <i class="fab fa-paypal"></i> PayPal </label
          ><br />
          <label for="cod">
            <input type="radio" id="cod" name="payment-method" value="cod" />
            <i class="fas fa-money-bill-wave"></i> Cash on Delivery
          </label>
        </div>
        <button type="submit">Complete Order</button>
      </form>
    </div>
    <script>
      // Sample item data (replace with actual cart items)
      const items = [
        { name: "Item 1", price: 50 },
        { name: "Item 2", price: 75 },
      ];

      // Display items in the modal
      const modal = document.getElementById("item-modal");
      const modalContent = document.querySelector(".modal-content");
      const itemList = document.getElementById("item-list");
      items.forEach((item) => {
        const li = document.createElement("li");
        li.textContent = `${item.name} - $${item.price}`;
        itemList.appendChild(li);
      });

      // Show modal when "Items in Your Cart" link is clicked
      document
        .getElementById("item-link")
        .addEventListener("click", function () {
          modal.style.display = "block";
        });

      // Close modal when the close button is clicked
      document.querySelector(".close").addEventListener("click", function () {
        modal.style.display = "none";
      });

      // Form Submission Handling
      document
        .getElementById("checkout-form")
        .addEventListener("submit", function (event) {
          event.preventDefault();
          const formData = new FormData(this);
          const paymentMethod = formData.get("payment-method");

          if (paymentMethod === "paypal") {
            // Process PayPal payment
          } else if (paymentMethod === "cod") {
            // Process Cash on Delivery
            alert("Your order has been placed. You will pay upon delivery.");
            // Additional logic for handling COD
          }

          // Redirect to a success page or display a confirmation message
        });
    </script>
  </body>
</html>
