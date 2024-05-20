// smallNav

// const marker = document.querySelector('#marker')
// const markerSpan = document.querySelector('#marker span')
const list = document.querySelectorAll('.smallnavUL li')
const list_list = document.querySelectorAll('.smallnavUL_list li')


// function moveIndicator(e) {
//   marker.style.left = e.offsetLeft + 'px'
//   marker.style.width = e.offsetWidth + 'px'
// }
// list.forEach(link => {
//   link.addEventListener('click', e => {
//     moveIndicator(e.target)
//   })
// })

// add active class in selected list item
function activeLink() {

  list.forEach(item => {
    item.classList.remove('active')
  })

  // marker.style.display = 'block'
  // markerSpan.style.display = 'block'
  this.classList.add('active')

}

function activeLink_list() {


  list_list.forEach(item => {
    item.classList.remove('active')
  })
  this.classList.add('active')

}


list.forEach(item => {
  item.addEventListener('click', activeLink)
})
list_list.forEach(item => {
  item.addEventListener('click', activeLink_list)
})



// smallnav
const smallnav = document.querySelectorAll('.smallnavUL a')

smallnav.forEach(item => {
  item.addEventListener('click', (e) => {

    // 邏輯中斷
    document.querySelector("#smallnav_list .smallnav_list_active") && document.querySelector("#smallnav_list .smallnav_list_active").classList.remove('smallnav_list_active')

    // 邏輯中斷
    document.querySelector("#smallnav_list .active") && document.querySelector("#smallnav_list .active").classList.remove('active')
    
    // 邏輯中斷
    document.querySelector(`.${e.target.dataset.id}`) && document.querySelector(`.${e.target.dataset.id}`).classList.add('smallnav_list_active')
    
  })
})