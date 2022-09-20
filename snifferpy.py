import socket
import datetime
import mysql.connector


# Mysqldata

mydb = mysql.connector.connect(
  host="database-1.cgvkojo0ntbn.us-east-1.rds.amazonaws.com",
  user="std",
  password="tetris72",
  database="firts"
)


#NetData


localIP     = "172.31.28.106"

localPort   = 51000

bufferSize  = 1024




# Create a datagram socket

UDPServerSocket = socket.socket(family=socket.AF_INET, type=socket.SOCK_DGRAM)

 

# Bind to address and ip

UDPServerSocket.bind((localIP, localPort))

 

print("UDP server up and listening")

 

# Listen for incoming datagrams

            
while(True):
    
    

    bytesAddressPair = UDPServerSocket.recvfrom(bufferSize)

    message = bytesAddressPair[0]

    address = bytesAddressPair[1]

    clientMsg = format(message)

    mensaje = clientMsg.split("\"")

    latitude = mensaje[3]
    longitude = mensaje[7]
    date = mensaje[11].translate({ord('\\'): None})
    
    print(latitude, longitude, date)
    
    
    mycursor = mydb.cursor()

    sql = "INSERT INTO tabla (Latitude, Longitude, Datemy) VALUES (%s, %s, %s)"
    val = (latitude, longitude, date)
    mycursor.execute(sql, val)

    mydb.commit()

    print(mycursor.rowcount, "record inserted.")