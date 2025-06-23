<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private $arr = [
            ['id'=>1, 'nama'=>'Faza', 'kelas'=>'XII RPL 1'],
            ['id'=>2, 'nama'=>'Ubed', 'kelas'=>'XII RPL 4'],
            ['id'=>3, 'nama'=>'Cemen', 'kelas'=>'XII RPL 3'],
        ];

    public function index() 
    {
        $siswa = session('siswa_data', $this->arr);
        return view('siswa.index', ['siswa' => $siswa]);
    }

    public function show($id)
    {
        $siswa = collect($this->arr)->firstWhere('id', $id);
        return view('siswa.show', compact('siswa'));
    }

    public function create() 
    {
        return view('siswa.create');
    }

    public function store(Request $request) 
    {
        $siswa = session('siswa_data', $this->arr);
        // Membuat Id Automatic (Increments)
        $newid = collect($siswa)->max('id') + 1;
        
        // tambah data
        $siswa[] = [
            'id'    => $newid,
            'kelas' => $request->kelas,
            'nama'  => $request->nama
        ];

        // siswa
        session(['siswa_data' => $siswa]);
        // kembali
        return redirect('/siswa');
    }

    public function edit($id) 
    {
        $siswa = session('siswa_data', $this->arr);
        // 
        if (! $siswa) {
            abort(404);
        }

        return view('siswa.edit', ['siswa' => $siswa]);
    }

    public function update(Request $request, $id) 
    {
        $data = session('siswa_data', $this->arr);
        foreach ($data as $item) {
            if ($item['id'] == $id) {
                $item['nama']  = $request->nama;
                $item['kelas'] = $request->kelas;
                break;
            }
        }


        session(['siswa_data' => $data]);
        return redirect('siswa');
    }

    public function destroy($id) 
    {
        $siswa = session('siswa_data', $this->arr);
        $index = array_search($id, array_column($siswa, 'id'));

        array_splice($siswa, $index, 1);
        session(['siswa_data' => $siswa]);
        return redirect('siswa');
    }
}
