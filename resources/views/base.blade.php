<html>
<head>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body> 
    <div class="menubar">
        <div class="menubar-content">
            <nav class="navbar navbar-default navbar-fixed-top" style="background: rgba(0,0,0,0.5); border-color: #000000">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-2">
                            <div class="site-title">
                                <h3>SmartEco</h3>
                            </div>
                        </div>
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNav" aria-expanded="false">
                                <span class="sr-only">Toggle Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="col-md-10 col-sm-10">
                            <div class="collapse navbar-collapse" id="myNav">
                                <ul class="nav navbar-nav cus-nav navbar-right">
                                    <li><a href="#" class="active">Home</a></li>
                                    <li><a href="#" class="active">Data Wilayah</a></li>
                                    <li><a href="#" class="active">Jadwal</a></li>
                                    <li><a href="#" class="active">Perbandingan Wilayah</a></li>
                                    <li><a href="#" class="active">Tentang</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="home-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="home-text">
                        <h2>SmartEco Corporation</h2>
                        <p class="hidden-xs">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaa aaa</p>
                        <a href="#">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>