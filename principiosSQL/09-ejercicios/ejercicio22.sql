/* 
22. Mostrar listado de post (id y titular)
mostrar tambien el numero del usuario y su nombre.
 */

SELECT p.id, p.titulo, pro.id, CONCAT(pro.nombre,' ',pro.apellidos) as 'publicacion'
FROM post p, profile pro
WHERE p.id_profile =pro.id;