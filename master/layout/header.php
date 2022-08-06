<!doctype html>
<html lang="en">

<head>
  <title>Data Buku</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="../../Assets/css/bootstrap.min.css">
</head>

<body>
  <!-- Navbar -->
     
  <div class="navbar-fixed">
          <nav class="deep-purple accent-2">
            <div class="container">
              <div class="nav-wrapper">
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <a href="\book\index.php" class="brand-logo">Books</a>
                <ul class="right hide-on-med-and-down">
                  <li><a href="\book\index.php">Home</a></li>
                  <li><a href="master/content/index.php">Data Buku</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
   <!-- Side Nav -->
   <ul class="sidenav" id="mobile-nav">
            <li><a href="\book\index.php">Home</a></li>
            <li><a href="master/content/index.php">Data Buku</a></li>
            
        </ul>


      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      
      <script>
        const sidenav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sidenav);
      </script>

</body>
  