{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-jet-welcome />
</x-app-layout> --}}

@extends('layouts.default')
@section('title')
    {{ auth()->user()->username }} |dashboard
@endsection


@section('main')
    <div id="main-navbar" class="navbar navbar-v1 is-inline-flex is-transparent no-shadow is-hidden-mobile">
        <div class="container is-fluid">
            <div class="navbar-brand">
                <a href="/" class="navbar-item">
                    <img class="logo light-image" src="assets/img/logo/zhivago-logo.png" width="112" height="28"
                        alt="">
                    <img class="logo dark-image" src="assets/img/logo/zhivago-logo.png" width="112" height="28"
                        alt="">
                </a>
            </div>
            <div class="navbar-menu">
                <div class="navbar-start">
                    <!-- Navbar Search -->

                    <div class="navbar-item is-icon drop-trigger">
                        <a class="icon-link is-friends" href="javascript:void(0);">
                            <i data-feather="heart"></i>
                            <span class="indicator"></span>
                        </a>

                        <div class="nav-drop">
                            <div class="inner">
                                <div class="nav-drop-header">
                                    <span>Friend requests</span>
                                    <a href="#">
                                        <i data-feather="search"></i>
                                    </a>
                                </div>
                                <div class="nav-drop-body is-friend-requests">
                                    <!-- Friend request -->
                                    {{-- <div class="media">
                                        <figure class="media-left">
                                            <p class="image">
                                                <img src="" data-demo-src="assets/img/avatars/bobby.jpg"
                                                    alt="">
                                            </p>
                                        </figure>
                                        <div class="media-content">
                                            <a href="#">Riley Rodes</a>
                                            <span>Najeel verwick is a common friend</span>
                                        </div>
                                        <div class="media-right">
                                            <button class="button icon-button is-solid grey-button raised">
                                                <i data-feather="user-plus"></i>
                                            </button>
                                            <button class="button icon-button is-solid grey-button raised">
                                                <i data-feather="user-minus"></i>
                                            </button>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="nav-drop-footer">
                                    <a href="#">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-item is-icon drop-trigger">
                        <a class="icon-link" href="javascript:void(0);">
                            <i data-feather="bell"></i>
                            <span class="indicator"></span>
                        </a>

                        <div class="nav-drop">
                            <div class="inner">
                                <div class="nav-drop-header">
                                    <span>Notifications</span>
                                    <a href="#">
                                        <i data-feather="bell"></i>
                                    </a>
                                </div>
                                <div class="nav-drop-body is-notifications">
                                    <!-- Notification -->
                                    {{-- <div class="media">
                                        <figure class="media-left">
                                            <p class="image">
                                                <img src="" data-demo-src="assets/img/avatars/david.jpg"
                                                    alt="">
                                            </p>
                                        </figure>
                                        <div class="media-content">
                                            <span><a href="#">Leno Milovic</a> commented on <a href="#">your
                                                    post</a>.</span>
                                            <span class="time">30 minutes ago</span>
                                        </div>
                                        <div class="media-right">
                                            <div class="added-icon">
                                                <i data-feather="message-square"></i>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="nav-drop-footer">
                                    <a href="#">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-item is-icon drop-trigger">
                        <a class="icon-link is-active" href="javascript:void(0);">
                            <i data-feather="mail"></i>
                            <span class="indicator"></span>
                        </a>

                        <div class="nav-drop">
                            <div class="inner">
                                <div class="nav-drop-header">
                                    <span>Messages</span>
                                    <a href="messages-inbox.html">Inbox</a>
                                </div>
                                <div class="nav-drop-body is-friend-requests">
                                    <!-- Message -->
                                    {{-- <div class="media">
                                        <figure class="media-left">
                                            <p class="image">
                                                <img src="https://via.placeholder.com/150x150"
                                                    data-demo-src="assets/img/avatars/nelly.png" data-user-popover="9"
                                                    alt="">
                                            </p>
                                        </figure>
                                        <div class="media-content">
                                            <a href="#">Nelly Schwartz</a>
                                            <span>I think we should meet near the Starbucks so we can get...</span>
                                            <span class="time">Yesterday</span>
                                        </div>
                                        <div class="media-right is-centered">
                                            <div class="added-icon">
                                                <i data-feather="message-square"></i>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="nav-drop-footer">
                                    <a href="#">Clear All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-item is-icon open-chat">
                        <a class="icon-link is-primary" href="javascript:void(0);">
                            <i data-feather="message-square"></i>
                            <span class="indicator"></span>
                        </a>
                    </div>

                    <div id="explorer-trigger" class="navbar-item is-icon">
                        <a class="icon-link is-primary">
                            <i class="mdi mdi-apps"></i>
                        </a>
                    </div>
                </div>

                <div class="navbar-end">

                    <div class="navbar-item">
                        <div id="global-search" class="control">
                            <input id="tipue_drop_input" class="input is-rounded" type="text" placeholder="Search"
                                required>
                            <span id="clear-search" class="reset-search">
                                <i data-feather="x"></i>
                            </span>
                            <span class="search-icon">
                                <i data-feather="search"></i>
                            </span>

                            <div id="tipue_drop_content" class="tipue-drop-content"></div>
                        </div>

                    </div>
                    <div class="navbar-item is-cart">
                        <div class="cart-button">
                            <i data-feather="shopping-cart"></i>
                            <div class="cart-count">
                            </div>
                        </div>

                        <!-- Cart dropdown -->
                        <div class="shopping-cart">
                            <div class="cart-inner">

                                <!--Loader-->
                                <div class="navbar-cart-loader is-active">
                                    <div class="loader is-loading"></div>
                                </div>

                                <div class="shopping-cart-header">
                                    <a href="/ecommerce-cart.html" class="cart-link">View Cart</a>
                                    <div class="shopping-cart-total">
                                        <span class="lighter-text">Total:</span>
                                        <span class="main-color-text">$193.00</span>
                                    </div>
                                </div>
                                <!--end shopping-cart-header -->

                                <ul class="shopping-cart-items">
                                    <li class="cart-row">
                                        <img src="assets/img/products/2.svg" alt="" />
                                        <span class="item-meta">
                                            <span class="item-name">Cool Shirt</span>
                                            <span class="meta-info">
                                                <span class="item-price">$29.00</span>
                                                <span class="item-quantity">Qty: 01</span>
                                            </span>
                                        </span>
                                    </li>

                                    <li class="cart-row">
                                        <img src="assets/img/products/3.svg" alt="" />
                                        <span class="item-meta">
                                            <span class="item-name">Military Short</span>
                                            <span class="meta-info">
                                                <span class="item-price">$39.00</span>
                                                <span class="item-quantity">Qty: 01</span>
                                            </span>
                                        </span>
                                    </li>

                                    <li class="cart-row">
                                        <img src="assets/img/products/4.svg" alt="" />
                                        <span class="item-meta">
                                            <span class="item-name">Cool Backpack</span>
                                            <span class="meta-info">
                                                <span class="item-price">$125.00</span>
                                                <span class="item-quantity">Qty: 01</span>
                                            </span>
                                        </span>
                                    </li>
                                </ul>

                                <a href="#" class="button primary-button is-raised">Checkout</a>
                            </div>
                        </div>
                    </div>
                    <div id="account-dropdown" class="navbar-item is-account drop-trigger has-caret">
                        <div class="user-image">
                            <img src="assets/img/avatars/default.jpg" data-demo-src="assets/img/avatars/default.jpg"
                                alt="">
                            <span class="indicator"></span>
                        </div>

                        <div class="nav-drop is-account-dropdown">
                            <div class="inner">
                                <div class="nav-drop-header">
                                    <span class="username">{{ auth()->user()->username }}</span>
                                    <label class="theme-toggle">
                                        <input type="checkbox">
                                        <span class="toggler">
                                            <span class="dark">
                                                <i data-feather="moon"></i>
                                            </span>
                                            <span class="light">
                                                <i data-feather="sun"></i>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <div class="nav-drop-body account-items">
                                    <a id="profile-link" href="/profile-main.html" class="account-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="image">
                                                    <img src="https://via.placeholder.com/400x400"
                                                        data-demo-src="assets/img/avatars/jenna.png" alt="">
                                                </div>
                                            </div>
                                            <div class="media-content">
                                                <h3>{{ auth()->user()->username }}</h3>
                                                @foreach (auth()->user()->accountType as $accountType)
                                                    <small>{{ $accountType }}</small>
                                                @endforeach
                                            </div>
                                            <div class="media-right">
                                                <i data-feather="check"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="account-divider">
                                    <a href="/options-settings.html" class="account-item">
                                        <div class="media">
                                            <div class="icon-wrap">
                                                <i data-feather="settings"></i>
                                            </div>
                                            <div class="media-content">
                                                <h3>Settings</h3>
                                                <small>Access widget settings.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="account-item">
                                        <div class="media">
                                            <div class="icon-wrap">
                                                <i data-feather="life-buoy"></i>
                                            </div>
                                            <div class="media-content">
                                                <h3>Help</h3>
                                                <small>Contact our support.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        <a class="account-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <div class="media">
                                                <div class="icon-wrap">
                                                    <i data-feather="power"></i>
                                                </div>
                                                @csrf
                                                <div class="media-content">
                                                    <h3>Log out</h3>
                                                    <small>Log out from your account.</small>
                                                </div>
                                            </div>
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <nav class="navbar mobile-navbar is-hidden-desktop" aria-label="main navigation">
        <!-- Brand -->
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <img class="light-image" src="assets/img/logo/friendkit-bold.svg" alt="">
                <img class="dark-image" src="assets/img/logo/friendkit-white.svg" alt="">
            </a>

            <div class="navbar-item is-icon drop-trigger">
                <a class="icon-link is-friends" href="javascript:void(0);">
                    <i data-feather="heart"></i>
                    <span class="indicator"></span>
                </a>

                <div class="nav-drop">
                    <div class="inner">
                        <div class="nav-drop-header">
                            <span>Friend requests</span>
                            <a href="#">
                                <i data-feather="search"></i>
                            </a>
                        </div>
                        <div class="nav-drop-body is-friend-requests">
                            <!-- Friend request -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://i.pinimg.com/474x/00/6c/39/006c39813e910263dc44a62d867fbcf5.jpg"
                                            data-demo-src="assets/img/avatars/bobby.jpg" alt="">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <a href="#">Bobby Brown</a>
                                    <span>Najeel verwick is a common friend</span>
                                </div>
                                <div class="media-right">
                                    <button class="button icon-button is-solid grey-button raised">
                                        <i data-feather="user-plus"></i>
                                    </button>
                                    <button class="button icon-button is-solid grey-button raised">
                                        <i data-feather="user-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Friend request -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://i.pinimg.com/originals/38/a3/da/38a3da14b37c1f82fa833f9fb608c6a2.webp"
                                            data-demo-src="assets/img/avatars/dan.jpg" alt="">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <a href="#">Danna Walker</a>
                                    <span>You have 4 common friends</span>
                                </div>
                                <div class="media-right">
                                    <button class="button icon-button is-solid grey-button raised">
                                        <i data-feather="user-plus"></i>
                                    </button>
                                    <button class="button icon-button is-solid grey-button raised">
                                        <i data-feather="user-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Friend request -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://static.toiimg.com/photo/12866068.cms?imgsize=106029"
                                            data-demo-src="assets/img/avatars/nelly.png" alt="">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <span>You are now friends with <a href="#">Nelly Schwartz</a>. Check her <a
                                            href="#">profile</a>.</span>
                                </div>
                                <div class="media-right">
                                    <div class="added-icon">
                                        <i data-feather="tag"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Friend request -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://cdn.shopify.com/s/files/1/0372/8447/9035/products/product-image-1310418995_1200x1200.jpg?v=1588162392"
                                            data-demo-src="assets/img/avatars/milly.jpg" alt="">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <a href="#">Milly Augustine</a>
                                    <span>You have 8 common friends</span>
                                </div>
                                <div class="media-right">
                                    <button class="button icon-button is-solid grey-button raised">
                                        <i data-feather="user-plus"></i>
                                    </button>
                                    <button class="button icon-button is-solid grey-button raised">
                                        <i data-feather="user-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Friend request -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://i.pinimg.com/474x/07/98/e9/0798e9ebace9c3b09cacb4777f0d4340.jpg"
                                            data-demo-src="assets/img/avatars/elise.jpg" alt="">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <span>You are now friends with <a href="#">Elise Walker</a>. Check her <a
                                            href="#">profile</a>.</span>
                                </div>
                                <div class="media-right">
                                    <div class="added-icon">
                                        <i data-feather="tag"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Friend request -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://thetorched.com/images/women/20140822/hot-girls-big-smiles-02.jpeg"
                                            data-demo-src="assets/img/avatars/edward.jpeg" alt="">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <span>You are now friends with <a href="#">Edma Mayers</a>. Check his <a
                                            href="#">profile</a>.</span>
                                </div>
                                <div class="media-right">
                                    <div class="added-icon">
                                        <i data-feather="tag"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-drop-footer">
                            <a href="#">View All</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-item is-icon drop-trigger">
                <a class="icon-link" href="javascript:void(0);">
                    <i data-feather="bell"></i>
                    <span class="indicator"></span>
                </a>

                <div class="nav-drop">
                    <div class="inner">
                        <div class="nav-drop-header">
                            <span>Notifications</span>
                            <a href="#">
                                <i data-feather="bell"></i>
                            </a>
                        </div>
                        <div class="nav-drop-body is-notifications">
                            <!-- Notification -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="" data-demo-src="assets/img/avatars/david.jpg" alt="">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <span><a href="#">David Kim</a> commented on <a href="#">your
                                            post</a>.</span>
                                    <span class="time">30 minutes ago</span>
                                </div>
                                <div class="media-right">
                                    <div class="added-icon">
                                        <i data-feather="message-square"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Notification -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="" data-demo-src="assets/img/avatars/daniel.jpg" alt="">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <span><a href="#">Daniel Wellington</a> liked your <a
                                            href="#">profile.</a></span>
                                    <span class="time">43 minutes ago</span>
                                </div>
                                <div class="media-right">
                                    <div class="added-icon">
                                        <i data-feather="heart"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Notification -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="" data-demo-src="assets/img/avatars/stella.jpg" alt="">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <span><a href="#">Stella Bergmann</a> shared a <a href="#">New video</a>
                                        on your wall.</span>
                                    <span class="time">Yesterday</span>
                                </div>
                                <div class="media-right">
                                    <div class="added-icon">
                                        <i data-feather="youtube"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Notification -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="" data-demo-src="assets/img/avatars/elise.jpg" alt="">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <span><a href="#">Elise Walker</a> shared an <a href="#">Image</a> with
                                        you an 2 other people.</span>
                                    <span class="time">2 days ago</span>
                                </div>
                                <div class="media-right">
                                    <div class="added-icon">
                                        <i data-feather="image"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-drop-footer">
                            <a href="#">View All</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-item is-icon drop-trigger">
                <a class="icon-link is-active" href="javascript:void(0);">
                    <i data-feather="mail"></i>
                    <span class="indicator"></span>
                </a>

                <div class="nav-drop">
                    <div class="inner">
                        <div class="nav-drop-header">
                            <span>Messages</span>
                            <a href="messages-inbox.html">Inbox</a>
                        </div>
                        <div class="nav-drop-body is-friend-requests">
                            <!-- Message -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://via.placeholder.com/150x150"
                                            data-demo-src="assets/img/avatars/nelly.png" data-user-popover="9"
                                            alt="">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <a href="#">Nelly Schwartz</a>
                                    <span>I think we should meet near the Starbucks so we can get...</span>
                                    <span class="time">Yesterday</span>
                                </div>
                                <div class="media-right is-centered">
                                    <div class="added-icon">
                                        <i data-feather="message-square"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Message -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://via.placeholder.com/150x150"
                                            data-demo-src="assets/img/avatars/edward.jpeg" data-user-popover="5"
                                            alt="">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <a href="#">Edward Mayers</a>
                                    <span>That was a real pleasure seeing you last time we really should...</span>
                                    <span class="time">last week</span>
                                </div>
                                <div class="media-right is-centered">
                                    <div class="added-icon">
                                        <i data-feather="message-square"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Message -->
                            <div class="media">
                                <figure class="media-left">
                                    <p class="image">
                                        <img src="https://via.placeholder.com/150x150"
                                            data-demo-src="assets/img/avatars/dan.jpg" data-user-popover="1"
                                            alt="">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <a href="#">Dan Walker</a>
                                    <span>Hey there, would it be possible to borrow your bicycle, i really need...</span>
                                    <span class="time">Jun 03 2018</span>
                                </div>
                                <div class="media-right is-centered">
                                    <div class="added-icon">
                                        <i data-feather="message-square"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-drop-footer">
                            <a href="#">Clear All</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-explorer-trigger" class="navbar-item is-icon">
                <a class="icon-link is-primary">
                    <i class="mdi mdi-apps"></i>
                </a>
            </div>

            <div id="open-mobile-search" class="navbar-item is-icon">
                <a class="icon-link is-primary" href="javascript:void(0);">
                    <i data-feather="search"></i>
                </a>
            </div>

            <!-- Mobile menu toggler icon -->
            <div class="navbar-burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- Navbar mobile menu -->
        <div class="navbar-menu">
            <!-- Account -->
            <div class="navbar-item has-dropdown is-active">
                <a href="/navbar-v1-profile-main.html" class="navbar-link">
                    <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/jenna.png"
                        alt="">
                    <span class="is-heading">Jenna Davis</span>
                </a>

                <!-- Mobile Dropdown -->
                <div class="navbar-dropdown">
                    <a href="/navbar-v1-feed.html" class="navbar-item is-flex is-mobile-icon">
                        <span><i data-feather="activity"></i>Feed</span>
                        <span class="menu-badge">87</span>
                    </a>
                    <a href="/navbar-v1-videos-home-v2.html" class="navbar-item is-flex is-mobile-icon">
                        <span><i data-feather="play-circle"></i>Watch</span>
                        <span class="menu-badge">21</span>
                    </a>
                    <a href="/navbar-v1-profile-friends.html" class="navbar-item is-flex is-mobile-icon">
                        <span><i data-feather="heart"></i>Friend Requests</span>
                        <span class="menu-badge">3</span>
                    </a>
                    <a href="/navbar-v1-profile-main.html" class="navbar-item is-flex is-mobile-icon">
                        <span><i data-feather="user"></i>Profile</span>
                    </a>
                    <a href="/navbar-v1-ecommerce-cart.html" class="navbar-item is-flex is-mobile-icon">
                        <span><i data-feather="shopping-cart"></i>Cart</span>
                        <span class="menu-badge">3</span>
                    </a>
                    <a href="#" class="navbar-item is-flex is-mobile-icon">
                        <span><i data-feather="bookmark"></i>Bookmarks</span>
                    </a>
                </div>
            </div>

            <!-- More -->
            <div class="navbar-item has-dropdown">
                <a href="/navbar-v1-settings.html" class="navbar-link">
                    <i data-feather="user"></i>
                    <span class="is-heading">Account</span>
                </a>

                <!-- Mobile Dropdown -->
                <div class="navbar-dropdown">
                    <a href="#" class="navbar-item is-flex is-mobile-icon">
                        <span><i data-feather="life-buoy"></i>Support</span>
                    </a>
                    <a href="/navbar-v1-settings.html" class="navbar-item is-flex is-mobile-icon">
                        <span><i data-feather="settings"></i>Settings</span>
                    </a>
                    <a href="#" class="navbar-item is-flex is-mobile-icon">
                        <span><i data-feather="log-out"></i>Logout</span>
                    </a>
                </div>
            </div>
        </div>
        <!--Search-->
        <div class="mobile-search is-hidden">
            <div class="control">
                <input id="tipue_drop_input_mobile" class="input" placeholder="Search...">
                <div class="form-icon">
                    <i data-feather="search"></i>
                </div>
                <div class="close-icon">
                    <i data-feather="x"></i>
                </div>
                <div id="tipue_drop_content_mobile" class="tipue-drop-content"></div>
            </div>
        </div>
    </nav>
    <div class="view-wrapper">

        <!-- Container -->
        <div id="main-feed" class="container">

            <!-- Content placeholders at page load -->
            <!-- /html/partials/global/placeload/feed-page/feed-menu-shadow-dom.html -->
            <!-- this holds the animated content placeholders that show up before content -->
            <div id="shadow-dom" class="view-wrap">
                <div class="columns">

                    <div class="column is-3">

                        <!-- /html/partials/global/placeload/placeloads/questions-menu-placeload.html -->
                        <div class="placeload is-bold questions-menu-placeload">
                            <div class="inner-wrap">
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                            </div>
                        </div>

                    </div>

                    <div class="column is-6">

                        <!-- Placeload element -->
                        <div class="placeload compose-placeload">
                            <div class="header">
                                <div class="content-shape is-lg loads"></div>
                                <div class="content-shape is-lg loads"></div>
                                <div class="content-shape is-lg loads"></div>
                            </div>
                            <div class="body">
                                <div class="img loads"></div>
                                <div class="inner-wrap">
                                    <div class="content-shape loads"></div>
                                    <div class="content-shape loads"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Placeload element -->
                        <div class="placeload post-placeload">
                            <div class="header">
                                <div class="img loads"></div>
                                <div class="header-content">
                                    <div class="content-shape loads"></div>
                                    <div class="content-shape loads"></div>
                                </div>
                            </div>
                            <div class="image-placeholder loads"></div>
                            <div class="placeholder-footer">
                                <div class="footer-block">
                                    <div class="img loads"></div>
                                    <div class="inner-wrap">
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Placeload element -->
                        <div class="placeload post-placeload">
                            <div class="header">
                                <div class="img loads"></div>
                                <div class="header-content">
                                    <div class="content-shape loads"></div>
                                    <div class="content-shape loads"></div>
                                </div>
                            </div>
                            <div class="image-placeholder loads"></div>
                            <div class="placeholder-footer">
                                <div class="footer-block">
                                    <div class="img loads"></div>
                                    <div class="inner-wrap">
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Placeload element -->
                        <div class="placeload post-placeload">
                            <div class="header">
                                <div class="img loads"></div>
                                <div class="header-content">
                                    <div class="content-shape loads"></div>
                                    <div class="content-shape loads"></div>
                                </div>
                            </div>
                            <div class="image-placeholder loads"></div>
                            <div class="placeholder-footer">
                                <div class="footer-block">
                                    <div class="img loads"></div>
                                    <div class="inner-wrap">
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Placeload element -->
                        <div class="placeload post-placeload">
                            <div class="header">
                                <div class="img loads"></div>
                                <div class="header-content">
                                    <div class="content-shape loads"></div>
                                    <div class="content-shape loads"></div>
                                </div>
                            </div>
                            <div class="image-placeholder loads"></div>
                            <div class="placeholder-footer">
                                <div class="footer-block">
                                    <div class="img loads"></div>
                                    <div class="inner-wrap">
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column is-3">

                        <!-- Placeload element -->
                        <div class="placeload stories-placeload">
                            <div class="header">
                                <div class="content-shape loads"></div>
                            </div>
                            <div class="body">
                                <div class="flex-block">
                                    <div class="img loads"></div>
                                    <div class="inner-wrap">
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                    </div>
                                </div>
                                <div class="flex-block">
                                    <div class="img loads"></div>
                                    <div class="inner-wrap">
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                    </div>
                                </div>
                                <div class="flex-block">
                                    <div class="img loads"></div>
                                    <div class="inner-wrap">
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                    </div>
                                </div>
                                <div class="flex-block">
                                    <div class="img loads"></div>
                                    <div class="inner-wrap">
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Placeload element -->
                        <div class="placeload mini-widget-placeload">
                            <div class="body">
                                <div class="inner-wrap">
                                    <div class="img loads"></div>
                                    <div class="content-shape loads"></div>
                                    <div class="content-shape loads"></div>
                                    <div class="content-shape loads"></div>
                                    <div class="button-shape loads"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Placeload element -->
                        <div class="placeload list-placeload">
                            <div class="header">
                                <div class="content-shape loads"></div>
                            </div>
                            <div class="body">
                                <div class="flex-block">
                                    <div class="img loads"></div>
                                    <div class="inner-wrap">
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                    </div>
                                </div>
                                <div class="flex-block">
                                    <div class="img loads"></div>
                                    <div class="inner-wrap">
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                    </div>
                                </div>
                                <div class="flex-block">
                                    <div class="img loads"></div>
                                    <div class="inner-wrap">
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                    </div>
                                </div>
                                <div class="flex-block">
                                    <div class="img loads"></div>
                                    <div class="inner-wrap">
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Feed page main wrapper -->
            <div id="activity-feed" class="view-wrap true-dom is-hidden">
                <div class="columns">
                    <!-- Left side column -->
                    <div class="column is-3 is-hidden-mobile">
                        <!-- Feed menu -->
                        <div class="feed-menu-v1">
                            <ul class="main-menu">
                                <li class="is-active">
                                    <a>
                                        <i data-feather="activity"></i>
                                        <span>Feed</span>
                                        <span class="close-icon">
                                            <i data-feather="chevron-right"></i>
                                        </span>
                                    </a>
                                    <ul class="submenu">
                                        <li class="is-subactive">
                                            <a>Trending <span class="tag">4</span></a>
                                        </li>
                                        <li>
                                            <a>Popular</a>
                                        </li>
                                        <li>
                                            <a>Following</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a>
                                        <i data-feather="help-circle"></i>
                                        <span>Questions</span>
                                        <span class="close-icon">
                                            <i data-feather="chevron-right"></i>
                                        </span>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a>Home</a>
                                        </li>
                                        <li>
                                            <a>My Questions</a>
                                        </li>
                                        <li>
                                            <a>Popular</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a>
                                        <i data-feather="youtube"></i>
                                        <span>Videos</span>
                                        <span class="close-icon">
                                            <i data-feather="chevron-right"></i>
                                        </span>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a>Home<span class="tag">7</span></a>
                                        </li>
                                        <li>
                                            <a>Suggested</a>
                                        </li>
                                        <li>
                                            <a>My Channel</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a>
                                        <i data-feather="shopping-cart"></i>
                                        <span>Shopping</span>
                                        <span class="close-icon">
                                            <i data-feather="chevron-right"></i>
                                        </span>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a>Trending<span class="tag">2</span></a>
                                        </li>
                                        <li>
                                            <a>Popular<span class="tag">5</span></a>
                                        </li>
                                        <li>
                                            <a>My Products</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a>
                                        <i data-feather="music"></i>
                                        <span>Music</span>
                                        <span class="close-icon">
                                            <i data-feather="chevron-right"></i>
                                        </span>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a>My Products</a>
                                        </li>
                                        <li>
                                            <a>Trending<span class="tag">6</span></a>
                                        </li>
                                        <li>
                                            <a>Popular</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a>
                                        <img src="https://img.icons8.com/ios-filled/344/crowd.png" width="24"
                                            height="24">
                                        <span>Groups</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div id="banner-ad" style="width: 250px; height: 250px; background-color: #ddd;">

                            <p class="ad-text" style="text-align: center;">
                                250 X ADVERTISMENT X 250
                            </p>

                            {{-- <script>
                                googletag.cmd.push(function() {
                                    googletag.display('banner-ad');
                                });
                            </script> --}}
                        </div>
                    </div>
                    <!-- /Left side column -->

                    <!-- Middle column -->
                    <div class="column is-6">

                        <!-- Publishing Area -->
                        <!-- /partials/pages/feed/compose-card.html -->
                        <div id="compose-card" class="card is-new-content">
                            <!-- Top tabs -->
                            <div class="tabs-wrapper">
                                <div class="tabs is-boxed is-fullwidth">
                                    <ul>
                                        <li class="is-active">
                                            <a>
                                                <span class="icon is-small"><i data-feather="edit-3"></i></span>
                                                <span>Publish</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="modal-trigger" data-modal="albums-help-modal">
                                                <span class="icon is-small"><i data-feather="image"></i></span>
                                                <span>Albums</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="modal-trigger" data-modal="videos-help-modal">
                                                <span class="icon is-small"><i data-feather="video"></i></span>
                                                <span>Video</span>
                                            </a>
                                        </li>
                                        <!-- Close X button -->
                                        <li class="close-wrap">
                                            <span class="close-publish">
                                                <i data-feather="x"></i>
                                            </span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Tab content -->
                                <div class="tab-content">
                                    <!-- Compose form -->
                                    <div class="compose">
                                        <div class="compose-form">
                                            <img src="assets/img/avatars/default.jpg"
                                                data-demo-src="assets/img/avatars/default.jpg" alt="">
                                            <div class="control">
                                                <textarea id="publish" class="textarea" rows="3" placeholder="Write something about you..."></textarea>
                                            </div>
                                        </div>

                                        <div id="feed-upload" class="feed-upload">

                                        </div>

                                        <div id="options-summary" class="options-summary"></div>

                                        <div id="tag-suboption" class="is-autocomplete is-suboption is-hidden">
                                            <!-- Tag friends suboption -->
                                            <div id="tag-list" class="tag-list"></div>
                                            <div class="control">
                                                <input id="users-autocpl" type="text" class="input"
                                                    placeholder="Who are you with?">
                                                <div class="icon">
                                                    <i data-feather="search"></i>
                                                </div>
                                                <div class="close-icon is-main">
                                                    <i data-feather="x"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Tag friends suboption -->

                                        <!-- Activities suboption -->
                                        <div id="activities-suboption" class="is-autocomplete is-suboption is-hidden">
                                            <div id="activities-autocpl-wrapper" class="control has-margin">
                                                <input id="activities-autocpl" type="text" class="input"
                                                    placeholder="What are you doing right now?">
                                                <div class="icon">
                                                    <i data-feather="search"></i>
                                                </div>
                                                <div class="close-icon is-main">
                                                    <i data-feather="x"></i>
                                                </div>
                                            </div>

                                            <!-- Mood suboption -->
                                            <div id="mood-autocpl-wrapper" class="is-autocomplete is-activity is-hidden">
                                                <div class="control has-margin">
                                                    <input id="mood-autocpl" type="text" class="input is-subactivity"
                                                        placeholder="How do you feel?">
                                                    <div class="input-block">
                                                        Feels
                                                    </div>
                                                    <div class="close-icon is-subactivity">
                                                        <i data-feather="x"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Drinking suboption child -->
                                            <div id="drinking-autocpl-wrapper"
                                                class="is-autocomplete is-activity is-hidden">
                                                <div class="control has-margin">
                                                    <input id="drinking-autocpl" type="text"
                                                        class="input is-subactivity" placeholder="What are you drinking?">
                                                    <div class="input-block">
                                                        Drinks
                                                    </div>
                                                    <div class="close-icon is-subactivity">
                                                        <i data-feather="x"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Eating suboption child -->
                                            <div id="eating-autocpl-wrapper"
                                                class="is-autocomplete is-activity is-hidden">
                                                <div class="control has-margin">
                                                    <input id="eating-autocpl" type="text"
                                                        class="input is-subactivity" placeholder="What are you eating?">
                                                    <div class="input-block">
                                                        Eats
                                                    </div>
                                                    <div class="close-icon is-subactivity">
                                                        <i data-feather="x"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Reading suboption child -->
                                            <div id="reading-autocpl-wrapper"
                                                class="is-autocomplete is-activity is-hidden">
                                                <div class="control has-margin">
                                                    <input id="reading-autocpl" type="text"
                                                        class="input is-subactivity" placeholder="What are you reading?">
                                                    <div class="input-block">
                                                        Reads
                                                    </div>
                                                    <div class="close-icon is-subactivity">
                                                        <i data-feather="x"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Watching suboption child -->
                                            <div id="watching-autocpl-wrapper"
                                                class="is-autocomplete is-activity is-hidden">
                                                <div class="control has-margin">
                                                    <input id="watching-autocpl" type="text"
                                                        class="input is-subactivity" placeholder="What are you watching?">
                                                    <div class="input-block">
                                                        Watches
                                                    </div>
                                                    <div class="close-icon is-subactivity">
                                                        <i data-feather="x"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Travel suboption child -->
                                            <div id="travel-autocpl-wrapper"
                                                class="is-autocomplete is-activity is-hidden">
                                                <div class="control has-margin">
                                                    <input id="travel-autocpl" type="text"
                                                        class="input is-subactivity" placeholder="Where are you going?">
                                                    <div class="input-block">
                                                        Travels
                                                    </div>
                                                    <div class="close-icon is-subactivity">
                                                        <i data-feather="x"></i>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- /Activities suboption -->

                                        <!-- Location suboption -->
                                        <div id="location-suboption" class="is-autocomplete is-suboption is-hidden">
                                            <div id="location-autocpl-wrapper"
                                                class="control is-location-wrapper has-margin">
                                                <input id="location-autocpl" type="text" class="input"
                                                    placeholder="Where are you now?">
                                                <div class="icon">
                                                    <i data-feather="map-pin"></i>
                                                </div>
                                                <div class="close-icon is-main">
                                                    <i data-feather="x"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Link suboption -->
                                        <div id="link-suboption" class="is-autocomplete is-suboption is-hidden">
                                            <div id="link-autocpl-wrapper" class="control is-location-wrapper has-margin">
                                                <input id="link-autocpl" type="text" class="input"
                                                    placeholder="Enter the link URL">
                                                <div class="icon">
                                                    <i data-feather="link-2"></i>
                                                </div>
                                                <div class="close-icon is-main">
                                                    <i data-feather="x"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- GIF suboption -->
                                        <div id="gif-suboption" class="is-autocomplete is-suboption is-hidden">
                                            <div id="gif-autocpl-wrapper" class="control is-gif-wrapper has-margin">
                                                <input id="gif-autocpl" type="text" class="input"
                                                    placeholder="Search a GIF to add" autofocus>
                                                <div class="icon">
                                                    <i data-feather="search"></i>
                                                </div>
                                                <div class="close-icon is-main">
                                                    <i data-feather="x"></i>
                                                </div>
                                                <div class="gif-dropdown">
                                                    <div class="inner">
                                                        <div class="gif-block">
                                                            <img src="https://via.placeholder.com/478x344"
                                                                data-demo-src="assets/img/demo/gif/1.gif" alt="">
                                                            <img src="https://via.placeholder.com/478x344"
                                                                data-demo-src="assets/img/demo/gif/2.gif" alt="">
                                                            <img src="https://via.placeholder.com/478x344"
                                                                data-demo-src="assets/img/demo/gif/3.gif" alt="">
                                                            <img src="https://via.placeholder.com/478x344"
                                                                data-demo-src="assets/img/demo/gif/4.gif" alt="">
                                                        </div>
                                                        <div class="gif-block">
                                                            <img src="https://via.placeholder.com/478x344"
                                                                data-demo-src="assets/img/demo/gif/5.gif" alt="">
                                                            <img src="https://via.placeholder.com/478x344"
                                                                data-demo-src="assets/img/demo/gif/6.gif" alt="">
                                                            <img src="https://via.placeholder.com/478x344"
                                                                data-demo-src="assets/img/demo/gif/7.gif" alt="">
                                                            <img src="https://via.placeholder.com/478x344"
                                                                data-demo-src="assets/img/demo/gif/8.gif" alt="">
                                                        </div>
                                                        <div class="gif-block">
                                                            <img src="https://via.placeholder.com/478x344"
                                                                data-demo-src="assets/img/demo/gif/9.gif" alt="">
                                                            <img src="https://via.placeholder.com/478x344"
                                                                data-demo-src="assets/img/demo/gif/10.gif" alt="">
                                                            <img src="https://via.placeholder.com/478x344"
                                                                data-demo-src="assets/img/demo/gif/11.gif" alt="">
                                                            <img src="https://via.placeholder.com/478x344"
                                                                data-demo-src="assets/img/demo/gif/12.gif" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Compose form -->

                                    <!-- General extended options -->
                                    <div id="extended-options" class="compose-options is-hidden">
                                        <div class="columns is-multiline is-full">
                                            <!-- Upload action -->
                                            <div class="column is-6 is-narrower">
                                                <div class="compose-option is-centered">
                                                    <i data-feather="camera"></i>
                                                    <span>Photo/Video</span>
                                                    <input id="feed-upload-input-1" type="file"
                                                        accept=".png, .jpg, .jpeg" onchange="readURL(this)">
                                                </div>
                                            </div>
                                            <!-- Mood action -->
                                            <div class="column is-6 is-narrower">
                                                <div id="extended-show-activities" class="compose-option is-centered">
                                                    <img src="assets/img/icons/emoji/emoji-1.svg" alt="">
                                                    <span>Mood/Activity</span>
                                                </div>
                                            </div>
                                            <!-- Tag friends action -->
                                            <div class="column is-6 is-narrower">
                                                <div id="open-tag-suboption" class="compose-option is-centered">
                                                    <i data-feather="tag"></i>
                                                    <span>Tag friends</span>
                                                </div>
                                            </div>
                                            <!-- Post location action -->
                                            <div class="column is-6 is-narrower">
                                                <div id="open-location-suboption" class="compose-option is-centered">
                                                    <i data-feather="map-pin"></i>
                                                    <span>Post location</span>
                                                </div>
                                            </div>
                                            <!-- Share link action -->
                                            <div class="column is-6 is-narrower">
                                                <div id="open-link-suboption" class="compose-option is-centered">
                                                    <i data-feather="link-2"></i>
                                                    <span>Share link</span>
                                                </div>
                                            </div>
                                            <!-- Post GIF action -->
                                            <div class="column is-6 is-narrower">
                                                <div id="open-gif-suboption" class="compose-option is-centered">
                                                    <i data-feather="image"></i>
                                                    <span>Post GIF</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /General extended options -->

                                    <!-- General basic options -->
                                    <div id="basic-options" class="compose-options">
                                        <!-- Upload action -->
                                        <div class="compose-option">
                                            <i data-feather="camera"></i>
                                            <span>Media</span>
                                            <input id="feed-upload-input-2" type="file" type="file"
                                                accept=".png, .jpg, .jpeg" onchange="readURL(this)">
                                        </div>
                                        <!-- Mood action -->
                                        <div id="show-activities" class="compose-option">
                                            <img src="assets/img/icons/emoji/emoji-1.svg" alt="">
                                            <span>Activity</span>
                                        </div>
                                        <!-- Expand action -->
                                        <div id="open-extended-options" class="compose-option">
                                            <i data-feather="more-horizontal"></i>
                                        </div>
                                    </div>
                                    <!-- /General basic options -->

                                    <!-- Hidden Options -->
                                    <div class="hidden-options">
                                        <div class="target-channels">
                                            <!-- Publication Channel -->
                                            <div class="channel">
                                                <div class="round-checkbox is-small">
                                                    <div>
                                                        <input type="checkbox" id="checkbox-1" checked>
                                                        <label for="checkbox-1"></label>
                                                    </div>
                                                </div>
                                                <div class="channel-icon">
                                                    <i data-feather="bell"></i>
                                                </div>
                                                <div class="channel-name">Activity Feed</div>
                                                <!-- Dropdown menu -->
                                                <div
                                                    class="dropdown is-spaced is-modern is-right is-neutral dropdown-trigger">
                                                    <div>
                                                        <button class="button" aria-haspopup="true">
                                                            <i class="main-icon" data-feather="smile"></i>
                                                            <span>Friends</span>
                                                            <i class="caret" data-feather="chevron-down"></i>
                                                        </button>
                                                    </div>
                                                    <div class="dropdown-menu" role="menu">
                                                        <div class="dropdown-content">
                                                            <a href="#" class="dropdown-item">
                                                                <div class="media">
                                                                    <i data-feather="globe"></i>
                                                                    <div class="media-content">
                                                                        <h3>Public</h3>
                                                                        <small>Anyone can see this publication.</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a class="dropdown-item">
                                                                <div class="media">
                                                                    <i data-feather="users"></i>
                                                                    <div class="media-content">
                                                                        <h3>Friends</h3>
                                                                        <small>only friends can see this
                                                                            publication.</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a class="dropdown-item">
                                                                <div class="media">
                                                                    <i data-feather="user"></i>
                                                                    <div class="media-content">
                                                                        <h3>Specific friends</h3>
                                                                        <small>Don't show it to some friends.</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <hr class="dropdown-divider">
                                                            <a class="dropdown-item">
                                                                <div class="media">
                                                                    <i data-feather="lock"></i>
                                                                    <div class="media-content">
                                                                        <h3>Only me</h3>
                                                                        <small>Only me can see this publication.</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Publication Channel -->
                                            <div class="channel">
                                                <div class="round-checkbox is-small">
                                                    <div>
                                                        <input type="checkbox" id="checkbox-2">
                                                        <label for="checkbox-2"></label>
                                                    </div>
                                                </div>
                                                <div class="story-icon">
                                                    <div class="plus-icon">
                                                        <i data-feather="plus"></i>
                                                    </div>
                                                </div>

                                                <div class="channel-name">My Story</div>
                                                <!-- Dropdown menu -->
                                                <div
                                                    class="dropdown is-spaced is-modern is-right is-neutral dropdown-trigger">
                                                    <div>
                                                        <button class="button" aria-haspopup="true">
                                                            <i class="main-icon" data-feather="smile"></i>
                                                            <span>Friends</span>
                                                            <i class="caret" data-feather="chevron-down"></i>
                                                        </button>
                                                    </div>
                                                    <div class="dropdown-menu" role="menu">
                                                        <div class="dropdown-content">
                                                            <a href="#" class="dropdown-item">
                                                                <div class="media">
                                                                    <i data-feather="globe"></i>
                                                                    <div class="media-content">
                                                                        <h3>Public</h3>
                                                                        <small>Anyone can see this publication.</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a class="dropdown-item">
                                                                <div class="media">
                                                                    <i data-feather="users"></i>
                                                                    <div class="media-content">
                                                                        <h3>Friends</h3>
                                                                        <small>only friends can see this
                                                                            publication.</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a class="dropdown-item">
                                                                <div class="media">
                                                                    <i data-feather="users"></i>
                                                                    <div class="media-content">
                                                                        <h3>Friends and contacts</h3>
                                                                        <small>Your friends and contacts.</small>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Friends list -->
                                        <div class="friends-list is-hidden">
                                            <!-- Header -->
                                            <div class="list-header">
                                                <span>Send in a message</span>
                                                <div class="actions">
                                                    <a id="open-compose-search" href="javascript:void(0);"
                                                        class="search-trigger">
                                                        <i data-feather="search"></i>
                                                    </a>
                                                    <!-- Hidden filter input -->
                                                    <div id="compose-search" class="control is-hidden">
                                                        <input type="text" class="input" placeholder="Search People">
                                                        <span>
                                                            <i data-feather="search"></i>
                                                        </span>
                                                    </div>
                                                    <a href="javascript:void(0);" class="is-inverted modal-trigger"
                                                        data-modal="create-group-modal">Create group</a>
                                                </div>
                                            </div>
                                            <!-- List body -->
                                            <div class="list-body">

                                                <!-- Friend -->
                                                <div class="friend-block">
                                                    <div class="round-checkbox is-small">
                                                        <div>
                                                            <input type="checkbox" id="checkbox-3">
                                                            <label for="checkbox-3"></label>
                                                        </div>
                                                    </div>
                                                    <img class="friend-avatar" src=""
                                                        data-demo-src="assets/img/avatars/dan.jpg" alt="">
                                                    <div class="friend-name">Dan Walker</div>
                                                </div>
                                                <!-- Friend -->
                                                <div class="friend-block">
                                                    <div class="round-checkbox is-small">
                                                        <div>
                                                            <input type="checkbox" id="checkbox-4">
                                                            <label for="checkbox-4"></label>
                                                        </div>
                                                    </div>
                                                    <img class="friend-avatar" src=""
                                                        data-demo-src="assets/img/avatars/daniel.jpg" alt="">
                                                    <div class="friend-name">Daniel Wellington</div>
                                                </div>
                                                <!-- Friend -->
                                                <div class="friend-block">
                                                    <div class="round-checkbox is-small">
                                                        <div>
                                                            <input type="checkbox" id="checkbox-5">
                                                            <label for="checkbox-5"></label>
                                                        </div>
                                                    </div>
                                                    <img class="friend-avatar" src=""
                                                        data-demo-src="assets/img/avatars/stella.jpg" alt="">
                                                    <div class="friend-name">Stella Bergmann</div>
                                                </div>
                                                <!-- Friend -->
                                                <div class="friend-block">
                                                    <div class="round-checkbox is-small">
                                                        <div>
                                                            <input type="checkbox" id="checkbox-6">
                                                            <label for="checkbox-6"></label>
                                                        </div>
                                                    </div>
                                                    <img class="friend-avatar" src=""
                                                        data-demo-src="assets/img/avatars/david.jpg" alt="">
                                                    <div class="friend-name">David Kim</div>
                                                </div>
                                                <!-- Friend -->
                                                <div class="friend-block">
                                                    <div class="round-checkbox is-small">
                                                        <div>
                                                            <input type="checkbox" id="checkbox-7">
                                                            <label for="checkbox-7"></label>
                                                        </div>
                                                    </div>
                                                    <img class="friend-avatar" src=""
                                                        data-demo-src="assets/img/avatars/nelly.png" alt="">
                                                    <div class="friend-name">Nelly Schwartz</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Footer buttons -->
                                    <div class="more-wrap">
                                        <!-- View more button -->
                                        <button id="show-compose-friends" type="button" class="button is-more"
                                            aria-haspopup="true">
                                            <i data-feather="more-vertical"></i>
                                            <span>View More</span>
                                        </button>
                                        <!-- Publish button -->
                                        <button id="publish-button" type="button"
                                            class="button is-solid accent-button is-fullwidth is-disabled">
                                            Publish
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Post 1 -->

                        <div id="banner-ad" style="width: 650px; height: 90px; background-color: #ddd;">

                            <p class="ad-text" style="text-align: center;">
                                700 X ADVERTISMENT X 90
                            </p>

                            {{-- <script>
                                googletag.cmd.push(function() {
                                    googletag.display('banner-ad');
                                });
                            </script> --}}
                        </div>


                        <!-- POST #1 -->
                        {{-- <div id="feed-post-1" class="card is-post">
                            <!-- Main wrap -->
                            <div class="content-wrap">
                                <!-- Post header -->
                                <div class="card-heading">
                                    <!-- User meta -->
                                    <div class="user-block">
                                        <div class="image">
                                            <img src="https://i.pinimg.com/474x/55/ff/29/55ff2945c2b07a59d6ed3eb6450b2f9d.jpg"
                                                data-demo-src="https://i.pinimg.com/474x/55/ff/29/55ff2945c2b07a59d6ed3eb6450b2f9d.jpg"
                                                data-user-popover="1" alt="">
                                        </div>
                                        <div class="user-info">
                                            <a href="#">Sofia Sof</a>
                                            <span class="time">July 26 2022, 01:03pm</span>
                                        </div>
                                    </div>
                                    <!-- Right side dropdown -->
                                    <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->
                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                        <div>
                                            <div class="button">
                                                <i data-feather="more-vertical"></i>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" role="menu">
                                            <div class="dropdown-content">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="bookmark"></i>
                                                        <div class="media-content">
                                                            <h3>Bookmark</h3>
                                                            <small>Add this post to your bookmarks.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="bell"></i>
                                                        <div class="media-content">
                                                            <h3>Notify me</h3>
                                                            <small>Send me the updates.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="dropdown-divider">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="flag"></i>
                                                        <div class="media-content">
                                                            <h3>Flag</h3>
                                                            <small>In case of inappropriate content.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post header -->

                                <!-- Post body -->
                                <div class="card-body">
                                    <!-- Post body text -->
                                    <div class="post-text">
                                        <p>Yesterday with
                                            <a href="#">@Karen Miller</a> and
                                            <a href="#">@Marvin Stemperd</a> at the
                                            <a href="#">#Rock'n'Rolla</a> concert in LA. Was totally fantastic!
                                            People were really excited about this one!
                                        </p>
                                    </div>
                                    <!-- Featured image -->
                                    <div class="post-image">
                                        <a data-fancybox="post1" data-lightbox-type="comments"
                                            data-thumb="assets/img/demo/unsplash/1.jpg"
                                            href="https://via.placeholder.com/1600x900"
                                            data-demo-href="assets/img/demo/unsplash/1.jpg">
                                            <img src="" data-demo-src="assets/img/demo/unsplash/1.jpg"
                                                alt="">
                                        </a>
                                        <!-- Action buttons -->
                                        <!-- /partials/pages/feed/buttons/feed-post-actions.html -->
                                        <div class="like-wrapper">
                                            <a href="javascript:void(0);" class="like-button">
                                                <i class="mdi mdi-heart not-liked bouncy"></i>
                                                <i class="mdi mdi-heart is-liked bouncy"></i>
                                                <span class="like-overlay"></span>
                                            </a>
                                        </div>

                                        <div class="fab-wrapper is-share">
                                            <a href="javascript:void(0);" class="small-fab share-fab modal-trigger"
                                                data-modal="share-modal">
                                                <i data-feather="link-2"></i>
                                            </a>
                                        </div>

                                        <div class="fab-wrapper is-comment">
                                            <a href="javascript:void(0);" class="small-fab">
                                                <i data-feather="message-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post body -->

                                <!-- Post footer -->
                                <div class="card-footer">
                                    <!-- Followers avatars -->
                                    <div class="likers-group">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_ZDBEYfcWVvUfO6Zqj1vkN6-i1_4DpcLM9Q&usqp=CAU"
                                            data-demo-src="assets/img/avatars/dan.jpg" data-user-popover="1"
                                            alt="">
                                        <img src="data:image/jpeg;base64,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"
                                            data-demo-src="assets/img/avatars/david.jpg" data-user-popover="4"
                                            alt="">
                                        <img src="https://i.pinimg.com/736x/68/85/ca/6885ca754a1b083a5de9e2f44e934b68.jpg"
                                            data-demo-src="assets/img/avatars/edward.jpeg" data-user-popover="5"
                                            alt="">
                                        <img src="https://i.pinimg.com/474x/35/a6/42/35a642598ea5684550b689d6af9f578c.jpg"
                                            data-demo-src="assets/img/avatars/milly.jpg" data-user-popover="7"
                                            alt="">
                                    </div>
                                    <!-- Followers text -->
                                    <div class="likers-text">
                                        <p>
                                            <a href="#">Lena</a>,
                                            <a href="#">Milly</a>
                                        </p>
                                        <p>and 23 more liked this</p>
                                    </div>
                                    <!-- Post statistics -->
                                    <div class="social-count">
                                        <div class="likes-count">
                                            <i data-feather="heart"></i>
                                            <span>27</span>
                                        </div>
                                        <div class="shares-count">
                                            <i data-feather="link-2"></i>
                                            <span>9</span>
                                        </div>
                                        <div class="comments-count">
                                            <i data-feather="message-circle"></i>
                                            <span>3</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post footer -->
                            </div>
                            <!-- /Main wrap -->

                            <!-- Post #1 Comments -->
                            <div class="comments-wrap is-hidden">
                                <!-- Header -->
                                <div class="comments-heading">
                                    <h4>Comments
                                        <small>(8)</small>
                                    </h4>
                                    <div class="close-comments">
                                        <i data-feather="x"></i>
                                    </div>
                                </div>
                                <!-- /Header -->

                                <!-- Comments body -->
                                <div class="comments-body has-slimscroll">

                                    <!-- Comment -->
                                    <div class="media is-comment">
                                        <!-- User image -->
                                        <div class="media-left">
                                            <div class="image">
                                                <img src="" data-demo-src="assets/img/avatars/dan.jpg"
                                                    data-user-popover="1" alt="">
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="media-content">
                                            <a href="#">Dan Walker</a>
                                            <span class="time">28 minutes ago</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempo incididunt ut labore et
                                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                                ullamco laboris consequat.</p>
                                            <!-- Actions -->
                                            <div class="controls">
                                                <div class="like-count">
                                                    <i data-feather="thumbs-up"></i>
                                                    <span>4</span>
                                                </div>
                                                <div class="reply">
                                                    <a href="#">Reply</a>
                                                </div>
                                                <div class="edit">
                                                    <a href="#">Edit</a>
                                                </div>
                                            </div>

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src="" data-demo-src="assets/img/avatars/david.jpg"
                                                            data-user-popover="4" alt="">
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">David Kim</a>
                                                    <span class="time">15 minutes ago</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo incididunt ut labore et
                                                        dolore magna aliqua.</p>
                                                    <!-- Actions -->
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <i data-feather="thumbs-up"></i>
                                                            <span>0</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <i data-feather="more-vertical"></i>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="x"></i>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="flag"></i>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->

                                        </div>
                                        <!-- Right side dropdown -->
                                        <div class="media-right">
                                            <!-- /partials/pages/feed/dropdowns/comment-dropdown.html -->
                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                <div>
                                                    <div class="button">
                                                        <i data-feather="more-vertical"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a class="dropdown-item">
                                                            <div class="media">
                                                                <i data-feather="x"></i>
                                                                <div class="media-content">
                                                                    <h3>Hide</h3>
                                                                    <small>Hide this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item">
                                                            <div class="media">
                                                                <i data-feather="flag"></i>
                                                                <div class="media-content">
                                                                    <h3>Report</h3>
                                                                    <small>Report this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Comment -->

                                    <!-- Comment -->
                                    <div class="media is-comment">
                                        <!-- User image -->
                                        <div class="media-left">
                                            <div class="image">
                                                <img src="" data-demo-src="assets/img/avatars/rolf.jpg"
                                                    data-user-popover="13" alt="">
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="media-content">
                                            <a href="#">Rolf Krupp</a>
                                            <span class="time">9 hours ago</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempo incididunt ut labore et
                                                dolore magna aliqua. Exercitation ullamco laboris consequat.</p>
                                            <!-- Actions -->
                                            <div class="controls">
                                                <div class="like-count">
                                                    <i data-feather="thumbs-up"></i>
                                                    <span>2</span>
                                                </div>
                                                <div class="reply">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src="" data-demo-src="assets/img/avatars/elise.jpg"
                                                            data-user-popover="6" alt="">
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">Elise Walker</a>
                                                    <span class="time">8 hours ago</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo incididunt ut labore et
                                                        dolore magna aliqua.</p>
                                                    <!-- Actions -->
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <i data-feather="thumbs-up"></i>
                                                            <span>0</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <i data-feather="more-vertical"></i>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="x"></i>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="flag"></i>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src="" data-demo-src="assets/img/avatars/rolf.jpg"
                                                            data-user-popover="13" alt="">
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">Rolf Krupp</a>
                                                    <span class="time">7 hours ago</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo incididunt ut labore et
                                                        dolore magna aliqua.</p>
                                                    <!-- Actions -->
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <i data-feather="thumbs-up"></i>
                                                            <span>1</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <i data-feather="more-vertical"></i>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="x"></i>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="flag"></i>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src="" data-demo-src="assets/img/avatars/elise.jpg"
                                                            data-user-popover="6" alt="">
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">Elise Walker</a>
                                                    <span class="time">6 hours ago</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo incididunt ut labore et
                                                        dolore magna aliqua.</p>
                                                    <!-- Actions -->
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <i data-feather="thumbs-up"></i>
                                                            <span>0</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <i data-feather="more-vertical"></i>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="x"></i>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="flag"></i>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->

                                        </div>
                                        <!-- Right side dropdown -->
                                        <div class="media-right">
                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                <div>
                                                    <div class="button">
                                                        <i data-feather="more-vertical"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a class="dropdown-item">
                                                            <div class="media">
                                                                <i data-feather="x"></i>
                                                                <div class="media-content">
                                                                    <h3>Hide</h3>
                                                                    <small>Hide this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item">
                                                            <div class="media">
                                                                <i data-feather="flag"></i>
                                                                <div class="media-content">
                                                                    <h3>Report</h3>
                                                                    <small>Report this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Comment -->

                                    <!-- Comment -->
                                    <div class="media is-comment">
                                        <!-- User image -->
                                        <div class="media-left">
                                            <div class="image">
                                                <img src="" data-demo-src="assets/img/avatars/lana.jpeg"
                                                    data-user-popover="10" alt="">
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="media-content">
                                            <a href="#">Lana Henrikssen</a>
                                            <span class="time">10 hours ago</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempo incididunt ut labore
                                                et dolore magna aliqua.</p>
                                            <!-- Comment actions -->
                                            <div class="controls">
                                                <div class="like-count">
                                                    <i data-feather="thumbs-up"></i>
                                                    <span>5</span>
                                                </div>
                                                <div class="reply">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Right side dropdown -->
                                        <div class="media-right">
                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                <div>
                                                    <div class="button">
                                                        <i data-feather="more-vertical"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a class="dropdown-item">
                                                            <div class="media">
                                                                <i data-feather="x"></i>
                                                                <div class="media-content">
                                                                    <h3>Hide</h3>
                                                                    <small>Hide this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item">
                                                            <div class="media">
                                                                <i data-feather="flag"></i>
                                                                <div class="media-content">
                                                                    <h3>Report</h3>
                                                                    <small>Report this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Comment -->

                                </div>
                                <!-- /Comments body -->

                                <!-- Comments footer -->
                                <div class="card-footer">
                                    <div class="media post-comment has-emojis">
                                        <!-- Comment Textarea -->
                                        <div class="media-content">
                                            <div class="field">
                                                <p class="control">
                                                    <textarea class="textarea comment-textarea" rows="5" placeholder="Write a comment..."></textarea>
                                                </p>
                                            </div>
                                            <!-- Additional actions -->
                                            <div class="actions">
                                                <div class="image is-32x32">
                                                    <img class="is-rounded" src=""
                                                        data-demo-src="assets/img/avatars/jenna.png"
                                                        data-user-popover="0" alt="">
                                                </div>
                                                <div class="toolbar">
                                                    <div class="action is-auto">
                                                        <i data-feather="at-sign"></i>
                                                    </div>
                                                    <div class="action is-emoji">
                                                        <i data-feather="smile"></i>
                                                    </div>
                                                    <div class="action is-upload">
                                                        <i data-feather="camera"></i>
                                                        <input type="file">
                                                    </div>
                                                    <a class="button is-solid primary-button raised">Post Comment</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comments footer -->
                            </div>
                            <!-- /Post #1 Comments -->
                        </div> --}}
                        <!-- POST #1 -->
                        <!-- Post 2 -->
                        <!-- /partials/pages/feed/posts/feed-post2.html -->
                        <!-- POST #2 -->
                        {{-- <div class="card is-post">
                            <!-- Main wrap -->
                            <div class="content-wrap">
                                <!-- Post header -->
                                <div class="card-heading">
                                    <!-- User meta -->
                                    <div class="user-block">
                                        <div class="image">
                                            <img src="" data-demo-src="assets/img/avatars/edward.jpeg"
                                                data-user-popover="5" alt="">
                                        </div>
                                        <div class="user-info">
                                            <a href="#">Edma Mayers</a>
                                            <span class="time">July 26 2018, 11:14am</span>
                                        </div>
                                    </div>
                                    <!-- Right side dropdown -->
                                    <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->
                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                        <div>
                                            <div class="button">
                                                <i data-feather="more-vertical"></i>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" role="menu">
                                            <div class="dropdown-content">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="bookmark"></i>
                                                        <div class="media-content">
                                                            <h3>Bookmark</h3>
                                                            <small>Add this post to your bookmarks.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="bell"></i>
                                                        <div class="media-content">
                                                            <h3>Notify me</h3>
                                                            <small>Send me the updates.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="dropdown-divider">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="flag"></i>
                                                        <div class="media-content">
                                                            <h3>Flag</h3>
                                                            <small>In case of inappropriate content.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post header -->

                                <!-- Post body -->
                                <div class="card-body">
                                    <!-- Post body text -->
                                    <div class="post-text">
                                        <p>You all know how much I love #Zhivago Underwear Collection, so I wanted to share
                                            this video with you guys! There's a lot more coming there !
                                            <a href="#">#zhivago #underwearcollection</a>
                                        <p>
                                    </div>
                                    <!-- Featured youtube video -->
                                    <div class="post-link is-video">
                                        <!-- Link image -->
                                        <div class="link-image">
                                            <img src="" data-demo-src="assets/img/demo/video/bootstrap.jpg"
                                                alt="">
                                            <div class="video-overlay"></div>
                                            <a class="video-button" data-fancybox href="#">
                                                <img src="assets/img/icons/video/play.svg" alt="">
                                            </a>
                                        </div>
                                        <!-- Link content -->
                                        <div class="link-content">
                                            <h4>
                                                <a href="#">Edma's Zhivago Underwear Collection </a>
                                            </h4>
                                            <p>Make sure you're all alone when checking the video,enjoy it and hit me up
                                                what should I do next!! xxx </p>
                                            <small>ZHIVAGO.LIVE</small>
                                        </div>
                                        <!-- Post actions -->
                                        <!-- /partials/pages/feed/buttons/feed-post-actions.html -->
                                        <div class="like-wrapper">
                                            <a href="javascript:void(0);" class="like-button">
                                                <i class="mdi mdi-heart not-liked bouncy"></i>
                                                <i class="mdi mdi-heart is-liked bouncy"></i>
                                                <span class="like-overlay"></span>
                                            </a>
                                        </div>

                                        <div class="fab-wrapper is-share">
                                            <a href="javascript:void(0);" class="small-fab share-fab modal-trigger"
                                                data-modal="share-modal">
                                                <i data-feather="link-2"></i>
                                            </a>
                                        </div>

                                        <div class="fab-wrapper is-comment">
                                            <a href="javascript:void(0);" class="small-fab">
                                                <i data-feather="message-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post body -->

                                <!-- Post footer -->
                                <div class="card-footer">
                                    <!-- Followers -->
                                    <div class="likers-group">
                                        <img src="" data-demo-src="assets/img/avatars/daniel.jpg"
                                            data-user-popover="3" alt="">
                                        <img src="" data-demo-src="assets/img/avatars/elise.jpg"
                                            data-user-popover="6" alt="">
                                    </div>
                                    <div class="likers-text">
                                        <p>
                                            <a href="#">Daniel</a> and
                                            <a href="#">Elise</a>
                                        </p>
                                        <p>liked this</p>
                                    </div>
                                    <!-- Post statistics -->
                                    <div class="social-count">
                                        <div class="likes-count">
                                            <i data-feather="heart"></i>
                                            <span>2</span>
                                        </div>
                                        <div class="shares-count">
                                            <i data-feather="link-2"></i>
                                            <span>0</span>
                                        </div>
                                        <div class="comments-count">
                                            <i data-feather="message-circle"></i>
                                            <span>2</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post footer -->
                            </div>
                            <!-- /Main wrap -->

                            <!-- Post #2 comments -->
                            <div class="comments-wrap is-hidden">
                                <!-- Header -->
                                <div class="comments-heading">
                                    <h4>Comments
                                        <small>(2)</small>
                                    </h4>
                                    <div class="close-comments">
                                        <i data-feather="x"></i>
                                    </div>
                                </div>
                                <!-- /Header -->

                                <!-- Comments body -->
                                <div class="comments-body has-slimscroll">

                                    <!-- Comment -->
                                    <div class="media is-comment">
                                        <!-- User image -->
                                        <div class="media-left">
                                            <div class="image">
                                                <img src="" data-demo-src="assets/img/avatars/elise.jpg"
                                                    data-user-popover="6" alt="">
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="media-content">
                                            <a href="#">Elise Walker</a>
                                            <span class="time">2 days ago</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempo incididunt ut labore et
                                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                                ullamco laboris consequat.</p>
                                            <!-- Comment actions -->
                                            <div class="controls">
                                                <div class="like-count">
                                                    <i data-feather="thumbs-up"></i>
                                                    <span>1</span>
                                                </div>
                                                <div class="reply">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src=""
                                                            data-demo-src="assets/img/avatars/daniel.jpg"
                                                            data-user-popover="3" alt="">
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">Daniel Wellington</a>
                                                    <span class="time">2 days ago</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo incididunt ut labore et
                                                        dolore magna aliqua.</p>
                                                    <!-- Comment actions -->
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <i data-feather="thumbs-up"></i>
                                                            <span>0</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <i data-feather="more-vertical"></i>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="x"></i>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="flag"></i>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->

                                        </div>
                                        <!-- Right side dropdown -->
                                        <div class="media-right">
                                            <!-- /partials/pages/feed/dropdowns/comment-dropdown.html -->
                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                <div>
                                                    <div class="button">
                                                        <i data-feather="more-vertical"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a class="dropdown-item">
                                                            <div class="media">
                                                                <i data-feather="x"></i>
                                                                <div class="media-content">
                                                                    <h3>Hide</h3>
                                                                    <small>Hide this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item">
                                                            <div class="media">
                                                                <i data-feather="flag"></i>
                                                                <div class="media-content">
                                                                    <h3>Report</h3>
                                                                    <small>Report this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Comment -->

                                </div>
                                <!-- /Comments body -->

                                <!-- Comments footer -->
                                <div class="card-footer">
                                    <!-- User image -->
                                    <div class="media post-comment has-emojis">
                                        <!-- Textarea -->
                                        <div class="media-content">
                                            <div class="field">
                                                <p class="control">
                                                    <textarea class="textarea comment-textarea" rows="5" placeholder="Write a comment..."></textarea>
                                                </p>
                                            </div>
                                            <!-- Additional actions -->
                                            <div class="actions">
                                                <div class="image is-32x32">
                                                    <img class="is-rounded" src=""
                                                        data-demo-src="assets/img/avatars/jenna.png"
                                                        data-user-popover="0" alt="">
                                                </div>
                                                <div class="toolbar">
                                                    <div class="action is-auto">
                                                        <i data-feather="at-sign"></i>
                                                    </div>
                                                    <div class="action is-emoji">
                                                        <i data-feather="smile"></i>
                                                    </div>
                                                    <div class="action is-upload">
                                                        <i data-feather="camera"></i>
                                                        <input type="file">
                                                    </div>
                                                    <a class="button is-solid primary-button raised">Post Comment</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Comments footer -->
                            </div>
                            <!-- /Post #2 comments -->
                        </div> --}}
                        <!-- /POST #2 -->
                        <!-- Post 3 -->
                        <!-- /partials/pages/feed/posts/feed-post3.html -->
                        <!-- POST #3 -->
                        {{-- <div class="card is-post">
                            <!-- Main wrap -->
                            <div class="content-wrap">
                                <!-- Header -->
                                <div class="card-heading">
                                    <div class="user-block">
                                        <div class="image">
                                            <img src="" data-demo-src="assets/img/avatars/elise.jpg"
                                                data-user-popover="6" alt="">
                                        </div>
                                        <div class="user-info">
                                            <a href="#">Elise Walker</a>
                                            <span class="time">July 19 2022, 19:42pm</span>
                                        </div>
                                    </div>
                                    <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->
                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                        <div>
                                            <div class="button">
                                                <i data-feather="more-vertical"></i>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" role="menu">
                                            <div class="dropdown-content">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="bookmark"></i>
                                                        <div class="media-content">
                                                            <h3>Bookmark</h3>
                                                            <small>Add this post to your bookmarks.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="bell"></i>
                                                        <div class="media-content">
                                                            <h3>Notify me</h3>
                                                            <small>Send me the updates.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="dropdown-divider">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="flag"></i>
                                                        <div class="media-content">
                                                            <h3>Flag</h3>
                                                            <small>In case of inappropriate content.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Header -->

                                <!-- Post body -->
                                <div class="card-body">
                                    <!-- Post body text -->
                                    <div class="post-text">
                                        <p>New pictures from my photoshooting album. Can't wait for the new ones to show up
                                            here! Stay Tunned!!!
                                            <a href="#">Zhivago</a>
                                        <p>
                                    </div>
                                    <!-- Featured image -->
                                    <div class="post-image">
                                        <a data-fancybox="post2" data-lightbox-type="comments"
                                            data-thumb="assets/img/demo/unsplash/2.jpg"
                                            href="https://via.placeholder.com/1600x900"
                                            data-demo-href="assets/img/demo/unsplash/2.jpg">
                                            <img src="https://ae01.alicdn.com/kf/H987d7b620a0f4e77a6719c6b62fcfdbfS.jpg"
                                                data-demo-src="assets/img/demo/unsplash/2.jpg" alt="">
                                        </a>
                                        <!-- Post actions -->
                                        <!-- /partials/pages/feed/buttons/feed-post-actions.html -->
                                        <div class="like-wrapper">
                                            <a href="javascript:void(0);" class="like-button">
                                                <i class="mdi mdi-heart not-liked bouncy"></i>
                                                <i class="mdi mdi-heart is-liked bouncy"></i>
                                                <span class="like-overlay"></span>
                                            </a>
                                        </div>

                                        <div class="fab-wrapper is-share">
                                            <a href="javascript:void(0);" class="small-fab share-fab modal-trigger"
                                                data-modal="share-modal">
                                                <i data-feather="link-2"></i>
                                            </a>
                                        </div>

                                        <div class="fab-wrapper is-comment">
                                            <a href="javascript:void(0);" class="small-fab">
                                                <i data-feather="message-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post body -->

                                <!-- Post footer -->
                                <div class="card-footer">
                                    <!-- Followers -->
                                    <div class="likers-group">
                                        <img src="https://thechive.com/wp-content/uploads/2020/04/chivettteee123485.jpg?attachment_cache_bust=3742958&quality=85&strip=info&w=400"
                                            data-demo-src="assets/img/avatars/gaelle.jpeg" data-user-popover="11"
                                            alt="">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgtF_tXSzqYRbB1UEijKPB-7RcibKbZ3XClQ&usqp=CAU"
                                            data-demo-src="assets/img/avatars/edward.jpeg" data-user-popover="5"
                                            alt="">
                                        <img src="data:image/jpeg;base64,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"
                                            data-demo-src="assets/img/avatars/nelly.png" data-user-popover="9"
                                            alt="">
                                    </div>
                                    <div class="likers-text">
                                        <p>
                                            <a href="#">Gaelle</a>,
                                            <a href="#">Edma</a>
                                        </p>
                                        <p>and 1 more liked this</p>
                                    </div>
                                    <!-- Post statistics -->
                                    <div class="social-count">
                                        <div class="likes-count">
                                            <i data-feather="heart"></i>
                                            <span>3</span>
                                        </div>
                                        <div class="shares-count">
                                            <i data-feather="link-2"></i>
                                            <span>0</span>
                                        </div>
                                        <div class="comments-count">
                                            <i data-feather="message-circle"></i>
                                            <span>5</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post footer -->
                            </div>
                            <!-- /Main wrap -->

                            <!-- Post #3 comments -->
                            <div class="comments-wrap is-hidden">
                                <!-- Header -->
                                <div class="comments-heading">
                                    <h4>Comments
                                        <small>(5)</small>
                                    </h4>
                                    <div class="close-comments">
                                        <i data-feather="x"></i>
                                    </div>
                                </div>
                                <!-- Header -->

                                <!-- Comments body -->
                                <div class="comments-body has-slimscroll">

                                    <!-- Comment -->
                                    <div class="media is-comment">
                                        <!-- User image -->
                                        <div class="media-left">
                                            <div class="image">
                                                <img src="" data-demo-src="assets/img/avatars/gaelle.jpeg"
                                                    data-user-popover="11" alt="">
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="media-content">
                                            <a href="#">Gaelle Morris</a>
                                            <span class="time">2 days ago</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempo incididunt ut labore et
                                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                                ullamco laboris consequat.</p>
                                            <!-- Comment actions -->
                                            <div class="controls">
                                                <div class="like-count">
                                                    <i data-feather="thumbs-up"></i>
                                                    <span>3</span>
                                                </div>
                                                <div class="reply">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src="" data-demo-src="assets/img/avatars/elise.jpg"
                                                            data-user-popover="6" alt="">
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">Elise Walker</a>
                                                    <span class="time">2 days ago</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo incididunt ut labore et
                                                        dolore magna aliqua.</p>
                                                    <!-- Comment actions -->
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <i data-feather="thumbs-up"></i>
                                                            <span>1</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <!-- /partials/pages/feed/dropdowns/comment-dropdown.html -->
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <i data-feather="more-vertical"></i>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="x"></i>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="flag"></i>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src="" data-demo-src="assets/img/avatars/rolf.jpg"
                                                            data-user-popover="13" alt="">
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">Rolf Krupp</a>
                                                    <span class="time">2 days ago</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo incididunt.</p>
                                                    <!-- Comment actions -->
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <i data-feather="thumbs-up"></i>
                                                            <span>1</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <i data-feather="more-vertical"></i>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="x"></i>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="flag"></i>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src="" data-demo-src="assets/img/avatars/elise.jpg"
                                                            data-user-popover="6" alt="">
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">Elise Walker</a>
                                                    <span class="time">2 days ago</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo incididunt ut labore et
                                                        dolore magna aliqua.</p>
                                                    <!-- Comment actions -->
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <i data-feather="thumbs-up"></i>
                                                            <span>1</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <i data-feather="more-vertical"></i>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="x"></i>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="flag"></i>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->

                                        </div>
                                        <!-- Right side dropdown -->
                                        <div class="media-right">
                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                <div>
                                                    <div class="button">
                                                        <i data-feather="more-vertical"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a class="dropdown-item">
                                                            <div class="media">
                                                                <i data-feather="x"></i>
                                                                <div class="media-content">
                                                                    <h3>Hide</h3>
                                                                    <small>Hide this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item">
                                                            <div class="media">
                                                                <i data-feather="flag"></i>
                                                                <div class="media-content">
                                                                    <h3>Report</h3>
                                                                    <small>Report this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Comment -->

                                    <!-- Comment -->
                                    <div class="media is-comment">
                                        <!-- User image -->
                                        <div class="media-left">
                                            <div class="image">
                                                <img src="" data-demo-src="assets/img/avatars/nelly.png"
                                                    data-user-popover="9" alt="">
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="media-content">
                                            <a href="#">Nelly Schwartz</a>
                                            <span class="time">2 days ago</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempo incididunt ut labore et
                                                dolore magna aliqua.</p>
                                            <!-- Comment actions -->
                                            <div class="controls">
                                                <div class="like-count">
                                                    <i data-feather="thumbs-up"></i>
                                                    <span>1</span>
                                                </div>
                                                <div class="reply">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Right side dropdown -->
                                        <div class="media-right">
                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                <div>
                                                    <div class="button">
                                                        <i data-feather="more-vertical"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a class="dropdown-item">
                                                            <div class="media">
                                                                <i data-feather="x"></i>
                                                                <div class="media-content">
                                                                    <h3>Hide</h3>
                                                                    <small>Hide this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item">
                                                            <div class="media">
                                                                <i data-feather="flag"></i>
                                                                <div class="media-content">
                                                                    <h3>Report</h3>
                                                                    <small>Report this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Comment -->
                                </div>
                                <!-- Comments body -->

                                <!-- Comments footer -->
                                <div class="card-footer">
                                    <div class="media post-comment has-emojis">
                                        <!-- Textarea -->
                                        <div class="media-content">
                                            <div class="field">
                                                <p class="control">
                                                    <textarea class="textarea comment-textarea" rows="5" placeholder="Write a comment..."></textarea>
                                                </p>
                                            </div>
                                            <!-- Additional actions -->
                                            <div class="actions">
                                                <div class="image is-32x32">
                                                    <img class="is-rounded" src=""
                                                        data-demo-src="assets/img/avatars/jenna.png"
                                                        data-user-popover="0" alt="">
                                                </div>
                                                <div class="toolbar">
                                                    <div class="action is-auto">
                                                        <i data-feather="at-sign"></i>
                                                    </div>
                                                    <div class="action is-emoji">
                                                        <i data-feather="smile"></i>
                                                    </div>
                                                    <div class="action is-upload">
                                                        <i data-feather="camera"></i>
                                                        <input type="file">
                                                    </div>
                                                    <a class="button is-solid primary-button raised">Post Comment</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Comments footer -->
                            </div>
                            <!-- /Post #3 Comments -->
                        </div> --}}
                        <!-- /POST #3 -->
                        <!-- Post 4 -->
                        <!-- /partials/pages/feed/posts/feed-post4.html -->
                        <!-- POST #4 -->
                        {{-- <div class="card is-post">
                            <!-- Main wrap -->
                            <div class="content-wrap">
                                <!-- Header -->
                                <div class="card-heading">
                                    <div class="user-block">
                                        <div class="image">
                                            <img src="https://pbs.twimg.com/profile_images/1341788058031689730/8ZwRkbcf_400x400.jpg"
                                                data-demo-src="assets/img/avatars/stella.jpg" data-user-popover="2"
                                                alt="">
                                        </div>
                                        <div class="user-info">
                                            <a href="#">Stella Bergmann</a>
                                            <span class="time">August 1 2022, 15:13pm</span>
                                        </div>
                                    </div>
                                    <!-- Right side dropdown -->
                                    <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->
                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                        <div>
                                            <div class="button">
                                                <i data-feather="more-vertical"></i>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" role="menu">
                                            <div class="dropdown-content">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="bookmark"></i>
                                                        <div class="media-content">
                                                            <h3>Bookmark</h3>
                                                            <small>Add this post to your bookmarks.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="bell"></i>
                                                        <div class="media-content">
                                                            <h3>Notify me</h3>
                                                            <small>Send me the updates.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="dropdown-divider">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="flag"></i>
                                                        <div class="media-content">
                                                            <h3>Flag</h3>
                                                            <small>In case of inappropriate content.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Header -->

                                <!-- Post body -->
                                <div class="card-body">
                                    <!-- Post body text -->
                                    <div class="post-text">
                                        <p>Hello everyone ! Enjoy this photoshooting from my last session with #Zhivago
                                            collection and staff !
                                        <p>
                                    </div>
                                    <!-- Featured image -->
                                    <div class="post-image">
                                        <!-- CSS masonry wrap -->
                                        <div class="masonry-grid">
                                            <!-- Left column -->
                                            <div class="masonry-column-left">
                                                <a data-fancybox="post3" data-lightbox-type="comments"
                                                    data-thumb="assets/img/demo/unsplash/3.jpg"
                                                    href="https://via.placeholder.com/1600x900"
                                                    data-demo-href="assets/img/demo/unsplash/3.jpg">
                                                    <img src="https://imagez.tmz.com/image/ce/o/2021/12/15/ce93349cd36744deb6aca66baa9d066a_lg.png"
                                                        data-demo-src="assets/img/demo/unsplash/3.jpg" alt="">
                                                </a>
                                                <a data-fancybox="post3" data-lightbox-type="comments"
                                                    data-thumb="assets/img/demo/unsplash/4.jpg"
                                                    href="https://via.placeholder.com/1600x900"
                                                    data-demo-href="assets/img/demo/unsplash/4.jpg">
                                                    <img src="https://i.pinimg.com/originals/34/9d/8d/349d8df77384c4438992169d5e2ba6d8.jpg"
                                                        data-demo-src="assets/img/demo/unsplash/4.jpg" alt="">
                                                </a>
                                            </div>
                                            <!-- Right column -->
                                            <div class="masonry-column-right">
                                                <a data-fancybox="post3" data-lightbox-type="comments"
                                                    data-thumb="assets/img/demo/unsplash/5.jpg"
                                                    href="https://via.placeholder.com/1600x900"
                                                    data-demo-href="assets/img/demo/unsplash/5.jpg">
                                                    <img src="https://pbs.twimg.com/media/DZKhHyWV4AEYs6K.jpg"
                                                        data-demo-src="assets/img/demo/unsplash/5.jpg" alt="">
                                                </a>
                                                <a data-fancybox="post3" data-lightbox-type="comments"
                                                    data-thumb="assets/img/demo/unsplash/6.jpg"
                                                    href="https://via.placeholder.com/1600x900"
                                                    data-demo-href="assets/img/demo/unsplash/6.jpg">
                                                    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/eae6f3e7-f15a-498a-b299-eebce80644ff/dc8tyqn-41a2e577-181e-4cd5-8aa3-538893a5691d.jpg/v1/fill/w_1024,h_1280,q_75,strp/ana_cheri_by_darosigu_dc8tyqn-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTI4MCIsInBhdGgiOiJcL2ZcL2VhZTZmM2U3LWYxNWEtNDk4YS1iMjk5LWVlYmNlODA2NDRmZlwvZGM4dHlxbi00MWEyZTU3Ny0xODFlLTRjZDUtOGFhMy01Mzg4OTNhNTY5MWQuanBnIiwid2lkdGgiOiI8PTEwMjQifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.yxSd1_zOgnSVnaChH-zbKuUJ065B9CHqygYtdjAoZPo"
                                                        data-demo-src="assets/img/demo/unsplash/6.jpg" alt="">
                                                </a>
                                                <a data-fancybox="post3" data-lightbox-type="comments"
                                                    data-thumb="assets/img/demo/unsplash/7.jpg"
                                                    href="https://via.placeholder.com/1600x900"
                                                    data-demo-href="assets/img/demo/unsplash/7.jpg">
                                                    <img src="https://jsc-dorian-gray.com/wp-content/uploads/2019/11/Ana-Cheri_2x3_021119_11.jpg"
                                                        data-demo-src="assets/img/demo/unsplash/7.jpg" alt="">
                                                </a>
                                            </div>
                                            <!-- Post actions -->
                                            <!-- /partials/pages/feed/buttons/feed-post-actions.html -->
                                            <div class="like-wrapper">
                                                <a href="javascript:void(0);" class="like-button">
                                                    <i class="mdi mdi-heart not-liked bouncy"></i>
                                                    <i class="mdi mdi-heart is-liked bouncy"></i>
                                                    <span class="like-overlay"></span>
                                                </a>
                                            </div>

                                            <div class="fab-wrapper is-share">
                                                <a href="javascript:void(0);" class="small-fab share-fab modal-trigger"
                                                    data-modal="share-modal">
                                                    <i data-feather="link-2"></i>
                                                </a>
                                            </div>

                                            <div class="fab-wrapper is-comment">
                                                <a href="javascript:void(0);" class="small-fab">
                                                    <i data-feather="message-circle"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post body -->

                                <!-- Post footer -->
                                <div class="card-footer">
                                    <!-- Followers -->
                                    <div class="likers-group">
                                        <img src="https://i.pinimg.com/474x/63/61/3f/63613fd474cb9fb4b54e50601e0a428a.jpg"
                                            data-demo-src="assets/img/avatars/rolf.jpg" data-user-popover="13"
                                            alt="">
                                        <img src="https://pbs.twimg.com/profile_images/1276774771779239936/0WHeCik6_400x400.jpg"
                                            data-demo-src="assets/img/avatars/mike.jpg" data-user-popover="12"
                                            alt="">
                                        <img src="https://i.pinimg.com/474x/a0/70/7b/a0707b400afb4c36064a6f66f40c598a.jpg"
                                            data-demo-src="assets/img/avatars/daniel.jpg" data-user-popover="3"
                                            alt="">
                                        <img src="https://image.made-in-china.com/155f0j00DoPzYURIIacw/Plus-Size-Hot-Girl-Sexy-Bikini-Ladies-Underwear-Set-Woman-Swimwear-Bikini.jpg"
                                            data-demo-src="assets/img/avatars/elise.jpg" data-user-popover="6"
                                            alt="">
                                        <img src="https://image.made-in-china.com/155f0j00gBbiCoazZsuO/SJ-BFD1032-Wholesale-Hot-Girls-2022-Custom-Sexy-Bikini-Women-Bathing-Suits-Cover-UPS-Beachwear-Two-Pieces-Swimwear.jpg"
                                            data-demo-src="assets/img/avatars/david.jpg" data-user-popover="4"
                                            alt="">
                                    </div>
                                    <div class="likers-text">
                                        <p>
                                            <a href="#">Gaelle</a>,
                                            <a href="#">Roxi</a>
                                        </p>
                                        <p>and 31 more liked this</p>
                                    </div>
                                    <!-- Post statistics -->
                                    <div class="social-count">
                                        <div class="likes-count">
                                            <i data-feather="heart"></i>
                                            <span>33</span>
                                        </div>
                                        <div class="shares-count">
                                            <i data-feather="link-2"></i>
                                            <span>1</span>
                                        </div>
                                        <div class="comments-count">
                                            <i data-feather="message-circle"></i>
                                            <span>9</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post footer -->
                            </div>
                            <!-- Main wrap -->

                            <!-- Post #4 comments -->
                            <div class="comments-wrap is-hidden">
                                <!-- Header -->
                                <div class="comments-heading">
                                    <h4>Comments
                                        <small>(9)</small>
                                    </h4>
                                    <div class="close-comments">
                                        <i data-feather="x"></i>
                                    </div>
                                </div>
                                <!-- /Header -->

                                <!-- Comments body -->
                                <div class="comments-body has-slimscroll">

                                    <!-- Comment -->
                                    <div class="media is-comment">
                                        <!-- User image -->
                                        <div class="media-left">
                                            <div class="image">
                                                <img src="" data-demo-src="assets/img/avatars/jenna.png"
                                                    data-user-popover="0" alt="">
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="media-content">
                                            <a href="#">Jenna Davis</a>
                                            <span class="time">30 minutes ago</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempo incididunt ut labore et
                                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                                ullamco laboris consequat.</p>
                                            <!-- Comment actions -->
                                            <div class="controls">
                                                <div class="like-count">
                                                    <i data-feather="thumbs-up"></i>
                                                    <span>0</span>
                                                </div>
                                                <div class="reply">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src="" data-demo-src="assets/img/avatars/lana.jpeg"
                                                            data-user-popover="10" alt="">
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">Lana Henrikssen</a>
                                                    <span class="time">15 minutes ago</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo.</p>
                                                    <!-- Comment actions -->
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <i data-feather="thumbs-up"></i>
                                                            <span>2</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <!-- /partials/pages/feed/dropdowns/comment-dropdown.html -->
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <i data-feather="more-vertical"></i>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="x"></i>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="flag"></i>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src="" data-demo-src="assets/img/avatars/david.jpg"
                                                            data-user-popover="4" alt="">
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">David Kim</a>
                                                    <span class="time">12 minutes ago</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo incididunt ut labore et
                                                        dolore magna aliqua.</p>
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <i data-feather="thumbs-up"></i>
                                                            <span>5</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <i data-feather="more-vertical"></i>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="x"></i>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="flag"></i>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src="" data-demo-src="assets/img/avatars/mike.jpg"
                                                            data-user-popover="12" alt="">
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">Mike Lasalle</a>
                                                    <span class="time">8 minutes ago</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo incididunt.</p>
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <i data-feather="thumbs-up"></i>
                                                            <span>5</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <i data-feather="more-vertical"></i>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="x"></i>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="flag"></i>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src=""
                                                            data-demo-src="assets/img/avatars/stella.jpg"
                                                            data-user-popover="2" alt="">
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">Stella Bergmann</a>
                                                    <span class="time">Just now</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo incididunt.</p>
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <i data-feather="thumbs-up"></i>
                                                            <span>2</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <i data-feather="more-vertical"></i>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="x"></i>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="flag"></i>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->

                                        </div>
                                        <!-- Right side dropdown -->
                                        <div class="media-right">
                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                <div>
                                                    <div class="button">
                                                        <i data-feather="more-vertical"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a class="dropdown-item">
                                                            <div class="media">
                                                                <i data-feather="x"></i>
                                                                <div class="media-content">
                                                                    <h3>Hide</h3>
                                                                    <small>Hide this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item">
                                                            <div class="media">
                                                                <i data-feather="flag"></i>
                                                                <div class="media-content">
                                                                    <h3>Report</h3>
                                                                    <small>Report this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Comment -->

                                    <!-- Comment -->
                                    <div class="media is-comment">
                                        <!-- User image -->
                                        <div class="media-left">
                                            <div class="image">
                                                <img src="" data-demo-src="assets/img/avatars/daniel.jpg"
                                                    data-user-popover="3" alt="">
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="media-content">
                                            <a href="#">Daniel Wellington</a>
                                            <span class="time">5 hours ago</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempo incididunt ut labore
                                                et dolore magna aliqua.</p>
                                            <!-- Comment actions -->
                                            <div class="controls">
                                                <div class="like-count">
                                                    <i data-feather="thumbs-up"></i>
                                                    <span>1</span>
                                                </div>
                                                <div class="reply">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Right side dropdown -->
                                        <div class="media-right">
                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                <div>
                                                    <div class="button">
                                                        <i data-feather="more-vertical"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a class="dropdown-item">
                                                            <div class="media">
                                                                <i data-feather="x"></i>
                                                                <div class="media-content">
                                                                    <h3>Hide</h3>
                                                                    <small>Hide this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item">
                                                            <div class="media">
                                                                <i data-feather="flag"></i>
                                                                <div class="media-content">
                                                                    <h3>Report</h3>
                                                                    <small>Report this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Comment -->

                                    <!-- Comment -->
                                    <div class="media is-comment">
                                        <!-- User image -->
                                        <div class="media-left">
                                            <div class="image">
                                                <img src="" data-demo-src="assets/img/avatars/bobby.jpg"
                                                    data-user-popover="8" alt="">
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="media-content">
                                            <a href="#">Bobby Brown</a>
                                            <span class="time">7 hours ago</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempo incididunt ut labore
                                                et dolore magna aliqua.</p>
                                            <!-- Comment actions -->
                                            <div class="controls">
                                                <div class="like-count">
                                                    <i data-feather="thumbs-up"></i>
                                                    <span>1</span>
                                                </div>
                                                <div class="reply">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src=""
                                                            data-demo-src="assets/img/avatars/stella.jpg"
                                                            data-user-popover="2" alt="">
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">Stella Bergmann</a>
                                                    <span class="time">7 hours ago</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo incididunt.</p>
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <i data-feather="thumbs-up"></i>
                                                            <span>2</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <i data-feather="more-vertical"></i>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="x"></i>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="flag"></i>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src="" data-demo-src="assets/img/avatars/lana.jpeg"
                                                            data-user-popover="10" alt="">
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">Lana Henrikssen</a>
                                                    <span class="time">15 minutes ago</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo.</p>
                                                    <!-- Comment actions -->
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <i data-feather="thumbs-up"></i>
                                                            <span>2</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <i data-feather="more-vertical"></i>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="x"></i>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="flag"></i>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->

                                        </div>
                                        <!-- Right side dropdown -->
                                        <div class="media-right">
                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                <div>
                                                    <div class="button">
                                                        <i data-feather="more-vertical"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a class="dropdown-item">
                                                            <div class="media">
                                                                <i data-feather="x"></i>
                                                                <div class="media-content">
                                                                    <h3>Hide</h3>
                                                                    <small>Hide this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item">
                                                            <div class="media">
                                                                <i data-feather="flag"></i>
                                                                <div class="media-content">
                                                                    <h3>Report</h3>
                                                                    <small>Report this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Comment -->

                                </div>
                                <!-- /Comments body -->

                                <!-- Comments footer -->
                                <div class="card-footer">
                                    <div class="media post-comment has-emojis">
                                        <!-- Textarea -->
                                        <div class="media-content">
                                            <div class="field">
                                                <p class="control">
                                                    <textarea class="textarea comment-textarea" rows="5" placeholder="Write a comment..."></textarea>
                                                </p>
                                            </div>
                                            <!-- Additional actions -->
                                            <div class="actions">
                                                <div class="image is-32x32">
                                                    <img class="is-rounded" src=""
                                                        data-demo-src="assets/img/avatars/jenna.png"
                                                        data-user-popover="0" alt="">
                                                </div>
                                                <div class="toolbar">
                                                    <div class="action is-auto">
                                                        <i data-feather="at-sign"></i>
                                                    </div>
                                                    <div class="action is-emoji">
                                                        <i data-feather="smile"></i>
                                                    </div>
                                                    <div class="action is-upload">
                                                        <i data-feather="camera"></i>
                                                        <input type="file">
                                                    </div>
                                                    <a class="button is-solid primary-button raised">Post Comment</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Comments footer -->
                            </div>
                            <!-- /Post #4 comments -->
                        </div> --}}
                        <!-- /POST #4 -->
                        <!-- Post 5 -->
                        <!-- /partials/pages/feed/posts/feed-post5.html -->
                        <!-- POST #5 -->
                        {{-- <div class="card is-post">
                            <!-- Main wrap -->
                            <div class="content-wrap">
                                <!-- Header -->
                                <div class="card-heading">
                                    <!-- User image -->
                                    <div class="user-block">
                                        <div class="image">
                                            <img src="data:image/jpeg;base64,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"
                                                data-demo-src="assets/img/avatars/david.jpg" data-user-popover="4"
                                                alt="">
                                        </div>
                                        <div class="user-info">
                                            <a href="#">Kim Grof</a>
                                            <span class="time">August 02 2022, 03:04pm</span>
                                        </div>
                                    </div>
                                    <!-- Right side dropdown -->
                                    <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->
                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                        <div>
                                            <div class="button">
                                                <i data-feather="more-vertical"></i>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" role="menu">
                                            <div class="dropdown-content">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="bookmark"></i>
                                                        <div class="media-content">
                                                            <h3>Bookmark</h3>
                                                            <small>Add this post to your bookmarks.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="bell"></i>
                                                        <div class="media-content">
                                                            <h3>Notify me</h3>
                                                            <small>Send me the updates.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="dropdown-divider">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="flag"></i>
                                                        <div class="media-content">
                                                            <h3>Flag</h3>
                                                            <small>In case of inappropriate content.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Header -->

                                <!-- Post body -->
                                <div class="card-body">
                                    <!-- Post body text -->
                                    <div class="post-text">
                                        <p>Just discovered this brand new collection on zhivago's underwear store and I
                                            can't get over with it! So fucking awesome , I love it!!!!
                                            <a href="#">#zhivago #underwear</a>
                                        </p>
                                    </div>
                                    <!-- Featured link -->
                                    <div class="post-link">
                                        <!-- link image -->
                                        <div class="link-image">
                                            <img src="https://look.com.ua/pic/201907/1920x1200/look.com.ua-349980.jpg"
                                                data-demo-src="assets/img/demo/video/bulma2.png" alt="">
                                        </div>
                                        <!-- Link content -->
                                        <div class="link-content">
                                            <h4>
                                                <a href="#">ZHIVAGO PREMIUM CONTENT</a>
                                            </h4>
                                            <p>In order to view this content you will need to upgrade on ZHIVAGO PREMIUM
                                                CONTENT</p>
                                            <small>ZHIVAGO.LIVE</small>
                                        </div>
                                        <!-- Post actions -->
                                        <!-- /partials/pages/feed/buttons/feed-post-actions.html -->
                                        <div class="like-wrapper">
                                            <a href="javascript:void(0);" class="like-button">
                                                <i class="mdi mdi-heart not-liked bouncy"></i>
                                                <i class="mdi mdi-heart is-liked bouncy"></i>
                                                <span class="like-overlay"></span>
                                            </a>
                                        </div>

                                        <div class="fab-wrapper is-share">
                                            <a href="javascript:void(0);" class="small-fab share-fab modal-trigger"
                                                data-modal="share-modal">
                                                <i data-feather="link-2"></i>
                                            </a>
                                        </div>

                                        <div class="fab-wrapper is-comment">
                                            <a href="javascript:void(0);" class="small-fab">
                                                <i data-feather="message-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post body -->

                                <!-- Post footer -->
                                <div class="card-footer">
                                    <!-- Followers -->
                                    <div class="likers-group">
                                        <img src="https://image.made-in-china.com/155f0j00gBbiCoazZsuO/SJ-BFD1032-Wholesale-Hot-Girls-2022-Custom-Sexy-Bikini-Women-Bathing-Suits-Cover-UPS-Beachwear-Two-Pieces-Swimwear.jpg"
                                            data-demo-src="assets/img/avatars/lana.jpeg" data-user-popover="10"
                                            alt="">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLhXbD5rmOeAISJROp2u61iTd0LkC4BbNljg&usqp=CAU"
                                            data-demo-src="assets/img/avatars/mike.jpg" data-user-popover="12"
                                            alt="">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6JPrKUeNl47T-BFW5VWc6ScydZ_SakOtyDg&usqp=CAU"
                                            data-demo-src="assets/img/avatars/gaelle.jpeg" data-user-popover="11"
                                            alt="">
                                    </div>
                                    <div class="likers-text">
                                        <p>
                                            <a href="#">Lana</a>,
                                            <a href="#">Mike</a>
                                        </p>
                                        <p>and 1 more liked this</p>
                                    </div>
                                    <!-- Post statistics -->
                                    <div class="social-count">
                                        <div class="likes-count">
                                            <i data-feather="heart"></i>
                                            <span>11</span>
                                        </div>
                                        <div class="shares-count">
                                            <i data-feather="link-2"></i>
                                            <span>3</span>
                                        </div>
                                        <div class="comments-count">
                                            <i data-feather="message-circle"></i>
                                            <span>2</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post footer -->
                            </div>
                            <!-- /Main wrap -->

                            <!-- Post #5 comments -->
                            <div class="comments-wrap is-hidden">
                                <!-- Header -->
                                <div class="comments-heading">
                                    <h4>
                                        Comments
                                        <small>(2)</small>
                                    </h4>
                                    <div class="close-comments">
                                        <i data-feather="x"></i>
                                    </div>
                                </div>
                                <!-- /Header -->

                                <!-- Comments body -->
                                <div class="comments-body has-slimscroll">

                                    <!-- Comment -->
                                    <div class="media is-comment">
                                        <!-- User image -->
                                        <div class="media-left">
                                            <div class="image">
                                                <img src="" data-demo-src="assets/img/avatars/lana.jpeg"
                                                    data-user-popover="10" alt="">
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="media-content">
                                            <a href="#">Lana Henrikssen</a>
                                            <span class="time">2 days ago</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempo incididunt ut labore et
                                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                                ullamco laboris consequat.</p>
                                            <!-- Comment actions -->
                                            <div class="controls">
                                                <div class="like-count">
                                                    <i data-feather="thumbs-up"></i>
                                                    <span>1</span>
                                                </div>
                                                <div class="reply">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>

                                            <!-- Nested Comment -->
                                            <div class="media is-comment">
                                                <!-- User image -->
                                                <div class="media-left">
                                                    <div class="image">
                                                        <img src="" data-demo-src="assets/img/avatars/david.jpg"
                                                            data-user-popover="4" alt="">
                                                    </div>
                                                </div>
                                                <!-- Content -->
                                                <div class="media-content">
                                                    <a href="#">David Kim</a>
                                                    <span class="time">2 days ago</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempo incididunt ut labore et
                                                        dolore magna aliqua.</p>
                                                    <!-- Comment actions -->
                                                    <div class="controls">
                                                        <div class="like-count">
                                                            <i data-feather="thumbs-up"></i>
                                                            <span>0</span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right side dropdown -->
                                                <div class="media-right">
                                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                        <div>
                                                            <div class="button">
                                                                <i data-feather="more-vertical"></i>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu" role="menu">
                                                            <div class="dropdown-content">
                                                                <a class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="x"></i>
                                                                        <div class="media-content">
                                                                            <h3>Hide</h3>
                                                                            <small>Hide this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="#" class="dropdown-item">
                                                                    <div class="media">
                                                                        <i data-feather="flag"></i>
                                                                        <div class="media-content">
                                                                            <h3>Report</h3>
                                                                            <small>Report this comment.</small>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Nested Comment -->

                                        </div>
                                        <!-- Right side dropdown -->
                                        <div class="media-right">
                                            <!-- /partials/pages/feed/dropdowns/comment-dropdown.html -->
                                            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                                <div>
                                                    <div class="button">
                                                        <i data-feather="more-vertical"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown-menu" role="menu">
                                                    <div class="dropdown-content">
                                                        <a class="dropdown-item">
                                                            <div class="media">
                                                                <i data-feather="x"></i>
                                                                <div class="media-content">
                                                                    <h3>Hide</h3>
                                                                    <small>Hide this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="#" class="dropdown-item">
                                                            <div class="media">
                                                                <i data-feather="flag"></i>
                                                                <div class="media-content">
                                                                    <h3>Report</h3>
                                                                    <small>Report this comment.</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Comment -->

                                </div>
                                <!-- Comments body -->

                                <!-- Comments footer -->
                                <div class="card-footer">
                                    <div class="media post-comment has-emojis">
                                        <!-- Textarea -->
                                        <div class="media-content">
                                            <div class="field">
                                                <p class="control">
                                                    <textarea class="textarea comment-textarea" rows="5" placeholder="Write a comment..."></textarea>
                                                </p>
                                            </div>
                                            <!-- Additional actions -->
                                            <div class="actions">
                                                <div class="image is-32x32">
                                                    <img class="is-rounded" src=""
                                                        data-demo-src="assets/img/avatars/jenna.png"
                                                        data-user-popover="0" alt="">
                                                </div>
                                                <div class="toolbar">
                                                    <div class="action is-auto">
                                                        <i data-feather="at-sign"></i>
                                                    </div>
                                                    <div class="action is-emoji">
                                                        <i data-feather="smile"></i>
                                                    </div>
                                                    <div class="action is-upload">
                                                        <i data-feather="camera"></i>
                                                        <input type="file">
                                                    </div>
                                                    <a class="button is-solid primary-button raised">Post Comment</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Comments footer -->
                            </div>
                            <!-- /Post #5 comments -->
                        </div> --}}
                        <!-- /POST #5 -->
                        <!-- Post 6 -->
                        <!-- /partials/pages/feed/posts/feed-post6.html -->
                        <!-- POST #6 -->
                        <div class="card is-post is-simple">
                            <!-- Main wrap -->
                            <div class="content-wrap">
                                <!-- Header -->
                                <div class="card-heading">
                                    <!-- User image -->
                                    <div class="user-block">
                                        <div class="image">
                                            <img src="https://img.pixers.pics/pho(s3:400/FO/66/52/32/32/400_FO66523232_4d838b2197d22400d86bfd24ea621d04.jpg,400,400,jpg)/bath-mats-sexy-blonde.jpg.jpg"
                                                data-demo-src="assets/img/avatars/bobby.jpg" data-user-popover="8"
                                                alt="">
                                        </div>
                                        <div class="user-info">
                                            <a href="#">Alexa Nidle</a>
                                            <span class="time">Sep 27 2022, 11:14am</span>
                                        </div>
                                    </div>
                                    <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->
                                    <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                                        <div>
                                            <div class="button">
                                                <i data-feather="more-vertical"></i>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" role="menu">
                                            <div class="dropdown-content">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="bookmark"></i>
                                                        <div class="media-content">
                                                            <h3>Bookmark</h3>
                                                            <small>Add this post to your bookmarks.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="bell"></i>
                                                        <div class="media-content">
                                                            <h3>Notify me</h3>
                                                            <small>Send me the updates.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="dropdown-divider">
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="flag"></i>
                                                        <div class="media-content">
                                                            <h3>Flag</h3>
                                                            <small>In case of inappropriate content.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Header -->

                                <!-- Post body -->
                                <div class="card-body">
                                    <!-- Post body text -->
                                    <div class="post-text">
                                        <p>Today, when i was walking back home from my job, I figured that I should start
                                            working on ZHIVAGO platform with all I can, I literally can make better money
                                            than my 9-5 and at least I can start doing what I love to do without even going
                                            out! Crazy what we are able to do now especially with zhivago , soo stay tunned
                                            everyone!
                                            <a href="#">#zhivago #socialmedia</a>
                                        <p>
                                    </div>
                                    <!-- Post actions -->
                                    <div class="post-actions">
                                        <!-- /partials/pages/feed/buttons/feed-post-actions.html -->
                                        <div class="like-wrapper">
                                            <a href="javascript:void(0);" class="like-button">
                                                <i class="mdi mdi-heart not-liked bouncy"></i>
                                                <i class="mdi mdi-heart is-liked bouncy"></i>
                                                <span class="like-overlay"></span>
                                            </a>
                                        </div>

                                        <div class="fab-wrapper is-share">
                                            <a href="javascript:void(0);" class="small-fab share-fab modal-trigger"
                                                data-modal="share-modal">
                                                <i data-feather="link-2"></i>
                                            </a>
                                        </div>

                                        <div class="fab-wrapper is-comment">
                                            <a href="javascript:void(0);" class="small-fab">
                                                <i data-feather="message-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post body -->

                                <!-- Post footer -->
                                <div class="card-footer">
                                    <!-- Followers -->
                                    <div class="likers-group">
                                        <img src="https://image.made-in-china.com/155f0j00gBbiCoazZsuO/SJ-BFD1032-Wholesale-Hot-Girls-2022-Custom-Sexy-Bikini-Women-Bathing-Suits-Cover-UPS-Beachwear-Two-Pieces-Swimwear.jpg"
                                            data-demo-src="assets/img/avatars/daniel.jpg" data-user-popover="3"
                                            alt="">
                                        <img src="https://image.made-in-china.com/155f0j00DoPzYURIIacw/Plus-Size-Hot-Girl-Sexy-Bikini-Ladies-Underwear-Set-Woman-Swimwear-Bikini.jpg"
                                            data-demo-src="assets/img/avatars/elise.jpg" data-user-popover="6"
                                            alt="">
                                    </div>
                                    <div class="likers-text">
                                        <p>
                                            <a href="#">Daniela</a> and
                                            <a href="#">Elise</a>
                                        </p>
                                        <p>liked this</p>
                                    </div>
                                    <!-- Post statistics -->
                                    <div class="social-count">
                                        <div class="likes-count">
                                            <i data-feather="heart"></i>
                                            <span>2</span>
                                        </div>
                                        <div class="shares-count">
                                            <i data-feather="link-2"></i>
                                            <span>0</span>
                                        </div>
                                        <div class="comments-count">
                                            <i data-feather="message-circle"></i>
                                            <span>0</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Post footer -->
                            </div>
                            <!-- /Main wrap -->

                            <!-- Post #6 comments -->
                            <div class="comments-wrap is-hidden">
                                <!-- Header -->
                                <div class="comments-heading">
                                    <h4>
                                        Comments
                                        <small>(0)</small>
                                    </h4>
                                    <div class="close-comments">
                                        <i data-feather="x"></i>
                                    </div>
                                </div>
                                <!-- /Header -->

                                <!-- Comments body -->
                                <div class="comments-body has-slimscroll">
                                    <div class="comments-placeholder">
                                        <img src="assets/img/icons/feed/bubble.svg" alt="">
                                        <h3>Nothing in here yet</h3>
                                        <p>Be the first to post a comment.</p>
                                    </div>
                                </div>
                                <!-- /Comments body -->

                                <!-- Comments footer -->
                                <div class="card-footer">
                                    <div class="media post-comment has-emojis">
                                        <!-- Textarea -->
                                        <div class="media-content">
                                            <div class="field">
                                                <p class="control">
                                                    <textarea class="textarea comment-textarea" rows="5" placeholder="Write a comment..."></textarea>
                                                </p>
                                            </div>
                                            <!-- Additional actions -->
                                            <div class="actions">
                                                <div class="image is-32x32">
                                                    <img class="is-rounded" src=""
                                                        data-demo-src="assets/img/avatars/jenna.png"
                                                        data-user-popover="0" alt="">
                                                </div>
                                                <div class="toolbar">
                                                    <div class="action is-auto">
                                                        <i data-feather="at-sign"></i>
                                                    </div>
                                                    <div class="action is-emoji">
                                                        <i data-feather="smile"></i>
                                                    </div>
                                                    <div class="action is-upload">
                                                        <i data-feather="camera"></i>
                                                        <input type="file">
                                                    </div>
                                                    <a class="button is-solid primary-button raised">Post Comment</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Comments footer -->
                            </div>
                            <!-- /Post #6 comments -->
                        </div>
                        <!-- /POST #6 -->
                        <!-- Load more posts -->
                        <div class=" load-more-wrap has-text-centered">
                            <a href="#" class="load-more-button">Load More</a>
                        </div>
                        <!-- /Load more posts -->

                    </div>
                    <!-- /Middle column -->

                    <!-- Right side column -->
                    <div class="column is-3">

                        <!-- Stories widget -->
                        <!-- /partials/widgets/stories-widget.html -->
                        <div class="card">
                            <div class="card-heading is-bordered">
                                <h4>Stories</h4>
                                <div class="dropdown is-spaced is-neutral is-right dropdown-trigger">
                                    <div>
                                        <div class="button">
                                            <i data-feather="more-vertical"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="tv"></i>
                                                    <div class="media-content">
                                                        <h3>Browse stories</h3>
                                                        <small>View all recent stories.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="settings"></i>
                                                    <div class="media-content">
                                                        <h3>Settings</h3>
                                                        <small>Access widget settings.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="trash-2"></i>
                                                    <div class="media-content">
                                                        <h3>Remove</h3>
                                                        <small>Removes this widget from your feed.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body no-padding">
                                <!-- Story block -->
                                <div class="story-block">
                                    <a id="add-story-button" href="#" class="add-story">
                                        <i data-feather="plus"></i>
                                    </a>
                                    <div class="story-meta">
                                        <span>Add a new Story</span>
                                        <span>Share an image, a video or some text</span>
                                    </div>
                                </div>
                                <!-- Story block -->
                                {{-- <div class="story-block">
                                    <div class="img-wrapper">
                                        <img src=""
                                            data-demo-src="assets/img/avatars/dan.jpg" data-user-popover="1"
                                            alt="">
                                    </div>
                                    <div class="story-meta">
                                        <span>Sofia Sof</span>
                                        <span>1 hour ago</span>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <!-- Birthday widget -->
                        <!-- /partials/widgets/birthday-widget.html -->
                        {{-- <div class="card is-birthday-card has-background-image"
                            data-background="assets/img/illustrations/cards/birthday-bg.svg">
                            <div class="card-heading">
                                <i data-feather="gift"></i>
                                <div class="dropdown is-spaced is-right dropdown-trigger is-light">
                                    <div>
                                        <div class="button">
                                            <i data-feather="more-vertical"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="clock"></i>
                                                    <div class="media-content">
                                                        <h3>Remind me</h3>
                                                        <small>Remind me of this later today.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="message-circle"></i>
                                                    <div class="media-content">
                                                        <h3>Message</h3>
                                                        <small>Send an automatic greeting message.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="trash-2"></i>
                                                    <div class="media-content">
                                                        <h3>Remove</h3>
                                                        <small>Removes this widget from your feed.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="birthday-avatar">
                                        <img src="https://img.pixers.pics/pho(s3:400/FO/66/52/32/32/400_FO66523232_4d838b2197d22400d86bfd24ea621d04.jpg,400,400,jpg)/bath-mats-sexy-blonde.jpg.jpg"
                                            data-demo-src="assets/img/avatars/dan.jpg" alt="">
                                        <div class="birthday-indicator">
                                            31
                                        </div>
                                    </div>
                                    <div class="birthday-content">
                                        <h4>Leyla turns 31 today!</h4>
                                        <p>Send him your best wishes by leaving something on his wall.</p>
                                        <button type="button" class="button light-button">Write Message</button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- Suggested friends widget -->

                        <div id="banner-ad" style="width: 300px; height: 250px; background-color: #ddd;">

                            <p class="ad-text" style="text-align: center;">
                                300 X ADVERTISMENT X 250
                            </p>

                            {{-- <script>
                                googletag.cmd.push(function() {
                                    googletag.display('banner-ad');
                                });
                            </script> --}}
                        </div>


                        <!-- /partials/widgets/suggested-friends-1-widget.html -->
                        <div class="card">
                            <div class="card-heading is-bordered">
                                <h4>Suggested Friends</h4>
                                <div class="dropdown is-spaced is-right dropdown-trigger">
                                    <div>
                                        <div class="button">
                                            <i data-feather="more-vertical"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="users"></i>
                                                    <div class="media-content">
                                                        <h3>All Suggestions</h3>
                                                        <small>View all friend suggestions.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="settings"></i>
                                                    <div class="media-content">
                                                        <h3>Settings</h3>
                                                        <small>Access widget settings.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="trash-2"></i>
                                                    <div class="media-content">
                                                        <h3>Remove</h3>
                                                        <small>Removes this widget from your feed.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body no-padding">
                                <!-- Suggested friend -->
                                {{-- <div class="add-friend-block transition-block">
                                    <img src="https://image.made-in-china.com/155f0j00gBbiCoazZsuO/SJ-BFD1032-Wholesale-Hot-Girls-2022-Custom-Sexy-Bikini-Women-Bathing-Suits-Cover-UPS-Beachwear-Two-Pieces-Swimwear.jpg"
                                        data-demo-src="assets/img/avatars/nelly.png" data-user-popover="9"
                                        alt="">
                                    <div class="page-meta">
                                        <span>Nelly Schwartz</span>
                                        <span>Melbourne</span>
                                    </div>
                                    <div class="add-friend add-transition">
                                        <i data-feather="user-plus"></i>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <!-- New job widget -->
                        <!-- /partials/widgets/new-job-widget.html -->
                        {{-- <div class="card is-new-job-card has-background-image"
                            data-background="assets/img/illustrations/cards/job-bg.svg">
                            <div class="card-heading">
                                <i data-feather="briefcase"></i>
                                <div class="dropdown is-spaced is-right dropdown-trigger is-light">
                                    <div>
                                        <div class="button">
                                            <i data-feather="more-vertical"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="clock"></i>
                                                    <div class="media-content">
                                                        <h3>Remind me</h3>
                                                        <small>Remind me of this later today.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="message-circle"></i>
                                                    <div class="media-content">
                                                        <h3>Message</h3>
                                                        <small>Send an automatic congratz message.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="trash-2"></i>
                                                    <div class="media-content">
                                                        <h3>Remove</h3>
                                                        <small>Removes this widget from your feed.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="job-avatar">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTl_jRKKzHcbpLcVLQ764E1bhQvvVANGQM7jw&usqp=CAU"
                                            data-demo-src="assets/img/avatars/nelly.png" alt="">
                                    </div>
                                    <div class="job-content">
                                        <h4>Nelly has a new job!</h4>
                                        <p>Send her message congratulating her for getting this job.</p>
                                        <button type="button" class="button light-button">Write Message</button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <!-- /Right side column -->
                </div>
            </div>
            <!-- /Feed page main wrapper -->
        </div>
        <!-- /Container -->

        <!-- Create group modal in compose card -->
        <!-- /partials/pages/feed/modals/create-group-modal.html -->
        <div id="create-group-modal" class="modal create-group-modal is-light-bg">
            <div class="modal-background"></div>
            <div class="modal-content">

                <div class="card">
                    <div class="card-heading">
                        <h3>Create group</h3>
                        <!-- Close X button -->
                        <div class="close-wrap">
                            <span class="close-modal">
                                <i data-feather="x"></i>
                            </span>
                        </div>
                    </div>
                    <!-- Modal subheading -->
                    <div class="subheading">
                        <!-- Group avatar -->
                        <div class="group-avatar">
                            <input id="group-avatar-upload" type="file">
                            <div class="add-photo">
                                <i data-feather="plus"></i>
                            </div>
                        </div>
                        <!-- Group name -->
                        <div class="control">
                            <input type="text" class="input" placeholder="Give the group a name">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="inner">
                            <div class="left-section">
                                <div class="search-subheader">
                                    <div class="control">
                                        <input type="text" class="input" placeholder="Search for friends to add">
                                        <span class="icon">
                                            <i data-feather="search"></i>
                                        </span>
                                    </div>
                                </div>
                                <div id="new-group-list" class="user-list has-slimscroll">

                                    <!-- Friend -->
                                    <div class="friend-block" data-ref="ref-1">
                                        <img class="friend-avatar" src=""
                                            data-demo-src="assets/img/avatars/dan.jpg" alt="">
                                        <div class="friend-name">Dan Walker</div>
                                        <div class="round-checkbox is-small">
                                            <div>
                                                <input type="checkbox" id="checkbox-group-1">
                                                <label for="checkbox-group-1"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Friend -->
                                    <div class="friend-block" data-ref="ref-2">
                                        <img class="friend-avatar" src=""
                                            data-demo-src="assets/img/avatars/daniel.jpg" alt="">
                                        <div class="friend-name">Daniel Wellington</div>
                                        <div class="round-checkbox is-small">
                                            <div>
                                                <input type="checkbox" id="checkbox-group-2">
                                                <label for="checkbox-group-2"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Friend -->
                                    <div class="friend-block" data-ref="ref-3">
                                        <img class="friend-avatar" src=""
                                            data-demo-src="assets/img/avatars/stella.jpg" alt="">
                                        <div class="friend-name">Stella Bergmann</div>
                                        <div class="round-checkbox is-small">
                                            <div>
                                                <input type="checkbox" id="checkbox-group-3">
                                                <label for="checkbox-group-3"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Friend -->
                                    <div class="friend-block" data-ref="ref-4">
                                        <img class="friend-avatar" src=""
                                            data-demo-src="assets/img/avatars/david.jpg" alt="">
                                        <div class="friend-name">David Kim</div>
                                        <div class="round-checkbox is-small">
                                            <div>
                                                <input type="checkbox" id="checkbox-group-4">
                                                <label for="checkbox-group-4"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Friend -->
                                    <div class="friend-block" data-ref="ref-5">
                                        <img class="friend-avatar" src=""
                                            data-demo-src="assets/img/avatars/nelly.png" alt="">
                                        <div class="friend-name">Nelly Schwartz</div>
                                        <div class="round-checkbox is-small">
                                            <div>
                                                <input type="checkbox" id="checkbox-group-5">
                                                <label for="checkbox-group-5"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Friend -->
                                    <div class="friend-block" data-ref="ref-6">
                                        <img class="friend-avatar" src=""
                                            data-demo-src="assets/img/avatars/elise.jpg" alt="">
                                        <div class="friend-name">Elise Walker</div>
                                        <div class="round-checkbox is-small">
                                            <div>
                                                <input type="checkbox" id="checkbox-group-6">
                                                <label for="checkbox-group-6"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Friend -->
                                    <div class="friend-block" data-ref="ref-7">
                                        <img class="friend-avatar" src=""
                                            data-demo-src="assets/img/avatars/bobby.jpg" alt="">
                                        <div class="friend-name">Bobby Brown</div>
                                        <div class="round-checkbox is-small">
                                            <div>
                                                <input type="checkbox" id="checkbox-group-7">
                                                <label for="checkbox-group-7"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Friend -->
                                    <div class="friend-block" data-ref="ref-8">
                                        <img class="friend-avatar" src=""
                                            data-demo-src="assets/img/avatars/lana.jpeg" alt="">
                                        <div class="friend-name">Lana Henrikssen</div>
                                        <div class="round-checkbox is-small">
                                            <div>
                                                <input type="checkbox" id="checkbox-group-8">
                                                <label for="checkbox-group-8"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Friend -->
                                    <div class="friend-block" data-ref="ref-9">
                                        <img class="friend-avatar" src=""
                                            data-demo-src="assets/img/avatars/gaelle.jpeg" alt="">
                                        <div class="friend-name">Gaelle Morris</div>
                                        <div class="round-checkbox is-small">
                                            <div>
                                                <input type="checkbox" id="checkbox-group-9">
                                                <label for="checkbox-group-9"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Friend -->
                                    <div class="friend-block" data-ref="ref-10">
                                        <img class="friend-avatar" src=""
                                            data-demo-src="assets/img/avatars/mike.jpg" alt="">
                                        <div class="friend-name">Mike Lasalle</div>
                                        <div class="round-checkbox is-small">
                                            <div>
                                                <input type="checkbox" id="checkbox-group-10">
                                                <label for="checkbox-group-10"></label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="right-section has-slimscroll">
                                <div class="selected-count">
                                    <span>Selected</span>
                                    <span id="selected-friends-count">0</span>
                                </div>

                                <div id="selected-list" class="selected-list"></div>

                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="button is-solid grey-button close-modal">Cancel</button>
                        <button type="button" class="button is-solid accent-button close-modal">Create a Group</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- Albums onboarding modal -->
        <!-- /partials/pages/feed/modals/albums-help-modal.html -->
        <div id="albums-help-modal" class="modal albums-help-modal is-xsmall has-light-bg">
            <div class="modal-background"></div>
            <div class="modal-content">

                <div class="card">
                    <div class="card-heading">
                        <h3>Add Photos</h3>
                        <!-- Close X button -->
                        <div class="close-wrap">
                            <span class="close-modal">
                                <i data-feather="x"></i>
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="content-block is-active">
                            <img src="assets/img/illustrations/cards/albums.svg" alt="">
                            <div class="help-text">
                                <h3>Manage your photos</h3>
                                <p>Lorem ipsum sit dolor amet is a dummy text used by the typography industry and the web
                                    industry.</p>
                            </div>
                        </div>

                        <div class="content-block">
                            <img src="assets/img/illustrations/cards/upload.svg" alt="">
                            <div class="help-text">
                                <h3>Upload your photos</h3>
                                <p>Lorem ipsum sit dolor amet is a dummy text used by the typography industry and the web
                                    industry.</p>
                            </div>
                        </div>

                        <div class="slide-dots">
                            <div class="dot is-active"></div>
                            <div class="dot"></div>
                        </div>
                        <div class="action">
                            <button type="button" class="button is-solid accent-button next-modal raised"
                                data-modal="albums-modal">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Album upload modal -->
        <!-- /partials/pages/feed/modals/albums-modal.html -->
        <div id="albums-modal" class="modal albums-modal is-xxl has-light-bg">
            <div class="modal-background"></div>
            <div class="modal-content">

                <div class="card">
                    <div class="card-heading">
                        <h3>New album</h3>
                        <div class="button is-solid accent-button fileinput-button">
                            <i class="mdi mdi-plus"></i>
                            Add pictures/videos
                        </div>

                        <!-- Close X button -->
                        <div class="close-wrap">
                            <span class="close-modal">
                                <i data-feather="x"></i>
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="left-section">
                            <div class="album-form">
                                <div class="control">
                                    <input type="text" class="input is-sm no-radius is-fade"
                                        placeholder="Album name">
                                    <div class="icon">
                                        <i data-feather="camera"></i>
                                    </div>
                                </div>
                                <div class="control">
                                    <textarea class="textarea is-fade no-radius is-sm" rows="3" placeholder="describe your album ..."></textarea>
                                </div>
                                <div class="control">
                                    <input type="text" class="input is-sm no-radius is-fade" placeholder="Place">
                                    <div class="icon">
                                        <i data-feather="map-pin"></i>
                                    </div>
                                </div>
                            </div>

                            <div id="album-date" class="album-date">
                                <div class="head">
                                    <h4>Change the date</h4>
                                    <button type="button" class="button is-solid dark-grey-button icon-button">
                                        <i data-feather="plus"></i>
                                    </button>
                                </div>

                                <p>Set a date for your album. You can always change it later.</p>
                                <div class="control is-hidden">
                                    <input id="album-datepicker" type="text" class="input is-sm is-fade"
                                        placeholder="Select a date">
                                    <div class="icon">
                                        <i data-feather="calendar"></i>
                                    </div>
                                </div>
                            </div>

                            <div id="tagged-in-album" class="tagged-in-album">
                                <div class="head">
                                    <h4>Tag friends in this album</h4>
                                    <button type="button" class="button is-solid dark-grey-button icon-button">
                                        <i data-feather="plus"></i>
                                    </button>
                                </div>

                                <p>Tag friends in this album. Tagged friends can see photos they are tagged in.</p>
                                <div class="field is-autocomplete is-hidden">
                                    <div class="control">
                                        <input id="create-album-friends-autocpl" type="text"
                                            class="input is-sm is-fade" placeholder="Search for friends">
                                        <div class="icon">
                                            <i data-feather="search"></i>
                                        </div>
                                    </div>
                                </div>

                                <div id="album-tag-list" class="album-tag-list"></div>

                            </div>

                            <div class="shared-album">
                                <div class="head">
                                    <h4>Allow friends to add photos</h4>
                                    <div class="basic-checkbox">
                                        <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox"
                                            value="value1">
                                        <label for="styled-checkbox-1"></label>
                                    </div>
                                </div>

                                <p>Tagged friends will be able to share content inside this album.</p>
                            </div>

                        </div>
                        <div class="right-section has-slimscroll">

                            <div class="modal-uploader">
                                <div id="actions" class="columns is-multiline no-mb">
                                    <div class="column is-12">
                                        <span class="button has-icon is-solid grey-button fileinput-button">
                                            <i data-feather="plus"></i>
                                        </span>
                                        <button type="submit" class="button start is-hidden">
                                            <span>Upload</span>
                                        </button>
                                        <button type="reset" class="button is-solid grey-button cancel">
                                            <span>Clear all</span>
                                        </button>
                                        <span class="file-count">
                                            <span id="modal-uploader-file-count">0</span> file(s) selected
                                        </span>
                                    </div>

                                    <div class="column is-12 is-hidden">
                                        <!-- The global file processing state -->
                                        <div class="fileupload-process">
                                            <div id="total-progress" class="progress progress-striped active"
                                                role="progressbar" aria-valuemin="0" aria-valuemax="100"
                                                aria-valuenow="0">
                                                <div class="progress-bar progress-bar-success" style="width:0%;"
                                                    data-dz-uploadprogress></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="columns is-multiline" id="previews">

                                    <div id="template" class="column is-4 is-template">
                                        <div class="preview-box">
                                            <!-- This is used as the file preview template -->
                                            <div class="remove-button" data-dz-remove>
                                                <i class="mdi mdi-close"></i>
                                            </div>
                                            <div>
                                                <span class="preview"><img src="https://via.placeholder.com/120x120"
                                                        data-dz-thumbnail alt="" /></span>
                                            </div>
                                            <div class="preview-body">
                                                <div class="item-meta">
                                                    <div>
                                                        <p class="name" data-dz-name></p>
                                                        <strong class="error text-danger" data-dz-errormessage></strong>
                                                    </div>
                                                    <small class="size" data-dz-size></small>
                                                </div>
                                                <div class="upload-item-progress">
                                                    <div class="progress active" role="progressbar" aria-valuemin="0"
                                                        aria-valuemax="100" aria-valuenow="0">
                                                        <div class="progress-bar progress-bar-success"
                                                            data-dz-uploadprogress></div>
                                                    </div>
                                                </div>
                                                <div class="upload-item-description">
                                                    <div class="control">
                                                        <textarea class="textarea is-small is-fade no-radius" rows="4" placeholder="Describe this photo ..."></textarea>
                                                    </div>
                                                </div>
                                                <div class="upload-item-actions is-hidden">
                                                    <button class="button start is-hidden">
                                                        <span>Start</span>
                                                    </button>
                                                    <button data-dz-remove class="button cancel is-hidden">
                                                        <span>Cancel</span>
                                                    </button>
                                                    <button data-dz-remove class="button delete is-hidden">
                                                        <span>Delete</span>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <!-- Dropdown menu -->
                        <div class="dropdown is-up is-spaced is-modern is-neutral is-right dropdown-trigger">
                            <div>
                                <button class="button" aria-haspopup="true">
                                    <i class="main-icon" data-feather="smile"></i>
                                    <span>Friends</span>
                                    <i class="caret" data-feather="chevron-down"></i>
                                </button>
                            </div>
                            <div class="dropdown-menu" role="menu">
                                <div class="dropdown-content">
                                    <a href="#" class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="globe"></i>
                                            <div class="media-content">
                                                <h3>Public</h3>
                                                <small>Anyone can see this publication.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="users"></i>
                                            <div class="media-content">
                                                <h3>Friends</h3>
                                                <small>only friends can see this publication.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="user"></i>
                                            <div class="media-content">
                                                <h3>Specific friends</h3>
                                                <small>Don't show it to some friends.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="lock"></i>
                                            <div class="media-content">
                                                <h3>Only me</h3>
                                                <small>Only me can see this publication.</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="button is-solid accent-button close-modal">Create album</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Live video onboarding modal -->
        <!-- /partials/pages/feed/modals/videos-help-modal.html -->
        <div id="videos-help-modal" class="modal videos-help-modal is-xsmall has-light-bg">
            <div class="modal-background"></div>
            <div class="modal-content">

                <div class="card">
                    <div class="card-heading">
                        <h3>Add Photos</h3>
                        <!-- Close X button -->
                        <div class="close-wrap">
                            <span class="close-modal">
                                <i data-feather="x"></i>
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="content-block is-active">
                            <img src="assets/img/illustrations/cards/videotrip.svg" alt="">
                            <div class="help-text">
                                <h3>Share live videos</h3>
                                <p>Lorem ipsum sit dolor amet is a dummy text used by the typography industry and the web
                                    industry.</p>
                            </div>
                        </div>

                        <div class="content-block">
                            <img src="assets/img/illustrations/cards/videocall.svg" alt="">
                            <div class="help-text">
                                <h3>To build your audience</h3>
                                <p>Lorem ipsum sit dolor amet is a dummy text used by the typography industry and the web
                                    industry.</p>
                            </div>
                        </div>

                        <div class="slide-dots">
                            <div class="dot is-active"></div>
                            <div class="dot"></div>
                        </div>
                        <div class="action">
                            <button type="button" class="button is-solid accent-button next-modal raised"
                                data-modal="videos-modal">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Live video modal -->
        <!-- /partials/pages/feed/modals/videos-modal.html -->
        <div id="videos-modal" class="modal videos-modal is-xxl has-light-bg">
            <div class="modal-background"></div>
            <div class="modal-content">

                <div class="card">
                    <div class="card-heading">
                        <h3>Go live</h3>
                        <div id="stop-stream" class="button is-solid accent-button is-hidden" onclick="stopWebcam();">
                            <i class="mdi mdi-video-off"></i>
                            Stop stream
                        </div>
                        <div id="start-stream" class="button is-solid accent-button" onclick="startWebcam();">
                            <i class="mdi mdi-video"></i>
                            Start stream
                        </div>


                        <!-- Close X button -->
                        <div class="close-wrap">
                            <span class="close-modal">
                                <i data-feather="x"></i>
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="inner">
                            <div class="left-section">
                                <div class="video-wrapper">
                                    <div class="video-wrap">
                                        <div id="live-indicator" class="live is-vhidden">Live</div>
                                        <video id="video" width="400" height="240" controls autoplay></video>
                                    </div>
                                </div>
                            </div>
                            <div class="right-section">
                                <div class="header">
                                    <img src="" data-demo-src="assets/img/avatars/jenna.png" alt="">
                                    <div class="user-meta">
                                        <span>Jenna Davis <small>is live</small></span>
                                        <span><small>right now</small></span>
                                    </div>
                                    <button type="button" class="button">Follow</button>
                                    <div class="dropdown is-spaced is-right dropdown-trigger">
                                        <div>
                                            <div class="button">
                                                <i data-feather="more-vertical"></i>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" role="menu">
                                            <div class="dropdown-content">
                                                <div class="dropdown-item is-title">
                                                    Who can see this ?
                                                </div>
                                                <a href="#" class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="globe"></i>
                                                        <div class="media-content">
                                                            <h3>Public</h3>
                                                            <small>Anyone can see this publication.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="users"></i>
                                                        <div class="media-content">
                                                            <h3>Friends</h3>
                                                            <small>only friends can see this publication.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="user"></i>
                                                        <div class="media-content">
                                                            <h3>Specific friends</h3>
                                                            <small>Don't show it to some friends.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <hr class="dropdown-divider">
                                                <a class="dropdown-item">
                                                    <div class="media">
                                                        <i data-feather="lock"></i>
                                                        <div class="media-content">
                                                            <h3>Only me</h3>
                                                            <small>Only me can see this publication.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="inner-content">
                                    <div class="control">
                                        <input type="text" class="input is-sm is-fade"
                                            placeholder="What is this live about?">
                                        <div class="icon">
                                            <i data-feather="activity"></i>
                                        </div>
                                    </div>
                                    <div class="live-stats">
                                        <div class="social-count">
                                            <div class="likes-count">
                                                <i data-feather="heart"></i>
                                                <span>0</span>
                                            </div>
                                            <div class="shares-count">
                                                <i data-feather="link-2"></i>
                                                <span>0</span>
                                            </div>
                                            <div class="comments-count">
                                                <i data-feather="message-circle"></i>
                                                <span>0</span>
                                            </div>
                                        </div>
                                        <div class="social-count ml-auto">
                                            <div class="views-count">
                                                <i data-feather="eye"></i>
                                                <span>0</span>
                                                <span class="views"><small>views</small></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <div class="action">
                                            <i data-feather="thumbs-up"></i>
                                            <span>Like</span>
                                        </div>
                                        <div class="action">
                                            <i data-feather="message-circle"></i>
                                            <span>Comment</span>
                                        </div>
                                        <div class="action">
                                            <i data-feather="link-2"></i>
                                            <span>Share</span>
                                        </div>
                                        <div class="dropdown is-spaced is-right dropdown-trigger">
                                            <div>
                                                <div class="avatar-button">
                                                    <img src="" data-demo-src="assets/img/avatars/jenna.png"
                                                        alt="">
                                                    <i data-feather="triangle"></i>
                                                </div>
                                            </div>
                                            <div class="dropdown-menu has-margin" role="menu">
                                                <div class="dropdown-content">
                                                    <a href="#" class="dropdown-item is-selected">
                                                        <div class="media">
                                                            <img src=""
                                                                data-demo-src="assets/img/avatars/jenna.png"
                                                                alt="">
                                                            <div class="media-content">
                                                                <h3>Jenna Davis</h3>
                                                                <small>Interact as Jenna Davis.</small>
                                                            </div>
                                                            <div class="checkmark">
                                                                <i data-feather="check"></i>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <hr class="dropdown-divider">
                                                    <a href="#" class="dropdown-item">
                                                        <div class="media">
                                                            <img src="https://via.placeholder.com/478x344"
                                                                data-demo-src="assets/img/avatars/hanzo.svg"
                                                                alt="">
                                                            <div class="media-content">
                                                                <h3>Css Ninja</h3>
                                                                <small>Interact as Css Ninja.</small>
                                                            </div>
                                                            <div class="checkmark">
                                                                <i data-feather="check"></i>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tabs-wrapper">
                                    <div class="tabs is-fullwidth">
                                        <ul>
                                            <li class="is-active">
                                                <a>Comments</a>
                                            </li>
                                            <li>
                                                <a>Upcoming</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content has-slimscroll">
                                        <div class="media is-comment">
                                            <figure class="media-left">
                                                <p class="image is-32x32">
                                                    <img src="" data-demo-src="assets/img/avatars/dan.jpg"
                                                        alt="" data-user-popover="1">
                                                </p>
                                            </figure>
                                            <div class="media-content">
                                                <div class="username">Dan Walker</div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare
                                                    magna
                                                    eros.</p>
                                                <div class="comment-actions">
                                                    <a href="javascript:void(0);" class="is-inverted">Like</a>
                                                    <span>3h</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="media is-comment">
                                            <figure class="media-left">
                                                <p class="image is-32x32">
                                                    <img src="" data-demo-src="assets/img/avatars/david.jpg"
                                                        alt="" data-user-popover="4">
                                                </p>
                                            </figure>
                                            <div class="media-content">
                                                <div class="username">David Kim</div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                                <div class="comment-actions">
                                                    <a href="javascript:void(0);" class="is-inverted">Like</a>
                                                    <span>4h</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="media is-comment">
                                            <figure class="media-left">
                                                <p class="image is-32x32">
                                                    <img src="" data-demo-src="assets/img/avatars/rolf.jpg"
                                                        alt="" data-user-popover="17">
                                                </p>
                                            </figure>
                                            <div class="media-content">
                                                <div class="username">Rolf Krupp</div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare
                                                    magna
                                                    eros. Consectetur adipiscing elit. Proin ornare magna eros.</p>
                                                <div class="comment-actions">
                                                    <a href="javascript:void(0);" class="is-inverted">Like</a>
                                                    <span>4h</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="comment-controls">
                                    <div class="controls-inner">
                                        <img src="" data-demo-src="assets/img/avatars/jenna.png"
                                            alt="">
                                        <div class="control">
                                            <textarea class="textarea comment-textarea is-rounded" rows="1"></textarea>
                                            <button class="emoji-button">
                                                <i data-feather="smile"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>

            </div>
        </div>
        <!-- Share from feed modal -->
        <!-- /partials/pages/feed/modals/share-modal.html -->
        <div id="share-modal" class="modal share-modal is-xsmall has-light-bg">
            <div class="modal-background"></div>
            <div class="modal-content">

                <div class="card">
                    <div class="card-heading">
                        <div class="dropdown is-primary share-dropdown">
                            <div>
                                <div class="button">
                                    <i class="mdi mdi-format-float-left"></i> <span>Share in your feed</span> <i
                                        data-feather="chevron-down"></i>
                                </div>
                            </div>
                            <div class="dropdown-menu" role="menu">
                                <div class="dropdown-content">
                                    <div class="dropdown-item" data-target-channel="feed">
                                        <div class="media">
                                            <i class="mdi mdi-format-float-left"></i>
                                            <div class="media-content">
                                                <h3>Share in your feed</h3>
                                                <small>Share this publication on your feed.</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-item" data-target-channel="friend">
                                        <div class="media">
                                            <i class="mdi mdi-account-heart"></i>
                                            <div class="media-content">
                                                <h3>Share in a friend's feed</h3>
                                                <small>Share this publication on a friend's feed.</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-item" data-target-channel="group">
                                        <div class="media">
                                            <i class="mdi mdi-account-group"></i>
                                            <div class="media-content">
                                                <h3>Share in a group</h3>
                                                <small>Share this publication in a group.</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-item" data-target-channel="page">
                                        <div class="media">
                                            <i class="mdi mdi-file-document-box"></i>
                                            <div class="media-content">
                                                <h3>Share in a page</h3>
                                                <small>Share this publication in a page.</small>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="dropdown-divider">
                                    <div class="dropdown-item" data-target-channel="private-message">
                                        <div class="media">
                                            <i class="mdi mdi-email-plus"></i>
                                            <div class="media-content">
                                                <h3>Share in message</h3>
                                                <small>Share this publication in a private message.</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Close X button -->
                        <div class="close-wrap">
                            <span class="close-modal">
                                <i data-feather="x"></i>
                            </span>
                        </div>
                    </div>
                    <div class="share-inputs">
                        <div class="field is-autocomplete">
                            <div id="share-to-friend" class="control share-channel-control is-hidden">
                                <input id="share-with-friend" type="text"
                                    class="input is-sm no-radius share-input simple-users-autocpl"
                                    placeholder="Your friend's name">
                                <div class="input-heading">
                                    Friend :
                                </div>
                            </div>
                        </div>

                        <div class="field is-autocomplete">
                            <div id="share-to-group" class="control share-channel-control is-hidden">
                                <input id="share-with-group" type="text"
                                    class="input is-sm no-radius share-input simple-groups-autocpl"
                                    placeholder="Your group's name">
                                <div class="input-heading">
                                    Group :
                                </div>
                            </div>
                        </div>

                        <div id="share-to-page" class="control share-channel-control no-border is-hidden">
                            <div class="page-controls">
                                <div class="page-selection">

                                    <div class="dropdown is-accent page-dropdown">
                                        <div>
                                            <div class="button page-selector">
                                                <img src="https://via.placeholder.com/150x150"
                                                    data-demo-src="assets/img/avatars/hanzo.svg" alt="">
                                                <span>Css Ninja</span> <i data-feather="chevron-down"></i>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu" role="menu">
                                            <div class="dropdown-content">
                                                <div class="dropdown-item">
                                                    <div class="media">
                                                        <img src="https://via.placeholder.com/150x150"
                                                            data-demo-src="assets/img/avatars/hanzo.svg" alt="">
                                                        <div class="media-content">
                                                            <h3>Css Ninja</h3>
                                                            <small>Share on Css Ninja.</small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="dropdown-item">
                                                    <div class="media">
                                                        <img src="https://via.placeholder.com/150x150"
                                                            data-demo-src="assets/img/icons/logos/nuclearjs.svg"
                                                            alt="">
                                                        <div class="media-content">
                                                            <h3>NuclearJs</h3>
                                                            <small>Share on NuclearJs.</small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="dropdown-item">
                                                    <div class="media">
                                                        <img src="https://via.placeholder.com/150x150"
                                                            data-demo-src="assets/img/icons/logos/slicer.svg"
                                                            alt="">
                                                        <div class="media-content">
                                                            <h3>Slicer</h3>
                                                            <small>Share on Slicer.</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="alias">
                                    <img src="https://via.placeholder.com/150x150"
                                        data-demo-src="assets/img/avatars/jenna.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="field is-autocomplete">
                            <div id="share-to-private-message" class="control share-channel-control is-hidden">
                                <input id="share-with-private-message" type="text"
                                    class="input is-sm no-radius share-input simple-users-autocpl"
                                    placeholder="Message a friend">
                                <div class="input-heading">
                                    To :
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="control">
                            <textarea class="textarea comment-textarea" rows="1" placeholder="Say something about this ..."></textarea>
                            <button class="emoji-button">
                                <i data-feather="smile"></i>
                            </button>
                        </div>
                        <div class="shared-publication">
                            <div class="featured-image">
                                <img id="share-modal-image"
                                    src="https://thisistrouble.com/wp-content/uploads/2014/11/hot-girl-wallpaper-1366x768-055.jpg"
                                    data-demo-src="https://thisistrouble.com/wp-content/uploads/2014/11/hot-girl-wallpaper-1366x768-055.jpg"
                                    alt="">
                            </div>
                            <div class="publication-meta">
                                <div class="inner-flex">
                                    <img id="share-modal-avatar"
                                        src="https://thisistrouble.com/wp-content/uploads/2014/11/hot-girl-wallpaper-1366x768-055.jpg"
                                        data-demo-src="https://thisistrouble.com/wp-content/uploads/2014/11/hot-girl-wallpaper-1366x768-055.jpg"
                                        data-user-popover="1" alt="">
                                    <p id="share-modal-text">Yesterday with <a href="#">@Zhivago Photoshooting</a>
                                        and <a href="#">@Marvin Stemperd</a> who helped me a lot on the
                                        pictures and get the best angles.Very excited & can't wait to show up the whole
                                        album!
                                    </p>
                                </div>
                                <div class="publication-footer">
                                    <div class="stats">
                                        <div class="stat-block">
                                            <i class="mdi mdi-earth"></i>
                                            <small>Public</small>
                                        </div>
                                        <div class="stat-block">
                                            <i class="mdi mdi-eye"></i>
                                            <small>163 views</small>
                                        </div>
                                    </div>
                                    <div class="publication-origin">
                                        <small>ZHIVAGO.LIVE</small>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="bottom-share-inputs">

                        <div id="action-place" class="field is-autocomplete is-dropup is-hidden">
                            <div id="share-place" class="control share-bottom-channel-control">
                                <input type="text" class="input is-sm no-radius share-input simple-locations-autocpl"
                                    placeholder="Where are you?">
                                <div class="input-heading">
                                    Location :
                                </div>
                            </div>
                        </div>

                        <div id="action-tag" class="field is-autocomplete is-dropup is-hidden">
                            <div id="share-tags" class="control share-bottom-channel-control">
                                <input id="share-friend-tags-autocpl" type="text"
                                    class="input is-sm no-radius share-input" placeholder="Who are you with">
                                <div class="input-heading">
                                    Friends :
                                </div>
                            </div>
                            <div id="share-modal-tag-list" class="tag-list no-margin"></div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <div class="action-wrap">
                            <div class="footer-action" data-target-action="tag">
                                <i class="mdi mdi-account-plus"></i>
                            </div>
                            <div class="footer-action" data-target-action="place">
                                <i class="mdi mdi-map-marker"></i>
                            </div>
                            <div class="footer-action dropdown is-spaced is-neutral dropdown-trigger is-up"
                                data-target-action="permissions">
                                <div>
                                    <i class="mdi mdi-lock-clock"></i>
                                </div>
                                <div class="dropdown-menu" role="menu">
                                    <div class="dropdown-content">
                                        <a href="#" class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="globe"></i>
                                                <div class="media-content">
                                                    <h3>Public</h3>
                                                    <small>Anyone can see this publication.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="users"></i>
                                                <div class="media-content">
                                                    <h3>Friends</h3>
                                                    <small>only friends can see this publication.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="user"></i>
                                                <div class="media-content">
                                                    <h3>Specific friends</h3>
                                                    <small>Don't show it to some friends.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <hr class="dropdown-divider">
                                        <a class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="lock"></i>
                                                <div class="media-content">
                                                    <h3>Only me</h3>
                                                    <small>Only me can see this publication.</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="button-wrap">
                            <button type="button" class="button is-solid dark-grey-button close-modal">Cancel</button>
                            <button type="button" class="button is-solid primary-button close-modal">Publish</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- No Stream modal -->
        <!-- /partials/pages/feed/modals/no-stream-modal.html -->
        <div id="no-stream-modal" class="modal no-stream-modal is-xsmall has-light-bg">
            <div class="modal-background"></div>
            <div class="modal-content">

                <div class="card">
                    <div class="card-heading">
                        <h3></h3>
                        <!-- Close X button -->
                        <div class="close-wrap">
                            <span class="close-modal">
                                <i data-feather="x"></i>
                            </span>
                        </div>
                    </div>
                    <div class="card-body has-text-centered">

                        <div class="image-wrap">
                            <img src="assets/img/illustrations/characters/no-stream.svg" alt="">
                        </div>

                        <h3>Streaming Disabled</h3>
                        <p>Streaming is not allowed from mobile web. Please use our mobile apps for mobile streaming.</p>

                        <div class="action">
                            <a href="/#demos-section" class="button is-solid accent-button raised is-fullwidth">Got
                                It</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Google places Lib -->
        <script src="https://maps.google.com/maps/api/js?key=AIzaSyAGLO_M5VT7BsVdjMjciKoH1fFJWWdhDPU&libraries=places"></script>
    </div>

    <div class="chat-wrapper">
        <div class="chat-inner">

            <!-- Chat top navigation -->
            <div class="chat-nav">
                <div class="nav-start">
                    <div class="recipient-block">
                        <div class="avatar-container">
                            <img class="user-avatar" src="" data-demo-src="assets/img/avatars/dan.jpg"
                                alt="">
                        </div>
                        <div class="username">
                            <span>Dan Walker</span>
                            <span><i data-feather="star"></i> <span>| Online</span></span>
                        </div>
                    </div>
                </div>
                <div class="nav-end">

                    <!-- Settings icon dropdown -->
                    <div class="dropdown is-spaced is-neutral is-right dropdown-trigger">
                        <div>
                            <a class="chat-nav-item is-icon">
                                <i data-feather="settings"></i>
                            </a>
                        </div>
                        <div class="dropdown-menu" role="menu">
                            <div class="dropdown-content">
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="message-square"></i>
                                        <div class="media-content">
                                            <h3>Details</h3>
                                            <small>View this conversation's details.</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="settings"></i>
                                        <div class="media-content">
                                            <h3>Preferences</h3>
                                            <small>Define your preferences.</small>
                                        </div>
                                    </div>
                                </a>
                                <hr class="dropdown-divider">
                                <a class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="bell"></i>
                                        <div class="media-content">
                                            <h3>Notifications</h3>
                                            <small>Set notifications settings.</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="bell-off"></i>
                                        <div class="media-content">
                                            <h3>Silence</h3>
                                            <small>Disable notifications.</small>
                                        </div>
                                    </div>
                                </a>
                                <hr class="dropdown-divider">
                                <a class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="box"></i>
                                        <div class="media-content">
                                            <h3>Archive</h3>
                                            <small>Archive this conversation.</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="trash-2"></i>
                                        <div class="media-content">
                                            <h3>Delete</h3>
                                            <small>Delete this conversation.</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="chat-search">
                        <div class="control has-icon">
                            <input type="text" class="input" placeholder="Search messages">
                            <div class="form-icon">
                                <i data-feather="search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="chat-nav-item is-icon is-hidden-mobile">
                        <i data-feather="at-sign"></i>
                    </a>
                    <a class="chat-nav-item is-icon is-hidden-mobile">
                        <i data-feather="star"></i>
                    </a>

                    <!-- More dropdown -->
                    <div class="dropdown is-spaced is-neutral is-right dropdown-trigger">
                        <div>
                            <a class="chat-nav-item is-icon no-margin">
                                <i data-feather="more-vertical"></i>
                            </a>
                        </div>
                        <div class="dropdown-menu" role="menu">
                            <div class="dropdown-content">
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="file-text"></i>
                                        <div class="media-content">
                                            <h3>Files</h3>
                                            <small>View all your files.</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="users"></i>
                                        <div class="media-content">
                                            <h3>Users</h3>
                                            <small>View all users you're talking to.</small>
                                        </div>
                                    </div>
                                </a>
                                <hr class="dropdown-divider">
                                <a class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="gift"></i>
                                        <div class="media-content">
                                            <h3>Daily bonus</h3>
                                            <small>Get your daily bonus.</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="download-cloud"></i>
                                        <div class="media-content">
                                            <h3>Downloads</h3>
                                            <small>See all your downloads.</small>
                                        </div>
                                    </div>
                                </a>
                                <hr class="dropdown-divider">
                                <a class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="life-buoy"></i>
                                        <div class="media-content">
                                            <h3>Support</h3>
                                            <small>Reach our support team.</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <a class="chat-nav-item is-icon close-chat">
                        <i data-feather="x"></i>
                    </a>
                </div>
            </div>
            <!-- Chat sidebar -->
            <div id="chat-sidebar" class="users-sidebar">
                <!-- Header -->
                <div class="header-item">
                    <img class="light-image" src="assets/img/logo/zhivago-logo.png" alt="">
                    <img class="dark-image" src="assets/img/logo/zhivago-logo.png" alt="">
                </div>
                <!-- User list -->
                <div class="conversations-list has-slimscroll-xs">
                    <!-- User -->
                    <div class="user-item is-active" data-chat-user="dan" data-full-name="Dan Walker"
                        data-status="Online">
                        <div class="avatar-container">
                            <img class="user-avatar" src="" data-demo-src="assets/img/avatars/dan.jpg"
                                alt="">
                            <div class="user-status is-online"></div>
                        </div>
                    </div>
                    <!-- User -->
                    <div class="user-item" data-chat-user="stella" data-full-name="Stella Bergmann"
                        data-status="Busy">
                        <div class="avatar-container">
                            <img class="user-avatar" src="" data-demo-src="assets/img/avatars/stella.jpg"
                                alt="">
                            <div class="user-status is-busy"></div>
                        </div>
                    </div>
                    <!-- User -->
                    <div class="user-item" data-chat-user="daniel" data-full-name="Daniel Wellington"
                        data-status="Away">
                        <div class="avatar-container">
                            <img class="user-avatar" src="" data-demo-src="assets/img/avatars/daniel.jpg"
                                alt="">
                            <div class="user-status is-away"></div>
                        </div>
                    </div>
                    <!-- User -->
                    <div class="user-item" data-chat-user="david" data-full-name="David Kim" data-status="Busy">
                        <div class="avatar-container">
                            <img class="user-avatar" src="" data-demo-src="assets/img/avatars/david.jpg"
                                alt="">
                            <div class="user-status is-busy"></div>
                        </div>
                    </div>
                    <!-- User -->
                    <div class="user-item" data-chat-user="edward" data-full-name="Edward Mayers"
                        data-status="Online">
                        <div class="avatar-container">
                            <img class="user-avatar" src="" data-demo-src="assets/img/avatars/edward.jpeg"
                                alt="">
                            <div class="user-status is-online"></div>
                        </div>
                    </div>
                    <!-- User -->
                    <div class="user-item" data-chat-user="elise" data-full-name="Elise Walker" data-status="Away">
                        <div class="avatar-container">
                            <img class="user-avatar" src="" data-demo-src="assets/img/avatars/elise.jpg"
                                alt="">
                            <div class="user-status is-away"></div>
                        </div>
                    </div>
                    <!-- User -->
                    <div class="user-item" data-chat-user="nelly" data-full-name="Nelly Schwartz"
                        data-status="Busy">
                        <div class="avatar-container">
                            <img class="user-avatar" src="" data-demo-src="assets/img/avatars/nelly.png"
                                alt="">
                            <div class="user-status is-busy"></div>
                        </div>
                    </div>
                    <!-- User -->
                    <div class="user-item" data-chat-user="milly" data-full-name="Milly Augustine"
                        data-status="Busy">
                        <div class="avatar-container">
                            <img class="user-avatar" src="" data-demo-src="assets/img/avatars/milly.jpg"
                                alt="">
                            <div class="user-status is-busy"></div>
                        </div>
                    </div>
                </div>
                <!-- Add Conversation -->
                <div class="footer-item">
                    <div class="add-button modal-trigger" data-modal="add-conversation-modal"><i
                            data-feather="user"></i></div>
                </div>
            </div>

            <!-- Chat body -->
            <div id="chat-body" class="chat-body is-opened">
                <!-- Conversation with Dan -->
                <div id="dan-conversation" class="chat-body-inner has-slimscroll">
                    <div class="date-divider">
                        <hr class="date-divider-line">
                        <span class="date-divider-text">Today</span>
                    </div>

                    <div class="chat-message is-received">
                        <img src="" data-demo-src="assets/img/avatars/dan.jpg" alt="">
                        <div class="message-block">
                            <span>8:03am</span>
                            <div class="message-text">Hi Jenna! I made a new design, and i wanted to show it to you.</div>
                        </div>
                    </div>

                    <div class="chat-message is-received">
                        <img src="" data-demo-src="assets/img/avatars/dan.jpg" alt="">
                        <div class="message-block">
                            <span>8:03am</span>
                            <div class="message-text">It's quite clean and it's inspired from Bulkit.</div>
                        </div>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="" data-demo-src="assets/img/avatars/jenna.png" alt="">
                        <div class="message-block">
                            <span>8:12am</span>
                            <div class="message-text">Oh really??! I want to see that.</div>
                        </div>
                    </div>

                    <div class="chat-message is-received">
                        <img src="" data-demo-src="assets/img/avatars/dan.jpg" alt="">
                        <div class="message-block">
                            <span>8:13am</span>
                            <div class="message-text">FYI it was done in less than a day.</div>
                        </div>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="" data-demo-src="assets/img/avatars/jenna.png" alt="">
                        <div class="message-block">
                            <span>8:17am</span>
                            <div class="message-text">Great to hear it. Just send me the PSD files so i can have a look at
                                it.</div>
                        </div>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="" data-demo-src="assets/img/avatars/jenna.png" alt="">
                        <div class="message-block">
                            <span>8:18am</span>
                            <div class="message-text">And if you have a prototype, you can also send me the link to it.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Conversation with Stella -->
                <div id="stella-conversation" class="chat-body-inner has-slimscroll is-hidden">
                    <div class="date-divider">
                        <hr class="date-divider-line">
                        <span class="date-divider-text">Today</span>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="" data-demo-src="assets/img/avatars/jenna.png" alt="">
                        <div class="message-block">
                            <span>10:34am</span>
                            <div class="message-text">Hey Stella! Aren't we supposed to go the theatre after work?.</div>
                        </div>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="" data-demo-src="assets/img/avatars/jenna.png" alt="">
                        <div class="message-block">
                            <span>10:37am</span>
                            <div class="message-text">Just remembered it.</div>
                        </div>
                    </div>

                    <div class="chat-message is-received">
                        <img src="" data-demo-src="assets/img/avatars/stella.jpg" alt="">
                        <div class="message-block">
                            <span>11:22am</span>
                            <div class="message-text">Yeah you always do that, forget about everything.</div>
                        </div>
                    </div>
                </div>
                <!-- Conversation with Daniel -->
                <div id="daniel-conversation" class="chat-body-inner has-slimscroll is-hidden">
                    <div class="date-divider">
                        <hr class="date-divider-line">
                        <span class="date-divider-text">Yesterday</span>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="" data-demo-src="assets/img/avatars/jenna.png" alt="">
                        <div class="message-block">
                            <span>3:24pm</span>
                            <div class="message-text">Daniel, Amanda told me about your issue, how can I help?</div>
                        </div>
                    </div>

                    <div class="chat-message is-received">
                        <img src="" data-demo-src="assets/img/avatars/daniel.jpg" alt="">
                        <div class="message-block">
                            <span>3:42pm</span>
                            <div class="message-text">Hey Jenna, thanks for answering so quickly. Iam stuck, i need a car.
                            </div>
                        </div>
                    </div>

                    <div class="chat-message is-received">
                        <img src="" data-demo-src="assets/img/avatars/daniel.jpg" alt="">
                        <div class="message-block">
                            <span>3:43pm</span>
                            <div class="message-text">Can i borrow your car for a quick ride to San Fransisco? Iam running
                                behind and
                                there' no train in sight.</div>
                        </div>
                    </div>
                </div>
                <!-- Conversation with David -->
                <div id="david-conversation" class="chat-body-inner has-slimscroll is-hidden">
                    <div class="date-divider">
                        <hr class="date-divider-line">
                        <span class="date-divider-text">Today</span>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="" data-demo-src="assets/img/avatars/jenna.png" alt="">
                        <div class="message-block">
                            <span>12:34pm</span>
                            <div class="message-text">Damn you! Why would you even implement this in the game?.</div>
                        </div>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="" data-demo-src="assets/img/avatars/jenna.png" alt="">
                        <div class="message-block">
                            <span>12:32pm</span>
                            <div class="message-text">I just HATE aliens.</div>
                        </div>
                    </div>

                    <div class="chat-message is-received">
                        <img src="" data-demo-src="assets/img/avatars/david.jpg" alt="">
                        <div class="message-block">
                            <span>13:09pm</span>
                            <div class="message-text">C'mon, you just gotta learn the tricks. You can't expect aliens to
                                behave like
                                humans. I mean that's how the mechanics are.</div>
                        </div>
                    </div>
                    <div class="chat-message is-received">
                        <img src="" data-demo-src="assets/img/avatars/david.jpg" alt="">
                        <div class="message-block">
                            <span>13:11pm</span>
                            <div class="message-text">I checked the replay and for example, you always get supply blocked.
                                That's not
                                the right thing to do.</div>
                        </div>
                    </div>
                    <div class="chat-message is-sent">
                        <img src="" data-demo-src="assets/img/avatars/jenna.png" alt="">
                        <div class="message-block">
                            <span>13:12pm</span>
                            <div class="message-text">I know but i struggle when i have to decide what to make from
                                larvas.</div>
                        </div>
                    </div>
                    <div class="chat-message is-received">
                        <img src="" data-demo-src="assets/img/avatars/david.jpg" alt="">
                        <div class="message-block">
                            <span>13:17pm</span>
                            <div class="message-text">Join me in game, i'll show you.</div>
                        </div>
                    </div>
                </div>
                <!-- Conversation with Edward -->
                <div id="edward-conversation" class="chat-body-inner has-slimscroll">
                    <div class="date-divider">
                        <hr class="date-divider-line">
                        <span class="date-divider-text">Monday</span>
                    </div>

                    <div class="chat-message is-received">
                        <img src="" data-demo-src="assets/img/avatars/edward.jpeg" alt="">
                        <div class="message-block">
                            <span>4:55pm</span>
                            <div class="message-text">Hey Jenna, what's up?</div>
                        </div>
                    </div>

                    <div class="chat-message is-received">
                        <img src="" data-demo-src="assets/img/avatars/edward.jpeg" alt="">
                        <div class="message-block">
                            <span>4:56pm</span>
                            <div class="message-text">Iam coming to LA tomorrow. Interested in having lunch?</div>
                        </div>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="" data-demo-src="assets/img/avatars/jenna.png" alt="">
                        <div class="message-block">
                            <span>5:21pm</span>
                            <div class="message-text">Hey mate, it's been a while. Sure I would love to.</div>
                        </div>
                    </div>

                    <div class="chat-message is-received">
                        <img src="" data-demo-src="assets/img/avatars/edward.jpeg" alt="">
                        <div class="message-block">
                            <span>5:27pm</span>
                            <div class="message-text">Ok. Let's say i pick you up at 12:30 at work, works?</div>
                        </div>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="" data-demo-src="assets/img/avatars/jenna.png" alt="">
                        <div class="message-block">
                            <span>5:43pm</span>
                            <div class="message-text">Yup, that works great.</div>
                        </div>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="" data-demo-src="assets/img/avatars/jenna.png" alt="">
                        <div class="message-block">
                            <span>5:44pm</span>
                            <div class="message-text">And yeah, don't forget to bring some of my favourite cheese cake.
                            </div>
                        </div>
                    </div>

                    <div class="chat-message is-received">
                        <img src="" data-demo-src="assets/img/avatars/edward.jpeg" alt="">
                        <div class="message-block">
                            <span>5:27pm</span>
                            <div class="message-text">No worries</div>
                        </div>
                    </div>
                </div>
                <!-- Conversation with Edward -->
                <div id="elise-conversation" class="chat-body-inner has-slimscroll is-hidden">
                    <div class="date-divider">
                        <hr class="date-divider-line">
                        <span class="date-divider-text">September 28</span>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="" data-demo-src="assets/img/avatars/jenna.png" alt="">
                        <div class="message-block">
                            <span>11:53am</span>
                            <div class="message-text">Elise, i forgot my folder at your place yesterday.</div>
                        </div>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="" data-demo-src="assets/img/avatars/jenna.png" alt="">
                        <div class="message-block">
                            <span>11:53am</span>
                            <div class="message-text">I need it badly, it's work stuff.</div>
                        </div>
                    </div>

                    <div class="chat-message is-received">
                        <img src="" data-demo-src="assets/img/avatars/elise.jpg" alt="">
                        <div class="message-block">
                            <span>12:19pm</span>
                            <div class="message-text">Yeah i noticed. I'll drop it in half an hour at your office.</div>
                        </div>
                    </div>
                </div>
                <!-- Conversation with Nelly -->
                <div id="nelly-conversation" class="chat-body-inner has-slimscroll is-hidden">
                    <div class="date-divider">
                        <hr class="date-divider-line">
                        <span class="date-divider-text">September 17</span>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="" data-demo-src="assets/img/avatars/jenna.png" alt="">
                        <div class="message-block">
                            <span>8:22pm</span>
                            <div class="message-text">So you watched the movie?</div>
                        </div>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="" data-demo-src="assets/img/avatars/jenna.png" alt="">
                        <div class="message-block">
                            <span>8:22pm</span>
                            <div class="message-text">Was it scary?</div>
                        </div>
                    </div>

                    <div class="chat-message is-received">
                        <img src="" data-demo-src="assets/img/avatars/nelly.png" alt="">
                        <div class="message-block">
                            <span>9:03pm</span>
                            <div class="message-text">It was so frightening, i felt my heart was about to blow inside my
                                chest.</div>
                        </div>
                    </div>
                </div>
                <!-- Conversation with Milly -->
                <div id="milly-conversation" class="chat-body-inner has-slimscroll">
                    <div class="date-divider">
                        <hr class="date-divider-line">
                        <span class="date-divider-text">Today</span>
                    </div>

                    <div class="chat-message is-received">
                        <img src="" data-demo-src="assets/img/avatars/milly.jpg" alt="">
                        <div class="message-block">
                            <span>2:01pm</span>
                            <div class="message-text">Hello Jenna, did you read my proposal?</div>
                        </div>
                    </div>

                    <div class="chat-message is-received">
                        <img src="" data-demo-src="assets/img/avatars/milly.jpg" alt="">
                        <div class="message-block">
                            <span>2:01pm</span>
                            <div class="message-text">Didn't hear from you since i sent it.</div>
                        </div>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="" data-demo-src="assets/img/avatars/jenna.png" alt="">
                        <div class="message-block">
                            <span>2:02pm</span>
                            <div class="message-text">Hello Milly, Iam really sorry, Iam so busy recently, but i had the
                                time to read
                                it.</div>
                        </div>
                    </div>

                    <div class="chat-message is-received">
                        <img src="" data-demo-src="assets/img/avatars/milly.jpg" alt="">
                        <div class="message-block">
                            <span>2:04pm</span>
                            <div class="message-text">And what did you think about it?</div>
                        </div>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="" data-demo-src="assets/img/avatars/jenna.png" alt="">
                        <div class="message-block">
                            <span>2:05pm</span>
                            <div class="message-text">Actually it's quite good, there might be some small changes but
                                overall it's
                                great.</div>
                        </div>
                    </div>

                    <div class="chat-message is-sent">
                        <img src="" data-demo-src="assets/img/avatars/jenna.png" alt="">
                        <div class="message-block">
                            <span>2:07pm</span>
                            <div class="message-text">I think that i can give it to my boss at this stage.</div>
                        </div>
                    </div>

                    <div class="chat-message is-received">
                        <img src="" data-demo-src="assets/img/avatars/milly.jpg" alt="">
                        <div class="message-block">
                            <span>2:09pm</span>
                            <div class="message-text">Crossing fingers then</div>
                        </div>
                    </div>
                </div>
                <!-- Compose message area -->
                <div class="chat-action">
                    <div class="chat-action-inner">
                        <div class="control">
                            <textarea class="textarea comment-textarea" rows="1"></textarea>
                            <div class="dropdown compose-dropdown is-spaced is-accent is-up dropdown-trigger">
                                <div>
                                    <div class="add-button">
                                        <div class="button-inner">
                                            <i data-feather="plus"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-menu" role="menu">
                                    <div class="dropdown-content">
                                        <a href="#" class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="code"></i>
                                                <div class="media-content">
                                                    <h3>Code snippet</h3>
                                                    <small>Add and paste a code snippet.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="file-text"></i>
                                                <div class="media-content">
                                                    <h3>Note</h3>
                                                    <small>Add and paste a note.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <hr class="dropdown-divider">
                                        <a class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="server"></i>
                                                <div class="media-content">
                                                    <h3>Remote file</h3>
                                                    <small>Add a file from a remote drive.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="monitor"></i>
                                                <div class="media-content">
                                                    <h3>Local file</h3>
                                                    <small>Add a file from your computer.</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div id="chat-panel" class="chat-panel is-opened">
                <div class="panel-inner">
                    <div class="panel-header">
                        <h3>Details</h3>
                        <div class="panel-close">
                            <i data-feather="x"></i>
                        </div>
                    </div>

                    <!-- Dan details -->
                    <div id="dan-details" class="panel-body is-user-details">
                        <div class="panel-body-inner">

                            <div class="subheader">
                                <div class="action-icon">
                                    <i class="mdi mdi-video"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-camera"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-microphone"></i>
                                </div>
                                <div
                                    class="dropdown details-dropdown is-spaced is-neutral is-right dropdown-trigger ml-auto">
                                    <div>
                                        <div class="action-icon">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="user"></i>
                                                    <div class="media-content">
                                                        <h3>View profile</h3>
                                                        <small>View this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="mail"></i>
                                                    <div class="media-content">
                                                        <h3>Send message</h3>
                                                        <small>Send a message to the user's inbox.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="share-2"></i>
                                                    <div class="media-content">
                                                        <h3>Share profile</h3>
                                                        <small>Share this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="x"></i>
                                                    <div class="media-content">
                                                        <h3>Block user</h3>
                                                        <small>Block this user permanently.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="details-avatar">
                                <img src="" data-demo-src="assets/img/avatars/dan.jpg" alt="">
                                <div class="call-me">
                                    <i class="mdi mdi-phone"></i>
                                </div>
                            </div>

                            <div class="user-meta has-text-centered">
                                <h3>Dan Walker</h3>
                                <h4>IOS Developer</h4>
                            </div>

                            <div class="user-badges">
                                <div class="hexagon is-red">
                                    <div>
                                        <i class="mdi mdi-heart"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-green">
                                    <div>
                                        <i class="mdi mdi-dog"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-accent">
                                    <div>
                                        <i class="mdi mdi-flash"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-blue">
                                    <div>
                                        <i class="mdi mdi-briefcase"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="user-about">
                                <label>About Me</label>
                                <div class="about-block">
                                    <i class="mdi mdi-domain"></i>
                                    <div class="about-text">
                                        <span>Works at</span>
                                        <span><a class="is-inverted" href="#">WebSmash Inc.</a></span>
                                    </div>
                                </div>
                                <div class="about-block">
                                    <i class="mdi mdi-school"></i>
                                    <div class="about-text">
                                        <span>Studied at</span>
                                        <span><a class="is-inverted" href="#">Riverdale University</a></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Stella details -->
                    <div id="stella-details" class="panel-body is-user-details is-hidden">
                        <div class="panel-body-inner">

                            <div class="subheader">
                                <div class="action-icon">
                                    <i class="mdi mdi-video"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-camera"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-microphone"></i>
                                </div>
                                <div
                                    class="dropdown details-dropdown is-spaced is-neutral is-right dropdown-trigger ml-auto">
                                    <div>
                                        <div class="action-icon">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="user"></i>
                                                    <div class="media-content">
                                                        <h3>View profile</h3>
                                                        <small>View this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="mail"></i>
                                                    <div class="media-content">
                                                        <h3>Send message</h3>
                                                        <small>Send a message to the user's inbox.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="share-2"></i>
                                                    <div class="media-content">
                                                        <h3>Share profile</h3>
                                                        <small>Share this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="x"></i>
                                                    <div class="media-content">
                                                        <h3>Block user</h3>
                                                        <small>Block this user permanently.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="details-avatar">
                                <img src="" data-demo-src="assets/img/avatars/stella.jpg" alt="">
                                <div class="call-me">
                                    <i class="mdi mdi-phone"></i>
                                </div>
                            </div>

                            <div class="user-meta has-text-centered">
                                <h3>Stella Bergmann</h3>
                                <h4>Shop Owner</h4>
                            </div>

                            <div class="user-badges">
                                <div class="hexagon is-purple">
                                    <div>
                                        <i class="mdi mdi-bomb"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-red">
                                    <div>
                                        <i class="mdi mdi-check-decagram"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-accent">
                                    <div>
                                        <i class="mdi mdi-flash"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="user-about">
                                <label>About Me</label>
                                <div class="about-block">
                                    <i class="mdi mdi-domain"></i>
                                    <div class="about-text">
                                        <span>Works at</span>
                                        <span><a class="is-inverted" href="#">Trending Fashions</a></span>
                                    </div>
                                </div>
                                <div class="about-block">
                                    <i class="mdi mdi-map-marker"></i>
                                    <div class="about-text">
                                        <span>From</span>
                                        <span><a class="is-inverted" href="#">Oklahoma City</a></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Daniel details -->
                    <div id="daniel-details" class="panel-body is-user-details is-hidden">
                        <div class="panel-body-inner">

                            <div class="subheader">
                                <div class="action-icon">
                                    <i class="mdi mdi-video"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-camera"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-microphone"></i>
                                </div>
                                <div
                                    class="dropdown details-dropdown is-spaced is-neutral is-right dropdown-trigger ml-auto">
                                    <div>
                                        <div class="action-icon">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="user"></i>
                                                    <div class="media-content">
                                                        <h3>View profile</h3>
                                                        <small>View this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="mail"></i>
                                                    <div class="media-content">
                                                        <h3>Send message</h3>
                                                        <small>Send a message to the user's inbox.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="share-2"></i>
                                                    <div class="media-content">
                                                        <h3>Share profile</h3>
                                                        <small>Share this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="x"></i>
                                                    <div class="media-content">
                                                        <h3>Block user</h3>
                                                        <small>Block this user permanently.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="details-avatar">
                                <img src="" data-demo-src="assets/img/avatars/daniel.jpg" alt="">
                                <div class="call-me">
                                    <i class="mdi mdi-phone"></i>
                                </div>
                            </div>

                            <div class="user-meta has-text-centered">
                                <h3>Daniel Wellington</h3>
                                <h4>Senior Executive</h4>
                            </div>

                            <div class="user-badges">
                                <div class="hexagon is-accent">
                                    <div>
                                        <i class="mdi mdi-google-cardboard"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-blue">
                                    <div>
                                        <i class="mdi mdi-pizza"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-accent">
                                    <div>
                                        <i class="mdi mdi-linux"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-red">
                                    <div>
                                        <i class="mdi mdi-puzzle"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="user-about">
                                <label>About Me</label>
                                <div class="about-block">
                                    <i class="mdi mdi-domain"></i>
                                    <div class="about-text">
                                        <span>Works at</span>
                                        <span><a class="is-inverted" href="#">Peelman & Sons</a></span>
                                    </div>
                                </div>
                                <div class="about-block">
                                    <i class="mdi mdi-map-marker"></i>
                                    <div class="about-text">
                                        <span>From</span>
                                        <span><a class="is-inverted" href="#">Los Angeles</a></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- David details -->
                    <div id="david-details" class="panel-body is-user-details is-hidden">
                        <div class="panel-body-inner">

                            <div class="subheader">
                                <div class="action-icon">
                                    <i class="mdi mdi-video"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-camera"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-microphone"></i>
                                </div>
                                <div
                                    class="dropdown details-dropdown is-spaced is-neutral is-right dropdown-trigger ml-auto">
                                    <div>
                                        <div class="action-icon">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="user"></i>
                                                    <div class="media-content">
                                                        <h3>View profile</h3>
                                                        <small>View this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="mail"></i>
                                                    <div class="media-content">
                                                        <h3>Send message</h3>
                                                        <small>Send a message to the user's inbox.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="share-2"></i>
                                                    <div class="media-content">
                                                        <h3>Share profile</h3>
                                                        <small>Share this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="x"></i>
                                                    <div class="media-content">
                                                        <h3>Block user</h3>
                                                        <small>Block this user permanently.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="details-avatar">
                                <img src="" data-demo-src="assets/img/avatars/david.jpg" alt="">
                                <div class="call-me">
                                    <i class="mdi mdi-phone"></i>
                                </div>
                            </div>

                            <div class="user-meta has-text-centered">
                                <h3>David Kim</h3>
                                <h4>Senior Developer</h4>
                            </div>

                            <div class="user-badges">
                                <div class="hexagon is-red">
                                    <div>
                                        <i class="mdi mdi-heart"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-green">
                                    <div>
                                        <i class="mdi mdi-dog"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-accent">
                                    <div>
                                        <i class="mdi mdi-flash"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-blue">
                                    <div>
                                        <i class="mdi mdi-briefcase"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="user-about">
                                <label>About Me</label>
                                <div class="about-block">
                                    <i class="mdi mdi-domain"></i>
                                    <div class="about-text">
                                        <span>Works at</span>
                                        <span><a class="is-inverted" href="#">Frost Entertainment</a></span>
                                    </div>
                                </div>
                                <div class="about-block">
                                    <i class="mdi mdi-map-marker"></i>
                                    <div class="about-text">
                                        <span>From</span>
                                        <span><a class="is-inverted" href="#">Chicago</a></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Edward details -->
                    <div id="edward-details" class="panel-body is-user-details is-hidden">
                        <div class="panel-body-inner">

                            <div class="subheader">
                                <div class="action-icon">
                                    <i class="mdi mdi-video"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-camera"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-microphone"></i>
                                </div>
                                <div
                                    class="dropdown details-dropdown is-spaced is-neutral is-right dropdown-trigger ml-auto">
                                    <div>
                                        <div class="action-icon">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="user"></i>
                                                    <div class="media-content">
                                                        <h3>View profile</h3>
                                                        <small>View this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="mail"></i>
                                                    <div class="media-content">
                                                        <h3>Send message</h3>
                                                        <small>Send a message to the user's inbox.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="share-2"></i>
                                                    <div class="media-content">
                                                        <h3>Share profile</h3>
                                                        <small>Share this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="x"></i>
                                                    <div class="media-content">
                                                        <h3>Block user</h3>
                                                        <small>Block this user permanently.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="details-avatar">
                                <img src="" data-demo-src="assets/img/avatars/edward.jpeg" alt="">
                                <div class="call-me">
                                    <i class="mdi mdi-phone"></i>
                                </div>
                            </div>

                            <div class="user-meta has-text-centered">
                                <h3>Edward Mayers</h3>
                                <h4>Financial analyst</h4>
                            </div>

                            <div class="user-badges">
                                <div class="hexagon is-red">
                                    <div>
                                        <i class="mdi mdi-heart"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-green">
                                    <div>
                                        <i class="mdi mdi-dog"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-accent">
                                    <div>
                                        <i class="mdi mdi-flash"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="user-about">
                                <label>About Me</label>
                                <div class="about-block">
                                    <i class="mdi mdi-domain"></i>
                                    <div class="about-text">
                                        <span>Works at</span>
                                        <span><a class="is-inverted" href="#">Brettmann Bank</a></span>
                                    </div>
                                </div>
                                <div class="about-block">
                                    <i class="mdi mdi-map-marker"></i>
                                    <div class="about-text">
                                        <span>From</span>
                                        <span><a class="is-inverted" href="#">Santa Fe</a></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Elise details -->
                    <div id="elise-details" class="panel-body is-user-details is-hidden">
                        <div class="panel-body-inner">

                            <div class="subheader">
                                <div class="action-icon">
                                    <i class="mdi mdi-video"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-camera"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-microphone"></i>
                                </div>
                                <div
                                    class="dropdown details-dropdown is-spaced is-neutral is-right dropdown-trigger ml-auto">
                                    <div>
                                        <div class="action-icon">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="user"></i>
                                                    <div class="media-content">
                                                        <h3>View profile</h3>
                                                        <small>View this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="mail"></i>
                                                    <div class="media-content">
                                                        <h3>Send message</h3>
                                                        <small>Send a message to the user's inbox.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="share-2"></i>
                                                    <div class="media-content">
                                                        <h3>Share profile</h3>
                                                        <small>Share this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="x"></i>
                                                    <div class="media-content">
                                                        <h3>Block user</h3>
                                                        <small>Block this user permanently.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="details-avatar">
                                <img src="" data-demo-src="assets/img/avatars/elise.jpg" alt="">
                                <div class="call-me">
                                    <i class="mdi mdi-phone"></i>
                                </div>
                            </div>

                            <div class="user-meta has-text-centered">
                                <h3>Elise Walker</h3>
                                <h4>Social influencer</h4>
                            </div>

                            <div class="user-badges">
                                <div class="hexagon is-red">
                                    <div>
                                        <i class="mdi mdi-heart"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-accent">
                                    <div>
                                        <i class="mdi mdi-flash"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="user-about">
                                <label>About Me</label>
                                <div class="about-block">
                                    <i class="mdi mdi-domain"></i>
                                    <div class="about-text">
                                        <span>Works at</span>
                                        <span><a class="is-inverted" href="#">Social Media</a></span>
                                    </div>
                                </div>
                                <div class="about-block">
                                    <i class="mdi mdi-map-marker"></i>
                                    <div class="about-text">
                                        <span>From</span>
                                        <span><a class="is-inverted" href="#">London</a></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Nelly details -->
                    <div id="nelly-details" class="panel-body is-user-details is-hidden">
                        <div class="panel-body-inner">

                            <div class="subheader">
                                <div class="action-icon">
                                    <i class="mdi mdi-video"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-camera"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-microphone"></i>
                                </div>
                                <div
                                    class="dropdown details-dropdown is-spaced is-neutral is-right dropdown-trigger ml-auto">
                                    <div>
                                        <div class="action-icon">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="user"></i>
                                                    <div class="media-content">
                                                        <h3>View profile</h3>
                                                        <small>View this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="mail"></i>
                                                    <div class="media-content">
                                                        <h3>Send message</h3>
                                                        <small>Send a message to the user's inbox.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="share-2"></i>
                                                    <div class="media-content">
                                                        <h3>Share profile</h3>
                                                        <small>Share this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="x"></i>
                                                    <div class="media-content">
                                                        <h3>Block user</h3>
                                                        <small>Block this user permanently.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="details-avatar">
                                <img src="" data-demo-src="assets/img/avatars/nelly.png" alt="">
                                <div class="call-me">
                                    <i class="mdi mdi-phone"></i>
                                </div>
                            </div>

                            <div class="user-meta has-text-centered">
                                <h3>Nelly Schwartz</h3>
                                <h4>HR Manager</h4>
                            </div>

                            <div class="user-badges">
                                <div class="hexagon is-red">
                                    <div>
                                        <i class="mdi mdi-heart"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-green">
                                    <div>
                                        <i class="mdi mdi-dog"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-accent">
                                    <div>
                                        <i class="mdi mdi-flash"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-blue">
                                    <div>
                                        <i class="mdi mdi-briefcase"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="user-about">
                                <label>About Me</label>
                                <div class="about-block">
                                    <i class="mdi mdi-domain"></i>
                                    <div class="about-text">
                                        <span>Works at</span>
                                        <span><a class="is-inverted" href="#">Carrefour</a></span>
                                    </div>
                                </div>
                                <div class="about-block">
                                    <i class="mdi mdi-map-marker"></i>
                                    <div class="about-text">
                                        <span>From</span>
                                        <span><a class="is-inverted" href="#">Melbourne</a></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Milly details -->
                    <div id="milly-details" class="panel-body is-user-details is-hidden">
                        <div class="panel-body-inner">

                            <div class="subheader">
                                <div class="action-icon">
                                    <i class="mdi mdi-video"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-camera"></i>
                                </div>
                                <div class="action-icon">
                                    <i class="mdi mdi-microphone"></i>
                                </div>
                                <div
                                    class="dropdown details-dropdown is-spaced is-neutral is-right dropdown-trigger ml-auto">
                                    <div>
                                        <div class="action-icon">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="user"></i>
                                                    <div class="media-content">
                                                        <h3>View profile</h3>
                                                        <small>View this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="mail"></i>
                                                    <div class="media-content">
                                                        <h3>Send message</h3>
                                                        <small>Send a message to the user's inbox.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="share-2"></i>
                                                    <div class="media-content">
                                                        <h3>Share profile</h3>
                                                        <small>Share this user's profile.</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item">
                                                <div class="media">
                                                    <i data-feather="x"></i>
                                                    <div class="media-content">
                                                        <h3>Block user</h3>
                                                        <small>Block this user permanently.</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="details-avatar">
                                <img src="" data-demo-src="assets/img/avatars/milly.jpg" alt="">
                                <div class="call-me">
                                    <i class="mdi mdi-phone"></i>
                                </div>
                            </div>

                            <div class="user-meta has-text-centered">
                                <h3>Milly Augustine</h3>
                                <h4>Sales Manager</h4>
                            </div>

                            <div class="user-badges">
                                <div class="hexagon is-red">
                                    <div>
                                        <i class="mdi mdi-heart"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-green">
                                    <div>
                                        <i class="mdi mdi-dog"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-accent">
                                    <div>
                                        <i class="mdi mdi-flash"></i>
                                    </div>
                                </div>
                                <div class="hexagon is-blue">
                                    <div>
                                        <i class="mdi mdi-briefcase"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="user-about">
                                <label>About Me</label>
                                <div class="about-block">
                                    <i class="mdi mdi-domain"></i>
                                    <div class="about-text">
                                        <span>Works at</span>
                                        <span><a class="is-inverted" href="#">Salesforce</a></span>
                                    </div>
                                </div>
                                <div class="about-block">
                                    <i class="mdi mdi-map-marker"></i>
                                    <div class="about-text">
                                        <span>From</span>
                                        <span><a class="is-inverted" href="#">Seattle</a></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="add-conversation-modal" class="modal add-conversation-modal is-xsmall has-light-bg">
        <div class="modal-background"></div>
        <div class="modal-content">

            <div class="card">
                <div class="card-heading">
                    <h3>New Conversation</h3>
                    <!-- Close X button -->
                    <div class="close-wrap">
                        <span class="close-modal">
                            <i data-feather="x"></i>
                        </span>
                    </div>
                </div>
                <div class="card-body">

                    <img src="assets/img/icons/chat/bubbles.svg" alt="">

                    <div class="field is-autocomplete">
                        <div class="control has-icon">
                            <input type="text" class="input simple-users-autocpl" placeholder="Search a user">
                            <div class="form-icon">
                                <i data-feather="search"></i>
                            </div>
                        </div>
                    </div>

                    <div class="help-text">
                        Select a user to start a new conversation. You'll be able to add other users later.
                    </div>

                    <div class="action has-text-centered">
                        <button type="button" class="button is-solid accent-button raised">Start conversation</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="explorer-menu">
        <div class="explorer-inner">
            <div class="explorer-container">
                <!--Header-->
                <div class="explorer-header">
                    <h3>Explore</h3>
                    <div class="control">
                        <input type="text" class="input is-rounded is-fade" placeholder="Filter">
                        <div class="form-icon">
                            <i data-feather="filter"></i>
                        </div>
                    </div>
                </div>
                <!--List-->
                <div class="explore-list has-slimscroll">
                    <!--item-->
                    <a href="#" class="explore-item">
                        <img src="assets/img/icons/explore/clover.svg" alt="">
                        <h4>Feed</h4>
                    </a>
                    <!--item-->
                    <a href="#" class="explore-item">
                        <img src="assets/img/icons/explore/friends.svg" alt="">
                        <h4>Friends</h4>
                    </a>
                    <!--item-->
                    <a href="#" class="explore-item">
                        <img src="assets/img/icons/explore/videos.svg" alt="">
                        <h4>Videos</h4>
                    </a>
                    <!--item-->
                    <a href="#" class="explore-item">
                        <img src="assets/img/icons/explore/tag-euro.svg" alt="">
                        <h4>Pages</h4>
                    </a>
                    <!--item-->
                    <a href="#" class="explore-item">
                        <img src="assets/img/icons/explore/cart.svg" alt="">
                        <h4>Commerce</h4>
                    </a>
                    <!--item-->
                    <a href="#" class="explore-item">
                        <img src="assets/img/icons/explore/house.svg" alt="">
                        <h4>Interests</h4>
                    </a>
                    <!--item-->
                    <a href="#" class="explore-item">
                        <img src="assets/img/icons/explore/chrono.svg" alt="">
                        <h4>Stories</h4>
                    </a>
                    <!--item-->
                    <a href="#" class="explore-item">
                        <img src="assets/img/icons/explore/question.svg" alt="">
                        <h4>Questions</h4>
                    </a>
                    <!--item-->
                    <a href="#" class="explore-item">
                        <img src="assets/img/icons/explore/news.svg" alt="">
                        <h4>News</h4>
                    </a>
                    <!--item-->
                    <a href="#" class="explore-item">
                        <img src="assets/img/icons/explore/cake.svg" alt="">
                        <h4>Groups</h4>
                    </a>
                    <!--item-->
                    <a href="#" class="explore-item">
                        <img src="assets/img/icons/explore/envato.svg" alt="">
                        <h4>Envato</h4>
                    </a>
                    <!--item-->
                    <a href="#" class="explore-item">
                        <img src="assets/img/icons/explore/calendar.svg" alt="">
                        <h4>Events</h4>
                    </a>
                    <!--item-->
                    <a href="#" target="_blank" class="explore-item">
                        <img src="assets/img/icons/explore/pin.svg" alt="">
                        <h4>Location</h4>
                    </a>
                    <!--item-->
                    <a href="#" class="explore-item">
                        <img src="assets/img/icons/explore/idea.svg" alt="">
                        <h4>Elements</h4>
                    </a>
                    <!--item-->
                    <a href="#" class="explore-item">
                        <img src="assets/img/icons/explore/settings.svg" alt="">
                        <h4>Settings</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="end-tour-modal" class="modal end-tour-modal is-xsmall has-light-bg">
        <div class="modal-background"></div>
        <div class="modal-content">

            <div class="card">
                <div class="card-heading">
                    <h3></h3>
                    <!-- Close X button -->
                    <div class="close-wrap">
                        <span class="close-modal">
                            <i data-feather="x"></i>
                        </span>
                    </div>
                </div>
                <div class="card-body has-text-centered">

                    <div class="image-wrap">
                        <img src="assets/img/logo/friendkit.svg" alt="">
                    </div>

                    <h3>That's all folks!</h3>
                    <p>Thanks for taking the zhivago tour. There are still tons of other features for you to discover!</p>

                    <div class="action">
                        <a href="/#demos-section" class="button is-solid accent-button raised is-fullwidth">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
