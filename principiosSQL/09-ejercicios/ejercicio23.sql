/* 
23. Listar todos los comentarios realizados en los post y el nombre
del profile.
 */

SELECT com.comentario, p.titular, pro.nombre FROM comentario com
INNER JOIN post p ON p.id = com.id_profile
INNER JOIN profile pro ON pro.id = com.id_profile;