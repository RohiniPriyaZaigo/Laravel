<h1> OFFICER List </h1>
<style>
  table, th, td {
    border: 1px solid black;
}
</style>
<table>
<tr>
    <th>FirstName</th>
    <th>LastName</th>
    <th>Gender</th>
    <th>City</th>
    <th>Age</th>
    <th>Email</th>
    <th>Password</th>
    <th>State</th>
    <th>PhoneNumber</th>
    <th>Pincode</th>
    <th>DOB</th>
</tr>
@forelse ($users as  $user)
    <tr>
        <td>{{$user->FirstName}}</td>
        <td>{{$user->LastName}}</td>
        <td>{{$user->Gender}}</td>
        <td>{{$user->City}}</td>
        <td>{{$user->Age}}</td>
        <td>{{$user->Email}}</td>
        <td>{{$user->Password}}</td>
        <td>{{$user->State}}</td>
        <td>{{$user->PhoneNumber}}</td>
        <td>{{$user->Pincode}}</td>
        <td>{{$user->DOB}}</td>
        <td><a href="{{route('edit',$user['id'])}}">Edit</a></td>
        <td><a href="{{route('delete',$user['id'])}}">Delete</a></td>
    </tr> 
    @empty
    <p> no records</p>
    @endforelse
</table>

