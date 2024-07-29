<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SugarCalculation;
use PDF;

class SugarCalculationController extends Controller
{
    public function index()
    {
        return view('sugar-calculation-form');
    }

    public function calculate(Request $request)
    {
        $validatedData = $request->validate([
            'gula' => 'required|numeric',
            'takaran_saji' => 'required|numeric',
            'sajian_per_kemasan' => 'required|numeric',
        ]);

        // Simpan data ke database
        SugarCalculation::create([
            'gula' => $validatedData['gula'],
            'takaran_saji' => $validatedData['takaran_saji'],
            'sajian_per_kemasan' => $validatedData['sajian_per_kemasan'],
        ]);

        $gula = $validatedData['gula'];
        $takaranSaji = $validatedData['takaran_saji'];
        $sajianPerKemasan = $validatedData['sajian_per_kemasan'];

        $totalGula = $sajianPerKemasan * $gula;
        $totalTakaranSaji = $sajianPerKemasan * $takaranSaji;
        $totalGulaPerMl = $totalGula / $totalTakaranSaji;
        $result = $totalGulaPerMl * 100;

         // Menentukan nilai berdasarkan result
         $nilai = '';
         if ($result <= 0.5) {
             $nilai = 'A';
         } elseif ($result > 0.5 && $result <= 6) {    
             $nilai = 'B';
         } elseif ($result > 6 && $result <= 10) {
             $nilai = 'C';
         } elseif ($result > 12) {
             $nilai = 'D';
         }
         
        $persentase = min(max($result, 0), 12); // Pastikan persentase antara 0-50

        // Menghitung jumlah sendok gula
        $sendokGulaperml = $result / 4;
        $sendokGulaperml = round($sendokGulaperml);
        $sendokGula = $totalGula / 4;
        $sendokGula = round($sendokGula);

        $allData = [
            'gula' => $gula,
            'takaranSaji' => $takaranSaji,
            'sajianPerKemasan' => $sajianPerKemasan,
            'totalGula' => $totalGula,
            'totalGulaPerMl' => $totalGulaPerMl,
            'totalTakaranSaji' => $totalTakaranSaji,
            'result' => $result,
            'nilai' => $nilai,
            'persentase' => $persentase,
            'sendokGulaperml' => $sendokGulaperml,
            'sendokGula' => $sendokGula,
        ];

        return view('sugar-calculation-result', [
            ...$allData,
            'allData' => $allData,
        ]);
    }

    public function downloadPDF(Request $request)
    {
        $data = $request->all();

        $pdf = PDF::loadView('sugar-calculation-pdf', $data);

        return $pdf->stream('sugar_calculation_result.pdf');
    }

    public function hero()
    {
        return view('hero');
    }

    public function home()
    {
        return view('home');
    }

    public function article()
    {
        return view('article');
    }
}
