<h3>Novo Cliente</h3>

<form action="{{route('clientes.store')}}" method="post">
    @csrf
    <input type="text" name="nome">
    <input type="submit" name="Salvar">
    
</form>