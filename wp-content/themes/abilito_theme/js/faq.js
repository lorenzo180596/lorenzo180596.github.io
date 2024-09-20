
var coll = jQuery(".faq-button");
var i;

for (i = 0; i < coll.length; i++) {
	coll[i].addEventListener("click", function () {
		for (j = 0; j < coll.length; j++) {
			if (coll[j].classList.contains("active") && coll[j] != this) 
            {
				coll[j].classList.toggle("active");
				var content2 = coll[j].nextElementSibling;
                
				if (content2.style.maxHeight) {
					content2.style.maxHeight = null;
				}
				else {
					content2.style.maxHeight = content2.scrollHeight + "px";
				}
                
			}
		}
		this.classList.toggle("active");
		var content = this.nextElementSibling;
        
		if (content.style.maxHeight) {
			content.style.maxHeight = null;
		}
		else {
			content.style.maxHeight = content.scrollHeight + "px";
		}
        
	});
}

jQuery(document).click(function(event) { 
	var jQuerytarget = jQuery(event.target);
	if(!jQuerytarget.closest('.faq').length) {
	  for(i=0; i<coll.length; i++){
		if (coll[i].classList.contains("active"))
		{
			coll[i].classList.toggle("active");
			var content2 = coll[i].nextElementSibling;
			
			if (content2.style.maxHeight) {
				content2.style.maxHeight = null;
			}
			else {
				content2.style.maxHeight = content2.scrollHeight + "px";
			}
			
		}

	  }
	}        
  });
