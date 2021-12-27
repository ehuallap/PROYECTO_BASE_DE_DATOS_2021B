from connection.connection_pool import MySQLPool

class VentaModel:
    def __init__(self):
        self.mysql_pool = MySQLPool()

    def create_venta(self, nombre_cliente, pri_apellido_cliente, seg_apellido_cliente,
                     nombre_empleado, pri_apellido_empleado, seg_apellido_empleado, fecha_venta, nombre_tienda,
                     codigo_lavadora, cantidad_lavadora):
        params = {
            'nombre_cliente': nombre_cliente,
            'pri_apellido_cliente': pri_apellido_cliente,
            'seg_apellido_cliente': seg_apellido_cliente,
            'nombre_empleado': nombre_empleado,
            'pri_apellido_empleado': pri_apellido_empleado,
            'seg_apellido_empleado': seg_apellido_empleado,
            'fecha_venta': fecha_venta,
            'nombre_tienda': nombre_tienda,
            'codigo_lavadora': codigo_lavadora,
            'cantidad_lavadora': cantidad_lavadora
        }
        query = """CALL insert_venta(%(nombre_cliente)s,%(pri_apellido_cliente)s,%(seg_apellido_cliente)s,
                    %(nombre_empleado)s,%(pri_apellido_empleado)s,%(seg_apellido_empleado)s, %(fecha_venta)s,
                    %(nombre_tienda)s, %(codigo_lavadora)s, %(cantidad_lavadora)s)"""
        cursor = self.mysql_pool.execute(query, params, commit=True)
        data = {'id_venta': cursor.lastrowid, 'nombre_cliente': nombre_cliente, 'nombre_empleado': nombre_empleado,
                'fecha_venta': fecha_venta, 'nombre_tienda': nombre_tienda, 'codigo_lavadora': codigo_lavadora,
                'cantidad_lavadora': cantidad_lavadora}
        return data

    def get_ventas(self):
        rv = self.mysql_pool.execute("""SELECT * FROM venta_lavad ORDER BY cant_lav""")
        data = []
        content = {}
        for result in rv:
            content = {'id_venta': result[0], 'id_lavadora': result[1], 'cantidad': result[2]}
            data.append(content)
            content = {}
        return data

    def delete_venta(self, venta_id):
        params = {'id': venta_id}
        query = """DELETE FROM venta_lavad WHERE id_venta = %(id)s"""
        self.mysql_pool.execute(query, params, commit=True)
        data = {'result': 'success'}
        return data


if __name__ == "__main__":
    tm = VentaModel()
    print(tm.get_lavadoras())
