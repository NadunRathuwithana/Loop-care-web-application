{{-- Create Modal --}}
<div class="modal fade" id="edit-modal_{{ $data->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Edit User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="edit-user-form" action="{{ url('/edit_admin_users/' . $data->id) }}" method="POST">
                @csrf

                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label" for="first_name">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name"
                                value="{{ $data->first_name }}" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="last_name">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name"
                                value="{{ $data->last_name }}" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                value="{{ $data->email }}" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="role">Role</label>
                            <select class="form-select" id="role" name="role">
                                <option value="Admin" {{ $data->role == 'Admin' ? 'selected' : '' }}>Admin
                                </option>
                                <option value="Medical Specialist"
                                    {{ $data->role == 'Medical Specialist' ? 'selected' : '' }}>Medical Specialist
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
