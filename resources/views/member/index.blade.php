@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               







               <div class="card-header">Nariu sarasas</div>
              <form action="{{route('member.indexSpecifics')}}" method="get"> Rusiavimas</form>
              <select class="form-control" name="order" id="">
              <option class="form-control" name="order" id="">
              <option value="0">rusiuokite pagal</option>
              <option value="name">varda</option>
              <option value="surname">pavarde</option>
              <option value="id">registracijos data</option>
                </select>
              filtravimas
              <select class="form control" name="filter" id="">
                <option value="0">filtruokite pagal</option>
                    @foreach($waters as $water)
                    <option value="{{$water->id}}">{{$water->title}}</option>
                @endforeach
                  </select>
                    <button class="btn btn-primary" type="submit">select</button>
                    </form>
                      <a href="{{route('member.index'))}">isvalyti filtra</a>
                      </div>






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



