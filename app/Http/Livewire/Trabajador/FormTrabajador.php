<?php

namespace App\Http\Livewire\Trabajador;

use Livewire\Component;
use WireUi\Traits\Actions;

class FormTrabajador extends Component
{
    use Actions;
    public $latitude;
    public $longitude;
    public function render()
    {
        return view('livewire.trabajador.form-trabajador');
    }
    public function registrar_asistencia(): void
    {
        $this->notification()->confirm([
            'title'       => 'Desea registrar su asistencia?',
            'description' => 'Para registrar su asistencia debe activar la ubicacion',
            'icon'        => 'question',
            'accept'      => [
                'label'  => 'Sí, activar',
                'method' => 'obtenerUbicacion',
                'params' => [22],
            ],
            'reject' => [
                'label'  => 'No, cancelar',
                'method' => 'cancelar',
            ],
        ]);
 
         
    }
    public function obtenerUbicacion()
    {
        $this->latitude="entro;";
        $this->emitSelf('obtenerUbicacion');
        $this->latitude="entro;22";
    }

    // Esta función se llama desde el frontend para actualizar la ubicación
    public function updateLocation($latitude, $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;

        // Solo para ver el resultado en el log o puedes hacer algo más aquí
       // \Log::info('Ubicación actualizada: ' . $latitude . ', ' . $longitude);
    }
     
}
