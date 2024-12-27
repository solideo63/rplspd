<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peraturan;

class PeraturanController extends Controller
{
    //public function index()
    //{
      //  $faqs = faq::all();
        //return view('faq', [
          //  'title' => 'FAQ',
            //'faqs' => $faqs
        //]);
    //}

    public function admin_tampil()
    {
        $data = peraturan::all();
        return view('admin.peraturan.tampil', compact('data'));
    }

    public function admin_tambah()
    {
        $data = peraturan::all();
        return view('admin.peraturan.tambah', compact('data'));
    }

    public function admin_submit(Request $request)
    {
        $peraturan = new peraturan();
        $peraturan->nama = $request->nama;
        $peraturan->deskripsi = $request->deskripsi;
        $peraturan->link = $request->link;
        $peraturan->save();

        return redirect()->route('admin.tampil.peraturan');
    }

    public function admin_edit($id)
    {
        $data = peraturan::find($id);
        return view('admin.peraturan.edit', compact('data'));
    }

    public function admin_update(Request $request,$id)
    {
        $peraturan = peraturan::find($id);
        $peraturan->nama = $request->nama;
        $peraturan->deskripsi = $request->deskripsi;
        $peraturan->link = $request->link;
        $peraturan->update();

        return redirect()->route('admin.tampil.peraturan');
    }

    public function admin_delete($id)
    {
        $data = peraturan::find($id);
        $data->delete();
        return redirect()->route('admin.tampil.peraturan');
    }

    public function tampil()
    {
        $data = peraturan::all();
        return view('peraturan', compact('data'));
    }
}
