<form action="{{ route('competitions.destroy', $competition) }}" method="POST">
    <div class="modal-body">
        @csrf
        @method('DELETE')
        <h5 class="test-center">¿Está seguro de que quiere borrar la competición {{ $competition->name }}?</h5>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger">Eliminar Competición</button>
    </div>
</form>

