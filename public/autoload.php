<?php 
  define('DS',DIRECTORY_SEPARATOR );
  define('ROOT_PATH',dirname(__DIR__).DS);
  define('APP',ROOT_PATH.'app'.DS);
  define('CONFIG',APP.'config'.DS);
  define('CONTROLLERS', APP.'controller'.DS);
  
  define('CORE',APP.'core'.DS);
  define('MODELLS', APP.'modells'.DS);
   define('VIEWS',APP.'views'.DS);
    define('UPLOADS',ROOT_PATH.'public'.DS.'uploads'.DS);
    require_once CONFIG.'config.php';
    require_once CONFIG.'helpers.php';
    $moduls=[ROOT_PATH,APP,CONFIG,CONTROLLERS,CORE,MODELLS,VIEWS,UPLOADS];
    set_include_path(get_include_path().PATH_SEPARATOR.implode(PATH_SEPARATOR,$moduls));
    spl_autoload_register('spl_autoload',false);

  new App();

    
  
      
?>