<?php
// recupere la conexion a la bdd
require_once('pdo.php');
require_once('helpers/function.php');
// je stok la conexion dans $pdo
$pdo = pdo();
/**
 * get all items in DBB
 */
function getAll($table, $order="")
{
    global $pdo;
    $sql = "SELECT * FROM $table"; 

    if ($order){
        $sql .=" ORDER BY " . $order;
    }

    $query = $pdo->prepare($sql);

    $query->execute();

    $items = $query->fetchAll();

    return $items;

}
function getId()
{
    if(!empty($_GET['id']) && isset($_GET['id'])  && is_numeric($_GET['id']))
    {
        //on netoye notre id
        $id = cleanInput($_GET['id']);
    }else{
        $_SESSION['error']= "etudiant inconu";
        // header('location:index.php');
    }
    return $id;
}

function get($table)
{
    global $pdo;
    $id =getId();


    //on fai la requette 
    $sql = "SELECT * FROM $table where id= :id";
      //prepare la requete
    $query = $pdo->prepare($sql);
    //on asocie la requette a un parametre
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    //exedcute la requette
    $query->execute();
    $item = $query->fetch();
    // debug_array($student);
    //pas de students redirect

    if(!$item){
        $_SESSION['error']= "film inconue";
        // header('location:index.php');
    }
    return $item;
}
function delete($table)
{
    global $pdo;
    $id = getId();
    //on fai la requette 
    $sql = "DELETE FROM films where id= :id";
      //prepare la requete
    $query = $pdo->prepare($sql);
    //on asocie la requette a un parametre
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    //exedcute la requette
    $query->execute();

    $_SESSION['success'] = "element suprimer avec succées!";
    
    // header('location:listeVideo.php');

}
function create($title, $description, $year_created, $first_name_actor, $last_name_actor, $nationality_film, $url_img, $category, $statue) 
{
    //require_once('helpers/validate-input/validateInput.php');

    global $pdo;
    global $error;
    global $success;
    if(count($error)== 0){
        $success = true;

        //1-la requette
        
        $sql = "INSERT INTO films(title, description, year_created, first_name_actor, last_name_actor, nationality_film, url_img, category, statue,) VALUES(:title, :description, :year_created, :first_name_actor, :last_name_actor, :nationality_film, :url_img, :category, :statue,)";
        
        //2-prépare la requette
        $query = $pdo->prepare($sql);
        //3- associé chaque parametre à sa valeur
        $query->bindValue(':title', $title,PDO::PARAM_STR);
        $query->bindValue(':description', $description,PDO::PARAM_STR);
        $query->bindValue(':year_created', $year_created,PDO::PARAM_INT);
        $query->bindValue(':first_name_actor', $first_name_actor,PDO::PARAM_STR);
        $query->bindValue(':last_name_actor', $last_name_actor,PDO::PARAM_STR);
        $query->bindValue(':nationality_film', $nationality_film,PDO::PARAM_STR);
        $query->bindValue(':url_img', $url_img,PDO::PARAM_STR);
        $query->bindValue(':category', $category,PDO::PARAM_STR);
        $query->bindValue(':statue', $statue,PDO::PARAM_INT);


        //4_ execute la query
        $query-> execute();

        //5- redirect
        $_SESSION["success"] = "L'élément a été ajouté";

    // header('location: listeVideo.php');

    }
}
function update($title, $description, $year_created, $first_name_actor, $last_name_actor, $nationality_film, $url_img, $category, $statue) 
{
    //require_once('helpers/validate-input/validateInput.php');

    global $pdo;
    global $error;
    global $success;
    if(count($error)== 0){
        $success = true;

        //1-la requette
        
        $sql = "UPDATE films SET title=:title, description =:description, year_created=:year_created, first_name_actor=:first_name_actor, last_name_actor=:last_name_actor, nationality_film=:nationality_film, url_img=:url_img, category=:category, statue=:statue, updated_at= NOW() WHERE id=:id";
        
        //2-prépare la requette
        $query = $pdo->prepare($sql);
        //3- associé chaque parametre à sa valeur
        $query->bindValue(':title', $title,PDO::PARAM_STR);
        $query->bindValue(':description', $description,PDO::PARAM_STR);
        $query->bindValue(':year_created', $year_created,PDO::PARAM_INT);
        $query->bindValue(':first_name_actor', $first_name_actor,PDO::PARAM_STR);
        $query->bindValue(':last_name_actor', $last_name_actor,PDO::PARAM_STR);
        $query->bindValue(':nationality_film', $nationality_film,PDO::PARAM_STR);
        $query->bindValue(':url_img', $url_img,PDO::PARAM_STR);
        $query->bindValue(':category', $category,PDO::PARAM_STR);
        $query->bindValue(':statue', $statue,PDO::PARAM_INT);


        //4_ execute la query
        $query-> execute();

        //5- redirect
        $_SESSION["success"] = "L'élément a été ajouté";

    // header('location: listeVideo.php');

    }
}