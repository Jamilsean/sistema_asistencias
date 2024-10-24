<div class="w-full">
    <div class="w-full">

    </div>
    <div>
        <x-button blue label="Registrar Permiso" wire:click='abrir_modal' />
    </div>
    <div>

    </div>



    <!--MODAL-->
    <x-modal.card title="Edit Customer" blur wire:model.defer="modal_registro_permiso">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label for="" class="text-sm font-semibold">Tipo de permiso</label>
                <select wire:model="descripcion_permiso"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <option value="1">Por comisión</option>
                    <option value="2">Permiso Particular</option>
                    <option value="3">Vacaciones</option>
                    <option value="4">Descanso médico</option>
                </select>
            </div>

            <x-datetime-picker label="Retorno de permiso" placeholder="Fecha de Fin" parse-format="DD-MM-YYYY HH:mm"
            wire:model.defer="customFormat" />
            <x-datetime-picker label="Retorno de permiso" placeholder="Fecha de Fin" parse-format="DD-MM-YYYY HH:mm"
                wire:model.defer="customFormat" />
            <x-input label="Motivo" placeholder="Motivo de Permiso" />
            <div class="sm:col-span-2" >
                <x-textarea wire:model="comment" label="Comment" placeholder="Your comment" />
            </div>

            <div>
                <label for="" class="text-sm font-semibold">Subir Archivo</label>
                <label class="block">
                   
                    <input type="file" class="block w-full text-sm text-slate-500
                      file:mr-4 file:py-2 file:px-4
                      file:rounded-full file:border-0
                      file:text-sm file:font-semibold
                      file:bg-violet-50 file:text-violet-700
                      hover:file:bg-violet-100
                    "/>
                  </label>
            </div>
         
        </div>

        <x-slot name="footer">
            <div class="flex justify-between gap-x-4">
                <x-button flat negative label="Delete" wire:click="delete" />

                <div class="flex">
                    <x-button flat label="Cancel" x-on:click="close" />
                    <x-button primary label="Save" wire:click="save" />
                </div>
            </div>
        </x-slot>
    </x-modal.card>
</div>
