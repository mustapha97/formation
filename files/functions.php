<?php

/* functions */


/* Connexion a la base donnée */
/* Base donnée */
 function database()
{

    /* Base donnée */
    $host = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "formation";

    $db = new PDO("mysql:host=" . $host . ";dbname=" . $database, $username, $password,
        array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
            PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT
        )
    );

    return $db;

}

/* Connexion */
function connexion($username, $password)
{

    /* se connecter a la base de donnée */
    $db = database();

    $sttm = $db->prepare("SELECT * FROM users WHERE username= :username AND password = :password");
    $sttm->bindParam(':username', $username);
    $sttm->bindParam(':password', $password);

    if ($sttm->execute()) {
        $user = $sttm->fetch(PDO::FETCH_ASSOC);
        if (!empty($user)) {
            extract($user);
            $_SESSION["id"] = $id;
            $_SESSION["username"] = $username;
            $_SESSION["type"] = $type;

            switch ($type) {
                case "employé":
                    $sttm2 = $db->prepare("SELECT * FROM users WHERE id_user = :id");
                    $sttm2->bindParam(':id', $id);
                    if ($sttm2->execute()):
                        $employé = $sttm2->fetch(PDO::FETCH_ASSOC);
                        extract($employé);
                        $_SESSION["nom"] = $nom;
                        $_SESSION["prenom"] = $prenom;
                        $_SESSION["id_employe"] = $id;
                    endif;
                    break;

            }
            return true;
        } else {
            return false;
        }
    }

    return false;

}
if (isset($_POST["connexion"])) {

    if (!empty($_POST["username"]) && !empty($_POST["password"])) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        if (connexion($username, $password)) {
            header("Location: page.php");
            exit();
        }
    }
}
function listFormation()
{

    $types = [];

    $db = database();

    $sttm = $db->prepare("SELECT ft.title, count(f.id) as 'number', ft.created_at FROM formations_type ft LEFT JOIN formations f on ft.id = f.formations_type_id
group by ft.title,ft.created_at");
    if ($sttm->execute()) {
        $types = $sttm->fetchAll();
        return $types;
    }

    return $types;

}
function listDemande()
{

    $demande = [];

    $db = database();

    $sttm = $db->prepare("SELECT u.first_name, u.last_name, u.cycle, u.frame, u.email, u.rang_number, u.region, u.establishment, d.created_at, f.title, ft.title as 'type' FROM `users` u join demands d on u.id = d.user_id JOIN formations f on f.id = d.formation_id JOIN formations_type ft on ft.id = f.formations_type_id");
    if ($sttm->execute()) {
        $demande = $sttm->fetchAll();
        return $demande;
    }

    return $demande;

}
function listFormations()
{

    $formation = [];

    $db = database();

    $sttm = $db->prepare("SELECT f.title , ft.title as 'type' , f.created_at FROM `formations` f JOIN formations_type ft on formations_type_id = ft.id");
    if ($sttm->execute()) {
        $formation = $sttm->fetchAll();
        return $formation;
    }

    return $formation;

}
function inscriptionEmployé($username,$password,$nom, $premon, $cycle, $établissement, $commune, $cadre, $numéro_de_rang, $email)
{
    $db = database();
	

    $sttm = $db->prepare("INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `email`, `type`, `cycle`, `region`, `establishment`, `rang_number`, `frame`, `password`, `active`, `created_at`, `updated_at`)
		VALUES 
		(NULL, '".$username."', '".$prenom."', '".$nom."', '".$email."', 'employee', '".$cycle."', '".$commune."', '".$etablissemne."', 
		'".$numéro_de_rang."', '".$cadre."', '".$password."', '1', NULL, NULL);");
	 $_SESSION["message"] = "Vous êtes maintenant inscrit ! merci de se connecter utilisant votre username et mot de passe";
                        header("Location: index.php");

    if ($sttm->execute()) {
        return true;
    }
    return false;

}

function store_type_formation($title){
	  $db = database();
	
    $sttm = $db->prepare("INSERT INTO `formations_type` (`id`, `title`, `active`, `created_at`, `updated_at`) VALUES (NULL, '".$title."', '1', '".date('Y-m-d')."', NULL);");
	 $_SESSION["message"] = "Vous êtes maintenant inscrit ! merci de se connecter utilisant votre username et mot de passe";
                      //  header("location:./type_formation.php");
						echo "<script>window.location='type_formation.php'</script>";

    if ($sttm->execute()) {
        return true;
    }
    return false;
}
if (isset($_POST['signup'])) {

    if (!empty($_POST["username"]) && !empty($_POST["password"]) && !empty($_POST["type"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["email"]) && !empty($_POST["cycle"])) {
		
          

                    if (inscriptionEmployé($id_user, $_POST["nom"], $_POST["prenom"], $_POST["cycle"], $_POST["etablissemne"], $_POST["commune"], $_POST["Numéro_de_rang"], $_POST["Le_cadre"], $_POST["email"])) {

                        $_SESSION["message"] = "Vous êtes maintenant inscrit ! merci de se connecter utilisant votre username et mot de passe";
                        header("Location: index.php");
                        exit();
                    }
            } else {
        $_SESSION["message"] = "Vous avez laisser des champs vides !";
    }

	}
?>