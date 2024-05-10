// carousel
const next = document.querySelector('.next')
const prev = document.querySelector('.prev')

// 右按鈕添加下一張
next.addEventListener('click', () => {
  const item = document.querySelectorAll('.item')
  document.querySelector('.slide').appendChild(item[0])
})

// 左按鈕添加上一張
prev.addEventListener('click', () => {
  const item = document.querySelectorAll('.item')
  document.querySelector('.slide').prepend(item[item.length - 1]) //here length of item = 6
})

// 輪播圖定時器設定-5秒動作
let timer = setInterval(() => {
  const item = document.querySelectorAll('.item')
  document.querySelector('.slide').appendChild(item[0])
}, 5000)

// 輪播圖定時器設定-滑鼠進入停止
document.querySelector('.container').addEventListener('mouseenter', () => {
  clearInterval(timer)
})

// 輪播圖定時器設定-滑鼠離開開啟
document.querySelector('.container').addEventListener('mouseleave', () => {
  timer = setInterval(() => {
    const item = document.querySelectorAll('.item')
    document.querySelector('.slide').appendChild(item[0])
  }, 5000)
})

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

  // marker.style.display = 'block'
  // markerSpan.style.display = 'block'
  this.classList.add('active')

}

list.forEach(item => {
  item.addEventListener('click', activeLink)
})
list_list.forEach(item => {
  item.addEventListener('click', activeLink_list)
})



// Parallax
const scene = document.getElementById('scene');
const parallaxInstance = new Parallax(scene, {
  relativeInput: true

});

parallaxInstance.friction(0.1, 0.075);


// smallnav
const smallnav = document.querySelectorAll('.smallnavUL a')

smallnav.forEach(item => {
  item.addEventListener('click', (e) => {
    console.log(e.target.dataset.id)
    document.querySelector("#smallnav_list .smallnav_list_active").classList.remove('smallnav_list_active')

    // 邏輯中斷
    document.querySelector("#smallnav_list .active") && document.querySelector("#smallnav_list .active").classList.remove('active')

    document.querySelector(`.${e.target.dataset.id}`).classList.add('smallnav_list_active')
  })
})



// cursor
const cursor = document.querySelector('.cursor');

document.addEventListener('mousemove', e => {
  cursor.setAttribute("style", "top: " + (e.pageY - 10) + "px; left: " + (e.pageX - 10) + "px;")
})

document.addEventListener('click', () => {
  cursor.classList.add("expand");

  setTimeout(() => {
    cursor.classList.remove("expand");
  }, 500)
})


// footer
const bubbles = document.querySelector('.bubbles')
for (var i = 0; i < 128; i++) {
  const bubble = document.createElement('div')
  bubble.classList.add('bubble')
  bubbles.appendChild(bubble)
  bubble.style.setProperty('--size', `${2 + Math.random() * 4}rem`)
  bubble.style.setProperty('--distance', `${6 + Math.random() * 4}rem`)
  bubble.style.setProperty('--position', `${-5 + Math.random() * 110}%`)
  bubble.style.setProperty('--time', `${2 + Math.random() * 2}s`)
  bubble.style.setProperty('--delay', `${-1 * (2 + Math.random() * 2)}s`)
}