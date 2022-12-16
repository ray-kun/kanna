document.addEventListener("DOMContentLoaded", function(){
    document.querySelectorAll('.sidebar .nav-link').forEach(function(element){

        element.addEventListener('click', function (e) {

            let nextEl = element.nextElementSibling;
            let parentEl  = element.parentElement;

            if(nextEl) {
                e.preventDefault();
                let mycollapse = new bootstrap.Collapse(nextEl);

                if(nextEl.classList.contains('show')){
                    mycollapse.hide();
                } else {
                    mycollapse.show();
                    // find other submenus with class=show
                    var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                    // if it exists, then close all of them
                    if(opened_submenu){
                        new bootstrap.Collapse(opened_submenu);
                    }
                }
            }
        }); // addEventListener
    }) // forEach
});
// DOMContentLoaded  end

document.getElementById("creditsSwitch").onclick = function() {
    document.getElementById('credits').style.display = this.checked ? "block" : "none";
}

document.getElementById("furniSwitch").onclick = function() {
    document.getElementById('furni').style.display = this.checked ? "block" : "none";
}

document.getElementById("coinsSwitch").onclick = function() {
    document.getElementById('coins').style.display = this.checked ? "block" : "none";
}

document.getElementById("badgeSwitch").onclick = function() {
    document.getElementById('badge').style.display = this.checked ? "block" : "none";
}
