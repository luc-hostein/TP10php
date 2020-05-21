<?php


echo "
<!DOCTYPE html>
<html>
  <head>
    <title>TP8 php</title>
    <!-- ajout de BS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\"rel=\"stylesheet\">
  </head>
  <body>
    <h1>Création d'un nouveau compte</h1>
    <form action='controller.php' method='post'>
    <div class=\"form-group\">
        <label for=\"exampleInputPassword1\">Login</label>
        <input type=\"text\" class=\"form-control\" placeholder=\"Login\" name='login'>
    </div>
    <div class=\"form-group\">
        <label for=\"exampleInputPassword1\">Password</label>
        <input type=\"password\" class=\"form-control\" placeholder=\"Password\" name='password'>
    </div>
    <div class=\"form-group\">
        <label for=\"exampleInputPassword1\">Mail</label>
        <input type=\"email\" class=\"form-control\" placeholder=\"Mail\" name='email'>
    </div>
    <div class=\"form-group\">
        <label for=\"exampleInputPassword1\">Nom</label>
        <input type=\"text\" class=\"form-control\" placeholder=\"Nom\" name='nom'>
    </div>
    <div class=\"form-group\">
        <label for=\"exampleInputPassword1\">Prenom</label>
        <input type=\"text\" class=\"form-control\" placeholder=\"Prenom\" name='prenom'>
    </div>
    <button type=\"button submit\" class=\"btn btn-primary\" name='buttonValidation' value='viewNewUser'>Validation</button>
    </form>
  </body>
</html>

";




?>