 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CoffeeShop</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #fffaf2;
    }
    .navbar {
      background-color: #6f4e37;
    }
    .navbar-brand, .nav-link {
      color: white !important;
    }
    .hero {
      background-image: url('https://source.unsplash.com/1600x600/?coffee,shop');
      background-size: cover;
      background-position: center;
      color: white;
      text-shadow: 2px 2px 5px #000;
      padding: 100px 20px;
      text-align: center;
    }
    .card {
      transition: transform 0.3s ease;
    }
    .card:hover {
      transform: translateY(-5px);
    }
    .footer {
      background-color: #6f4e37;
      color: white;
      padding: 20px 0;
      text-align: center;
    }
    .card {
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    }
    .card-body small {
    font-size: 0.85rem;
    color: #ffc107; /* gold for star color */
    }
    .card-img-top {
    width: 100%;
    height: 250px;
    object-fit: cover;
    }


  </style>
</head>
<body>
 
 <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">☕ CoffeeBuddy</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Menu</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Cart</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>