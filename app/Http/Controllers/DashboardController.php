<?php

namespace App\Http\Controllers;

use App\Models\do_hdr;
use App\Models\HutangSupplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $dateNow = Carbon::now()->format("Y-m-d");
        $monthNow = Carbon::now()->format("m");
        $yearNow = Carbon::now()->format("Y");
        // $isListPenjualan = tp_hdr::whereyear('tgl_trs', '=', $yearNow)->whereMonth('tgl_trs', '=', $monthNow)->orderBy('created_at', 'desc')->get();
        $isFakturTempo = HutangSupplier::whereyear('hs_tanggal_tempo', '=', $yearNow)->whereMonth('hs_tanggal_tempo', '=', $monthNow)->where('isLunas', '=', '0')->orderBy('hs_tanggal_tempo', 'desc')->get();

        return view('Pages.index', [
            'isFakturTempo' => $isFakturTempo
        ]);
    }
}
