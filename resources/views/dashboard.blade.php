<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Página Inicial') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-sidebar>
        </x-sidebar>
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="font-semibold text-2xl">Seja bem-vindo!</p>

                    <div class="mt-8 space-y-8 text-xl text-center">
                        <div class="flex flex-col">
                            <i class="fa-solid fa-dumpster text-4xl"></i>
                            <p>Pedidos de Coletas Feitos</p>
                            <p class="font-bold">{{ $coletasTotais }}</p>
                        </div>
                        <div class="flex flex-col">
                            <i class="fa-solid fa-circle-question text-4xl"></i>
                            <p>Pendentes</p>
                            <p class="font-bold">{{ $coletasPendentes }}</p>
                        </div>
                        <div class="flex flex-col">
                            <i class="fa-solid fa-square-xmark text-4xl"></i>
                            <p>Cancelados</p>
                            <p class="font-bold">{{ $coletasCanceladas }}</p>
                        </div>
                        <div class="flex flex-col">
                            <i class="fa-solid fa-square-check text-4xl"></i>
                            <p>Confirmados</p>
                            <p class="font-bold">{{ $coletasConfirmadas }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
