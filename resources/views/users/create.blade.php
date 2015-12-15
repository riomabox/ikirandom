@extends('layouts.master')
@section('content')
<div>
	<form method="post" role="form">
		<div>
			<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
			<label>Nama</label>
			<input type="text" name="nama" />
		</div>
		<div>
			<label>Email</label>
			<input type="text" name="email" />
		</div>
		<div>
			<label>Password</label>
			<input type="password" name="password" />

			</select>
		</div>
		<button type="submit">Tambah</button>
	</form>
</div>