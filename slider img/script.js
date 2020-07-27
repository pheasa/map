  const controls=document.querySelector(".controls");
  const container=document.querySelector(".thumbnail-container");
  const allBox=container.children;
  const containerWidth=container.offsetWidth;
  const margin=30;
   var items=0;
   var totalItems=0;
   var jumpSlideWidth=0;
   var icon=['<span class="glyphicon glyphicon-chevron-left"></span>','<span class="glyphicon glyphicon-chevron-right"></span>'];
   var ph=0;


  // item setup per slide

 responsive=[
  {breakPoint:{width:0,item:1}}, //if width greater than 0 (1 item will show) 
  {breakPoint:{width:600,item:2}}, //if width greater than 600 (2  item will show) 
  {breakPoint:{width:1000,item:4}} //if width greater than 1000 (4 item will show) 
 ]

 function load(){
     for(let i=0; i<responsive.length;i++){
     	if(window.innerWidth>responsive[i].breakPoint.width){
     		items=responsive[i].breakPoint.item
     	}
     }
     start();
 }
 
 function start(){
 	 var totalItemsWidth=0
 	for(let i=0;i<allBox.length;i++){
 		 // width and margin setup of items
 		allBox[i].style.width=(containerWidth/items)-margin + "px";
 		allBox[i].style.margin=(margin/2)+ "px";
        totalItemsWidth+=containerWidth/items;
        totalItems++;
 	}

 	// thumbnail-container width set up
 	container.style.width=totalItemsWidth + "px";

 	// slides controls number set up
 	 const allSlides=Math.ceil(totalItems/items);
     const ul=document.createElement("ul");
        for(let i=1;i<=2;i++){
          const li=document.createElement("li");
               li.id=i;
               li.innerHTML=icon[i-1];
               li.setAttribute("onclick","controlSlides(this)");
               ul.appendChild(li);
        }
        controls.appendChild(ul);
 }

    // when click on numbers slide to next slide
 function controlSlides(ele){
       // select controls children  'ul' element 
       const ul=controls.children;

       // select ul children 'li' elements;
      const li=ul[0].children;
      const allSlides=Math.ceil(totalItems/items);
        
       var active;
      
       for(let i=0;i<li.length;i++){
       		// find who is now active
       		active=i;
       		// remove active class from all 'li' elements
       		li[i].className="";
       }
       // add active class to current slide
      //  ele.className="active";
      //  alert(ele.id-1);
      if(ele.id==1){
         var numb=(ele.id-1)-1;
         ph--;
      }else{
            var numb=(ele.id-1)-0;
      }
      // alert('yes');
      // alert(ph);

          jumpSlideWidth=jumpSlideWidth+(containerWidth*numb);
       container.style.marginLeft=-jumpSlideWidth + "px";
 }

window.onload=load();

