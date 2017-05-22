var numberTransaction = 0;

function notifyNewTransaction() {
    var url = baseURL+'/admin/transaction/notifyNew';
    sv.data.notifyNewTransaction(url, function (response) {
        numberTransaction = response.data.length;

        if (response.data.length === 0) {
            $('#notify').hide();
        }
        var curDate = new Date();
        var minCur = moment(curDate).format("mm");

        if (response.data.length != 0) {
            $('.nav').find('.badge').text(response.data.length);
        } else {
            $('.nav').find('.badge').text('');
        }
        var html = '<li class="li_ul_notify"><ul>';
    
        for (i = 0; i < numberTransaction; i++) {
            // var url = baseURL+"/admin/product/edit/" + response.data[i].product_id;
            var url = baseURL+"/admin/transaction/list";
            var minRes = moment(response.data[i].created_at).format("mm");
            var minBefore = Math.abs(minCur - minRes);
            var urlImage = baseURL+'/resources/upload/' + response.data[i].image;
            var productname = response.data[i].name;
            if (productname.length > 40)
                productname = productname.substring(0, 50) + '...';
            html += '<li class="notify_li_sub" data-id="' + response.data[i].id + '">';
            html += '   <span class="image_noty"><img src="' + urlImage + '" alt="" /></span>';
            html += '   <span>';
            html += '       <span>' + response.data[i].user_name + '</span>';
            html += '       <span class="time">' + minBefore + ' mins ago</span><br>';
            html += '       <span class="message"><a href="' + url + '">';
            html += '       ' + productname + '';
            html += '       </a></span>';
            html += '   </span>';
            html += '</li>';

        }
        html += '</ul></li>';
        html += '<li class="seeAllNotify">';
        html += '    <div class="text-center">';
        html += '        <a>';
        html += '            <strong>See All Alerts</strong>';
        html += '            <i class="fa fa-angle-right"></i>';
        html += '        </a>';
        html += '    </div>';
        html += '</li>';

        $('ul#notify').html(html);

//        Set is Viewed
        $('li.notify_li_sub').each(function () {
            $(this).click(function () {
                var id = $(this).attr('data-id');
                var url = baseURL+'/admin/transaction/setIsViewed/' + id;
                sv.data.setIsViewedTour(url, function (response) {
                    $('.nav').find('.badge').text(numberTransaction - 1);
                });
            });
        });
    });
}
notifyNewTransaction();

