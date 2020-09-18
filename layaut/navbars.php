<?php 
class navbar{

   private $ispage;
   private $h;
   private $age;
   private $direccion;
   private $disableAge;
   private $home;

   function __construct($page = false,$hom =false,$agen =false)
   {
     $this->ispage = $page;
     $this->h = $hom;
     $this->age = $agen;


     $this->direccion = ($this->ispage) ? '../' : '';
     $this->disableAge = ($this->age)?'disabled':'';
     $this->home = ($this->h)?'../index.php':'';

   }

  public function nav(){ 
      $navbar = <<<EOF
      <div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{$this->home}">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link {$this->disableAge}" href="{$this->direccion}pages/agregar.php">Agregar</a>
      </div>
    </div>
  </nav>
  </div>
  EOF;
  
  echo $navbar;
      
  }
}

?>

