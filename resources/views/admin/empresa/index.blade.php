@extends('adminlte::page')
@section('content')
@include('errors.messages')
        <div class="row">

            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Empresa</div>
                    <div class="panel-body">
                        @if(empty($empresa))
                        <a href="{{ url('/admin/empresa/create') }}" class="btn btn-success btn-sm" title="Configurar empresa">
                            <i class="fa fa-plus" aria-hidden="true"></i> Configurar
                        </a>
                        @endif

                        <form method="GET" action="{{ url('/admin/empresa') }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Buscar..." value="{{ request('search') }}">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Actions</th><th>Empresa</th><th>Propietario</th><th>Gerente</th><th>Pag Web</th><th>Razon Social</th><th>Ruc</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($empresa as $item)
                                    <tr>
                                        <td>
                                            <a href="{{ url('/admin/empresa/' . $item->id) }}" title="Ver empresa"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/admin/empresa/' . $item->id . '/edit') }}" title="Editar empresa"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('/admin/empresa' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Eliminar empresa" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                            </form>
                                        </td>
                                        <td>{{ $item->almacen }}</td><td>{{ $item->propietario }}</td><td>{{ $item->gerente }}</td><td>{{ $item->pag_web }}</td><td>{{ $item->razon_social }}</td><td>{{ $item->ruc }}</td>
                                        
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $empresa->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
