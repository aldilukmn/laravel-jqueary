<table class="table m-2 my-3">
    <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    @foreach ($data as $d)
        <tr>
            <td>{{ $d->id }}</td>
            <td>{{ $d->name }}</td>
            <td>
                <button class="btn btn-warning btn-sm" data-bs-target="#exampleModal" data-bs-toggle="modal">Edit</button>
                <button class="btn btn-danger btn-sm" data-bs-target="#exampleModal" data-bs-toggle="modal">Hapus</button>
            </td>
        </tr>
    @endforeach

</table>
