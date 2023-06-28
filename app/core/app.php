 <?php 
   /**
    * Handeller Controleer
    */
   class App 
   {
   	protected $controller="HomeController";
   	protected $action='index';
   	protected $prams=[];
   	function __construct()
   	{
   		$this->prepareUrl();
      $this->render();
     
   	}
   	/***
   	 * prepare Url
   	*/
   	public function prepareUrl()
   	{
   		$url=$_SERVER['REQUEST_URI'];
   		if (!empty($url)) {
   			$url=trim($url,'/');
   			$url=explode('/', $url);
   		     	if ($this->controller=isset($url[0])) {  //Handeller Controller
   			   $this->controller=ucwords($url[0]).'Controller';

   			}
        else
        {
          $this->controller='HomeController';

        }

      if ($this->action=isset($url[1])) { // Handeller action
           $this->action=$url[1];

        }
        else
        {
          $this->action='index';
          
        }
      unset($url[0],$url[1]);
         if ($this->prams!=empty($url)) {
              $this->prams=array_values($url);
         }
         else
         {
          $this->prams=[];
         } 
   		}
   	} 
    // function Handeeler
       public function render()
       {
        if (class_exists($this->controller)) {
          $controller = new $this->controller;
          if (method_exists($controller,$this->action )) {
               call_user_func([$controller,$this->action],$this->prams);
          }
          else{
            echo "methods Not Exist";
          }
        }else{
            echo "controller Not Exist";
          }
     

       }
   }

?>