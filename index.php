<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>The Book</title>
    </head>

    <body class="indigo lighten-5">
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
      

      <!-- Slide -->
      <section id="slide" class="slide">
            <div class="slider">
          <ul class="slides">
            <li>
              <img src="img/1.jpg"> <!-- random image -->
              <div class="caption center-align">
                <h3>This is our big Tagline!</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
              </div>
            </li>
            <li>
              <img src="img/2.jpg"> <!-- random image -->
              <div class="caption left-align">
                <h3>Left Aligned Caption</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
              </div>
            </li>
            <li>
              <img src="img/3.jpg"> <!-- random image -->
              <div class="caption right-align">
                <h3>Right Aligned Caption</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
              </div>
            </li>
            <li>
              <img src="img/4.jpg"> <!-- random image -->
              <div class="caption center-align">
                <h3>This is our big Tagline!</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <!-- data -->
      <section id="data" class="data">
        <div class="container">
        
          <div class="row">
            <div class="col s12 m12 center">
              <h3 class="center light">Data Buku</h3>
              <p class="center light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores debitis omnis impedit dignissimos obcaecati, excepturi nobis quos unde ipsum accusantium exercitationem facilis, et accusamus aperiam veritatis, aliquid consectetur dolorum assumenda.</p>
              <a class="waves-effect waves-light btn-large" href="master/content/index.php">Data Buku</a>
            </div>
            
          </div>
        </div>
      </section>





      <section id="about" class="about" >
        <div class="container" >
          <div class="row center">
            <div class="col s12">
              
              <h3 class="light" style="margin-bottom: 50px;">Filosofi Buku</h3>
            </div>
            
            <!-- card -->

            <div class="row " >
              <div class="col s12 m6">
                <div class="card-panel indigo darken-1">
                <h4 class="light white-text">Sampul buku adalah fisik manusia</h4>
                <p class="light white-text" style="text-align: justify;">seringkah kita menilai buku dari sampulnya? Seringkah kita memberi sampul luar untuk sampul buku kita?? Apakah kita terkadang mencela buku orang lain padahal baru melihat sampulnya?? Pernahkah juga anda merawat sampul buku anda??pertanyaan pertanyaan tersebut secara ringan mendarat dalam benak pikiran saya, bahwa banyak yang kita lakukan ketika menjalani kehidupan di dunia ini erat dengan sampul buku, baik sampul kita sendiri maupun orang lain. Manusia diciptakan secara fisik memang berbeda, ada yg menarik atau juga sebaliknya. Tapi kembali pada diri kita akan memperindah sampul saja atau juga kertas yang ada di dalamnya??</p>
                </div>
              </div>
              <div class="col s12 m6">
                <div class="card-panel indigo darken-1">
                <h4 class="light white-text">Halaman buku adalah catatan hidup kita</h4>
                <p class="light white-text" style="text-align: justify;">tanpa menulisnya saya yakin pasti anda memiliki catatan tentang hidup anda, setiap hari pasti anda mendapat sebuah catatan kehidupan entah itu berupa catatan pendek, catatan panjang, catatan menggembirakan, atau bahkan juga catatan menyedihkan, serta berjuta cerita tentang kehidupan anda.halaman pertama dari buku itu adalah hari pertama kita lahir ke dunia, tetulis tempat tanggal lahir kita, nama kita, serta berjuta harapan yang telah orang tua anda gantungkan di pundak anda yang kokoh itu, serta wajah yang telah mengubah sebuah keputusasaan menjadi sebuah harapan di keluarga baru anda.</p>
                  
              </div>
              </div>
            </div>
          </div>

        
      </section>

      <!-- foot -->
      
        <footer class="page-footer deep-purple accent-2 ">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">The Book</h5>
                <p class="grey-text text-lighten-4">Create by ASB.</p>
              </div>
             
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2021 Copyright Text
           
            </div>
          </div>
        </footer>
      

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>

      <script> 
        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider,{
            indicators: false,
            height: 500,
            transition: 600,
            interval : 3000
        });

        const sidenav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sidenav);
      </script>
    </body>
  </html>