<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="fa fa-user"></i>  <span class="text">{{Auth::user()->email}}</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="{{ route('logout') }}"
           onclick="event.preventDefault();
           document.getElementById('logout-form').submit();"
           ><i class="icon-key"></i> Log Out</a></li>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               @csrf
           </form>
      </ul>
    </li>
  </ul>
</div>
