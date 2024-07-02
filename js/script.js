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
            axios.get('./server.php',
            )
            .then((response) => {
                console.log(response.data);
                this.tasks = response.data;
            })
            .catch(function (error) {
                console.log(error);
            }); 
        },
        addNewTask: function(txt){
            axios.get('./server.php', {
                params: {
                    text: txt
                }
            })
            .then(function (response) {
            console.log(response);
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