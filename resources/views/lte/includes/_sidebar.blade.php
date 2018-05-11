 <ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="treeview">
      <a href="{{route('lte.admin')}}">
        <i class="fa fa-dashboard"></i> <span>Admin Panel</span>
      </a>
    </li>
    <li><a href=""><i class="fa fa-sticky-note-o"></i> <span>Cards</span></a></li>
    <li><a href=""><i class="fa fa-list-ul"></i> <span>Categories</span></a></li>
    <li><a href=""><i class="fa fa-tags"></i> <span>Tags</span></a></li>
    <li>
      <a href="/admin/comments">
        <i class="fa fa-commenting"></i> <span>Comments</span>
        <span class="pull-right-container">
          <small class="label pull-right bg-green">123</small>
        </span>
      </a>
    </li>
    <li><a href="{{ route('lte.users.index') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>
    <li><a href=""><i class="fa fa-user-plus"></i> <span>Подписчики</span></a></li>

</ul>