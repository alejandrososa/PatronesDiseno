**DESCRIPCIÓN**

El objetivo del patrón Bridge es separar el aspecto de implementación de un objeto de su aspecto de representación y de interfaz.

De este modo, por un lado la implementación puede encapsularse por completo y por otro lado la implementación y la representación pueden evolucionar de manera independiente y sin que ninguna suponga restricción alguna sobre la otra.

**CUANDO USARLO**

El patrón se utiliza en los siguientes casos:

Para evitar que exista un vínculo demasiado fuerte entre la representación de los objetos y su implementación, en especial cuando la implementación se selecciona en el curso de ejecución de la aplicación.
Para que los cambios en la implementación de los objetos no tengan impacto en las interacciones entre los objetos y sus clientes.
Para permitir a la representación de los objetos y a su implementación conservar su capacidad de extensión mediante la creación de nuevas subclases.
Para evitar obtener jerarquías de clases demasiado complejas


**TEST**

En consola puedes ejecutar el test
    
    cd /path/PatronesDiseno/estructuracion/bridge
    /usr/bin/php index.php