<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Basic Banking System - TheSparksFoundation</title>

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />

    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">

    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">Basic Banking System</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="index.php">Home</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="./customers.php">All Customers</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="./transaction.php">All transactions</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="page-section mb-0" id="about">
        <div class="container">
            <br><br><br>
            <h2 class="page-section-heading text-center text-uppercase">All Transactions</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">S NO.</th>
                        <th scope="col">From</th>
                        <th scope="col">To</th>
                        <th scope="col">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require 'connection.php';
                    $query = "SELECT * FROM `transaction` ORDER BY `Tran_ID` DESC";
                    $result = mysqli_query($con,$query);
                    if(mysqli_num_rows($result) > 0){
                        $sn=1;
                        while($data = mysqli_fetch_assoc($result)){
                            echo '
                            <tr>
                                <th scope="row">'.$sn.'</th>
                                <td>'.$data['From'].'</td>
                                <td>'.$data['To'].'</td>
                                <td>'.$data['Amount'].'</td>
                            </tr>
                            ';
                            $sn++;
                        }
                    }else{
                        echo '
                        <tr>
                        <th scope="row" colspan="4">No Data Found</th>
                        
                    </tr>
                        ';
                    }
                    ?>
                    
                </tbody>
            </table>

        </div>
    </section>

    <footer class="footer text-center">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">India</h4>
                    <p class="lead mb-0">
                        2215 J&K
                        <br />
                        Abc floor, XYZ
                    </p>
                </div>

                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Around the Web</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                            class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                            class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                </div>

                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">About Bank</h4>
                    <p class="lead mb-0">
                        Registered and suggested by government of
                        <a href="#">ABC Country</a>
                        .
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>