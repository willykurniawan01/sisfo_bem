<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kegiatan;
use App\Absensi;
use Illuminate\Support\Carbon;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ini_set('date.timezone', 'Asia/Jakarta');
        $tgl = date('Y-m-d H:i:s');
        $jam = date('H:i');
        $center_lat = "0.4481968";
        $center_lng = "101.3982525";

        $request->validate([
            'kode_kegiatan' => 'required',
            'imei' => 'required',
            'qrcode' => 'required'
        ]);

        if ($request->qrcode == "https://bem.sar.ac.id/440280bb2984cfc8c2937f3307327643") {
            $distance = (6371 * acos((cos(deg2rad($center_lat))) * (cos(deg2rad($request->lat))) * (cos(deg2rad($request->lon) - deg2rad($center_lng))) + ((sin(deg2rad($center_lat))) * (sin(deg2rad($request->lat))))));

            if ($distance > 0.050) {
                return response()->json([
                    'message' => 'Jarak anda jauh' . $distance . 'km!',
                ]);
            } else {
                $acara = Kegiatan::where('kode_kegiatan',$request->kode_kegiatan)->first();
                if ($jam <= $acara->jam_mulai) {
                    if (Absensi::where('imei', $request->im4ei)->count() != 0) {
                        return response()->json([
                            'message' => 'Anda sudah absensi!'
                        ]);
                    } else {
                        $absen = Absensi::create([
                            'imei' => $request->imei,
                            'waktu_absensi' => $tgl,
                            'kode_kegiatan' => $request->kode_kegiatan,
                            'keterangan'=>'Hadir'
                        ]);

                        if ($absen) {
                            return response()->json([
                                'message' => 'Absensi berhasil!'
                            ]);
                        } else {
                            return response()->json([
                                'message' => 'Terjadi Kesalahan!'
                            ]);
                        }
                    }
                } else {
                    if (Absensi::where('imei', $request->imei)->count() != 0) {
                        return response()->json([
                            'message' => 'Anda sudah absensi!'
                        ]);
                    } else {
                        $absen = Absensi::create([
                            'imei' => $request->imei,
                            'waktu_absensi' => $tgl,
                            'kode_kegiatan' => $request->kode_kegiatan,
                            'keterangan'=>'Terlambat'
                        ]);
                        return response()->json([
                            'message' => 'Anda terlambat!'
                        ]);
                    }
                }
            }
        } else {
            return response()->json([
                'status'=>0,
                'message'=>'Maaf QR Code Tidak Valid!'
            ]);
        }
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
