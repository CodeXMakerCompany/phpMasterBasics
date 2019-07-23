/* 
18. Listar los profiles que han hecho algun comentario en el post con la ip "192.168.102"
 */

SELECT * FROM profile WHERE id IN 
(SELECT id_profile FROM post WHERE id_profile 
    IN (SELECT id FROM comentario WHERE ip LIKE '%192.168.102%'));

