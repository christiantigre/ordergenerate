@extends('adminlte::page')
@section('content')
@include('errors.messages')
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">empresa {{ $empresa->empresa }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/empresa') }}" title="Atras"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Atras</button></a>
                        <a href="{{ url('/admin/empresa/' . $empresa->id . '/edit') }}" title="Editar empresa"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                        {{--
                        <form method="POST" action="{{ url('admin/empresa' . '/' . $empresa->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-xs" title="Delete empresa" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        --}}
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr><th>ID</th><td>{{ $empresa->id }}</td></tr>
                                    <tr><th> empresa </th><td> {{ $empresa->empresa }} </td></tr>
                                    <tr><th> Propietario </th><td> {{ $empresa->propietario }} </td></tr>
                                    <tr><th> Gerente </th><td> {{ $empresa->gerente }} </td></tr>
                                    <tr><th> Pagina web </th><td> {{ $empresa->pag_web }} </td></tr>
                                    <tr><th> Razon social </th><td> {{ $empresa->razon_social }} </td></tr>
                                    <tr><th> Ruc </th><td> {{ $empresa->ruc }} </td></tr>
                                    <tr><th> Email </th><td> {{ $empresa->email }} </td></tr>
                                    <tr>
                                    <th> Fecha inicio </th><td> 
                                        {{ $empresa->fecha_inicio }} 
                                        ({{ $empresa->created_at->diffForHumans() }})
                                    </td></tr>

                                    <tr><th> Logo </th><td> 
                                         @if(empty($empresa->logo))
                                            <center>-</center>
                                            @else
                                            <a href="{{ asset($empresa->logo) }}">
                                            <img src="{{ asset($empresa->logo) }}" class="img img-responsive">
                                            </a>
                                            @endif
                                    </td></tr>
                                    <tr><th> Slogan </th><td> {{ $empresa->slogan }} </td></tr>                                    
                                    <tr>
                                    <tr><th> Telefono </th><td> {{ $empresa->telefono }} </td></tr>
                                    <tr><th> Celular movistar </th><td> {{ $empresa->cel_movi }} </td></tr>
                                    <tr><th> Celular claro </th><td> {{ $empresa->cel_claro }} </td></tr>
                                    <tr><th> Watsapp </th><td> {{ $empresa->watsapp }} </td></tr>
                                    <tr><th> Facebook </th><td> {{ $empresa->fb }} </td></tr>
                                    <tr><th> Twitter </th><td> {{ $empresa->tw }} </td></tr>
                                    <tr><th> Instagram </th><td> {{ $empresa->ins }} </td></tr>
                                    <tr><th> Google + </th><td> {{ $empresa->gg }} </td></tr>
                                    <tr><th> Detalle empresa </th><td> {{ $empresa->funcion_empresa }} </td></tr>
                                    <tr><th> Dirección Matríz</th><td> {{ $empresa->dirMatriz }} </td></tr>
                                    <tr><th> Dirección Sucursal</th><td> {{ $empresa->dirSucursal }} </td></tr>
                                    <tr><th> Latitud </th><td> {{ $empresa->latitud }} </td></tr>
                                    <tr><th> Longitud </th><td> {{ $empresa->longitud }} </td></tr>
                                    <tr><th> Obligado Contabilidad </th><td> 
                                        @if(($empresa->obligado_contabilidad)=='0')
                                            <small class="label pull-left bg-green">No Obligado</small>
                                        @else
                                            <small class="label pull-left bg-red">Obligado</small>
                                        @endif
                                    </td></tr>
                                    <tr><th> Ruta Certificado </th><td> {{ $empresa->path_certificado }} </td></tr>
                                    <tr><th> Clave Certificado </th><td> {{ $empresa->clave_certificado }} </td></tr>
                                    <tr><th> Modo Ambiente </th><td> 
                                        @if(($empresa->modo_ambiente)=='0')
                                            <small class="label pull-left bg-green">PRUEBAS</small>
                                        @else
                                            <small class="label pull-left bg-red">PRODUCCIÓN</small>
                                        @endif
                                    </td></tr>
                                    <tr><th> Tipo Emisión </th><td> 
                                        @if(($empresa->modo_ambiente)=='0')
                                            <small class="label pull-left bg-green">Emisión Normal</small>
                                        @else
                                            <small class="label pull-left bg-red">Otra</small>
                                        @endif
                                    </td></tr>
                                    <tr><th> Facturación electrónica </th><td> 
                                        @if(($empresa->habilitar_facelectronica)=='0')
                                            <small class="label pull-left bg-green">Deshabilitado</small>
                                        @else
                                            <small class="label pull-left bg-red">Habilitado</small>
                                        @endif
                                    </td></tr>
                                    <tr><th> Auth SRI </th><td> {{ $empresa->auth_sri }} </td></tr>
                                    <tr><th> Cod: Establecimiento </th><td> {{ $empresa->codestablecimiento }} </td></tr>
                                    <tr><th> Cod: Punto Emisión </th><td> {{ $empresa->codpntemision }} </td></tr>
                                    <tr><th> Activo </th><td> 
                                        @if(($empresa->activo)=='1')
                                            <small class="label pull-left bg-green">Activado</small>
                                        @else
                                            <small class="label pull-left bg-red">Desactivado</small>
                                        @endif
                                    </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection