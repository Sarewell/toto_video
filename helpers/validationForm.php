<?php

// validation du formulaire
// 1-creation de mes variables
$error = [];
$errMsgRequire = "<span class='text-red-500'>Ce champs est obligatoire</>";
$success = false;

// 2-Je vérifie si le formualire est soumis
if (!empty($_POST['submited'])) {
  // 3- protege contre faille xss
  ///////////////////////////////
    $title = trim(htmlspecialchars($_POST['title']));
    $description = trim(htmlspecialchars($_POST['description']));
    $year_created = trim(htmlspecialchars($_POST['year_created']));
    $first_name_actor = trim(htmlspecialchars($_POST['first_name_actor']));
    $last_name_actor = trim(htmlspecialchars($_POST['last_name_actor']));
    $nationality_film = trim(htmlspecialchars($_POST['nationality_film']));
    $url_img = trim(htmlspecialchars($_POST['url_img']));
    $category = trim(htmlspecialchars($_POST['category']));
    $statue = trim(htmlspecialchars($_POST['statue']));

    

  // 4- validation de chaque input
  /////////////////////////////////
  // nom

if (!empty($title)) {
    if (strlen($title) <= 2) {
      $error['title'] = "<span class='text-red-500'>3 caractères minimum</span>";
    } elseif (strlen($title) > 40) {
      $error['title'] = "<span class='text-red-500'>20 caractères maximum</span>";
    }
  } else {
    $error['title'] = $errMsgRequire;
  }
    if (!empty($description)) {
    if (strlen($description) <= 20) {
      $error['description'] = "<span class='text-red-500'>3 caractères minimum</span>";
    } elseif (strlen($description) > 100) {
      $error['description'] = "<span class='text-red-500'>20 caractères maximum</span>";
    }
  } else {
    $error['title'] = $errMsgRequire;
  }
    if (!empty($first_name_actor)) {
    if (strlen($first_name_actor) <= 2) {
      $error['first_name_actor'] = "<span class='text-red-500'>3 caractères minimum</span>";
    } elseif (strlen($first_name_actor) > 50) {
      $error['first_name_actor'] = "<span class='text-red-500'>20 caractères maximum</span>";
    }
  } else {
    $error['first_name_actor'] = $errMsgRequire;
  }
if (!empty($last_name_actor)) {
    if (strlen($last_name_actor) <= 2) {
      $error['last_name_actor'] = "<span class='text-red-500'>3 caractères minimum</span>";
    } elseif (strlen($last_name_actor) > 50) {
      $error['last_name_actor'] = "<span class='text-red-500'>20 caractères maximum</span>";
    }
  } else {
    $error['last_name_actor'] = $errMsgRequire;
  }
  if (!empty($nationality_film)) {
    if (strlen($nationality_film) <= 2) {
      $error['nationality_film'] = "<span class='text-red-500'>3 caractères minimum</span>";
    } elseif (strlen($nationality_film) > 50) {
      $error['nationality_film'] = "<span class='text-red-500'>20 caractères maximum</span>";
    }
  } else {
    $error['nationality_film'] = $errMsgRequire;
  }
  if (!empty($url_img)) {
    if (strlen($url_img) <= 2) {
      $error['url_img'] = "<span class='text-red-500'>3 caractères minimum</span>";
    } elseif (strlen($url_img) > 50) {
      $error['url_img'] = "<span class='text-red-500'>20 caractères maximum</span>";
    }
  } else {
    $error['url_img'] = $errMsgRequire;
  }
    if (!empty($category)) {
    if (strlen($category) <= 2) {
      $error['category'] = "<span class='text-red-500'>3 caractères minimum</span>";
    } elseif (strlen($category) > 50) {
      $error['category'] = "<span class='text-red-500'>20 caractères maximum</span>";
    }
  } else {
    $error['category'] = $errMsgRequire;
  }

  if (!empty($year_created)) {
    if (!is_numeric($year_created)) {
      $error['year_created'] = "<span class='text-red-500'>Merci de rentrer un date correct</span>";
      }

  } else {
    $error['year_created'] = $errMsgRequire;
  }

    if (!empty($statue)) {
    if (!is_numeric($statue)) {
      $error['statue'] = "<span class='text-red-500'>Merci de rentrer un statue correct</span>";
      }

  } else {
    $error['statue'] = $errMsgRequire;
  }

  // 5- Pas d'erreur => Enregistrement en Base de donnée
  if (count($error) == 0) {
    $success = true;
    // enregistrement en BDD
  }
}



?>


