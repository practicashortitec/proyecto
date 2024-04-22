
<script setup>
// import { ref } from 'vue'

// const email = ref('')
// const password = ref('')


/*
// añadido nuevo
import axios from 'axios';
import { onMounted, ref } from 'vue';
export default{
    setup(){
        let users = ref([]);

        onMounted(()=> {
            axios
            .get('/usuario')
            .then((res)=>{
                usuario.value = res.data.data;
            })
            .catch((error) => {
                console.log(error.res.data);
            });
        });
        return{
            users
        };
    },
};



import axios from 'axios';
import { onMounted, ref } from 'vue';

let usuarios = ref([]);

onMounted(async() => {
    await axios
    .get('/1')
    .then((res) => {
        usuarios.value=res.data.data;
    })
    .catch((error) => {
        console.log(error.res.data);
    });
});

*/

//VUE_APP_BASEURL = "http://localhost:8000/usuario";

</script>

<template>
    <main>
        <header>
            <h1 class="logo">CMS APP</h1>
            <h2>Introduce datos</h2>
            <p>Introduce página web para detectar el CMS</p>
            
        </header>

       <!-- <h2>{{ usuario.username }}</h2> -->

       <h1> usuario </h1>
        

        <form autocomplete="off" @submit.prevent="home" method="POST">
            <div class="contenedorFormulario">
                <label class="parte1">
                    <span>Introduce página web</span>
                <input 
                type="text"
                v-model="web"
                placeholder="www.ejemploweb.com" />
            </label>

<!--
            <label class="parte1">
                <select name="nomUrl" id="nomUrl">
                    <option value="1">web 1</option>
                    <option value="2">web 2</option>
                </select>
            </label>
        -->
            <input class="parte2"
            type="submit" 
            value="Detectar CMS" />

            </div>

            <label>
                <span>Tipo de CMS</span>
                <p class="tipoCMS">Tipo de CMS</p>
            </label>

        </form>


        <footer>
            <button class="logout"> <router-link to="/login">Logout</router-link></button>

        </footer>
    
    </main>
</template>

<style scoped>
main{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    height: 100vh;
    background-color: var(--primary);
    color: #FFF;
}

header{
    padding:1.5rem;
}

footer{
    background-color: #FFF;
    width: 100%;
    color:var(--dark);
    text-align: center;
    padding: 1.5rem;
    padding-bottom:3rem;
}

h2{
    font-size: 2.125rem;
    margin-bottom:1rem;
}

h2, p{
    font-weight: 500;
    font-size: 1rem;
}

form{
    flex: 1 1 0%;
    display: block;
    border-radius: 1.5rem 1.5rem 0 0; 
    background-color: #FFF;
    box-shadow: 0px -4px rgba(0, 0, 0, 0.16);
    color: var(--dark);
    padding: 4rem 1.5rem;
    width: 100%;
}

label {
    display:block;
    margin-bottom:1.5rem;
}

label span {
    display:block;
    color: var(--gray);
    font-size: 1rem;
    font-weight: 500;
    margin-bottom:0.5rem
}


input:not([type="submit"]){
    display:block;
    width:100%;
    border: 1px solid var(--gray);
    border-radius:0.5rem;
    padding: 1.5rem 1rem;
    font-size: 1.125rem;
    font-weight: 500;
    color:var(--dark);
    background-color:var(--light);
    margin-bottom:1.5rem;
}

.logout{
    display:flex;
    justify-content: center;
    width:100%;
    border:1px solid var(--gray);
    border-radius: 0.5rem;
    padding: 0.2rem;
    font-size: 0.75rem;
    font-weight: 500;
    color:var(--dark);
    background-color:var(--light);
    margin-bottom:1.5rem;
}

.logout:hover{
    color: white;
    background-color: #f3f4f600;
  /*  --gray: #9ca3af;
  --light: #f3f4f6; */
}
/*
.contenedorFormulario{
    display:flex;
}
*/
.parte1{
    width:100%;
}

.parte2{
    width:33%;
}

.tipoCMS{
    display:block;
    width:100%;
    border: 1px solid var(--gray);
    border-radius:0.5rem;
    padding: 1.5rem 1rem;
    font-size: 1.125rem;
    font-weight: 500;
    color: var(--dark);
    background-color:var(--light);
    margin-bottom:1.5rem;
}

.cajaTipoCMS{
    display:block;
    width:100%;
    border: 1px solid var(--gray);
    border-radius:0.5rem;
    padding: 1.5rem 1rem;
    font-size: 1.125rem;
    font-weight: 500;
    color: var(--dark);
    background-color:var(--light);
    margin-bottom:1.5rem;
}



input:not([type="submit"])::placeholder{
   color:var(--gray);
   font-style:italic;
}

input[type="submit"]{
    display:flex;
    width:fit-content; 

    
   margin: 0 auto;
   font-size: 1rem;
   font-weight: 700;
   color: #FFF;
   background-color: var(--primary);
   padding: 1rem;
   border-radius: 0.5rem;
   cursor:pointer;
   transition:0.2s ease;
}

input[type="submit"]:hover{
    background-color:var(--primary-dark);
}
</style>
