var oSearch = {
	init:function() {
		$('#patient_id_search').autocomplete({
			source:function(request, response) {
				var params = {};
				params['term'] = request.term,				
				$.ajax({
					url:'/search/patient-details',
					headers: {
				       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				    },
					type:'post',
					dataType:'json',
					data: params,
					success:function(data) {
						response(data);
					}
				});
			},
			select: function( event, ui ) {
				$('#patient_id').val(ui.item.patient_id);
			}
		}).data("ui-autocomplete")._renderItem = function (ul, item) {			
			var html = '';
			html += '<div class="list-group">';
			html += ' <a href="#" class="list-group-item">';
			html += '<h4 class="list-group-item-heading">'+item.value+'</h4>';			
			html += '<p class="list-group-item-text">';
			html += '<strong>ID:</strong> '+item.patient_no+' | ';
			html += '<strong>Age:</strong> '+item.age+' | ';
			html += '<strong>Contact No:</strong> '+item.contact_no;
			html += '</p>';
			html += '</a>';
			html += '</div>';		
			
			 return $("<li></li>")
             .data("item.autocomplete", item)
             .append(html)
             .appendTo(ul);
		};
	}	
};
$(document).ready(function(e){	
	if($('#patient_id_search').length > 0) {
		oSearch.init();
	}	
});