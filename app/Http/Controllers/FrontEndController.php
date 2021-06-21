<?php

namespace App\Http\Controllers;

use App\Model\Student;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function cekPengumuman(Request $request)
    {
        $cekDataTahap1 = Student::where('nisn', $request->nisn)
                    ->where('date_of_birth', $request->date_of_birth)
                    ->first();
        if(!$cekDataTahap1){
            return redirect()->back()->with('failed', 'Data anda tidak terdaftar oleh sistem, silakan hubungi admin sekolah');
        }else{
            $cekDataTahap2 = Student::where('id', $cekDataTahap1->id)
                            ->where('status', 'Lulus')
                            ->first();
            if (!$cekDataTahap2) {
                return redirect()->back()->with('failed', 'Anda tidak lulus, silakan hubungi admin sekolah');
            } else {
                $dataTerakhir = Student::where('id', $cekDataTahap1->id)
                            ->where('status', 'Lulus')
                            ->first();
                
                return view('frontend.graduation', compact('dataTerakhir'));
            }
            // return $cekDataTahap2;
        }
        // return $student;
    }
}
