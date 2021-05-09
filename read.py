import mysql.connector  
mysqldb=mysql.connector.connect(host="localhost",user="root",password="",database="strtup")  
mycursor=mysqldb.cursor()
email = input("Enter email : ")
password = input("Enter password : ")
try:
   mycursor.execute("select * from docreg where email = '%s'" % (email))
   print("Login Sucessful")  
except:   
   print('Error:Unable to fetch data.')  
mysqldb.close()