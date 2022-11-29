<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Coleta') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-sidebar>
        </x-sidebar>
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <span id="error_field_edit_coleta" class="text-red-600 text-center font-semibold"></span>
                <form id="form_edit_coleta" method="POST">
                    @csrf
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <p class="font-bold text-lg mb-4">Endereço de Coleta</p>
                        <div class="md:flex md:space-x-4 mb-4">
                            <div class="md:w-2/3">
                                <x-input-label for="cep" :value="__('CEP')" />
                                <x-text-input id="cep" class="block mt-1 w-full" type="text" name="cep" value="{{ $dadosColeta->cep }}" required autofocus maxlength="8"/>
                                <x-input-error :messages="$errors->get('cep')" class="mt-2" />
                            </div>
                            
                            <div class="md:w-1/3">
                                <x-input-label for="estado" :value="__('Estado')" />
                                <x-text-input id="estado" class="block mt-1 w-full" type="text" name="estado" value="{{ $dadosColeta->estado }}" required maxlength="2"/>
                                <x-input-error :messages="$errors->get('estado')" class="mt-2" />
                            </div>
                        </div>
    
                        <div class="md:flex md:space-x-4 mb-4">
                            <div class="md:w-2/3">
                                <x-input-label for="cidade" :value="__('Cidade')" />
                                <x-text-input id="cidade" class="block mt-1 w-full" type="text" name="cidade" value="{{ $dadosColeta->cidade }}" required/>
                                <x-input-error :messages="$errors->get('cidade')" class="mt-2" />
                            </div>
                            
                            <div class="md:w-1/3">
                                <x-input-label for="bairro" :value="__('Bairro')" />
                                <x-text-input id="bairro" class="block mt-1 w-full" type="text" name="bairro" value="{{ $dadosColeta->bairro }}" required/>
                                <x-input-error :messages="$errors->get('bairro')" class="mt-2" />
                            </div>
                        </div>
    
                        <div class="md:flex md:space-x-4 mb-4">
                            <div class="md:w-2/3">
                                <x-input-label for="logradouro" :value="__('Logradouro')" />
                                <x-text-input id="logradouro" class="block mt-1 w-full" type="text" name="logradouro" value="{{ $dadosColeta->logradouro }}" required/>
                                <x-input-error :messages="$errors->get('logradouro')" class="mt-2" />
                            </div>
                            
                            <div class="md:w-1/3 space-x-4 inline-flex">
                                <div class="md:w-1/3">
                                    <x-input-label for="numero" :value="__('Número')" />
                                    <x-text-input id="numero" class="block mt-1 w-full" type="text" name="numero" value="{{ $dadosColeta->numero }}" required/>
                                    <x-input-error :messages="$errors->get('numero')" class="mt-2" />
                                </div>
                                <div class="md:w-2/3">
                                    <x-input-label for="complemento" :value="__('Complemento')" />
                                    <x-text-input id="complemento" class="block mt-1 w-full" type="text" name="complemento" value="{{ $dadosColeta->complemento }}" required/>
                                    <x-input-error :messages="$errors->get('complemento')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        <div class="w-full border-b-4 mb-4 border-lime-500 dark:border-gray-700"></div>
                        <p class="font-bold text-lg mb-4">Endereço de Coleta</p>
                        <div class="md:flex md:space-x-4 mb-4">
                            {{-- Dia de Coleta --}}
                            <div class="md:w-2/3">
                                <x-input-label for="tipoResiduo" :value="__('Tipo de Resíduo')" />
                                <x-text-input id="tipoResiduo" class="block mt-1 w-full" type="text" name="tipoResiduo" value="{{ $dadosColeta->tipoResiduo }}" required/>
                                <x-input-error :messages="$errors->get('tipoResiduo')" class="mt-2" />
                            </div>
                            
                        
                            {{-- Tipo de Resíduo --}}
                            <div class="md:w-1/3">
                                <x-input-label for="diaColeta" :value="__('Dia de coleta')" />
                                <x-text-input id="diaColeta" class="block mt-1 w-full" type="date" name="diaColeta" value="{{ $dadosColeta->diaColeta }}" required/>
                                <x-input-error :messages="$errors->get('diaColeta')" class="mt-2" />
                            </div>
                        </div>
                        <div class="flex justify-end">
                            
                        <x-skeleton-button id="sendEditColeta">
                            Editar
                        </x-skeleton-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="module">
        $( "#cep" ).keyup(function( event ) {
            if (  $( "#cep" ).val().length == 8 ) {
                $.get( "https://viacep.com.br/ws/"+$("#cep").val()+"/json/", function( data ) {
                    if(data.erro){
                        Swal.fire({
                            icon: 'error',
                            title: 'Erro na busca!',
                            text: 'CEP não encontrado, preencha manualmente',
                        })
                    }else{
                        console.log(data);
                        $('#estado').val( data.uf);
                        $('#cidade').val(data.localidade);
                        $('#bairro').val(data.bairro);
                        $('#logradouro').val(data.logradouro);
                        $('#complemento').val(data.complemento)
                    }
                });
            }
        });

        $('#sendEditColeta').off().on('click', async function(e){
            e.preventDefault();
            $("#sendEditColeta").prop("disabled",true);
            $('#sendEditColeta').addClass("cursor-wait").removeClass("hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300");
            $('#sendEditColeta').html('Editando...');

            //Envia os dados do form usando Ajax
            const sendEdit = $.ajax({
                url: '/coleta=update/'+{{ $dadosColeta->id }},
                method: 'patch',
                data: $('#form_edit_coleta').serialize(),
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            });

            //Envio TipoServico
            sendEdit.then((result) => {
                //Reativa o botão e retorna ao padrão
                $("#sendEditColeta").prop("disabled",false);
                $('#sendEditColeta').removeClass("cursor-wait").addClass("hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300");

                //Retorna nome padrão do botão
                $('#sendEditColeta').html('Editar');
                $('#error_field_edit_coleta').empty();

                Swal.fire({
                    icon: 'success',
                    title: 'Editado com Sucesso!',
                    text: 'O pedido de coleta foi editado com sucesso, você pode sair dessa página agora!',
                })
            }).catch((err) => {
                //Reativa o botão e retorna ao padrão
                $("#sendEditColeta").prop("disabled",false);
                $('#sendEditColeta').removeClass("cursor-wait").addClass("hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300");
                $('#sendEditColeta').html('Editar');
                
                //Preenche os campos dos erros
                const errors = err.responseJSON.errors
                $('#error_field_edit_coleta').empty();
                $.each(errors, function(){
                    if(this.length > 1){
                        for (var key in this){
                            $('#error_field_edit_coleta').append("<li>"+this[key]+"</li>");
                        }
                    }else{
                        $('#error_field_edit_coleta').append("<li>"+this+"</li>");
                    }
                })
                $('#error_field_edit_coleta').append("<hr>");
            });
        });
    </script>
</x-app-layout>
