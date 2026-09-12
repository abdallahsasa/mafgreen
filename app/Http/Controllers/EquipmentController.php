<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function index()
    {
        $equipment = Equipment::where('is_active', true)->orderBy('sort_order')->get();

        return view('pages.equipment', compact('equipment'));
    }
}
