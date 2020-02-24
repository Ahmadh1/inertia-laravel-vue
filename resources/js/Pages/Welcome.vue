<template>
    <layout>
        <div>
            <p>I am {{foo}} page</p>    
        </div>
    </layout>
</template>

<script>
    import Layout from '../Shared/Layout'
    export default {
        name: 'Welcome',
        props: ['foo'],
        components: {
            Layout,
        }
    }
</script>
