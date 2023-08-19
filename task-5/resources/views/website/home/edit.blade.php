@extends('website.master')
@section('title')
    Edit Task | To Do Module
@endsection

@section('page-contet')
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    @if (Session::get('msg'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ Session::get('msg') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header bg-custom">
                            <h3 class="text-center text-light">Edit Task</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('task.update',['id' => $task->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Team Member</label>
                                    <span class="text-danger">*</span>
                                    <input type="text" class="form-control" name="name" value="{{ $task->name }}"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Task</label>
                                    <span class="text-danger">*</span>
                                    <textarea class="form-control" name="task" required>{{ $task->task }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Image</label>
                                    <span class="text-success">(If Need)</span>
                                    <input type="file" class="form-control" name="image" accept="image/*">
                                    <img src="{{ asset('/') }}{{ $task->image }}" alt="" width="70px">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Priority</label>
                                    <span class="text-danger">*</span>
                                    <select class="form-control" name="priority" value="{{ $task->priority }}" required>
                                        <option value="Low Priority"
                                            {{ $task->priority == 'Low Priority' ? 'selected' : '' }}>Low Priority
                                        </option>
                                        <option value="Medium Priority"
                                            {{ $task->priority == 'Medium Priority' ? 'selected' : '' }}>Medium Priority
                                        </option>
                                        <option value="High Priority"
                                            {{ $task->priority == 'High Priority' ? 'selected' : '' }}>High Priority
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Working Status</label>
                                    <span class="text-danger">*</span>
                                    <select class="form-control" name="working_status" value="{{ $task->working_status }}" required>
                                        <option value="Pending" {{ $task->working_status == 'Pending' ? 'selected' : '' }}>
                                            Pending</option>
                                        <option value="Proccessing"
                                            {{ $task->working_status == 'Proccessing' ? 'selected' : '' }}>Proccessing
                                        </option>
                                        <option value="Complete"
                                            {{ $task->working_status == 'Complete' ? 'selected' : '' }}>Complete</option>
                                    </select>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
