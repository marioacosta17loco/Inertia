<template>
    <Nabvar />
    <h1>hola desde usuario</h1>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombre del usuario
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                </tr>
            </thead>
            <body>
                <tr v-for="usuario in usuarios" :key="usuario.index" class="bg-White border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ usuario.name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ usuario.email }}
                    </td>
                </tr>
            </body>
        </table>
    </div>
</template>

<script>
import Navbar from "../Shared/Navbar.vue";

export default {   
    components : {
        Navbar,
    },
    props : {
        Usuarios, Object
    }
}

</script>

<style>

</style>