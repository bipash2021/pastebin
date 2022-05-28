 <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class-->
          
          
          <li class="nav-item">
            <a href="#" class="nav-link">
            
              <p>
              Manage User
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('staff.view')}}" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Staff</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('student.view')}}" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Student</p>
                </a>
              </li>
            </ul>
          </li>
        
        </ul>
      </nav>