@extends('layouts.html_frame')

@section('content')
<div id='content'>	

    <form action="index.php?page=main" method="post">
        <input type="hidden" name="pselect" value="TRUE">

        <select name="pub" id="pubselect">
            @foreach($accessable_pubs as $pub)
                <option value="{{ $pub->pub->id }}">{{ $pub->pub->name }}</option>
            @endforeach
        </select>

        <input type="submit" value="Kiválaszt!">
    </form>
    
</div>
@endsection