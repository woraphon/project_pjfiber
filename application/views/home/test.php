<!doctype html>
<html>
    <head>
        <title>Boot Strap Fly out</title>
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <style>
          /* Drop Down FLyout Menu */
.dropdown-submenu {
    position: relative;
}
.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}
.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}
.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}
.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}
.dropdown-submenu.pull-left {
    float: none;
}
.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
        </style>
        
        
    </head>
        <body>
<div class="row">
  <ul class="dropdown-menu multi-level" role="menu">
            <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Home</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Second level</a></li>
                    <li><a href="#">Second level</a></li>
                    <li><a href="#">Second level</a></li>
                </ul>
            </li>
            <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Footer</a>
                <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="#">Second level</a></li>
                    <li class="dropdown-submenu">
                        <a href="#">Even More..</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">3rd level</a></li>
                            <li><a href="#">3rd level</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Second level</a></li>
                    <li><a href="#">Second level</a></li>
                </ul>
            </li>
            <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Not Assigned</a>
                <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="#">Second level</a></li>
                    <li class="dropdown-submenu">
                        <a href="#">Even More..</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">3rd level</a></li>
                            <li><a href="#">3rd level</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Second level</a></li>
                    <li><a href="#">Second level</a></li>
                </ul>
            </li>
        </ul>
    </div>
 </body>
</html>