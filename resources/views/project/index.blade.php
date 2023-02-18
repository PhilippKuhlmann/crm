<x-app-layout>

    <div class="flex justify-center items-center text-2xl w-full h-12 text-gray-900">
        Projekte vom Kunden: Mustermann Firma GmbH
    </div>

    <div class="flex flex-wrap gap-3 justify-center mt-10">

        <a href="/project/1/1" class="group flex flex-col justify-between items-center h-24 w-96 p-3  shadow-md bg-white text-gray-900 hover:bg-gray-50">
            <div class="w-full text-center text-3xl group-hover:text-blue-600">
                Neuer Server
            </div>
            <div class=" relative">
                <div class="absolute w-3 h-3 bg-yellow-300 rounded-full mt-1.5 -left-4 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                Angebotsphase
            </div>
        </a>

        <a href="/project/1/1" class="group flex flex-col justify-between items-center h-24 w-96 p-3  shadow-md bg-white text-gray-900 hover:bg-gray-50">
            <div class="w-full text-center text-3xl group-hover:text-blue-600">
                Mail Archiv
            </div>
            <div class=" relative">
                <div class="absolute w-3 h-3 bg-green-500 rounded-full mt-1.5 -left-4 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                Erfolgrich Abgeschlossen
            </div>
        </a>

        <a href="/project/1/1" class="group flex flex-col justify-between items-center h-24 w-96 p-3  shadow-md bg-white text-gray-900 hover:bg-gray-50">
            <div class="w-full text-center text-3xl group-hover:text-blue-600">
                Zeiterfassung
            </div>
            <div class=" relative">
                <div class="absolute w-3 h-3 bg-red-500 rounded-full mt-1.5 -left-4 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                Nicht Abgeschlossen
            </div>
        </a>

    </div>



</x-app-layout>
