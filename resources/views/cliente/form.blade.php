<div class="container mt-5">
    <div class="card border-0 shadow rounded-4" style="background-color: #fff0f5;">
        <div class="card-body p-5">
            <h3 class="text-center text-pink fw-bold mb-4">
                <i class="bi bi-heart-fill me-2 text-danger"></i>Formulario de Cliente - Belleza Total
            </h3>

            <div class="row g-4">
                <div class="col-md-6">
                    <label for="nombre" class="form-label text-muted">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control bg-light border-pink @error('nombre') is-invalid @enderror" value="{{ old('nombre', $cliente?->nombre) }}" placeholder="Ej: María">
                    @error('nombre')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="apellido" class="form-label text-muted">Apellido</label>
                    <input type="text" name="apellido" id="apellido" class="form-control bg-light border-pink @error('apellido') is-invalid @enderror" value="{{ old('apellido', $cliente?->apellido) }}" placeholder="Ej: López">
                    @error('apellido')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="telefono" class="form-label text-muted">Teléfono</label>
                    <input type="text" name="telefono" id="telefono" class="form-control bg-light border-pink @error('telefono') is-invalid @enderror" value="{{ old('telefono', $cliente?->telefono) }}" placeholder="300 123 4567">
                    @error('telefono')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="email" class="form-label text-muted">Correo Electrónico</label>
                    <input type="email" name="email" id="email" class="form-control bg-light border-pink @error('email') is-invalid @enderror" value="{{ old('email', $cliente?->email) }}" placeholder="ejemplo@correo.com">
                    @error('email')
                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                    @enderror
                </div>
            </div>

            <div class="text-center mt-5">
                <button type="submit" class="btn btn-pink px-5 py-2 rounded-pill shadow-sm">
                    <i class="bi bi-stars me-2"></i>Guardar Cliente
                </button>
            </div>
        </div>
    </div>
</div>
