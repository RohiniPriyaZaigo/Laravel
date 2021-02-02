<h1> Employee List </h1>
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
@forelse ($users as  $user)
    <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->age}}</td>
        <td>{{$user->address}}</td>
        <td>{{$user->phoneNumber}}</td>
        <td>{{$user->pincode}}</td>
    </tr>
    <td>
        <a href="{{route('edit',$user['id'])}}">Edit</a>
        <a href="{{route('delete',$user['id'])}}">Delete</a>
       

        <!-- <form action = "{{route('delete',['id'=>$user->id])}}" method="post">
        <input type="button" value="delete">
        @csrf
        @method('DELETE')
        </form> -->
    </td>
    @empty
    <p> no records</p>
    @endforelse
</table>

