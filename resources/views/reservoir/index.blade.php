@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">reservoir create</div>

               <div class="card-body">
                 <table class="table">
                   <tr>
                     <th>title</th>
                     <th>area</th>
                     <th>id</th>
                     <th>edit</th>
                     <th>delete</th>
                   </tr>
                  @foreach ($reservoirs as $reservoir)
                    <tr>
                      <td>{!!$reservoir->title!!}</td>
                      <td>{!!$reservoir->area!!}</td>
                      <td>{!!$reservoir->about!!}</td>
                      <td><a class="btn btn-success" href="{{route('reservoir.show',[$reservoir])}}">užeiti</a></td>
                      <td><a class="btn btn-primary" href="{{route('reservoir.edit',[$reservoir])}}">edit</a></td>
                      <td>
                        <form method="POST" action="{{route('reservoir.destroy', $reservoir)}}">
                          @csrf
                          <button class="btn btn-danger" type="submit">DELETE</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
              </table>
               </div>



           </div>
       </div>
   </div>
</div>
@endsection


             
