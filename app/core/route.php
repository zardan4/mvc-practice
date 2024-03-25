<?php
class Route
{
    static public function start()
    {
        // default controller action 
        $controller_name = 'Main';
        $action_name = 'index';

        // divide url into parts(based on routes/subroutes)
        $routes = explode('/', $_SERVER['REQUEST_URI']);

        // controller name
        if (!empty($routes[1])) {
            $controller_name = $routes[1];
        }

        // action name
        if (!empty($routes[2])) {
            $action_name = $routes[2];
        }

        // getting files
        // for controller and model
        $model_name = 'Model_' . $controller_name;
        $controller_name = 'Controller_' . $controller_name;
        $action_name = 'action_' . $action_name;

        $model_path = "app/models/" . strtolower($model_name) . ".php";
        $controller_path = "app/controllers/" . strtolower($controller_name) . ".php";

        if (file_exists($model_path)) {
            include $model_path;
        } 

        if (file_exists($controller_path)) {
            include $controller_path;
        } else {
            Route::ErrorPage(404, "No file " . $controller_path);
            return false;
        }

        // creating controller
        $controller = new $controller_name;
        $action = $action_name;

        if (method_exists($controller, $action)) {
            $controller->$action();
        } else {
            Route::ErrorPage(404, "No such method " . $action . " in controller " . $controller_name);
            return false;
        }
    }

    static function ErrorPage(int $status_code, string $message)
    {
        $err = [
            'error' => $message,
        ];

        http_response_code($status_code);
        echo json_encode($err, JSON_PRETTY_PRINT);
    }
}
