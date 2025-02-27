@extends('layouts.app')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Hotel Cancellation Prediction</h1>
                </div>
            </div>
        </div>
    </section>

    <form class="p-4 bg-light rounded shadow" id="predictionForm">
        @csrf
        <div class="mb-3">
            <label for="hotel" class="form-label">Hotel Type:</label>
            <select id="hotel" name="hotel" class="form-control" required>
                <option value="City Hotel">City Hotel</option>
                <option value="Resort Hotel">Resort Hotel</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="meal" class="form-label">Meal Type:</label>
            <select id="meal" name="meal" class="form-control" required>
                <option value="BB">Bed & Breakfast (BB)</option>
                <option value="FB">Full Board (FB)</option>
                <option value="HB">Half Board (HB)</option>
                <option value="SC">Self Catering (SC)</option>
                <option value="Undefined">Undefined</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="country" class="form-label">Country Code:</label>
            <input type="text" id="country" name="country" class="form-control" placeholder="Enter country code (e.g., FRA)" required>
        </div>

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
                <option value="Transient party">Transient party</option>
                <option value="Group">Group</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="lead_time_category" class="form-label">Lead Time Category:</label>
            <select id="lead_time_category" name="lead_time_category" class="form-control" required>
                <option value="Short">Short</option>
                <option value="Medium">Medium</option>
                <option value="Long">Long</option>
            </select>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-dark btn-lg">Predict</button>
        </div>

        <div id="predictionResult" class="mt-3 alert alert-info" style="display: none;"></div>
    </form>

    <div class="content px-3">
        @include('flash::message')

        <div class="card">
            <div class="card-body"></div>
        </div>

        <div class="mt-4">
            @include('predictions.table')
        </div>
    </div>

    <script>
        document.getElementById("predictionForm").addEventListener("submit", function (event) {
            event.preventDefault();

            let formData = {
                hotel: document.getElementById("hotel").value,
                meal: document.getElementById("meal").value,
                country: document.getElementById("country").value,
                market_segment: document.getElementById("market_segment").value,
                distribution_channel: document.getElementById("distribution_channel").value,
                deposit_type: document.getElementById("deposit_type").value,
                customer_type: document.getElementById("customer_type").value,
                lead_time_category: document.getElementById("lead_time_category").value
            };

            fetch("http://127.0.0.1:5000/predict", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify(formData)
            })
            .then(response => response.json())
            .then(data => {
                let resultDiv = document.getElementById("predictionResult");
                resultDiv.style.display = "block";
                resultDiv.innerText = "Prediction: " + (data.cancellation_prediction ? "Will cancel" : "Will not Cancel");
            })
            .catch(error => {
                console.error("Error:", error);
                alert("An error occurred while processing the request.");
            });
        });
    </script>

@endsection
