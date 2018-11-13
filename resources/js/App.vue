<template>
    <div class="header clearfix">
        <nav>
            <ul class="nav nav-pills pull-right">
                <router-link to="/brandsignup">
                    Brand
                </router-link>

                <li role="presentation" class="active"><a href="#">Home</a></li>
                <li role="presentation"><a href="#">About</a></li>
                <li role="presentation"><a href="#">Contact</a></li>
            </ul>
        </nav>
        <h3 class="text-muted">Home Page</h3>
        <div class="panel-body">
            <router-view></router-view>
        </div>
    </div>
</template>

