 
<div class="container">
    <h2>Add Reviewer</h2>
    <form method="POST" action="{{ route('reviewers.store') }}">
        @include('reviewers.partials.form')
    </form>
</div>
 
