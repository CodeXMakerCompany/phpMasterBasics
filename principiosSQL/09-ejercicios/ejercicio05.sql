/* 
5. Mostrar todos los post con su titulo y el numero de dias que llevan
en el sistema.
 */

SELECT nombre, DATEDIFF(CURDATE(), fecha) AS 'DÍAS' FROM post;
