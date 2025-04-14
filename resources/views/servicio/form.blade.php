<div class="container py-4">
    <div class="card shadow border-0 rounded-4">
        <div class="card-body bg-light-pink p-4">
            <h4 class="mb-4 text-center text-pink fw-bold">
                <i class="bi bi-scissors me-2"></i>Formulario de Servicio
            </h4>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="nombre" class="form-label fw-semibold text-pink">Nombre del Servicio</label>
                    <input type="text" name="nombre" id="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $servicio?->nombre) }}" placeholder="Ej: Corte de cabello">
                    {!! $errors->first('nombre', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>

                <div class="col-md-6 mb-3">
                    <label for="descripcion" class="form-label fw-semibold text-pink">Descripción</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $servicio?->descripcion) }}" placeholder="Ej: Corte profesional unisex">
                    {!! $errors->first('descripcion', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>

                <div class="col-md-6 mb-3">
                    <label for="duracion" class="form-label fw-semibold text-pink">Duración (minutos)</label>
                    <input type="text" name="duracion" id="duracion" class="form-control @error('duracion') is-invalid @enderror" value="{{ old('duracion', $servicio?->duracion) }}" placeholder="Ej: 45">
                    {!! $errors->first('duracion', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>

                <div class="col-md-6 mb-3">
                    <label for="precio" class="form-label fw-semibold text-pink">Precio ($)</label>
                    <input type="text" name="precio" id="precio" class="form-control @error('precio') is-invalid @enderror" value="{{ old('precio', $servicio?->precio) }}" placeholder="Ej: 35000">
                    {!! $errors->first('precio', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
                </div>

                <div class="col-md-12 text-center mt-3">
                    <button type="submit" class="btn btn-pink px-4 py-2 rounded-pill shadow-sm">
                        <i class="bi bi-check-circle me-1"></i>Guardar Servicio
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
