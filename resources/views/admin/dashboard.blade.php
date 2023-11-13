hola
<form action="{{ url('/logout') }}" method="post">
    @csrf
    <button type="submit">Cerrar Sesión</button>
</form>