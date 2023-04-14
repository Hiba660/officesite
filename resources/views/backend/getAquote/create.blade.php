@extends('backend.layout.master')

@section('css')

@endsection

@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-12 mx-auto col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header d-flex">
                        <div class="card-title">
                            <h4>Get A Quote</h4>
                        </div>
                       
                    </div>
                    <div class="card-body ">
                        <form action="{{ route('backend.getAquote.store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Days</label>
                                <input type="text" name="days" class="form-control" value="{{$getAquote->days}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Time</label>
                                <input type="text" name="time" class="form-control" value="{{$getAquote->time}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" value="{{$getAquote->phone}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" value="{{$getAquote->email}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                 <textarea name="address" class="form-control" id="basic-example">{{$getAquote->address}}</textarea>
                            </div>
    
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script>
    tinymce.init({
    selector: 'textarea#basic-example',
    height: 200,
    menubar: false,
    plugins: [
      'advlist autolink lists link image charmap print preview anchor',
      'searchreplace visualblocks code fullscreen',
      'insertdatetime media table paste code help wordcount'
    ],
    toolbar: 'undo redo | formatselect | ' +
    'bold italic backcolor | alignleft aligncenter ' +
    'alignright alignjustify | bullist numlist outdent indent | ' +
    'removeformat | help',
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
    elementpath:false,
  });
</script> 
@endsection