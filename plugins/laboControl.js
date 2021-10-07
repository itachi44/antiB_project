
$(document).ready(function(){

    var yourbuttons = document.getElementsByClassName('highlight-hover');
    for (var i = yourbuttons.length - 1; i >= 0; i--) {
		var currentbtn;
		yourbuttons[i].onclick=function(){
    	if(currentbtn){
    		currentbtn.classList.remove("highlight");
    	}
      this.classList.add("highlight");
      currentbtn=this;
    }
    
};




});
