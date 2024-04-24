<!DOCTYPE html>
<html>
  <head>
    <title>Shipping Address</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
      }

      .container {
        width: 50%;
        margin: 50px auto;
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        position: relative;
      }

      .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 20px;
        cursor: pointer;
      }

      h1 {
        text-align: center;
      }

      button {
        margin-top: 20px;
      }

      .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
      }

      .modal-content {
        background-color: #fefefe;
        margin: 10% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        border-radius: 5px;
        position: relative;
      }

      .modal-content input[type="text"],
      .modal-content button {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <span class="close-btn" onclick="redirectToBuyer()">&times;</span>
      <h1>Shipping Address</h1>
      <div id="address-list"></div>
      <button onclick="openModal()">Add Address</button>
    </div>
    <div class="modal" id="modal">
      <div class="modal-content">
        <span class="close-btn" onclick="closeModal()">&times;</span>
        <h2>Add Address</h2>
        <label for="street">Street:</label>
        <input type="text" id="street" />
        <label for="barangay">Barangay:</label>
        <input type="text" id="barangay" />
        <label for="city">City:</label>
        <input type="text" id="city" />
        <label for="region">Region:</label>
        <input type="text" id="region" />
        <button onclick="saveAddress()">Save</button>
      </div>
    </div>
    <script>
      let addresses = [
        {
          id: 1,
          street: "123 Main St",
          barangay: "Barangay",
          city: "City",
          region: "Region",
          active: true,
        },
        {
          id: 2,
          street: "456 Elm St",
          barangay: "Barangay",
          city: "City",
          region: "Region",
          active: false,
        },
        {
          id: 3,
          street: "789 Oak St",
          barangay: "Barangay",
          city: "City",
          region: "Region",
          active: false,
        },
      ];

      function renderAddresses() {
        const addressList = document.getElementById("address-list");
        addressList.innerHTML = "";
        addresses.forEach((address) => {
          const div = document.createElement("div");
          div.classList.add("address");
          if (address.active) {
            div.classList.add("active");
          }
          div.innerHTML = `
                    <p>${address.street}, ${address.barangay}, ${
            address.city
          }, ${address.region}</p>
                    <span class="edit-btn" onclick="editAddress(${
                      address.id
                    })">Edit</span>
                    <span class="delete-btn" onclick="deleteAddress(${
                      address.id
                    })">Delete</span>
                    <input type="radio" name="active-address" ${
                      address.active ? "checked" : ""
                    } onclick="setActive(${address.id})">
                `;
          addressList.appendChild(div);
        });
      }

      function openModal() {
        const modal = document.getElementById("modal");
        modal.style.display = "block";
      }

      function closeModal() {
        const modal = document.getElementById("modal");
        modal.style.display = "none";
      }

      function saveAddress() {
        const street = document.getElementById("street").value;
        const barangay = document.getElementById("barangay").value;
        const city = document.getElementById("city").value;
        const region = document.getElementById("region").value;
        const newAddress = {
          id: addresses.length + 1,
          street,
          barangay,
          city,
          region,
          active: false,
        };
        addresses.push(newAddress);
        renderAddresses();
        closeModal();
      }

      function editAddress(id) {
        const address = addresses.find((a) => a.id === id);
        if (address) {
          const newStreet = prompt("Enter new street:", address.street);
          const newBarangay = prompt("Enter new barangay:", address.barangay);
          const newCity = prompt("Enter new city:", address.city);
          const newRegion = prompt("Enter new region:", address.region);
          if (newStreet && newBarangay && newCity && newRegion) {
            address.street = newStreet;
            address.barangay = newBarangay;
            address.city = newCity;
            address.region = newRegion;
            renderAddresses();
          }
        }
      }

      function deleteAddress(id) {
        addresses = addresses.filter((a) => a.id !== id);
        renderAddresses();
      }

      function setActive(id) {
        addresses.forEach((address) => {
          address.active = address.id === id;
        });
        renderAddresses();
      }

      function redirectToBuyer() {
        window.location.href = "buyer.php";
      }

      renderAddresses();
    </script>
  </body>
</html>
