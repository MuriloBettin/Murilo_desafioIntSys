<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @yield('title')
    {{-- <link rel="icon" type="image/png" href="/images/favicon.ico"> --}}
    <link rel="icon" href="{{ url('images/favicon.ico')}}">
    {{-- <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here"> --}}

    @vite(['resources/css/app.css','resources/js/app.js']);

    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/r-2.2.9/datatables.min.css" /> --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.11.4/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/r-2.2.9/rg-1.1.4/datatables.min.css"/>

    {{-- sweetalert2 --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- TOAST CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css"
        integrity="sha512-wJgJNTBBkLit7ymC6vvzM1EcSWeM9mmOu+1USHaRBbHkm6W9EgM0HY27+UtUaprntaYQJF75rc8gjxllKs5OIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .modalCreate {
            transition: opacity 0.25s ease;
        }

        body.modal-activeCreate {
            overflow-x: hidden;
            overflow-y: visible !important;
        }

        .modalEdit {
            transition: opacity 0.25s ease;
        }

        body.modal-activeEdit {
            overflow-x: hidden;
            overflow-y: visible !important;
        }
        
    </style>

    @yield('styleCSS')
</head>


<body class="bg-lime-800 font-sans leading-normal tracking-normal pt-12 md:h-full md:min-h-screen">

    <!--Nav-->
    <nav class="bg-lime-800 pt-2 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0 @yield('hope')">

        <div class="flex flex-wrap items-center justify-between">
            <div class="flex shrink w-auto text-white  ">
                <span class="pl-2"><img class="h-14 align-middle" src="/images/helplg5.png"
                        alt="Logo_Help_Tech"></span>
            </div>


            <div class="flex py-2 content-center w-auto h-10 ">
                <ul class="list-reset flex  flex-none items-center">
                    <li class="flex-none mr-3">
                        <button id="OSatencion"
                            class="hidden border-2 border-blue-500 rounded-xl font-bold font-sans bg-blue-500 inline-block text-gray-200 no-underline hover:text-underline py-1 px-3">Registros
                            O.S.</button>
                    </li>

                    <li class="flex-none mr-3">
                        <div class="relative inline-block">
                            <button id="openDropOs"
                                class="drop-button text-white focus:outline-none fas fa-bell fa-2x hidden"></button>
                            <div id="dropClientesNot"
                                class="dropdownlist absolute bg-green-800 text-white -right-40 w-screen sm:w-max md:right-0 lg:right-0 mt-3 p-3 overflow-auto z-30 invisible">
                                <ul class="w-full border-0">
                                    <div class="flex flex-row mx-5">
                                        <li value="dadosOSclientesHelp"
                                            class="tabNotificacoes tabSelecionadanot mx-1 w-28 flex items-center justify-center h-full rounded-t-md rounded-r-md rounded-l-md bg-gray-400 hover:text-black hover:bg-gray-300 ativo">
                                            <button id="av-tab" class="w-full text-xs">HelpTech</button>

                                        </li>
                                        <li value="dadosOSclientesEmpresas"
                                            class="tabNotificacoes mx-1 w-28 flex items-center justify-center h-full rounded-lg hover:text-black hover:bg-gray-300">
                                            <button id="fech-tab" class="w-full text-xs">Empresas</button>
                                        </li>
                                    </div>
                                </ul>

                                <div id="dadosOSclientesHelp">
                                    <span>Clientes Help</span>
                                </div>

                                <div id="dadosOSclientesEmpresas" class="hidden">
                                    <span>Clientes Empresas</span>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="flex-none justify-end mr-3">
                        <div class="relative inline-block">
                            <button id="dropLogOut" class="drop-button text-white focus:outline-none">
                                <span class="pr-4"></i></span> Olá, {{--  {{ Auth::guard('admin')->user()->name }} --}}
                                <svg class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg></button>
                            <div id="myDropdown"
                                class="dropdownlist absolute bg-lime-900 text-white right-0 mt-3 p-3 overflow-auto z-30 invisible">
                                <div class="border border-lime-800"></div>

                                <a class="w-40 p-2 text-white text-sm no-underline hover:no-underline block hover:bg-gray-300 hover:text-black" href="/changelog">
                                    <i class="fa-solid fa-list-ul"></i>
                                    Changelog
                                </a>


                                <form method="POST" action="{{-- {{ route('admin.logout') }} --}}">
                                    @csrf
                                    <a class="w-40 p-2 text-white text-sm no-underline hover:no-underline block hover:bg-gray-300 hover:text-black"
                                        href="{{-- route('admin.logout') --}}" onclick="event.preventDefault(); 
                                    this.closest('form').submit();">
                                        {{-- {{ __('Log Out') }} --}}


                                        <i class="fas fa-sign-out-alt fa-fw"></i>
                                        Log Out
                                    </a>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </nav>


    <div class="flex flex-col md:flex-row">

        <div class="bg-lime-800 shadow-xl h-16 fixed bottom-0 mt-12 md:relative md:h-full z-10 w-full md:w-48">

            <div
                class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                <ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left overflow-auto max-h-screen scrollbar-hide">
                    {{-- List-reset --}}
                    <li class="mr-3 flex-1">
                        <a href="/os"
                            class="block py-1 md:py-3 pl-1 align-middle text-white no-underline border-b-2 border-gray-800 hover:border-pink-500 abaLateralSistema">
                            <i class="fas fa-satellite pr-0 md:pr-3 abaLateralSistema"></i><span
                                class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block abaLateralSistema corCliente">O.S.</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="/clientes"
                            class="block py-1 md:py-3 pl-1 align-middle text-white no-underline border-b-2 border-gray-800 hover:border-violet-500 abaLateralCliente">
                            <i class="fas fa-user pr-0 md:pr-3 abaLateralCliente"></i><span
                                class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block abaLateralCliente corCliente">Clientes</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="/prestadores"
                            class="block py-1 md:py-3 pl-1 align-middle text-white no-underline border-b-2 border-gray-800 hover:border-blue-600 abaLateralPrestador">
                            <i class="fas fa-tools pr-0 md:pr-3 abaLateralPrestador"></i><span
                                class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block abaLateralPrestador corPrestador">Prestadores</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="/servicos"
                            class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline border-b-2 border-gray-800 hover:border-red-500 abaLateralServicos">
                            <i class="fas fa-dolly  pr-0 md:pr-3 abaLateralServicos"></i><span
                                class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block abaLateralServicos corServicos">Serviços</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="/veiculo-tipo"
                            class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline border-b-2 border-gray-800 hover:border-teal-500 abaLateralTipoVeiculo">
                            <i class="fas fa-car-side  pr-0 md:pr-3 abaLateralTipoVeiculo"></i><span
                                class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block abaLateralTipoVeiculo corTipoVeiculo">Tipo de Veiculo</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="/pacotes"
                            class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline border-b-2 border-gray-800 hover:border-lime-500 abaLateralPacote">
                            <i class="fas fa-archive  pr-0 md:pr-3 abaLateralPacote"></i><span
                                class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block abaLateralPacote corPacote">Combos/Pacotes</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="/verificacoes"
                            class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline border-b-2 border-gray-800 hover:border-orange-500 abaLateralVerificacoes">
                            <i class="fas fa-eye  pr-0 md:pr-3 abaLateralVerificacoes"></i><span
                                class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block abaLateralVerificacoes corVerificacoes">Verificações</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="/empresas"
                            class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline border-b-2 border-gray-800 hover:border-green-500 abaLateralEmpresa">
                            <i class="fas fa-building pr-0 md:pr-3 abaLateralEmpresa"></i><span
                                class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block abaLateralEmpresa corEmpresa">Empresas</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="/relatorio"
                            class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline border-b-2 border-gray-800 hover:border-yellow-500 abaLateralRelatorio">
                            <i class="fas fa-clipboard pr-0 md:pr-3 abaLateralRelatorio"></i><span
                                class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block abaLateralRelatorio corRelatorio">Relatório</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="/financeiro"
                            class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline border-b-2 border-gray-800 hover:border-indigo-700 abaLateralFinanceiro">
                            <i class="fas fa-chart-line pr-0 md:pr-3 abaLateralFinanceiro"></i><span
                                class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block abaLateralFinanceiro corFinanceiro">Financeiro</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="/registro-admin"
                            class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline border-b-2 border-gray-800 hover:border-sky-700 abaLateralRegistroAdmin">
                            <i class="fas fa-user-shield pr-0 md:pr-3 abaLateralRegistroAdmin"></i><span
                                class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block abaLateralRegistroAdmin corRegistroAdmin">Registros Admin</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="/contratos"
                            class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline border-b-2 border-gray-800 hover:border-fuchsia-700 abaLateralContrato">
                            <i class="fas fa-file-contract pr-0 md:pr-3 abaLateralContrato"></i><span
                                class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block abaLateralContrato corContrato">Contratos</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="/cadastro"
                            class="block invisible py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline border-b-2  border-gray-800 hover:border-tahiti-700 @yield('cadastro')">
                            <i class="fab fa-dev pr-0 md:pr-3 @yield('cadastro')"></i><span
                                class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block @yield('cadastro')">Extras - DEV</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div
            class="main-content flex-1 bg-gray-100 mt-5 md:mt-2 pb-16 md:pb-5 h-screen md:h-full md:w-3/4 md:min-h-screen90">

            <div class="bg-lime-800 md:pt-3">
                <div class="rounded-tl-3xl bg-gradient-to-r from-green-900 to-lime-800 p-4 shadow text-2xl text-white">
                    <h3 class="font-bold pl-2">@yield('header')</h3>
                </div>
            </div>

            @yield('content')

        </div>
    </div>

    {{-- TOASTS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"
        integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- bootstrap js possivel error com tailwind --}}
    {{-- cdn --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    {{-- DataTable --}}
    {{-- <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/r-2.2.9/datatables.min.js"></script> --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.11.4/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/r-2.2.9/rg-1.1.4/datatables.min.js"></script>

    {{-- JQUERY MASK --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @stack('scripts')


    <script type="module" src="{{ asset('js/gerais.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.3.6/require.min.js"></script>
</body>

</html>
