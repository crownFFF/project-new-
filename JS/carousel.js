// carousel
if (document.querySelector('.container')) {
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
}