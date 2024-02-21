<x-layout title="Adicionar Série">
    <x-series.form :action="route('series.store')" :nome="old('nome')" :update="false"/> <!-- o laravel pega o campo anterior enviado pela flash session -->
</x-layout>