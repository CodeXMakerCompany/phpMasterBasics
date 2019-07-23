/* 
17. Obtener listado con los post y comentarios realizados por el usuario 'codexmaker'
 */

SELECT * FROM post p
INNER JOIN categoria c ON c.id = p.id_categoria
INNER JOIN comentario co ON co.id = p.id
WHERE p.id_profile IN
(SELECT id FROM profile WHERE nombre = 'codexmaker');