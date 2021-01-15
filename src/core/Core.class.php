<?php

class Core
{
    public static function run()
    {
        self::init();
        self::autoload();
        self::loadRoute();
    }
    public static function init()
    {
        define("DS", DIRECTORY_SEPARATOR);
        define("APP_PATH", getcwd() . DS);

        define("CONTROLLER_PATH" , APP_PATH . 'controller' . DS);
        define("MODELS_PATH", APP_PATH . 'models' . DS);
        define("VIEW_PATH", APP_PATH . 'views' . DS);
        define("DBO", APP_PATH . 'database' . DS);
        define("CORE_PATH", APP_PATH . 'core' .DS);

        define("CROUTE_PATH", CORE_PATH . DS);
        define("ROUTE_PATH", APP_PATH . 'route' . DS);

        require_once DBO . "MyPDO.class.php";
        require_once CROUTE_PATH . "Route.class.php";

        // var_dump($_ENV['DB_DATABASE']);
        // $modules = isset($_REQUEST['v']) ? $_REQUEST['v'] : '';
        // $action = isset($_REQUEST['a']) ? $_REQUEST['a'] : '';

        // if (empty($modules) || empty($action)) {
        //     $modules = 'views';
        //     $action = 'main';
        // }
        // $path = $modules . DS . $action;
    }
    public static function autoload()
    {
        spl_autoload_register(array(__CLASS__, 'load'));
    }
    public static function load($className)
    {
        if (substr($className, -10) == 'Controller') {
            require_once CONTROLLER_PATH . "$className.class.php";
        }
        elseif (substr($className, -5) == 'Model') {
            require_once MODELS_PATH . "$className.class.php"; 
        }
    }
    public static function loadRoute() {

        require_once ROUTE_PATH . "index.php";
    }
}
