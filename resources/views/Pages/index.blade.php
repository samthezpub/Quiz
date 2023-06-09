<h1>Quiz'es</h1>
<a href="{{route('create')}}">Create Quiz</a>

@php
    function DoListFromFile()
        {
            if (Storage::fileExists('local')) {
                $arr = explode(PHP_EOL, Storage::get('local'));
                return $arr; 
            }
            return 0;
        }
        $arr = DoListFromFile();
    
@endphp

<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
    </tr>
    
        
        
        @if($arr != 0)
            @for($i = 0; $i < count($arr); $i++)
            {
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$arr[$i]}}</td>
                    <td><a href="{{route('edit', $i)}}">Редактировать</a></td>
                    <td><a href="{{route('delete', $i)}}">Удалить</a></td>
                </tr>
            }
            @endfor
        @endif
        
        
</table>