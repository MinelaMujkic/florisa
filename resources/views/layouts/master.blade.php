<!DOCTYPE html>
<html>

    <head>
        <title>Florisa</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/florisa.css" type="text/css">
    </head>

    <body>

        <div class="header">
			<div class="row">
				<div class="col-md-4">
					<img class="logo" src="florisa_logo.png" height="90px">
				</div>
				<div class="col-md-4 menubar">
					<ul class="nav justify-content-end">
					  <li class="nav-item">
						<a class="nav-link" href="#">O nama</a>
					  </li>
					  <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">Cvijetni aranžmani</a>
                          <a class="dropdown-item" href="#">Kućno cvijeće</a>
                        </div>
                      </li>
					  <li class="nav-item">
						<a class="nav-link" href="#">Blog</a>
					  </li>
					</ul>
				</div>
				<div class="col-md-4">
					fb i instagram 
				</div>
			</div>
		</div>


        <div class="container">
            @yield('content') 
            {{--  yield ...da nam smjesti sav sadržaj koji ćemo posle definisat...zauzimamo mjesto --}}
        </div>


        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 kontakt">
                        <h4 class="naslov">Kontakt</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Adresa: Oktobarska bb Tuzla, 75000 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Telefon: <a href="tel:+387 35 123 456">+387 61 225 883</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:agronomi@gmail.com">florisa@gmail.com</a></p>
                                </li>
                            </ul>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4 class="naslov">Informacije</h4>
                            <ul>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Načini isporuke</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <style>
            .header{
                 height: 100px;
                background-color: rgb(247, 178, 173)
            }

            .footer{
            height: 200px;
            background-color: rgb(247, 178, 173)
            }
        </style>

        @yield('style')
        {{-- u view da pišemo css...zauzimamo  mjesto  --}}

    </body>

</html>