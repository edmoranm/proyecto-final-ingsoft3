CREATE TABLE alumnos(
  alum_id SERIAL PRIMARY KEY,
  alum_nombre VARCHAR(50) NOT NULL,
  alum_apellido VARCHAR (50) NOT NULL,
  alum_grado VARCHAR(50) NOT NULL,
  alum_arma VARCHAR(50) NOT NULL,
  alum_nacionalidad VARCHAR(50) NOT NULL,
  alum_situacion SMALLINT DEFAULT 1
);
