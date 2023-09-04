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
        $namaPdf = 'SKTM_';
        foreach ($data as $penduduk) {
        $namaPdf .= $penduduk->nama;
        }
        $namaPdf .= '.pdf';

        return $pdf->stream($namaPdf);
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
        $namaPdf = 'Surat Keterangan Domisili_';
        foreach ($data as $penduduk) {
        $namaPdf .= $penduduk->nama;
        }
        $namaPdf .= '.pdf';

        return $pdf->stream($namaPdf);
    }

    public function cetak_skj(Request $request){
        $data = Penduduk::where('nik', $request->nik)->get();
        $cerai = $request->cerai;
        $pasangan = $request->pasangan;
        if ($data -> isEmpty()) {
            return redirect('/skj')->with('gagal','NIK tidak ada');
        }

       
        
        $namaPdf = 'Surat Keterangan Janda_';
        foreach ($data as $penduduk) {
        $namaPdf .= $penduduk->nama;
            if ($penduduk->jenis_kelamin == "Perempuan") {
                $status = "Janda";
            } elseif ($penduduk->jenis_kelamin == "Laki-laki") {
                $status = "Duda";
            }
        }
        $namaPdf .= '.pdf';
        $pdf = Pdf::loadView('cetak.cetak_skj',
        [
            'data' => $data,
            'pasangan' => $pasangan,
            'cerai' => $cerai,
            'status' => $status,
            
        ])->setPaper('a4', 'potrait');

        return $pdf->stream($namaPdf);
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
        $namaPdf = 'Surat Keterangan Kepemilikan Rumah_';
        foreach ($data as $penduduk) {
        $namaPdf .= $penduduk->nama;
        }
        $namaPdf .= '.pdf';

        return $pdf->stream($namaPdf);
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
        
        $namaPdf = 'Surat Keterangan Usaha_';
        foreach ($data as $penduduk) {
        $namaPdf .= $penduduk->nama;
        }
        $namaPdf .= '.pdf';

        return $pdf->stream($namaPdf);
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
            return redirect('/skk')->with('gagal','NIK tidak ada');
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
        
        $namaPdf = 'Surat Keterangan Kematian_';
        foreach ($data as $penduduk) {
        $namaPdf .= $penduduk->nama;
        }
        $namaPdf .= '.pdf';

        return $pdf->stream($namaPdf);
    }

    
}
