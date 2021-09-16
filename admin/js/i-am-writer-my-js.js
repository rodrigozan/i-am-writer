let pull_page = 1; let jsonFlag = true;
if(jsonFlag){
jsonFlag = false; pull_page++;
$.getJSON("/wp-json/projects/all-posts?page=" + pull_page, function(data){
	if(data.length){
		var items = [];
		$.each(data, function(key, val){
            console.log(data)
			const arr = $.map(val, function(el) { return el });
			const post_url = arr[1];
			const post_title = arr[3];
			const post_img = arr[4];
			const post_featured = arr[5];
			const post_cat = arr[6];
			let featured = "";
			if(post_featured){
				featured = "featured";
			}
			let item_string = '<ul><li class="item">' + post_title + '</li></ul>'; 
			items.push(item_string);
		}); 
		if(data.length >= 9){ 
			$('li.loader').fadeOut(); 
			$("#project-list").append(items);
		}else{ 
			$("#project-list").append(items); 
			$('#project-loader').hide(); 
			$('#ajax-no-posts').fadeIn(); 
		} 
	}else{ 
		$('#project-loader').hide(); 
		$('#ajax-no-posts').fadeIn(); 
	} 
}).done(function(data){ 
	if(data.length){ jsonFlag = true; } 
});}