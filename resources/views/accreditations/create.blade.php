 
<div class="container mt-4">
    <h2>Add Accreditation Record</h2>
    <form method="POST" action="{{ route('accreditations.store') }}">
        @csrf
        <div class="row mb-3">
            <label class="form-label">Institution Name</label>
            <input type="text" name="institution_name" class="form-control" required>
        </div>
        <div class="row mb-3">
            <label class="form-label">Campus</label>
            <input type="text" name="campus" class="form-control">
        </div>
        <div class="row mb-3">
            <label class="form-label">Activity Type</label>
            <input type="text" name="activity_type" class="form-control">
        </div>
        <div class="row mb-3">
            <label class="form-label">Start Date</label>
            <input type="date" name="start_date" class="form-control">
        </div>
        <div class="row mb-3">
            <label class="form-label">End Date</label>
            <input type="date" name="end_date" class="form-control">
        </div>
        <div class="row mb-3">
            <label class="form-label">Record Date</label>
            <input type="date" name="record_date" class="form-control" required>
        </div>
        <div class="row mb-3">
            <label class="form-label">Programmes</label>
            <textarea name="programmes" class="form-control"></textarea>
        </div>
        <div class="row mb-3">
            <label class="form-label">Accreditation Status</label>
            <input type="text" name="accreditation_status" class="form-control">
        </div>
        <div class="row mb-3">
            <label class="form-label">Notes</label>
            <textarea name="notes" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Save Record</button>
    </form>
</div>
