@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header">
					Ver categoria <strong>{{$category->id}}</strong>
				</div>
				<div class="card-body">
					<p>
						<strong>Nombre:</strong>
						{{ $category->name}}
					</p>
					<p>
						<strong>Slug:</strong>
						{{ $category->slug}}
					</p>
					<p>
						<strong>Descripción:</strong>
						{{ $category->body}}
					</p>
					<a class="btn btn-sm btn-primary" href="{{ route('categories.edit', $category->id) }}">
						Modificar categoria
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection