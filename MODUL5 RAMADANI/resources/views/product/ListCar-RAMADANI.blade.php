
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
        <link rel="stylesheet" href="{{ asset('/css/myitem.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
        crossorigin="anonymous">
    </head>
    <body>
        <section class="nav-top">
            <nav class="navbar navbar-expand-lg py-3 bg-primary justify-content-between">
                <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 100px;">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link" href="">MyCar</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto" style="margin-right: 90px;">
                        <li class="nav-item mx-4">
                            <a href="Add-RAMADANI.php" class="btn btn-light" type="button">Add Car</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a href="Profile-RAMADANI.php" class="btn btn-light" type="button">Profile</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
        <section class="content">
            <p class="main-text">Tambah Mobil</p>
            <p class="sub-text">Tambah Mobil Baru Anda Ke List Show Room</p>
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                        <img class="card-img-top" src="{{asset('img/backgroundMobil.png')}}" width="300" title="" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <p class="card-text"></p>
                            </div>
                            <div class="container-fluid row">
                                <form action="Detail-RAMADANI.php" method="post" class="col">
                                    <input type="hidden" name="id_mobil_detail" value="">
                                    <input type="submit" name="detail_car" value="Detail" class="btn btn-primary rounded-pill">
                                </form>
                                <form action="../config/delete.php" method="post" class="col">
                                    <input type="hidden" name="id_mobil_hapus" value="">
                                    <input type="submit" name="delete_car" value="Delete" class="btn btn-danger rounded-pill">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>