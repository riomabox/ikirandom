@extends('layouts.master')
@section('content')
		<div>
			<div>
				<a href="sales/create">Tambah</a>
			</div>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Id</th>
						<th>ID User</th>
						<th>ID Partner</th>
						<th>Menu</th>
					</tr>
				</thead>
			<tbody>
			@foreach ($sales as $item)
			<tr>
				<td>
					{{$item->id}}
				</td>
				<td>
					{{$item->user_id}}
				</td>
				<td>
					{{$item->partner_id}}
				</td>
				<td>
					<a href="sales/update/{{$item['id']}}">Ubah</a>
					<a href="sales/delete/{{$item['id']}}">Hapus</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@stop