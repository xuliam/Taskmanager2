<php
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#editTask-{{ $todo->id }}">
    <i class="fa fa-cog"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="editTask-{{ $todo->id }}" tabindex="-1" role="dialog" aria-labelledby="editTask-{{ $todo->id }}-Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editTask-{{ $todo->id }}-Label">Edit Task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::model($todo, ['route' => ['tasks.update', $todo->id], 'method' => 'patch']) !!}

            <div class="modal-body">
            {!! Form::label('name', 'Task Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}

                {!! Form::label('project', 'Main Project') !!}
                {!! Form::select('project', $projects , $id->id , ['class' => 'form-control']) !!}
            </div>

            <div class="modal-footer">
               {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}

        </div>
    </div>
</div>
