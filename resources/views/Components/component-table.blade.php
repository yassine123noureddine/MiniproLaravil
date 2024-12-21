@props(['rows'])
<div>
    <table class="table">
        <thead>
          <tr>
    
            <th scope="col">#Id</th>
            <th scope="col">Nmo</th>
            <th scope="col">Mtair</th>
          </tr>
        </thead>
        <tbody>
            @foreach($rows as $row)
        <tr>
            <td>{{$row['id']}}</td>
            <td>{{$row['nom']}}</td>
            <td>{{$row['maiter']}}</td>
        </tr>
        @endforeach
        </tbody>
      </table>
    
</div>