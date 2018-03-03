<a class="nav-link" href="{{ route('admin.project.index') }}">
    <p><span class="lnr lnr-leaf"></span></p>
    <p>Project</p>
</a>
<a href="{{ route('admin.news.index') }}" class="nav-link">
    <p><span class="lnr lnr-magic-wand"></span></p>
    <p>News</p>
</a>
<a href="{{ route('admin.tag.index') }}" class="nav-link">
    <p><span class="lnr lnr-moon"></span></p>
    <p>Tag</p>
</a>
<a id='logout-link'class="nav-link">
    <p><span class="lnr lnr-chevron-left-circle"></span></p>
    <p>Logout</p>
    <form id='logout-form' action="{{ route('logout') }}" method="POST">
        {{csrf_field()}}
    </form>
</a>