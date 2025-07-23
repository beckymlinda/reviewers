<?php
namespace App\Http\Controllers;

use App\Models\Reviewer;
use Illuminate\Http\Request;
use App\Models\AuditTrail;
 

class ReviewerController extends Controller
{
    
    /**
     * Display a listing of the reviewers.
     */
    public function index()
    {
        $reviewers = Reviewer::orderBy('full_name')->get();
        return view('reviewers.index', compact('reviewers'));
    }

    /**
     * Show the form for creating a new reviewer.
     */
    public function create()
    {
        return view('reviewers.create');
    }

    /**
     * Store a newly created reviewer in storage.
     */
   public function store(Request $request)
{
    $validated = $request->validate([
        'full_name' => 'required|string|max:255',
        'title' => 'nullable|string|max:100',
        'gender' => 'nullable|in:male,female,other',
        'qualification' => 'nullable|string|max:255',
        'field_of_study' => 'nullable|string|max:255',
        'area_of_specialisation' => 'nullable|string|max:255',
        'awarding_institution' => 'nullable|string|max:255',
        'year_obtained' => 'nullable|integer|min:1900|max:' . date('Y'),
        'institution_of_work' => 'nullable|string|max:255',
        'designation' => 'nullable|string|max:255',
        'assessment_review_count' => 'nullable|integer|min:0',
        'mobilephone' => 'nullable|string|max:20',
        'emailaddress' => 'nullable|email|max:255',
        'physicaladdress' => 'nullable|string',
        'postal_address' => 'nullable|string',
        'place_of_residence' => 'nullable|string|max:255',
        'training_status' => 'required|in:Trained,Not Trained',
    ]);

    // Create reviewer
    $reviewer = Reviewer::create($validated);

    // Log new values only
    log_audit('created reviewer', $reviewer, null, $reviewer->toArray());

    if ($request->ajax()) {
        return response()->json([
            'success' => true,
            'message' => 'Reviewer added successfully!',
            'redirect' => route('reviewers.index'),
        ]);
    }

    return redirect()->route('reviewers.index')->with('success', 'Reviewer added successfully!');
}

    /**
     * Display the specified reviewer.
     */
    public function show(Reviewer $reviewer)
    {
        return view('reviewers.show', compact('reviewer'));
    }

    /**
     * Show the form for editing the specified reviewer.
     */
   public function edit(Reviewer $reviewer, Request $request)
{
    if ($request->ajax()) {
        return view('reviewers.edit', compact('reviewer'));
    }

    return view('reviewers.edit', compact('reviewer'));
}

    /**
     * Update the specified reviewer in storage.
     */
 public function update(Request $request, Reviewer $reviewer)
{
    $validated = $request->validate([
        'full_name' => 'required|string|max:255',
        'title' => 'nullable|string|max:100',
        'gender' => 'nullable|in:male,female,other',
        'qualification' => 'nullable|string|max:255',
        'field_of_study' => 'nullable|string|max:255',
        'area_of_specialisation' => 'nullable|string|max:255',
        'awarding_institution' => 'nullable|string|max:255',
        'year_obtained' => 'nullable|integer|min:1900|max:' . date('Y'),
        'institution_of_work' => 'nullable|string|max:255',
        'designation' => 'nullable|string|max:255',
        'assessment_review_count' => 'nullable|integer|min:0',
        'mobilephone' => 'nullable|string|max:20',
        'emailaddress' => 'nullable|email|max:255',
        'physicaladdress' => 'nullable|string',
        'postal_address' => 'nullable|string',
        'place_of_residence' => 'nullable|string|max:255',
        'training_status' => 'required|in:Trained,Not Trained',
    ]);

    $old = $reviewer->toArray();

    $reviewer->update($validated);

    $new = $reviewer->toArray();

    // Filter out unchanged fields
    $oldChanges = [];
    $newChanges = [];
    foreach ($validated as $key => $value) {
        if (($old[$key] ?? null) != $new[$key]) {
            $oldChanges[$key] = $old[$key] ?? null;
            $newChanges[$key] = $new[$key];
        }
    }

    // Log only if something changed
    if (!empty($oldChanges)) {
        log_audit('updated reviewer', $reviewer, $oldChanges, $newChanges);
    }

    return redirect()->route('reviewers.index')->with('success', 'Reviewer updated successfully!');
}


    /**
     * Remove the specified reviewer from storage.
     */public function destroy(Reviewer $reviewer)
{
    // Capture old values before deletion
    $old = $reviewer->toArray();

    // Perform delete
    $reviewer->delete();

    // Log deletion
    log_audit('deleted reviewer', $reviewer, $old, null);

    return redirect()->route('reviewers.index')->with('success', 'Reviewer deleted.');
}

}
