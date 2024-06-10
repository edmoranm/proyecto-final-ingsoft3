CREATE TABLE alumnos(
  alum_id SERIAL PRIMARY KEY,
  alum_nombre VARCHAR(50) NOT NULL,
  alum_apellido VARCHAR (50) NOT NULL,
  alum_grado VARCHAR(50) NOT NULL,
  alum_arma VARCHAR(50) NOT NULL,
  alum_nacionalidad VARCHAR(50) NOT NULL,
  alum_situacion SMALLINT DEFAULT 1
);

CREATE TABLE materias(
  mat_id SERIAL PRIMARY KEY,
  mat_nombre VARCHAR(50) NOT NULL,
  mat_situacion SMALLINT DEFAULT 1
);

CREATE TABLE notas(
  not_id SERIAL PRIMARY KEY,
  not_materia INT NOT NULL,
  not_puntos FLOAT NOT NULL,
  not_alumno  INT NOT NULL,
  not_resultado VARCHAR(10) NOT NULL,
  not_situacion SMALLINT DEFAULT 1,
  FOREIGN KEY (not_alumno) REFERENCES alumnos(alum_id),
  FOREIGN KEY (not_materia) REFERENCES materias(mat_id)
 );
 
