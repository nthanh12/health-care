<?php

namespace App\Http\Service;

use App\Models\Doctor;

class DoctorService
{
    public function getAll(){
        $doctors = Doctor::get();

        // Định dạng ngày trong JSON
        return response()->json($doctors);
    }
}
