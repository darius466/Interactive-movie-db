<?php
    # gives access to our database through $conn variable
    include_once 'includes/db.php'; 
    
?>
<!--code for querying db for searched movie-->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>search results</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>

  <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">My name is Darius and I love movies.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Menu</h4>
              <ul class="list-unstyled">
                <li><a href="index.html" class="text-white">Home</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Give it a watch</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">


        <div class="container p-3 mb-2 bg-dark">



            <?php

                $movie = $_GET["movie"];
                #sql query to get a specific item
                $queryStatement = "SELECT * FROM Movies WHERE title = '$movie';";
                
                #Querying the database using $conn from db.php
                $results = mysqli_query($conn, $queryStatement);

                # Make item card for queried entry 
                    while ($film = mysqli_fetch_assoc($results)) {
                    ?>
                        <!--<div class="col-md-5">-->
                        <div class="card w-50 mb-4 box-shadow mx-auto">
                            <img class="card-img-top"  src="<?php echo $film["img_url"] ?>" alt="Image of <?php echo $film["title"]?>">
                            <div class="card-body">
                                <h3 card-title><?php echo $film["title"]?></h3>
                                <p class="card-text"><?php echo $film["description"]?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Directed By</small>
				                    <small class="text-muted"><?php echo $film["director"]?></small>
				                    <small class="text-muted">Written By</small>
				                    <small class="text-muted"><?php echo $film["writer"]?></small>
                                </div>
				                <br>
				                <p class="card-text"><?php echo $film["fact"]?></p>
                            </div>
                        </div>
                        <!--</div>-->
                    <?php
                    }
                    ?>
        </div>


    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="bootstrap-4.0.0/assets/js/vendor/popper.min.js"></script>
    <script src="bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-4.0.0/assets/js/vendor/holder.min.js"></script>
  </body>
</html>

