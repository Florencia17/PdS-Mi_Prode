<?php

namespace App\Models;
use CodeIgniter\Model;

class EquipoModel extends Model {
    
    protected $table="equipo";
    protected $primaryKey="id";
    protected $returnType="array";
    protected $softDelete=false;

    protected $allowedFields = ["nombre", "codigo", "clasificacion", "titulos"];
}  