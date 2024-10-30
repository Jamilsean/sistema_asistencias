<div class="w-full">
    <div class="w-full">

    </div>
    <div>
        <x-button primary label="Registrar Permiso" wire:click='abrir_modal' />
    </div>
    <div>

    </div>

    <div class="my-2 overflow-x-auto scroll-m-1 rounded-lg border border-gray-200 max-w-full">
        <table class="  table-auto w-full bg-white text-left text-sm text-gray-500">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Tipo de permiso</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">motivo de permiso</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">tiempo de permiso</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Estado</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                <tr class="hover:bg-gray-50">
                    <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                        <div class="text-xs">
                            <div class="font-medium text-gray-700">Por comisión</div>
                            <span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 font-semibold text-green-600">
                                <span class="text-xs h-1.5 w-1.5 rounded-full bg-green-600"></span>
                                Puntual
                            </span>
                        </div>
                    </th>
                    <td class="px-6 py-4">
                        <div class="text-xs">
                            <div class="font-medium text-gray-700">Por trámite documentario</div>
                            <span class="text-xs h-1.5 w-50 rounded-full text-gray-400">Se llevó documentos por motivos de firmas y foleadosSe llevó documentos por motivos de firmas y foleadosSe llevó documentos por motivos de firmas y foleadosSe llevó documentos por motivos de firmas y foleadosSe llevó documentos por motivos de firmas y foleadosSe llevó documentos por motivos de firmas y foleadosSe llevó documentos por motivos de firmas y foleados</span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-xs">
                            <div class="font-medium text-gray-700">Inicio: 12/10/2024 7:59</div>
                            <div class="font-medium text-gray-700">Fin: 12/10/2024 7:59</div>
                            12 min
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-xs">
                           
                            
                            <span class="inline-flex items-center gap-1 rounded-full bg-red-50 px-2 py-1 font-semibold text-red-600">
                                <span class="text-xs h-1.5 w-1.5 rounded-full bg-red-600"></span>
                                No autorizado
                            </span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-xs">
                            <div class="font-medium text-gray-700">12 min</div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!--MODAL-->
    <x-modal.card title="Registro de permiso" blur wire:model.defer="modal_registro_permiso">
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
                <x-textarea wire:model="comment" label="Descripción" placeholder="Descripción" />
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
            <div class="flex justify-end gap-x-4">
                <div class="flex">
                    <x-button flat label="Cancel" x-on:click="close" />
                    <x-button primary label="Save" wire:click="save" />
                </div>
            </div>
        </x-slot>
    </x-modal.card>

</div>
