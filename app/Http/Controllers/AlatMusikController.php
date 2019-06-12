<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\AlatMusik;
class AlatMusikController extends Controller
{
	public function index(){
		$alat_musik = \App\AlatMusik::all();
//		dd($data);
		return view('AlatMusik.index',['alatmusik'=> $alat_musik]);
	}

	public function create(){
		return view('AlatMusik.tambah');
	}

	public function store(Request $alat_musik){
		AlatMusik::create($alat_musik->all());
		return redirect('alatmusik');
	}

	public function edit($id){
		$alatmusik = AlatMusik::find($id);
		return view('AlatMusik.ubah', compact('alatmusik'));
	}

	public function update(Request $alat_musik, $id){
		$alatmusik = $alat_musik->all();
		AlatMusik::find($id)->update($alatmusik);
		return redirect('alatmusik');
	}

	public function destroy($id){
		AlatMusik::find($id)->delete();
		return redirect('alatmusik');
	}
}
