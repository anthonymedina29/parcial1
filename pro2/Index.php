<?php 
 require_once("controllers/toyo_controller.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema2</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <img style="width: 210px;height: auto;" src="/toyota-logo.png" width="143" height="27" alt="Toyota">
       
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" >Contamos con el auto que necesitas</a>
                </li>
            </ul>    
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>
<div class="container-fluid">
    
<br>
    <div class="row">
    <table class="table table-info table-striped table-hover table-bordered table-sm table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col">ID </th>
                        <th scope="col">Autos</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Color</th>
                                               
                    </tr>
                </thead>
                <tbody>
                    <?php foreach(toyo_controller::Mostrar() as  $autos){?>
                        <tr>
                        <th scope="row"><?php echo $autos->getid() ?></th>
                        <td><?php echo  $autos->getauto() ?></td>
                        <td><?php echo  $autos->getcant() ?></td>
                        <td><?php echo $autos->getcolor() ?></td>
                       
                        </td>
                    </tr>
                    
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    </div>



   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>