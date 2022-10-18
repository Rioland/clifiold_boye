<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            margin-bottom: 10rem;
        }

        .card {
            border-radius: .35rem !important;
        }

        .card img {
            border-radius: .35rem !important;
        }

        .card-body {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            overflow: hidden;
            background-color: #fff;
            transition: all 1s;
            border-radius: .35rem !important;
        }

        .card-text {
            color: #2b0099 !important;
        }

        .card-body.close {
            top: 100%;
            height: 5rem;
            margin-top: -5rem;
            border-bottom-left-radius: .35rem !important;
            border-bottom-right-radius: .35rem !important;
            opacity: .9;
        }
    </style>
</head>

<body>
    <?php require "./head.php";
    require "./headerV2.php"; ?>
    <div class="container">

        <div class="row my-5 d-flex justify-content-center">

            <div class="col-md-6">

                <!-- Card -->
                <div class="card">

                    <!-- Card image -->
                    <img class="img-fluid" src="https://images.pexels.com/photos/1546251/pexels-photo-1546251.jpeg" alt="Card image cap">

                    <!-- Card content -->
                    <div class="card-body close text-center">

                        <!-- Title -->
                        <h4 class="card-title font-weight-bold pt-1 pb-2"><a>A word about art</a></h4>
                        <!-- Text -->
                        <p class="card-text my-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <!-- Button -->
                        <a href="https://mdbootstrap.com/products/jquery-ui-kit/" class="btn btn-primary btn-rounded blue-gradient">Wanna some art? <i class="fas fa-palette ml-2"></i></a>

                    </div>

                </div>
                <!-- Card -->

            </div>

        </div>

    </div>


    <script>
        $('.card').click(function() {
            $('.card-body').toggleClass('close');
        });
    </script>
    <?php require "./maintail.php" ?>
</body>

</html>