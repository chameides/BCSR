if (document.getElementsByClassName("side-nav").length > 0) {
    //alert('sidenav');
    var hostname = window.location.host,
      path = window.location.href,
      sidenav = document.getElementsByClassName("side-nav")[0],
      links = sidenav.getElementsByTagName("a");
    if ("a.cms.omniupdate.com" == hostname) {
            path = encodeURI(path),
                path = path.split("?"),
                params = path[1].split("&");
            for (var i = 0; i < params.length; i++)
                if (params[i].indexOf("path=") > -1) {
                    path = params[i].replace("path=", ""), path = path.replace("pcf", "php");
                    break
                }
            for (var i = 0; i < links.length; i++) encodeURI(encodeURIComponent(links[i].pathname)) == path && links[i].setAttribute("class", "active")
    }
    else {
    for (var i = 0; i < links.length; i++) links[i].href == path && links[i].setAttribute("class", "active");
    }
  }
  if (document.getElementsByClassName("side-nav-mobile").length > 0) {
    //alert('sidenavmobile');
    var hostname = window.location.host,
      path = window.location.href,
      sidenavMobile = document.getElementsByClassName("side-nav-mobile")[0],
      linksMobile = sidenavMobile.getElementsByTagName("a");
    
    for (var i = 0; i < linksMobile.length; i++) linksMobile[i].href == path && linksMobile[i].setAttribute("class", "active");
  }