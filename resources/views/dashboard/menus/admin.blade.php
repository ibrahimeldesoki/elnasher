{{--  <li class="bold"><a class="collapsible-header waves-effect waves-cyan" href="javascript:void(0)"><i class="material-icons">security</i>
        <span class="menu-title" data-i18n="">{{ __('Roles') }}</span></a>
    <div class="collapsible-body">
        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
            <li>
                <a class="collapsible-body" href="{{route('all_roles')}}" data-i18n=""><i class="material-icons">list</i>
                    <span> {{ __('Roles') }}</span>
                </a>
            </li>
            <li>
                <a class="collapsible-body" href="{{route('add_role')}}" data-i18n=""><i class="material-icons">add_circle</i>
                    <span> {{ __('Add New Role') }}</span>
                </a>
            </li>

        </ul>
    </div>
</li>  --}}
<li class="bold"><a class="collapsible-header waves-effect waves-cyan" href="javascript:void(0)"><i class="material-icons">people</i>
        <span class="menu-title" data-i18n="">{{ __('Users') }}</span></a>
    <div class="collapsible-body">
        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
            <li>
                <a class="collapsible-body" href="{{route('all_users')}}" data-i18n=""><i class="material-icons">list</i>
                    <span>{{ __('Users') }}</span>
                </a>
            </li>
            <li>
                <a class="collapsible-body" href="{{route('add_user')}}" data-i18n=""><i class="material-icons">add_circle</i><span>{{ __('Add New User') }}</span></a>
            </li>
        </ul>
    </div>
</li>

<!--  -->
<li class="bold"><a class="collapsible-header waves-effect waves-cyan" href="javascript:void(0)">
<i class="fas fa-globe-americas"></i>
        <span class="menu-title" data-i18n="">{{ __('Services') }}</span></a>
    <div class="collapsible-body">
        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
            <li>
                <a class="collapsible-body" href="{{ route('services.index') }}" data-i18n=""><i class="material-icons">list</i>
                    <span> {{ __('Services') }}</span>
                </a>
            </li>
            <li>
                <a class="collapsible-body" href="{{ route('services.create') }}" data-i18n=""><i class="material-icons">add_circle</i>
                    <span> {{ __('Add New Service') }}</span>
                </a>
            </li>
        </ul>
    </div>
</li>




