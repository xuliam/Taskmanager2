<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">
    <i class="fa fa-btn fa-plus"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

           {!! Form::open(['route'=>'projects.store','method' => 'post', 'files'=>'true']) !!}
           <div class="modal-body">
               <div class="container" >

                   <div class="form-group">
                       {!! Form::label('project', 'Project Name', ['class' => 'control-label']) !!}
                       {!! Form::text('project', 'hello', ['class' => 'form-control']) !!}
                   </div>

                   <div class="form-group">
                       {!! Form::label('thumbnail', 'Project Pic', ['class' => 'control-label']) !!}
                       {!! Form::file('thumbnail', ['class'=>'form-control-file']) !!}
                   </div>
               </div>

           </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            {!! Form::close() !!}

        </div>
    </div>
</div>
