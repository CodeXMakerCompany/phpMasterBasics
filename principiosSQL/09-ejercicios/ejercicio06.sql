/* 
6. Visualizar el titulo y titular de los post en una misma columna,
su fecha de registro y el dia de la semana en la que se registraron.
 */

SELECT CONCAT(titulo, ' ', titular) AS 'titulo y titular',
       fecha, DAYNAME(fecha) FROM post;
