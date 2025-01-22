#imports
import joblib
import numpy as np
from flask import Flask, request, jsonify, render_template

app = Flask(__name__)

# Loading the machine learning models
gradient_boosting_model = joblib.load('models/gradient_boost_model.pkl')

# Define a mapping for encoding categorical inputs
def encode_features(form_data):
    encoding_map = {
        "hotel": {"resort": 0, "city": 1},
        "market_segment": {
            "Direct": 0, "Corporate": 1, "Online TA": 2, "Offline TATO": 3,
            "Complementary": 4, "Groups": 5, "Undefined": 6, "Aviation": 7
        },
        "distribution_channel": {
            "Direct": 0, "Corporate": 1, "TATO": 2, "GDS": 3, "Undefined": 4
        },
        "is_repeated_guest": {"Yes": 1, "No": 0},
        "deposit_type": {"No deposit": 0, "Refundable": 1, "Non Refund": 2},
        "customer_type": {
            "Transient": 0, "Contract": 1, "Transientparty": 2, "Group": 3
        },
        "has_special_requests": {"yes": 1, "no": 0},
        "reserved_is_assigned": {"yes": 1, "no": 0},
        "agent_involved": {"yes": 1, "no": 0},
    }

    # Encode each feature using the mapping
    encoded_features = [
        encoding_map["hotel"][form_data["hotel"]],
        encoding_map["market_segment"][form_data["market_segment"]],
        encoding_map["distribution_channel"][form_data["distribution_channel"]],
        encoding_map["is_repeated_guest"][form_data["is_repeated_guest"]],
        encoding_map["deposit_type"][form_data["deposit_type"]],
        encoding_map["customer_type"][form_data["customer_type"]],
        encoding_map["has_special_requests"][form_data["has_special_requests"]],
        encoding_map["reserved_is_assigned"][form_data["reserved_is_assigned"]],
        encoding_map["agent_involved"][form_data["agent_involved"]],
        int(form_data["days_in_waiting_list"]),  # Numeric input
    ]
    return np.array([encoded_features])


# Prediction function
def hotel_prediction(features, model):
    predictions = model.predict(features)
    return predictions


# Root route
@app.route('/', methods=['GET'])
def index():
    return render_template('index.html')


# Gradient Boost route
@app.route('/predict_gradient_boost', methods=['POST'])
def predict_gradient_boosting():
    try:
        # Extract data from the form
        form_data = request.form

        # Encode the form data into numerical format
        features = encode_features(form_data)

        # Perform prediction
        result = hotel_prediction(features, gradient_boosting_model)

        # Return the result
        return jsonify({"prediction": result.tolist()})

    except Exception as e:
        return jsonify({'error': str(e)})


if __name__ == '__main__':
    app.run(port=5000, debug=True)
