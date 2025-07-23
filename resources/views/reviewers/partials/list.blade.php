<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Field of Study</th>
            <th>Training Status</th>
            <th>Review Count</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($reviewers as $reviewer)
            <tr>
                <td>{{ $reviewer->full_name }}</td>
                <td>{{ $reviewer->field_of_study ?? '-' }}</td>
                <td>{{ $reviewer->training_status ?? '-' }}</td>
                <td>{{ $reviewer->assessment_review_count ?? 0 }}</td>
                <td>
                    <a href="#" class="btn btn-sm btn-info load-page" data-url="{{ route('reviewers.show', $reviewer->id) }}">View</a>
                    <a href="#" class="btn btn-sm btn-warning load-page" data-url="{{ route('reviewers.edit', $reviewer->id) }}">Edit</a>

                    <form action="{{ route('reviewers.destroy', $reviewer->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="5" class="text-center">No reviewers found.</td></tr>
        @endforelse
    </tbody>
</table>

<div class="d-flex justify-content-center">
    {{-- Bootstrap 5 Pagination --}}
    {!! $reviewers->links() !!}
</div>
