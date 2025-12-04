<template>
    <section class="page-title bg-1" :style="{ backgroundImage: 'url(/frontEnd/images/bg/bg-1.jpg)' }">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Our services</span>
                        <h1 class="text-capitalize mb-5 text-lg">What We Do</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section service-2">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-6" v-for="(item, index) in services" :key="index">
                    <div class="service-block mb-5">
                        <img :src="item.img" alt="" class="img-fluid" />
                        <div class="content">
                            <h4 class="mt-4 mb-2 title-color">{{ item.title }}</h4>
                            <p class="mb-4">{{ item.desc }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section cta-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="cta-content">
                        <div class="divider mb-4"></div>
                        <h2 class="mb-5 text-lg">
                            We are pleased to offer you the
                            <span class="title-color">chance to have the healthy</span>
                        </h2>
                        <router-link to="/appointment" class="btn btn-main-2 btn-round-full">
                            Get appointment
                            <i class="icofont-simple-right ml-2"></i>
                        </router-link>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "Services",

    mounted() {
        document.title = "Services || Novena"
    },

    data() {
        const base = "/frontEnd/images/service/";

        return {
            services: [
                { img: base + "service-1.jpg", title: "Child care", desc: "Saepe nulla praesentium eaque omnis perferendis a doloremque." },
                { img: base + "service-2.jpg", title: "Personal Care", desc: "Saepe nulla praesentium eaque omnis perferendis a doloremque." },
                { img: base + "service-3.jpg", title: "CT scan", desc: "Saepe nulla praesentium eaque omnis	perferendis a doloremque." },
                { img: base + "service-4.jpg", title: "Joint replacement", desc: "Saepe nulla praesentium eaque omnis	perferendis a doloremque." },
                { img: base + "service-6.jpg", title: "Examination & Diagnosis", desc: "Saepe nulla praesentium eaque omnis	perferendis a doloremque." },
                { img: base + "service-8.jpg", title: "Alzheimer's disease", desc: "Saepe nulla praesentium eaque omnis	perferendis a doloremque." }
            ]
        };
    }
};
</script>


<style scoped>
</style>
