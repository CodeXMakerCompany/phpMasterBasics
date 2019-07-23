/* 
27. Visualizar los nombres de los usuarios y la cantidad de post realizados,
incluyendos los que no hayan realizado post.
 */

SELECT c.nombre, COUNT(e.id) FROM profile c
LEFT JOIN post e ON c.id = e.id
GROUP BY 1;