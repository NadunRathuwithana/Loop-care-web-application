<div class="dropdown z-50">
    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
        data-bs-toggle="dropdown">
        <i class="bx bx-dots-vertical-rounded"></i>
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit-modal"><i
                class="bx bx-edit-alt me-1"></i> Edit</a>
        

        <form method="POST" action="{{route('goal.goal-status',$goal->id)}}" class="d-inline"
            onsubmit="return submitDeleteForm(this)">
            @csrf
            @method('delete')
            <button type="submit" class="btn dropdown-item">
                <i class='bx bx-info-circle'> Deactivate
            </button>
        </form>
        <a class="dropdown-item text-danger" href="javascript:void(0);"><i
                class="bx bx-trash me-1"></i> Delete</a>
    </div>
</div>
