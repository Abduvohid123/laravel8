<div>


    <div class="card">
        <div class="card-header">
            Salom {{$name}}
        </div>
        <div class="card-body">
            <ul>
                @foreach($massiv as $item)
                    <li>{{$item}}</li>
                @endforeach
            </ul>
        </div>

    </div>


</div>
