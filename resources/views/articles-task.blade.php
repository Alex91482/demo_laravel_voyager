<!-- resources/views/article-task.blade.php -->

@extends('layouts.articles')

@section('content')
    
    @if (count($articles) > 0)
    <div>
        <ul>
            @foreach ($articles as $article)          
            <li>
                <div>
                    {{ $article->create_date }}
                </div>
                <a href="{{URL::asset('articles/' . $article->id)}}">
                    <h4>
                        {{ $article->article_title }}
                    </h4>
                </a>
            </li> 
            @endforeach            
        </ul>
    </div>
    @endif
    
@endsection

