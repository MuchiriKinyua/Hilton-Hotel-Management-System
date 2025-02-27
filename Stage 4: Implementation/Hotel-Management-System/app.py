import joblib
import pandas as pd
from flask import Flask, request, jsonify
from flask_cors import CORS

app = Flask(__name__)
CORS(app)

# Load the model, scaler, and feature names
model = joblib.load("logistic_regression_model.pkl")
scaler = joblib.load("scaler.pkl")
feature_names = joblib.load("feature_names.pkl")  # Feature names used in training

def preprocess_input(data):
    """Preprocess input data to match training format."""
    df = pd.DataFrame([data])
    
    categorical_columns = ["hotel", "meal", "country", "market_segment", 
                           "distribution_channel", "deposit_type", "customer_type", "lead_time_category"]
    
    # One-hot encoding
    df_encoded = pd.get_dummies(df, columns=categorical_columns, drop_first=True)
    
    # Ensure input has the same feature columns as training data
    df_encoded = df_encoded.reindex(columns=feature_names, fill_value=0)
    
    # Scale input features
    df_scaled = scaler.transform(df_encoded)
    
    return df_scaled

@app.route('/predict', methods=['POST'])
def predict():
    try:
        data = request.get_json()
        if not data:
            return jsonify({"error": "Invalid input data"}), 400
        
        processed_data = preprocess_input(data)
        prediction = model.predict(processed_data)
        
        return jsonify({"cancellation_prediction": int(prediction[0])})
    except Exception as e:
        return jsonify({"error": str(e)}), 500

if __name__ == '__main__':
    app.run(debug=True, host='0.0.0.0', port=5000)
