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
<!-----------------------------------------tourist---------------------------------------------------------------->
<br> <hr class="style13"> <br>


<div  class="container">
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
 <h6 > <a href="#top" style="color:blue";>Go to top</a> </h6>
<!----------------------------------------------guide----------------------------------------------------------->
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
     </div> <h6 > <a href="#top" style="color:blue";>Go to top</a> </h6>
<!-----------------------------------------------drivers---------------------------------------------------------->
<br> <hr class="style13"> <br>
<div  class="container">
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
     <h6 > <a href="#top" style="color:blue";>Go to top</a> </h6>
<!-----------------------------------------------equipment---------------------------------------------------------->
<br> <hr class="style13"> <br>
<div  class="container">
    <div class="row">
     <div class="col-md-12">
            <h4 id="driver">Equipment providers</h4>
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
                            <a href="/drievr_delect/{{ $value->id }}" >Delect</a></span></button></p>
                        </td>
                        
                    </tr>
                         @endforeach   
                 </tbody>
                 <h6> 
            </table>
        </div>
     </div> 
     </div>
     </div>
     <h6 > <a href="#top" style="color:blue";>Go to top</a> </h6>
<!------------------------------------------------guide bookings-------------------------------------------------------->
<br> <hr class="style13"> <br>



<div id="g_s"class="container">
<div class="row"> 
     <div class="col-md-12">
     <h4 >Guide services </h4> <br><br>
            <h6 >Finised services </h6>
             <div class="table-responsive">
             <table id="mytable" class="table table-bordred table-striped">
                        
             <thead>
                            <th>Guide</th>
                            <th>Tourist</th>
                            <th>District</th>
                            <th>Nop</th>
                            <th>Start date</th>
                            <th>End date</th>
                            
                            
                        </thead>
                 <tbody>
                        @foreach ($g_booking as $key =>$value)
                     <tr> 
                        <td>{{ $value->guide_id}}</td>
                        <td>{{ $value->tourist_id}}</td>
                        <td>{{ $value->district}}</td>
                        <td>{{ $value->nop}}</td>
                        <td>{{ $value->start_date}}</td>
                        <td>{{ $value->end_date}}</td>
                        
                    </tr>
                         @endforeach   
                 </tbody>
                
            </table>
        </div>
     
<!--------------------------------------------------------------------------------------------------------->
<br> <hr class="style13"> <br>

            <h6 >On-going services </h6>
             <div class="table-responsive">
             <table id="mytable" class="table table-bordred table-striped">
                        
             <thead>
                            <th>Guide</th>
                            <th>Tourist</th>
                            <th>District</th>
                            <th>Nop</th>
                            <th>Start date</th>
                            <th>End date</th>
                            
                            
                        </thead>
                 <tbody>
                        @foreach ($g_booking as $key =>$value)
                     <tr>
                        <td>{{ $value->guide_id}}</td>
                        <td>{{ $value->tourist_id}}</td>
                        <td>{{ $value->district}}</td>
                        <td>{{ $value->nop}}</td>
                        <td>{{ $value->start_date}}</td>
                        <td>{{ $value->end_date}}</td>
                        
                    </tr>
                         @endforeach   
                 </tbody>
                
            </table>
        </div>
     


<!--------------------------------------------------------------------------------------------------------->
<br> <hr class="style13"> <br>

            <h6 >Pending Guide services </h6>
             <div class="table-responsive">
             <table id="mytable" class="table table-bordred table-striped">
                        
             <thead>
                            <th>Guide</th>
                            <th>Tourist</th>
                            <th>District</th>
                            <th>Nop</th>
                            <th>Start date</th>
                            <th>End date</th>
                            
                            
                        </thead>
                 <tbody>
                        @foreach ($g_booking as $key =>$value)
                     <tr>
                        <td>{{ $value->guide_id}}</td>
                        <td>{{ $value->tourist_id}}</td>
                        <td>{{ $value->district}}</td>
                        <td>{{ $value->nop}}</td>
                        <td>{{ $value->start_date}}</td>
                        <td>{{ $value->end_date}}</td>
                        
                    </tr>
                         @endforeach   
                 </tbody>
                
            </table>
        </div>
     </div> 
   </div>
 </div>
 <h6 > <a href="#top" style="color:blue";>Go to top</a> </h6>
<!------------------------------------------------driver bookings-------------------------------------------------------->
<br> <hr class="style13"> <br>
<div id="d_s" class="container">
<div class="row"> 
     <div class="col-md-12">
     <h4 >Driver services </h4> <br><br>
            <h6 >Finised services </h6>
             <div class="table-responsive">
             <table id="mytable" class="table table-bordred table-striped">
                        
             <thead>
                            <th>Driver</th>
                            <th>Tourist</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Date</th>
                            
                            
                            
                        </thead>
                 <tbody>
                        @foreach ($d_finised as $key =>$value)
                     <tr>
                        <td>{{ $value->driver_id}}</td>
                        <td>{{ $value->tourist_id}}</td>
                        <td>{{ $value->from}}</td>
                        <td>{{ $value->to}}</td>
                        <td>{{ $value->date}}</td>
                        
                        
                    </tr>
                         @endforeach   
                 </tbody>
                
            </table>
        </div>
     


<!--------------------------------------------------------------------------------------------------------->
<br> <hr class="style13"> <br>

            <h6 >On-going services </h6>
             <div class="table-responsive">
             <table id="mytable" class="table table-bordred table-striped">
                        
             <thead>
                            <th>Driver</th>
                            <th>Tourist</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Date</th>
                            
                            
                            
                        </thead>
                 <tbody>
                        @foreach ($d_booked as $key =>$value)
                     <tr>
                        <td>{{ $value->driver_id}}</td>
                        <td>{{ $value->tourist_id}}</td>
                        <td>{{ $value->from}}</td>
                        <td>{{ $value->to}}</td>
                        <td>{{ $value->date}}</td>
                        
                        
                    </tr>
                         @endforeach   
                 </tbody>
            </table>
        </div>
     


<!--------------------------------------------------------------------------------------------------------->
<br> <hr class="style13"> <br>

            <h6 >Pending services </h6>
             <div class="table-responsive">
             <table id="mytable" class="table table-bordred table-striped">
                        
             <thead>
                            <th>Driver</th>
                            <th>Tourist</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Date</th>
                            
                            
                            
                        </thead>
                 <tbody>
                        @foreach ($d_pending as $key =>$value)
                     <tr>
                        <td>{{ $value->driver_id}}</td>
                        <td>{{ $value->tourist_id}}</td>
                        <td>{{ $value->from}}</td>
                        <td>{{ $value->to}}</td>
                        <td>{{ $value->date}}</td>
                        
                        
                    </tr>
                         @endforeach   
                 </tbody>
                
            </table>
        </div>
     </div> 
   </div>
 </div>
 <h6 > <a href="#top" style="color:blue";>Go to top</a> </h6>
<!------------------------------------------------equipment bookings-------------------------------------------------------->
<br> <hr class="style13"> <br>



<div id="e_s" class="container">
<div class="row"> 
     <div class="col-md-12">
     <h4 >Equipment services </h4> <br><br>
            <h6 >Finised services </h6>
             <div class="table-responsive">
             <table id="mytable" class="table table-bordred table-striped">
                        
             <thead>
                            <th>Equipment</th>
                            <th>Tourist</th>
                            <th>Start date</th>
                            <th>End date</th>
                            
                            
                        </thead>
                 <tbody>
                        @foreach ($e_finised as $key =>$value)
                     <tr> 
                        <td>{{ $value->equipment_id}}</td>
                        <td>{{ $value->tourist_id}}</td>
                        <td>{{ $value->start_date}}</td>
                        <td>{{ $value->end_date}}</td>
                        
                    </tr>
                         @endforeach   
                 </tbody>
                
            </table>
        </div>
     
<!--------------------------------------------------------------------------------------------------------->
<br> <hr class="style13"> <br>

            <h6>On-going services </h6>
             <div class="table-responsive">
             <table id="mytable" class="table table-bordred table-striped">
                        
             <thead>
                            <th>Equipment</th>
                            <th>Tourist</th>
                            <th>Start date</th>
                            <th>End date</th>
                            
                            
                        </thead>
                 <tbody>
                        @foreach ($e_booked as $key =>$value)
                     <tr> 
                        <td>{{ $value->equipment_id}}</td>
                        <td>{{ $value->tourist_id}}</td>
                        <td>{{ $value->start_date}}</td>
                        <td>{{ $value->end_date}}</td>
                        
                    </tr>
                         @endforeach   
                 </tbody>
                
            </table>
        </div>
     


<!--------------------------------------------------------------------------------------------------------->
<br> <hr class="style13"> <br>

            <h6>Pending services </h6>
             <div class="table-responsive">
             <table id="mytable" class="table table-bordred table-striped">
                        
             <thead>
                            <th>Equipment</th>
                            <th>Tourist</th>
                            <th>Start date</th>
                            <th>End date</th>
                            
                            
                        </thead>
                 <tbody>
                        @foreach ($e_pending as $key =>$value)
                     <tr> 
                        <td>{{ $value->equipment_id}}</td>
                        <td>{{ $value->tourist_id}}</td>
                        <td>{{ $value->start_date}}</td>
                        <td>{{ $value->end_date}}</td>
                        
                    </tr>
                         @endforeach   
                 </tbody>
                
            </table>
        </div>
     </div> 
   </div>
 </div>
 <h6 > <a href="#top" style="color:blue";>Go to top</a> </h6>
<!----------------------------------------------------------------------------------------------------- -->

<br><br><br><br>












@endsection