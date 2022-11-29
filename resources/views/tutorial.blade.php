<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tutorial') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-sidebar>
        </x-sidebar>
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-center space-x-8 mb-8">
                        <div id="geralBtn" class="bg-lime-400 hover:bg-lime-300 dark:bg-gray-700 dark:hover:bg-gray-600 py-2 px-4 rounded-md cursor-pointer">
                            Geral
                        </div>
                        <div id="editBtn" class="bg-lime-400 hover:bg-lime-300 dark:bg-gray-700 dark:hover:bg-gray-600 py-2 px-4 rounded-md cursor-pointer">
                            Editar Pedido
                        </div>
                        <div id="registerBtn" class="bg-lime-400 hover:bg-lime-300 dark:bg-gray-700 dark:hover:bg-gray-600 py-2 px-4 rounded-md cursor-pointer">
                            Cadastrar um Pedido
                        </div>
                        <div id="seeAllBtn" class="bg-lime-400 hover:bg-lime-300 dark:bg-gray-700 dark:hover:bg-gray-600 py-2 px-4 rounded-md cursor-pointer">
                            Ver seus Pedidos
                        </div>
                        <div id="confirmBtn" class="bg-lime-400 hover:bg-lime-300 dark:bg-gray-700 dark:hover:bg-gray-600 py-2 px-4 rounded-md cursor-pointer">
                            Confirmar Coleta
                        </div>
                    </div>
                    <div id="geralContent" class=" ">
                        <p class="text-lg font-medium">O tutorial geral irá apresentar uma explicação básica de todos os items principais do site. Esta é a página inicial do site, você sempre verá essa página quando logar no site.</p>
                        <img src="{{ asset('img/tutorial/geral/geral1.png') }}" alt="tutorial_pagina_inicial_1" title="tutorial_geral_1" class="mb-4">
                        <p class="text-lg font-bold">Não se esqueça, caso queira ver este tutorial novamente clique na 'tutorial' do menu lateral.</p>
                        <img src="{{ asset('img/tutorial/geral/geral2.png') }}" alt="tutorial_pagina_inicial_2" title="tutorial_geral_2" class="mb-4">
                        <img src="{{ asset('img/tutorial/geral/geral3.png') }}" alt="tutorial_pagina_inicial_3" title="tutorial_geral_3" class="mb-4">
                        <img src="{{ asset('img/tutorial/geral/geral4.png') }}" alt="tutorial_cadastro_coleta" title="tutorial_geral_4" class="mb-4">
                        <img src="{{ asset('img/tutorial/geral/geral5.png') }}" alt="tutorial_confirma_coleta" title="tutorial_geral_5" class="mb-4">
                        <img src="{{ asset('img/tutorial/geral/geral6.png') }}" alt="tutorial_ver_todas_coletas" title="tutorial_geral_6" class="mb-4">
                        <img src="{{ asset('img/tutorial/geral/geral7.png') }}" alt="tutorial_perfil" title="tutorial_geral_7" class="mb-4">
                    </div>
                    <div id="editContent" class="hidden">
                        <p class="text-lg font-medium">O tutorial editar irá ensinar como alterar os dados de um pedido de coleta ainda não concluido ou cancelado.</p>
                        <img src="{{ asset('img/tutorial/edit/edit1.png') }}" alt="tutorial_editar_1" title="tutorial_edit_1" class="mb-4">
                        <img src="{{ asset('img/tutorial/edit/edit2.png') }}" alt="tutorial_editar_2" title="tutorial_edit_2" class="mb-4">
                        <img src="{{ asset('img/tutorial/edit/edit3.png') }}" alt="tutorial_editar_3" title="tutorial_edit_3" class="mb-4">
                        <img src="{{ asset('img/tutorial/edit/edit4.png') }}" alt="tutorial_editar_3" title="tutorial_edit_4" class="mb-4">
                        <img src="{{ asset('img/tutorial/edit/edit5.png') }}" alt="tutorial_editar_3" title="tutorial_edit_5" class="mb-4">
                        <img src="{{ asset('img/tutorial/edit/edit6.png') }}" alt="tutorial_editar_3" title="tutorial_edit_6" class="mb-4">
                    </div>
                    <div id="registerContent" class="hidden">
                        <p class="text-lg font-medium">O tutorial registrar irá ensinar como cadastrar um novo pedido de coleta.</p>
                        <img src="{{ asset('img/tutorial/register/register1.png') }}" alt="tutorial_cadastrar_1" title="tutorial_register_1" class="mb-4">
                        <img src="{{ asset('img/tutorial/register/register2.png') }}" alt="tutorial_cadastrar_2" title="tutorial_register_2" class="mb-4">
                        <img src="{{ asset('img/tutorial/register/register3.png') }}" alt="tutorial_cadastrar_3" title="tutorial_register_3" class="mb-4">
                        <img src="{{ asset('img/tutorial/register/register4.png') }}" alt="tutorial_cadastrar_4" title="tutorial_register_4" class="mb-4">
                        <img src="{{ asset('img/tutorial/register/register5.png') }}" alt="tutorial_cadastrar_5" title="tutorial_register_5" class="mb-4">
                        <img src="{{ asset('img/tutorial/register/register6.png') }}" alt="tutorial_cadastrar_6" title="tutorial_register_6" class="mb-4">
                    </div>
                    <div id="seeAllContent" class="hidden">
                        <p class="text-lg font-medium">O tutorial ver todos ensina como ver todos os pedidos que foram feitos por um usuário.</p>
                        <img src="{{ asset('img/tutorial/seeAll/seeAll1.png') }}" alt="tutorial_ver_todos_1" title="tutorial_seeAll_1" class="mb-4">
                        <img src="{{ asset('img/tutorial/seeAll/seeAll2.png') }}" alt="tutorial_ver_todos_2" title="tutorial_seeAll_2" class="mb-4">
                        <img src="{{ asset('img/tutorial/seeAll/seeAll3.png') }}" alt="tutorial_ver_todos_3" title="tutorial_seeAll_3" class="mb-4">
                        <img src="{{ asset('img/tutorial/seeAll/seeAll4.png') }}" alt="tutorial_ver_todos_4" title="tutorial_seeAll_4" class="mb-4">
                    </div>
                    <div id="confirmContent" class="hidden">
                        <p class="text-lg font-medium">O tutorial confirmar ensina o usuário como confirmar/concluir um pedido de coleta, ou cancelá-lo.</p>
                        <img src="{{ asset('img/tutorial/confirm/confirm1.png') }}" alt="tutorial_confirmar_1" title="tutorial_confirm_1" class="mb-4">
                        <img src="{{ asset('img/tutorial/confirm/confirm2.png') }}" alt="tutorial_confirmar_2" title="tutorial_confirm_2" class="mb-4">
                        <img src="{{ asset('img/tutorial/confirm/confirm3.png') }}" alt="tutorial_confirmar_3" title="tutorial_confirm_3" class="mb-4">
                        <img src="{{ asset('img/tutorial/confirm/confirm4.png') }}" alt="tutorial_confirmar_4" title="tutorial_confirm_4" class="mb-4">
                        <img src="{{ asset('img/tutorial/confirm/confirm5.png') }}" alt="tutorial_confirmar_5" title="tutorial_confirm_5" class="mb-4">
                        <img src="{{ asset('img/tutorial/confirm/confirm6.png') }}" alt="tutorial_confirmar_6" title="tutorial_confirm_6" class="mb-4">
                        <img src="{{ asset('img/tutorial/confirm/confirm7.png') }}" alt="tutorial_confirmar_7" title="tutorial_confirm_7" class="mb-4">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="module">
        $('#geralBtn').click(function(){
            $('#geralContent').removeClass("hidden");
            $('#editContent').addClass("hidden");
            $('#registerContent').addClass("hidden");
            $('#seeAllContent').addClass("hidden");
            $('#confirmContent').addClass("hidden");
        });
        $('#editBtn').click(function(){
            $('#geralContent').addClass("hidden");
            $('#editContent').removeClass("hidden");
            $('#registerContent').addClass("hidden");
            $('#seeAllContent').addClass("hidden");
            $('#confirmContent').addClass("hidden");
        });
        $('#registerBtn').click(function(){
            $('#geralContent').addClass("hidden");
            $('#editContent').addClass("hidden");
            $('#registerContent').removeClass("hidden");
            $('#seeAllContent').addClass("hidden");
            $('#confirmContent').addClass("hidden");
        });
        $('#seeAllBtn').click(function(){
            $('#geralContent').addClass("hidden");
            $('#editContent').addClass("hidden");
            $('#registerContent').addClass("hidden");
            $('#seeAllContent').removeClass("hidden");
            $('#confirmContent').addClass("hidden");
        });
        $('#confirmBtn').click(function(){
            $('#geralContent').addClass("hidden");
            $('#editContent').addClass("hidden");
            $('#registerContent').addClass("hidden");
            $('#seeAllContent').addClass("hidden");
            $('#confirmContent').removeClass("hidden");
        });
    </script>
</x-app-layout>
