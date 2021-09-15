@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Members sukurimas</div>

               <div class="card-body">
                <form method="POST" action="{{route('member.store')}}">

 
                    <div class="form-group">
                        <label>name</label>
                        <input type="text" name="name"  class="form-control">
                        {{-- <small class="form-text text-muted">name</small> --}}
                    </div>
                    <div class="form-group">
                        <label>surname</label>
                        <input type="text" name="surname"  class="form-control">
                        {{-- <small class="form-text text-muted">surname</small> --}}
                    </div>

                    <div class="form-group">
                        <label>live</label>
                        <input type="text" name="live"  class="form-control">
                        {{-- <small class="form-text text-muted">live</small> --}}
                    </div>
                    <div class="form-group">
                        <label>experience</label>
                        <input type="text" name="experience"  class="form-control">
                        {{-- <small class="form-text text-muted">experience</small> --}}
                    </div>

                    <div class="form-group">
                        <label>registered</label>
                        <input type="text" name="registered"  class="form-control">
                        {{-- <small class="form-text text-muted">registered</small> --}}
                    </div>
                    <div class="form-group">
                        <label>reservoir_id</label>
                        <input type="text" name="reservoir_id"  class="form-control">
                        {{-- <small class="form-text text-muted">reservoir_id</small> --}}
                    </div>

                    <div class="form-group">
                        <label>timestamps</label>
                        <input type="text" name="timestamps"  class="form-control">
                        {{-- <small class="form-text text-muted">timestamps</small> --}}
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


         
