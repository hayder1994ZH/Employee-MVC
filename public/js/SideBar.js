function toggleSublist(){
    var list_item = document.querySelectorAll(".list-item")
    list_item.forEach(el=>{
        el.addEventListener('click',()=>{
            el.parentNode.querySelector(".active").classList.remove("active")
            el.classList.add('active')
        })

    })
}

function toggleSidebar(){
    var toggle_button = document.querySelector('.toggleSidebar')
    toggle_button.addEventListener('click',()=>{
        document.querySelector("#sidebar").classList.toggle('active')
    })
}

toggleSublist()
toggleSidebar()
