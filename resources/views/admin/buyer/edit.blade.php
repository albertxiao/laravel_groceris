@extends('backend.app')
@section('content')
<div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Edit Buyer</div>
            </div>
            <div class="card-body">
              {!! Form::model($buyer,['route'=>['buyer.update',$buyer->id],'method'=>'PUT']) !!}

                    @include('admin.buyer._form')
             </div>
            <div class="card-action">
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="{{ route('buyer.index') }}" class="btn btn-danger">Cancel</a>
            </div>
            {!! Form::close() !!}
        </div>
@endsection
@section('assets-bottom')
<script src="{{ asset('vendor/laravel-filemanager/js/lfm.js') }}"></script>
<script>
  $(document).ready( function () {
      $('#lfm').filemanager('image');
  });
</script>
@endsection