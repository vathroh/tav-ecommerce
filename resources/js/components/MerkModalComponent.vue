<template>
    <div class="login-1">
        <div class="modal fade" id="MerkModal" tabindex="-1" role="dialog" aria-labelledby="MerkModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content form-inner ">
                    <div class="modal-header align-self-center">
                        <h3>Brand/Merk</h3>
                    </div>
                    <div class="model-body">
                        <ul class="nav nav-tabs justify-content-center mt-10" id="myTab" role="tablist" >
                            <li class="nav-item" style="margin-right: 10px;" v-for="item in merk">
                                <button @click="cariMerk(item.id)" class="nav-link">{{item.name}}</button> 
                            </li>
                        </ul>
                    </div>      
                </div>
            </div>
         </div>     
    </div>
</template>
<script>
import image from '../../../public/style/img/logo-tav.png';

export default {
    data(){
        return{
            gambar: image,
            merk: [],
        }
    },

    mounted(){
        fetch('/api/merk')
        .then(response => response.json())
        .then(data => {
            this.merk = data
            console.log(this.merk.name)
        })
    },
    
    methods:{
        cariMerk(id){
            this.$router.push({name:'Merk', params:{id: id}})
        }
    }
}

</script>