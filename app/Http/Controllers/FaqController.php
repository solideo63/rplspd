<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\faq;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = faq::all();
        return view('faq', [
            'title' => 'FAQ',
            'faqs' => $faqs
        ]);
    }

    public function admin_tampil()
    {
        $data = faq::all();
        return view('admin.faq.tampil', compact('data'));
    }

    public function admin_tambah()
    {
        $data = faq::all();
        return view('admin.faq.tambah', compact('data'));
    }

    public function admin_submit(Request $request)
    {
        $faq = new faq();
        $faq->tanya = $request->tanya;
        $faq->jawab = $request->jawab;
        $faq->save();

        return redirect()->route('admin.tampil.faq');
    }

    public function admin_edit($id)
    {
        $data = faq::find($id);
        return view('admin.faq.edit', compact('data'));
    }

    public function admin_update(Request $request,$id)
    {
        $faq = faq::find($id);
        $faq->tanya = $request->tanya;
        $faq->jawab = $request->jawab;
        $faq->update();

        return redirect()->route('admin.tampil.faq');
    }

    public function admin_delete($id)
    {
        $data = faq::find($id);
        $data->delete();
        return redirect()->route('admin.tampil.faq');
    }
}

