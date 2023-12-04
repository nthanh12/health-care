<?php

namespace App\Http\Controllers;

use App\Http\Service\DoctorService;

class DoctorController
{
    protected $doctorService;
    public function __construct(DoctorService $doctorService)
    {
        $this->doctorService = $doctorService;
    }
    public function getDoctorList() {
        return $this->doctorService->getAll();
    }
}
