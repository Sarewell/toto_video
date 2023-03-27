<?php
include_once('helpers/function.php');
require_once('models/models.php');
require_once('partials/layout.php');


// validation du formulaire
// 1-creation de mes variables
$error = [];
$errMsgRequire = "<span class='text-red-500'>Ce champs est obligatoire</>";
$success = "false";
$films = get('films');

// 2-Je vérifie si le formualire est soumis
if (!empty($_POST['submitted'])) {
    $title = trim(htmlspecialchars($_POST['title']));
    $description = trim(htmlspecialchars($_POST['description']));
    $year_created = trim(htmlspecialchars($_POST['year_created']));
    $first_name_actor = trim(htmlspecialchars($_POST['first_name_actor']));
    $last_name_actor = trim(htmlspecialchars($_POST['last_name_actor']));
    $nationality_film = trim(htmlspecialchars($_POST['nationality_film']));
    $url_img = trim(htmlspecialchars($_POST['url_img']));
    $category = trim(htmlspecialchars($_POST['category']));
    $statue = trim(htmlspecialchars($_POST['statue']));
    //créé un nv film
    update($title, $description, $year_created, $first_name_actor, $last_name_actor, $nationality_film, $url_img, $category, $statue);
}  
?>

<div class="m-auto mt-6 text-center p-8 flex-shrink-0 w-full max-w-sm bg-fuchsia-100 shadow-xl- rounded-lg">
    <form method="POST" >

        <!--  title -->
        <div class="form-control  ">
            <label class="label" for="title">
                <span class="label-text font-black">title</span>
            </label>
            <label class="input-group">
                <span></span>
                <input type="text" placeholder="Type here" class="input input-bordered " name="title" id ="title" value="<?= $films['title']?>" />
            </label>    
            <p><?php errorMsg('title')?></p>
        </div>

        <!-- description -->
        <div class="form-control">
            <label class="label" for="description">
                <span class="label-text font-black"> description</span>
            </label>
            <label class="input-group">
                <span></span>
                <input type="text" placeholder="Type here" class="input input-bordered " name="description" id ="description" value="<?= $films['description']?>" />
            </label>
            <p><?php errorMsg('description')?></p>
        </div>

        <!--year_created-->
        <div class="form-control">
            <label class="label"- for="year_created">
                <span class="label-text font-black">year_created</span>
            </label>
            <label class="input-group">
                <span></span>
                <input type="number" placeholder="year_created" class="input input-bordered " name="year_created" value="<?= $films['year_created']?>" />
            </label> 
            <p><?php errorMsg('year_created')?></p>
        </div> 

        <!--  first_name_actor -->
        <div class="form-control  ">
            <label class="label" for="first_name_actor">
                <span class="label-text font-black">first_name_actor</span>
            </label>
            <label class="input-group">
                <span></span>
                <input type="text" placeholder="" class="input input-bordered " name="first_name_actor" id ="first_name_actor" value="<?= $films['first_name_actor']?>"/>
            </label>
            <p><?php errorMsg('first_name_actor')?></p>
        </div>

        <!--  last_name_actor -->
        <div class="form-control  ">
            <label class="label" for="last_name_actor">
                <span class="label-text font-black">last_name_actor</span>
            </label>
            <label class="input-group">
                <span></span>
                <input type="text" placeholder="" class="input input-bordered " name="last_name_actor" id ="last_name_actor" value="<?= $films['last_name_actor']?>"/>
            </label>
            <p><?php errorMsg('last_name_actor')?></p>
        </div>

        <!--  nationality_film -->
        <div class="form-control  ">
            <label class="label" for="nationality_film">
                <span class="label-text font-black">nationality_film</span>
            </label>
            <label class="input-group">
                <span></span>
                <input type="text" placeholder="" class="input input-bordered " name="nationality_film" id ="nationality_film" value="<?= $films['nationality_film']?>"/>
            </label>
            <p><?php errorMsg('nationality_film')?></p>
        </div>

        <!--  url_img -->
        <div class="form-control  ">
            <label class="label" for="url_img">
                <span class="label-text font-black">url_img</span>
            </label>
            <label class="input-group">
                <span></span>
                <input type="text" placeholder="" class="input input-bordered " name="url_img" id ="url_img" value="<?= $films['url_img']?>"/>
            </label>
            <p><?php errorMsg('url_img')?></p>
        </div>



        <!--  category -->
        <?php
            $categoryOptions =[
                ["name" => "action",],
                ["name" => "policier"],
                ["name" => "animé"],
                ["name" => "famille"],
                ["name" => "thriller"],
                ["name" => "romance"],
            ]
        ?>
        <div class="form-control ">
                <label class="label">
                    <span class="label-text font-black">Choisir category</span>
                </label>
                <label class="input-group">
                    <span>category</span>
                    <select class="select select-bordered" name="category" value="<?= $films['category']?>">
                        <option disabled selected>Choisis une formation</option>
                        <?php foreach ($categoryOptions as $item): ?>
                        <option value="<?= $item['name']?>">
                        <?= $item['name'] ?>
                        </option>
                        <?php endforeach ?>
                    </select>
                </label>
            <p><?php errorMsg('category')?></p>
        </div>

        <!--year_created-->
        <div class="form-control">
            <label class="label"- for="statue">
                <span class="label-text font-black">statue</span>
            </label>
            <label class="input-group">
                <span></span>
                <input type="number" placeholder="statue" class="input input-bordered " name="statue" value="<?= $films['statue']?>" />
            </label> 
            <p><?php errorMsg('statue')?></p>
        </div> 

        <!-- btn submit -->
        <input type="submit" class="btn btn-active btn-secondary mt-5 font-black" name="submitted"
        value="envoyer"   >

    </form>
</div>