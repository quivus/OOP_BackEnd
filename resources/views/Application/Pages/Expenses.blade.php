<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Playfair+Display&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      color: #444;
      padding: 1rem;
      font-size: 0.9rem;
    }

    .main {
      max-width: 800px;
      margin: 0 auto;
    }

    .header {
      text-align: center;
      margin-bottom: 1.5rem;
    }

    .header h1 {
      font-size: 2rem;
      font-weight: bold;
      background: linear-gradient(to bottom right, #F77062, #FE5196);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      color: transparent;
      font-family: 'Playfair Display', serif;
    }

    .expense-form {
      display: grid;
      gap: 0.7rem;
      padding: 1.2rem;
      border-radius: 15px;
      background: #fff;
      box-shadow: 0 4px 12px rgba(255, 133, 169, 0.15);
      margin-bottom: 2rem;
      grid-template-columns: 1fr 1fr;
    }

    .expense-form input,
    .expense-form select {
      padding: 0.5rem;
      border-radius: 8px;
      border: 1px solid #ffb0c5;
      font-size: 0.85rem;
      font-family: inherit;
      transition: border 0.2s ease;
    }

    .expense-form input:focus,
    .expense-form select:focus {
      border-color: #fe6a98;
      outline: none;
    }

    .expense-form button {
      background: linear-gradient(to right, #F77062, #FE5196);
      color: white;
      font-weight: bold;
      border: none;
      border-radius: 50px;
      cursor: pointer;
      width: fit-content;
      justify-self: center;
      padding: 0.6rem 1.2rem;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      grid-column: span 2;
    }

    .expense-form button:hover {
      transform: scale(1.1);
      box-shadow: 0 6px 14px rgba(254, 81, 150, 0.3);
    }

    .expense-table {
      width: 100%;
      border-collapse: collapse;
      font-size: 0.85rem;
      overflow: hidden;
      border-radius: 12px;
      background: #fff;
      box-shadow: 0 8px 10px rgba(236, 27, 83, 0.25);
    }

    .expense-table thead {
        background: linear-gradient(to bottom right, #F77062, #FE5196);
        color: #fff;
    }

    .expense-table th,
    .expense-table td {
      padding: 0.75rem 1rem;
      text-align: left;
      border-bottom: 1px solid rgba(250, 146, 115, 0.42);
    }


    @media (max-width: 600px) {
      .expense-form {
        grid-template-columns: 1fr;
      }

      .expense-form button {
        grid-column: auto;
        width: 60%;
      }
    }
  </style>
</head>
<body>
  @include('Application.Pages.SideBar')

  <div class="main">
    <header class="header">
      <h1>EXPENSES</h1>
    </header>

    <form class="expense-form">
      <input type="text" placeholder="Product Name" required />
      <input type="number" placeholder="Amount (₱)" required />
      <select required>
        <option value="" disabled selected>Category</option>
        <option value="ingredients">Ingredients</option>
        <option value="supplies">Supplies</option>
        <option value="utilities">Utilities</option>
        <option value="others">Others</option>
      </select>
      <input type="date" required />
      <button type="submit">Add Expense</button>
    </form>

    <table class="expense-table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Amount</th>
          <th>Category</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Flour</td>
          <td>₱150.00</td>
          <td>Ingredients</td>
          <td>2025-04-19</td>
        </tr>
        <tr>
          <td>Mallows</td>
          <td>₱50.00</td>
          <td>Ingredients</td>
          <td>2025-04-18</td>
        </tr>
        <tr>
          <td>Straw</td>
          <td>₱5.00</td>
          <td>Supplies</td>
          <td>2025-04-18</td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
