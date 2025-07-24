<div class="container mt-4">
    <h4>Edit Accreditation Record</h4>

    <form method="POST" 
          action="{{ route('accreditations.update', $accreditation->id) }}" 
          class="edit-form">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Institution Name</label>
            <input type="text" name="institution_name" class="form-control" 
                   value="{{ $accreditation->institution_name }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Campus</label>
            <input type="text" name="campus" class="form-control" 
                   value="{{ $accreditation->campus }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Activity Type</label>
            <input type="text" name="activity_type" class="form-control" 
                   value="{{ $accreditation->activity_type }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Start Date</label>
            <input type="date" name="start_date" class="form-control" 
                   value="{{ $accreditation->start_date }}">
        </div>

        <div class="mb-3">
            <label class="form-label">End Date</label>
            <input type="date" name="end_date" class="form-control" 
                   value="{{ $accreditation->end_date }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Record Date</label>
            <input type="date" name="record_date" class="form-control" 
                   value="{{ $accreditation->record_date }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Programmes</label>
            <textarea name="programmes" class="form-control" rows="3">{{ $accreditation->programmes }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Status</label>
            <input type="text" name="accreditation_status" class="form-control" 
                   value="{{ $accreditation->accreditation_status }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Notes</label>
            <textarea name="notes" class="form-control" rows="3">{{ $accreditation->notes }}</textarea>
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">
                <i class="bi bi-save"></i> Update Record
            </button>
            <a href="#" class="btn btn-secondary load-page" 
               data-url="{{ route('accreditations.index') }}">
                <i class="bi bi-arrow-left-circle"></i> Cancel
            </a>
        </div>
    </form>
</div>
