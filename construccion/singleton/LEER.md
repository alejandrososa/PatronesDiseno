**DESCRIPCIÓN**

El patrón Singleton tiene como objetivo asegurar que una clase solo posee una instancia y proporcionar un método de clase único que devuelva esta instancia.

En ciertos casos es útil gestionar clases que posean una única instancia. En el marco de los patrones de construcción, podemos citar el caso de una fábrica de productos (patrón Abstract Factory) del que solo es necesario crear una instancia.


**CUANDO USARLO**

El patrón se utiliza en el siguiente caso:

Solo debe existir una única instancia de una clase.
Esta instancia solo debe estar accesible mediante un método de clase.

El uso del patrón Singleton ofrece a su vez la posibilidad de dejar de utilizar variables globales.

**TEST**

En consola puedes ejecutar el test
    
    cd /path/PatronesDiseno/contruccion/singleton
    /usr/bin/php index.php