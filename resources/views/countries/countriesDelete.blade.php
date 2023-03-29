<div class="modal fade" id="countryDelete{{ $country->id }}" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <h4 class="modal-title text-center" style="text-align: center;">
                <b>¿Quieres eliminar el país {{ $country->name }}?</b>
            </h4>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
            <a href="{{ route('countries.destroy', $country) }}" class="btn btn-link">
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </a>
        </div>
    </div>
    </div>
</div>
