<template>

    <div><!-- Top Toolbar -->

        <!-- end toolbar -->

        <div class="box-shadow-for-ui">
            <div class="uou-block-2b">
                <div class="container"> <a href="#" class="logo"><img src="images/logo.png" alt=""></a> <a href="#" class="mobile-sidebar-button mobile-sidebar-toggle"><span></span></a>
                    <nav class="nav">
                        <ul class="sf-menu">
                            <li><router-link to="/">Home</router-link></li>
                            <li><router-link to="/professionals">Professionals</router-link></li>
<!--
                            <li> <router-link to="/pages"></router-link>Pages</li>
-->
                            <!--<li> <router-link to="/event">Event</router-link></li>-->
                            <li> <router-link to="/blog">Blog</router-link></li>
                                <ul>
                                    <li><a href="profile_company.html">Profile Company</a></li>
                                    <li><a href="profile_company-no-tabs.html">Profile Company No Tabs</a></li>
                                    <li><a href="user-dashboard(connections)(hotkeys-disabled).html">User Dashboard 1</a></li>
                                    <li><a href="user-dashboard(connections)(hotkeys-enabled).html">User Dashboard 2</a></li>
                                    <li><a href="user-dashboard(followers).html">User Dashboard 3</a></li>
                                    <li><a href="user-dashboard(following).html">User Dashboard 4</a></li>
                                    <li><a href="blog-post.html">Blog Post</a></li>
                                    <li class="active"><a href="blog.html">Blog</a></li>

                                </ul>
                            <li> <router-link to="/userprofile">User Profile</router-link></li>
                            <li><router-link to="/news"> News</router-link></li>
                            <li><router-link to="/event">Events</router-link></li>
                        </ul>
                    </nav>

                </div>
            </div>
            <!-- end .uou-block-2b -->
        </div>
    </div>

</template>

<script>
    export default {
        mounted() {
//            console.log('Component mounted.')
        }
    }
</script>
