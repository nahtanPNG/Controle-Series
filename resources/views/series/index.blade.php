<x-layout title="Séries">
    <a href="/series/create" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item">{{ $serie->nome }}</li>
        @endforeach
    </ul>

    <script>
        const series = {{ Js::from($series) }}; //Convertendo a varaiável $series em uma variavel javascript
    </script>
</x-layout>