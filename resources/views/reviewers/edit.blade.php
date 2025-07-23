<div class="container">
    <h2>Edit Reviewer</h2>
    <form method="POST" action="{{ route('reviewers.update', $reviewer->id) }}">
        @include('reviewers.partials.form')
    </form>
</div>
