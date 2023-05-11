function next(){
const changeClassBtn = document.getElementsByClassName('button');
const navLink = document.getElementById('nav-link');
alert("hosh");
changeClassBtn.addEventListener('click', () => {
  
  navLink.classList.toggle('active');
})};