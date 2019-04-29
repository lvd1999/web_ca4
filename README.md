![](https://github.com/lvd1999/web_ca4/blob/master/img/about/Ammunation_logo.png)

# Welcome to Ammu-Nation

AMMU-Nation features more than 7,000 guns in stock on any given day making us the largest gun shop in the United States. After opening its doors in 1959, we've been in the same location in Charlotte, NC and we remain a family business to this day with three generations of the Lee family working here daily. Why does this matter to you? Unlike the big-box stores, the Lee family has shared its experience, know how and customer-first attitude that comes with their 50-plus years of being in business. We also have a full-service gun repair facility on site and we're proud to say that we can service what we sell.

## Table of Content
- [Deliverables](#deliverables)
- [Technologies](#technologies)
- [Login System](#login-system)
- [Manager](#manager)
- [Site Link](#site-link)
- [License](#license)

## Deliverables
* A website built using a popular front-end framework
* A MVC website hosted on a remote server. (database-driven)
* Inclusion of Ajax and/or JS interactivity.
* A secure login system with sessions.


## Technologies
Project is created with:
* PHP 7.0
* HTML5 / CSS3
* sweetalert.js

## Login system
Log in page             |  Sign up page
:-------------------------:|:-------------------------:
<img src="https://i.gyazo.com/6b34d993a4399dfff65f279213aa6419.png" height=550px>  |  <img src="https://i.gyazo.com/b1bb3d2359167649864e27a20555a66a.png" height=550px>

Sign in / Sign up validation with sweetalert
<img src="https://i.gyazo.com/4251c45a91692e95403c8caeebc80718.gif" height=550px>

Sample code for sweetalert js
```
<script>
    setTimeout(function () { 
swal({
  title: "There was a problem.",
  text: "User not found.",
  type: "error",
  confirmButtonText: "Back"
},
function(isConfirm){
  if (isConfirm) {
    window.location.href = "signIn.php";
  }
}); }, 100);</script>
```

## Manager
Sign up to join us in editing gun manager in the site!

View guns filtered by different categories and bullets.
<img src="https://i.gyazo.com/bf49f68fd8410817e89a351c79985d82.gif" height=550px>

Add a new gun in a few clicks!
<img src="https://i.gyazo.com/11cf04b4eef4bef4ea93ddfae27f045a.gif" height=600px width=80%>

## Site link
http://mysql02.comp.dkit.ie/D00198307/web_ca4/web_ca4/

## Contributors
- Lee Voon Dic  <D00198307@student.dkit.ie>
- Liow Ze Yan   <D00198815@student.dkit.ie>
- Jingjing Lan  <D00198304@student.dkit.ie>

## License
© Lee Voon Dic, Dundalk Institude of Technology


Licensed under [MIT License](http://opensource.org/licenses/mit-license.php)
