Class Grandfather{

  public $global_var; // global variable 
 
  function __construct(){
    
      $this->$global_var = 56;
      echo "i am godfather<br>";
  }
  
  function default_function(){
     echo "default_function from godfather <br>";
  }
  
  private function private_funcation(){
     echo "private_funcation from godfather<br>";
  }
  
  protected function protected_function(){
     echo "protected_funcation from godfather<br>";
  }
  
  public function public_function(){
     echo "public_function from godfather<br>";
  }
}
