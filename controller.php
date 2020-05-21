<?php

include "connexionDB.php";

$idcon = connexpdo("postgres","isen2020");
$query1 = "SELECT * from utilisateur";
$query2 = "SELECT * from etudiant";
$listUtilisateur = $idcon->query($query1);
$listEtudiant = $idcon->query($query2);



switch ($_POST['buttonValidation']){
    case "viewNewUser":
        header("Location: index.php");
        break;
    case "viewLogin":
        foreach ($listUtilisateur as $data){
            if($data['login'] == $_POST['login']){
                if($data['password'] == $_POST['password']){
                    setcookie('idAdmin',$data['id']);
                    header("Location: viewadmin.php");
                }
            }
        }
        header("Location: viewlogin.php");
        break;
    case "newEtudiant":
        $sql = "INSERT INTO etudiant (user_id,nom,prenom,note) values (?,?,?,?)";
        $sqlR = $idcon->prepare($sql);
        $sqlR->execute([$_COOKIE['idAdmin'],$_POST['nom'],$_POST['prenom'],$_POST['note']]);
        header("Location: viewadmin.php");
        break;
    case "editEtudiant":
        foreach ($listEtudiant as $data){
            $etudiant = $data["prenom"]." ".$data["nom"]." : ".$data["note"];
            if($etudiant == $_POST['etudiant']){
                $update = "UPDATE etudiant SET nom = ?, prenom = ?, note = ? WHERE id = ?";
                $nom = "";
                $prenom = "";
                $note = 0;
                if($_POST['nom'] == ""){
                    $nom = $data['nom'];
                }else{
                    $nom = $_POST['nom'];
                }
                if($_POST['prenom'] == ""){
                    $prenom = $data['prenom'];
                }else{
                    $prenom = $_POST['prenom'];
                }
                if($_POST['note'] == ""){
                    $note = $data['note'];
                }else{
                    $note = (int)$_POST['note'];
                }
                $updateR = $idcon->prepare($update);
                $updateR->execute([$nom,$prenom,$note,$data['id']]);
                print_r($updateR->errorInfo());
            }
        }
        header("Location: viewadmin.php");
        break;
    case "adminDeconnexion":
        setcookie('idAdmin','',time()-3600);
        header("Location: index.php");
        break;
    default:
        echo $_POST['buttonValidation'];
}


?>
