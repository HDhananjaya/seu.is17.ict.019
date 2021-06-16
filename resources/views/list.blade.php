
<table border= "1" >

    <tr>
    <td>ID</td>
    <td>Name</td>
    <td>Date of Birth</td>
    <td>Telephone No</td>
    <td>Gender</td>
    <td>NIC No.</td>
    
    
     </tr>
     @foreach($members as $member)
     <tr>
     <td>{{$member['id']}}</td>
     <td>{{$member['username']}}</td>
     <td>{{$member['dateofbirth']}}</td>
     <td>{{$member['telephoneno']}}</td>
     <td>{{$member['gender']}}</td>
     <td>{{$member['nic']}}</td>
     
     
     
     
     
     </tr>

     @endforeach





</table>