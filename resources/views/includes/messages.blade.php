@if($errors->any())
@foreach ($errors->all() as $error)
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert"
                aria-hidden="true">&times;
        </button>
        {{$error}}
    </div>

@endforeach

@endif
@if(session('error'))
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
        &times;
    </button>
 <i class="fa fa-ban"></i>   {{session('error')}}
</div>

@endif
@if (session('success'))
<div class="alert alert-success alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
    &times;
</button>
<i class="fa fa-check"></i>  {{session('success')}}
</div>
@endif
