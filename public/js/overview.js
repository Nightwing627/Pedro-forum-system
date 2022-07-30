"use strict";
var Overview = function() {
    var initTable = function() {
        var table = $('#topic_table');

        table.dataTable({
            responsive: true,
            searchDelay: 500,
            processing: true,
            serverSide: true,
            ordering: false,
            ajax: {
                url: getUrl,
                type: 'POST',
                data: {
                    selectTime: $('#select-time').val(),
                    sortBy: $('#sort-by').val(),
                    direction: $('#direction').val()
                }
            },
            columns: [
                { 
                    data: null,
                    render: function(data, type, full, meta) {
                        return '';
                    }
                },
                { 
                    data: null,
                    render: function(data, type, full, meta) {
                        return '';
                    }
                },
                { 
                    data: null,
                    render: function(data, type, full, meta) {
                        return '';
                    }
                },
            ]
        });
    };

    return {
        init: function() {
            initTable();
        }
    };
}();

jQuery(function() {
    Overview.init();
})