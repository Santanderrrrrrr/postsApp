<template>
    <div class="container">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    Take your time... 
                    <button class="btn btn-info" ><a href="/home" style="text-decoration:none; color:white;">Back to Home</a> </button>

                </div>
                <div class="card-body">
                    <form  @submit.prevent="PostFormData()">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Name of Bicycle</label>
                                <input id="name" class="form-control" type="text" placeholder="What's your bike's name?" v-model="form.name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phonenumber">Phone Number</label>
                                <input type="text" class="form-control" id="phonenumber" placeholder="How can you be contacted?" v-model="form.phonenumber">
                            </div>
                        </div>                    
                        <div class="form-group">
                            <label for="content">About Bike</label>
                            <textarea class="form-control" id="content" rows="3" placeholder="Tell Us About Your Bike" v-model="form.content"></textarea>
                        </div>
                        <button  class="btn btn-success"> Submit </button>
                    </form>
                </div>
            </div>

        </div>
        
    </div>
            
</template>

<script>
    export default {
        data() {
            return{
                form: {
                    name:null,
                    phonenumber: null,
                    content: null
                }

            }
        },
        methods: {
            PostFormData(){
               
                axios({
                    method: 'post',
                    url: '/api/posts/store',
                    data: {
                        'name':this.form.name,
                        'phonenumber':this.form.phonenumber,
                        'content':this.form.content
                    }
                })
                // .post('127.0.0.1:8000/posts/store',{
                //     'name':this.form.name,
                //     'phonenumber':this.form.phonenumber,
                //     'content':this.form.content
                // }).then(res=>{
                //     console.log(res);
                // }).catch(e=>{
                //     console.log(e);
                // })
            },
            // GoHome(){
            //     axios({
            //         method: 'get',
            //         url: '/home'
            //     })
            // }
        },
        
        
    };
    
</script>
