<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="feedback-table">
            <thead>
            <tr>
                <th>Guest Id</th>
                <th>Comments</th>
                <th>Rating</th>
                <th>Submitted At</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($feedback as $feedback)
                <tr>
                    <td>{{ $feedback->guest_id }}</td>
                    <td>{{ $feedback->comments }}</td>
                    <td>{{ $feedback->rating }}</td>
                    <td>{{ $feedback->submitted_at }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['feedback.destroy', $feedback->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('feedback.show', [$feedback->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('feedback.edit', [$feedback->id]) }}"
                               class='btn btn-default btn-xs'>
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

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $feedback])
        </div>
    </div>
</div>
