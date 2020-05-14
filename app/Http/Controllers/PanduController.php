<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use Auth;
Use App\Pandu;
use Illuminate\Support\Facades\Hash;

class PanduController extends Controller
{

    public function index()
    {
        return view('pandu/index');   
    }
	public function datatables(Datatables $datatables)
    {

        //$query = DB::select(DB::raw("select * from surat_pengaduan"));
		DB::statement(DB::raw('set @rownum=0'));
        
		$query = Pandu::select("pandu.*", DB::raw('@rownum  := @rownum  + 1 AS rownum'))
		->get();

        $datatables = Datatables::of($query);

        $datatables->addColumn('action', function ($post) {
            return $this->getActionButton($post);
        });

        return $datatables->make(true);
    }
	
	
	public function getActionButton($post)
    {
        $viewButton = '<a href="' . url('/pandu/update/' . $post->id) . '" class="btn btn-info">Ubah</a>&nbsp';
		$viewButton .= '<button class="btn waves-effect waves-light btn-danger" data-button="delete-button" title="Hapus" data-id="' . $post->id . '">Hapus</i></button>&nbsp';
		
        return $viewButton;
    }
	
	public function create()
    {
        //$users = User::find($id);
		
		return view('pandu/create');

    }
	
	public function store(Request $request)
    {

		$user = new Pandu();
		
		$user->nama = $request->nama;
		$user->umur = $request->umur;
		$user->save();


        return redirect('pandu')->with('saved', 'Data PPK Berhasil Di Tambahkan');
    }
	
	
	public function destroy($id)
    {
        $users = Pandu::find($id);

        if (empty($users)) {
            return response(['meta' => 400, 'message' => 'Failed Delete Data'], 400);
        }

        $users->delete();

        return response(['meta' => 200, 'message' => 'Success Delete Data'], 200);

    }
	public function edit($id)
    {
        $data = Pandu::find($id);
		
		return view('pandu/update',['data'=>$data]);

    }
	public function update(Request $request, $id)
    {
        $users = Pandu::find($id);

		$user->nama = $request->nama;
		$user->umur = $request->umur;

		$users->update();
		
		return redirect('pandu')->with('saved', 'Data Berhasil Di Update');

    }

}
