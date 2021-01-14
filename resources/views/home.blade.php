<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>

</head>
<style>
.img-fluid rounded-circle{

}

</style>
<body>

<div class="jumbotron jumbotron-fluid">
<div style="align: justify;">
<img height="150px" src="{{ asset('img/alfino.jpg') }}" class="img-fluid rounded-circle"  style="float: left; margin: 0px 20px 3px 30px;" width="100" />
<h1>Alfino Putra Laksana</h1>
  <p>Front End | Web Developer </p>
</div> 
</div>

<div class="container-fluid second-container">
        <br>
        <div class="row mt-5">
            <div class="col-3">
                <div class="card shadow p-3">
                    <img class="card-img-top rounded" src="{{ ('img/profil.jpg ') }}" alt="Card image cap" height="226px">
                    <div class="card-body text-center">
                        <a href="/profile" class="card-link"><h4 class="card-title">Profile</h4></a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow p-3">
                    <img class="card-img-top rounded" src="{{ asset('img/Experience.jpg') }}" alt="Card image cap" height="226px">
                    <div class="card-body text-center">
                        <a href="/experience" class="card-link"><h4 class="card-title">Experience</h4></a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow p-3">
                    <img class="card-img-top rounded" src="{{ asset('img/portfolio.jpg') }}" alt="Card image cap" height="226px">
                    <div class="card-body text-center">
                        <a href="/portfolio" class="card-link"><h4 class="card-title">Portofolio</h4></a>
                    </div>
                </div>
            </div>
           
        </div>
       
        </div>
        </div>

    
</body>
</html>