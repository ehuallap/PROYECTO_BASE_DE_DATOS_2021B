from flask import Flask
from flask import Blueprint
from flask import request
from flask import jsonify
from flask_cors import CORS, cross_origin
from function_jwt import validate_token

from modelos.venta_modelo import VentaModel

venta_blueprint = Blueprint('venta_blueprint', __name__)

venta = VentaModel()

@venta_blueprint.before_request
def verify_token_middleware():
    token = request.headers['Authorization'].split(" ")[1]
    return validate_token(token, output=False)


@venta_blueprint.route('/venta/create', methods=['POST'])
@cross_origin()
def create_model():
    content = venta.create_venta(request.json['nombre_cliente'], request.json['pri_apellido_cliente'],
                                 request.json['seg_apellido_cliente'],
                                 request.json['nombre_empleado'], request.json['pri_apellido_empleado'],
                                 request.json['seg_apellido_empleado'],
                                 request.json['fecha_venta'], request.json['nombre_tienda'],
                                 request.json['codigo_lavadora'],
                                 request.json['cantidad_lavadora'])
    return jsonify(content)


@venta_blueprint.route('/venta/get', methods=['GET'])
@cross_origin()
def get_models():
    return jsonify(venta.get_ventas())


@venta_blueprint.route('/venta/delete', methods=['GET'])
@cross_origin()
def delete_models():
    return jsonify(venta.delete_venta(int(request.json['id'])))
