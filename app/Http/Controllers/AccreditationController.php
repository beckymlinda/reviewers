<?php

// app/Http/Controllers/AccreditationController.php

namespace App\Http\Controllers;

use App\Models\Accreditation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccreditationController extends Controller
{
public function index()
{
    $accreditations = Accreditation::select('institution_name', DB::raw('MIN(id) as id'))
        ->groupBy('institution_name')
        ->orderBy('institution_name')
        ->get();

    return view('accreditations.index', compact('accreditations'));
}

    public function create()
    {
        return view('accreditations.create');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'institution_name' => 'required|string|max:255',
        'campus' => 'nullable|string|max:255',
        'activity_type' => 'nullable|string|max:255',
        'start_date' => 'nullable|date',
        'end_date' => 'nullable|date|after_or_equal:start_date',
        'record_date' => 'required|date',
        'programmes' => 'nullable|string',
        'accreditation_status' => 'nullable|string|max:255',
        'notes' => 'nullable|string',
    ]);

    // Create record using validated fields only
    Accreditation::create($validated);

    return redirect()->route('accreditations.index')
                     ->with('success', 'Accreditation record added successfully.');
}


public function edit($id)
{
    $accreditation = Accreditation::findOrFail($id);
    return view('accreditations.edit', compact('accreditation')); // <- must return Blade
}

public function show($id)
{
    $record = Accreditation::findOrFail($id);
    
    // Get all accreditations for the same institution
    $institutionRecords = Accreditation::where('institution_name', $record->institution_name)->get();

    return view('accreditations.show', compact('record', 'institutionRecords'));
}


public function update(Request $request, $id)
{
    $validated = $request->validate([
        'institution_name' => 'required|string|max:255',
        'campus' => 'nullable|string|max:255',
        'activity_type' => 'nullable|string|max:255',
        'start_date' => 'nullable|date',
        'end_date' => 'nullable|date|after_or_equal:start_date',
        'record_date' => 'required|date',
        'programmes' => 'nullable|string',
        'accreditation_status' => 'nullable|string|max:255',
        'notes' => 'nullable|string',
    ]);

   $accreditation = Accreditation::findOrFail($id);
    $accreditation->update($request->all());

    return response()->json([
        'success' => true, // <-- updated key
        'message' => 'Record updated successfully',
        'redirect' => route('accreditations.index')
    ]);

}

public function destroy($id)
{
    $ac = Accreditation::findOrFail($id);
    $ac->delete();

    return response()->json([
        'success' => true,
        'message' => 'Record deleted successfully.',
        'redirect' => route('accreditations.index')
    ]);
}


}
