
var imgList=document.querySelectorAll('.img-box img');
var closebtn=document.getElementById('closebtn');
var popup=document.getElementById('popup');
var popupImg=document.getElementById('popupImg');
var rightArrow=document.getElementById('rightArrow');
var leftArrow = document.getElementById('leftArrow');
var selectedIndex;

for( var i=0 ; i < imgList.length ; i++ ){
    imgList[i].addEventListener('click', function(e) {
     for(var j=0 ; j< imgList.length ; j++){
       if( e.target==imgList[j]){
         selectedIndex=j;
         break;
       }
     }
       console.log(selectedIndex);
        popupImg.src=e.target.src;
        popup.classList.remove('hide');
        
    })
}

closebtn.addEventListener('click',function() {
    popup.classList.add('hide');
 })

 
rightArrow.addEventListener('click',function() {
   selectedIndex++;
    selectedIndex=selectedIndex % imgList.length;
   popupImg.src = imgList[selectedIndex].src;
 })


 leftArrow.addEventListener('click',function(){
    selectedIndex--;
    if(selectedIndex<0){
     selectedIndex=imgList.length-1; 
    }
    popupImg.src = imgList[selectedIndex].src;
})
