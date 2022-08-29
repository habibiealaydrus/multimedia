<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url(); ?>/vendor/support/css/style.css" rel="stylesheet">
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Slick JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <title>Monitor Violet</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mitra Keluarga Gading Serpong</a>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 bagian_video">
                <video width="100%" height="100%" controls autoplay muted loop>
                    <source src="<?= base_url() ?>/vendor/support/video/Video GSE Compro.mp4" type="video/mp4">
                    <source src="<?= base_url() ?>/vendor/support/video/Video GSE Compro.ogg" type="video/ogg">
                </video>
            </div>
            <div class="col-6 bagian_slide">
                <div class="slider">
                    <div>
                        <img src="<?= base_url(); ?>/vendor/support/img/sundayclinic.jpg" alt="Image 1" width="100%">
                    </div>
                    <div>
                        <img src="<?= base_url(); ?>/vendor/support/img/rsmitra.jpg" alt="Image 2" width="100%">
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 bagian_text">
                <marquee>
                    <p>Mohon memperhatikan antrian</p>
                </marquee>
            </div>
        </div>
    </div>
    <!-- <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <marquee>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ipsa perferendis, explicabo architecto incidunt praesentium debitis tempore. Atque est illo numquam nobis, accusantium illum fugit aut? Libero totam corporis perspiciatis?</p>
                </marquee>
            </div>
        </div>
    </div> -->
    <footer class="footer">
        <center>
            developed by Habibie
        </center>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <script>
        $(document).ready(function() {
            $('.slider').slick({
                autoplay: true,
                autoplaySpeed: 1500
            });
        });
    </script>

</body>

</html>