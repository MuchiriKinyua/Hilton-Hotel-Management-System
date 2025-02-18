@extends('layouts.app')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Predictions</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        @include('flash::message')

        <div class="card">
            <div class="card-body">
                <form action="{{ route('predict') }}" method="POST" enctype="multipart/form-data" class="p-4 bg-light rounded shadow">
                    @csrf

                    <div class="mb-3">
                        <label for="market_segment" class="form-label">Market Segment:</label>
                        <select id="market_segment" name="market_segment" class="form-control" required>
                            <option value="Direct">Direct</option>
                            <option value="Corporate">Corporate</option>
                            <option value="Online TA">Online TA</option>
                            <option value="Offline TATO">Offline TATO</option>
                            <option value="Complementary">Complementary</option>
                            <option value="Groups">Groups</option>
                            <option value="Undefined">Undefined</option>
                            <option value="Aviation">Aviation</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="distribution_channel" class="form-label">Distribution Channel:</label>
                        <select id="distribution_channel" name="distribution_channel" class="form-control" required>
                            <option value="Direct">Direct</option>
                            <option value="Corporate">Corporate</option>
                            <option value="TATO">TATO</option>
                            <option value="GDS">GDS</option>
                            <option value="Undefined">Undefined</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="is_repeated_guest" class="form-label">Is Repeated Guest:</label>
                        <select id="is_repeated_guest" name="is_repeated_guest" class="form-control" required>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="deposit_type" class="form-label">Deposit Type:</label>
                        <select id="deposit_type" name="deposit_type" class="form-control" required>
                            <option value="No deposit">No deposit</option>
                            <option value="Refundable">Refundable</option>
                            <option value="Non Refund">Non Refund</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="customer_type" class="form-label">Customer Type:</label>
                        <select id="customer_type" name="customer_type" class="form-control" required>
                            <option value="Transient">Transient</option>
                            <option value="Contract">Contract</option>
                            <option value="Transientparty">Transient party</option>
                            <option value="Group">Group</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="has_special_requests" class="form-label">Has Special Requests:</label>
                        <select id="has_special_requests" name="has_special_requests" class="form-control">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="reserved_is_assigned" class="form-label">Reserved is Assigned:</label>
                        <select id="reserved_is_assigned" name="reserved_is_assigned" class="form-control">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="agent_involved" class="form-label">Agent Involved:</label>
                        <select id="agent_involved" name="agent_involved" class="form-control">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark btn-lg">Predict</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="mt-4">
            @include('predictions.table')
        </div>
    </div>

@endsection
