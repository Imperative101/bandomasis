
@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">PAVADINIMAS</div>

               <div class="card-body">
            

              <div class="form-group">
            <label>Plotas:</label>
            {{$reservoir->area}}
            <small class="form-text text-muted">vandens telkinio plotas arais</small>
            </div>

            <label>Plotas:</label>
            {{$reservoir->about}}
            <small class="form-text text-muted">vandens telkinio plotas arais</small>
            </div>

        @foreach($reservoir->reservoirMembers as $member)
        {{$member->name}} <br>
        @endforeach

               </div>
           </div>
       </div>
   </div>
</div>
@endsection
