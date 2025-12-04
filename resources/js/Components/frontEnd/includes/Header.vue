<template>
    <header>
        <div class="header-top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="top-bar-info list-inline-item pl-0 mb-0">
                            <li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2"></i>support@novena.com</a></li>
                            <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Address Ta-134/A, New York, USA </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                            <a href="tel:+23-345-67890" >
                                <span>Call Now : </span>
                                <span class="h4">823-4565-13456</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <nav class="navbar navbar-expand-lg navigation" id="navbar">
            <div class="container">

                <!-- Brand -->
                <router-link class="navbar-brand" to="/">
                    <img src="/frontEnd/images/logo.png" alt="Logo" class="img-fluid" />
                </router-link>

                <!-- Toggle button -->
                <button
                    class="navbar-toggler collapsed"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarmain"
                    aria-controls="navbarmain"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="icofont-navigation-menu"></span>
                </button>

                <!-- Menu -->
                <div class="collapse navbar-collapse" id="navbarmain">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <router-link class="nav-link" to="/" exact>Home</router-link>
                        </li>

                        <li class="nav-item">
                            <router-link class="nav-link" to="/about">About</router-link>
                        </li>

                        <li class="nav-item">
                            <router-link class="nav-link" to="/services">Services</router-link>
                        </li>

                        <li class="nav-item">
                            <router-link class="nav-link" to="/department">Department</router-link>
                        </li>

                        <!-- Doctors Dropdown -->
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="dropdown03"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                Doctors <i class="icofont-thin-down"></i>
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdown03">
                                <li>
                                    <router-link class="dropdown-item" to="/doctor-list">Doctors List</router-link>
                                </li>
                                <li>
                                    <router-link class="dropdown-item" to="/appointment">Appointment</router-link>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <router-link class="nav-link" to="/blog">Blog</router-link>
                        </li>

                        <li class="nav-item">
                            <router-link class="nav-link" to="/contact">Contact</router-link>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

    </header>

</template>

<script>
export default {
    name: "Header"
}
</script>

<style scoped>

</style>
