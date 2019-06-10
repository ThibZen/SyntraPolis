<html>
<table>
            <tr>
                <td>Title</td>
                <td>Active</td>
            </tr>
@foreach($data as $value)
    <tr>
        <td>{{ $value->title }}</td>
        <td>{{ $value->status }}</td>
    </tr>
    </table>
@endforeach


</html>