<x-plantillas.plantilla>
    <div class="flex">
        <div class="hidden md:flex flex-col h-screen bg-cyan-700">
            <div class="  flex items-center justify-center h-20 text-indigo-900">
                .
            </div>
          <!-- component -->
    <!-- This is an example component -->
    <div class="max-w-4xl mx-auto">
    
        <aside class="mt-3 w-64" aria-label="Sidebar">
            <div class=" py-2  overflow-y-auto rounded   dark:bg-gray-800">
                <div class="mt-5 font-semibold ">
                    <div class="div-modulo">
                        <label for="" class="mx-2 mt-3 ">Modulo del Trabajador</label>
                    </div>
                    
                    <ul class="">
                        <li class="list-menu">
                            <a href="#"
                                class="item-menu">
                                <i class="fa-solid fa-users icon-menu"></i>
                                <span class="ml-3">Registro de asistencias</span>
                            </a>
                        </li> 
                        <li class="list-menu">
                            <a href="#"
                                class="item-menu">
                                <i class="fa-solid fa-users icon-menu"></i>
                                <span class="ml-3">Registro de permisos</span>
                            </a>
                        </li>
                        <li class="list-menu">
                            <a href="#"
                                class="item-menu">
                                <i class="fa-solid fa-users icon-menu"></i>
                                <span class="ml-3">Registro de autorizaciones</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="  font-semibold">
                    <div class="div-modulo">
                        <label for="" class="mx-2 mt-3 ">Modulo del Administrador</label>
                    </div>
                   
                    <ul class=" ">
                        <li class="list-menu">
                            <a href="#"
                            class="item-menu">
                                <i class="fa-solid fa-users icon-menu"></i>
                                <span class="ml-3">Registro de horarios</span>
                            </a>
                        </li> 
                        <li class="list-menu">
                            <a href="#"
                                class="item-menu">
                                <i class="fa-solid fa-users icon-menu"></i>
                                <span class="ml-3">Registro de días</span>
                            </a>
                        </li>
                        <li class="list-menu">
                            <a href="#"
                                class="item-menu">
                                <i class="fa-solid fa-users icon-menu"></i>
                                <span class="ml-3">Registro de usuario</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="  font-semibold">
                    <div class="div-modulo">
                        <label for="" class="mx-2 mt-3">Modulo del RRHH</label>
                    </div>
                    
                    <ul class=" ">
                        <li class="list-menu">
                            <a href="#"
                                class="item-menu">
                                <i class="fa-solid fa-file-export icon-menu"></i>
                                <span class="ml-3">Reportes</span>
                            </a>
                        </li> 
                        <li class="list-menu">
                            <a href="#"
                                class="item-menu">
                               
                                <i class="fa-solid fa-people-group icon-menu"></i>
                                <span class="ml-3">Registro de personal</span>
                            </a>
                        </li>
                        <li class="list-menu">
                            <a href="#"
                                class="item-menu">
                               
                                <i class="fa-solid fa-hourglass-half icon-menu"></i>
                                <span class="ml-3">Registro de horarios</span>
                            </a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </aside>
     
    </div>
             
        </div>
        <div class=" flex-grow ">
            <nav x-data="{ open: false }" class=" bg-cyan-700 dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
            <!-- Primary Navigation Menu -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
                <div class="flex justify-end  h-16"> 
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <!-- Teams Dropdown -->
    
                        <button type="button"
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 dark:active:bg-gray-700 transition ease-in-out duration-150">
                            {{ Auth::user()->name }}
    
                            <x-dropdown>
                                <x-dropdown.header label="Settings">
                                    <x-dropdown.item icon="cog" label="Preferences" href="{{ route('profile.show') }}" />
                                    <x-dropdown.item icon="user" label="My Profile" />
                                    <x-dropdown.item>
                                        <form method="POST" action="{{ route('logout') }}" x-data>
                                            @csrf
    
                                            <x-dropdown.item href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown.item>
                                        </form>
                                    </x-dropdown.item>
                                </x-dropdown.header>
                            </x-dropdown>
                        </button>
    
    
                    </div>
    
                    <!-- Hamburger -->
                    <div class="-mr-2 flex items-center sm:hidden">
                        <button @click="open = ! open"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
    
            <!-- Responsive Navigation Menu -->
            <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
                <div class="pt-2 pb-3 space-y-1">
                    <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-responsive-nav-link>
                </div>
    
                <!-- Responsive Settings Options -->
                <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
                    <div class="flex items-center px-4">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <div class="shrink-0 mr-3">
                                <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                    alt="{{ Auth::user()->name }}" />
                            </div>
                        @endif
    
                        <div>
                            <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}
                            </div>
                            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                        </div>
                    </div>
    
                    <div class="mt-3 space-y-1">
                        <!-- Account Management -->
                        <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>
    
                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                                {{ __('API Tokens') }}
                            </x-responsive-nav-link>
                        @endif
    
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
    
                            <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
    
                        <!-- Team Management -->
                        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                            <div class="border-t border-gray-200 dark:border-gray-600"></div>
    
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Team') }}
                            </div>
    
                            <!-- Team Settings -->
                            <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
                                :active="request()->routeIs('teams.show')">
                                {{ __('Team Settings') }}
                            </x-responsive-nav-link>
    
                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                                    {{ __('Create New Team') }}
                                </x-responsive-nav-link>
                            @endcan
    
                            <div class="border-t border-gray-200 dark:border-gray-600"></div>
    
                            <!-- Team Switcher -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Switch Teams') }}
                            </div>
    
                            @foreach (Auth::user()->allTeams() as $team)
                                <x-switchable-team :team="$team" component="responsive-nav-link" />
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </nav>
        
        <div class="">
          {{$slot}}
        </div>
        </div>
     
    
    </div>
    
</x-plantillas.plantilla>