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
            <h4 id="tourist"> Driver Booking </h4>
             <div class="table-responsive">
             <table id="mytable" class="table table-bordred table-striped">
                        
                        <thead>
                            <th>Driver</th>
                            <th>Tourist</th>
                            <th>Date</th>
                            <th>From</th>
                            <th>To</th>
                            
                            
                        </thead>
                 <tbody>
                        @foreach ($pending as $key =>$value)
                     <tr>
                        <td>{{ $value->driver_id}}</td>
                        <td>{{ $value->tourist_id}}</td>
                        <td>{{ $value->date}}</td>
                        <td>{{ $value->from}}</td>
                        <td>{{ $value->to}}</td>
                    </tr>
                         @endforeach   
                 </tbody>
                
            </table>
        </div>
     </div>
    </div>
 </div>
 </div>
 @endsection
