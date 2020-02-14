<h1>hii all</h1>

<table >
<tr>
<th>Name</th>
<th>Age</th>
<th>Experience</th>
<th>Language</th>
<th>Charge Per Day</th>
</tr>

@foreach ($guide as $key =>$value)
    <tr>
        <td>{{ $value->name}}</td>
        <td>{{ $value->age}}</td>
        <td>{{ $value->experience}}</td>
        <td>{{ $value->language}}</td>
        <td>{{ $value->chargeperday}}</td>

    </tr>
@endforeach


<!-- <tr>
    <td>keshi</td>
    <td>20</td>
    <td>2 years</td>
    <td>English</td>
    <td>1000</td>
</tr> -->

</table>