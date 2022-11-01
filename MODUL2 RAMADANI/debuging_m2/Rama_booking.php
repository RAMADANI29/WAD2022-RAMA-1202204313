<!DOCTYPE html>
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
          <a class="nav-link" href="Rama_home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Booking</a>
        </li>
      </ul>
    <h1 align="center">Rent Your Car Now</h1>
    <table>
        <td>
            <div class="container">
                <img src="<?=$_GET['imgsrc']?>" style="width: 700px; height: auto;">
            </div>
        </td>
        <td>
            <div class="container">
                <form action="Rama_mybooking.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input class="form-control" type="text" name="name" value="Rama_1202204313" aria-label="input Nama" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Book Date</label>
                        <input class="form-control" name="checkin" type="date">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Start Time</label>
                        <input class="form-control" type="time">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Duration (days)</label>
                        <input class="form-control" type="number">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Car Type</label>
                        <select name="car" class="form-select" name="car">
                            <option selected disabled>Car type</option>
                            <option value="Honda Civic">Honda Civic</option>
                            <option value="Wuling Air EV">Wuling Air EV</option>
                            <option value="Toyota Avanza">Toyota Avanza</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone number</label>
                        <textarea class="form-control" id="Phone number" name="phone" rows="2"></textarea>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Health Protocol / Rp 25.000
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" name="check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Driver / Rp 100.000
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" name="check" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Fuel Filled / Rp 250.000
                        </label>
                      </div>
                      <br>
                      <button type="submit" class="btn btn-primary w-100">Submit</button>
                      <br>
                </form>
            </div>
        </td>
    </table>
    <br>
    <div class="card-footer text-muted" align="center">
        Created By Rama_1202204313
    </div>
</body>

</html>