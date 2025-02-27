import joblib
import pandas as pd
from flask import Flask, request, jsonify, render_template

app = Flask(__name__)

# Load the model, scaler, and feature names
model = joblib.load("logistic_regression_model.pkl")
scaler = joblib.load("scaler.pkl")
feature_names = joblib.load("feature_names.pkl")  # Feature names used in training

@app.route('/')
def home():
    return render_template('index.html')

@app.route('/predict', methods=['POST'])
def predict():
    data = request.get_json()  # Correct way to read JSON

    if not data:
        return jsonify({"error": "Invalid input data"}), 400

    # Convert JSON input into a DataFrame
    df = pd.DataFrame([data])

    # Define categorical columns for one-hot encoding
    categorical_columns = ["hotel", "meal", "country", "market_segment", 
                           "distribution_channel", "deposit_type", "customer_type", "lead_time_category"]

    df_encoded = pd.get_dummies(df, columns=categorical_columns, drop_first=True)

    # Ensure input has the same feature columns as training data
    df_encoded = df_encoded.reindex(columns=feature_names, fill_value=0)

    # Scale input features
    df_scaled = scaler.transform(df_encoded)

    # Make prediction
    prediction = model.predict(df_scaled)

    return jsonify({"cancellation_prediction": int(prediction[0])})


if __name__ == '__main__':
    app.run(debug=True)
