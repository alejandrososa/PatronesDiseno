**Patrones de diseño**
---------------------

Para organizar el catálogo de patrones de diseño, retomamos la clasificación del GoF que organiza los patrones según su vocación: construcción, estructuración y comportamiento.

Los patrones de construcción tienen como objetivo organizar la creación de objetos. Se describen en la parte 2 - Patrones de contrucción. Son un total de cinco: Abstract Factory, Builder, Factory Method, Prototype y Singleton.

Los patrones de estructuración facilitan la organización de la jerarquía de clases y de sus relaciones. Se describen en la parte 3 - Patrones de estructuración. Son un total de siete: Adapter, Bridge, Composite, Decorator, Facade, Flyweight y Proxy.

Por último, los patrones de comportamiento proporcionan soluciones para organizar las interacciones y para repartir el procesamiento entre los objetos. Se describen en la parte 4 - Patrones de comportamiento. Son un total de once: Chain of responsibility, Command, Interpreter, Iterator, Mediator, Memento, Observer, State, Strategy, Template Method y Visitor.


**Catálogo de patrones de diseño**
---------------------


En este repositorio se presentan los veintitrés patrones de diseño descritos en el libro de referencia del GoF. Estos patrones son diversas respuestas a problemas conocidos de la programación orientada a objetos. La lista que sigue no es exhaustiva.

**Abstract Factory**: tiene como objetivo la creación de objetos agrupados en familias sin tener que conocer las clases concretas destinadas a la creación de estos objetos.

**Builder**: permite separar la construcción de objetos complejos de su implementación de modo que un cliente pueda crear estos objetos complejos con implementaciones diferentes.

**Factory Method**: tiene como objetivo presentar un método abstracto para la creación de un objeto reportando a las subclases concretas la creación efectiva.

**Prototype**: permite crear nuevos objetos por duplicación de objetos existentes llamados prototipos que disponen de la capacidad de clonación.

**Singleton**: permite asegurar que de una clase concreta existe una única instancia y proporciona un método único que la devuelve.

**Adapter**: tiene como objetivo convertir la interfaz de una clase existente en la interfaz esperada por los clientes también existentes para que puedan trabajar de forma conjunta.

**Bridge**: tiene como objetivo separar los aspectos conceptuales de una jerarquía de clases de su implementación.

**Composite**: proporciona un marco de diseño de una composición de objetos con una profundidad de composición variable, basando el diseño en un árbol.

**Decorator**: permite agregar dinámicamente funcionalidades suplementarias a un objeto.

**Facade**: tiene como objetivo agrupar las interfaces de un conjunto de objetos en una interfaz unificada que resulte más fácil de utilizar.

**Flyweight**: facilita la compartición de un conjunto importante de objetos con granularidad muy fina.

**Proxy**: construye un objeto que se substituye por otro objeto y que controla su acceso.

**Chain of Responsibility**: crea una cadena de objetos tal que si un objeto de la cadena no puede responder a una petición, la pueda transmitir a sus sucesores hasta que uno de ellos responda.

**Command**: tiene como objetivo transformar una solicitud en un objeto, facilitando operaciones como la anulación, la actualización de solicitudes y su seguimiento.

**Interpreter**: proporciona un marco para dar una representación mediante objetos de la gramática de un lenguaje con el objetivo de evaluar, interpretándolas, expresiones escritas en este lenguaje.

**Iterator**: proporciona un acceso secuencial a una colección de objetos sin que los clientes se preocupen de la implementación de esta colección.

**Mediator**: construye un objeto cuya vocación es la gestión y el control de las interacciones en el seno de un conjunto de objetos sin que estos elementos se conozcan mutuamente.

**Memento**: salvaguarda y restaura el estado de un objeto.

**Observer**: construye una dependencia entre un sujeto y sus observadores de modo que cada modificación del sujeto sea notificada a los observadores para que puedan actualizar su estado.

**State**: permite a un objeto adaptar su comportamiento en función de su estado interno.

**Strategy**: adapta el comportamiento y los algoritmos de un objeto en función de una necesidad concreta sin por ello cargar las interacciones con los clientes de este objeto.

**Template Method**: permite reportar en las subclases ciertas etapas de una de las operaciones de un objeto, estando estas descritas en las subclases.

**Visitor**: construye una operación a realizar en los elementos de un conjunto de objetos. Es posible agregar nuevas operaciones sin modificar las clases de estos objetos.