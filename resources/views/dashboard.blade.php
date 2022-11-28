<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="flex flex-col md:flex-row">

            <div class="bg-lime-800 shadow-xl h-16 fixed bottom-0 mt-12 md:relative md:h-full z-10 w-full md:w-48">
    
                <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                    <li class="mr-3 flex-1">
                        <a href="/os"
                            class="block py-1 md:py-3 pl-1 align-middle text-white no-underline border-b-2 border-gray-800 hover:border-pink-500 abaLateralSistema">
                            <i class="fa-solid fa-satellite"></i><span
                                class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block abaLateralSistema corCliente">O.S.</span>
                        </a>
                    </li>
                    <ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left overflow-auto max-h-screen scrollbar-hide hidden">
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
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
