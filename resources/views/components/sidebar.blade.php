<div class="flex flex-col md:flex-row">

    <div class="shadow-xl h-16 fixed bottom-0 mt-12 md:relative md:h-full z-10 w-full md:w-48">

        <div class="md:mt-12 md:w-52 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
            <a id="sidebarToggle" class="hidden md:block w-fit pl-2 pr-1 align-middle text-white no-underline cursor-pointer bg-lime-100 dark:bg-gray-700 rounded-tr-md rounded-br-md">
                <span
                    class="md:py-1 text-2xl text-black dark:text-gray-100 inline-block">
                    <i class="fa-solid fa-bars-staggered"></i>
                </span>
            </a>
            <ul id="sidebar" class="bg-lime-100 dark:bg-gray-700 rounded-r-md flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left overflow-auto max-h-screen md:hidden">
                {{-- List-reset --}}
                <li class="mr-3 flex-1">
                    <a href="/dashboard" class="block py-1 md:py-3 align-middle text-black dark:text-gray-100 dark:hover:text-lime-300 no-underline border-b-2 border-gray-800 hover:border-lime-500 space-x-1">
                        <i class="fa-solid fa-house pr-0 md:pr-3 text-black"></i><span class="pb-1 md:pb-0 text-xs md:text-base block md:inline-block">Página Inicial</span>
                    </a>
                </li>
                <li class="mr-3 flex-1">
                    <a id="pedidoColetaCollapse" class="cursor-pointer block py-1 md:py-3 align-middle text-black dark:text-gray-100 dark:hover:text-lime-300 no-underline border-b-2 border-gray-800 hover:border-lime-500 space-x-[0.4rem]">
                        <i class="fa-solid fa-trash-can pr-0 md:pr-3 text-black"></i><span class="pb-1 md:pb-0 text-xs md:text-base block md:inline-block">Pedidos de coleta</span>
                    </a>
                </li>
                <div id="pedidoColetaContent" class="md:ml-5 md:hidden">
                    <li class="mr-3 flex-1">
                        <a href="/coleta=cadastrar" class="block py-1 md:py-3 align-middle text-black dark:text-gray-100 dark:hover:text-lime-300 no-underline border-b-2 border-gray-800 hover:border-lime-500 space-x-1">
                            <i class="fa-solid fa-pen-to-square pr-0 md:pr-3 text-black"></i><span class="pb-1 md:pb-0 text-xs md:text-base block md:inline-block">Cadastrar</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="/coleta=listar"
                            class="block py-1 md:py-3 align-middle text-black dark:text-gray-100 dark:hover:text-lime-300 no-underline border-b-2 border-gray-800 hover:border-lime-500">
                            <i class="fa-solid fa-list pr-0 md:pr-3 text-black"></i><span class="pb-1 md:pb-0 text-xs md:text-base block md:inline-block">Ver Todos</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="/coleta=confirmar"
                            class="block py-1 md:py-3 align-middle text-black dark:text-gray-100 dark:hover:text-lime-300 no-underline border-b-2 border-gray-800 hover:border-lime-500">
                            <i class="fa-regular fa-circle-check pr-0 md:pr-3 text-black"></i><span class="pb-1 md:pb-0 text-xs md:text-base block md:inline-block">Confirmar Coleta</span>
                        </a>
                    </li>
                </div>
                
                <li class="mr-3 flex-1">
                    <a href="/tutorial"
                        class="block py-1 md:py-3 align-middle text-black dark:text-gray-100 dark:hover:text-lime-300 no-underline border-b-2 border-gray-800 hover:border-lime-500 space-x-1">
                        <i class="fa-solid fa-book pr-0 md:pr-3 text-black"></i><span class="pb-1 md:pb-0 text-xs md:text-base block md:inline-block">Tutorial</span>
                    </a>
                </li>

                
            </ul>
        </div>
    </div>
</div>

<script type="module">
    $('#sidebarToggle').click(function() {
        $('#sidebar').toggleClass("md:hidden");
        $('#sidebarToggle').toggleClass("rounded-br-md");
    });

    $('#pedidoColetaCollapse').click(function() {
        $('#pedidoColetaContent').toggleClass("md:hidden");
    });
    
</script>