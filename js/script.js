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
        addNewTask: function(task){
            if(this.newText !== ""){
                const newObj = {
                    "text": task,
                    "done": false
                };
                this.tasks.push(newObj);
                this.newText = "";
            }
            
            // axios.get('./addTask.php', {
            //     params: {
            //         text: task
            //     }
            // })
            // .then(function (response) {
            // console.log(response);
            // })
            // .catch(function (error) {
            //     console.warn("ERROR");
            // console.log(error);
            // });
        }
    },
    created(){
        this.getTodoList();
    }
}).mount('#app')