/* 
21. Obtener los nombre y ids de los usuarios con posts de 3 unidades adelante
 */

SELECT nombre, id FROM profile WHERE id IN
(SELECT id_profile FROM post);
