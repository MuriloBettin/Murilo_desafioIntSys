<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Confirmar Coleta') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-sidebar>
        </x-sidebar>
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="font-bold text-xl mb-10">Pedidos de Coleta Pendentes</h1>
                    <table class="border-collapse table-auto w-full text-sm">
                        <thead>
                            <tr>
                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-black dark:text-gray-200 text-left">#</th>
                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-black dark:text-gray-200 text-left">CEP</th>
                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-black dark:text-gray-200 text-left">Endereço</th>
                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-black dark:text-gray-200 text-left">Número</th>
                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-black dark:text-gray-200 text-left">Tipo de Resíduo</th>
                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-black dark:text-gray-200 text-left">Dia de Coleta</th>
                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-black dark:text-gray-200 text-left">Editar</th>
                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-black dark:text-gray-200 text-left">Cancelar/Confirmar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <span class="hidden">{{ $i=0 }}</span>
                            @foreach ($coletasNaoCompletas as $cnc)
                                <tr>
                                    <td class="border-b border-slate-200 dark:border-slate-600 p-4 pl-8 text-gray-900 dark:text-gray-100">{{ $i++ }}</th>
                                    <td class="border-b border-slate-200 dark:border-slate-600 p-4 pl-8 text-gray-900 dark:text-gray-100">{{ $cnc->cep }}</td>
                                    <td class="border-b border-slate-200 dark:border-slate-600 p-4 pl-8 text-gray-900 dark:text-gray-100">{{ $cnc->logradouro }}</td>
                                    <td class="border-b border-slate-200 dark:border-slate-600 p-4 pl-8 text-gray-900 dark:text-gray-100">{{ $cnc->numero }}</td>
                                    <td class="border-b border-slate-200 dark:border-slate-600 p-4 pl-8 text-gray-900 dark:text-gray-100">{{ $cnc->tipoResiduo }}</td>
                                    <td class="border-b border-slate-200 dark:border-slate-600 p-4 pl-8 text-gray-900 dark:text-gray-100">{{ $cnc->diaColeta }}</td>
                                    <td class="border-b border-slate-200 dark:border-slate-600 p-4 pl-8 text-gray-900 dark:text-gray-100 edit{{ $cnc->id }}">
                                        {{-- <x-edit-button href="/coleta=edit/{id}">
                                            Editar
                                        </x-edit-button> --}}
                                        <a href="/coleta=edit/{{ $cnc->id }}" class="inline-flex items-center px-4 py-2 bg-yellow-400 dark:bg-yellow-200 border border-transparent rounded-md font-semibold text-xs text-black dark:text-yellow-800 uppercase tracking-widest hover:bg-yellow-500 dark:hover:bg-yellow-300 focus:bg-yellow-600 dark:focus:bg-white active:bg-yellow-600 dark:active:bg-yellow-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-yellow-800 transition ease-in-out duration-150">
                                            Editar
                                        </a>
                                    </td>
                                    <td id="{{ $cnc->id }}" class="border-b border-slate-200 dark:border-slate-600 p-4 pl-8 text-gray-900 dark:text-gray-100">
                                        <div class="flex space-x-8 text-2xl ml-4">
                                            <a class="cancelarColeta">
                                                <i class="fa-regular fa-circle-xmark text-red-500 hover:text-red-700 cursor-pointer"></i>
                                            </a>
                                            <a class="confirmarColeta">
                                                <i class="fa-regular fa-circle-check text-green-500 hover:text-green-700 cursor-pointer"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script type="module">
        $('.cancelarColeta').off().on('click', async function(e){
            e.preventDefault();

            const id = $(this).closest('td').attr('id');

            //Envia os dados do form usando Ajax
            const cancelaColeta = $.ajax({
                url: '/coleta=cancela/'+id,
                method: 'patch',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            });

            cancelaColeta.then((result) => {
                //Troca o editar e cancelar/aprovar
                $('#'+id).empty();
                $('#'+id).append('<div class="text-red-500 font-xl font-bold">CANCELADO</div>');
                $('.edit'+id).empty().append('<div class="text-orange-500 font-xl font-bold">NÃO É POSSÍVEL EDITAR</div>');
            }).catch((err) => {
                Swal.fire({
                    icon: 'error',
                    title: 'Erro ao Cancelar Coleta!',
                    text: 'Houve um erro ao cancelar a coleta, tente recarregar a página, caso insista, contate o suporte.',
                })
            });
        });

        $('.confirmarColeta').off().on('click', async function(e){
            e.preventDefault();

            const id = $(this).closest('td').attr('id');

            //Envia os dados do form usando Ajax
            const confirmaColeta = $.ajax({
                url: '/coleta=confirma/'+id,
                method: 'patch',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            });

            //Envio TipoServico
            confirmaColeta.then((result) => {
                $('#'+id).empty();
                $('#'+id).append('<div class="text-green-500 font-xl font-bold">CONFIRMADO</div>');
                $('.edit'+id).empty().append('<div class="text-orange-500 font-xl font-bold">NÃO É POSSÍVEL EDITAR</div>');
            }).catch((err) => {
                Swal.fire({
                    icon: 'error',
                    title: 'Erro ao Confirmar Coleta!',
                    text: 'Houve um erro ao confirmar a coleta, tente recarregar a página, caso insista, contate o suporte.',
                })
            });
        });
    </script>
</x-app-layout>
