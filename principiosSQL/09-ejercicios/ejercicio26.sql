/* 
26. Sacar los usuarios que tienen comentarios y sacar el contenido del comentario
 */

SELECT CONCAT(v1.nombre,' ',v1.apellidos) AS 'USUARIOS', CONCAT(v2.comentario) AS 'COMENTARIOS' 
FROM profile v1
INNER JOIN comentario v2 ON v1.id = v2.id;