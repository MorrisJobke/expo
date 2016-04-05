
OCA.Expo = {
	init: function() {
		$.get(OC.generateUrl('/apps/expo/api/items'))
			.success(function(items){
				var $itemListElement = $('#item-list');
				_.each(items, function(item){
					var element = $('<div>')
						.append($('<h3>').text(item.title))
						.append($('<p>').text(item.text))
						.data('id', item.id);
					$itemListElement.prepend(element);
				});
			});
	}
};

$(document).ready(function() {
	OCA.Expo.init();
});