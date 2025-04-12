<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="cliente_id" class="form-label">{{ __('Cliente Id') }}</label>
            <input type="text" name="cliente_id" class="form-control @error('cliente_id') is-invalid @enderror" value="{{ old('cliente_id', $reserva?->cliente_id) }}" id="cliente_id" placeholder="Cliente Id">
            {!! $errors->first('cliente_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="servicio_id" class="form-label">{{ __('Servicio Id') }}</label>
            <input type="text" name="servicio_id" class="form-control @error('servicio_id') is-invalid @enderror" value="{{ old('servicio_id', $reserva?->servicio_id) }}" id="servicio_id" placeholder="Servicio Id">
            {!! $errors->first('servicio_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_reserva" class="form-label">{{ __('Fecha Reserva') }}</label>
            <input type="text" name="fecha_reserva" class="form-control @error('fecha_reserva') is-invalid @enderror" value="{{ old('fecha_reserva', $reserva?->fecha_reserva) }}" id="fecha_reserva" placeholder="Fecha Reserva">
            {!! $errors->first('fecha_reserva', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hora_reserva" class="form-label">{{ __('Hora Reserva') }}</label>
            <input type="text" name="hora_reserva" class="form-control @error('hora_reserva') is-invalid @enderror" value="{{ old('hora_reserva', $reserva?->hora_reserva) }}" id="hora_reserva" placeholder="Hora Reserva">
            {!! $errors->first('hora_reserva', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="comentarios" class="form-label">{{ __('Comentarios') }}</label>
            <input type="text" name="comentarios" class="form-control @error('comentarios') is-invalid @enderror" value="{{ old('comentarios', $reserva?->comentarios) }}" id="comentarios" placeholder="Comentarios">
            {!! $errors->first('comentarios', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>