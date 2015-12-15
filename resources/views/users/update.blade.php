@extends('layouts.master')
@section('content')
<div>
	<form method="post" role="form">
		<div>
			<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
			<label>Nama</label>
			<input type="text" name="nama" value="{{$user->nama}}"/>
		</div>
		<div>
			<label>Email</label>
			<input type="text" name="email" value="{{$user->email}}"/>
		</div>
		<div>
			<label>Password</label>
			<input type="password" name="password" value="{{$user->password}}"/>

			</select>
		</div>
		<button type="submit">Ubah</button>
	</form>
</div>