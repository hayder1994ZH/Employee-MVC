@extends('layouts.app')
@section('content')
{{-- Form to add new json string --}}
<form action="{{route('send.text')}}" method="post">
    @csrf
    <textarea name="text" class="input-text" placeholder="{{ '"[{"letter.txt":"Richard"},{"paper.pdf":"jack"},{"test.py":"Johnny"},{"numbers.docx":"jack"}]"' }}" id="" cols="50" rows="10"></textarea>
    {{-- check if response have any error --}}
    @if($errors->any())
    <ul class="error-ul">
        @foreach($errors->all() as $error)
            <li class="error-li">{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <input type="submit" class="button-json">
</form>
{{-- End form --}}
{{-- Div to show json string response formatted if exist --}}
@if ($stringObject)
<div class="json-format">
    <pre>
        {{ $stringObject }}
    </pre>
</div>
@endif
{{-- End div --}}
{{-- Ul to show json response formatted if exists--}}
@if($objects)
    <div class="json-format">
        @foreach ($objects as $object)
            @foreach ($object as $key => $value)
                <p class="person-name">{{ $key }} :</p>
                <ul>
                    @foreach ($value as $filename)
                        <li>{{ $filename }}</li>
                    @endforeach
                </ul>
            @endforeach

        @endforeach
    </div>
@endif
{{-- End Ul --}}
@stop