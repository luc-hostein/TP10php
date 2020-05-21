<?php

include "connexionDB.php";

$idcon = connexpdo("postgres","isen2020");
$query2 = "SELECT * from etudiant";
$listEtudiant = $idcon->query($query2);

$listEtudiantToChange = "<select class=\"form-control\" id=\"exampleFormControlSelect1\" name=\"etudiant\">";
foreach ($listEtudiant as  $data){
    if($data['user_id'] == $_COOKIE['idAdmin']){
        $citation = $data["prenom"]." ".$data["nom"]." : ".$data["note"];
        $listEtudiantToChange = $listEtudiantToChange."<option>$citation</option>";
    }
}
$listEtudiantToChange  = $listEtudiantToChange."</select>";


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
    <h1>Ajout d'un élève</h1>
    <form action='controller.php' method='post'>
    $listEtudiantToChange
    <div class=\"form-group\">
        <label for=\"exampleInputPassword1\">Nom</label>
        <input type=\"text\" class=\"form-control\" placeholder=\"Nom\" name='nom'>
    </div>
    <div class=\"form-group\">
        <label for=\"exampleInputPassword1\">Prénom</label>
        <input type=\"text\" class=\"form-control\" placeholder=\"Prénom\" name='prenom'>
    </div>
    <div class=\"form-group\">
        <label for=\"exampleInputPassword1\">Note</label>
        <input type=\"number\" class=\"form - control\" placeholder=\"Note\" name='note'>
    </div>
    <button type=\"button submit\" class=\"btn btn-primary\" name='buttonValidation' value='editEtudiant'>Ajout</button>
    </form>
  </body>
</html>

";

?>
