// JavaScript Document

/*****************blognav*wenn*geklickt****************************/
    function blogAnfordern(aAnfrage) {
	    var xhr = new XMLHttpRequest();
      xhr.open("post", "php/diy-blog-anz.php?blogid=" + aAnfrage, true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
          var blogInfo = xhr.responseText;
		  document.getElementById("anzBlog").innerHTML=blogInfo;
        }
      }
      xhr.send("blogid=" + aAnfrage);
    }
/************neusten*bloganzeigen****************/
 function anfordernBlogAnz() {
      var xhr = new XMLHttpRequest();
      xhr.open("post", "php/diy-blog-neu.php", true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange=function () {
        if (xhr.readyState==4) {
          var antw=xhr.responseText;
          document.getElementById("anzBlog").innerHTML=antw;
		  }
	  }
     xhr.send();
}
/***********gewÃ¤hlten*blog*anzeigen**********************/
function anfordernBlogNav() {
      var xhr = new XMLHttpRequest();
      xhr.open("post", "php/diy-nav.php", true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange=function () {
        if (xhr.readyState==4) {
          var antw=xhr.responseText;
          document.getElementById("anzBlogNav").innerHTML='<span style="display:block">'+antw+'</span>';
		  }
	  }
     xhr.send();
}