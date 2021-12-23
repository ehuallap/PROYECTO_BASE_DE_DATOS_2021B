from flask import Blueprint, request
from flask import jsonify
from function_jwt import write_token, validate_token

blueprint_auth = Blueprint("routes_auth", __name__)

@blueprint_auth.route("/login", methods=["POST"])
def login():
    data = request.get_json()
    if data['username'] == "Erick Hualla":
        return write_token(data=request.get_json())
    else:
        response = jsonify({"message": "User not found"})
        response.stats_code = 404
        return response

@blueprint_auth.route("/verify/token")
def verify():
    token = request.headers['Authorization'].split(" ")[1]
    return validate_token(token, output=True)
