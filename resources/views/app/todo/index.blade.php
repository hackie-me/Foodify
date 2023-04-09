@extends('main')

@push('title')
    <title>Dashboard</title>
@endpush

@section('main_content')
    <div class="row">
        <div class="col-md-12">
            <div class="ms-panel">
                <div class="ms-panel-body">
                    <div class="row">
                        <div class="col-xl-3 col-md-12">
                            <form class="ms-add-task-block-2">
                                <div class="form-group d-flex m-0 fs-14 clearfix">
                                    <input type="text" class="form-control mr-2 fs-14 float-left" id="task-block-2"
                                           name="todo-block"
                                           placeholder="Add Task Block" value="">
                                    <button type="submit" class="ms-btn-icon bg-primary float-right"><i
                                            class="material-icons text-disabled">add</i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <ul class="ms-todo-options">
                                <li><a href="#" class="ms-text-primary show-all-todo"> All Tasks </a>
                                </li>
                                <li><a href="#" class="text-disabled show-archived"> Archived </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-5 col-md-6">
                            <ul class="ms-todo-options ms-todo-nav">
                                <li>
                                    <a href="{{url('/')}}/app/todo/remove-all-completed" onclick="confirm('Are you sure you want to Remove All Completed?')" class="ms-text-warning"> <i
                                            class="material-icons">playlist_add_check</i> Remove
                                        Completed</a>
                                </li>
                                <li>
                                    <a href="{{url('/')}}/app/todo/remove-all" onclick="confirm('Are you sure you want to Remove All Blocks?')" class="ms-text-danger"> <i class="material-icons">delete</i> Clear
                                        All</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row ms-todo-list">
        @foreach($todoBlocks as $block)
            <div
                class="col-xl-4 col-md-6 col-sm-12 ms-qa-card ms-deletable {{  $block->is_archived == "1" ? "archived" : "not-archived" }}">
                <div class="ms-card">
                    <div class="ms-card-header clearfix">
                        <h6 class="ms-card-title">{{$block->name}}</h6>
                        <input type="hidden" class="ms-card-block-id" value="{{$block->id}}"></input>
                        <button data-toggle="tooltip" data-placement="left" title="Add a Task to this block"
                                class="ms-add-task-to-block ms-btn-icon float-right"><i
                                class="material-icons text-disabled">add</i>
                        </button>
                    </div>
                    <div class="ms-card-body">
                        <ul class="ms-list ms-task-block">
                            @foreach($block->todoItems as $task)
                                @if($task->todo_blocks_id == $block->id)
                                    <li class="ms-list-item ms-qa-task ms-to-do-task ms-deletable {{  $task->is_completed == "1" ? "task-complete" : "" }} ">
                                        <label class="ms-checkbox-wrap ms-todo-complete">
                                            <input type="checkbox"
                                                   value="" {{$task->is_completed == 1 ? "checked" : ""}} > <i
                                                class="ms-checkbox-check"></i>
                                        </label> <span> {{$task->name}} </span>
                                        <input type="hidden" class="ms-card-task-id" value="{{$task->id}}"></input>
                                        <button type="submit" class="close"><i
                                                class="flaticon-trash ms-delete-trigger"> </i>
                                        </button>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="ms-card-footer clearfix">
                        <a href="#" class="text-disabled mr-2 ms-archive-trigger"> <i class="flaticon-archive"> </i>
                            Archive</a>
                        <a href="#" class="text-disabled ms-delete-trigger float-right"> <i class="flaticon-trash"> </i>
                            Delete</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection

@section('page-scripts')

@endsection
