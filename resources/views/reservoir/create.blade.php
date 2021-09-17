@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">reservoir sukurimas</div>

               <div class="card-body">
                <form method="POST" action="{{route('reservoir.store')}}">

 
                    <div class="form-group">
                        <label>title</label>
                        <input type="text" name="title"  class="form-control">
                        {{-- <small class="form-text text-muted">title</small> --}}
                    </div>
                    <div class="form-group">
                        <label>area</label>
                        <input type="text" name="area"  class="form-control">
                        {{-- <small class="form-text text-muted">area</small> --}}
                    </div>
                    <div class="form-group">
                        <label>about</label>
                        <input type="text" name="about"  class="form-control">
                        {{-- <small class="form-text text-muted">about</small> --}}
                    </div>


                    @csrf
                    <button class="btn btn-primary" type="submit">ADD</button>
                 </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection

<script>
$(document).ready(function() {
   $('#summernote').summernote();
 });
</script>
