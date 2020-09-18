<?php
require_once '../Sistemaelectoral/database/fileHandler/context.php';
require_once '../Sistemaelectoral/metodos/ciudadano.php';
require_once '../Sistemaelectoral/metodos/Dbase.php';
class logic
{

    public $puestos=[1 =>'presidente',2 => 'regidor',3 => 'diputado',4 => 'senador'];
    public function createciudadano()
    {


        $service = new Dbase("./database");

        if (isset($_POST['cedula']) && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email'])) {
            $ciudadano = new ciudadano();
            $ciudadano->IniciatiliazeData($_POST['cedula'], $_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['estado']);

            header("Location:/sistemaelectoral/index.php");
        }
    }
    public function accesoCiudadano()
    {
        $service = new Dbase("./database");
        if (isset($_POST['cedula'])) {
            $cedula = $_POST['cedula'];
            $service->searchEntity($cedula);
        }
    }

    public function elect(){
        $modal = <<<EOF
        <div class="modal fade" id="elect" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                 <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Ha cometido un error</h5>
                         
                </div>
             <div class="modal-body">
             <h5>En este momento no hay elecciones activas</h5>
             </div>
                <div class="modal-footer">
                   
                    </div>
                </div>
            </div>
        </div>
        EOF;

        echo $modal;
    }

}

