var sv = {};

//--------------------------- OBJECT ----------------------------
sv.url = {};
sv.data = {};

//--------------------------- CONFIG URL ----------------------------

sv.url.base = '/laravel-doan-bqd/admin/';

sv.url.getService = function (method)
{
    return sv.url.base + method;
};

//--------------------------------AJAX-------------------------------------
sv.data.getData = function (method, url,  data, afuntion, async) {
    if(typeof(method) === 'undefined'){
        method = 'post';
    }
    $.ajax({
        method: method,
        url: url,
        data: data,
        async: async,
        dataType: "json",
        success: function (response) {
            if (typeof afuntion === 'string')
            {
                window[afuntion](response);
            }
            else
            {
                (afuntion)(response);
            }

        }
    });
}

sv.data.notifyNewTransaction = function (url, afunction, async){
    var data = {};
    if(typeof async === 'undefined')
        async = true;
    sv.data.getData('get', url, data, afunction, async);
};

sv.data.setIsViewedTour = function (url, afunction, async){
    var data = {};
    if(typeof async === 'undefined')
        async = true;
    sv.data.getData('get', url, data, afunction, async);
};