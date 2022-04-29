<?php
include __DIR__ . "\plantilla.php";
?>
<div>
    <h1 class="text-3xl text-center pt-10 font-bold">Editar</h1>
    <p class="text-center text-2xl">¿Que datos desea editar con las siguientes credenciales?</p>
    <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" class="bg-neutral-800 w-1/2 mx-auto p-5 rounded-lg">
        <div class="w-full">
            <input type="hidden" name="id" value="<?php echo $users['id'] ?>">
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-white">Nombre</label>
                <input class="border py-2 px-3 text-grey-darkest" type="text" name="nombre" value="<?php echo $users['first_name'] ?>">
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-white">Apellido</label>
                <input class="border py-2 px-3 text-grey-darkest" type="text" name="apellido" value="<?php echo $users['last_name'] ?>">
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-white">Email</label>
                <input class="border py-2 px-3 text-grey-darkest" type="text" name="email" value="<?php echo $users['email'] ?>">
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-white">Genero</label>
                <input class="border py-2 px-3 text-grey-darkest" type="text" name="genero" value="<?php echo $users['gender'] ?>">
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 uppercase font-bold text-lg text-white">Ciudad</label>
                <input class="border py-2 px-3 text-grey-darkest" type="text" name="ciudad" value="<?php echo $users['city'] ?>">
            </div>
            <input class="block bg-teal-500 hover:bg-teal-900 hover:text-white uppercase text-lg mx-auto p-4 rounded font-bold" type="submit" value="Editar">
        </div>
    </form>
</div>
</body>

</html>