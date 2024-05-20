// Parallax
if (document.getElementById('scene')) {
  const scene = document.getElementById('scene')
  const parallaxInstance = new Parallax(scene, {
    relativeInput: true
  });

  parallaxInstance.friction(0.1, 0.075);
}








