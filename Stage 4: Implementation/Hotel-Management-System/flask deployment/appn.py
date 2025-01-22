from flask import Flask, request, jsonify, render_template
import numpy as np
from tensorflow import keras
import json

app = Flask(__name__)

# Load model configuration from JSON file
with open('models/keras_model/config.json') as f:
    model_config = json.load(f)

# Rebuild the model using the configuration
model = keras.models.model_from_json(json.dumps(model_config))

# Load the weights into the model
model.load_weights('models/keras_model/model.weights.h5')

# Defining a prediction function for Keras
def keras_prediction(features, model):
    predictions = model.predict(features)
    return predictions

# Root route to serve the HTML form
@app.route('/', methods=['GET'])
def index():
    return render_template('index.html')

# Route to handle Keras prediction
@app.route('/predict_keras_model', methods=['POST'])
def predict_keras_model():
    try:
        # Getting the request data from the user in JSON format
        request_json = request.get_json()

        # Extracting the features from the request
        features = request_json["features"]

        # Reshaping the features to match the model input (1, number_of_features)
        features_array = np.array(features).reshape(1, -1)

        # Keras prediction function
        result = keras_prediction(features_array, model)

        # Returning the result as a JSON response
        return jsonify(result.tolist())

    except Exception as e:
        return jsonify({'error': str(e)})

if __name__ == '__main__':
    app.run(port=5000, debug=True)
