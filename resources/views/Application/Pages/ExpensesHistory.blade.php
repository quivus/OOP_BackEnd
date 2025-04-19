<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Expenses History</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #fff6fa;
      display: flex;
      justify-content: flex-start;
    }
    .history-section {
      margin: 3rem auto;
      padding: 2rem;
      border-radius: 20px;
      background: #fff0f5;
      box-shadow: 0 8px 24px rgba(255, 133, 169, 0.1);
      width: fit-content;
      max-width: 90%;
    }
    .history-section h2 {
      font-family: 'Playfair Display', serif;
      font-size: 1.8rem;
      background: linear-gradient(to bottom right, #F77062, #FE5196);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      text-align: center;
      margin-bottom: 2rem;
    }
    .history-cards {
      display: flex;
      flex-direction: column;
      gap: 1.2rem;
      align-items: center;
    }
    .card {
      background: white;
      padding: 1.4rem 1.6rem;
      border-radius: 18px;
      box-shadow: 0 6px 16px rgba(255, 133, 169, 0.12);
      transition: transform 0.2s ease, box-shadow 0.2s ease;
      width: fit-content;
      min-width: 280px;
    }
    .card:hover {
      transform: scale(1.02);
      box-shadow: 0 10px 20px rgba(255, 105, 150, 0.2);
    }
    .card h3 {
      font-size: 1.1rem;
      font-weight: 600;
      margin-bottom: 0.6rem;
      color: #F77062;
    }
    .info {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 0.6rem;
    }
    .price, .category {
      padding: 0.35rem 0.9rem;
      border-radius: 50px;
      font-size: 0.75rem;
      font-weight: 500;
      white-space: nowrap;
    }
    .price {
      background: linear-gradient(to right, #F77062, #FE5196);
      color: white;
    }
    .category {
      background: #ffe5ed;
      color: #F77062;
      border: 1px solid #ffc0d4;
    }
    .date {
      font-size: 0.75rem;
      color: #888;
      margin-left: auto;
    }
  </style>
</head>
<body>
  @include('Application.Pages.SideBar')

  <section class="history-section">
    <h2>Expenses History</h2>
    <div class="history-cards">
      <div class="card">
        <h3>Flour</h3>
        <div class="info">
          <span class="price">₱150</span>
          <span class="category">Ingredients</span>
          <span class="date">Apr 19, 2025</span>
        </div>
      </div>
      <div class="card">
        <h3>Mallows</h3>
        <div class="info">
          <span class="price">₱50</span>
          <span class="category">Ingredients</span>
          <span class="date">Apr 18, 2025</span>
        </div>
      </div>
      <div class="card">
        <h3>Straw</h3>
        <div class="info">
          <span class="price">₱5</span>
          <span class="category">Supplies</span>
          <span class="date">Apr 18, 2025</span>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
