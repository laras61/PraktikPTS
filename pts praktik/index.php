<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />

    <title>Praktik PTS Laras</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Laras Web</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Content</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="1.jpg"
            class="d-block w-100"
            alt="banner1"
            height="350"
          />
        </div>
        <div class="carousel-item">
          <img src="2.jpg" class="d-block w-100" alt="banner2" height="350" />
        </div>
        <div class="carousel-item">
          <img src="3.jpg" class="d-block w-100" alt="peta" height="350" />
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="container">
      <!-- Content here -->

      <div class="list-group" style="width: 23%; float: left; height: 100px">
          <a href="#" class="list-group-item list-group-action list-group-item-dark">Home</a>
          <a href="#" class="list-group-item list-group-action">Content</a>
          <a href="#" class="list-group-item list-group-action">Pengaturan</a>
          <a href="#" class="list-group-item list-group-action">Ganti Password</a>
          <a href="#" class="list-group-item list-group-action disabled">Log Out</a>
      </div>
      <div class="card" style="width: 75%; float: right; height: 200px">
        <div class="card-header">Quote</div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>The world only listens to strong people.</p>
            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">movie</cite></footer>
          </blockquote>
        </div>
      </div>
    </div>
  </body>
</html>