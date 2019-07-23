/* 
10. Visualizar los apellidos de los profiles, su numero de id, mostrar los 4 ultimos
ordenado por nombre */

SELECT apellidos, id FROM profiles ORDER BY nombre DESC LIMIT 4;
