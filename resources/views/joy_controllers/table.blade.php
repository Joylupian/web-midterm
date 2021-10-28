<div class="table-responsive">
    <table class="table" id="joyControllers-table">
        <thead>
            <tr>
                <th>Location</th>
        <th>Price</th>
        <th>Foods</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($joyControllers as $joyController)
            <tr>
                <td>{{ $joyController->location }}</td>
            <td>{{ $joyController->price }}</td>
            <td>{{ $joyController->foods }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['joyControllers.destroy', $joyController->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('joyControllers.show', [$joyController->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('joyControllers.edit', [$joyController->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
