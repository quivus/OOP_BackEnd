<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sidebar</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8f6f4;
    }

    .sidebar-container {
      margin: 2rem;
      color: #333;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      border: 2px solid #9b6969;
      width: 80px;
      height: 90vh;
      border-radius: 20px;
      background-color: #fff;
      position: sticky;
      top: 1rem;
      overflow: hidden;
      transition: width 0.5s ease, background-color 0.5s ease;
      box-shadow: 0 8px 18px rgba(0, 0, 0, 0.06);
    }

    .sidebar-container:hover {
      width: 200px;
      background-color: rgba(189, 135, 135, 0.07);
    }

    .sidebar-container ul {
      list-style: none;
      padding: 1rem;
      display: flex;
      flex-direction: column;
      gap: 1.2rem;
    }

    .sidebar-container li {
      padding: 0.75rem 1rem;
      border-radius: 40px;
      transition: all 0.3s ease;
    }

    .sidebar-container li:hover {
      background-color: #97626296;
      padding-left: 1.25rem;
    }

    .sidebar-container li a,
    .sidebar-container li button {
      color: #333;
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 12px;
      width: 100%;
      background: none;
      border: none;
      cursor: pointer;
      font-size: 0.95rem;
      font-weight: 500;
      transition: color 0.3s ease;
    }

    .sidebar-container li:hover a,
    .sidebar-container li:hover button {
      color: white;
    }

    .sidebar-container li button[type="submit"] {
      color: #c74a4a;
      font-weight: 600;
    }

    .nav-text {
      display: none;
    }

    .sidebar-container:hover .nav-text {
      display: inline;
    }

    @media (max-width: 768px) {
      .sidebar-container {
        width: 100%;
        height: auto;
        flex-direction: row;
        align-items: center;
        margin: 1rem auto;
        border-radius: 15px;
      }

      .sidebar-container ul {
        flex-direction: row;
        justify-content: space-around;
        padding: 1rem;
      }

      .sidebar-container li {
        padding: 0.5rem;
      }

      .nav-text {
        display: none;
      }

      .sidebar-container:hover .nav-text {
        display: inline;
      }
    }
  </style>
</head>
<body>

  <div class="sidebar-container">
    <ul>
      <li><a href="#"><span class="nav-text">Sales Summary</span></a></li>
      <li><a href="#"><span class="nav-text">Add Product</span></a></li>
      <li><a href="#"><span class="nav-text">Products</span></a></li>
      <li><a href="#"><span class="nav-text">Expenses</span></a></li>
      <li><a href="#"><span class="nav-text">Expenses History</span></a></li>
      <li>
        <form action="{{route('admin.logout')}}" method="post">
          @csrf
          <button type="submit"><span class="nav-text">Logout</span></button>
        </form>
      </li>
    </ul>
  </div>

</body>
</html>
