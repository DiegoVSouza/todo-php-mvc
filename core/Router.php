<?php
class Router {
    public static function route($url) {
        require_once __DIR__ . "/../app/controllers/TaskController.php";
        $controller = new TaskController();

        include_once __DIR__ . "/../app/views/layouts/header.php";

        switch ($url) {
            case "/":
                $controller->index();
            case "home":
                $controller->index();
                break;
            case "add":
                $controller->create();
                break;
            case "edit":
                $controller->edit();
                break;
            case "delete":
                $controller->delete();
                break;
            case "complete":
                $controller->complete();
                break;
                
            default:
                http_response_code(404);
                echo "Página não encontrada";
        }

        include_once __DIR__ . "/../app/views/layouts/footer.php";

    }
}
?>
