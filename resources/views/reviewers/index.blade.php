<div class="container">
    <h2 class="mb-4">Reviewers List</h2>

    <input type="text" id="searchInput" class="form-control mb-3" placeholder="Search by Name, Field, or Status">

    <a href="#" 
       class="btn btn-primary mb-3 load-page" 
       data-url="{{ route('reviewers.create') }}">
       Add New Reviewer
    </a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped" id="reviewersTable">
        <thead>
            <tr>
                <th>#</th> 
                <th>Name</th>
                <th>Field of Study</th>
                <th>Training Status</th>
                <th>Review Count</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($reviewers as $index => $reviewer)
            <tr>
                <td>{{ $index + 1 }}</td> 
                <td>{{ $reviewer->full_name }}</td>
                <td>{{ $reviewer->field_of_study }}</td>
                <td>{{ $reviewer->training_status }}</td>
                <td>{{ $reviewer->assessment_review_count }}</td>
                <td>
                    <a href="#" class="btn btn-sm btn-info load-page" data-url="{{ route('reviewers.show', $reviewer->id) }}">View</a>
                    <a href="#" class="btn btn-sm btn-warning load-page" data-url="{{ route('reviewers.edit', $reviewer->id) }}">Edit</a>
                    <form action="{{ route('reviewers.destroy', $reviewer->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<style>
    <style>
  #searchInput {
    max-width: 400px;
    margin-bottom: 1rem;
    padding: 10px 20px;
    font-size: 1.1rem;
    border: 2px solid #52074f; /* NCHE purple */
    border-radius: 30px;
    box-shadow: 0 2px 5px rgba(82, 7, 79, 0.2);
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
  }

  #searchInput:focus {
    outline: none;
    border-color: #dd8027; /* Orange accent */
    box-shadow: 0 0 8px #dd8027;
  }

  /* Placeholder color */
  #searchInput::placeholder {
    color: #aaa;
    font-style: italic;
  }
</style>

<input 
  type="text" 
  id="searchInput" 
  class="form-control mx-auto d-block" 
  placeholder="Search by Name, Field, or Status" 
/>

</style>

<script>
    // Simple client-side search filter
    document.getElementById('searchInput').addEventListener('keyup', function() {
        let filter = this.value.toLowerCase();
        let rows = document.querySelectorAll('#reviewersTable tbody tr');

        rows.forEach(row => {
            let name = row.cells[1].textContent.toLowerCase();
            let field = row.cells[2].textContent.toLowerCase();
            let status = row.cells[3].textContent.toLowerCase();

            if (name.includes(filter) || field.includes(filter) || status.includes(filter)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
</script>
