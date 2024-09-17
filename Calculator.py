from flask import Flask, request, jsonify

app = Flask(__name__)

@app.route('/calculate', methods=['POST'])
def calculate():
    expression = request.json.get('expression', '')
    try:
        result = eval(expression)
        return jsonify({'result': result})
    except:
        return jsonify({'result': 'Error'}), 400

if __name__ == '__main__':
    app.run(debug=True)
