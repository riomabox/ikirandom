@extends('layouts.master')
@section('content')
		<div>
			<div>
				<a href="users/create">Tambah</a>
			</div>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Password</th>
						<th>Menu</th>
					</tr>
				</thead>
			<tbody>
			@foreach ($users as $item)
			<tr>
				<td>
					{{$item->id}}
				</td>
				<td>
					{{$item->nama}}
				</td>
				<td>
					{{$item->email}}
				</td>
				<td>
					{{$item->password}}
				</td>
				<td>
					<a href="users/update/{{$item['id']}}">Ubah</a>
					<a href="users/delete/{{$item['id']}}">Hapus</a>

				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@stop