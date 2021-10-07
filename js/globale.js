/* 
   Mouseover Message
   Version 1.0
   July 17, 2013

   Will Bontrager Software, LLC
   http://www.willmaster.com/
   Copyright 2013 Will Bontrager Software, LLC

   This software is provided "AS IS," without 
   any warranty of any kind, without even any 
   implied warranty such as merchantability 
   or fitness for a particular purpose.
   Will Bontrager Software, LLC grants 
   you a royalty free license to use this 
   software provided this notice appears 
   on all copies. 
*/
// Customization section --
// Specify the pixel distance from the mouse pointer for the top-left 
//   corner of the message box. Negative values are acceptable.

var MousePointerToTopOfBox = 5;
var MousePointerToLeftOfBox = -30;

// End of customization section.
document.write('<div id="mouseover_message_box"></div>');
var cX = 0; var cY = 0; var rX = 0; var rY = 0;
var DivPtr = document.getElementById("mouseover_message_box");
if(document.all) { document.onmousemove = UpdateMousePointerPositionDocAll; }
else { document.onmousemove = UpdateMousePointerPosition; }

function UpdateMousePointerPosition(e){ cX = e.pageX; cY = e.pageY;}

function UpdateMousePointerPositionDocAll(e){ cX = event.clientX; cY = event.clientY;}

function UndisplayMessage() { DivPtr.style.display = "none"; }

function DisplayMessage(d)
{
	var s = d.innerHTML;
	var i = s.indexOf('<!--');
	var j = s.indexOf('-->');
   DivPtr.innerHTML = s.substr((i+4),(j-i-4));
   AssignPosition(DivPtr);
   DivPtr.style.display = "block";
} // function DisplayMessage()

function AssignPosition(d)
{
   if(self.pageYOffset)
   {
      rX = self.pageXOffset;
      rY = self.pageYOffset;
   }
   else if(document.documentElement && document.documentElement.scrollTop)
   {
      rX = document.documentElement.scrollLeft;
      rY = document.documentElement.scrollTop;
   }
   else if(document.body)
   {
      rX = document.body.scrollLeft;
      rY = document.body.scrollTop;
   }
   if(document.all)
   {
      cX += rX; 
      cY += rY;
   }
   d.style.left = parseInt(cX+MousePointerToLeftOfBox) + "px";
   d.style.top = parseInt(cY+MousePointerToTopOfBox) + "px";
} // function AssignPosition()