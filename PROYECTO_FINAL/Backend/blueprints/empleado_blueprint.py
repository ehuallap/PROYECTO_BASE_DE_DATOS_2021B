from flask import Flask
from flask import Blueprint
from flask import request
from flask import jsonify
from flask_cors import CORS, cross_origin
from function_jwt import validate_token

from modelos.empleado_modelo import EmpleadoModel
empleado_blueprint = Blueprint('empleado_blueprint', __name__)

empleado = EmpleadoModel()

@empleado_blueprint.before_request
def verify_token_middleware():
    token = request.headers['Authorization'].split(" ")[1]
    return validate_token(token, output=False)

@empleado_blueprint.route('/empleado/create', methods=['POST'])
@cross_origin()
def create_model():
    content = empleado.create_empleado(request.json['codigo_empleado'], request.json['nombre_empleado'],
                                     request.json['pri_apellido_empleado'], request.json['seg_apellido_empleado'], request.json['turno_empleado'])
    return jsonify(content)

@empleado_blueprint.route('/empleado/get', methods=['GET'])
@cross_origin()
def get_models():
    return jsonify(empleado.get_empleados())

@empleado_blueprint.route('/empleado/delete', methods=['GET'])
@cross_origin()
def delete_models():
    return jsonify(empleado.delete_empleado(int(request.json['codigo'])))
