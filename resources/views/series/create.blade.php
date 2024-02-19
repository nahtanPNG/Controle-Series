<x-layout title="Adicionar Série">
    <form action="/series/salvar" method="POST">
        @csrf <!--Para o Laravel saber que essa ação é segura-->
        <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control">
        </div>

        <button class="btn btn-dark" type="submit">Adicionar</button>

    </form>
</x-layout>