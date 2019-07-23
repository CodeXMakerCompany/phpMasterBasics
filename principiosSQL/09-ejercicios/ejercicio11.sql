/* 
11. Visualizar todos los correos y el numero de profiles que hay en cada registro
 */

SELECT correo, COUNT(id) FROM profile GROUP BY correo;


