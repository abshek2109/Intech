import mysql.connector  
mysqldb=mysql.connector.connect(host="localhost",user="root",password="",database="strtup")  
mycursor=mysqldb.cursor() 
startup_id = "0"
founder_id = "0"
date ="0000-00-00"
name = input("Enter Problem statement name: ")
desc = input("Enter Problem description: ")
sol = input("Enter your proposed solution: ")
user = input("Enter your email: ")

try:

   mycursor.execute('INSERT INTO form VALUES ("%s","%s","%s","%s","%s","%s","%s")'% (startup_id, name, desc, sol, user, founder_id, date)) 
   mysqldb.commit() 
   print('Record inserted successfully...')   
except:
   mysqldb.rollback()  
mysqldb.close()