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
                            <h4>Testimonial</h4>
                        </div>
                        <a href="{{ route('backend.testimonial.index') }}" class="ms-auto btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body ">
                        <form action="{{ route('backend.testimonial.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Designation</label>
                                <input type="text" class="form-control" name="designation">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                 <textarea name="description" class="form-control" id="basic-example" cols="20" rows="5"></textarea>
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