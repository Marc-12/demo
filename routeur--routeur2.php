/ routeur.php
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

    $controller = new $route['controller']();
    $controller->$route['method'](array_merge($_GET, $_POST));
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