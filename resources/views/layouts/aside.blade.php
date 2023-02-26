<aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full text-gray-100 bg-sdarkblue sm:translate-x-0 dark:bg-gray-800 "
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-sdarkblue dark:bg-gray-800">
            <ul class="space-y-2">

                <x-aside.link href="{{ route('dashboard') }}">
                    <x-slot:svg>
                        <x-svg.home class="h-6 w-6" />
                    </x-slot:svg>
                    Dashboard
                </x-aside.link>

                <x-aside.seperator name="Kunden" />

                <x-aside.link href="{{ route('customer.search') }}">
                    <x-slot:svg>
                        <x-svg.person class="h-6 w-6" />
                    </x-slot:svg>
                    Kunden
                </x-aside.link>

                <x-aside.link href="{{ route('project.selectCustomer') }}">
                    <x-slot:svg>
                        <x-svg.fire class="h-6 w-6" />
                    </x-slot:svg>
                    Projekte
                </x-aside.link>

            </ul>
        </div>
    </aside>
