@extends('layouts.app')

@section('content')
<div class="lg:grid lg:grid-cols-12 lg:gap-x-5">

    <x-aside.aside>
        <x-aside.link href="{{ route('users.create') }}" current>Cadastrar</x-aside.link>
        <x-aside.link href="{{ route('users.index') }}">Listar</x-aside.link>
    </x-aside.aside>

  <!-- Post details -->
  <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
    <section aria-labelledby="payment-details-heading">
      <form action="#" method="POST">
        <div class="shadow sm:rounded-md sm:overflow-hidden">
          <div class="bg-white py-6 px-4 sm:p-6">
            <div>
              <h2 id="payment-details-heading" class="text-lg leading-6 font-medium text-gray-900">Dados do Usuário</h2>
              <p class="mt-1 text-sm text-gray-500">Preenche todos os campos abaixo.</p>
            </div>

            <div class="mt-6 grid grid-cols-4 gap-6">
              <x-input.group lcols='4'>
                <x-input.label name="nome">Nome completo</x-input.label>
                <x-input.text name="nome" />
              </x-input.group>

              <div class="col-span-4 sm:col-span-2">
                <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
                <input type="text" name="email" id="email" autocomplete="cc-family-name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
              </div>

              <div class="col-span-4 sm:col-span-2">
                <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
                <input type="password" name="password" id="password" autocomplete="email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
              </div>

              <div class="col-span-4 sm:col-span-2">
                <label for="cargo" class="block text-sm font-medium text-gray-700">Cargo</label>
                <select id="cargo" name="cargo" autocomplete="cargo" class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                  <option>Programador</option>
                  <option>Engenheiro de Software</option>
                  <option>Arquiteto de Solução</option>
                  <option>Especialista</option>
                </select>
              </div>

              <div class="col-span-4">
                <fieldset>
                  <legend class="text-base font-medium text-gray-900">
                    Qual o seu nível de conhecimento?
                  </legend>
                  <div class="mt-4 space-y-4">
                    <div class="relative flex items-start">
                      <div class="flex items-center h-5">
                        <input id="comments" name="comments" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="comments" class="font-medium text-gray-700">To começando agora</label>
                        <p class="text-gray-500">Fiz uns cursinhos ai, estou curioso e quero aprender</p>
                      </div>
                    </div>
                    <div class="relative flex items-start">
                      <div class="flex items-center h-5">
                        <input id="candidates" name="candidates" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="candidates" class="font-medium text-gray-700">Junior</label>
                        <p class="text-gray-500">Tenho um bom conhecimento em tecnologias Web no geral mas ainda estou aprendendo.</p>
                      </div>
                    </div>

                    <div class="relative flex items-start">
                      <div class="flex items-center h-5">
                        <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="offers" class="font-medium text-gray-700">Pleno</label>
                        <p class="text-gray-500">Trabalho há mais de 3 anos na área</p>
                      </div>
                    </div>

                    <div class="relative flex items-start">
                      <div class="flex items-center h-5">
                        <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="offers" class="font-medium text-gray-700">Senior</label>
                        <p class="text-gray-500">Eu achava que sabia alguma coisa, mas só sei que nada sei</p>
                      </div>
                    </div>

                  </div>
                </fieldset>
                <fieldset class="mt-6">
                  <div>
                    <legend class="text-base font-medium text-gray-900">
                      O que você quer aprender aqui?
                    </legend>
                    <p class="text-sm text-gray-500">Escolha a opção que mexe com o seu coração.</p>
                  </div>
                  <div class="mt-4 space-y-4">
                    <div class="flex items-center">
                      <input id="push-everything" name="push-notifications" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                      <label for="push-everything" class="ml-3 block text-sm font-medium text-gray-700">
                        Front-end
                      </label>
                    </div>

                    <div class="flex items-center">
                      <input id="push-email" name="push-notifications" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                      <label for="push-email" class="ml-3 block text-sm font-medium text-gray-700">
                        Back-end
                      </label>
                    </div>

                    <div class="flex items-center">
                      <input id="push-nothing" name="push-notifications" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                      <label for="push-nothing" class="ml-3 block text-sm font-medium text-gray-700">
                        DevOps
                      </label>
                    </div>
                  </div>
                </fieldset>
              </div><!-- check radio -->

            </div>
          </div>

          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" class="bg-gray-800 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">
              Salvar
            </button>
          </div>

        </div>
      </form>
    </section>

  </div>
</div>
@endsection
