<form action="{{ $action }}" method="POST">
    @csrf <!--Para o Laravel saber que essa ação é segura-->

    @isset($nome) <!-- Se o nome está definido -> utilizar método put -->
    @method('PUT')
    @endisset

    <div class="mb-3">
    <label for="nome" class="form-label">Nome:</label>
    <input type="text" 
        name="nome" 
        id="nome" 
        class="form-control" 
        @isset($nome)
            value="{{ $nome }}"
        @endisset>
    </div>

    <button class="btn btn-dark" type="submit">Adicionar</button>
</form>