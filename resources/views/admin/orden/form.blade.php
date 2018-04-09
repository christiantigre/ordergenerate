<div class="form-group {{ $errors->has('fecha_orden') ? 'has-error' : ''}}">
    <label for="fecha_orden" class="col-md-4 control-label">{{ 'Fecha Orden' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="fecha_orden" type="text" id="fecha_orden" value="{{ $orden->fecha_orden or ''}}" >
        {!! $errors->first('fecha_orden', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('Empresa') ? 'has-error' : ''}}">
    <label for="Empresa" class="col-md-4 control-label">{{ 'Empresa' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="Empresa" type="text" id="Empresa" value="{{ $orden->Empresa or ''}}" >
        {!! $errors->first('Empresa', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cedula') ? 'has-error' : ''}}">
    <label for="cedula" class="col-md-4 control-label">{{ 'Cedula' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="cedula" type="number" id="cedula" value="{{ $orden->cedula or ''}}" required>
        {!! $errors->first('cedula', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('ruc') ? 'has-error' : ''}}">
    <label for="ruc" class="col-md-4 control-label">{{ 'Ruc' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="ruc" type="number" id="ruc" value="{{ $orden->ruc or ''}}" required>
        {!! $errors->first('ruc', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="col-md-4 control-label">{{ 'Email' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="email" type="email" id="email" value="{{ $orden->email or ''}}" required>
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
    <label for="telefono" class="col-md-4 control-label">{{ 'Telefono' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="telefono" type="number" id="telefono" value="{{ $orden->telefono or ''}}" required>
        {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cel_movi') ? 'has-error' : ''}}">
    <label for="cel_movi" class="col-md-4 control-label">{{ 'Cel Movi' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="cel_movi" type="number" id="cel_movi" value="{{ $orden->cel_movi or ''}}" required>
        {!! $errors->first('cel_movi', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cel_claro') ? 'has-error' : ''}}">
    <label for="cel_claro" class="col-md-4 control-label">{{ 'Cel Claro' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="cel_claro" type="number" id="cel_claro" value="{{ $orden->cel_claro or ''}}" required>
        {!! $errors->first('cel_claro', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('wts') ? 'has-error' : ''}}">
    <label for="wts" class="col-md-4 control-label">{{ 'Wts' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="wts" type="number" id="wts" value="{{ $orden->wts or ''}}" required>
        {!! $errors->first('wts', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
    <label for="direccion" class="col-md-4 control-label">{{ 'Direccion' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="direccion" type="text" id="direccion" value="{{ $orden->direccion or ''}}" required>
        {!! $errors->first('direccion', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('fecha_posisionamiento') ? 'has-error' : ''}}">
    <label for="fecha_posisionamiento" class="col-md-4 control-label">{{ 'Fecha Posisionamiento' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="fecha_posisionamiento" type="date" id="fecha_posisionamiento" value="{{ $orden->fecha_posisionamiento or ''}}" >
        {!! $errors->first('fecha_posisionamiento', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('activo') ? 'has-error' : ''}}">
    <label for="activo" class="col-md-4 control-label">{{ 'Activo' }}</label>
    <div class="col-md-6">
        <select name="activo" class="form-control" id="activo" >
    @foreach (json_decode('{"1":"Activo","0":"Inactivo"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($orden->activo) && $orden->activo == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('activo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('imagen') ? 'has-error' : ''}}">
    <label for="imagen" class="col-md-4 control-label">{{ 'Imagen' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="imagen" type="file" id="imagen" value="{{ $orden->imagen or ''}}" >
        {!! $errors->first('imagen', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
