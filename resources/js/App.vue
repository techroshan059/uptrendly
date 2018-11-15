

<template>
<div class="main-wrapper">
  <header style="margin-top: 10px;" class="navigation navigation__transparent navigation__left navigation-text__dark navigation__btn-fill navigation__landscape">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="navigation-content">
                            <router-link to="/" class="navigation__brand">
                              <img class="navigation-main__logo" style="width: 120px" v-bind:src="'images/logo.png'" alt="uptrendlyLogo">
                                     </router-link>
                            <button class="navigation__toggler"></button>
                            <!-- offcanvas toggle button -->
                            <nav class="navigation-wrapper">
                                <button class="offcanvas__close">✕</button>
                                <!-- offcanvas close button -->
                                <ul class="navigation-menu right-nav" id="nav">
                                
                                    <li class="navigation-menu__item">
                                        <router-link style="font-size: 14px" class="navigation-menu__link active" to="/influencer" >Influencer</router-link>
                                    </li>
                                    <li class="navigation-menu__item">
                                        <router-link style="font-size: 14px"  class="navigation-menu__link active" to="/brand" >Brand</router-link>
                                    </li>
                                    <li class="navigation-menu__item">
                                        <router-link style="font-size: 14px"  class="navigation-menu__link active" to="/pricing" >Pricing</router-link>
                                    </li>
                                </ul>

                                <ul class="navigation-menu right-nav">
                                    <li class="navigation-menu__item">
                                        <router-link style="font-size: 14px;" class="navigation-menu__link" to="/login" >Login</router-link>
                                    </li>

                                    <li class="navigation-menu__item">
                                        <a style="border: none;background-color: #65cadb;font-size: 14px;border-radius: 30px;letter-spacing: 1px;padding: 16px 55px;color: white;min-width: 130px;" class="navigation-menu__link" href="#">Join Now</a>

                                        <ul class="navigation-dropdown right-nav" style="margin-top: 10px;">
                                            <li class="navigation-menu__item">
                                                <a style="font-size: 14px;" class="navigation-menu__link" href="#">Influencers</a>
                                            </li>
                                            <li class="navigation-menu__item">
                                                <router-link  style="font-size: 14px;" class="navigation-menu__link" to="/brand-signup">Brands</router-link>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <!-- nav item end -->


                        </div>
                    </div>
                </div>
                <!-- row end -->
            </div>
        </header>
      <router-view></router-view>
</div>
</template>

<script type="text/javascript">
</script>
