<script setup>
import { ref } from 'vue'

const email = ref('')
const password = ref('')
const conf_password = ref('')

/** es para conectar la API, si no se puede borrar */
/*
import axios from 'axios'
import { API_BASE_URL } from '../config';

export default{
    data(){
        return{
            isLoading: true,
            players: {}
        }
    },
    async created () {
        axios.defaults.headers.common['Authorization'] = `Bearer ${this.$auth.getAccessToken()}`
        try {
            const response = await axios.get(API_BASE_URL + '/players')
            this.players = response.data.data
            this.isLoading = false
        } catch (e) {
            
            // handle the authentication error here
        }
    }
}


*/
</script>

<template>
    <main>
        <header>
            <h1 class="logo">CMS APP</h1>
            <h2>Registro</h2>
            <p>Crea una cuenta para usar la App para determinar el CMS de cualquier Web</p>
        </header>
<!--
        <div class="alert alert-success" v-if="success">
            <p>Registration completed. You can now <router-link >Login</router-link></p>
        </div>
v-if="!success"   ---- dentro del form
    -->

        <form autocomplete="off" @submit.prevent="register" method="POST"  >
            <label>
                <span>Introduce un nombre de usuario</span>
                <input 
                type="username"
                v-model="username"
                placeholder="username" />
            </label>

            <label>
                <span>Introduce tu email</span>
                <input 
                type="email"
                v-model="email"
                placeholder="email@email.com" />
            </label>

            <label>
                <span>Introduce una contraseña</span>
                <input 
                type="password"
                v-model="password"
                placeholder="*********" />
            </label>

            <label>
                <span>Repite la contraseña</span>
                <input 
                type="conf_password"
                v-model="password"
                placeholder="*********" />
            </label>

            <input 
            type="submit" 
            value="Registrarse" />
        </form>

        <footer>
            <p>¿Ya tienes una cuenta? <router-link to="/login">Login</router-link></p>
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


input:not([type="submit"])::placeholder{
   color:var(--gray);
   font-style:italic;
}

input[type="submit"]{
   display:block;
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