<body>
<h1>Quiz edit</h1>

@php
        $arr = explode(PHP_EOL, Storage::get('local'));
        
    @endphp



<form method="post" action="/edit_confirmed">
    @csrf
    <label type="input" for="id">ID</label>
    <input value="{{$id}}" disabled name="id">
    <input type="hidden" value="{{$id}}" name="strId">
    <label for="title">value</label>
    
    <input type="input" value="{{$arr[$id]}}" name="title">
    <input type="submit" value="Submit">
</form>


</body>