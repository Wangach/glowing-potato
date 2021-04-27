<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
 
        <!--navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <a class="navbar-brand" href="#">
                  <img src="images/logos/mylogo.svg" width="70px" height="70px" alt="my-logo">
              </a>
              
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Johnito
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">My Profile</a>
                      <a class="dropdown-item" href="#">Logout</a>
                    </div>
                  </li>
              </ul>
            </div>
          </nav>

          <div class="cont">
            <section id="intro">
                <header id="cusHeader">
                    <h3 class="heading">
                        <span class="heading-main">Welcome To BH Entertainment</span>
                        <span class="heading-primary">Time Spent Enjoying Yourself, is not Time Wasted!</span>
                    </h3>
                    <div class="row" id="customer-prev">
                        <div class="col-md-4 col-lg-4 col-sm-4">
                            XXX Played Games
                        </div><!--.column-->
                        <div class="col-md-4 col-lg-4 col-sm-4">
                            XXX Won Games
                        </div><!--.column-->
                        <div class="col-md-4 col-lg-4 col-sm-4">
                            XXX Lost Games
                        </div><!--.column-->
                    </div><!--.row-->
                </header>
            </section><!--intro-->

            <section id="sec">
                <div class="recent-games">
                    <h2 class="section-heading">
                        My Recent Games
                    </h2>
                    <div class="row">
                        <div class="col-md-10 col-lg-12 col-sm-10">
                            <table class="table table-dark">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div><!--recent-games-->
            </section><!--#sec-->

            <section id="third">
                <div class="recent-txns">
                    <h2 class="section-heading">
                        Recent Transactions
                    </h2>
                    <div class="row">
                        <div class="col-md-10 col-lg-12 col-sm-10">
                            <table class="table table-dark">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                    </div><!--row-->
                </div><!--recent-txns-->
            </section>

            <footer class="customer-footer">
                <p>
                    Made with <i class="glyphicon glyphicon-heart"></i> by Johnito. &copy; 
                    <script>
                        let day = new Date;
                        let today  = day.getFullYear();

                        document.write(today);
                    </script>
                </p>
            </footer>
          </div><!--.container-->
   
    <!--/.js files-->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/index.js"></script>
</body>
</html>