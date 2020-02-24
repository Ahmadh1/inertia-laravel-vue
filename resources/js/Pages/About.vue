<template>
    <layout>
        <div>
            <p>I am {{foo}} Component</p>
        </div>
    </layout>
</template>

<script>
    import Layout from '../Shared/Layout'
    export default {
        name: 'About',
        props: ['foo'],
        components: {
            Layout,
        }
    }
</script>
