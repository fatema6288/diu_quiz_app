<div>
    <div class="dropdown-content">
        @foreach ($categories as $categorie)
        <a href="{{ route('catJobPeparation',$categorie->id)}}">{{$categorie->cat_name}}</a>
        @endforeach
        <a href="{{ route('allTeacher')}}">All Job Peparation</a>
    </div>
</div>
