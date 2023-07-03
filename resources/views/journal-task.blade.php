<!---->

@extends('layouts.journal')

@section('content')
    
    @if (count($books) > 0)

        @foreach ($journals as $journal)
        <div>
            <img src="{{URL::asset('storage/images/' . $journal->images)}}">
        </div>
        <div>
            <div>
                <h4>
                    {{ $journal->journal_title }}
                </h4>
                <div>                   
                    {{ $journal->date_of_wirting }}
                </div>                   
                <p>
                    {{ $journal->journal_description }}
                </p>
            </div>
        </div>
        @endforeach
    
    @endif
    
@endsection

