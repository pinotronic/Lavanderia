import csv
import json
import pandas as panda

with open ("archivo.json", "w") as archivo:
    archivo.write("")
    archivo.close()
    cargarArchivo=panda.DataFrame(panda.read_csv("primeros2000.csv",sep=",",header=0,index_col=False))
    cargarArchivo.to_json("archivo.json",orient="records",date_format="epoch",double_precision=10,force_ascii=True,date_unit="ms",default_handler=None)
    
    