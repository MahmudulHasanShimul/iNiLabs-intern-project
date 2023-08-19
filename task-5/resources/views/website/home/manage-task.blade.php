@extends('website.master')
@section('title')
    Manage Task | To Do Module
@endsection

@section('page-contet')
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    @if (Session::get('msg'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ Session::get('msg') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @elseif(Session::get('noti'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ Session::get('noti') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header bg-custom">
                            <h3 class="text-center text-light">Tasks List</h3>
                        </div>
                        <div class="card-body bg-custom">
                            <table class="table table-dark table-striped table-bordered">
                                <thead class="text-center">
                                    <tr>
                                        <th>SL NO</th>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Task</th>
                                        <th>Document</th>
                                        <th>Priority</th>
                                        <th>Working Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($tasks as $task)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $task->date }}</td>
                                            <td>{{ $task->name }}</td>
                                            <td>{{ $task->task }}</td>
                                            <td>
                                                <img src="{{ asset('/') }}{{ $task->image }}" alt="not uploaded"
                                                    height="40px">
                                            </td>
                                            <td class="text-center">
                                                @if ($task->priority == 'Low Priority')
                                                    <p class="bg-primary text-light text-center rounded-1"
                                                        style="font-size: 12px; width: 100px">{{ $task->priority }}</p>
                                                @elseif($task->priority == 'Medium Priority')
                                                    <p class="bg-success text-light text-center rounded-1"
                                                        style="font-size: 12px; width: 100px">{{ $task->priority }}</p>
                                                @else
                                                    <p class="bg-danger text-light text-center rounded-1"
                                                        style="font-size: 12px; width: 100px">{{ $task->priority }}</p>
                                                @endif
                                            </td>
                                            <td>{{ $task->working_status }}</td>
                                            <td>
                                                <a href="{{ route('task.edit', ['id' => $task->id]) }}"
                                                    class="btn btn-success" title="Edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="{{ route('task.delete',['id' => $task->id]) }}" class="btn btn-danger" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
