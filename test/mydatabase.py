
import mysql.connector

def fetch_data():

    mydb = mysql.connector.connect(
        host="localhost",
        user="root",
        password="",
        database="mydatabase"

        # host="localhost",
        # user="egxcmgbg_brandonly",
        # password="brandonly!@#",
        # database="egxcmgbg_ecomrce_website"
    )

    mycursor = mydb.cursor()
    mycursor.execute("SELECT * FROM products")
    myresult = mycursor.fetchall()
    links =[]
    for i in myresult:
     link  = "https://www.amazon.in/dp/"+i[1]+""
     links.append(link)
    
    return links  
    


    

    

     


