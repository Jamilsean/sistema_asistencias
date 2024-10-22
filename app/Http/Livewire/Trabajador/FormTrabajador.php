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
                'method' => 'imprimir_boleta',
                'params' => [22],
            ],
            'reject' => [
                'label'  => 'No, cancelar',
                'method' => 'cancelar',
            ],
        ]);
 
         
    }
    public function updateLocation($latitude, $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;

        // Puedes procesar la ubicación aquí o guardarla en la base de datos
        // Por ejemplo: Guardar en la base de datos
        // Auth::user()->update([
        //     'latitude' => $latitude,
        //     'longitude' => $longitude,
        // ]);

        // O puedes usar este dato para algo más en tiempo real
    }
}
