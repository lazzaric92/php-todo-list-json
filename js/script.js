const { createApp } = Vue;

createApp({
    data() {
        return {
            tasks: [],
            newText: ""
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
        },
        addNewTask: function(text){
            axios.get('./server.php', {
                params: {
                    text: text
                }
            })
            .then(function (response) {
            console.log(response);
            this.tasks = response.data;
            })
            .catch(function (error) {
                console.warn("ERROR");
            console.log(error);
            });
        }
    },
    created(){
        this.getTodoList();
    }
}).mount('#app')