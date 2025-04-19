<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sweet Delights Menu</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body, html {
      font-family: 'Poppins', sans-serif;
      background: #ffffff;
      scroll-behavior: smooth;
    }

    .container {
      display: flex;
      flex-direction: row;
      min-height: 100vh;
    }

    .main {
      flex: 1;
      padding: 2rem;
    }

    .header {
      text-align: center;
      margin-bottom: 2rem;
    }

    .header h1 {
      font-size: 2.5rem;
      font-weight: bold;
      background: linear-gradient(to bottom right, #F77062, #FE5196);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      color: transparent;
      margin-bottom: 0.5rem;
      font-family: 'Playfair Display', serif;
    }

    .category-nav {
      display: flex;
      justify-content: center;
      gap: 2rem;
      margin-bottom: 2rem;
      flex-wrap: wrap;
      padding: 1rem 2rem;
      border-radius: 40px;
      background: linear-gradient(to bottom right,rgba(247, 113, 98, 0.81), #FE5196);
      box-shadow: 0 4px 10px rgba(255, 140, 171, 0.96);
      width: fit-content;
      margin-left: auto;
      margin-right: auto;
    }

    .category-nav a {
      display: flex;
      align-items: center;
      text-decoration: none;
      color: white;
      transition: transform 0.3s ease;
      font-size: 0.95rem;
      gap: 0.5rem;
      font-weight: 500;
    }

    .category-nav a:hover {
      transform: scale(1.05);
    }

    .category-nav img {
      width: 40px;
      height: 40px;
      object-fit: contain;
    }

    .category-section {
      margin-bottom: 3rem;
    }

    .category-section h2 {
      font-size: 1.5rem;
      margin-bottom: 1.2rem;
      color: #F77062;
      text-align: center;
      text-shadow: 1px 1px #f8b5c7;
      font-weight: bold;
    }

    .products {
      display: flex;
      flex-wrap: wrap;
      gap: 1.5rem;
      justify-content: center;
    }

    .product-card {
      background: linear-gradient(to right,rgba(255, 39, 15, 0.71),rgba(255, 78, 149, 0.73));
      border: 2px dashed white;
      padding: 2rem;
      border-radius: 20px;
      width: 300px;
      box-shadow: 0 0 8px rgba(255, 103, 138, 0.53);
    }


    .product-info {
      text-align: center;
    }

    .product-info img {
      height: 100px;
      width: auto;
      margin-bottom: 1rem;
    }

    .product-info h3 {
      color: #fff;
      font-size: 1.1rem;
      margin-bottom: 0.3rem;
    }

    .product-info p {
      margin: 0.2rem 0;
      font-size: 0.85rem;
      color: #fffbe9;
    }

    .price {
      color: #fff;
      font-weight: bold;
      margin-top: 0.5rem;
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
      }

      .category-nav {
        gap: 1rem;
        border-radius: 20px;
      }
    }
  </style>
</head>
<body>
  @include('Application.Pages.SideBar')

  <div class="container">
    <aside class="sidebar"></aside>

    <div class="main">
      <nav class="category-nav">
        <a href="#icescramble">
          <img src="/images/shaved-icee.png" alt="Ice Scramble">
          <span>Scramble</span>
        </a>
        <a href="#shakes">
          <img src="/images/shake.png" alt="Shakes">
          <span>Shakes</span>
        </a>
        <a href="#drinks">
          <img src="/images/drink.png" alt="Drinks">
          <span>Drinks</span>
        </a>
        <a href="#bites">
          <img src="/images/bites.png" alt="Bites">
          <span>Bites</span>
        </a>
      </nav>

      <header class="header">
        <h1>⋆꙳•̩̩͙❅*̩̩͙‧͙ MENU ‧͙*̩̩͙❆ ͙͛ ˚₊⋆</h1>
      </header>

      <section id="icescramble" class="category-section">
        <h2>ICE SCRAMBLE ❄༄.°</h2>
        <div class="products">
          <div class="product-card">
            <div class="product-info">
              <img src="/images/Strawberry.png" alt="Strawberry Swirl">
              <h3>Strawberry Swirl</h3>
              <p>Fresh strawberry.</p>
              <p>Small, Medium, Large</p>
              <p class="price">₱35.00</p>
            </div>
          </div>
        </div>
      </section>

    </div>
  </div>
</body>
</html>
