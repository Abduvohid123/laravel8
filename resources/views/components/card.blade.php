<div>


    <div class="card bg-dark">
        <div class="card-header">
            Salom {{$name}}
        </div>
        <div class="card-body bg-dark">
            <ul class="list-group">
                @foreach($massiv as $item)
                    <li class="list-group-item bg-dark">{{$item}}</li>
                @endforeach
            </ul>
        </div>

    </div>


</div>
