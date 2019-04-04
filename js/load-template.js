template = {};

template.load = {
    group: function (view) {
        var template = $('#templateGroup').html();
        Mustache.parse(template);
        var rendered = Mustache.render(template, view);
        $('#groupList').append(rendered);
    }
};