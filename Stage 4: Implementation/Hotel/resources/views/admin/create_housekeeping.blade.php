<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }
        input[type="text"], 
        input[type="number"], 
        select, 
        textarea {
            width: 300px; !imposrtant/* Set a consistent width */
            height: 35px; !important/* Set a consistent height */
            padding: 5px; /* Add some padding for better appearance */
            border: 1px solid #ccc; /* Add a border for inputs */
            border-radius: 5px; /* Optional: Add rounded corners */
        }
        textarea {
            height: 100px; /* Set a taller height for textarea */
            resize: none; /* Prevent resizing */
        }
        .div_deg {
            padding-top: 30px;
        }
        .div_center {
            text-align: center;
            padding-top: 40px;
        }
        .btn {
            width: 150px; /* Optional: Consistent button width */
            height: 40px; /* Optional: Consistent button height */
        }
    </style>
  </head>
  <body>
  @include('admin.header')
  @include('admin.sidebar')

  <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

    <div class="div_center">
        <h1 style="font-size: 30px; font-weight: bold;">Add Rooms</h1>
        <form action="{{ route('housekeeping.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label>Room</label>
                    <select name="room_id" class="form-control" required>
                        <option value="">Select Room</option>
                        @foreach($rooms as $room)
                            <option value="{{ $room->id }}">{{ $room->room_number }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Assigned Staff</label>
                    <select name="assigned_staff_id" class="form-control">
                        <option value="">Unassigned</option>
                        @foreach($staff as $member)
                            <option value="{{ $member->id }}">{{ $member->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control" required>
                        <option value="dirty">Dirty</option>
                        <option value="clean">Clean</option>
                        <option value="occupied">Occupied</option>
                        <option value="out_of_service">Out of Service</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Cleaning Date</label>
                    <input type="datetime-local" name="cleaning_date" class="form-control">
                </div>

                <div class="form-group">
                    <label>Completion Time</label>
                    <input type="datetime-local" name="completion_time" class="form-control">
                </div>

                <div class="form-group">
                    <label>Supplies Used</label>
                    <textarea name="supplies_used" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label>Inspection Status</label>
                    <select name="inspection_status" class="form-control">
                        <option value="pending">Pending</option>
                        <option value="passed">Passed</option>
                        <option value="failed">Failed</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Notes</label>
                    <textarea name="notes" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Save Housekeeping</button>
                <a href="{{ route('housekeeping') }}" class="btn btn-secondary">Cancel</a>
            </form>
    </div>

    </div>
    </div>
    </div>
  @include('admin.footer')
  </body>
</html>
