<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <body>
  @include('admin.header')
  @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
          <h2 class="text-center">Housekeeping Management</h2>
          <a href="{{ route('housekeeping.create') }}" class="btn btn-success mb-3">+ Add Housekeeping</a>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Room</th>
                <th>Status</th>
                <th>Assigned Staff</th>
                <th>Cleaning Date</th>
                <th>Completion Time</th>
                <th>Inspection Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($housekeepingTasks as $task)
            <tr>
                <td>{{ $task->room->room_number }}</td>
                <td>{{ ucfirst($task->status) }}</td>
                <td>{{ optional($task->staff)->name ?? 'Unassigned' }}</td>
                <td>{{ $task->cleaning_date }}</td>
                <td>{{ $task->completion_time }}</td>
                <td>{{ ucfirst($task->inspection_status) }}</td>
                <td>
                    <a href="{{ route('housekeeping.edit', $task->id) }}" class="btn btn-primary btn-sm">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
          </div>
        </div>
      </div>
        @include('admin.footer')
  </body>
</html>