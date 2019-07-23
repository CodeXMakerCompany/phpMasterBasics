/* 
24. Listar los post con el nombre del post, el nombre del usuario y
el contenido del comentario, pero unicamente cuando sean del usario codexmaker.
 */

SELECT com.comentario, p.titular, pro.nombre FROM comentario com
INNER JOIN post p ON p.id = com.id_profile
INNER JOIN profile pro ON pro.id = com.id_profile
WHERE pro.nombre = 'codexmaker';