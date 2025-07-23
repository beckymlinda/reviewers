<?php

use Illuminate\Support\Facades\Auth;
use App\Models\AuditTrail;

function log_audit($action, $model, $oldData = null, $newData = null)
{
    AuditTrail::create([
        'user_id'    => Auth::id(),
        'action'     => $action,
        'model_type' => get_class($model),
        'model_id'   => $model->id,
        'old_values' => $oldData ? json_encode((array) $oldData) : null,
        'new_values' => $newData ? json_encode((array) $newData) : null,
    ]);
}


