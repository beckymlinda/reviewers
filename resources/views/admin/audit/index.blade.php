<!-- resources/views/admin/audit/index.blade.php -->
<div class="container mt-4">
    <h4>Audit Trail</h4>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>User</th>
                <th>Action</th>
                <th>Model</th>
                <th>Old Values</th>
                <th>New Values</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($logs as $log)
                <tr>
                    <td>{{ $log->user->name ?? 'System' }}</td>
                    <td>{{ ucfirst($log->action) }}</td>
                    <td>{{ class_basename($log->model_type) }} #{{ $log->model_id }}</td>
                    <td><pre>{{ json_encode(json_decode($log->old_values), JSON_PRETTY_PRINT) }}</pre></td>
<td><pre>{{ json_encode(json_decode($log->new_values), JSON_PRETTY_PRINT) }}</pre></td>

              
            @endforeach
        </tbody>
    </table>

    
</div>
