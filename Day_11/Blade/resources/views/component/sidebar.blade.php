<div class="o-page__sidebar js-page-sidebar">
    <div class="c-sidebar">
        <a class="c-sidebar__brand"> 
            <img class="c-sidebar__brand-img" src="..." alt="Logo" style="width: 50%; margin-left: 15%;"> 
        </a>
        
        <h4 class="c-sidebar__title">Dashboard</h4>
        
        
        
        <ul class="c-sidebar__list">  
            <li class="c-sidebar__item {{ View::getSection('menu') == 'department' ? 'active' : '' }} "  >
                <a class="c-sidebar__link" href="{{ URL::route('department') }}">
                    <i class="fa fa-home u-mr-xsmall"></i>
                    Dashboard
                </a>
            </li>  

            <li class="c-sidebar__item {{ View::getSection('menu') == 'employee' ? 'active' : '' }} " >
                <a class="c-sidebar__link" href="{{ URL::route('employee') }}">
                    <i class="fa fa-home u-mr-xsmall"></i>
                    Employee
                </a>
            </li>  

            <li class="c-sidebar__item {{ View::getSection('menu') == 'leaves' ? 'active' : '' }} ">
                <a class="c-sidebar__link" href="{{ URL::route('leaves') }}">
                    <i class="fa fa-home u-mr-xsmall"></i>
                    Leaves
                </a>
            </li>  
                
            <li class="c-sidebar__item has-submenu">
                <a class="c-sidebar__link" data-toggle="collapse" href="#sidebar-submenu_2" aria-expanded="false" aria-controls="sidebar-submenu_2">
                    <i class="fa fa-flag-checkered u-mr-xsmall"></i> Sub menu
                </a>
                <ul class="c-sidebar__submenu collapse" id="sidebar-submenu_2">
                    <li><a class="c-sidebar__link" href="...">Sub menu 2</a></li> 
                    <li><a class="c-sidebar__link" href="...">Sub menu 1</a></li>                                         
                </ul>
            </li>                                
        </ul>  
    </div> 
</div>  