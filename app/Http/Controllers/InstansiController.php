<?php

namespace App\Http\Controllers;

use App\Models\Instansi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InstansiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $instansi = Instansi::get();
        return view('instansi.InstansiView', ['instansi' => $instansi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instansi.InstansiAddData');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Instansi $instansi)
    {
        // return $request->file('logo_instansi')->store('instansi-file');
        $validation = $request->validate([
            'nama_instansi'                 => 'required',
            'alamat_instansi'               => 'required',
            'web_instansi'                  => 'required',
            'nope_instansi'                 => 'required|max:13',
            'email_instansi'                => 'required',
            'kategori_instansi'             => 'required',
            'logo_instansi'                 => 'image|file|max:1024',
            'profile_instansi'              => 'required',
            'visi_misi_instansi'            => 'required',
            'dasar_hukum_instansi'          => 'required',
            'daftar_layanan_instansi'       => 'required',
            'persyaratan_layanan_instansi'  => 'required',
            'biaya_layanan_instansi'        => 'required',
            'alur_layanan_instansi'         => 'image|file|max:1024'
        ]);
        if ($request->file('logo_instansi')) {
            $validation['logo_instansi'] = $request->file('logo_instansi')->store('file-instansi');
        }
        if ($request->file('alur_layanan_instansi')) {
            $validation['alur_layanan_instansi'] = $request->file('alur_layanan_instansi')->store('file-alur');
        }

        Instansi::create($validation);
        return redirect()->route('instansi.index')->with('success', 'Data Berhasil Ditambahkan!');
        // return redirect()->route('instansi.index')->with('toast_success', 'Task Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Instansi $instansi)
    {
        return view('instansi.InstansiEditData', compact('instansi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instansi $instansi)
    {
        $validation = $request->validate([
            'nama_instansi'                 => 'required',
            'alamat_instansi'               => 'required',
            'web_instansi'                  => 'required',
            'nope_instansi'                 => 'required|max:13',
            'email_instansi'                => 'required',
            'kategori_instansi'             => 'required',
            'logo_instansi'                 => 'image|file|max:1024',
            'profile_instansi'              => 'required',
            'visi_misi_instansi'            => 'required',
            'dasar_hukum_instansi'          => 'required',
            'daftar_layanan_instansi'       => 'required',
            'persyaratan_layanan_instansi'  => 'required',
            'biaya_layanan_instansi'        => 'required',
            'alur_layanan_instansi'         => 'image|file|max:1024'
        ]);

        if ($request->file('logo_instansi')) {
            if($request->oldImageLogo){
                Storage::delete($request->oldImageLogo);
            }
            $validation['logo_instansi'] = $request->file('logo_instansi')->store('file-instansi');
        }
        if ($request->file('alur_layanan_instansi')) {
            if($request->oldImageAlur){
                Storage::delete($request->oldImageAlur);
            }
            $validation['alur_layanan_instansi'] = $request->file('alur_layanan_instansi')->store('file-alur');
        }

        Instansi::where('id', $instansi->id)->update($validation);
        return redirect()->route('instansi.index')->with('success', 'Updated Data has been success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instansi $instansi)
    {
        if ($instansi->alur_layanan_instansi) {
            Storage::delete($instansi->alur_layanan_instansi);
                if ($instansi->logo_instansi) {
                Storage::delete($instansi->logo_instansi);
            }
        }
        Instansi::destroy($instansi->id);
        return redirect()->back()->with('success','Data Berhasil DiHapus');
    }
}
