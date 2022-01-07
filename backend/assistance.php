<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/estilo.css" />
    <link rel="stylesheet" href="css/mystyle.css" />

    <title>Assistance</title>
</head>
<!-- assistance page -->

<body>
    <?php include 'navbar.php' ?>
    <div class="container">
        <form class="form-horizontal" role="form" action="assistanceActions.php" method="post">
            <h2 class="text-center" style="color:#4BB543">Assistance</h2>
            <div class="form-group">
                <label for="firstName" class="col-sm-3 control-label">
                    Name
                </label>
                <div class="col-sm-9">
                    <input type="text" name="name" id="name" placeholder="Introduza o seu nome" class="form-control" autofocus required />
                </div>
            </div>

            <div class="form-group">
                <label for="lastName" class="col-sm-3 control-label">
                    Email
                </label>
                <div class="col-sm-9">
                    <input type="email" name="email" id="email" placeholder="Introduza o seu email" class="form-control" autofocus required />
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-9">
                    <label for="Equipament"> Equipment</label>
                    <select id="Equipament" name="equipment">
                        <option value="assunto">Assunto</option>
                        <option value="arranque">Arranque</option>
                        <option value="avaira">Avaira</option>
                        <option value="protocolo">Protocolo de manutencao</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="model" class="col-sm-3 control-label">
                    Model
                </label>
                <div class="col-sm-9">
                    <input type="text" id="modelo" name="model" placeholder="Inroduza o modela da maquina" class="form-control" required />
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">
                    Problem
                </label>
                <div class="col-sm-9">
                    <input type="text" id="problema" name="problem" placeholder="Digite a descricao do problema" class="form-control" required />
                </div>
            </div>

            <div class="form-group">
                <label for="birthDate" class="col-sm-3 control-label">
                    Date
                </label>
                <div class="col-sm-9">
                    <input type="date" name="date" id="birthDate" class="form-control" required />
                </div>
            </div>

            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
            </div>
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>

</html>
<?php
include 'conn.php';

?>