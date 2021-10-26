<template>
    <div class="container d-flex justify-content-center">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

            <div class="card d-flex">
                <div class="card-header">
                    These are the bikes currently available:
                </div>

                
                    <div v-for ="postarray in postarrays" :key="postarray.id" class="card w-200 m-3">
                        <div class="card-header">
                            <h5>
                                {{ postarray.name }} 
                            </h5>
                        </div>
                        <div class="card-body">
                            <img class="card-img-top" src="#" alt="Card image cap">

                            <br>
                            <p class="card-text">
                                {{ postarray.content }}
                            </p> 
                            
                            <p class="card-text font-weight-light">
                                {{ postarray.phonenumber }}
                            </p>

                            <div class="btn btn-success">
                                reserve
                            </div>
                        </div>

                        
                        <!-- <h1>Looping through List items below:</h1>

                        <ul>
                            <li v-for="postarray in postarrays" :key="postarray.id">
                                {{ postarray}} -->
                                <!-- {{ postarray.phonenumber }}
                                {{ postarray.content }} -->
                            <!-- </li>
                        </ul>  -->
                    
                    </div>
                
            </div>
        </div> 
    </div>
            
</template>

<script>
    export default {
        
        data:function(){
            return{
                postarrays: []
            }
       
                    
        
    },
    methods:{
        getList:function(){
            axios.get('api/posts')
            .then((res) => {
                this.postarrays = res.data.data;
                // console.log(res.data);
                console.log(this.postarrays);
            })
            .catch(error => {
                console.log(error);

            })
        }
        // ,
        // postarrayLog: function(){
        //     console.log(this.postarrays);

        // }
    },
    mounted(){
        this.getList();
        
    },
    // mounted(){
    //     this.postarrayLog();
        
    // },
        
    }
    
</script>
