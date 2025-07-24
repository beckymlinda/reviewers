<!DOCTYPE html>
<html>
    <head>


    </head><body>
<div class="container mt-5">
    <h4 class="mb-1 text-muted">Accreditation Records for:</h4>
    <h3 class="text-nche-purple fw-bold mb-4">{{ $record->institution_name }}</h3>

    <a href="#" class="btn btn-outline-secondary mb-4 load-page" data-url="{{ route('accreditations.index') }}">
        ← Back to List
    </a>

    @foreach ($institutionRecords as $ac)
        <div class="card mb-4 border-0 shadow-sm rounded-3">
            {{-- NCHE purple top border accent --}}
            <div class="card-header border-0 bg-white border-start border-5 border-nche-purple">
                <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0 text-muted">
                        <i class="bi bi-calendar-event me-1"></i>
                        Record Date: {{ $ac->record_date }}
                    </h6>
<span class="text-muted">
    <strong class="badge bg-warning text-dark">Status: {{ $ac->accreditation_status ?: 'NA' }}</strong>
</span>
                </div>
            </div>

            <div class="card-body">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="border-start ps-3 border-nche-orange">
                            <p class="mb-2"><strong>Campus:</strong> {{ $ac->campus ?: '—' }}</p>
                            <p class="mb-2"><strong>Activity:</strong> {{ $ac->activity_type ?: '—' }}</p>
                            <p class="mb-0"><strong>Duration:</strong> {{ $ac->start_date }} to {{ $ac->end_date }}</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="border-start ps-3 border-nche-orange">
                            <p class="mb-2"><strong>Programmes:</strong><br>{{ $ac->programmes ?: '—' }}</p>
                            <p class="mb-0"><strong>Notes:</strong><br>{{ $ac->notes ?: '—' }}</p>
                        </div>
                    </div>
                </div>

                <hr class="mt-4 mb-3">

                <div class="text-end">
                    <a href="#" 
                       class="btn btn-sm btn-outline-warning load-page" 
                       data-url="{{ route('accreditations.edit', $ac->id) }}">
                        <i class="bi bi-pencil-square"></i> Edit
                    </a>
                    <button class="btn btn-sm btn-outline-danger delete-btn"
                            data-id="{{ $ac->id }}"
                            data-url="{{ route('accreditations.destroy', $ac->id) }}">
                        <i class="bi bi-trash"></i> Delete
                    </button>
                </div>
            </div>
        </div>
    @endforeach
</div>

</body>
</html>
<style>
.card {
    background-color: #ffffff;
    border-radius: 0.5rem;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
}


    .text-nche-purple {
    color: #52074f !important;
}

.border-nche-purple {
    border-color: #52074f !important;
}

.border-nche-orange {
    border-left: 3px solid #dd8027 !important;
}

.card .card-header {
    border-bottom: none;
    background-color: #fff;
}
body {
    background-color: #f5f3f7; /* Light purple-ish grey (matches #52074f well) */
}

</style>
