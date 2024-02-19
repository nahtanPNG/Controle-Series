<x-layout title="Séries">
    <div class="d-flex justify-content-end">
    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2 col-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 19 19">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
          </svg>
        Nova Série
    </a>
    </div>

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $serie->nome }}

                <form action="{{ route('series.destroy', $serie->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">X</button>
                </form>
            </li>
        @endforeach
    </ul>

    <script>
        const series = {{ Js::from($series) }}; //Convertendo a varaiável $series em uma variavel javascript
    </script>
</x-layout>