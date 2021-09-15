@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Members redagavimas</div>

               <div class="card-body">
                <form method="POST" action="{{route('member.update',$member)}}">

                    <div class="form-group">
                        <label>name</label>
                        <input type="text" name="name"  class="form-control" value="{{$member->name}}">
                        {{-- <small class="form-text text-muted">name.</small> --}}
                    </div>
                    <div class="form-group">
                        <label>surname</label>
                        <input type="text" name="surname"  class="form-control" value="{{$member->surname}}">
                        {{-- <small class="form-text text-muted">surname.</small> --}}
                    </div>

                    <div class="form-group">
                        <label>live</label>
                        <input type="text" name="live"  class="form-control" value="{{$member->live}}">
                        {{-- <small class="form-text text-muted">live.</small> --}}
                    </div>
                    <div class="form-group">
                        <label>experience</label>
                        <input type="text" name="experience"  class="form-control" value="{{$member->experience}}">
                        {{-- <small class="form-text text-muted">experience.</small> --}}
                    </div>

                    <div class="form-group">
                        <label>registered</label>
                        <input type="text" name="registered"  class="form-control" value="{{$member->registered}}">
                        {{-- <small class="form-text text-muted">registered.</small> --}}
                    </div>
                    <div class="form-group">
                        <label>reservoir_id</label>
                        <input type="text" name="reservoir_id"  class="form-control" value="{{$member->reservoir_id}}">
                        {{-- <small class="form-text text-muted">reservoir_id.</small> --}}
                    </div>

                    @csrf
                    <button class="btn btn-success" type="submit">update</button>
                 </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
 
 
   