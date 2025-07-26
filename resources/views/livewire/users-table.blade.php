<div>
    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th width="220">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        <a href="{{ route('users.details', ['id' => $item->id]) }}" class="btn btn-sm btn-primary">
                            <i class="bi bi-eye-fill me-1"></i> Detail
                        </a>
                        <a href="{{ route('user.edit', ['id' => $item->id]) }}" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil-fill me-1"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-danger">
                            <i class="bi bi-trash-fill me-1"></i> Delete
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
