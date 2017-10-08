<template>
  <div class="footer-wrapper">
       <div class="container">
           <div class="row">
               <div class="col-md-4 first-footer-column">
                   <h3>CHAUTARO</h3>
               </div>
               <div class="col-md-4">
                   footer two section
               </div>
               <div class="col-md-4">
                   footer three section
               </div>
           </div>
       </div>
   </div>
</template>

<script>

    export default{
        mounted(){
            console.log('footer');
        },
        name: 'cy-footer'
    }
</script>