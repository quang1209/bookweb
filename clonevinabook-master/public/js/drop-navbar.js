var test = document.querySelector('.dropdown-icon')
test.addEventListener("click",myFunction)
function myFunction(){
    document.getElementById('navbar-dropdowns').classList.toggle("drop")
    
}
window.onclick = function(event) {
    if (!event.target.matches('.dropdown-icon')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        for(var i =0;i< dropdowns.length;i++){
            var opendropdown = dropdowns[i]
            if (opendropdown.classList.contains('drop')) {
                opendropdown.classList.remove('drop');
              }

            }
        }
}