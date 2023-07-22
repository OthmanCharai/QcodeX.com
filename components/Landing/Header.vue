<script setup>
/**
 * Contact object
 */
const contact = {
    phone: "(678) 345-3456",
    email: "envato@mail.com",
    address: "380 Albert St, Melbourne, Australia",
    linkedin: "https://www.linkedin.com/",
    facebook: "https://www.linkedin.com/",
    twitter: "https://www.linkedin.com/",
    instagram: "https://www.linkedin.com/",
};

/**
 * Route object
 */
const route = {
    home: {
        url: "/home",
        name: "Home",
    },
};
</script>

<template lang="">
    <!-- Main Header / Header Style Two -->
    <header class="main-header header-style-two">
        <!-- Header Top -->
        <div class="header-top_two">
            <div class="auto-container">
                <div
                    class="d-flex justify-content-center align-items-center flex-wrap"
                >
                    <!-- Info List -->
                    <ul class="info-list">
                        <li>
                            <a href="#"
                                ><span
                                    class="icon fa-solid fa-phone fa-fw"
                                ></span
                                >{{ contact.phone }}</a
                            >
                        </li>
                        <li>
                            <a href="#"
                                ><span
                                    class="icon fa-solid fa-envelope fa-fw"
                                ></span
                                >{{ contact.email }}</a
                            >
                        </li>
                        <li>
                            <a href="#"
                                ><span class="icon fa-solid fa-map fa-fw"></span></a
                            >
                        </li>
                    </ul>

                    <!-- Social Box -->
                    <ul class="header-social_box">
                        <li>
                            <a
                                :href="contact.facebook"
                                class="fa-brands fa-facebook-f fa-fw"
                            ></a>
                        </li>
                        <li>
                            <a
                                :href="contact.twitter"
                                class="fa-brands fa-twitter fa-fw"
                            ></a>
                        </li>
                        <li>
                            <a
                                :href="contact.linkedin"
                                class="fa-brands fa-linkedin fa-fw"
                            ></a>
                        </li>
                        <li>
                            <a
                                :href="contact.instagram"
                                class="fa-solid fa-instagram fa-fw"
                            ></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container d-flex">
                    <!-- Logo Box -->
                    <div class="logo">
                        <nuxt-link :to="route.home.url">
                            <img
                                src="~/assets/images/logo-3.png"
                                alt=""
                                title=""
                            />
                        </nuxt-link>
                    </div>

                    <!-- Upper Right -->
                    <div class="upper-right">
                        <div
                            class="nav-outer d-flex justify-content-between align-items-center flex-wrap"
                        >
                            <!-- Main Menu -->
                            <nav class="main-menu show navbar-expand-md">
                                <div class="navbar-header">
                                    <button
                                        class="navbar-toggler"
                                        type="button"
                                        data-toggle="collapse"
                                        data-target="#navbarSupportedContent"
                                        aria-controls="navbarSupportedContent"
                                        aria-expanded="false"
                                        aria-label="Toggle navigation"
                                    >
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div
                                    class="navbar-collapse collapse clearfix"
                                    id="navbarSupportedContent"
                                >
                                    <ul class="navigation clearfix">
                                        <li>
                                            <nuxt-link :to="route.home.url">{{
                                                route.home.name
                                            }}</nuxt-link>
                                        </li>
                                        <li>
											
                                            <a href="about.html">About Us</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Services</a>
                                            <ul>
                                                <li>
                                                    <a href="services.html"
                                                        >Services</a
                                                    >
                                                </li>
                                                <li>
                                                    <a
                                                        href="service-detail.html"
                                                        >Service Detail</a
                                                    >
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Project</a>
                                            <ul>
                                                <li>
                                                    <a href="project.html"
                                                        >project</a
                                                    >
                                                </li>
                                                <li>
                                                    <a
                                                        href="project-detail.html"
                                                        >project Detail</a
                                                    >
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Blog</a>
                                            <ul>
                                                <li>
                                                    <a href="blog.html"
                                                        >Our Blog</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="blog-detail.html"
                                                        >Blog Detail</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="not-found.html"
                                                        >Not Found</a
                                                    >
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->

                            <div class="outer-box d-flex align-items-center">
                                <!-- Search Box -->
                                <div class="search-box">
                                    <form method="post" action="contact.html">
                                        <div class="form-group">
                                            <input
                                                type="search"
                                                name="search-field"
                                                value=""
                                                placeholder="Search..."
                                                required
                                            />
                                            <button type="submit">
                                                <span
                                                    class="icon fa fa-search"
                                                ></span>
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                <!-- Language -->
                                <div class="language dropdown">
                                    <button
                                        class="btn dropdown-toggle"
                                        type="button"
                                        id="dropdownMenu1"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false"
                                    >
                                        <i class="fa-solid fa-globe fa-fw"></i
                                        >English &nbsp;<span
                                            class="fa fa-angle-down"
                                        ></span>
                                    </button>
                                    <ul
                                        class="dropdown-menu"
                                        aria-labelledby="dropdownMenu1"
                                    >
                                        <li><a href="#">English Branch</a></li>
                                        <li><a href="#">German Branch</a></li>
                                        <li><a href="#">UAE Branch</a></li>
                                        <li><a href="#">Qatar Branch</a></li>
                                    </ul>
                                </div>

                                <div class="button-box">
                                    <a
                                        class="btn-style-three theme-btn btn-item"
                                        href="#"
                                    >
                                        <div class="btn-wrap">
                                            <span class="text-one"
                                                >Get a quote now
                                                <i
                                                    class="fa-solid fa-arrow-right fa-fw"
                                                ></i
                                            ></span>
                                            <span class="text-two"
                                                >Get a quote now
                                                <i
                                                    class="fa-solid fa-arrow-right fa-fw"
                                                ></i
                                            ></span>
                                        </div>
                                    </a>
                                </div>

                                <!-- Mobile Navigation Toggler -->
                                <div class="mobile-nav-toggler">
                                    <span
                                        class="icon fa-solid fa-bars fa-fw"
                                    ></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.html" title=""
                            ><img src="images/logo-3.png" alt="" title=""
                        /></a>
                    </div>

                    <!-- Right Col -->
                    <div class="right-box d-flex align-items-center flex-wrap">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                        <!-- Main Menu End-->

                        <div class="outer-box d-flex align-items-center">
                            <!-- Search Box -->
                            <div class="search-box">
                                <form method="post" action="contact.html">
                                    <div class="form-group">
                                        <input
                                            type="search"
                                            name="search-field"
                                            value=""
                                            placeholder="Search..."
                                            required
                                        />
                                        <button type="submit">
                                            <span
                                                class="icon fa fa-search"
                                            ></span>
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <!-- Language -->
                            <div class="language dropdown">
                                <button
                                    class="btn dropdown-toggle"
                                    type="button"
                                    id="dropdownMenu2"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                >
                                    <i class="fa-solid fa-globe fa-fw"></i
                                    >English &nbsp;<span
                                        class="fa fa-angle-down"
                                    ></span>
                                </button>
                                <ul
                                    class="dropdown-menu"
                                    aria-labelledby="dropdownMenu2"
                                >
                                    <li><a href="#">English Branch</a></li>
                                    <li><a href="#">German Branch</a></li>
                                    <li><a href="#">UAE Branch</a></li>
                                    <li><a href="#">Qatar Branch</a></li>
                                </ul>
                            </div>

                            <div class="button-box">
                                <a
                                    class="btn-style-three theme-btn btn-item"
                                    href="#"
                                >
                                    <div class="btn-wrap">
                                        <span class="text-one"
                                            >Get a quote now
                                            <i
                                                class="fa-solid fa-arrow-right fa-fw"
                                            ></i
                                        ></span>
                                        <span class="text-two"
                                            >Get a quote now
                                            <i
                                                class="fa-solid fa-arrow-right fa-fw"
                                            ></i
                                        ></span>
                                    </div>
                                </a>
                            </div>

                            <!-- Mobile Navigation Toggler -->
                            <div class="mobile-nav-toggler">
                                <span
                                    class="icon fa-solid fa-bars fa-fw"
                                ></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn">
                <span class="icon flaticon-020-x-mark"></span>
            </div>
            <nav class="menu-box">
                <div class="nav-logo">
					<nuxt-link :to="route.home.url">
						<img src="~/assets/images/logo.png" alt="" title=""/>
					</nuxt-link>
                
                </div>
                <!-- Search -->
                <div class="search-box">
                    <form method="post" action="">
                        <div class="form-group">
                            <input
                                type="search"
                                name="search-field"
                                value=""
                                placeholder="SEARCH HERE"
                                required
                            />
                            <button type="submit">
                                <span class="icon flaticon-001-loupe"></span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->
    </header>
    <!-- End Main Header -->
</template>

<style lang=""></style>
