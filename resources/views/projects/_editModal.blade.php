<!-- Modal -->
<div class="modal fade" id="editProjectModal-{{$project->id}}" tabindex="-1" role="dialog" aria-labelledby="editProjectModal-{{$project->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProjectModal-{{$project->id}}Label">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
{!! Form::model($project, ['route' => ['projects.update', $project->id], 'method' => 'patch', 'files'=>'true']) !!}

            <div class="modal-body">
                <div class="container" >

                    <div class="form-group">
                        {!! Form::label('project', 'Project Name', ['class' => 'control-label']) !!}
                        {!! Form::text('project', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('thumbnail', 'Project Pic', ['class' => 'control-label']) !!}
                        {!! Form::file('thumbnail', ['class'=>'form-control-file']) !!}
                    </div>
                    @include('error.error')
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}


        </div>
    </div>
</div>
