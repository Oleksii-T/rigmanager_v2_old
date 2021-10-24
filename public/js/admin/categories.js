$(document).ready(function () {
	let table = $('#categories-table').DataTable({
		//processing: true,
		order: [[ 0, "desc" ]],
		serverSide: true,
		ajax: {
			url: window.location.href,
			data: function (filter) {
				filter.parent = $('select.filter[name=parent]').val();
				filter.children = $('select.filter[name=children]').val();
				filter.thread = $('select.filter[name=thread]').val();
				filter.masterCategories = $('input.filter[name=master-categories]').is(':checked') ? 1 : null;
			}
		},
		columns: [
			{ data: 'id', name: 'id' },
			{ data: 'name', name: 'name' },
			{ data: 'children', name: 'children' },
			{ data: 'parent', name: 'parent' },
			{ data: 'action', name: 'action', orderable: false, searchable: false }
		],
	})

	$('.filter').change(function(){
		table.draw();
	})

})