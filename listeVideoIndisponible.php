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

<main class="pt-20">
  <form method="POST">
    <!-- input title -->
    <div class="form-control w-full max-w-xs">
      <label class="label" for="title">
        <span class="label-text">title</span>
      </label>
      <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" name="title" id="title" value="<?php showInputValue('title') ?>" />
      <p>
        <?php
        if (isset($error['title'])) {
          echo $error['title'];
        }
        ?>
      </p>
    </div>
    <!-- input description -->
    <div class="form-control w-full max-w-xs">
      <label class="label" for="description">
        <span class="label-text">description</span>
      </label>
      <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" name="description" id="description" />
      <p>
        <?php
        if (isset($error['description'])) {
          echo $error['description'];
        }
        ?>
      </p>
    </div>
    <!-- annee de creation -->
    <div class="form-control w-full max-w-xs">
      <label class="label" for="year_created">
        <span class="label-text">year_created</span>
      </label>
      <input type="number" class="textarea textarea-bordered" placeholder="year_created" id="year_created" name="year_created"> />
      <p>
        <?php
        if (isset($error['year_created'])) {
          echo $error['year_created'];
        }
        ?>
      </p>
    </div>

    <!-- nom de l'acteur -->
    <div class="form-control w-full max-w-xs">
      <label class="label" for="first_name_actor">
        <span class="label-text">first_name_actor</span>
      </label>
      <input type="text" class="textarea textarea-bordered" placeholder="first_name_actor" id="first_name_actor" name="first_name_actor"> />
      <p>
        <?php
        if (isset($error['first_name_actor'])) {
          echo $error['first_name_actor'];
        }
        ?>
      </p>
    </div>
    <!-- prenom de l'acteur -->
    <div class="form-control w-full max-w-xs">
      <label class="label" for="last_name_actor">
        <span class="label-text">last_name_actor</span>
      </label>
      <input type="text" class="textarea textarea-bordered" placeholder="last_name_actor" id="last_name_actor" name="last_name_actor"> />
      <p>
        <?php
        if (isset($error['last_name_actor'])) {
          echo $error['last_name_actor'];
        }
        ?>
      </p>
    </div>
    <!-- nationaliter -->
    <div class="form-control w-full max-w-xs">
      <label class="label" for="nationality_film">
        <span class="label-text">nationality_film</span>
      </label>
      <input type="text" class="textarea textarea-bordered" placeholder="nationality_film" id="nationality_film" name="nationality_film"> />
      <p>
        <?php
        if (isset($error['nationality_film'])) {
          echo $error['nationality_film'];
        }
        ?>
      </p>
    </div>
    <!-- url_img -->
    <div class="form-control w-full max-w-xs">
      <label class="label" for="url_img">
        <span class="label-text">url_img</span>
      </label>
      <input type="text" class="textarea textarea-bordered" placeholder="url_img" id="url_img" name="url_img"> />
      <p>
        <?php
        if (isset($error['url_img'])) {
          echo $error['url_img'];
        }
        ?>
      </p>
    </div>
    <!-- category -->
    <div class="form-control w-full max-w-xs">
      <label class="label" for="category">
        <span class="label-text">category</span>
      </label>
      <input type="text" class="textarea textarea-bordered" placeholder="category" id="category" name="category"> />
      <p>
        <?php
        if (isset($error['category'])) {
          echo $error['category'];
        }
        ?>
      </p>
    </div>
        <!-- statue -->
    <div class="form-control w-full max-w-xs">
      <label class="label" for="statue">
        <span class="label-text">statue</span>
      </label>
      <input type="number" class="textarea textarea-bordered" placeholder="statue" id="statue" name="statue"> />
      <p>
        <?php
        if (isset($error['statue'])) {
          echo $error['statue'];
        }
        ?>
      </p>
    </div>
    <!-- input/btn submit -->
    <input class="btn bg-blue-600 text-white mt-6" type="submit" id="submited" name="submited" value="Envoyer" />
  </form>
</main>
<!-- footer -->