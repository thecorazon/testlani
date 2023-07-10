<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Halaman Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
  <!-- <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
  rel="stylesheet"
  /> -->

  <!-- Flaticon Font -->
  <!-- <link href="<?= BASEURL;?>/lib/flaticon/font/flaticon.css" rel="stylesheet" /> -->

  <!-- Libraries Stylesheet -->
  <link href="<?= BASEURL;?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="<?= BASEURL;?>/lib/lightbox/css/lightbox.min.css" rel="stylesheet" />


    <!-- Customized Bootstrap Stylesheet -->
    <!-- <link href="<?= BASEURL;?>/css/bootstrap.css" rel="stylesheet" /> -->
    <link href="<?= BASEURL;?>/css/style.css" rel="stylesheet" />
    <link href="<?= BASEURL;?>/css/baru.css" rel="stylesheet" />
  </head>

  <body class="bg-biru">


<!-- Registration Start -->
    <div class="container-fluid py-5">
      <div class="container offset-lg-4 pt-5">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <div class="card border-0 shadow-lg">
              <div class="card-header bg-secondary text-center p-4">
                <h1 class="text-white m-0">SMKN 8 BUTON</h1>
              </div>
              <div class="card-body rounded-bottom bg-primary p-5">
                <form action="<?= BASEURL;?>/login/autentikasi" method="post">
                  <div class="form-group">
                    <input
                      type="text"
                      name="username"
                      class="form-control border-0 p-4"
                      placeholder="Username"
                      required="required"
                    />
                  </div>
                  <div class="form-group">
                    <input
                      type="password"
                      name="password"
                      class="form-control border-0 p-4"
                      placeholder="Password"
                      required="required"
                    />
                  </div>
                    <button
                      class="btn btn-secondary btn-block border-0 py-3"
                      type="submit"
                      name="login"
                    >
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Registration End -->

</body>
</html>