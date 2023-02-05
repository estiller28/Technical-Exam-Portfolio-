<div>
    <div class="container">
        <div class="section-title">
            <h2>Career Objectives</h2>
            <div class="mb-3">
                <p>Here are the list of my career goals to boost my own growth.</p>
            </div>
            <div style="box-shadow: none" class="info">
                <div class="d-flex justify-content-between">
                    <div>
                        <i class="bi bi-list-check"></i>
                        <h4>List of Careers:</h4>
                        <p>and Objectives</p>
                    </div>
                    <div>
                        <button class="add-entry-btn" data-bs-toggle="modal" data-bs-target="#addNewCareer">
                            Add New Entry
                        </button>
                    </div>
                </div>

                <div class="row">
                    @foreach($careers as $career)
                        <div class="col-md-4 mb-4">
                            <div class="info">
{{--                                <div class="mb-2">--}}
{{--                                    <span>ID:<span class="fw-bold"> {{ $career->id }}</span> </span>--}}
{{--                                </div>--}}
                                <div class="mb-2">
                                    <span>Name:<span class="fw-bold"> {{ $career->name }}</span> </span>
                                </div>
                                <div class="mb-2">
                                    <span>Description:<span class="fw-bold"> {{ $career->description }}</span> </span>
                                </div>
                                <div class="mb-2">
                                    <span>Reason:<span class="fw-bold"> {{ $career->reason }}</span> </span>
                                </div>
                                <div class="mb-2">
                                    <span>Target Date:<span class="fw-bold"> {{ \Carbon\Carbon::parse($career->target_date)->toFormattedDateString() }}</span> </span>
                                </div>
                                <div class="mb-2">
                                    <span>Completed Date:<span class="fw-bold"> {{ \Carbon\Carbon::parse($career->completed_date)->toFormattedDateString() }}</span> </span>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <div style="width: 95px;" class="d-flex justify-content-between">
                                        <a href="#careers" class="cursor-pointer" wire:click="confirmDelete({{ $career->id }})"><i class="bx bx-trash text-danger"></i></a>
                                        <a wire:click="edit({{ $career->id }})" data-bs-toggle="modal" data-bs-target="#editModal" href="#"><i class="bx bx-edit"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Create Modal -->
    <div wire:ignore.self class="modal fade" id="addNewCareer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Career Objective</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="create">
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="name">Name:</label>
                            <input wire:model="name" type="text" class="form-control">

                            @error('name')
                            <span style="font-size: 13px;" class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="description">Description:</label>
                            <input  wire:model="description" type="text" class="form-control">
                            @error('description')
                            <span style="font-size: 13px;" class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="reason">Reason:</label>
                            <input wire:model="reason"  type="text" class="form-control">
                            @error('reason')
                            <span style="font-size: 13px;" class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="target_date">Target Date:</label>
                            <input wire:model="target_date" class="form-control" type="date">
                            @error('target_date')
                            <span style="font-size: 13px;" class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="completed_date">Completed Date:</label>
                            <input wire:model="completed_date" class="form-control" type="date">
                            @error('completed_date')
                            <span style="font-size: 13px;" class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="cancel-btn" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="submit-btn">Save Entry</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

{{--    edit-modal--}}

    <div wire:ignore.self class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editModal">Edit Career Objective</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="update">
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="name">Name:</label>
                            <input wire:model="name" type="text" class="form-control">

                            @error('name')
                            <span style="font-size: 13px;" class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="description">Description:</label>
                            <input  wire:model="description" type="text" class="form-control">
                            @error('description')
                            <span style="font-size: 13px;" class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="reason">Reason:</label>
                            <input wire:model="reason"  type="text" class="form-control">
                            @error('reason')
                            <span style="font-size: 13px;" class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="target_date">Target Date:</label>
                            <input wire:model="target_date" class="form-control" type="date">
                            @error('target_date')
                            <span style="font-size: 13px;" class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="completed_date">Completed Date:</label>
                            <input wire:model="completed_date" class="form-control" type="date">
                            @error('completed_date')
                            <span style="font-size: 13px;" class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="cancel-btn" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="submit-btn">Update Entry</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
