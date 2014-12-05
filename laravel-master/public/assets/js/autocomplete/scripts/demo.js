$(function () {
		'use strict';

		$('#autocomplete-ajax').autocomplete({
serviceUrl: 'searches',
dataType: 'json',
type: 'GET',
onSelect: function (suggestion) {
alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
}
});

		});
