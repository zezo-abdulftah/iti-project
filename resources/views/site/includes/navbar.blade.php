<div class="topbar stick">
    <div class="logo">
        <a title="" href="newsfeed.html"><img src="images/logo.png" alt=""></a>
    </div>

    <div class="top-area">






        <ul class="setting-area">
            <li>


                    <form action="{{route('search_friend')}}" type="get" >

                        <input style="padding-left: 9px;height: 30px;border-style: none;border-radius: 16px;background-color: darkgrey" name="search"  placeholder="Search Friend">
                        <button style="height: 30px;border-style: none;border-radius: 16px;background-color: darkgrey" type="submit"><i class="ti-search"></i></button>
                    </form>

            </li>
            <li><a href="{{route('site')}}" title="Home" data-ripple=""><i class="ti-home"></i></a></li>
            <li>
                <a href="#" title="Notification" data-ripple="">
                    <i class="ti-bell"></i><span>20</span>
                </a>
                <div class="dropdowns">
                    <span>4 New Notifications</span>
                    <ul class="drops-menu">
                        <li>
                            <a href="notifications.html" title="">
                                <img src="images/resources/thumb-1.jpg" alt="">
                                <div class="mesg-meta">
                                    <h6>sarah Loren</h6>
                                    <span>Hi, how r u dear ...?</span>
                                    <i>2 min ago</i>
                                </div>
                            </a>
                            <span class="tag green">New</span>
                        </li>
                        <li>
                            <a href="notifications.html" title="">
                                <img src="images/resources/thumb-2.jpg" alt="">
                                <div class="mesg-meta">
                                    <h6>Jhon doe</h6>
                                    <span>Hi, how r u dear ...?</span>
                                    <i>2 min ago</i>
                                </div>
                            </a>
                            <span class="tag red">Reply</span>
                        </li>
                        <li>
                            <a href="notifications.html" title="">
                                <img src="images/resources/thumb-3.jpg" alt="">
                                <div class="mesg-meta">
                                    <h6>Andrew</h6>
                                    <span>Hi, how r u dear ...?</span>
                                    <i>2 min ago</i>
                                </div>
                            </a>
                            <span class="tag blue">Unseen</span>
                        </li>
                        <li>
                            <a href="notifications.html" title="">
                                <img src="images/resources/thumb-4.jpg" alt="">
                                <div class="mesg-meta">
                                    <h6>Tom cruse</h6>
                                    <span>Hi, how r u dear ...?</span>
                                    <i>2 min ago</i>
                                </div>
                            </a>
                            <span class="tag">New</span>
                        </li>
                        <li>
                            <a href="notifications.html" title="">
                                <img src="images/resources/thumb-5.jpg" alt="">
                                <div class="mesg-meta">
                                    <h6>Amy</h6>
                                    <span>Hi, how r u dear ...?</span>
                                    <i>2 min ago</i>
                                </div>
                            </a>
                            <span class="tag">New</span>
                        </li>
                    </ul>
                    <a href="notifications.html" title="" class="more-mesg">view more</a>
                </div>
            </li>
            <li>
                <a href="#" title="Messages" data-ripple=""><i class="ti-comment"></i><span>12</span></a>
                <div class="dropdowns">
                    <span>5 New Messages</span>
                    <ul class="drops-menu ">
                        <li>
                            <a href="notifications.html" title="">
                                <img src="images/resources/thumb-1.jpg" alt="">
                                <div class="mesg-meta">
                                    <h6>sarah Loren</h6>
                                    <span>Hi, how r u dear ...?</span>
                                    <i>2 min ago</i>
                                </div>
                            </a>
                            <span class="tag green">New</span>
                        </li>
                        <li>
                            <a href="notifications.html" title="">
                                <img src="images/resources/thumb-2.jpg" alt="">
                                <div class="mesg-meta">
                                    <h6>Jhon doe</h6>
                                    <span>Hi, how r u dear ...?</span>
                                    <i>2 min ago</i>
                                </div>
                            </a>
                            <span class="tag red">Reply</span>
                        </li>
                        <li>
                            <a href="notifications.html" title="">
                                <img src="images/resources/thumb-3.jpg" alt="">
                                <div class="mesg-meta">
                                    <h6>Andrew</h6>
                                    <span>Hi, how r u dear ...?</span>
                                    <i>2 min ago</i>
                                </div>
                            </a>
                            <span class="tag blue">Unseen</span>
                        </li>
                        <li>
                            <a href="notifications.html" title="">
                                <img src="images/resources/thumb-4.jpg" alt="">
                                <div class="mesg-meta">
                                    <h6>Tom cruse</h6>
                                    <span>Hi, how r u dear ...?</span>
                                    <i>2 min ago</i>
                                </div>
                            </a>
                            <span class="tag">New</span>
                        </li>
                        <li>
                            <a href="notifications.html" title="">
                                <img src="images/resources/thumb-5.jpg" alt="">
                                <div class="mesg-meta">
                                    <h6>Amy</h6>
                                    <span>Hi, how r u dear ...?</span>
                                    <i>2 min ago</i>
                                </div>
                            </a>
                            <span class="tag">New</span>
                        </li>
                    </ul>
                    <a href="messages.html" title="" class="more-mesg">view more</a>
                </div>
            </li>
            <li><a href="#" title="Languages" data-ripple=""><i class="fa fa-globe"></i></a>
                <div class="dropdowns languages">
                    <a href="#" title=""><i class="ti-check"></i>English</a>
                    <a href="#" title="">Arabic</a>
                    <a href="#" title="">Dutch</a>
                    <a href="#" title="">French</a>
                </div>
            </li>


</ul>
        <ul style="color: white;" class="drops-menu">
            <li style="color: white" >
                <a class="dropdown-toggle nav-link dropdown-user-link status f-online" href="#" data-toggle="dropdown">
                    <img src="{{asset('assets/images/resources/admin.jpg')}}" alt="">

                </a>
                <div class=" dropdown-menu dropdown-menu-right ">
                    <a class="dropdown-item" href="{{route('mypage')}}"><i class="ft-power"></i> My Page</a>
                    <a class="dropdown-item" href="{{route('site')}}"><i class="ft-power"></i> Home</a>


                    <a class="dropdown-item" href="{{route('site.logout')}}" title=""><i class="ti-power-off"></i> log out</a>
                </div>
            </li>
        </ul>

        <span class="ti-menu main-menu" data-ripple=""></span>

    </div>

</div>

<!-- topbar -->
