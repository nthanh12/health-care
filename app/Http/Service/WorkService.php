<?php
namespace App\Http\Service;

use App\Models\Work;

class WorkService
{
    public function getAll() {
        $works = Work::get();

        return response()->json($works);
    }
}
?>