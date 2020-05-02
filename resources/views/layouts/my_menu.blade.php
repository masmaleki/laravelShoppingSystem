<div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
    <ul class="nav navbar-nav">
        @foreach($items as $menu_item)
            <li class="{{ (request()->getRequestUri() == "/".app()->getLocale().$menu_item->link()) ? 'active' : '' }}">
                @if($menu_item->children->count())
                        <a href="javascript:;">{{ $menu_item->getTranslatedAttribute('title') }}
                          <i class="fa fa-chevron-down"></i>
                        </a>
                    <ul class="sub-menu">
                        @foreach($menu_item->children as $subItem)
                            <li><a href="/{{app()->getLocale()}}{{ $subItem->link()}}">{{ $subItem->getTranslatedAttribute('title') }}</a></li>
                        @endforeach

                    </ul>
                @else
                    <a  href="/{{app()->getLocale()}}{{ $menu_item->link() }}">{{  $menu_item->getTranslatedAttribute('title') }}</a>
                @endif

            </li>
        @endforeach
       {{--  <li class="has-mega-menu "> <a href="javascript:;">Pages<i class="fa fa-chevron-down"></i></a>
              <ul class="mega-menu">
                  <li> <a href="javascript:;">Pages</a>
                      <ul>
                          <li><a href="about-1.html">About us 1</a></li>
                          <li><a href="about-2.html">About us 2</a></li>
                          <li><a href="faq.html">FAQ</a> </li>
                          <li><a href="project.html">Project <span class="tag-new">New</span></a></li>
                          <li><a href="project-details.html">Project Details <span class="tag-new">New</span></a></li>
                          <li><a href="all-service.html">All Service </a></li>
                          <li><a href="architecture.html">Architecture </a></li>
                          <li><a href="big-projects.html">Big Projects </a></li>
                          <li><a href="construction.html">Construction </a></li>
                          <li><a href="consulting.html">Consulting </a></li>
                          <li><a href="concrete-transport.html">Concrete Transport </a></li>

                      </ul>
                  </li>



              </ul>
          </li>--}}
    </ul>
</div>