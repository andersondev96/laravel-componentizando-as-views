@extends('layouts.app')

@section('content')
<x-grid.grid>
    <x-aside.aside>
        <x-aside.link href="/posts" current>Listar posts</x-aside.link>
        <x-aside.link href="/posts/create">Novo post</x-aside.link>
    </x-aside.aside>

    <x-table.table title="Todos os posts">
        <x-table.thead>
            <x-table.tr>
                <x-table.th>ID</x-table.th>
                <x-table.th>Título</x-table.th>
                <x-table.th>Criado em</x-table.th>
                <x-table.th-actions>Editar</x-table.th>
            </x-table.tr>
        </x-table.thead>

        <x-table.tbody>
            <x-table.tr>
                <x-table.td-id>1</x-table.td-id>
                <x-table.td>PHP para inicaintes</x-table.td>
                <x-table.td>15/08/1998</x-table.td>
                <x-table.td-actions>Editar</x-table.td>
            </x-table.tr>

            <x-table.tr>
                <x-table.td-id>2</x-table.td-id>
                <x-table.td>Java para iniciantes</x-table.td>
                <x-table.td>25/10/2004</x-table.td>
                <x-table.td-actions>Editar</x-table.td>
            </x-table.tr>

            <x-table.tr>
                <x-table.td-id>3</x-table.td-id>
                <x-table.td>C para iniciantes</x-table.td>
                <x-table.td>16/07/2020</x-table.td>
                <x-table.td-actions>Editar</x-table.td>
            </x-table.tr>

        </x-table.tbody>
    </x-table.table>
</x-grid.grid>
@endsection
