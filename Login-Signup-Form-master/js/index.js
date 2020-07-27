function changeSlide(ref){
  try {
  if(ref.getAttribute("data-tab") == "all-slide-up"){
    document.getElementById("form-body-slide").classList.remove('active');
    ref.parentNode.classList.remove('pr-all-img1');
  } else {
    document.getElementById("form-body-slide").classList.add('active');
    ref.parentNode.classList.add('pr-all-img1');
  }
  } catch(msg){
    console.log(msg);
  }
}