<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Responsable;

class ResponsableController extends Controller
{
    public function index()
    {

        $responsable = Responsable::all();
        $counResponsable = $responsable -> count();

        return view('admin.dashboard.responsables', compact('responsable'));
    }
}
