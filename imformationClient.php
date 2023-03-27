<?php

require_once('models/models.php');
require_once('partials/layout.php');

$film = get('films');

?>
<div class="card w-96 bg-gray-100 shadow-xl m-auto">
    
    <div class="card-body items-center text-center">
        <h2 class="card-title">film</h2>
        <p><?= $film['title'] ?></p>
        <p><?= $film['year_created'] ?></p>
        <p><?= $film['first_name_actor']." ".$film['last_name_actor'] ?></p>
        <p><?= $film['nationality_film'] ?></p>
        <figure class="px-10 pt-10">
        <img src= <?= $film['url_img'] ?>  alt="Shoes" class="rounded-xl" />
        </figure>
        <p><?= $film['description'] ?></p>
        <p><?= $film['statue'] ?></p>
        <div class="card-actions">
        <a href="updateFilm.php?id=<?= $film['id'] ?>"><button class="btn glass bg-blue-600 shadow-lg hover:text-blue-600">modifier</button></a>
        <a href="delete.php?id=<?= $film['id'] ?>"><button class="btn glass bg-red-600 shadow-lg hover:text-red-600">delete</button></a>
        </div>
    </div>
</div>
<br /><b>Warning</b>:  Undefined variable $films in <b>C:\xampp\htdocs\toto_video\updateFilm.php</b> on line <b>31</b><br /><br /><b>Warning</b>:  Trying to access array offset on value of type null in <b>C:\xampp\htdocs\toto_video\updateFilm.php</b> on line <b>31</b><br />