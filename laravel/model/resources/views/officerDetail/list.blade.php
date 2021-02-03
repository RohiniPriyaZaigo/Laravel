@if(session("success"))
{{session("success")}}
@endif
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
        <!-- <td><a href="{{route('delete', $user['id'])}}">Delete</a></td> -->
        <td>
        <form action = "{{route('delete',['id'=>$user->id])}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="delete">
        </td>
        </form>
    </tr> 
    @empty
    <p> no records</p>
    @endforelse
    {{$users->links()}}
</table>

