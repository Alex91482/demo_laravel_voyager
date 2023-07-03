<!-- resources/views/articl-task.blade.php -->

@extends('layouts.article')

@section('content')
    
    @if ($article != null )
    <div>
        <div>
            <div>
                {{ $article->create_date }}             
            </div>
            <h2>
                {{ $article->article_title }}
            </h2>
        </div>
        <div>
            <p>
                <img src="{{URL::asset('storage/images/' . $article->images)}}">
                {{ $article->article_text }}          
            </p>
        </div>
    </div>
    @endif
    
@endsection

