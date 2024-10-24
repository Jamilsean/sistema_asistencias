<?php

namespace App\Http\Livewire\Trabajador;

use Livewire\Component;

class FormularioPermisos extends Component
{
    public $modal_registro_permiso = false;
    public $tipo_permisos=[];
    public $descripcion_permiso=1;
    public function render()
    {
        return view('livewire.trabajador.formulario-permisos');
    }
    public function abrir_modal()
    {
        $this->modal_registro_permiso = true;
    }
}
