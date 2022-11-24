document.querySelector("#sidebarCollapse").addEventListener("click", function(){
  document.querySelector("#sidebar").classList.toggle('active');
  document.querySelector("#content").classList.toggle('active');
  document.querySelector("#overlayy").classList.toggle('active');
})
document.querySelector("#overlayy").addEventListener("click", function(){
  document.querySelector("#sidebar").classList.toggle('active');
  document.querySelector("#content").classList.toggle('active');
  document.querySelector("#overlayy").classList.toggle('active');
})