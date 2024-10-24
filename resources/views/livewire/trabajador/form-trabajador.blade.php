<div class="  w-screen sm:w-full">
    <x-button id="capture-location" primary label="Registrar asistencia" />
    <p>Latitud: {{ $latitude }}</p>
    <p>Longitud: {{ $longitude }}</p>

    <div class="flex flex-col sm:flex-row items-stretch space-x-2 space-y-2">
         
        <div class="w-1/2 grid grid-cols-1 sm:grid-cols-2  gap-3">
          <div class="">
              <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Fecha Inicio</label>
              <div class="mt-2">
                <input type="date" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
            </div>
            <div class="">
              <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Fecha Fin</label>
              <div class="mt-2">
                <input type="date" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
            </div>
        </div>
        <x-button class="items-start w-20 sm:self-end" right-icon="search" blue label="Buscar" />

  </div>
  <div class="my-2 overflow-x-auto scroll-m-1 rounded-lg border border-gray-200 max-w-full">
    <table class="  table-auto w-full bg-white text-left text-sm text-gray-500">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Hora Ingreso</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Salida Refrigerio</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Retorno Refrigerio</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Hora Salida</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Horas Tarde</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
            <tr class="hover:bg-gray-50">
                <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                    <div class="text-xs">
                        <div class="font-medium text-gray-700">12/10/2024 7:59</div>
                        <span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 font-semibold text-green-600">
                            <span class="text-xs h-1.5 w-1.5 rounded-full bg-green-600"></span>
                            Puntual
                        </span>
                    </div>
                </th>
                <td class="px-6 py-4">
                    <div class="text-xs">
                        <div class="font-medium text-gray-700">12/10/2024 1:20</div>
                    </div>
                </td>
                <td class="px-6 py-4">
                    <div class="text-xs">
                        <div class="font-medium text-gray-700">12/10/2024 2:12</div>
                        <span class="inline-flex items-center gap-1 rounded-full bg-red-50 px-2 py-1 font-semibold text-red-600">
                            <span class="text-xs h-1.5 w-1.5 rounded-full bg-red-600"></span>
                            Tardanza
                        </span>
                        12 min
                    </div>
                </td>
                <td class="px-6 py-4">
                    <div class="text-xs">
                        <div class="font-medium text-gray-700">12/10/2024 7:59</div>
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
    <script>
        document.getElementById('capture-location').addEventListener('click', function() {
            // Aquí iría tu lógica de captura de huella
            alert("Huella capturada correctamente");

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    // Obtener latitud y longitud
                    const latitude = position.coords.latitude;
                    const longitude = position.coords.longitude;
                    @this.updateLocation(position.coords.latitude, position.coords.longitude);
                    // Crear la URL de Google Maps con las coordenadas
                    const googleMapsUrl = `https://www.google.com/maps?q=${latitude},${longitude}`;

                    // Abrir Google Maps en una nueva pestaña
                    window.open(googleMapsUrl, '_blank');

                }, function(error) {
                    console.error("Error al obtener la ubicación", error);
                }, {
                    enableHighAccuracy: true, // Intentar obtener mayor precisión
                    timeout: 10000, // Tiempo máximo de espera (opcional)
                    maximumAge: 0 // No usar ubicaciones en caché
                });
            } else {
                alert('La geolocalización no está soportada por este navegador.');
            }
        });
    </script>

</div>
