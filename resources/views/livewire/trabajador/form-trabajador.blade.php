<div>
    <x-button wire:click='registrar_asistencia' primary label="Registrar asistencia" />
    <p>Latitud: {{ $latitude }}</p>
    <p>Longitud: {{ $longitude }}</p>
    <button id="capture-location" class="bg-blue-500 text-white px-4 py-2">
        Capturar Huella y Ubicación
    </button>
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
                    enableHighAccuracy: true,  // Intentar obtener mayor precisión
                    timeout: 10000,            // Tiempo máximo de espera (opcional)
                    maximumAge: 0              // No usar ubicaciones en caché
                });
            } else {
                alert('La geolocalización no está soportada por este navegador.');
            }
        });
    </script>

</div>
