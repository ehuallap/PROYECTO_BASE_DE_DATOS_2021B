from connection.connection_pool import MySQLPool

class LavadoraModel:
    def __init__(self):
        self.mysql_pool = MySQLPool()

    def create_lavadora(self, precio, nombre_proveedor, peso, color, nombre_tienda, stock):
        params = {
            'precio': precio,
            'nombre_proveedor': nombre_proveedor,
            'peso': peso,
            'color': color,
            'nombre_tienda': nombre_tienda,
            'stock': stock
        }
        query = """CALL insert_lavadora(%(precio)s,%(nombre_proveedor)s,%(peso)s,%(color)s,%(nombre_tienda)s,%(stock)s)"""
        cursor = self.mysql_pool.execute(query, params, commit=True)
        data = {'id': cursor.lastrowid, 'precio': precio, 'nombre_proveedor': nombre_proveedor, 'peso': peso, 'color': color, 'nombre_tienda': nombre_tienda, 'stock': stock}
        return data

    def get_lavadoras(self):
        rv = self.mysql_pool.execute("""SELECT * FROM lavadora ORDER BY precio""")
        data = []
        content = {}
        for result in rv:
            content = {'id': result[0], 'precio': result[1], 'id_proveedor': result[2]}
            data.append(content)
            content = {}
        return data

    def delete_lavadora(self, lavadora_id):
        params = {'id': lavadora_id}
        query = """DELETE FROM lavadora WHERE id_lavadora = %(id)s"""
        self.mysql_pool.execute(query, params, commit=True)
        data = {'result': 'success'}
        return data


if __name__ == "__main__":
    tm = LavadoraModel()
    print(tm.get_modelos())
