<template>
    <main class="">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <inertia-link class="nav-link" href="/">Home<span class="sr-only">(current)</span></inertia-link>
                </li>
                <li class="nav-item">
                    <inertia-link class="nav-link" href="/about">About</inertia-link>
                </li>
                <li class="nav-item">
                    <inertia-link href="/contact" class="nav-link">Contact</inertia-link>
                </li>
                </ul>
            </div>
        </nav>
        <article>
            <slot />
        </article>
    </main>    
</template>

<script>
export default {
    
}
</script>

<style>

</style>