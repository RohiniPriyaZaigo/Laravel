@if(Session("success"))
  <p>{{Session("success")}}</p>
@endif
<p> student_list</p>
  <a href = "{{ route('student_details') }}" >add</a>
  <br>
<style>
  table, th, td {
    border: 1px solid black;
}
</style>
<table>
<tr>
    <th>Name</th>
    <th>Address</th>
    <th>Pincode</th>
</tr>

</table>
@forelse ($users as $user)
<table>
  <tr>
    <td>{{$user -> name}}</td>
    <td>{{$user-> address}}</td>
    <td>{{$user -> pincode}}</td>
  </tr>
@empty
<p>"file not found"</p>
@endforelse
</table> 
{{$users->links()}}   
