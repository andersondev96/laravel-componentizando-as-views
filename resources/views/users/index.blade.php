@extends('layouts.app')

@section('content')
<div class="lg:grid lg:grid-cols-12 lg:gap-x-5">
    <x-aside.aside>
        <x-aside.link href="{{ route('users.create') }}">Cadastrar</x-aside.link>
        <x-aside.link href="{{ route('users.index') }}" current>Listar</x-aside.link>
    </x-aside.aside>

    <x-table.table title="Jogos">
        <x-table.thead>
            <x-table.tr>
                <x-table.th>ID</x-table.th>
                <x-table.th>Nome</x-table.th>
                <x-table.th>E-mail</x-table.th>
                <x-table.th-actions>Editar</x-table.th>
            </x-table.tr>
        </x-table.thead>

        <x-table.tbody>
            <x-table.tr>
                <x-table.td-id>1</x-table.td-id>
                <x-table.td>Patrick Maciel</x-table.td>
                <x-table.td>patrickmaciel@example.com</x-table.td>
                <x-table.td-actions>Editar</x-table.td-actions>
            </x-table.tr>

            <x-table.tr>
                <x-table.td-id>2</x-table.td-id>
                <x-table.td>Aline Martins</x-table.td>
                <x-table.td>aline@example.com</x-table.td>
                <x-table.td-actions>Editar</x-table.td-actions>
            </x-table.tr>

        </x-table.tbody>
    </x-table.table>
</div>
@endsection
