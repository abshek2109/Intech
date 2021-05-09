import mysql.connector  
mysqldb=mysql.connector.connect(host="localhost",user="root",password="",database="strtup")  
mycursor=mysqldb.cursor() 
name = input("Enter your name: ")
email = input("Enter your email: ")
mobile = input("Enter your number: ")
age = input("Enter your age: ")
password = input("Enter password: ")
try:

   mycursor.execute('INSERT INTO docreg VALUES ("%s","%s","%s","%s","%s")'% (name, email, mobile, age, password)) 
   mysqldb.commit() 
   print('Record inserted successfully...')   
except:
   mysqldb.rollback()  
mysqldb.close()