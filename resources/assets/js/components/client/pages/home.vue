<template>
    <v-app>
        <v-carousel hide-controls>
            <v-carousel-item v-for="(item,i) in items" v-bind:src="item.src" :key="i"></v-carousel-item>
        </v-carousel>
        <section class="row home-about-wrapper">
            <div class="col-md-12 home-about-title">
                <h2>
                    Awesome Features
                </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur laborum nisi odio quam quidem. Animi architecto, aspernatur dolorum eveniet fuga libero molestias quae quibusdam quis quo sequi tempora voluptas voluptatem!</p>
            </div>
            <div class="col-md-12 home-about-section">
               <div class="row">
                   <div class="col-md-6 home-about-text">
                       <h2>Feature ONE </h2>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequatur dolor ducimus eos excepturi facere hic ipsa, maiores maxime molestiae odit tempora veritatis voluptate. Amet deserunt dolor numquam quibusdam voluptatum.</p>
                       <span></span>
                   </div>

                   <div class="col-md-6 home-intro-image">
                       <!--<h4>Intro image</h4>-->
                       <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdJRIjA-tZ7tiyTu3iczEBfrzp0Sy2tB5eVk6eM9hRw3oo9h90zg" alt="">
                   </div>
               </div>
            </div>

            <div class="col-md-12 home-about-section">
                <div class="row">
                    <div class="col-md-6 home-intro-image">
                        <!--<h4>Intro image</h4>-->
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdJRIjA-tZ7tiyTu3iczEBfrzp0Sy2tB5eVk6eM9hRw3oo9h90zg" alt="">
                    </div>

                    <div class="col-md-6 home-about-text">
                        <h2>Feature TWO </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequatur dolor ducimus eos excepturi facere hic ipsa, maiores maxime molestiae odit tempora veritatis voluptate. Amet deserunt dolor numquam quibusdam voluptatum.</p>
                        <span></span>
                    </div>
                </div>
            </div>

            <div class="col-md-12 home-about-section">
                <div class="row">
                    <div class="col-md-6 home-about-text">
                        <h2>Feature THREE </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequatur dolor ducimus eos excepturi facere hic ipsa, maiores maxime molestiae odit tempora veritatis voluptate. Amet deserunt dolor numquam quibusdam voluptatum.</p>
                        <span></span>
                    </div>

                    <div class="col-md-6 home-intro-image">
                        <!--<h4>Intro image</h4>-->
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdJRIjA-tZ7tiyTu3iczEBfrzp0Sy2tB5eVk6eM9hRw3oo9h90zg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="row home-workflow-wrapper">
            <div class="col-md-12 home-workflow-title">
                <h2>
                    Workflow of <span>Chautaro</span>
                </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur laborum nisi odio quam quidem. Animi architecto, aspernatur dolorum eveniet fuga libero molestias quae quibusdam quis quo sequi tempora voluptas voluptatem!</p>

                <div class="row">
                    <div class="col-md-4">
                        <h3>First Process</h3>
                    </div>
                    <div class="col-md-4">
                        <h3>Second Process</h3>
                    </div>
                    <div class="col-md-4">
                        <h3>Third Process</h3>
                    </div>
                </div>
            </div>
        </section>
    </v-app>
</template>

<script>
    export default{
        name: 'cy-home',
        mounted(){
            console.log('home component');
        },
        data(){
            return {
                items: [
                    {
                        src: 'http://wowslider.com/sliders/demo-93/data1/images/sunset.jpg'
                    },
                    {
                        src: 'http://wowslider.com/sliders/demo-93/data1/images/lake.jpg'
                    },
                    {
                        src: 'https://www.reparatuvehiculo.com/wp-content/uploads/2016/08/repara-tu-vehiculo-horarios-verano.jpg'
                    }
                ]
            }
        }
    }
</script>