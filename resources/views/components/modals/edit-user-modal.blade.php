<!-- Modal de peril jsjs -->
<div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProfileModalLabel">Editar Perfil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            
                <form action="{{ route('user.edit') }}" method="POST">
                    @csrf
                   
                    <label for="nombre">Nuevo Nombre:</label>
                    <input type="text" name="nombre" value="{{ $user->Nombre }}" required>
                    <input type="text" name="email" value="{{ $user->Email }}" required>
                   
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
 </div>
 
 <!-- Modales de user, no se  -->
 @foreach($users as $user)
    <div class="modal fade" id="editUserModal{{ $user->id_usuario }}" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel{{ $user->id_usuario }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editUserModalLabel{{ $user->id_usuario }}">Editar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <form action="{{ route('user.editUser', ['id' => $user->id_usuario]) }}" method="POST">
                        @csrf
                       
                        <label for="nombre">Nuevo Nombre:</label>
                        <input type="text" name="nombre" value="{{ $user->Nombre }}" required>
                        <label for="email">Nuevo Correo Electrónico:</label>
                        <input type="text" name="email" value="{{ $user->Email }}" required>
                        <label for="ID_rol">Nuevo Rol:</label>
                        <input type="text" name="ID_rol" value="{{ $user->ID_rol }}" required>
                        
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
 @endforeach