<?php 

namespace App\Http\Controllers;

use Request;
use Input;
use App\Models\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$item['users'] = User::all();
		return view('users.index', $item);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        if (Request::isMethod('get'))  {
            return view('users.create');

        }
        elseif (Request::isMethod('post'))  {

            $item= array('nama' =>Input::get('nama'),'email' =>Input::get('email'),'password' =>Input::get('password'));
            User::create($item);
            return redirect('users');

        }		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
        if (Request::isMethod('get'))  {
        	$item['user'] = User::find($id);
            return view('users.update', $item);
        }
        elseif (Request::isMethod('post'))  {

          	$item=User::find($id);
          	$item->nama=Input::get('nama');
          	$item->email=Input::get('email');
          	$item->password=Input::get('password');
          	$item->save();
            return redirect('users');

        }			
	}

	public function delete($id)
	{
          	$item=User::find($id);
          	$item->delete();
            return redirect('users');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
