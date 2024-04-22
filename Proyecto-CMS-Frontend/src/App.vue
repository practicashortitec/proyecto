<template>
  <div>
     <router-view></router-view> 
  </div>

<!--
  <div>
    <h1>Data from API:</h1>
    <ul>
      <li v-for="item in items" :key="item.username">{{ item.name }}</li>
    </ul>
  </div>

  -->
</template>


<script>

/*
export default{
    data(){
        return{
            items:[]
        }
    },
    mounted(){
        axios.get('http://localhost:8000/usuario')
        .then(response => {
            this.items=response.data;
        })
        .catch(error => {
            console.error('error fetching data: ', error);
        });
    }
}
*/
</script>