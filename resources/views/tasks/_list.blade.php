<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link" id="nav-todo-tab" data-toggle="tab" href="#nav-todo" role="tab" aria-controls="nav-todo" aria-selected="false">todo</a>
        <a class="nav-item nav-link active" id="nav-done-tab" data-toggle="tab" href="#nav-done" role="tab" aria-controls="nav-done" aria-selected="true">done</a>
    </div>
</nav>
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade" id="nav-todo" role="tabpanel" aria-labelledby="nav-todo-tab">
        @if (count($todos))
            <table class="table table-striped">
                @foreach($todos as $todo)
                    <tr>
                        <td>{{$todo->name}}</td>
                        <td>@include('tasks._checkTask')</td>
                    </tr>
                    @endforeach
            </table>
        @endif
    </div>
    <div class="tab-pane fade show active" id="nav-done" role="tabpanel" aria-labelledby="nav-done-tab">
        @if (count($dones))
            <table class="table table-striped">
                @foreach ($dones as $done)
                    <tr>
                        <td>{{$done->name}}</td>
                    </tr>
                @endforeach
            </table>
        @endif
    </div>
</div>
