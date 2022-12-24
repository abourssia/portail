<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Laboratoire;

class LaboratoiresController extends Controller
{
    public function index()
    {
        $laboratoires = Laboratoire::all();
            $counlaboratoires = $laboratoires -> count();

        return view('admin.dashboard.laboratoires', compact('laboratoires'));
    }

}
