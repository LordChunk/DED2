//Load JS and CSS asynchronously

//          CSS
//Loading css asynchronously
// loadCss("https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/css/materialize.min.css");
// loadCss("https://fonts.googleapis.com/icon?family=Material+Icons");
// loadCss("/media/css/main.css");
// loadCss("/media/css/" + requestURI()  + ".css");



//          JS
//Loading JS asynchronously
// $(document).ready(function(){
//     //This function is called after the page is loaded fully to prevent the static page from loading slower on 3G networks and slower connections

//     //Standard JS which should be loaded for every page
//     loadJs("//cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/js/materialize.min.js");
//     loadJs("/media/js/src/smoothScroll.js");
//     loadJs("/media/js/src/nav.js");
//     loadJs("/media/js/src/ajaxPageLoader.js");
//     loadJs("/media/js/src/main.js");
//     loadJs("//use.fontawesome.com/releases/v5.0.6/js/all.js");

//     //JS that is specific to a certain page
//     loadJs("/media/js/page/" + requestURI()  + ".js");
// });

function loadCss(url) {
    var link = document.createElement("link");
    link.type = "text/css";
    link.rel = "stylesheet";
    link.href = url;
    document.getElementsByTagName("body")[0].appendChild(link);
}

function loadJs(url){
    var jsScript = document.createElement("script");
    jsScript.src = url;
    document.getElementsByTagName("body")[0].appendChild(jsScript);
}


/*  
    This funcition returns the URI part past https://example.com/
    e.g. https://example.com/test.php will return "test"
*/

function requestURI() {
    var uri = location.pathname.substr(1).split("/")[0].replace(".php", "");
    
    //New version
    if(uri === "")
    {
        uri = "index";
    }
    else {

        //Check if in page folder for subpages
        if(uri === "p")
        {
            uri = location.pathname.substr(1).split("/")[1].replace(".php", "");
        }
    }

    return uri;
}

//This is still unfinished code. It is meant for building a service worker to cache certain static files on the webpage 

// if ('serviceWorker' in navigator) {
//     window.addEventListener('load', function() {
//       navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
//         // Registration was successful
//         console.log('ServiceWorker registration successful with scope: ', registration.scope);
//       }, function(err) {
//         // registration failed :(
//         console.log('ServiceWorker registration failed: ', err);
//       });
//     });
//   }