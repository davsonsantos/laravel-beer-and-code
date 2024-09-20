<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Assinaturas
        </h2>
    </x-slot>

    <ol>
        <li>Nome:: {{ $name }}</li>
        <li>CPF:: {{ $document }}</li>
        <li>Status Assinatura:: {{ $status }}</li>
    </ol>
</x-app-layout>
