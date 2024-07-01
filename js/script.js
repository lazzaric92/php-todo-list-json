const { createApp } = Vue;

createApp({
    data() {
        return {
            tasks: [],
        }
    },
    methods: {
        getTodoList: function(){
            axios.get('./server.php')
            .then((response) => {
                console.log(response.data);
                this.tasks = response.data;
            })
            .catch(function (error) {
                console.log(error);
            }); 
        }
    },
    created(){
        this.getTodoList();
    }
}).mount('#app')