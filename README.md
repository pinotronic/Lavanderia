# Evaluar un pull request

## Que es un pull request

    Al trabajar con un equipo de programación, es necesario realizar una solicitud para incorporar el nuevo código Programado, al proyecto oficial, Esto con el Fin de notificarle a los miembros del equipo, así como también a las personas encargadas de revisar el código lo revisen y autoricen, con el fin poder fusionarlo en el main o rama raíz.

Una vez revisado enviarlo a producción.

Hola mundo y bienvenido a este video hoy te presentare Porque utilizar el pull request

## Porque utilizar el pull request

Es muy importante que al estar programando se cree un flujo de trabajo donde se queden registrados todos los cambios realizados al código principal, antes de que el código desarrollado por algún programador sea incorporado a éste, debe ser revisado minuciosamente por los encargados de calidad, con él con el fin de evitar errores, en producción.

## formas en donde se puede  Implementar el Pull request

Hay diferentes formas de realizar un pull quest:

1.- en el diseño:

En este punto se construyen los diseños teniendo como objetivo su usabilidad o la navegación de las preferencias del usuario, con esto podemos proporcionar las guías de estilo para el proyecto.

2.- Se puede escribir:

en base a la documentación del mismo proyecto podemos crear notas con ejemplos con los que nos demos la idea de cómo implementarlos en nuestro proyecto.

3.- Se puede organizar:

En este punto organizaremos las nuevas etiquetas que surjan los problemas que se encuentren Con el Fin de crear una mejora del proyecto.

4.-  Se puede ayudar a otros desarrolladores

Podemos revisar el código enviado por otros desarrolladores, y sugerir cambios o modificaciones con el Fin de mejorar el código.

6.-  Se puede elaborar algún código.

podemos encontrar nuevas funciones, realizar mejoras a las funciones que tenemos, así como proponer pruebas o realizar pruebas.

## Como Implementar el Pull request

Cómo implementar el pull quest, esta es una muy buena pregunta, ya que para empezar a realizarlo por ejemplo desde github, lo primero que tenemos que hacer es clonar el repositorio en la máquina con la cual vamos a trabajar localmente, esto lo podemos lograr dando un clic en el botón code del proyecto y copiando la dirección que nos muestra.

posteriormente abrimos la terminal y ejecutamos el siguiente comando con el Fin de clonar en nuestra máquina el repositorio

$ git clone [DIRECCIÓN HTTPS]

Una vez haciendo esto podemos ir a repositorio clonado ejecutando el siguiente comando

```
$ cd [NOMBRE DEL REPOSITORIO]
```

A continuación crearemos una rama, ojo ponle un nombre con alguna descripción breve que refleje el trabajo que estamos realizando

```
$ git checkout -b [Nombre de la Rama]
```

posteriormente ya que hayamos realizado los cambios y estos se hayan guardado, verificaremos con el siguiente comando el estatus

git status

posteriormente agregamos los cambios a la nueva rama

```
$ git add 
```

Y los confirmamos con el siguiente comando

```
$ git commit -m "Adding an article to week 02 of articles of the week"
```

### Pero esto no se queda aquí tenemos que volver a enviar los cambios a GitHub

```
$ git remote “NOMBRE DEL REPOSITORIO”
```

```
git push origin [Nombre de la Rama]
```

### Por último hacemos un pull request Y la página de GitHub

### Que no se te olvide primero revisar la rama en la cual estás ubicado con el siguiente comando

```
$ git branch
```

### Sí ya estás seguro de que todo está bien que no tiene errores puedes cambiar a la rama maestra

```
$ git checkout master
```

Con esto terminamos el proceso, este fue el video de esta semana si te gusto, recuerda golpear mucho el maldito del botón de me gusta, si te encanto considera suscribirte a este canal déjame un comentario aquí abajo.

### Fuente: [https://www.atlassian.com/es/git/tutorials/making-a-pull-request](https://www.atlassian.com/es/git/tutorials/making-a-pull-request)

### Fuente: [https://www.freecodecamp.org/espanol/news/como-hacer-tu-primer-pull-request-en-github/](https://www.freecodecamp.org/espanol/news/como-hacer-tu-primer-pull-request-en-github/)