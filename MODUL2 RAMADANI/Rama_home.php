<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EAD car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">
  </head>
  <body>
    <ul class="nav nav-pills justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href= "#" >Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href= "Rama_booking.php" >Booking</a>
        </li>
      </ul>
      <section>
      <h1 align="center"> Welcome To EAD Rent </h1>
      <h5 align="center"> Choose your car </h5>
      <table>
      <div class="row justify-content-center">
          <div class="col col-lg-3">
          <div class="card" style="width: 18rem;">
            <img src="Image/civic.jpeg" alt="Honda Civic">
            <div class="card-body" align="center">
                <h5 class="card-title">Honda Civic</h5>
               <p class="card-text">Rp 3.500.000 / hari </p>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">2 Baris Kursi</li>
              <li class="list-group-item">5000 CC</li>
              <li class="list-group-item">Matic / Manual</li>
              <a href= "Rama_booking.php?imgsrc=<?=urlencode("Image/civic.jpeg")?>" class="btn btn-primary">Book now</a>
            </ul>
          </div>
          </div>
        <br>
        <div class="col col-md-auto">
          <div class="card" style="width: 18rem;">
            <img src="Image\wuling.jpeg" class="card-img-top" alt="Wuling Air EV">
            <div class="card-body" align="center">
                <h5 class="card-title">Wuling Air EV</h5>
               <p class="card-text">Rp 200.000 / hari </p>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">2 Kursi</li>
              <li class="list-group-item">220v (listrik)</li>
              <li class="list-group-item">Matic</li>
              <a href= "Rama_booking.php?imgsrc=<?=urlencode("Image/wuling.jpeg")?>" class="btn btn-primary">Book now</a>
            </ul>
          </div>
        </div>
        <br>
        <div class="col col-lg-3">
          <div class="card" style="width: 18rem;">
            <img src="Image\avanza.jpeg" class="card-img-top" alt="Toyota Avanza 2022">
            <div class="card-body" align="center">
                <h5 class="card-title">Toyota Avanza 2022</h5>
               <p class="card-text">Rp 1.000.000 / hari </p>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">3 Baris Kursi</li>
              <li class="list-group-item">2000 CC</li>
              <li class="list-group-item">Manual</li>
              <a href= "Rama_booking.php?imgsrc=<?=urlencode("Image/avanza.jpeg")?>" class="btn btn-primary">Book now</a>
            </ul>
          </div>
        </div>
        <br>
        </div>
      </table>

      <div class="card-footer text-muted" align="center">
        Created By Rama_1202204313
      </div>
    </section>
  </body>
</html>