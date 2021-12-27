from connection.connection_pool import MySQLPool

class EmpleadoModel:
    def __init__(self):
        self.mysql_pool = MySQLPool()

    def create_empleado(self, dni_empleado, nombre_empleado, pri_apellido_empleado, seg_apellido_empleado, turno_empleado):
        params = {
            'dni_empleado': dni_empleado,
            'nombre_empleado': nombre_empleado,
            'pri_apellido_empleado': pri_apellido_empleado,
            'seg_apellido_empleado': seg_apellido_empleado,
            'turno_empleado': turno_empleado,
        }
        query = """CALL insert_empleado(%(dni_empleado)s,%(nombre_empleado)s,%(pri_apellido_empleado)s,
                    %(seg_apellido_empleado)s,%(turno_empleado)s)"""
        cursor = self.mysql_pool.execute(query, params, commit=True)
        data = {'dni_empleado': dni_empleado, 'nombre_empleado': nombre_empleado, 'pri_apellido_empleado': pri_apellido_empleado,
                'seg_apellido_empleado': seg_apellido_empleado, 'turno_empleado': turno_empleado}
        return data

    def get_empleados(self):
        rv = self.mysql_pool.execute("""SELECT * FROM empleado ORDER BY id_empleado""")
        data = []
        content = {}
        for result in rv:
            content = {'Codigo': result[0], 'Turno': result[1]}
            data.append(content)
            content = {}
        return data

    def delete_empleado(self, codigo_empleado):
        params = {'codigo_empleado': codigo_empleado}
        query = """DELETE FROM empleado WHERE DNI = %(codigo_empleado)s"""
        self.mysql_pool.execute(query, params, commit=True)
        data = {'result': 'success'}
        return data


if __name__ == "__main__":
    tm = EmpleadoModel()
    print(tm.get_empleados())
