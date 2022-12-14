function affSuggestions() {
    
    let input = document.getElementById('searchBar');
    let ul = document.getElementById('suggestions');
    let li = ul.getElementsByClassName('suggestion');
    let filter = input.value.toUpperCase();

    if(input === document.activeElement){
        ul.style.display = "flex";
  
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            let txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "block";
            }else {
                li[i].style.display = "none";
            }
        }
        if(input.value == ""){
            ul.style.display = 'none';
        }
    }
}


function sleep(milliseconds) {
    const date = Date.now();
    let currentDate = null;
    do {
        currentDate = Date.now();
    } while (currentDate - date < milliseconds);
}

function masqSuggestions(){
    sleep(1000);
    let ul = document.getElementById('suggestions');
    ul.style.display = 'none';
}