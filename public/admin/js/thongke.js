$(document).ready(function () {
    var arrTunoverTotals = [];
    var arrRevenueTotals = [];
    var arrAmountProducts = [];
    $.ajax({
        url: "/laravel-doan-bqd/admin/report/getturnover",
        method: "GET",
        success: function (response) {
            console.log(response);
            var data = {};
            var data_qty = {};
            $.each(response.data, function (i, item) {
               data[item.month] = item;
            });

            $.each(response.month, function (i, item) {
                var tm= data[item] ? data[item].qty : 0;
                arrTunoverTotals.push(tm);
                tm= data[item] ? data[item].amount : 0;
                arrRevenueTotals.push(tm);
            });

            $.each(response.data_qty, function (i, item) {
                data_qty[item.month] = item;
            });

            $.each(response.month, function (i, item) {
                var tm= data_qty[item] ? data_qty[item].amount_qty : 0;
                arrAmountProducts.push(tm);
            });

            // Line chart tổng số hoa don
            var ctx = document.getElementById("lineChart");
            var lineChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: response.month,
                    datasets: [{
                        label: "Tổng số hóa đơn",
                        backgroundColor: "rgba(38, 185, 154, 0.31)",
                        borderColor: "rgba(38, 185, 154, 0.7)",
                        pointBorderColor: "rgba(38, 185, 154, 0.7)",
                        pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "rgba(220,220,220,1)",
                        pointBorderWidth: 1,
                        data: arrTunoverTotals
                    }]
                }
            });
            //line tong so tien
            var ctx = document.getElementById("mybarChart");
            var mybarChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: response.month,
                    datasets: [{
                        label: 'Tổng tiền',
                        backgroundColor: "#26B99A",
                        data: arrRevenueTotals
                    }]
                }
            });

            // Pie chart
            var ctx = document.getElementById("pieChart");
            var data = {
                datasets: [{
                    data: arrAmountProducts,
                    backgroundColor: [
                        "#455C73",
                        "#9B59B6",
                        "#BDC3C7",
                        "#26B99A",
                        "#3498DB",
                        "#CCCCCC",
                        "#ffff56",
                        "#00ffff",
                        "#5656ff",
                        "#5fbf00",
                        "#999999",
                        "#bf5f00"
                    ],
                    label: 'My dataset' // for legend
                }],
                labels: response.month
            };

            var pieChart = new Chart(ctx, {
                data: data,
                type: 'pie',
                otpions: {
                    legend: false
                }
            });
        }
    });
});