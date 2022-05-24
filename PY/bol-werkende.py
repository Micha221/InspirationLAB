# %%
from jmespath import search
import pandas as pd
import numpy as np
import requests
from bs4 import BeautifulSoup
import random


# %%
producten_alle_paginas = []
search = input()
for i in range(1,50):
    response = requests.get(f"https://www.bol.com/be/nl/s/?searchtext=%22"+search)
    content = response.content
    parser = BeautifulSoup(content, 'html.parser')
    body = parser.body
    producten = body.find_all(class_="product-item--row js_item_root")
    producten_alle_paginas.extend(producten)

len(producten_alle_paginas)

# %%
productlijst = []

for item in producten_alle_paginas:
    if item.find(class_="product-prices").getText() == '\nNiet leverbaar\n':
        prijs = None
    else:
        prijs = float(item.meta['content'])
    product = item.find(class_="product-title--inline").a.getText()
    productlijst.append([product, prijs])

print(productlijst[:])

# %%
list = producten_alle_paginas
item = random.choice(list)
print(item)



# %%
