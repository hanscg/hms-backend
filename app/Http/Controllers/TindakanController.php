<?php

namespace App\Http\Controllers;

use App\Tindakan;
use App\DaftarTindakan;
use App\Transaksi;
use App\SettingBpjs;
use App\BpjsManager;
use Illuminate\Http\Request;

class TindakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return Tindakan::with('daftarTindakan')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $currentTindakan = '';
      foreach ($request->all() as $key => $value) {  
        $tindakan = new Tindakan;
        $tindakan->id_transaksi = $value['id_transaksi'];
        $tindakan->no_tindakan = $value['no_tindakan'];
        $tindakan->harga = $value['harga'];
        $tindakan->dokumen_penunjang = $value['dokumen_penunjang'];
        $tindakan->keterangan = $value['keterangan'];
        $tindakan->id_pembayaran = $value['id_pembayaran'];
        $tindakan->kode_tindakan = $value['kode_tindakan'];
        $tindakan->id_pasien = $value['id_pasien'];
        $tindakan->tanggal_waktu = $value['tanggal_waktu'];
        $tindakan->np_tenaga_medis = $value['np_tenaga_medis'];
        $tindakan->nama_poli = $value['nama_poli'];
        $tindakan->nama_lab = $value['nama_lab'];
        $tindakan->nama_ambulans = $value['nama_ambulans'];
        
        if ($tindakan->save()) {
          $currentTindakan = $currentTindakan. "#". $tindakan->kode_tindakan;
          $transaksi = Transaksi::findOrFail($value['id_transaksi']);
          $transaksi->harga_total += $value['harga'];
          $transaksi->save();
        }
      }

      $transaksi = Transaksi::findOrFail($tindakan->id_transaksi);
      $settingBpjs = SettingBpjs::first();
      $coder_nik = $settingBpjs->coder_nik;
      $bpjs =  new BpjsManager($transaksi->no_sep, $coder_nik);
      $currentData = json_decode($bpjs->getClaimData()->getBody(), true);
      $currentTindakan = $currentData['response']['data']['procedure']. $currentTindakan;

      $requestSet = array(
        'procedure' => $currentTindakan
      );
      $bpjs->setClaimData($requestSet);

      return response($request->all(), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_transaksi
     * @param  int  $no_tindakan
     * @return \Illuminate\Http\Response
     */
    public function show($id_transaksi, $no_tindakan = null)
    {
      if ($no_tindakan != null) {
        return Tindakan::with('daftarTindakan')
          ->where('id_transaksi', '=', $id_transaksi)
          ->where('no_tindakan', '=', $no_tindakan)
          ->first();
      }
      else {
        return $response = Tindakan::with('daftarTindakan')->where('id_transaksi', '=', $id_transaksi)->get();
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_transaksi
     * @param  int  $no_tindakan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_transaksi, $no_tindakan)
    {
      $tindakan = Tindakan::where('id_transaksi', '=', $id_transaksi)
        ->where('no_tindakan', '=', $no_tindakan)
        ->first();
      $tindakan->id_transaksi = $request->input('id_transaksi');
      $tindakan->no_tindakan = $request->input('no_tindakan');
      $tindakan->harga = $request->input('harga');
      $tindakan->dokumen_penunjang = $request->input('dokumen_penunjang');
      $tindakan->keterangan = $request->input('keterangan');
      $tindakan->id_pembayaran = $request->input('id_pembayaran');
      $tindakan->kode_tindakan = $request->input('kode_tindakan');
      $tindakan->id_pasien = $request->input('id_pasien');
      $tindakan->tanggal_waktu = $request->input('tanggal_waktu');
      $tindakan->np_tenaga_medis = $request->input('np_tenaga_medis');
      $tindakan->nama_poli = $request->input('nama_poli');
      $tindakan->nama_lab = $request->input('nama_lab');
      $tindakan->nama_ambulans = $request->input('nama_ambulans');
      $tindakan->save();
      return response($tindakan, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_transaksi
     * @param  int  $no_tindakan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_transaksi, $no_tindakan = null)
    {
      if($no_tindakan != null) {
        $deletedRows = Tindakan::where('id_transaksi', '=', $id_transaksi)
          ->where('no_tindakan', '=', $no_tindakan)
          ->first()
          ->delete();
      }
      else {
        $deletedRows = Tindakan::where('id_transaksi', '=', $id_transaksi)
          ->get()
          ->delete();
      }
      return response('', 204);
    }
}
