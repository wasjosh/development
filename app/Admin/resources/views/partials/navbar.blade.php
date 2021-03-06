
<nav class="navbar navbar-pf-vertical">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="/admin" class="navbar-brand">
            <span class="navbar-brand-icon" style="margin:0;"><img src="/assets/admin/images/flashtag.png" style="height:30px;"></span>
            <span style="font-style:italic; text-transform:uppercase; letter-spacing:1px;">{{ settings('name') }}</span>
        </a>
    </div>
    <nav class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li>
                <a href="/" target="_blank" class="nav-item-iconic nav-item-iconic-new-window">
                    <span title="Launch" class="fa fa-external-link"></span>
                </a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right navbar-iconic">
            <li class="dropdown">
                <a class="dropdown-toggle nav-item-iconic" id="notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <span title="Notifications" class="fa pficon-flag"></span>
                    <span class="badge">2</span>
                </a>
                <div class="dropdown-menu infotip bottom-right">
                    <div class="arrow"></div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="i pficon pficon-info"></span> Modified Datasources ExampleDS
                        </li>
                        <li class="list-group-item">
                            <span class="i pficon pficon-info"></span> Error: System Failure
                        </li>
                    </ul>
                    <div class="footer">
                        <a>Clear Messages</a>
                    </div>
                </div>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle nav-item-iconic" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <span title="Help" class="fa pficon-help"></span>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Help</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle nav-item-iconic" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <span title="Username" class="fa pficon-user"></span>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <li><a href="#">Preferences</a></li>
                    <li><a href="/admin/auth/logout">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</nav> <!--/.navbar-->
