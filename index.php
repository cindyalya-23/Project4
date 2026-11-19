<!DOCTYPE html>
<html lang="id">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Project 4 Pemrograman Berbasis Web Lanjutan</title>

      <link rel="shortcut icon" href="layouts/img/favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="layouts/css/style.css">
</head>

<body>

      <aside>

            <header>
                  <img src="layouts/img/delitekno.png" class="brand">
                  <div class="user">Sistem Akademik</div>
            </header>

            <nav>
                  <ul>
                        <li>
                              <a href="index.php">
                                    <img class="icon" src="layouts/img/menu.png" alt=""> Home
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=mhsw">
                                    <img class="icon" src="layouts/img/menu.png" alt=""> Mahasiswa
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=dosen">
                                    <img class="icon" src="layouts/img/menu.png" alt=""> Dosen
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=matkul">
                                    <img class="icon" src="layouts/img/menu.png" alt=""> Matakuliah
                              </a>
                        </li>
                  </ul>
            </nav>

      </aside>

      <main>
            <article>
                  <?php

                  require_once "vendor/autoload.php";
                  require_once "inc/Koneksi.php";

                  if (isset($_GET['hal'])) {
                        require $_GET['hal'] . ".php";
                  } else {
                        require "main.php";
                  }
                  ?>
            </article>

            <footer>
                  Project 4 Pemrograman Berbasis Web
            </footer>
      </main>

</body>

</html>
