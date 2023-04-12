@php
    $isDropdown = isset($isDropdown) ? $isDropdown : false;
@endphp

@if ($isDropdown)
    <li class="sidebar-dropdown">
        <a href="#">
            <i class="fa fa-tachometer-alt"></i>
            <span>Dashboard</span>
            <span class="badge badge-pill badge-warning">New</span>
        </a>
        <div class="sidebar-submenu">
            <ul>
                @foreach ($list as $item)
                    <li>
                        <a href="{{ $item['link'] }}">{{ $item['title'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </li>
@else
    <li>
        <a href="{{ $link }}">
            <i class="fa fa-book"></i>
            <span>{{ $title }}</span>
        </a>
    </li>
@endif
