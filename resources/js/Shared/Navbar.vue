<template>
    <nav class="bg-indigo-400 flex justify-evenly p-4">
        <div>
            <Link href="/" class="text-x1 text-white">
                Logo
            </Link>
        </div>
        <div>
            <Link href="/chat" class="text-x1 text-white mr-6 hover:bg-white 
            hover:text-indigo-400 px-4 py-2 rounded-3xl">
                Chat
        </Link>
            <Link href="/contact" class="text-x1 text-white mr-6 hover:bg-white 
            hover:text-indigo-400 px-4 py-2 rounded-3xl">
                Contacto
        </Link>
        </div>
    </nav>
</template>

<script>
import {Link} from "@inertiajs/vue3"
export default {
    componets :{
        Link
    }

}
</script>

<style></style>