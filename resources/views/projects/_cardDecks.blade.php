<div class="col-3 my-3">
    <div class="card project-card">
        <ul class="icon-bar">
            <li>
                {!! Form::open(['route' => ['projects.destroy', $project->id], 'method' => 'delete']) !!}
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-btn fa-times"></i>
                    </button>
                {!! Form::close() !!}
            </li>
            <li>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editProjectModal-{{$project->id}}">
                    <i class="fa fa-btn fa-cog"></i>
                </button>

            </li>
        </ul>
        <a href="projects/{{$project->id}}">
            <img src="{{asset('storage/pic/'.$project->thumbnail)}}" class="card-img-top" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title text-center">{{$project->name}}</h5>
            </div>
        </a>
    </div>
 @include('projects._editModal')
</div>
