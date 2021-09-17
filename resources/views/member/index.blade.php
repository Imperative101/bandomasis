@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Members sąrašas</div>

               <div class="card-body">
                 <table class="table">
                   <tr>
                     <th>name</th>
                     <th>surname</th>
                     <th>live</th>
                     <th>experience</th>
                     <th>registered</th>
                     <th>reservoir_id</th>   
                     <th>Užeiti</th>
                     <th>edit</th>
                     <th>delete</th>
                   </tr>
                  @foreach ($members as $member)
                    <tr>
                      <td>{!!$member->name!!}</td>
                      <td>{!!$member->surname!!}</td>
                      <td>{!!$member->live!!}</td>
                      <td>{!!$member->experience!!}</td>
                      <td>{!!$member->registered!!}</td>
                      <td>{!!$member->reservoir_id!!}</td>

                      <select name="reservoir_id" class="form-control">
                              @foreach ($reservoirs as $reservoir)
                                    <option value="{{$reservoir->id}}" @if($reservoir->id == $member->reservoir_id) selected @endif>
                                       {{$reservoir->title}} 
                                    </option>
                              @endforeach
                      </select>




                      <td><a class="btn btn-success" href="{{route('member.show',[$member])}}">užeiti</a></td>
                      <td><a class="btn btn-primary" href="{{route('member.edit',[$member])}}">edit</a></td>
                      <td>
                        <form method="POST" action="{{route('member.destroy', $member)}}">
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



