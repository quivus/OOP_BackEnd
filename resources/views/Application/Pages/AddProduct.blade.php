<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Product</title>
  <style>
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap');

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body, html {
        scroll-behavior: smooth;
        font-family: 'Playfair Display', serif;
    }

    h1 {
      font-size: 2em;
      font-weight: bold;
      background: linear-gradient(to bottom right, #F77062, #FE5196);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      text-align: center;
      margin-bottom: 1rem;
    }

    p {
      text-align: center;
      margin-bottom: 2rem;
      color: #777;
      font-size: 1.1em;
    }

    .button-group {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 1rem;
      margin-bottom: 2rem;
    }

    .button-group button {
      padding: 0.5rem 1rem;
      font-weight: bold;
      border-radius: 50px;
      background: linear-gradient(to bottom right, #F77062, #FE5196);
      color: white;
      border: none;
      cursor: pointer;
      transition: transform 0.3s ease;
      font-size: 0.9em;
    }

    .button-group button:hover {
      transform: scale(1.07);
      box-shadow: 0 0 10px #ff87b3;
    }

    .form-container {
      display: none;
      width: 90%;
      max-width: 420px;
      margin: 0 auto 2rem;
      background: white;
      border: 2px dashed #FE5196;
      border-radius: 20px;
      padding: 1.2rem;
      animation: bounceDown 0.7s ease-out;
    }

    @keyframes bounceDown {
      0% {
        transform: translateY(-30px);
        opacity: 0;
      }
      50% {
        transform: translateY(10px);
      }
      100% {
        transform: translateY(0);
        opacity: 1;
      }
    }

    form {
      display: grid;
      grid-template-columns: 1fr;
      gap: 0.7rem;
    }

    label {
      font-weight: 600;
      color: #b84070;
    }

    input[type="text"],
    input[type="number"],
    select {
      padding: 0.5rem;
      border: 1px solid #FE5196;
      border-radius: 8px;
      width: 100%;
      font-size: 0.9em;
    }

    input[type="file"] {
      width: 100%;
    }

    input:focus,
    select:focus {
      outline: none;
      border-color: #FE5196;
      box-shadow: 0 0 8px #fe51967e;
    }

    img {
      max-width: 100%;
      margin-top: 0.5rem;
      border-radius: 10px;
    }

    .size-options {
      margin-top: 0.5rem;
      font-weight: 600;
    }

    .size-options-row {
      display: flex;
      flex-wrap: wrap;
      gap: 0.5rem;
      margin-bottom: 0.5rem;
    }

    .size-options-row label {
      font-weight: 500;
      display: flex;
      align-items: center;
      gap: 0.3rem;
      font-size: 0.9em;
    }

    button[type="submit"] {
      margin-top: 1rem;
      background: linear-gradient(to bottom right, #F77062, #FE5196);
      padding: 0.5rem 1.2rem;
      border-radius: 50px;
      color: white;
      font-weight: bold;
      border: none;
      cursor: pointer;
      transition: all 0.3s ease;
      font-size: 0.9em;
    }

    button[type="submit"]:hover {
      transform: scale(1.05);
      box-shadow: 0 0 10px #ff78b3;
    }
  </style>
</head>

<body>
  @include('Application.Pages.SideBar')

  <h1>Welcome To Add Products Section</h1>
  <p>Please select which product you wish to add:</p>

  <div class="button-group">
    <button onclick="toggleForm('iceForm')">Ice Scramble</button>
    <button onclick="toggleForm('shakeForm')">Shakes</button>
    <button onclick="toggleForm('drinkForm')">Drinks</button>
    <button onclick="toggleForm('snackForm')">Snack Bites</button>
  </div>

  <div id="iceForm" class="form-container">
    <form enctype="multipart/form-data" method="post">
      <label>Product Name</label>
      <input type="text" name="Item_Name" required>
      <label>Price</label>
      <input type="number" name="Unit_Price" required>
      <label class="size-options">Sizes</label>
      <div class="size-options-row">
        <label><input type="checkbox" name="Sizes[]" value="Small"> Small</label>
        <label><input type="checkbox" name="Sizes[]" value="Medium"> Medium</label>
        <label><input type="checkbox" name="Sizes[]" value="Large"> Large</label>
        <label><input type="checkbox" name="Sizes[]" value="Regular"> Regular</label>
      </div>
      <label>Setting</label>
      <select name="Setting">
        <option value="Normal">Normal</option>
        <option value="Overload">Overload</option>
      </select>
      <label>Quantity</label>
      <input type="number" name="Quantity" required>
      <label>Description</label>
      <input type="text" name="Description" required>
      <input type="file" name="Image" accept="image/*" onchange="previewImage(event, 'img1')">
      <img id="img1" src="" alt="">
      <button type="submit">Add Ice Scramble</button>
    </form>
  </div>

  <div id="shakeForm" class="form-container">
    <form enctype="multipart/form-data" method="post">
      <label>Product Name</label>
      <input type="text" name="Item_Name" required>
      <label>Price</label>
      <input type="number" name="Unit_Price" required>
      <label>Size</label>
      <select name="Size">
        <option value="">Select Size</option>
        <option value="Small">Small</option>
        <option value="Medium">Medium</option>
        <option value="Large">Large</option>
      </select>
      <label>Quantity</label>
      <input type="number" name="Quantity" required>
      <label>Description</label>
      <input type="text" name="Description" required>
      <input type="file" name="Image" accept="image/*" onchange="previewImage(event, 'img2')">
      <img id="img2" src="" alt="">
      <button type="submit">Add Shake</button>
    </form>
  </div>

  <div id="drinkForm" class="form-container">
    <form enctype="multipart/form-data" method="post">
      <label>Product Name</label>
      <input type="text" name="Item_Name" required>
      <label>Price</label>
      <input type="number" name="Unit_Price" required>
      <label>Size</label>
      <select name="Size">
        <option value="">Select Size</option>
        <option value="Small">Small</option>
        <option value="Medium">Medium</option>
        <option value="Large">Large</option>
      </select>
      <label>Quantity</label>
      <input type="number" name="Quantity" required>
      <label>Description</label>
      <input type="text" name="Description" required>
      <input type="file" name="Image" accept="image/*" onchange="previewImage(event, 'img3')">
      <img id="img3" src="" alt="">
      <button type="submit">Add Drink</button>
    </form>
  </div>

  <div id="snackForm" class="form-container">
    <form enctype="multipart/form-data" method="post">
      <label>Product Name</label>
      <input type="text" name="Item_Name" required>
      <label>Price</label>
      <input type="number" name="Unit_Price" required>
      <label>Quantity</label>
      <input type="number" name="Quantity" required>
      <label>Description</label>
      <input type="text" name="Description" required>
      <input type="file" name="Image" accept="image/*" onchange="previewImage(event, 'img4')">
      <img id="img4" src="" alt="">
      <button type="submit">Add Snack</button>
    </form>
  </div>

  <script>
    let currentlyVisible = null;

    function toggleForm(id) {
      const form = document.getElementById(id);
      if (currentlyVisible === id) {
        form.style.display = 'none';
        currentlyVisible = null;
      } else {
        document.querySelectorAll('.form-container').forEach(f => f.style.display = 'none');
        form.style.display = 'block';
        currentlyVisible = id;
      }
    }

    function previewImage(event, imgId) {
      const reader = new FileReader();
      reader.onload = function () {
        document.getElementById(imgId).src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    }
  </script>
</body>

</html>
