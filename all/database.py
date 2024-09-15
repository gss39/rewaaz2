# Define a function
import mysql.connector


def data():

    mydb = mysql.connector.connect(
        host="localhost",
        user="root",
        password="",
        database="ecomrce"
    )

    mycursor = mydb.cursor()

    mycursor.execute("SELECT * FROM ecomrce_web")

    myresult = mycursor.fetchall()

   

    return myresult   


def query(query):

    
   
    mydb = mysql.connector.connect(
        host="localhost",
        user="root",
        password="",
        database="ecomrce"
    )

    mycursor = mydb.cursor()

    mycursor.execute("SELECT * FROM `ecomrce_web` WHERE catg LIKE '%"+query+"%' OR  title LIKE '%"+query+"%'  OR  color LIKE '%"+query+"%' ")

    myresult = mycursor.fetchall()

    

    return myresult   







 

    


