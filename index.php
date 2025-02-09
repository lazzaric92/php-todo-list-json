<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Todolist</title>
</head>
<body>
    <div id="app">
        <div class="container">
            <header class="p-3 mb-3">
                <h1 class="fw-bold">TodoList</h1>
            </header>

            <main>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="row mb-3">
                                <form action="./server.php" method="GET" class="d-flex">
                                    <select class="form-select w-25 me-3" name="status">
                                        <option value="deafault" selected>All</option>
                                        <option value="0">Todo</option>
                                        <option value="1">Done</option>
                                    </select>
                                    <button type="submit" class="btn btn-danger">Filter</button>
                                </form>
                            </div>
                        </div>
                        <ul class="col-12 list-group mb-5">
                            <li class="list-group-item p-3  border-2 border-danger rounded mb-2" v-for="(task, index) in tasks" :key="index">
                                <p class="mb-0 fw-bold" :class="(task.done === true) ? 'completed' : ''"> {{task.text}} </p>
                            </li>
                        </ul>
                        <div class="col-12 ps-0">
                            <div class="d-flex justify-content-between">
                                <input class="flex-grow-1 me-2" type="text" name="text" id="newText" placeholder="Add new task" v-model.trim="newText" @keyup.enter="addNewTask(newText)">
                                <button type="submit" class="btn btn-danger ms-auto" @click="addNewTask(newText)">+</button>
                            </div>
                            <!-- <form action="./index.php" method="GET" class="d-flex justify-content-between">
                                <input class="flex-grow-1 me-2" type="text" name="text" id="newText" placeholder="Add new task" v-model.trim="newText" @keyup.enter="addNewTask(newText)">
                                <button type="submit" class="btn btn-danger ms-auto" @click="addNewTask(newText)">+</button>
                            </form> -->
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.2/axios.min.js" integrity="sha512-JSCFHhKDilTRRXe9ak/FJ28dcpOJxzQaCd3Xg8MyF6XFjODhy/YMCM8HW0TFDckNHWUewW+kfvhin43hKtJxAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>