<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <link rel="stylesheet" href="{{ asset('css/stylepredict.css') }}">
  </head>
  <body>
  @include('admin.header')
  @include('admin.sidebar')
      <!-- Sidebar Navigation end-->

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
          <form action="{{ route('predict') }}" method="POST" enctype="multipart/form-data">
        @csrf

            <!-- market_segment -->
            <label for="market_segment">Market Segment:</label>
            <select id="market_segment" name="market_segment" required>
                <option value="Direct">Direct</option>
                <option value="Corporate">Corporate</option>
                <option value="Online TA">Online TA</option>
                <option value="Offline TATO">Offline TATO</option>
                <option value="Complementary">Complementary</option>
                <option value="Groups">Groups</option>
                <option value="Undefined">Undefined</option>
                <option value="Aviation">Aviation</option>
            </select>

            <!-- distribution_channel -->
            <label for="distribution_channel">Distribution Channel:</label>
            <select id="distribution_channel" name="distribution channel" required>
                <option value="Direct">Direct</option>
                <option value="Corporate">Corporate</option>
                <option value="TATO">TATO</option>
                <option value="GDS">GDS</option>
                <option value="Undefined">Undefined</option>
            </select>

            <!-- is_repeated_guest -->
            <label for="is_repeated_guest">Is Repeated Guest:</label>
            <select id="is_repeated_guest" name="is_repeated_guest" required>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>

            <!-- deposit_type -->
            <label for="deposit_type">Deposit Type:</label>
            <select id="deposit_type" name="deposit_type" required>
                <option value="No deposit">No deposit</option>
                <option value="Refundable">Refundable</option>
                <option value="Non Refund">Non Refund</option>
            </select>

            <!-- customer_type -->
            <label for="customer_type">Customer Type:</label>
            <select id="customer_type" name="customer_type" required>
                <option value="Transient">Transient</option>
                <option value="Contract">Contract</option>
                <option value="Transientparty">Transient party</option>
                <option value="Group">Group</option>
            </select>

            <!-- has_special_requests -->
            <label for="has_special_requests">Has Special Requests:</label>
            <select id="has_special_requests" name="has_special_requests">
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select><br>

            <!-- reserved_is_assigned -->
            <label for="reserved_is_assigned">Reserved is Assigned:</label>
            <select id="reserved_is_assigned" name="reserved_is_assigned">
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select><br>

            <!-- agent_involved -->
            <label for="agent_involved">Agent Involved:</label>
            <select id="agent_involved" name="agent_involved">
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select><br>

            <!-- Submit Button -->
            <button type="submit" style="background-color: #333; color: #fff; padding: 0.5rem 1rem; border: none; cursor: pointer;">Predict</button>
    </form>
          </div>
        </div>
      </div>

        @include('admin.footer')
  </body>
</html>