from connection.connection_pool import MySQLPool

class ClienteModel:
    def __init__(self):
        self.mysql_pool = MySQLPool()

    def create_cliente(self, dni_cliente, nombre_cliente, pri_apellido_cliente, seg_apellido_cliente, telefono_cliente):
        params = {
            'dni_cliente': dni_cliente,
            'nombre_cliente': nombre_cliente,
            'pri_apellido_cliente': pri_apellido_cliente,
            'seg_apellido_cliente': seg_apellido_cliente,
            'telefono_cliente': telefono_cliente,
        }
        query = """CALL insert_cliente(%(dni_cliente)s,%(nombre_cliente)s,%(pri_apellido_cliente)s,
                    %(seg_apellido_cliente)s,%(telefono_cliente)s)"""
        cursor = self.mysql_pool.execute(query, params, commit=True)
        data = {'dni_cliente': dni_cliente, 'nombre_cliente': nombre_cliente, 'pri_apellido_cliente': pri_apellido_cliente,
                'seg_apellido_cliente': seg_apellido_cliente, 'telefono_cliente': telefono_cliente}
        return data

    def get_clientes(self):
        rv = self.mysql_pool.execute("""SELECT * FROM cliente ORDER BY DNI""")
        data = []
        content = {}
        for result in rv:
            content = {'DNI': result[0], 'telefono': result[1]}
            data.append(content)
            content = {}
        return data

    def delete_cliente(self, dni_cliente):
        params = {'dni_cliente': dni_cliente}
        query = """DELETE FROM cliente WHERE DNI = %(dni_cliente)s"""
        self.mysql_pool.execute(query, params, commit=True)
        data = {'result': 'success'}
        return data


if __name__ == "__main__":
    tm = ClienteModel()
    print(tm.get_clientes())
