<template>
    <h1>{{info}}</h1>
</template>

<script>
export default {
    name: "MenuManage",
    data() {
      return {
          info: null
      }
    },
    mounted () {
        Axios.post('/api/MenuGetData')
            .then(response => (this.info = response))
    }
}
</script>

<style scoped>

</style>
