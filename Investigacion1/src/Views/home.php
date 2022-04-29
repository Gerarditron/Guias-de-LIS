<?php
include __DIR__ . "\plantilla.php";
?>
<main class=" ">
    <h1 class="text-center text-3xl font-bold py-5 text-white">Administrador de usuarios</h1>

    <div class="table-responsive">
        <table class="border-separate table-auto  w-full border border-slate-400 dark:border-slate-500 bg-white dark:bg-slate-800 text-sm shadow-sm">
            <thead class="bg-slate-50 dark:bg-slate-700">
                <tr>
                    <th class=" border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">ID</th>
                    <th class=" border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">Nombre</th>
                    <th class=" border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">Apellido</th>
                    <th class=" border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">Email</th>
                    <th class=" border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">Genero</th>
                    <th class=" border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">Ciudad</th>
                    <th class=" border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">Eliminar</th>
                    <th class=" border border-slate-300 dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-left">Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($users as $user) {
                    echo "<tr>";
                    echo "<td class='border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400'>" . $user['id'] . "</td>";
                    echo "<td class='border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400'>" . $user['first_name'] . "</td>";
                    echo "<td class='border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400'>" . $user['last_name'] . "</td>";
                    echo "<td class='border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400'>" . $user['email'] . "</td>";
                    echo "<td class='border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400'>" . $user['gender'] . "</td>";
                    echo "<td class='border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400'>" . $user['city'] . "</td>";
                    echo "<td class='border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400 cursor-pointer'><a href='" . $_ENV['HOST'] . "/delete?id=" . $user['id'] . "'>Eliminar</a></td>";
                    echo "<td class='border border-slate-300 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400 cursor-pointer'><a href='" . $_ENV['HOST'] . "/edit?id=" . $user['id'] . "'>Editar</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</main>
</body>

</html>