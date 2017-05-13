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
//-------------------------------- FUNCTION -------------------------------------
sv.data.changeStatusUser = function (method, url, _token, afunction, async){
    var data = {
        _token: _token
    };
    if(typeof async === 'undefined')
        async = true;
    sv.data.getData(method,url, data, afunction, async);
};

//----------Customer
sv.data.actionDelete = function (url, _token, afunction, async){
    var data = {
        _token: _token
    };
    if(typeof async === 'undefined')
        async = true;
    sv.data.getData('post', url, data, afunction, async);
};
sv.data.deleteSale = function (url, _token, afunction, async){
    var data = {
        _token: _token
    };
    if(typeof async === 'undefined')
        async = true;
    sv.data.getData('post', url, data, afunction, async);
};
sv.data.deleteTran = function (url, _token, afunction, async){
    var data = {
        _token: _token
    };
    if(typeof async === 'undefined')
        async = true;
    sv.data.getData('post', url, data, afunction, async);
};

sv.data.notifyNewTransaction = function (url, afunction, async){
    var data = {};
    if(typeof async === 'undefined')
        async = true;
    sv.data.getData('get', url, data, afunction, async);
};

sv.data.getCustomerInfo = function (method, url, afunction, async){
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