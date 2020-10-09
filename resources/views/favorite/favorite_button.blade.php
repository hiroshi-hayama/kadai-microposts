@if (Auth::user()->is_favoriting($micropost->id))
    {{-- unfavoriteボタンのフォーム --}}
    {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavorite', ['class' => "btn-success btn-sm"]) !!}
    {!! Form::close() !!}
@else
    {{-- favoriteボタンのフォーム --}}
    {!! Form::open(['route' => ['favorites.favorite', $micropost->id], 'method' => 'store']) !!}
        {!! Form::submit('Favorite', ['class' => 'btn btn-light btn-sm']) !!}
    {!! Form::close() !!}
@endif
