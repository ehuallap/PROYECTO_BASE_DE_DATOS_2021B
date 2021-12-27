from flask import Flask
from flask import Blueprint
from flask import request
from flask import jsonify
from flask_cors import CORS, cross_origin
from function_jwt import validate_token

from modelos.lavadora_modelo import LavadoraModel
lavadora_blueprint = Blueprint('lavadora_blueprint', __name__)

lavadora = LavadoraModel()

@lavadora_blueprint.before_request
def verify_token_middleware():
    token = request.headers['Authorization'].split(" ")[1]
    return validate_token(token, output=False)

@lavadora_blueprint.route('/lavadora/create', methods=['POST'])
@cross_origin()
def create_model():
    content = lavadora.create_lavadora(float(request.json['precio']), request.json['nombre_proveedor'], float(request.json['peso']), request.json['color'], request.json['nombre_tienda'], int(request.json['stock']))
    return jsonify(content)


@lavadora_blueprint.route('/lavadora/get', methods=['GET'])
@cross_origin()
def get_models():
    return jsonify(lavadora.get_lavadoras())

@lavadora_blueprint.route('/lavadora/delete', methods=['GET'])
@cross_origin()
def delete_models():
    return jsonify(lavadora.delete_lavadora(int(request.json['id'])))
