<template>
  <Head title="Test" />
    <button @click="clicked()" class="btn btn-sm btn-primary">click here</button>
</template>

<script>
export default{
    methods:{
        clicked (){
            console.log("hey");
        }
    }
}
</script>
