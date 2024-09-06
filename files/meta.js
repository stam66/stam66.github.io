(function() {
	var Realmac = Realmac || {};

	Realmac.meta = {
		
		// Set the browser title
		//
		// @var String text
		setTitle: function(text) {
			return document.title = text;
		},
		
		// Set the content attribute of a meta tag
		//
		// @var String name
		// @var String content
		setTagContent: function(tag, content){
			// If the tag being set is title
			// return the result of setTitle
			if ( tag === 'title' )
			{
				return this.setTitle(content);
			}
			
			// Otherwise try and find the meta tag
			var tag = this.getTag(tag);
			
			// If we have a tag, set the content
			if ( tag !== false )
			{
				return tag.setAttribute('content', content);
			}
			
			return false;
		},
		
		// Find a meta tag
		//
		// @var String name
		getTag: function(name) {
			var meta = document.querySelectorAll('meta');
			
			for ( var i=0; i<meta.length; i++ )
			{
				if (meta[i].name == name){
					return meta[i];
				}
			}
			
			var tag = document.createElement('meta');
			tag.name = name;
			document.getElementsByTagName('head')[0].appendChild(tag);
			
			return tag;
		}
	};
 
	// Object containing all website meta info
	var websiteMeta = {"tag-livecode.html":"Posts tagged &ldquo;LiveCode&rdquo;","category-coding.html":"A list of posts in category &ldquo;Coding&rdquo;","category-cardio-oncology.html":"A list of posts in category &ldquo;Cardio-Oncology&rdquo;","6bf6cc344fa19c222788b6832c874efb-1.html":"Occasionally the revMenuBar may slip some pixels below the menubar on MacOS - usually in the context of using multiple screens…","category-livecode.html":"A list of posts in category &ldquo;LiveCode&rdquo;","archive-september-2024.html":"Archives for September 2024","a1544c8c91fe8f17103db52c19b92e59-2.html":"Fundamentals of how to query SQL sources and retrieve data in LiveCode","category-programming---general.html":"A list of posts in category &ldquo;Programming - general&rdquo;","225a73063efd967522469d5d72fbee15-0.html":"New blog!","category-cardiology.html":"A list of posts in category &ldquo;Cardiology&rdquo;","category-apple.html":"A list of posts in category &ldquo;Apple&rdquo;","tag-livecode-ide.html":"Posts tagged &ldquo;LiveCode IDE&rdquo;","category-life....html":"A list of posts in category &ldquo;Life...&rdquo;","tag-sql.html":"Posts tagged &ldquo;SQL&rdquo;"};
 
	// pageId must match the key in websiteMeta object
	var url = window.location.pathname;
	var pageId = url.substring(url.lastIndexOf('/')+1);
	if (!pageId || pageId.length == 0){
		pageId = 'index.html';
	}
	pageMeta = websiteMeta[pageId];
 
	// If we have meta for this page
	if (pageMeta){
		Realmac.meta.setTagContent('description', pageMeta);
	}
 
 })();