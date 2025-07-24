<div class="container mt-4">
    <h2 class="mb-4">Accredited Institutions</h2>

    <a href="#" class="btn btn-primary mb-3 load-page" data-url="{{ route('accreditations.create') }}">
        <i class="bi bi-plus-circle"></i> Add New Record
    </a>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Institution</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($accreditations as $ac)
                <tr>
                    <td>{{ $ac->institution_name }}</td>
                    <td>
                        <a href="#" 
                           class="btn btn-sm btn-info load-page mb-1" 
                           data-url="{{ route('accreditations.show', $ac->id) }}">
                           <i class="bi bi-eye"></i> View
                        </a>

                        <a href="#" 
                           class="btn btn-sm btn-warning load-page mb-1" 
                           data-url="{{ route('accreditations.edit', $ac->id) }}">
                           <i class="bi bi-pencil-square"></i> Edit
                        </a>

                        <button  
                            class="btn btn-sm btn-danger delete-btn mb-1" 
                            data-id="{{ $ac->id }}" 
                            data-url="{{ route('accreditations.destroy', $ac->id) }}">
                            <i class="bi bi-trash"></i> Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>

    document.addEventListener('submit', function (e) {
    const form = e.target;
    if (form.classList.contains('delete-form')) {
        e.preventDefault();
        if (confirm('Are you sure?')) {
            fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': form.querySelector('[name="_token"]').value,
                    'X-Requested-With': 'XMLHttpRequest',
                },
                body: new URLSearchParams(new FormData(form))
            })
            .then(res => res.text())
            .then(html => {
                document.querySelector('.main-panel').innerHTML = html;
            });
        }
    }
});

</script>