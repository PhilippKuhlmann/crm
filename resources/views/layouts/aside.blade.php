<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-darkblue sm:translate-x-0 dark:bg-gray-800 "
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-darkblue dark:bg-gray-800">
        <ul class="space-y-2">

            <li>
                <a href="/"
                    class="flex items-center p-2 text-base font-normal text-white rounded-lg dark:text-white hover:bg-blue-800 dark:hover:bg-gray-700">
                    <svg aria-hidden="true"
                        class="w-6 h-6 text-gray-100 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{ route('project.selectCustomer') }}"
                    class="flex items-center p-2 text-base font-normal text-white rounded-lg dark:text-white hover:bg-blue-800 dark:hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-gray-100 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                        <path d="M4.913 2.658c2.075-.27 4.19-.408 6.337-.408 2.147 0 4.262.139 6.337.408 1.922.25 3.291 1.861 3.405 3.727a4.403 4.403 0 00-1.032-.211 50.89 50.89 0 00-8.42 0c-2.358.196-4.04 2.19-4.04 4.434v4.286a4.47 4.47 0 002.433 3.984L7.28 21.53A.75.75 0 016 21v-4.03a48.527 48.527 0 01-1.087-.128C2.905 16.58 1.5 14.833 1.5 12.862V6.638c0-1.97 1.405-3.718 3.413-3.979z" />
                        <path d="M15.75 7.5c-1.376 0-2.739.057-4.086.169C10.124 7.797 9 9.103 9 10.609v4.285c0 1.507 1.128 2.814 2.67 2.94 1.243.102 2.5.157 3.768.165l2.782 2.781a.75.75 0 001.28-.53v-2.39l.33-.026c1.542-.125 2.67-1.433 2.67-2.94v-4.286c0-1.505-1.125-2.811-2.664-2.94A49.392 49.392 0 0015.75 7.5z" />
                      </svg>

                    <span class="ml-3">Projekte</span>
                </a>
            </li>

        </ul>
    </div>
</aside>
