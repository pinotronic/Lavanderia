# Programa para corregir datos de un archivo de texto
# Autor:Pino Martin Vargas Marquez
# NOMBRE,APELLIDOPATERNO,APELLIDOMATERNO,RFC,SEXO,CALLE,COLONIA,MUNICIPIO,ESTADO,CODIGOPOSTAL,TEL1,TEL2,TEL3,MAIL,BALANCE

# funcion para cargar archivo
def cargarArchivo(nombreArchivo):
    archivo = open(nombreArchivo, "r")
    lineas = archivo.readlines()
    archivo.close()
    return lineas

# funcion para extraer linea por linea, enviarla a la funcion encontrarFormato y devolver el resultado
def extraerLinea(lineas):
    for linea in lineas:
        contarComas(linea)        

# contar comas en una linea
def contarComas(linea):
    contador = 0
    for caracter in linea:
        if caracter == ",":
            contador += 1
    print(contador)
    if contador == 12:
        NombreCompleto = extraerNombre(linea)  
        contadorEspacio = contarEspacios(NombreCompleto)
        extraerNombreCompleto(contadorEspacio,NombreCompleto)
    return linea

# extraer nombre completo
def extraerNombre(linea):
    cadenaNombre = ""
    for caracter in linea:
        if caracter == ",":            
            print (caracter)   
            break        
        cadenaNombre += caracter
    return cadenaNombre

def contarEspacios(linea):
    contador = 0
    for caracter in linea:
        if caracter == " ":
            contador += 1
    print(contador)
   
    return contador

# funcion extraer nombre, apellido paterno, apellido materno
def extraerNombreCompleto(contadorEspacio,NombreCompleto):
    nombre = ""
    apellidoPaterno = ""
    apellidoMaterno = ""
    for caracter in NombreCompleto:
        if caracter == " ":
            contadorEspacio -= 1
            if contadorEspacio == 3:
                break
        if contadorEspacio == 4:
            apellidoPaterno += caracter
        if contadorEspacio == 5:
            apellidoMaterno += caracter

    print(nombre)
    print(apellidoPaterno)
    print(apellidoMaterno)
    return nombre,apellidoPaterno,apellidoMaterno



datos = cargarArchivo("primeros2000.txt")
extraerLinea(datos)