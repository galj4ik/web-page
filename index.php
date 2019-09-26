<?php

require_once './functions.php';

//dd($_GET);

require_once './parts/header.php';

// $page = isset($_GET['page']) $_GET['page'] : 'home'
$page = $_GET['page'] ?? 'home';



switch ($page){

    case 'home':
        require_once './pages/home.php';
        break;
    case 'articles':
        require_once './pages/articles.php';
        break;
    case 'contacts':
        require_once './pages/contacts.php';
        break;
    case 'chat':
        require_once './pages/chat.php';
        break;
    case 'register':
        require_once './pages/register.php';
        break;
    case 'articlex':
        require_once './pages/articlex.php';
        break;
    case 'articley':
        require_once './pages/articley.php';
        break;
    case 'articlez':
        require_once './pages/articlez.php';
        break;
    case 'test':
        require_once './pages/test.php';
        break;
    default:
        require_once './pages/404.php';
        break;


}



require_once './parts/footer.php';



