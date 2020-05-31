<script>
    var logo_url="{{asset('resources/website/img/logos/logo-icon.png')}}";
</script>
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper">
            <a class="brand-logo darken-1" href="{{route('all_users')}}">
        

                <span class="logo-text hide-on-med-and-down">{{ __('Dashboard')}}</span>
            </a>
            <a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
    </div>

    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">

        @include('dashboard.menus.admin')

</ul>

</aside>
