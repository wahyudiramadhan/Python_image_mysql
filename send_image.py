import mysql.connector  # pip3 install mysql-connector
import datetime  # pip install datetime
now = datetime.datetime.now()


def convertToBinaryData(filename):
    # Convert digital data to binary format
    with open(filename, 'rb') as file:
        binaryData = file.read()
    return binaryData


def insertBLOB(id, image, datetime):
    print("Inserting....")
    try:
        connection = mysql.connector.connect(
            host="localhost", user="root", password="", database="db_cam_server")
        cursor = connection.cursor()
        sql_insert_blob_query = "INSERT INTO tb_cam_server (id, image, datetime) VALUES (%s,%s,%s)"
        empPicture = convertToBinaryData(image)
        # Convert data into tuple format
        insert_blob_tuple = (id, empPicture, datetime)
        result = cursor.execute(sql_insert_blob_query, insert_blob_tuple)
        connection.commit()
        print("Image and file inserted successfully as a BLOB into tb cam server", result)
    except mysql.connector.Error as error:
        print("Failed inserting BLOB data into MySQL table {}".format(error))

    finally:
        if connection.is_connected():
            cursor.close()
            connection.close()
            print("MySQL connection is closed")
            
            
insertBLOB("", "opencv.png", datetime.datetime.now())



