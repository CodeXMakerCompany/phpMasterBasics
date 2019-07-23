/* 
20. Seleccionar el comentario donde el usuario comento 
 */

SELECT * FROM comentario WHERE id IN
(SELECT id_profile FROM);
