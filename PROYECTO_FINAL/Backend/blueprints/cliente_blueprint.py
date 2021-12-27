from flask import Flask
from flask import Blueprint
from flask import request
from flask import jsonify
from flask_cors import CORS, cross_origin
from function_jwt import validate_token

from modelos.cliente_modelo import ClienteModel
cliente_blueprint = Blueprint('cliente_blueprint', __name__)

cliente = ClienteModel()

@cliente_blueprint.before_request
def verify_token_middleware():
    token = request.headers['Authorization'].split(" ")[1]
    return validate_token(token, output=False)

@cliente_blueprint.route('/cliente/create', methods=['POST'])
@cross_origin()
def create_model():
    content = cliente.create_cliente(request.json['dni_cliente'], request.json['nombre_cliente'],
                                     request.json['pri_apellido_cliente'], request.json['seg_apellido_cliente'], request.json['telefono_cliente'])
    return jsonify(content)

@cliente_blueprint.route('/cliente/get', methods=['GET'])
@cross_origin()
def get_models():
    return jsonify(cliente.get_clientes())

@cliente_blueprint.route('/cliente/delete', methods=['GET'])
@cross_origin()
def delete_models():
    return jsonify(cliente.delete_cliente(int(request.json['dni'])))
