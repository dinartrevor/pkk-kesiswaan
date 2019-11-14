<ul>
  @foreach ($extracurricular as $ex)
  <li><a href="{{ url('/members/'.$ex->id) }}">{{$ex->name}}</a></li>
  @endforeach
</ul>