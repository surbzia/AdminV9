 <div class="left-side-bar">
     <div class="brand-logo">
         <a href="index.html">
             <img src="{{ asset('templete/vendors/images/deskapp-logo.svg') }}" alt="" class="dark-logo">
             <img src="{{ asset('templete/vendors/images/deskapp-logo-white.svg') }}" alt="" class="light-logo">
         </a>
         <div class="close-sidebar" data-toggle="left-sidebar-close">
             <i class="ion-close-round"></i>
         </div>
     </div>
     <div class="menu-block customscroll">
         <div class="sidebar-menu">
             <ul id="accordion-menu">
                 <li class="dropdown">
                     <a href="javascript:;" class="dropdown-toggle">
                         <span class="micon dw dw-house-1"></span><span class="mtext">User Management</span>
                     </a>
                     <ul class="submenu">
                         <li><a href="{{route('permission.index')}}">Permission</a></li>
                         <li><a href="{{route('role.index')}}">Role</a></li>
                         <li><a href="{{route('user.index')}}">User</a></li>
                     </ul>
                 </li>

                 <li>
                     <a href="calendar.html" class="dropdown-toggle no-arrow">
                         <span class="micon dw dw-calendar1"></span><span class="mtext">Calendar</span>
                     </a>
                 </li>
                 <li class="dropdown">
                     <a href="javascript:;" class="dropdown-toggle">
                         <span class="micon dw dw-apartment"></span><span class="mtext"> UI Elements </span>
                     </a>
                     <ul class="submenu">
                         <li><a href="ui-buttons.html">Buttons</a></li>
                         <li><a href="ui-cards.html">Cards</a></li>
                     </ul>
                 </li>
             </ul>
         </div>
     </div>
 </div>
