
@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
        <div class="card">
          <div class="card-header text-center"><h3>{{$member->grade}} {{$member->letter}} klasė</h3></div>
        </div>
           <div class="card">
               <div class="card-header"><b>Members sąrašas</b></div>


               <form action="{{route('member.add',[$member])}}" method="post">
                @csrf
              <select name="member" id="">
                @foreach ($members as $member)
                    
                <option value="{{$member->id}}">{{$member->name}}</option>
                @endforeach
              </select>
              <button type="submit">add</button>
              </form>





               <div class="card-body">
                 <table class="table">
                   <tr>
                     <th>Name</th>
                     <th>Surname</th>
                     <th>Live</th>
                     <th>Experience</th>
                     <th>Registered</th>
                     <th>Reservoir_id</th>

                     <th>edit</th>
                     <th>delete</th>
                   </tr>
                  @foreach ($member->members as $member)
                    <tr>

                      <td>{!!$member->name!!}</td>
                      <td>{!!$member->surname!!}</td>
                      <td>{!!$member->live!!}</td>
                      <td>{!!$member->experience!!}</td>
                      <td>{!!$member->registered!!}</td>
                      <td>{!!$member->reservoir_id!!}</td>

                      <td><a  href="{{route('member.edit',[$member])}}" >
                            <button  class="btn btn-primary" disabled>edit</button> 
                          </a>
                      </td>
                      <td>
                        <form method="POST" action="{{route('member.destroy', $member)}}">
                          @csrf
                          <button class="btn btn-danger" type="submit" disabled>DELETE</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
              </table>
               </div>
           </div>
           


           <div class="card">
            <div class="card-header"><b>Reservoirs sąrašas</b></div>

            <div class="card-body">
              <table class="table">
                <tr>
                <th>Title</th>
                <th>Area</th>
                <th>About</th>
                  <th>edit</th>
                  <th>delete</th>
                </tr>
               @foreach ($reservoir->members as $member)
                 <tr>
                      <td>{!!$reservoir->title!!}</td>
                      <td>{!!$reservoir->area!!}</td>
                      <td>{!!$reservoir->about!!}</td>
                  
                   <td><a  href="{{route('reservoir.edit',[$reservoir])}}" >
                         <button  class="btn btn-primary" disabled>edit</button> 
                       </a>
                   </td>
                   <td>
                     <form method="POST" action="{{route('reservoir.destroy', $reservoir)}}">
                       @csrf
                       <button class="btn btn-danger" type="submit" disabled>DELETE</button>
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