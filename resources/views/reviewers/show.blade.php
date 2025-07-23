<div class="container py-4">
    <h2 class="mb-4">Reviewer Details</h2>

    <div class="row g-4">
        <!-- Personal Info Card -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Personal Information</h5>
                </div>
                <div class="card-body">
                    <p><strong>Name:</strong> {{ $reviewer->full_name }}</p>
                    <p><strong>Title:</strong> {{ $reviewer->title ?? 'N/A' }}</p>
                    <p><strong>Gender:</strong> {{ ucfirst($reviewer->gender) ?? 'N/A' }}</p>
                    <p><strong>Place of Residence:</strong> {{ $reviewer->place_of_residence ?? 'N/A' }}</p>
                    <p><strong>Physical Address:</strong> {{ $reviewer->physicaladdress ?? 'N/A' }}</p>
                    <p><strong>Postal Address:</strong> {{ $reviewer->postal_address ?? 'N/A' }}</p>
                </div>
            </div>
        </div>

        <!-- Contact Info Card -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Contact Information</h5>
                </div>
                <div class="card-body">
                    <p><strong>Email Address:</strong> {{ $reviewer->emailaddress ?? 'N/A' }}</p>
                    <p><strong>Mobile Phone:</strong> {{ $reviewer->mobilephone ?? 'N/A' }}</p>
                    <p><strong>Institution of Work:</strong> {{ $reviewer->institution_of_work ?? 'N/A' }}</p>
                    <p><strong>Designation:</strong> {{ $reviewer->designation ?? 'N/A' }}</p>
                </div>
            </div>
        </div>

        <!-- Qualifications Card -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-0">Qualifications</h5>
                </div>
                <div class="card-body">
                    <p><strong>Qualification:</strong> {{ $reviewer->qualification ?? 'N/A' }}</p>
                    <p><strong>Field of Study:</strong> {{ $reviewer->field_of_study ?? 'N/A' }}</p>
                    <p><strong>Area of Specialisation:</strong> {{ $reviewer->area_of_specialisation ?? 'N/A' }}</p>
                    <p><strong>Awarding Institution:</strong> {{ $reviewer->awarding_institution ?? 'N/A' }}</p>
                    <p><strong>Year Obtained:</strong> {{ $reviewer->year_obtained ?? 'N/A' }}</p>
                </div>
            </div>
        </div>

        <!-- Professional Info Card -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-secondary text-white">
                    <h5 class="mb-0">Professional Info</h5>
                </div>
                <div class="card-body">
                    <p><strong>Training Status:</strong> {{ $reviewer->training_status ?? 'N/A' }}</p>
                    <p><strong>Assessment Review Count:</strong> {{ $reviewer->assessment_review_count ?? 0 }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
       <a href="#" 
   class="btn btn-warning load-page" 
   data-url="{{ route('reviewers.edit', $reviewer->id) }}">
   <i class="bi bi-pencil-square"></i> Edit
</a>

    </div>
</div>

