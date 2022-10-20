<?php
namespace App\Controllers;
use App\Models\EquipoModel;
use Config\Services;

class Equipo extends BaseController
{
    public function index()
    {
        $titulo = (["titulo" => "Alta Equipo"]);

        return view("layouts/header", $titulo).view('alta_equipo').view("layouts/footer");
    }

    public function alta() {

        $validation = service("validation");

        $validation->setRules([
                        'nombre' => "required|alpha_space|is_unique[equipo.nombre]",
                        'codigo' => "required|exact_length[3]|is_unique[equipo.codigo]",
                        'clasificacion' => "required|alpha_numeric|is_unique[equipo.clasificacion]|is_natural[equipo.clasificacion]",
                        'titulos' => "required|alpha_numeric|is_natural[equipo.titulos]"
        ]);

        if(!$validation->withRequest($this->request)->run()) {
            //dd($validation->getErrors());
            return redirect()->to(base_url()."/form-alta-equipo")->withInput()->with('errors', $validation->getErrors()); 
        }

        $request = \Config\Services::request();

        $model = new EquipoModel();

        $model->insert(["nombre" => $request->getPost('nombre'),
                        "codigo" => $request->getPost('codigo'),
                        "clasificacion" => $request->getPost('clasificacion'),
                        "titulos" => $request->getPost('titulos')
                    ]);


        return redirect()->to(base_url()."/listado-equipos")->with('msj', 'Equipo creado con exito!');
    }

    public function listado() {

        $titulo = (["titulo" => "Listado Equipos"]);

        $model = new EquipoModel();

        $equipos = $model->findAll();
        $equipos = array("equipos" => $equipos);

        return view("layouts/header", $titulo).view('listado_equipos', $equipos).view("layouts/footer");
    }

    public function eliminar($id){


        $titulo = (["titulo" => "Eliminar Equipo"]);

        $model = new EquipoModel();
        $model->delete($id); 

        return redirect()->to(base_url()."/listado-equipos")->with('msj', 'Equipo eliminado con exito!');
        
    }

    public function modificar($id){

        $titulo = (["titulo" => "Modificar Equipo"]);
       
        $model = new EquipoModel();
    
        $equipo = $model->find($id);
        
        $data['equipo'] = $model->find($id);
       
        
        return view("layouts/header", $titulo).view('modificar_equipo', $data).view("layouts/footer");

    }

    public function guardarModificacion(){

       // dd($_POST);
        $validation = $this->validate([ 'nombre' => "required|alpha_space",
        'codigo' => "required|exact_length[3]",
        'clasificacion' => "required|alpha_numeric|is_natural[equipo.clasificacion]",
        'titulos' => "required|alpha_numeric|is_natural[equipo.titulos]"]);

       // dd($validation);

      /*  $validation->setRules([
                        'nombre' => "required|alpha_space|is_unique[equipo.nombre]",
                        'codigo' => "required|exact_length[3]|is_unique[equipo.codigo]",
                        'clasificacion' => "required|alpha_numeric|is_unique[equipo.clasificacion]|is_natural[equipo.clasificacion]",
                        'titulos' => "required|alpha_numeric|is_natural[equipo.titulos]"
        ]);

        if(!$validation->withRequest($this->request)->run()) {
            //dd($validation->getErrors());
            return redirect()->to(base_url()."/modificar/" . $_POST['id'])->withInput()->with('errors', $validation->getErrors()); 
        }

        $request = \Config\Services::request();
*/

        if($validation){
          
            $model = new EquipoModel();

            $model->update($_POST['id'], $_POST);
                           
                       

            session()->setFlashdata('msj', 'Los datos se guardaron con exito');
            return redirect()->to(base_url('/listado-equipos'));
    
        }else {
            $error = $this->validator->getErrors();
            session()->setFlashdata($error);
            return redirect()->back()->withInput();
        }
       

       // return redirect()->to(base_url()."/listado-equipos")->with('msj', 'Equipo creado con exito!');
        
    }
}
