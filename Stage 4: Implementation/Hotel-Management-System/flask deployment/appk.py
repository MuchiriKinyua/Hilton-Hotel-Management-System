from flask import Flask, request, jsonify, render_template
import numpy as np
import pickle

app = Flask(__name__)

# Loading the KNN model
knn_model = pickle.load(open('models/knn_model.pkl', 'rb'))

# Defining a prediction function for KNN
def knn_prediction(features, model):
    predictions = model.predict(features)
    return predictions

# Root route to serve the HTML form
@app.route('/', methods=['GET'])
def index():
    return render_template('index.html')

# Route to handle KNN prediction
@app.route('/predict_knn_model', methods=['POST'])
def predict_knn_model():
    try:
        # Getting the request data from the user in JSON format
        request_json = request.get_json()

        # Extracting the features from the request
        features = request_json["features"]

        # Reshaping the features to match the model input (1, number_of_features)
        features_array = np.array(features).reshape(1, -1)

        # KNN prediction function
        result = knn_prediction(features_array, knn_model)

        # Returning the result as a JSON response
        return jsonify(result.tolist())

    except Exception as e:
        return jsonify({'error': str(e)})

if __name__ == '__main__':
    app.run(port=5000, debug=True)