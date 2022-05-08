# %%
import pandas as pd
import numpy as np
import requests
from bs4 import BeautifulSoup

# %%
producten_alle_paginas = []

for i in range(1,150):
    response = requests.get(f"https://www.bol.com/be/nl/s/?searchtext=tuinieren")
    content = response.content
    parser = BeautifulSoup(content, 'html.parser')
    body = parser.body
    producten = body.find_all(class_="product-item--row js_item_root")
    producten_alle_paginas.extend(producten)
    
len(producten_alle_paginas)

# %%
prijs = float(producten_alle_paginas[6].meta.get('content'))
productnaam = producten_alle_paginas[6].find(class_="product-title--inline").a.getText()
print(prijs)
print(productnaam)

# %%
productlijst = []

for item in producten_alle_paginas:
    if item.find(class_="product-prices").getText() == '\nNiet leverbaar\n':
        prijs = None
    else:
        prijs = float(item.meta['content'])
    product = item.find(class_="product-title--inline").a.getText()
    productlijst.append([product, prijs])
    
print(productlijst[:150])

# %%
df = pd.DataFrame(productlijst, columns=["Product", "prijs"])
print(df.shape)
df["prijs"].describe()


