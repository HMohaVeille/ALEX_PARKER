<?php

namespace App\Controllers\PagesController;

use \PDO;

function homeAction(PDO $connexion)
{
    // Je vais demander des données aux modèles
    include_once '../app/models/postsModel.php';
    $posts = \App\Models\PostsModel\findAll($connexion);
    // Je charge la vue 'home' dans $content
    global $content, $title;
    $title = "HomePage";
    ob_start();
    include '../app/views/posts/home.php';
    $content = ob_get_clean();
}
