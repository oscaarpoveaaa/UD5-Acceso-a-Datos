CREATE DATABASE lol;

CREATE TABLE champ (
id INT AUTO_INCREMENT PRIMARY KEY,
`name` VARCHAR(100),
rol ENUM("Atacante","Defensor"),
dificultad VARCHAR(100),
descripcion VARCHAR(1000)
);

INSERT INTO champ(`name`,rol,dificultad,descripcion) VALUES ('Pekka','Atacante','Dificil','Inicialmente, la P.E.K.K.A es una tropa metálica parecida a un robot con cuernos y pinchos rosas que lleva una espada'),
('Arquera','Defensor','Fácil','La Arquera es una tropa a distancia de un solo objetivo que se desbloquea con un Cuartel de nivel 2.'),
('Caballero','Atacante','Fácil','Un aguerrido luchador cuerpo a cuerpo, mucho más apuesto y culto que su primo lejano, el bárbaro. Se rumorea que el único motivo por el que fue nombrado caballero es la genialidad de su bigote.'),
('Valquiria','Defensor','Medio','La Valquiria es una tropa con una buena cantidad de vida, por lo que es ideal combinarla con tropas más pequeñas en cualquier plan de ataque o defensa.'),
('Mosquetera','Atacante','Medio','La Mosquetera es una tropa fuerte, efectiva contra unidades aéreas, como el Globo Bombástico y unidades que ataquen estructuras, o Esbirros, que tienen pocos puntos de vida.');