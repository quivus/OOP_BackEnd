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
      background-color: white;
    }

    .sidebar-container {
      position: fixed;
      margin: 2rem;
      color: #333;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      border: 2px solid #9b6969;
      width: 100px;
      height: auto;
      border-radius: 50px;
      background-color: #fff;
      position: fixed;
      top: 1rem;
      overflow: hidden;
      box-shadow: 5px 10px 10px 2px rgba(255, 222, 222, 0.89);
      transition: width 1s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .sidebar-container:hover {
      width: 200px;
      box-shadow: 8px 8px 8px 5px rgba(255, 226, 226, 0.88);
    }

    .sidebar-container ul {
      list-style: none;
      padding: 1rem;
      display: flex;
      flex-direction: column;
      gap: 1.2rem;
    }

    .sidebar-container li {
      padding: 0.80rem 1rem;
      border-radius: 40px;
      transition: all 0.8s ease;
    }

    .sidebar-container li:hover {
      background-color: #97626296;
      padding-left: 1rem;

    }

    .sidebar-container li a,
    .sidebar-container li button {
      color: #333;
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 12px;
      width: auto;
      background: none;
      border: none;
      cursor: pointer;
      font-size: 0.95rem;
      font-weight: 500;
      transition: color 0.2s ease;
    }

    .sidebar-container li:hover a,
    .sidebar-container li:hover button {
      color: white;
    }

    .sidebar-container img{
        height: 30px;
        width: 30px;
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

    .Cards{
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
        width: 50%;
        height: 30%;
        margin-top: 5%;
        margin-left: 20%;

    }

    .card{
        margin-top: 2rem;
        background-color: none ;
        border: pink 1px solid;
        text-align: center;
        border-radius: 10px 60px 30px ;
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

@section('content')
  <div class="sidebar-container">
    <ul>
    <img src="/images/oop_logo.png" alt="" style="height:50px; width:60px;">
      <li><a href="#">
        <img src="/images/oop_statistic.jpg" alt="">
         <span class="nav-text">Sales Summary</span></a></li>
      <li><a href="{{route('addProduct')}}">
      <img src="/images/oop_statistic.jpg" alt="">
      <span class="nav-text">Add Product</span></a></li>
      <li><a href="#">
      <img src="/images/oop_statistic.jpg" alt="">
      <span class="nav-text">Products</span></a></li>
      <li><a href="#">
      <img src="/images/oop_statistic.jpg" alt="">
      <span class="nav-text">Expenses</span></a></li>
      <li><a href="#">
      <img src="/images/oop_statistic.jpg" alt="">
      <span class="nav-text">Expenses History</span></a></li>
      <li>
        <form action="{{route('admin.logout')}}" method="post">
          @csrf
          <button type="submit">
            <img src="/images/oop_logout.jpg" alt="">
          <span class="nav-text">Logout</span></button>
        </form>
      </li>
    </ul>
  </div>

  @endsection

</body>
</html>