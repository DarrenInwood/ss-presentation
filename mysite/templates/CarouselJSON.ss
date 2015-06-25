{
	"items" : [
<% loop Me %>
		{
			"title": "$Title",
			"image": "$Image",
			"caption": "$Caption"
		}<% if not Last %>,<% end_if %>
<% end_loop %>
	]
}