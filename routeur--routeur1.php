// routeur.php
<?php 

function initRouter() {
    return [
        'listPost' => [
            'controller' => 'PostController',
            'method' => 'list'
        ],
        'createPost' => [
            'controller' => 'AdminController',
            'method' => 'create'
        ],
        'showPost' => [
            'controller' => 'PostController',
            'method' => 'show'
        ]
    ]
}

?>

// index.php
<?php
include 'routeur.php';
$router = initRouteur();

if ($_GET['action']) {
    $route = $routeur[$_GET['action']];

    try {
        $controller = new $route['controller']();
        $controller->$route['method'](array_merge($_GET, $_POST));
    } catch (Exception $e) {
        traiter exception
    }
}
?>

// PostController.php
<?php
class PostController() {
    public function list($datas) {
        return la liste des article;
    }

    public function show($datas) {
        return /*l'article avec id = $data['id']*/;
    }
}

?>

// AdminController.php
<?php
class AdminController() {
    public function __construct() {
        if (! $_SESSION['utilisateur']) {
            throw new Exception();
        }
    }

    public function list($datas) {
        return la liste des article;
    }

    public function show($datas) {
        return /*l'article avec id = $data['id']*/;
    }
}

?>// routeur.php
<?php 

function initRouter() {
    return [
        'listPost' => [
            'controller' => 'PostController',
            'method' => 'list'
        ],
        'createPost' => [
            'controller' => 'AdminController',
            'method' => 'create'
        ],
        'showPost' => [
            'controller' => 'PostController',
            'method' => 'show'
        ]
    ]
}

?>

// index.php
<?php
include 'routeur.php';
$router = initRouteur();

if ($_GET['action']) {
    $route = $routeur[$_GET['action']];

    try {
        $controller = new $route['controller']();
        $controller->$route['method'](array_merge($_GET, $_POST));
    } catch (Exception $e) {
        traiter exception
    }
}
?>

// PostController.php
<?php
class PostController() {
    public function list($datas) {
        return la liste des article;
    }

    public function show($datas) {
        return /*l'article avec id = $data['id']*/;
    }
}

?>

// AdminController.php
<?php
class AdminController() {
    public function __construct() {
        if (! $_SESSION['utilisateur']) {
            throw new Exception();
        }
    }

    public function list($datas) {
        return la liste des article;
    }

    public function show($datas) {
        return /*l'article avec id = $data['id']*/;
    }
}

?>