<?php 
include 'scripts/master.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/regular.css">
    <link rel="stylesheet" href="css/solid.css">
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
                  <a class="nav-link" href="#">Transactions <i class="fas fa-dollar-sign"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Matches <i class="fas fa-gamepad"></i></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $disp_name; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">My Profile <i class="far fa-user"></i></a>
                      <a class="dropdown-item" href="#">My Cash <span class="badge badge-dark"><?php calculateCash(); ?></span></a>
                      <a class="dropdown-item" href="scripts/login.php?logout=1">Logout <i class="fas fa-sign-out-alt"></i></a>
                    </div>
                  </li>
              </ul>
            </div>
          </nav>

          <div class="cont">
            <section id="intro">
                <header id="cusHeader">
                    <h3 class="heading">
                        <span class="heading-main">Welcome To BH Entertainment, <?php echo $disp_name; ?></span>
                        <span class="heading-primary">Time Spent Enjoying Yourself, is NEVER Time Wasted!</span>
                    </h3>
                    <div class="row" id="customer-prev">
                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                          <p>
                            <span class="text text-primary"><?php getPlayedMatches(); ?></span>
                             P. Games
                          </p>
                        </div><!--.column-->
                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                          <p>
                            <span class="text text-success"><?php getWonGames(); ?></span>
                             W. Games
                          </p>
                        </div><!--.column-->
                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                          <p>
                            <span class="text text-danger"><?php getLostGames(); ?></span>
                             L. Games
                          </p>
                        </div><!--.column-->
                    </div><!--.row-->
                </header>
            </section><!--intro-->

            <section id="sec">
                <div class="recent-games">
                    <h2 class="section-heading">
                        My Won Games
                    </h2>
                    <div class="row">
                        <div class="col-md-10 col-lg-12 col-sm-10">
                              <?php showRecWon(); ?>
                        </div>
                    </div>
                </div><!--recent-games-->
            </section><!--#sec-->

            <section id="third">
                <div class="recent-games">
                    <h2 class="section-heading">
                        My Lost Games
                    </h2>
                    <div class="row">
                        <div class="col-md-10 col-lg-12 col-sm-10">
                              <?php showRecLost(); ?>
                        </div>
                    </div>
                </div><!--recent-games-->
            </section><!--#third-->

            <section id="fourth">
                <div class="recent-txns">
                    <h2 class="section-heading">
                        Recent Transactions
                    </h2>
                    <div class="row">
                        <div class="col-md-10 col-lg-12 col-sm-10">
                            <div class="table-responsive">
                              <table class="table table-dark table-striped" id="multichange">
                                <caption> <?php echo $disp_name; ?>'s Recent Transactions</caption>
                                  <thead class="thead-light">
                                    <tr>
                                      <th class="text text-primary" scope='col'>Transactor</th>
                                      <th class="text text-primary" scope='col'>Amount</th>
                                      <th class="text text-primary" scope='col'>Reason</th>
                                      <th class="text text-primary" scope='col'>Date</th>
                                      <th class='text text-success' scope='col'>Transaction Id</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                    <?php myRecTrans(); ?>
                                  </tbody>
                              </table>
                            </div><!--.table-responsive-->
                        </div><!--col-->
                    </div><!--row-->
                </div><!--recent-txns-->
            </section><!--#fourth-->

            <footer class="customer-footer">
                <p>
                    Made with <i class="far fa-heart"></i> by Johnito. &copy; 
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