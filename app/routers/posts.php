<?php

use App\Controllers\PostsController;

include '../app/controllers/postsController.php';

switch ($_GET['posts']):
    case 'show':
        PostsController\showAction($connexion, $_GET['id']);
        break;
    default:
        \App\Controllers\PagesController\homeAction($connexion);
        break;
endswitch;