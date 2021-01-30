<h1> LIST </h1>
<style>
  table, th, td {
    border: 1px solid black;
}
</style>
<table>
<tr>
    <th>name</th>
    <th>age</th>
    <th>address</th>
    <th>phoneNumber</th>
    <th>pincode</th>
</tr>
@forelse ($users as  $users)
    <tr>
        <td>{{$users->name}}</td>
        <td>{{$users->age}}</td>
        <td>{{$users->address}}</td>
        <td>{{$users->phoneNumber}}</td>
        <td>{{$users->pincode}}</td>
    </tr>
    @empty
    <p> no records</p>
    @endforelse
</table>

