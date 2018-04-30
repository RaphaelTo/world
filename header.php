<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <link rel="stylesheet" type="text/css" href="bootstrap335/css/bootstrap.css">
    <!-- Bootstrap core CSS -->
    <link href="bootstrap335/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

          </button>
          <a class="navbar-brand" href="index.php">World</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>


            <li class="dropdown">

            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Continent<span class="caret"></span></a>

              <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?continent=Europe">Europe</a></li><br>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?continent=Asia">Asie</a></li><br>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?continent=North America">Amerique du Nord</a></li><br>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?continent=South America">Amerique du Sud</a></li><br>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?continent=Africa">Afrique</a></li><br>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?continent=Oceania">Océanie</a></li><br>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?continent=Antarctica">Antartique</a></li><br>
              </ul>

            </li>
         



          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
