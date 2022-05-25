from re import T
from bs4 import BeautifulSoup
import requests
import numpy as np
import mysql.connector
from mysql.connector import Error
from jmespath import search
import pandas as pd
import random
import pyodbc


product = []
# # Interest = input("What are you interested in? ")
file = open("interest.txt", "r")
searchTerm = file.read() # volledige text terug .ReadToEnd()
request = requests.get("https://www.bol.com/nl/nl/s/?searchtext="+ searchTerm).text
soup = BeautifulSoup(request, "html.parser")

for i in range(1,2):
    products = soup.find_all('ul', {'class': "list-view product-list js_multiple_basket_buttons_page"})
    
    #TITLE
    ProductTitle = soup.find_all('a', {'class': "product-title px_list_page_product_click"})
    for j in ProductTitle[0]:
        ProductTitles = j.get_text()
        product.append(j.get_text() + ";")
        # print(ProductTitles)
    t =""
    #PRICE
    ProductPrice = soup.find_all('span', {'class': "promo-price"})
    ProdPrice = ProductPrice[0].text
    ProdPrice = ProdPrice.replace("  -", "").strip()
    print(ProdPrice)
            
    Images = []
    ProductImage = soup.find_all('div', {"class" : "h-o-hidden"})
    for img in ProductImage:
        imgs = img.find('img')
        image = imgs.get('src')
        image = str(image)
        Images.append(image)


    ProductLink = soup.find_all('a', {'class': "product-title px_list_page_product_click"})
    ProductLink[0]
    # print(ProductLink[0]["href"])
    URL = "https://www.bol.com" + str(ProductLink[0]["href"])
    ProductTitles = ProductLink[0]["href"].split("/")
    ProductTitles = [ProductTitles[4]]
    ProdTitles = ""
    for p in ProductTitles:
        ProdTitles += p
    # print(ProdTitles)
    product.append(URL)
    # product[1] = product[1] + product[2]
    # product[2]=''
    URL = product[1]
    print(URL)
producten = ""
for x in product: 
        producten += "<p>" + x +"</p>"
f = open("scrapeToPhp.php", "w")
f.write(producten)
f.close()


connection = mysql.connector.connect(
  host="localhost",
  user="admin",
  password="admin",
  database="gopresent"
)

cursor = connection.cursor()

sql = "INSERT INTO products (product_name, product_price, ProductURL, searchTerm, ImageURL) VALUES (%s, %s, %s, %s, %s)"
val = [(ProdTitles, ProdPrice, URL, searchTerm, Images[0])]

cursor = connection.cursor()
# params = (val,)
cursor.executemany(sql, (val))
connection.commit()
print(cursor.rowcount, "Record inserted successfully")
cursor.close()

connection.commit()
print(cursor.rowcount, "was inserted.")

