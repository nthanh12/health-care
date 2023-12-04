<?php

namespace App\Http\Controllers;

use App\Http\Service\WorkService;
use Illuminate\Http\Request;

class WorkController
{
    protected $workService;
    public function __construct(WorkService $workService)
    {
        $this->workService = $workService;
    }
    public function getWorkList() {
        return $this->workService->getAll();
    }
}
