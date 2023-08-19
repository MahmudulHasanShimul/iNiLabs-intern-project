@extends('website.master')
@section('title')
    Home | To Do Module
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
                            <h3 class="text-center text-light">Task Form</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('task.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Team Member</label>
                                  <span class="text-danger">*</span>
                                  <input type="text" class="form-control" name="name" required>
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Task</label>
                                  <span class="text-danger">*</span>
                                  <textarea class="form-control" name="task" required></textarea>
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Image</label>
                                  <span class="text-success">(If Need)</span>
                                  <input type="file" class="form-control" name="image" accept="image/*">
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Priority</label>
                                  <span class="text-danger">*</span>
                                  <select class="form-control" name="priority" required>
                                    <option value="" selected disabled>Select Priority</option>
                                    <option value="Low Priority">Low Priority</option>
                                    <option value="Medium Priority">Medium Priority</option>
                                    <option value="High Priority">High Priority</option>
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