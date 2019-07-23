/* 
 29. Crear una vista llamada primerosUsuarios que incluirá todos los usuarios que tengan relacion su correo con 
 las la silaba cod
 */

CREATE VIEW primerosUsuarios AS
SELECT * FROM profile WHERE grupo_id IN 
    (SELECT id FROM grupos WHERE nombre="Vendedores A");
