<template>
    <!-- Slider Start -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xl-7">
                    <div class="block">
                        <div class="divider mb-3"></div>
                        <span class="text-uppercase text-sm letter-spacing">Total Health care solution</span>
                        <h1 class="mb-3 mt-3">Your most trusted health partner</h1>
                        <p class="mb-4 pr-5">
                            A repudiandae ipsam labore ipsa voluptatum quidem quae laudantium quisquam aperiam maiores sunt fugit, deserunt rem suscipit placeat.
                        </p>
                        <div class="btn-container">
                            <a href="appoinment.html" target="_blank" class="btn btn-main-2 btn-icon btn-round-full">
                                Make appoinment <i class="icofont-simple-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature-block d-lg-flex">
                        <div v-for="feature in features" :key="feature.title" class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i :class="feature.icon"></i>
                            </div>
                            <span>{{ feature.subtitle }}</span>
                            <h4 class="mb-3">{{ feature.title }}</h4>
                            <p class="mb-4">{{ feature.description }}</p>
                            <a v-if="feature.link" :href="feature.link" class="btn btn-main btn-round-full">Make a appoinment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="about-img">
                        <img src="/frontEnd/images/about/img-1.jpg" alt="" class="img-fluid" />
                        <img src="/frontEnd/images/about/img-2.jpg" alt="" class="img-fluid mt-4" />
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="about-img mt-4 mt-lg-0">
                        <img src="/frontEnd/images/about/img-3.jpg" alt="" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-content pl-4 mt-4 mt-lg-0">
                        <h2 class="title-color">Personal care <br>& healthy living</h2>
                        <p class="mt-4 mb-5">
                            We provide best leading medicle service Nulla perferendis veniam deleniti ipsum officia dolores repellat laudantium obcaecati neque.
                        </p>
                        <a href="service.html" class="btn btn-main-2 btn-round-full btn-icon">
                            Services <i class="icofont-simple-right ml-3"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta position-relative">
                <div class="row">
                    <div v-for="counter in counters" :key="counter.label" class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i :class="counter.icon"></i>
                            <span class="h3">{{ counter.value }}</span>{{ counter.suffix }}
                            <p>{{ counter.label }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section service gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <h2>Award winning patient care</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>
                            Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div v-for="service in services" :key="service.title" class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <i :class="service.icon + ' text-lg'"></i>
                            <h4 class="mt-3 mb-3">{{ service.title }}</h4>
                        </div>
                        <div class="content">
                            <p class="mb-4">{{ service.description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Appointment Section -->
    <section class="section appoinment">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="appoinment-content">
                        <img src="/frontEnd/images/about/img-3.jpg" alt="" class="img-fluid" />
                        <div class="emergency">
                            <h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i>+23 345 67980</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="appoinment-wrap mt-5 mt-lg-0">
                        <h2 class="mb-2 title-color">Book appoinment</h2>
                        <p class="mb-4">
                            Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti qui velit. Iste dolorum atque similique praesentium soluta.
                        </p>
                        <form id="#" class="appoinment-form" method="post" action="#">
                            <div class="row">
                                <div class="col-lg-6" v-for="input in appointmentInputs" :key="input.placeholder">
                                    <div class="form-group">
                                        <component
                                            :is="input.type === 'select' ? 'select' : 'input'"
                                            class="form-control"
                                            v-bind="input.attrs"
                                        >
                                            <option v-for="option in input.options" :key="option">{{ option }}</option>
                                        </component>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group-2 mb-4">
                                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-main btn-round-full" href="appoinment.html">
                                Make Appoinment <i class="icofont-simple-right ml-2"></i>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section testimonial-2 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <h2>We served over 5000+ Patients</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>
                            Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.
                        </p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 testimonial-wrap-2">
                        <div
                            v-for="testimonial in testimonials"
                            :key="testimonial.name + testimonial.heading"
                            class="testimonial-block style-2 gray-bg"
                        >
                            <div class="testimonial-thumb">
                                <img :src="testimonial.img" alt="" class="img-fluid" />
                            </div>
                            <div class="client-info">
                                <h4>{{ testimonial.heading }}</h4>
                                <span>{{ testimonial.name }}</span>
                                <p>{{ testimonial.message }}</p>
                            </div>
                            <i class="icofont-quote-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Section -->
    <section class="section clients">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <h2>Partners who support us</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>
                            Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.
                        </p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row clients-logo">
                    <div v-for="(client, index) in clients" :key="index" class="col-lg-2">
                        <div class="client-thumb">
                            <img :src="client" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "Home",
    data() {
        return {
            features: [
                { icon: "icofont-surgeon-alt", subtitle: "24 Hours Service", title: "Online Appoinment", description: "Get ALl time support for emergency. We have introduced the principle of family medicine.", link: "appoinment.html" },
                { icon: "icofont-ui-clock", subtitle: "Timing schedule", title: "Working Hours", description: "Sun - Wed: 8:00 - 17:00, Thu - Fri: 9:00 - 17:00, Sat - Sun: 10:00 - 17:00" },
                { icon: "icofont-support", subtitle: "Emergency Cases", title: "1-800-700-6200", description: "Get ALl time support for emergency. We have introduced the principle of family medicine. Get Connected with us for any urgency." }
            ],
            counters: [
                { icon: "icofont-doctor", value: 58, suffix: "k", label: "Happy People" },
                { icon: "icofont-flag", value: 700, suffix: "+", label: "Surgery Completed" },
                { icon: "icofont-badge", value: 40, suffix: "+", label: "Expert Doctors" },
                { icon: "icofont-globe", value: 20, suffix: "", label: "Worldwide Branch" }
            ],
            services: [
                { icon: "icofont-laboratory", title: "Laboratory services", description: "Saepe nulla praesentium eaque omnis perferendis a doloremque." },
                { icon: "icofont-heart-beat-alt", title: "Heart Disease", description: "Saepe nulla praesentium eaque omnis perferendis a doloremque." },
                { icon: "icofont-tooth", title: "Dental Care", description: "Saepe nulla praesentium eaque omnis perferendis a doloremque." },
                { icon: "icofont-crutch", title: "Body Surgery", description: "Saepe nulla praesentium eaque omnis perferendis a doloremque." },
                { icon: "icofont-brain-alt", title: "Neurology Surgery", description: "Saepe nulla praesentium eaque omnis perferendis a doloremque." },
                { icon: "icofont-dna-alt-1", title: "Gynecology", description: "Saepe nulla praesentium eaque omnis perferendis a doloremque." }
            ],
            appointmentInputs: [
                { type: "select", attrs: { id: "department" }, placeholder: "Choose Department", options: ["Choose Department","Software Design","Development cycle","Software Development","Maintenance","Process Query","Cost and Duration","Modal Delivery"] },
                { type: "select", attrs: { id: "doctors" }, placeholder: "Select Doctors", options: ["Select Doctors","Software Design","Development cycle","Software Development","Maintenance","Process Query","Cost and Duration","Modal Delivery"] },
                { type: "input", attrs: { name: "date", id: "date", type: "text", placeholder: "dd/mm/yyyy" } },
                { type: "input", attrs: { name: "time", id: "time", type: "text", placeholder: "Time" } },
                { type: "input", attrs: { name: "name", id: "name", type: "text", placeholder: "Full Name" } },
                { type: "input", attrs: { name: "phone", id: "phone", type: "number", placeholder: "Phone Number" } }
            ],
            testimonials: [
                { img: "/frontEnd/images/team/test-thumb1.jpg", heading: "Amazing service!", name: "John Partho", message: "They provide great service facility consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat." },
                { img: "/frontEnd/images/team/test-thumb2.jpg", heading: "Expert doctors!", name: "Mullar Sarth", message: "They provide great service facility consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat." },
                { img: "/frontEnd/images/team/test-thumb3.jpg", heading: "Good Support!", name: "Kolis Mullar", message: "They provide great service facility consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat." },
                { img: "/frontEnd/images/team/test-thumb4.jpg", heading: "Nice Environment!", name: "Partho Sarothi", message: "They provide great service facility consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat." },
                { img: "/frontEnd/images/team/test-thumb1.jpg", heading: "Modern Service!", name: "Kolis Mullar", message: "They provide great service facility consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat." }
            ],
            clients: [
                "/frontEnd/images/about/1.png",
                "/frontEnd/images/about/2.png",
                "/frontEnd/images/about/3.png",
                "/frontEnd/images/about/4.png",
                "/frontEnd/images/about/5.png",
                "/frontEnd/images/about/6.png",
                "/frontEnd/images/about/3.png",
                "/frontEnd/images/about/4.png",
                "/frontEnd/images/about/5.png",
                "/frontEnd/images/about/6.png"
            ]
        };
    },

    mounted() {
        document.title="Home || Novena";

        $('.clients-logo').slick({
            infinite: true,
            arrows: false,
            autoplay: true,
            slidesToShow: 6,
            slidesToScroll: 6,
            autoplaySpeed: 6000,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow:6,
                        slidesToScroll: 6,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 900,
                    settings: {
                        slidesToShow:4,
                        slidesToScroll: 4
                    }
                },{
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }

            ]
        });



        $('.testimonial-wrap-2').slick({
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,
            dots: true,
            arrows:false,
            autoplay: true,
            autoplaySpeed: 6000,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow:2,
                        slidesToScroll:2,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },{
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }

            ]
        });


    }


};
</script>

<style scoped>
/* Add any page-specific styling if needed */
</style>
