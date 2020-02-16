@extends('layouts.adminhomelayout')

@section('content')
@csrf

<style>
a:link, a:visited {
  
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

</style>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as admin!
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<!--------------------------------------------------------------------------------------------------------->
<br> <hr class="style13"> <br>


<div class="container">
	<div class="row">
         <div class="col-md-12">
            <h4 id="tourist">Tourists </h4>
             <div class="table-responsive">
             <table id="mytable" class="table table-bordred table-striped">
                        
                        <thead>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Country</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Delete</th>
                            
                        </thead>
                 <tbody>
                        @foreach ($tourist as $key =>$value)
                     <tr>
                        <td>{{ $value->id}}</td>
                        <td>{{ $value->name}}</td>
                        <td>{{ $value->country}}</td>
                        <td>{{ $value->email}}</td>
                        <td>{{ $value->contact}}</td>
                       
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete">
                            <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" >
                            <span class="glyphicon glyphicon-trash"> 
                            <a href="/tourist_delect/{{ $value->id }}" >Delect</a></span></button></p>
                        </td>
                    </tr>
                         @endforeach   
                 </tbody>
                
            </table>
        </div>
     </div>
    </div>
 </div>
 </div>
<!--------------------------------------------------------------------------------------------------------->
<br> <hr class="style13"> <br>
<div class="container">  
    <div class="row">
     <div class="col-md-12">
         <h4  id="guide">Guides</h4>
             <div class="table-responsive">
             <table id="mytable" class="table table-bordred table-striped">
                        
                        <thead>
                            <th>Id</th>
                            <th>Name</th>
                            <th>District</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Delete</th>
                            
                        </thead>
                 <tbody>
                        @foreach ($guide as $key =>$value)
                     <tr>
                        <td>{{ $value->id}}</td>
                        <td>{{ $value->name}}</td>
                        <td>{{ $value->area}}</td>
                        <td>{{ $value->email}}</td>
                        <td>{{ $value->contact}}</td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete">
                            <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" >
                            <span class="glyphicon glyphicon-trash"> 
                            <a href="/guide_delect/{{ $value->id }}" >Delect</a></span></button></p>
                        </td>
                       
                    </tr>
                         @endforeach   
                 </tbody>
                
            </table>
        </div>
     </div>
     </div>
     </div>
<!--------------------------------------------------------------------------------------------------------->
<br> <hr class="style13"> <br>
<div class="container">
    <div class="row">
     <div class="col-md-12">
            <h4 id="driver">Drivers</h4>
             <div class="table-responsive">
             <table id="mytable" class="table table-bordred table-striped">
                        
                        <thead>
                            <th>Id</th>
                            <th>Name</th>
                            <th>District</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Delete</th>
                            
                        </thead>
                 <tbody>
                        @foreach ($driver as $key =>$value)
                     <tr>
                        <td>{{ $value->id}}</td>
                        <td>{{ $value->name}}</td>
                        <td>{{ $value->area}}</td>
                        <td>{{ $value->email}}</td>
                        <td>{{ $value->contact}}</td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete">
                            <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" >
                            <span class="glyphicon glyphicon-trash"> 
                            <a href="/drievr_delect/{{ $value->id }}" >Delect</a></span></button></p>
                        </td>
                        
                    </tr>
                         @endforeach   
                 </tbody>
                
            </table>
        </div>
     </div>
     </div>
     </div>
<!--------------------------------------------------------------------------------------------------------->
<br> <hr class="style13"> <br>
<div class="container">
<div class="row">
     <div class="col-md-12">
            <h4 id="equipment">Equipment provider</h4>
             <div class="table-responsive">
             <table id="mytable" class="table table-bordred table-striped">
                        
                        <thead>
                            <th>Id</th>
                            <th>Name</th>
                            <th>District</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Delete</th>
                            
                        </thead>
                 <tbody>
                        @foreach ($equipment as $key =>$value)
                     <tr>
                        <td>{{ $value->id}}</td>
                        <td>{{ $value->name}}</td>
                        <td>{{ $value->area}}</td>
                        <td>{{ $value->email}}</td>
                        <td>{{ $value->contact}}</td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete">
                            <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" >
                            <span class="glyphicon glyphicon-trash"> 
                            <a href="/equipment_delect/{{ $value->id }}" >Delect</a></span></button></p>
                        </td>
                        
                    </tr>
                         @endforeach   
                 </tbody>
                
            </table>
        </div>
     </div>
   </div>
 </div>


<br><br><br><br>

@endsection