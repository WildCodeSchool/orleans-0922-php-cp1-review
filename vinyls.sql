CREATE TABLE vinyls (
    id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(200) NOT NULL,
    cover VARCHAR(255) NOT NULL,
    artist VARCHAR(200) NOT NULL,
    genre VARCHAR(100),
    PRIMARY KEY (id)
    );

INSERT INTO vinyls VALUES (1,'Allumer le feu!', '/img/allumermoi.jpg', 'Leroy Jenkins', 'Country');

INSERT INTO vinyls VALUES (2,'JCVD', '/img/julesaimejul.jpg', 'Jules', 'Sheet-Flow');

INSERT INTO vinyls VALUES (3,'Elle me contrôle...', '/img/ellemecontrolu.jpg', 'Matt.P', 'Classic');

INSERT INTO vinyls VALUES (4,'Tu veux mon ZZ', '/img/zzzzzz.jpg', 'Francky Vincent le Restaurant', 'Pool-Dance');

INSERT INTO vinyls VALUES (5, 'PONPONPON', '/img/ponponpon.jpg', 'Kary Pamieu Pamieu', 'Kawai-kuWu');