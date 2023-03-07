<!-- menu profile quick info -->
<div class="profile clearfix">
    <div class="profile_pic">
      <img src="{{asset(auth()->user()->image)}}" alt="{{ auth()->user()->name }}" class="img-circle profile_img">
    </div>
    <div class="profile_info">
      <span>Welcome,</span>
      <h2>{{ auth()->user()->name }}</h2>
    </div>
  </div>
  <!-- /menu profile quick info -->
  <br />
  <!-- sidebar menu -->
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
      <h3>General</h3>
      <ul class="nav side-menu">

        <li><a href="{{ route('admin.index') }}"><i class="fa fa-home"></i> Dashboard </a></li>

        <li><a><i class="fa fa-edit"></i> Sliders <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="{{ route('slider.index') }}">List Slider</a></li>
                <li><a href="{{ route('slider.create') }}">Create Slider</a></li>
            </ul>
        </li>

        <li><a><i class="fa fa-edit"></i> Deposits <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="{{ route('admin.deposit.index') }}">Request Deposit</a></li>
                <li><a href="{{ route('admin.deposit.trash.index') }}">View Trash</a></li>
                <li><a href="{{ route('admin.deposit.address') }}">Add Deposit Address</a></li>
            </ul>
        </li>


        <li><a><i class="fa fa-edit"></i> Tasks <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="{{ route('admin.task.index') }}">List Tasks</a></li>
                <li><a href="{{ route('admin.task.create') }}">Create Task</a></li>
            </ul>
        </li>


        <li><a><i class="fa fa-edit"></i> Withdraw <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="{{ route('admin.withdraw.index') }}">Request Withdraw</a></li>
            </ul>
        </li>

        <li><a href="{{ route('admin.commission.index') }}"><i class="fa fa-home"></i> Refer Commission </a></li>
        {{-- <li><a><i class="fa fa-edit"></i> Posts <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="">All Post</a></li>
                <li><a href="">Add Post</a></li>
            </ul>
        </li> --}}


      </ul>
    </div>
  </div>
  <!-- /sidebar menu -->
