@if($goal->is_active == 0)
<td><span class="badge bg-label-primary me-1">Active</span></td>
@else
<td><span class="badge bg-label-primary me-1">Deactive</span></td>
@endif