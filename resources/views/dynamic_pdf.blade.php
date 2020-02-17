<!DOCTYPE html>

<html>
<head></head>
<body>
<div  class="container">
	<div class="row">
         <div class="col-md-12">   <a href="{{ url('dynamic_pdf/pdf')}}">Convert into PDF</a>
            <h4 id="tourist">Tourists </h4>
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
                        @foreach ($data as $value)
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
</body>
</html>