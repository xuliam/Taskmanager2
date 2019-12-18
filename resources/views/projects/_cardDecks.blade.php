<div class="col-3 my-3">
    <div class="card project-card">
        <ul class="icon-bar">
            <li><i class="fa fa-btn fa-times"></i></li>
            <li><i class="fa fa-btn fa-cog"></i></li>
        </ul>
        <a href="projects/{{$project->id}}">
            <img src="{{asset('storage/pic/'.$project->thumbnail)}}" class="card-img-top" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title text-center">{{$project->name}}</h5>
            </div>
        </a>
    </div>

</div>


