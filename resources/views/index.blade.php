@extends('layouts.app')
@section('sidebar')
 <!--heredamos con parent lo que hay en la plantilla base pero añadimos otro elemento al menú-->
  @include('layouts.menu')
  @parent
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @endif
                </div>
            <div class="panel panel-default">
                <div class="panel-heading">Usuarios</div>
                                    <!-- Left Side Of Navbar -->
                <div class="panel-body">
                    <table class="table">
                    	<thead>
                    		<th>Id</th>
                			<th>Nombre</th>
                			<th>Rol</th>
                			<th>Nivel</th>
                			<th>Creado</th>
                    	</thead>	
                    	<tbody>
                    		@foreach($usuario as $item)
                			<tr>
                				<td>{{ $item->id}}</td>
                				<td>{{ $item->name}}</td>
                				<td>{{ $item->roles[0]->description}}</td>
                				<td>{{ $item->roles[0]->level}}</td>
                				<td>{{ $item->created_at}}</td>
                			</tr>
                			@endforeach
                    	</tbody>
                    </table>	
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()