import pymysql
class Crud:
    def Insert(self,nome,descricao,valor,categorias):
        connection = pymysql.connect(
            host='localhost',
            user='root',
            passwd='root'
        )
        cursor = connection.cursor()
        sql=("INSERT INTO olist.produtos (`nome`, `descricao`, `valor`, `categorias`) VALUES (%s, %s, %s,%s)")
        values=(nome,descricao,valor,categorias)
        cursor.execute(sql,values)
        connection.commit()
    def Alter(Ref):
        connection = pymysql.connect(
            host='localhost',
            user='root',
            passwd='root'
        )
        cursor = connection.cursor()
        sql = "select nome,descricao,valor,categorias from olist.produtos where produtos.nome=%s"
        values=(Ref)
        cursor.execute(sql,values)
        record=cursor.fetchone()
        if record:
            print(record)
            print("Digite os novos valores para seu registro")
            print("NOME | DESCRICAO | VALOR | CATEGORIA")
            nome=input(" Digite o novo nome do seu produto")
            desc=input("Digite a nova descrição do produto")
            value = input("Digite o novo valor do produto")
            print("Digite as novas categorias do produto, Tendo '1'-Moveis ,'2'-Decoração, '3'-Celular, '4'-Informatica, '5'-Brinquedos   ")
            cat=input("")
            values=int(value)
            sql = "UPDATE `olist`.`produtos` SET `nome` = %s, `descricao` = %s , `valor` = %s, `categorias` = %s WHERE (`nome` = %s);"
            val=(nome,desc,int(value),cat,Ref)
            cursor.execute(sql,val)
            connection.commit()
        else:
            print("Não existe o produto com este nome")
    def Del(Ref):
        connection = pymysql.connect(
            host='localhost',
            user='root',
            passwd='root'
        )
        cursor = connection.cursor()
        sql = "select nome,descricao,valor,categorias from olist.produtos where produtos.nome=%s"
        values = (Ref)
        cursor.execute(sql, values)
        record=cursor.fetchone()
        if record:
            sql = "DELETE FROM `olist`.`produtos` WHERE (`nome` = %s);"
            values=(Ref)
            cursor.execute(sql,values)
            commit=connection.commit()
            print("Produto deletado")
        else:
            print("Produto não encontrado")
    def SelectName(Ref):
        connection = pymysql.connect(
            host='localhost',
            user='root',
            passwd='root'
        )
        cursor = connection.cursor()
        sql = "select nome,descricao,valor,categorias from olist.produtos where produtos.nome like '%"+Ref+"%'"
        cursor.execute(sql)
        record=cursor.fetchall()
        if record:
            for x in record:
                print(x)
        else:
            print("Não existe Produtos com este nome ou parecido")

    def SelectDesc(Ref):
        connection = pymysql.connect(
            host='localhost',
            user='root',
            passwd='root'
        )
        cursor = connection.cursor()
        sql = "select nome,descricao,valor,categorias from olist.produtos where produtos.descricao like '%"+Ref+"%'"
        values = (Ref)
        cursor.execute(sql)
        record=cursor.fetchall()
        if record:
            for x in record:
                print(x)
        else:
            print("Não existe Produtos com esta descricao ou parecido")
    def SelectValue(Ref):
        connection = pymysql.connect(
            host='localhost',
            user='root',
            passwd='root'
        )
        cursor = connection.cursor()
        sql = "select nome,descricao,valor,categorias from olist.produtos where produtos.valor<= %s"
        values = (Ref)
        cursor.execute(sql,values)
        record=cursor.fetchall()
        if record:
            for x in record:
                print(x)
        else:
            print("Não existe Produtos com esta descricao ou parecido")

    def SelectCat(Ref):
        connection = pymysql.connect(
            host='localhost',
            user='root',
            passwd='root'
        )
        cursor = connection.cursor()
        sql = "SELECT produtos.id,produtos.nome,produtos.descricao,produtos.valor,produtos.categorias,categorias.nome as Categoria FROM olist.produtos inner join olist.categorias on categorias.id=produtos.categorias where categorias.nome like '%"+Ref+"%'"
        values = (Ref)
        cursor.execute(sql)
        record=cursor.fetchall()
        if record:
            for x in record:
                print(x)
        else:
            print("Não existe Produtos com esta descricao ou parecido")






#user=Crud.Insert('Geladeira','Geladeira','220V','2000','1')
#user=Crud.Alter('Geladeira')
#user=Crud.Del('Geladeir')
#user=Crud.SelectName('Geladeiras')
#user=Crud.SelectDesc('Gela')
user=Crud.SelectValue(3000)
#user=Crud.SelectCat('mov')