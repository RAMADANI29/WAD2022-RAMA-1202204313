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
    <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="Rama_home.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Rama_booking">Booking</a>
        </li>
      </ul>
    <?php

    error_reporting(E_ERROR | E_PARSE);
    $booking = isset($_GET['bookingnumber']) ? $_GET['bookingnumber']  : '';
    $name = isset($_GET['name']) ? $_GET['name'] : '';
    $checkin = isset($_GET['checkin']) ? $_GET['checkin']  : '';
    $checkout = isset($_GET['checkout']) ? $_GET['checkout']  : '';
    $phone = isset($_GET['phone']) ? $_GET['phone'] : '';
    $service = isset($_GET['service']) ? $_GET['service'] : '';
    $price = isset($_GET['price']) ? $_GET['price'] : '';

    $mobil = $_POST['car'];

    $Total = 0;

    if ($mobil == 'Toyota Innova') {
        $Total = 200000;
    } else if ($mobil == 'Honda Civic') {
        $Total = 150000;
    } else if ($mobil == 'Hyundai Santa Fe') {
        $Total = 250000;
    }

    ?>
    <div class="container">
    <h1 align="center">Thank You RAMA_1202200262 for Reserving</h1>
    <h3 align="center">Please double check your reservation details</h3>
    <table>
        <thead>
            <tr>
                <th scope="col">Booking Number</th>
                <th scope="col">Name</th>
                <th scope="col">Check in</th>
                <th scope="col">Check out</th>
                <th scope="col">Car Type</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Services</th>
                <th scope="col">Total Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $booking (rand()) ?></td>
                <td><?php echo $name ?></td>
                <td><?php echo $checkin ?></td>
                <td><?php echo $checkout ?></td>
                <td><?php echo $car ?></td>
                <td><?php echo $phone ?></td>
                <td><?php echo $service ?></td>
                <td><?php echo $price ?></td>
            </tr>
        </tbody>
    </table>
    <div class= "mb-3">
        <div class = "d-flex justify-content-center">
            <a href = "Rama_booking.php"></a>
        </div>
    </div>
    <div class="card-footer text-muted" align="center">
        Created By Rama_1202204313
    </div>
</body>
</html>