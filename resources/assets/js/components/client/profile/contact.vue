<template>
    <div class="container" style="margin-top: 50px;">

        <div class="alert alert-success alert-dismissible" role="alert" v-if="message.type === 'success'">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>{{ message.title }}</strong> {{ message.body }}
        </div>

        <div class="alert alert-success alert-dismissible" role="alert" v-if="message.type === 'error'">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>{{ message.title }}</strong> {{ message.body }}
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Add New List</div>
            <div class="panel-body">
                <form action="" @submit.prevent="isEdit ? updateTodo(formdata.id): submitData()">
                    <div class="form-group">
                        <label>Title: </label>
                        <input type="text" v-model="formdata.title" ref="usernameinput" class="form-control">
                        name = {{ formdata.title }}
                    </div>

                    <div class="form-group">
                        <label>Detail: </label>
                        <input type="text" v-model="formdata.detail" ref="emailinput" class="form-control">
                        name = {{ formdata.detail }}
                    </div>

                    <div class="form-group">
                        <input v-if="isEdit" type="submit" class="btn btn-success" value="update">
                        <input v-else type="submit" class="btn btn-primary" value="create">
                    </div>

                </form>
            </div>
        </div>

        <div class="row list-todos">

            <div class="col-md-3 card" v-for="(user,key) in lists" :key="key">
                <div class="col-md-12">
                    <div class="col-md-10">
                        <h1 class="pull-left">{{ user.username }}</h1>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-danger btn-sm pull-right" v-show="!isEdit" @click="deleteTodo(user.id)">Delete</button>
                        <button class="btn btn-info btn-sm pull-right" @click="editTodo(user.id)">Edit</button>
                    </div>
                </div>
                <br>
                <hr>
                <p>{{ user.email }}</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
            </div>
        </div>
    </div>
</template>

<script>
    export default{
        mounted(){
            console.log('inside todo-lists component')
        },
        data(){
            return{
                isEdit: false,
                lists:[],
                formdata: {
                    title: '',
                    detail: '',
                    id: ''
                },
                message: {
                    title: '',
                    body: '',
                    type: ''
                }
            }
        },
        mounted(){
            this.fetchData();

//            console.log(this.userlists);
        },
        methods: {
            submitData: function () {
                var users = this;
                window.axios.post('api/users', {
                    username: this.formdata.title,
                    email: this.formdata.detail
                }).then(function (response) {
//                    console.log(response)
                    users.formdata.title = '';
                    users.formdata.detail = '';
                    users.message = {
                        title: 'congratulation !!!',
                        body: 'Your data is been saved successfully',
                        type: 'success'
                    };
//                    users.lists.push(response.data.data);
                    users.fetchData();
                });
            },

            fetchData: function() {
                var users = this;
                window.axios.get('api/users').then(function (response){
                    users.lists = response.data.data;
                    console.log(users.userlists);
                });
            },

            editTodo: function(id){
                var users = this;
                window.axios.get('api/users/edit/'+id).then( function (response){
                    users.formdata.title = response.data.data.username;
                    users.formdata.detail = response.data.data.email;
                    users.formdata.id = response.data.data.id;
                    users.$refs.usernameinput.focus();
                    users.$refs.emailinput.focus();
                    users.isEdit = true;
                });
            },

            deleteTodo: function(id){
                var users = this;
                window.axios.get('api/users/delete/'+id).then( function (response) {
//                   console.log(response)
                    users.message = {
                        title: 'congratulation !!!',
                        body: 'Your data is been deleted successfully',
                        type: 'success'
                    };
                    users.fetchData();
                });
            },
            updateTodo: function (id){
                var users = this;
                window.axios.post('api/users/update/'+id,{
                    username: this.formdata.title,
                    email: this.formdata.detail,
                }).then( function (response){
                    users.message = {
                        title: 'congratulation !!!',
                        body: 'Your data is been updated successfully',
                        type: 'success'
                    };
                    users.fetchData();
                    users.isEdit = false;
                });
            }


        }
    }
</script>

<style>
    .list-todos{
        margin-bottom: 30px;
        /*width: 90%;*/
    }
    .card{
        border: 1px solid #ebebeb;
        padding: 10px;
        background-color: #2ab27b;
        color: #fff;
        border-radius: 7px;
    }
    .card h1{
        font-weight: bold;
        text-transform: uppercase;
        font-size: 20px;
    }
</style>