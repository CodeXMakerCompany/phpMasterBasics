/* 
28. Mostrar todos los usuarios y el numero de posts.
Se deben mostrar tengan o no posts
 */

SELECT v.nombre, v.apellidos, COUNT(c.id) FROM profile v
LEFT JOIN post c ON c.id = v.id
GROUP BY v.id;
