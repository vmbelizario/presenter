<!-- Sidebar -->
<div class="sidebar" data-active-color="white" data-active-color="purple">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{ url('/') }}" class="simple-text">
                <strong>Stackhub</strong>
            </a>
        </div>
        <ul class="nav">
            <li {!! request()->route()->getName() == 'dashboard' ? 'class="active"' : '' !!}>
                <a href="{{ url('/home') }}">
                    <i class="fa fa-dashboard"></i>
                    <p>Início</p>
                </a>
            </li>
            <li {!! request()->route()->getName() == 'trends.stars' ? 'class="active"' : '' !!}>
                <a href="{{ url('/graphics/stars') }}">
                    <i class="fa fa-star"></i>
                    <p>Top 10 Stared</p>
                </a>
            </li>
            <li {!! request()->route()->getName() == 'trends.forks' ? 'class="active"' : '' !!}>
                <a href="{{ url('/graphics/forks') }}">
                    <i class="fa fa-code-fork"></i>
                    <p>Top 10 Forked</p>
                </a>
            </li>
            <li {!! request()->route()->getName() == 'trends-lang' ? 'class="active"' : '' !!}>
                <a href="{{ url('/graphics/trends-lang') }}">
                    <i class="fa ti-stats-up"></i>
                    <p>learning curve</p>
                </a>
            </li>
            <li {!! request()->route()->getName() == 'learning' ? 'class="active"' : '' !!}>
                <a href="{{ url('/graphics/learning/actionscript') }}">
                    <i class="fa ti-stats-down"></i>
                    <p>learning language</p>
                </a>
            </li>
        </ul>
    </div>
</div>
