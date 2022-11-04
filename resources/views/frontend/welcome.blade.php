
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Demo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="main.css">
    <style>
  .fakeimg {
    height: 200px;
    background: #3a79de;
  }
    </style>
</head>
<body>
 
    <div class="container">

        <div class="jumbotron text-center header" style="margin-bottom:0">
            <h1>Demo robot</h1>
        </div>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">Menu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Navigation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Mission</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Control</a>
            </li>    
            </ul>
        </div>  
        </nav>

        <div class="row">
            
            <div class="col-sm-3">
                <br>
                <h3>Chon map</h3> 
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                    <li class="nav-item">
                        <input type="file" name="image_product" ></th>
                    </li>
                    </li>

                </ul>

            </div>

            <div class="col-sm-9">
                @yield('content')
            </div>
        </div>
    </div>
    <div class="jumbotron text-center" style="margin-bottom:0">
        <p>Demo duoc thuc hien boi Thao va Truong</p>
    </div>

</body>
</html>
