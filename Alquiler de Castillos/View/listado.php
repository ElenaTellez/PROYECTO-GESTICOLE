
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" type="text/css"  href="../../css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/estilos.css" />
        <link rel="icon" href="../../favicon.ico">

        <title>Dashboard Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link href="../../css/bootstrap.min.css" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="../../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="dashboard.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../../js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="container-fluid">
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">GESTION CASTILLOS HINCHABLES</h1>

                <div class="row placeholders">
                    <div class="col-xs-6 col-sm-3 placeholder">
                        <a href="../Controller/nuevoCastillo.php">
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                        <h4 class="glyphicon glyphicon-ok">Añadir Castillo</h4>
                        </a>
                    </div>
                    <div class="col-xs-6 col-sm-3 placeholder">
                        <a href="../../02.php">
                            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                        </a><h4>Administración Alumnos y Profesores</h4>
                    </div>
                </div>

                <h2 class="sub-header">LISTADO DE CASTILLOS</h2>
                <div class="table-responsive">
                    <?php
                    foreach ($data['castillos'] as $castillo) {
                        ?>
                        <table class="table table-striped">
                            <tbody>
                                <tr> 
                                    <td class="col-md-4"><img src="../View/images/<?= $castillo->getImagen() ?>" width="400"></td>
                                    <td class="col-md-8">
                                        <h1><?= $castillo->getTitulo() ?></h1><br><br><br>
                                        <h2> <?= $castillo->getDescripcion() ?></h2><br><br> 
                                        <h3><a href="../Controller/borraCastillo.php?id=<?= $castillo->getId() ?>">
                                        <span class="glyphicon glyphicon-trash"></span>Eliminar Castillo</a></h3>
                                    </td>   
                                </tr>
                            </tbody>
                        </table>
                        <?php
                    }
                    ?>
                </div>
            </div>


        </div> 
          </body>
</html>
