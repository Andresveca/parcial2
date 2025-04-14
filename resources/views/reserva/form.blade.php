<div class="container py-4">
    <div class="card shadow border-0 rounded-4">
        <div class="card-body bg-light-pink p-4">
            <h4 class="mb-4 text-center text-pink fw-bold">
                <i class="bi bi-calendar-heart me-2"></i>Formulario de Reserva
            </h4>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="cliente_id" class="form-label fw-semibold text-pink">
                        <i class="bi bi-person-circle me-1"></i>Cliente
                    </label>
                    <input type="text" name="cliente_id" id="cliente_id" class="form-control @error('cliente_id') is-invalid @enderror" value="{{ old('cliente_id', $reserva?->cliente_id) }}" placeholder="ID del Cliente">
                    {!! $errors->first('cliente_id', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>

                <div class="col-md-6 mb-3">
                    <label for="servicio_id" class="form-label fw-semibold text-pink">
                        <i class="bi bi-scissors me-1"></i>Servicio
                    </label>
                    <input type="text" name="servicio_id" id="servicio_id" class="form-control @error('servicio_id') is-invalid @enderror" value="{{ old('servicio_id', $reserva?->servicio_id) }}" placeholder="ID del Servicio">
                    {!! $errors->first('servicio_id', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>

                <div class="col-md-6 mb-3">
                    <label for="fecha_reserva" class="form-label fw-semibold text-pink">
                        <i class="bi bi-calendar3 me-1"></i>Fecha
                    </label>
                    <input type="date" name="fecha_reserva" id="fecha_reserva" class="form-control @error('fecha_reserva') is-invalid @enderror" value="{{ old('fecha_reserva', $reserva?->fecha_reserva) }}">
                    {!! $errors->first('fecha_reserva', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>

                <div class="col-md-6 mb-3">
                    <label for="hora_reserva" class="form-label fw-semibold text-pink">
                        <i class="bi bi-clock me-1"></i>Hora
                    </label>
                    <input type="time" name="hora_reserva" id="hora_reserva" class="form-control @error('hora_reserva') is-invalid @enderror" value="{{ old('hora_reserva', $reserva?->hora_reserva) }}">
                    {!! $errors->first('hora_reserva', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>

                <div class="col-md-12 mb-3">
                    <label for="comentarios" class="form-label fw-semibold text-pink">
                        <i class="bi bi-chat-left-dots me-1"></i>Comentarios
                    </label>
                    <textarea name="comentarios" id="comentarios" rows="3" class="form-control @error('comentarios') is-invalid @enderror" placeholder="Comentarios adicionales">{{ old('comentarios', $reserva?->comentarios) }}</textarea>
                    {!! $errors->first('comentarios', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>

                <div class="col-md-12 text-center mt-3">
                    <button type="submit" class="btn btn-pink px-4 py-2 rounded-pill shadow-sm">
                        <i class="bi bi-check-circle me-1"></i>Guardar Reserva
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
