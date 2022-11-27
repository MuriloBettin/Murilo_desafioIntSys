/*Toggle dropdown list*/
document.getElementById('dropLogOut').addEventListener('click', () => {
    toggleDD('myDropdown')
})

function toggleDD(myDropMenu) {
    const dropmenu = document.getElementById(myDropMenu)
    dropmenu.classList.toggle("invisible");
}

/*Filter dropdown options*/
function filterDD(myDropMenu, myDropMenuSearch) {
    var input, filter, ul, li, a, i;
    input = document.getElementById(myDropMenuSearch);
    filter = input.value.toUpperCase();
    div = document.getElementById(myDropMenu);
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}
// Close the dropdown menu if the user clicks outside of it
window.onclick = function (event) {
    const divDrop = $(event.target).parents('#dropClientesNot')[0]
    if (divDrop) {
        return;
    }

    /* if (event.target.matches('.dropClientesNot')) {
        return;
    } */
    if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
        var dropdowns = document.getElementsByClassName("dropdownlist");
        for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (!openDropdown.classList.contains('invisible')) {
                openDropdown.classList.add('invisible');
            }
        }
    }
}
