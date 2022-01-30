----subida y bajada de archivos pdf v.2
se adapto a los cambios actuales

se comento el for de editarperfil x conflicto(no c cual es)

se modifico el id y el nombre x curriculum del input de editar perfil para que funcione la subida de PDF de la funcion:update segundo if

---

----subida y bajada de archivos pdf
el nombre de el campo de curriculum de la BD es el mismo que el de el controlador y vistas blade donde se usa como identificador y nombre

se agrego la funcion mostrarcv($id) para descargar x curriculum segun el id actual que se usa en la vista

se modifico las vistas modificarperfil y home
---


----middleware de administrador----
secreo el middleware administrador para la ruta home
    -->Se tiene que modificar a un usuario en la BD con el roll de administrador
se modifico la vista del home y se agrego HomeEmpresa(este es usado con el controlador de RegistroempresasController)
---

php artisan migrate:reset(si queremos actualizar los tablas segun las migraciones en el proyecto borrando todo lo anterior)
