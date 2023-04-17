<template>
    <div>
      <h2>Login</h2>
      <form @submit.prevent="login">
        <input v-model="email" type="email" placeholder="Email" required>
        <input v-model="password" type="password" placeholder="Password" required>
        <button type="submit">Login</button>
      </form>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        email: '',
        password: '',
      };
    },
    methods: {
      login() {
        // Send login request to Laravel backend
        axios.post('/login', {
          email: this.email,
          password: this.password,
        })
        .then(response => {
          // Handle successful login
          console.log(response.data);
        })
        .catch(error => {
          // Handle login error
          console.log(error.response.data);
        });
      },
    },
  };
  </script>
  