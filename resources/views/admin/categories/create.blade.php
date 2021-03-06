@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header">
					Crear categoria
				</div>
				<div class="card-body">
					{!! Form::open(['route' => 'categories.store', 'method' => 'POST', 'autocomplete' => 'off']) !!}
					<slug-component title="Nombre de la categoria" input="name" value=""></slug-component>
					@include('admin.categories.partials.form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection