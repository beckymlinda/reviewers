<div class="card shadow-sm">
    <div class="card-header {{ isset($reviewer) ? 'bg-warning' : 'bg-primary' }} text-white">
        <h5 class="mb-0">
            {{ isset($reviewer) ? 'Edit Reviewer - ' . $reviewer->full_name : 'Add New Reviewer' }}
        </h5>
    </div>

    <div class="card-body">
        @csrf
        @if(isset($reviewer))
            @method('PUT')
        @endif

        <div class="row g-3">
            <!-- Title Dropdown -->
            <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <select name="title" id="title" class="form-select">
                    <option value="">-- Select Title --</option>
                    @php
                        $titles = ['Mr', 'Mrs', 'Ms', 'Dr', 'Prof', 'Rev', 'Mx'];
                        $currentTitle = old('title', $reviewer->title ?? '');
                    @endphp
                    @foreach($titles as $title)
                        <option value="{{ $title }}" {{ $currentTitle === $title ? 'selected' : '' }}>
                            {{ $title }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Full Name -->
            <div class="col-md-6">
                <label for="full_name" class="form-label">Full Name <span class="text-danger">*</span></label>
                <input type="text" id="full_name" name="full_name" class="form-control" 
                    value="{{ old('full_name', $reviewer->full_name ?? '') }}" required>
            </div>

            <!-- Gender Dropdown -->
            <div class="col-md-6">
                <label for="gender" class="form-label">Gender</label>
                <select name="gender" id="gender" class="form-select">
                    <option value="">-- Select Gender --</option>
                    @php
                        $genders = ['male' => 'Male', 'female' => 'Female', 'other' => 'Other'];
                        $currentGender = old('gender', $reviewer->gender ?? '');
                    @endphp
                    @foreach($genders as $key => $label)
                        <option value="{{ $key }}" {{ $currentGender === $key ? 'selected' : '' }}>
                            {{ $label }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Training Status Dropdown -->
            <div class="col-md-6">
                <label for="training_status" class="form-label">Training Status <span class="text-danger">*</span></label>
                <select name="training_status" id="training_status" class="form-select" required>
                    <option value="">-- Select Training Status --</option>
                    @php
                        $trainingOptions = ['Trained' => 'Trained', 'Not Trained' => 'Not Trained'];
                        $currentTraining = old('training_status', $reviewer->training_status ?? '');
                    @endphp
                    @foreach($trainingOptions as $key => $label)
                        <option value="{{ $key }}" {{ $currentTraining === $key ? 'selected' : '' }}>
                            {{ $label }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Qualification -->
            <div class="col-md-6">
                <label for="qualification" class="form-label">Qualification</label>
                <input type="text" id="qualification" name="qualification" class="form-control"
                    value="{{ old('qualification', $reviewer->qualification ?? '') }}">
            </div>

            <!-- Field of Study -->
            <div class="col-md-6">
                <label for="field_of_study" class="form-label">Field of Study</label>
                <input type="text" id="field_of_study" name="field_of_study" class="form-control"
                    value="{{ old('field_of_study', $reviewer->field_of_study ?? '') }}">
            </div>

            <!-- Area of Specialisation -->
            <div class="col-md-6">
                <label for="area_of_specialisation" class="form-label">Area of Specialisation</label>
                <input type="text" id="area_of_specialisation" name="area_of_specialisation" class="form-control"
                    value="{{ old('area_of_specialisation', $reviewer->area_of_specialisation ?? '') }}">
            </div>

            <!-- Awarding Institution -->
            <div class="col-md-6">
                <label for="awarding_institution" class="form-label">Awarding Institution</label>
                <input type="text" id="awarding_institution" name="awarding_institution" class="form-control"
                    value="{{ old('awarding_institution', $reviewer->awarding_institution ?? '') }}">
            </div>

            <!-- Year Obtained -->
            <div class="col-md-6">
                <label for="year_obtained" class="form-label">Year Obtained</label>
                <input type="number" id="year_obtained" name="year_obtained" class="form-control" min="1900" max="{{ date('Y') }}"
                    value="{{ old('year_obtained', $reviewer->year_obtained ?? '') }}">
            </div>

            <!-- Institution of Work -->
            <div class="col-md-6">
                <label for="institution_of_work" class="form-label">Institution of Work</label>
                <input type="text" id="institution_of_work" name="institution_of_work" class="form-control"
                    value="{{ old('institution_of_work', $reviewer->institution_of_work ?? '') }}">
            </div>

            <!-- Designation -->
            <div class="col-md-6">
                <label for="designation" class="form-label">Designation</label>
                <input type="text" id="designation" name="designation" class="form-control"
                    value="{{ old('designation', $reviewer->designation ?? '') }}">
            </div>

            <!-- Assessment Review Count -->
            <div class="col-md-6">
                <label for="assessment_review_count" class="form-label">Assessment Review Count</label>
                <input type="number" id="assessment_review_count" name="assessment_review_count" class="form-control" min="0"
                    value="{{ old('assessment_review_count', $reviewer->assessment_review_count ?? '') }}">
            </div>

            <!-- Mobile Phone -->
            <div class="col-md-6">
                <label for="mobilephone" class="form-label">Mobile Phone</label>
                <input type="text" id="mobilephone" name="mobilephone" class="form-control"
                    value="{{ old('mobilephone', $reviewer->mobilephone ?? '') }}">
            </div>

            <!-- Email Address -->
            <div class="col-md-6">
                <label for="emailaddress" class="form-label">Email Address</label>
                <input type="email" id="emailaddress" name="emailaddress" class="form-control"
                    value="{{ old('emailaddress', $reviewer->emailaddress ?? '') }}">
            </div>

            <!-- Physical Address -->
            <div class="col-md-6">
                <label for="physicaladdress" class="form-label">Physical Address</label>
                <input type="text" id="physicaladdress" name="physicaladdress" class="form-control"
                    value="{{ old('physicaladdress', $reviewer->physicaladdress ?? '') }}">
            </div>

            <!-- Postal Address -->
            <div class="col-md-6">
                <label for="postal_address" class="form-label">Postal Address</label>
                <input type="text" id="postal_address" name="postal_address" class="form-control"
                    value="{{ old('postal_address', $reviewer->postal_address ?? '') }}">
            </div>

            <!-- Place of Residence -->
            <div class="col-md-6">
                <label for="place_of_residence" class="form-label">Place of Residence</label>
                <input type="text" id="place_of_residence" name="place_of_residence" class="form-control"
                    value="{{ old('place_of_residence', $reviewer->place_of_residence ?? '') }}">
            </div>
        </div>

        <div class="mt-4 d-flex justify-content-between">
            <button type="submit" class="btn btn-success px-4">
                {{ isset($reviewer) ? 'Save Changes' : 'Create Reviewer' }}
            </button>
            <a href="#" class="btn btn-secondary px-4 load-page" data-url="{{ route('reviewers.index') }}">
                Cancel
            </a>
        </div>
    </div>
</div>
