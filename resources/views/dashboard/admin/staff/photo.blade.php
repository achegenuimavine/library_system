@extends('dashboard.layout')

@section('content')
<div class="d-flex justify-content-center py-5 my-5">
    <img src="" alt="" id="preview" width="200" height="200" class="rounded-md">
</div>
    <form method="POST" class="form" enctype="multipart/form-data">
        @csrf
        <label for="">Upload Photo:</label>
        <input type="file" class="form-control" name="profile_photo" onchange="preview(event)" required>
        <input type="submit" class="btn btn-primary btn-xs" value="Submit">
    </form>

@endsection

@section('script')
    <script>
        function preview(evnt){
            let element= event.target;
            let file= element.files[0];
            if(file){
                console.log(file);
                $('#preview').prop('src', URL.createObjectURL(file));
            }
        }
    </script>
@endsection