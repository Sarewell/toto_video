<?php
include('partials/layout.php');
$films= getAll('films');
// debug_array($films);
?>
<div class =" overflow-x-auto ">
    <table class="table table-zebra w-full shadow-lg">
        <thead>
            <tr>
                <th>id</th>
                <th>Titre</th>
                <th>année de création</th>
                <th>categorie</th>
                <th>statue</th>
                <th>voir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($films as $film){ ?>
                <tr>
                    <th><?= $film['id'] ?></th>
                    <th><?= $film['title'] ?></th>
                    <th><?= $film['year_created'] ?></th>
                    <th><?= $film['category']  ?></th>
                    <th><?= $film['statue']  ?></th>
                    <th><a href="imformationClient.php?id=<?= $film['id'] ?>" ><i class="fa-solid fa-eye hover:text-cyan-500"></i></a></th>
                    
                </tr>

            <?php } ?>
        </tbody>

    </table>