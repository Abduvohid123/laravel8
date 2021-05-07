@extends('layout.row')
@section('row')
        <div class="col-6 offset-3">
            <div class="card">
            <div class="card-header">
                File Yuklash
            </div>
            <div class="card-body">
                <form action="{{route('file')}}" method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                        <input type="file" name="file">
                    </div>
                   <div class="form-group">
                       <button type="submit">
                           Submit
                       </button>
                   </div>
                </form>
            </div>
        </div>
    </div>
@endsection
