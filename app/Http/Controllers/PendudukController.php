<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;




class PendudukController extends Controller
{


    public function cetak_sktm(Request $request){
        $data = Penduduk::where('nik', $request->nik)->get();
        if ($data -> isEmpty()) {
            return redirect('/sktm')->with('gagal','NIK tidak ada');
        }
        $pdf = Pdf::loadView('cetak.cetak_sktm',['data' => $data])->setPaper('a4', 'potrait');
        // dd($request->nik);
        return $pdf->stream('cetak_sktm.pdf');
    }

    public function cetak_skd(Request $request){
        $data = Penduduk::where('nik', $request->nik)->get();
        $tinggal = $request->tinggal;
        $keperluan = $request->keperluan;
        if ($data -> isEmpty()) {
            return redirect('/skd')->with('gagal','NIK tidak ada');
        }

       
        $pdf = Pdf::loadView('cetak.cetak_skd',
        [
            'data' => $data,
            'keperluan' => $keperluan,
            'tinggal' => $tinggal,
            
        ])->setPaper('a4', 'potrait');
        // dd($request->nik, $request->tinggal, $request->keperluan);
        return $pdf->stream('cetak_skd.pdf');
    }

    public function cetak_skj(Request $request){
        $data = Penduduk::where('nik', $request->nik)->get();
        $cerai = $request->cerai;
        $suami = $request->suami;
        if ($data -> isEmpty()) {
            return redirect('/skj')->with('gagal','NIK tidak ada');
        }

       
        $pdf = Pdf::loadView('cetak.cetak_skj',
        [
            'data' => $data,
            'suami' => $suami,
            'cerai' => $cerai,
            
        ])->setPaper('a4', 'potrait');
        return $pdf->stream('cetak_skj.pdf');
    }

    public function cetak_skkr(Request $request){
        $data = Penduduk::where('nik', $request->nik)->get();
        $alamat_rumah = $request->alamat_rumah;
        if ($data -> isEmpty()) {
            return redirect('/skkr')->with('gagal','NIK tidak ada');
        }

       
        $pdf = Pdf::loadView('cetak.cetak_skkr',
        [
            'data' => $data,
            'alamat_rumah' => $alamat_rumah,
            
        ])->setPaper('a4', 'potrait');
        return $pdf->stream('cetak_skkr.pdf');
    }

    public function cetak_sku(Request $request){
        $data = Penduduk::where('nik', $request->nik)->get();
        $usaha = $request->usaha;
        $nama_usaha = $request->nama_usaha;
        $keperluan = $request->keperluan;
        if ($data -> isEmpty()) {
            return redirect('/sku')->with('gagal','NIK tidak ada');
        }

       
        $pdf = Pdf::loadView('cetak.cetak_sku',
        [
            'data' => $data,
            'keperluan' => $keperluan,
            'usaha' => $usaha,
            'nama_usaha' =>$nama_usaha
            
        ])->setPaper('a4', 'potrait');
        
        return $pdf->stream('cetak_sku.pdf');
    }

    public function cetak_skk(Request $request){
        $data = Penduduk::where('nik', $request->nik)->get();
        $hari = $request->hari;
        $tanggal = $request->tanggal;
        $jam = $request->jam;
        $tempat = $request->tempat;
        $dikarenakan = $request->dikarenakan;
        $dimakamkan = $request->dimakamkan;
        if ($data -> isEmpty()) {
            return redirect('/sku')->with('gagal','NIK tidak ada');
        }

       
        $pdf = Pdf::loadView('cetak.cetak_skk',
        [
            'data' => $data,
            'jam' => $jam,
            'hari' => $hari,
            'tanggal' => $tanggal,
            'tempat' => $tempat,
            'dikarenakan' => $dikarenakan,
            'dimakamkan' => $dimakamkan
            
        ])->setPaper('a4', 'potrait');
        
        return $pdf->stream('cetak_skk.pdf');
    }

    
}
