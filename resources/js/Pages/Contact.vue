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
        name: 'Contact',
        props: ['foo'],
        components: {
            Layout,
        }
    }
</script>
