<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuditTrail;
class AuditTrailController extends Controller
{
   
   


public function index(Request $request)
{
    $logs = AuditTrail::with('user')->latest()->paginate(20);

    if ($request->ajax()) {
        return view('admin.audit.index', compact('logs')); // ajax partial
    }

    return view('dashboard', compact('logs')); // fallback if not AJAX
}


// Inside AuditTrailController
 
 //
}
