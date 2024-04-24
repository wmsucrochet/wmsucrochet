<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Yarn Craft Emporium</title>
    <link rel="stylesheet" href="Payment.css" />
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
        <!-- <div class="payments-container">
          <h2>Payments</h2>
          <div class="payment-item">
            <div class="payment-info">
              <h3>Order #1</h3>
              <p>Quantity: 2</p>
              <p>Total Price: $30</p>
            </div>
            <div class="payment-status">
              <p>Status: Paid</p>
            </div>
          </div>
          <div class="payment-item">
            <div class="payment-info">
              <h3>Order #2</h3>
              <p>Quantity: 1</p>
              <p>Total Price: $15</p>
            </div>
            <div class="payment-status">
              <p>Status: Pending</p>
            </div>
          </div>
        </div> -->

        <table id="paymentTable">
          <thead>
            <tr>
              <th>Payment No</th>
              <th>Invoice No</th>
              <th>Amount Paid</th>
              <th>Payment Method</th>
              <th>Reference No</th>
              <th>Payment Date</th>
              <th>Delete Payment</th>
            </tr>
          </thead>
          <tbody>
            <!-- Table body will be populated dynamically -->
          </tbody>
        </table>
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

    // Sample data for demonstration
    const payments = [
      {
        paymentNo: 1,
        invoiceNo: "INV-001",
        amountPaid: 100,
        paymentMethod: "Credit Card",
        referenceNo: "REF-001",
        paymentDate: "2024-04-23",
      },
      {
        paymentNo: 2,
        invoiceNo: "INV-002",
        amountPaid: 150,
        paymentMethod: "PayPal",
        referenceNo: "REF-002",
        paymentDate: "2024-04-24",
      },
      {
        paymentNo: 2,
        invoiceNo: "INV-002",
        amountPaid: 150,
        paymentMethod: "PayPal",
        referenceNo: "REF-002",
        paymentDate: "2024-04-24",
      },
      {
        paymentNo: 2,
        invoiceNo: "INV-002",
        amountPaid: 150,
        paymentMethod: "PayPal",
        referenceNo: "REF-002",
        paymentDate: "2024-04-24",
      },
      {
        paymentNo: 2,
        invoiceNo: "INV-002",
        amountPaid: 150,
        paymentMethod: "PayPal",
        referenceNo: "REF-002",
        paymentDate: "2024-04-24",
      },
      {
        paymentNo: 2,
        invoiceNo: "INV-002",
        amountPaid: 150,
        paymentMethod: "COD",
        referenceNo: "REF-002",
        paymentDate: "2024-04-24",
      },
      {
        paymentNo: 2,
        invoiceNo: "INV-002",
        amountPaid: 150,
        paymentMethod: "PayPal",
        referenceNo: "REF-002",
        paymentDate: "2024-04-24",
      },

      // Add more payment data as needed
    ];

    const tableBody = document.querySelector("#paymentTable tbody");

    // Function to create a row for each payment
    function createPaymentRow(payment) {
      const row = document.createElement("tr");
      row.innerHTML = `
            <td>${payment.paymentNo}</td>
            <td>${payment.invoiceNo}</td>
            <td>${payment.amountPaid}</td>
            <td>${payment.paymentMethod}</td>
            <td>${payment.referenceNo}</td>
            <td>${payment.paymentDate}</td>
            <td><button onclick="deletePayment(${payment.paymentNo})">Delete</button></td>
        `;
      return row;
    }

    // Function to render all payments in the table
    function renderPayments() {
      payments.forEach((payment) => {
        const row = createPaymentRow(payment);
        tableBody.appendChild(row);
      });
    }

    // Call renderPayments to initially populate the table
    renderPayments();

    // Function to delete a payment (you can implement the actual deletion logic)
    function deletePayment(paymentNo) {
      // Implement deletion logic here
      alert(`Delete payment with payment number: ${paymentNo}`);
    }
  </script>
</html>
