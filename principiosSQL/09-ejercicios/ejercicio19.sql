/* 
19. Obtener los profiles con 2 o más posts.
 */

SELECT * FROM profiles WHERE id IN
    (SELECT id_profile FROM post GROUP BY id_profile HAVING COUNT(id)>=2 );
