    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Belajar Bootstrap 4 : DTS 2020</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Menyisipkan Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="">Daftar Hutang ter-Update     
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
 
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item
            <?php
              if ($hal=='')
                echo "active";
            ?>
          ">
            <a class="nav-link" href="index.php">Depan <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item
          <?php
              if ($hal=='form')
                echo "active";
            ?>
          ">
            <a class="nav-link" href="?hal=form">Form</a>
          </li>
          <li class="nav-item
          <?php
              if ($hal=='data')
                echo "active";
            ?>
          ">
            <a class="nav-link" href="?hal=data">Data</a>
          </li>
          <!--
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Programming</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Bootstrap</a>
              <a class="dropdown-item" href="#">CSS</a>
              <a class="dropdown-item" href="#">HTML 5</a>
            </div>
          </li>
          -->
        </ul>
        
     <!--   <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      -->  
      </div>
    </nav>