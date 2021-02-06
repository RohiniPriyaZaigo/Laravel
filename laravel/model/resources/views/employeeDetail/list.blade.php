@if(session("success"))
{{session("success")}}
@endif
<h1> EMPLOYEE List </h1>
<style>
  table, th, td {
    border: 1px solid black;
}
</style>
<table>
<tr>
    <th>firstName</th>
    <th>lastName</th>
    <th>gender</th>
    <th>city</th>
    <th>age</th>
    <th>idProof</th>
    <th>image</th>
    <th>email</th>
    <th>password</th>
    <th>state</th>
    <th>phoneNumber</th>
    <th>pincode</th>
    <th>dob</th>
</tr>
@forelse ($users as  $user)
    <tr>
        <td>{{$user->firstName}}</td>
        <td>{{$user->lastName}}</td>
        <td>{{$user->gender}}</td>
        <td>{{$user->city}}</td>
        <td>{{$user->age}}</td>
        <td>{{$user->idProof}}</td>
        <td>{{$user->image}}
        @if(strpos($user->image,'.pdf') !== false || strpos($user->image, '.xlsx') !== false || strpos($user->image, '.docx') !== false || strpos($user->image, '.xls')!==false)
        <a target="_blank" href="{{ asset('storage/images/'.$user->image) }}">Download</a> 
        @else  
        <td><img src="{{asset('storage/images/'.$user->image)}}" width="100px;" height="100px;" alt="Image"></td>
        @endif
        </td>
    
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>
        <td>{{$user->state}}</td>
        <td>{{$user->phoneNumber}}</td>
        <td>{{$user->pincode}}</td>
        <td>{{$user->dob}}</td>

        


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

