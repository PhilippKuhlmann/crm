<x-app-layout>

    <div class="flex justify-center items-center w-full h-12 text-gray-900">
        <input type="search" placeholder="Kundensuche" class="border-0 w-full md:w-1/2 text-gray-900" />
    </div>

    <div class="flex justify-center items-center text-gray-900">
        <ul class="w-full md:w-1/2 mt-4">
            @foreach ($customers as $customer)
                <li class="m-1 p-2 bg-white">
                    <a href="/project/{{ $customer->id }}" class="">{{ $customer->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>




</x-app-layout>
