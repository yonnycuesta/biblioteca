<div class="form-group">
    <label for="nombre" class="col-lg-3 control-label requerido">Nombre</label>
    <div class="col-lg-8">
      <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" required/>
    </div>
  </div>
  <br>
  <br>
  <div class="form-group">
    <label for="url" class="col-lg-3 control-label requerido">Url</label>
    <div class="col-lg-8">
      <input type="text" class="form-control" id="url" name="url" value="{{ old('url') }}" required/>
    </div>
  </div>
  <br>
  <br>
  <div class="form-group">
    <label for="icono" class="col-lg-3 control-label">Icono</label>
    <div class="col-lg-8">
      <input type="text" class="form-control" id="icono" name="icono" value="{{ old('icono') }}"/>
    </div>
    <div class="col-lg-1">
      <span id="mostrar-icono" class="fa fa-fw {{ old("icono") }}"></span>
    </div>
  </div>