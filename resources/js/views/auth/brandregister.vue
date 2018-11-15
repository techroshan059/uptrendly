<template>

   <div class="login-one">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="login-table reveal " data-sr-id="10" style="max-width: 780px; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 1s ease-in-out 0s, opacity 1s ease-in-out 0s; transition: transform 1s ease-in-out 0s, opacity 1s ease-in-out 0s; ">
                        <div class="login-header">
                            <a href="http://10.10.30.196:8000">
                                <img v-bind:src="'images/logo.png'" style="width:150px" alt="uptrendly-logo">

                            </a>
                        </div>
                        <form @submit.prevent="registerBrand()">
                            <input type="hidden" name="_token" value="ryheCEUkL3qnk5IcsPSuZVPbuTyBe7o6GjFCyjxy">                            
                            <div class="row">
                                <div class="col-12">
                                    <h6>Account Information:</h6>
                                </div>
                                <div class="col-lg-6" style="margin-bottom: 15px">
                                    <input type="text"  v-model="brandData.brand_name" placeholder="Brand Name" class="form-control">
                                     <span class="error" v-if="errors.brand_name">{{errors.brand_name[0]}}</span>
                                                                    </div>

                                <div class="col-lg-6" style="margin-bottom: 15px">
                                    <input type="text" v-model="brandData.brand_url"  placeholder="https://brand.com" class="form-control">
                                     <!-- <span class="error" v-if="errors.brand_url">{{errors.brand_url[0]}}</span> -->
                                                                    </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6" style="margin-bottom: 15px">
                                    <input type="text" v-model="brandData.first_name"   placeholder="First Name" class="form-control">
                                     <span class="error" v-if="errors.first_name">{{errors.first_name[0]}}</span>
                                                                    </div>


                                <div class="col-lg-6" style="margin-bottom: 15px">
                                    <input type="text"  v-model="brandData.last_name"  placeholder="Last Name" class="form-control">
                                     <span class="error" v-if="errors.last_name">{{errors.last_name[0]}}</span>
                                                                    </div>
                            </div>



                            <div class="row">
                                <div class="col-12">
                                    <h6>Address:</h6>
                                </div>
                                <div class="col-lg-6" style="margin-bottom: 15px">
                                    <input type="text"  v-model="brandData.address_line1" placeholder="Address Line 1" class="form-control">
                                     <span class="error" v-if="errors.address_line1">{{errors.address_line1[0]}}</span>
                                                                    </div>

                                <div class="col-lg-6" style="margin-bottom: 15px">
                                    <input type="text" v-model="brandData.address_line2" placeholder="Address Line 2"  class="form-control">
                                                                    </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6" style="margin-bottom: 15px">
                                    <input type="text" v-model="brandData.state_or_province"   placeholder="State/Province" class="form-control">
                                     <span class="error" v-if="errors.state_or_province">{{errors.state_or_province[0]}}</span>
                                                                    </div>


                                <div class="col-lg-6" style="margin-bottom: 15px">
                                    <input type="text"  v-model="brandData.country"  placeholder="Country" class="form-control">
                                     <span class="error" v-if="errors.country">{{errors.country[0]}}</span>
                                                                    </div>
                            </div>

                            <div class="row">

                                 <div class="col-12">
                                    <h6>Contact:</h6>
                                </div>
                                <div class="col-lg-6" style="margin-bottom: 15px">
                                    <input type="text" v-model="brandData.email"   placeholder="Email" class="form-control">
                                     <span class="error" v-if="errors.email">{{errors.email[0]}}</span>
                                                                    </div>

                                <div class="col-lg-6" style="margin-bottom: 15px">
                                    <input type="password"  v-model="brandData.password"    placeholder="Password" class="form-control">
                                     <span class="error" v-if="errors.password">{{errors.password[0]}}</span>
                                                                    </div>

                            </div>

                            <div class="text-center">
                           
                                 <label style="margin-bottom: 20px">By signing up you confirm that you accept the <strong style="color: red">Terms &amp; Conditions</strong>.
                                 </label> <br>
                                                                 <input type="submit" :disabled="isProcessing" style="margin-bottom: 20px" class="btn db-btn db-btn__blue db-btn__type-md" value="Sign up"> <br>
                            </div>

                        </form>
                        <div class="text-center">
                            <span style="margin-bottom: 20px">Already have an account?</span><br>
                            <router-link to="/login" class="db-btn db-btn__white db-btn__type-md" style="margin-bottom:20px ">Sign in</router-link>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
</template>




<script>
export default {
  data() {
    return {
      errors: [],

      brandData: {
        email: "",
        password: "",
        brand_name: "",
        brand_url: "",
        first_name: "",
        last_name: "",
        address_line1: "",
        address_line2: "",
        state_or_province: "",
        country: ""
      },
      isProcessing: false
    };
  },
  methods: {
    cleanAllField: function() {
      this.brandData.email = "";
      this.brandData.password = "";
      this.brandData.brand_name = "";
      this.brandData.brand_url = "";
      this.brandData.first_name = "";
      this.brandData.last_name = "";
      this.brandData.address_line1 = "";
      this.brandData.address_line2 = "";
      this.brandData.state_or_province = "";
      this.brandData.country = "";
      this.errors = [];
    },
    registerBrand: function() {
        this.isProcessing = true;
      this.errors = [];
      axios
        .post("../../api/registerNewBrand", this.brandData)
        .then(response => {
           if(response.data.registered){
               this.cleanAllField();
                this.$router.push("/brand-register-success");
           }
           this.isProcessing= false;
        
        
        })
        .catch(error => {
          if (error.response.status == 401) {
            this.errors = error.response.data.error;
            console.log("tag", this.errors);
            this.isProcessing=false;
          }
        });
    }
  }
};
</script>


