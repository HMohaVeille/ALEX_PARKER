<?php
// ROOTER PRINCIPAL 

// ROUTE DES POSTS
// PATTERN: /?posts
if (isset($_GET['posts'])) :
    include_once '../app/routers/posts.php';



// ROUTE PAR DEFAUT
// PATTERN /
// CTRL: pagesController
// ACTION: homeAction
else :
    include_once '../app/controllers/pagesController.php';
    \App\Controllers\PagesController\homeAction($connexion);
endif;
