<?php
if(isset($_GET['inscription'])){
    $n=trim($_GET['nom']);
    $p=trim($_GET['prenom']);
    $tel=trim($_GET['tel']);
    $login=trim($_GET['login']);
    $psw=trim($_GET['psw']);
    $cpsw=trim($_GET['cpsw']);
    if(!empty($n) && !empty($p) && !empty($tel) && !empty($login) && !empty($psw) && !empty($cpsw) ){
        if($psw == $cpsw){
            include('connexion.php');
            // on doit verifier l'unicite du login
            $req2='select * from Personne where login = ?';
            $pdoStmt2=$pdo->prepare($req2);
            $pdoStmt2->execute([$login]);
            // rowCount() permet de retourner le nombre de ligne
            if($pdoStmt2->rowCount()==0){
                $req='insert into Personne(nom,prenom,tel,login,psw) values(?,?,?,?,?);';
                $pdoStmt=$pdo->prepare($req);
                if($pdoStmt->execute([$n,$p,$tel,$login,md5($psw)]))
                    header('location:inscription.php?err=1');//compte cree
                else //compte non cree
                    header('location:inscription.php?err=2');
            }
            else // login existe deja
                header('location:inscription.php?err=5');
        }
        else //$psw != $cpsw
            header('location:inscription.php?err=3');
    }
    else //un champs est vide
        header('location:inscription.php?err=4');
}
else //acces direct a la page action!!
    header('location:inscription.php?err=1');
?>