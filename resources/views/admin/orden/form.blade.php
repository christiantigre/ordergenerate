<div class="form-group {{ $errors->has('secuencial_inicio') ? 'has-error' : ''}}">
    <label for="secuencial_inicio" class="col-md-4 control-label">{{ 'Secuencial de inicio' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="secuencial_inicio" type="text" id="secuencial_inicio" value="{{ $orden->secuencial_inicio or ''}}" >
        {!! $errors->first('secuencial_inicio', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('cantidad') ? 'has-error' : ''}}">
    <label for="cantidad" class="col-md-4 control-label">{{ 'Cantidad a generar' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="cantidad" type="number" id="cantidad" value="{{ $orden->cantidad or ''}}" >
        {!! $errors->first('cantidad', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Crear' }}">
    </div>
</div>
