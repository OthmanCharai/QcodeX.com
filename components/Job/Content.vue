<template lang="">
   <!-- Content Side -->
   <div class="content-side right-sidebar col-lg-8 col-md-12 col-sm-12">
    <div class="service-detail">
        <div class="inner-box">
            <div class="image">
                <img class="mainImage"  :src="service.mainImage" alt="" />
            </div>
            <h3>{{ service.name }}</h3>
            <p>{{ service.content }}</p>
            <div class="row clearfix">
                
                <!-- Feature Two -->
                <div class="feature-two col-lg-6 col-md-6 col-sm-12">
                    <div class="feature-two_inner">
                        <div class="feature-two_content">
                            <span class="feature-two_icon"><img src="./../../images/icons/feature-6.png" alt="" /></span>
                            <h5 class="feature-two_heading">Why <span>It soft?</span></h5>
                            <div class="feature-two_text">We're making room for self care today with plan.</div>
                        </div>
                    </div>
                </div>
                
                <!-- Feature Two -->
                <div class="feature-two col-lg-6 col-md-6 col-sm-12">
                    <div class="feature-two_inner">
                        <div class="feature-two_content">
                            <span class="feature-two_icon"><img  src="./../../images/icons/feature-7.png" alt="" /></span>
                            <h5 class="feature-two_heading">Unlimited support</h5>
                            <div class="feature-two_text">New range coming in on a weekly basis veg section.</div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="row clearfix">
                <!-- Column -->
                <div class="column col-lg-6 col-md-6 col-sm-12">
                    <div class="image">
                        <img  src="./../../images/indestry/11.jpg" alt="" />
                    </div>
                </div>
                <!-- Column -->
                <div class="column col-lg-6 col-md-6 col-sm-12">
                    <h4>We serve the best work</h4>
                    <p>By initiating your project with Qcodex, you get a dedicated and skilled team backing you up round-the-clock. All our processes are  the customer oriented, designed to reduce the cost of business operations.</p>
                </div>
            </div>
            
            <div class="feature-lower_box">
                <div class="row clearfix">
                    
                    <!-- Feature Three -->
                    <div class="feature-three col-lg-4 col-md-4 col-sm-6">
                        <div class="feature-three_inner">
                            <span class="feature-three_icon"><img src="./../../images/icons/service-35.png" alt="" /></span>
                             Quality <br> Support
                        </div>
                    </div>
                    
                    <!-- Feature Three -->
                    <div class="feature-three col-lg-4 col-md-4 col-sm-6">
                        <div class="feature-three_inner">
                            <span class="feature-three_icon"><img src="./../../images/icons/service-36.png" alt="" /></span>
                            Security Guaranteed
                        </div>
                    </div>
                    
                    <!-- Feature Three -->
                    <div class="feature-three col-lg-4 col-md-4 col-sm-6">
                        <div class="feature-three_inner">
                            <span class="feature-three_icon"><img src="./../../images/icons/service-37.png" alt="" /></span>
                            Competitive Prices
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</div>
</template>
<script setup>

const props=defineProps({
    service:Object
})

</script>
<style lang="css">
    .mainImage{
        height: 442px;
        background-size: cover;
    }

    .support{
        height: 222px;
    }
</style>