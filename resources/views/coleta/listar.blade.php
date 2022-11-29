<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Todas Coletas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-sidebar>
        </x-sidebar>
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="font-bold text-xl mb-10">Todos os Pedidos de Coleta Feitos</h1>
                    <table class="border-collapse table-auto w-full text-sm">
                        <thead>
                            <tr>
                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-black dark:text-gray-200 text-left">#</th>
                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-black dark:text-gray-200 text-left">CEP</th>
                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-black dark:text-gray-200 text-left">Endereço</th>
                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-black dark:text-gray-200 text-left">Número</th>
                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-black dark:text-gray-200 text-left">Tipo de Resíduo</th>
                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-black dark:text-gray-200 text-left">Dia de Coleta</th>
                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-black dark:text-gray-200 text-left">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <span class="hidden">{{ $i=0 }}</span>
                            @foreach ($coletasCadastradas as $cc)
                                <tr>
                                    <td class="border-b border-slate-200 dark:border-slate-600 p-4 pl-8 text-gray-900 dark:text-gray-100">{{ $i++ }}</th>
                                    <td class="border-b border-slate-200 dark:border-slate-600 p-4 pl-8 text-gray-900 dark:text-gray-100">{{ $cc->cep }}</td>
                                    <td class="border-b border-slate-200 dark:border-slate-600 p-4 pl-8 text-gray-900 dark:text-gray-100">{{ $cc->logradouro }}</td>
                                    <td class="border-b border-slate-200 dark:border-slate-600 p-4 pl-8 text-gray-900 dark:text-gray-100">{{ $cc->numero }}</td>
                                    <td class="border-b border-slate-200 dark:border-slate-600 p-4 pl-8 text-gray-900 dark:text-gray-100">{{ $cc->tipoResiduo }}</td>
                                    <td class="border-b border-slate-200 dark:border-slate-600 p-4 pl-8 text-gray-900 dark:text-gray-100">{{ $cc->diaColeta }}</td>
                                    @if ($cc->status == 0)
                                        <td class="border-b border-slate-200 dark:border-slate-600 p-4 pl-8 text-gray-900 dark:text-gray-100">Pendente</td>
                                    @elseif ( $cc->status == 1)
                                        <td class="border-b border-green-200 dark:border-green-600 p-4 pl-8 text-green-500 dark:text-green-400">Confirmado</td>
                                    @else
                                        <td class="border-b border-red-200 dark:border-red-600 p-4 pl-8 text-red-500 dark:text-red-400">Cancelado</td>
                                    @endif
                                    
                                   
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
