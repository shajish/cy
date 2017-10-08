<template>
    <div class="container">

        <v-layout>
            <v-flex xs3 sm6>
                <v-card style="margin-right: 10px;">
                    <v-card-media src="http://images.all-free-download.com/images/graphicthumb/community_pieces_312547.jpg" height="200px">
                    </v-card-media>
                    <v-card-title primary-title>
                        <div>
                            <h3 class="headline mb-0">Chautaro Community Activities</h3>
                            <!--<div>Located two hours south of Sydney in the <br>Southern Highlands of New South Wales, ...</div>-->
                        </div>
                    </v-card-title>
                    <v-card-actions>
                        <v-btn flat color="orange">Share</v-btn>
                        <v-btn flat color="orange">Explore</v-btn>
                    </v-card-actions>
                </v-card>
            </v-flex>
            <v-flex xs3 sm6>
                <v-card style="margin-right: 10px;">
                    <v-card-media src="http://www.barcelonaconnect.com/wp-content/uploads/2016/01/Entrepreneurs-Bcn.jpg" height="200px">
                    </v-card-media>
                    <v-card-title primary-title>
                        <div>
                            <h3 class="headline mb-0">Chautaro Events</h3>
                            <!--<div>Located two hours south of Sydney in the <br>Southern Highlands of New South Wales, ...</div>-->
                        </div>
                    </v-card-title>
                    <v-card-actions>
                        <v-btn flat color="orange">Share</v-btn>
                        <v-btn flat color="orange">Explore</v-btn>
                    </v-card-actions>
                </v-card>
            </v-flex>
            <v-flex xs3 sm6>
                <v-card style="margin-right: 10px;">
                    <v-card-media src="https://therefugeecenter.org/wp-content/uploads/2015/05/community_illustration.jpg" height="200px">
                    </v-card-media>
                    <v-card-title primary-title>
                        <div>
                            <h3 class="headline mb-0">Chautaro Business ( jobs )</h3>
                            <!--<div>Located two hours south of Sydney in the <br>Southern Highlands of New South Wales, ...</div>-->
                        </div>
                    </v-card-title>
                    <v-card-actions>
                        <v-btn flat color="orange">Share</v-btn>
                        <v-btn flat color="orange">Explore</v-btn>
                    </v-card-actions>
                </v-card>
            </v-flex>
            <v-flex xs3 sm6>
                <v-card style="margin-right: 10px;">
                    <v-card-media src="http://static3.bigstockphoto.com/thumbs/7/8/8/large1500/88716848.jpg" height="200px">
                    </v-card-media>
                    <v-card-title primary-title>
                        <div>
                            <h3 class="headline mb-0">Search Chautaro Professions</h3>
                            <!--<div>Located two hours south of Sydney in the <br>Southern Highlands of New South Wales, ...</div>-->
                        </div>
                    </v-card-title>
                    <v-card-actions>
                        <v-btn flat color="orange">Share</v-btn>
                        <v-btn flat color="orange">Explore</v-btn>
                    </v-card-actions>
                </v-card>
            </v-flex>
        </v-layout>
    </div>
</template>

<script>
    export default{
        name: 'cy-dashboard',
        mounted(){
            console.log('dashboard component')
        },

    }
</script>