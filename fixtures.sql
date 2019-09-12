CREATE TABLE mois
( id INT PRIMARY KEY,
  libelle VARCHAR(50) NOT NULL
);

INSERT INTO mois(id, libelle) VALUES (1, "Janvier"), (2, "Février"), (3, "Mars"), (4, "Avril"), (5, "Mai"), (6, "Juin"), (7, "Juillet"), (8, "Août"), (9, "Septembre"), (10, "Octobre"), (11, "Novembre"), (12, "Décembre") ;


INSERT INTO avoir(idVille, idType, budget, duree)
 VALUES (3, 3, 800, 7),
 (4, 3, 800, 7),(5, 3, 800, 7),(6, 4, 2000, 5),(7, 3, 800, 4),
   (8, 2, 80, 7),(9, 3, 800, 8),(10, 4, 700, 4),(11, 2, 800, 4),
    (12, 1, 700, 7),(13, 3, 500, 10),(14, 5, 400, 4),(15, 3, 300, 3),
     (16, 4, 1800, 7),(17, 1, 800, 4),(18, 1, 800, 7),(19, 3, 400, 2), (20,5,1800,6);
