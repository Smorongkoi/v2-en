var OptionRent = [
  {
        "id": 5000,
        "text": "5,000"
    },
    {
        "id": 5100,
        "text": "5,100"
    },
    {
        "id": 5200,
        "text": "5,200"
    },
    {
        "id": 5300,
        "text": "5,300"
    },
    {
        "id": 5400,
        "text": "5,400"
    },
    {
        "id": 5500,
        "text": "5,500"
    },
    {
        "id": 5600,
        "text": "5,600"
    },
    {
        "id": 5700,
        "text": "5,700"
    },
    {
        "id": 5800,
        "text": "5,800"
    },
    {
        "id": 5900,
        "text": "5,900"
    },
    {
        "id": 6000,
        "text": "6,000"
    },
    {
        "id": 7000,
        "text": "7,000"
    },
    {
        "id": 8000,
        "text": "8,000"
    },
    {
        "id": 9000,
        "text": "9,000"
    },
    {
        "id": 10000,
        "text": "10,000"
    },
    {
        "id": 12000,
        "text": "12,000"
    },
    {
        "id": 15000,
        "text": "15,000"
    },
    {
        "id": 17000,
        "text": "17,000"
    },
    {
        "id": 20000,
        "text": "20,000"
    },
    {
        "id": 22000,
        "text": "22,000"
    },
    {
        "id": 25000,
        "text": "25,000"
    },
    {
        "id": 27000,
        "text": "27,000"
    },
    {
        "id": 30000,
        "text": "30,000"
    },
    {
        "id": 35000,
        "text": "35,000"
    },
    {
        "id": 40000,
        "text": "40,000"
    },
    {
        "id": 45000,
        "text": "45,000"
    },


    {
        "id": 50000,
        "text": "50,000"
    },
    {
        "id": 100000,
        "text": "100,000"
    },
    {
        "id": 150000,
        "text": "150,000"
    },
    {
        "id": 200000,
        "text": "200,000"
    }
]
var OptionSale = [
  {
        "id": 1000000,
        "text": "1,000,000"
    },
    {
        "id": 2000000,
        "text": "2,000,000"
    },
    {
        "id": 3000000,
        "text": "3,000,000"
    },
    {
        "id": 4000000,
        "text": "4,000,000"
    },
    {
        "id": 5000000,
        "text": "5,000,000"
    },
    {
        "id": 6000000,
        "text": "6,000,000"
    },
    {
        "id": 7000000,
        "text": "7,000,000"
    },
    {
        "id": 8000000,
        "text": "8,000,000"
    },
    {
        "id": 9000000,
        "text": "9,000,000"
    },
    {
        "id": 10000000,
        "text": "10,000,000"
    },

    {
        "id": 11000000,
        "text": "11,000,000"
    },
    {
        "id": 12000000,
        "text": "12,000,000"
    },
    {
        "id": 13000000,
        "text": "13,000,000"
    },
    {
        "id": 14000000,
        "text": "14,000,000"
    },
    {
        "id": 15000000,
        "text": "15,000,000"
    },
    {
        "id": 16000000,
        "text": "16,000,000"
    },
    {
        "id": 17000000,
        "text": "17,000,000"
    },
    {
        "id": 18000000,
        "text": "18,000,000"
    },
    {
        "id": 19000000,
        "text": "19,000,000"
    },
    {
        "id": 20000000,
        "text": "20,000,000"
    },
    {
        "id": 40000000,
        "text": "40,000,000"
    },
    {
        "id": 60000000,
        "text": "60,000,000"
    },
    {
        "id": 80000000,
        "text": "80,000,000"
    },
    {
        "id": 100000000,
        "text": "100,000,000"
    },
]
var OptionRoom = [
  {
        "id": 1,
        "text": "1 ห้องนอน"
    },
    {
        "id": 2,
        "text": "2 ห้องนอน"
    },
    {
        "id": 3,
        "text": "3 ห้องนอน"
    },
    {
        "id": 4,
        "text": "4 ห้องนอน"
    },
    {
        "id": 5,
        "text": "5 ห้องนอน"
    },
    {
        "id": 6,
        "text": "6 ห้องนอน"
    },
]

$(document).ready(function() {
    var post_type = $('#post_type').val();
    if (post_type == 1) {
        $('#price_low').select2({
            data: OptionRent,
            width: '100%'
        });
        $('#price_high').select2({
            data: OptionRent,
            width: '100%'
        });
    } else if (post_type == 2) {
        $('#price_low').select2({
            data: OptionSale,
            width: '100%'
        });
        $('#price_high').select2({
            data: OptionSale,
            width: '100%'
        });
    }
    $("#post_style").select2({
        data: OptionRoom,
        width: '100%'
    });
});
$("#open_read").click(function(event) {
    $(this).hide();
    $("#read_oth").show();
    event.preventDefault();
});
$("#close_read").click(function(event) {
    $("#read_oth").hide();
    $("#open_read").show();
    event.preventDefault();
});
$("select").select2({
    minimumResultsForSearch: -1,
    width: '100%'
});
$("select.select2").select2({
    width: '100%'
});
$('input[name="post_type"]').change(function(event) {
    var post_type = $('input[name="post_type"]:checked').val();
    $('#price_low').select2('destroy');
    $('#price_high').select2('destroy');
    $('#price_low option:gt(0)').remove();
    $('#price_high option:gt(0)').remove();
    if (post_type == 1) {
        $('#price_low').select2({
            data: OptionRent,
            width: '100%'
        });
        $('#price_high').select2({
            data: OptionRent,
            width: '100%'
        });
    } else if (post_type == 2) {
        $('#price_low').select2({
            data: OptionSale,
            width: '100%'
        });
        $('#price_high').select2({
            data: OptionSale,
            width: '100%'
        });
    }
});
$('#price_low').change(function(event) {
    var price_low = $(this).val();
    var price_high = $('#price_high').val();
    if (price_low != "" && price_high != "") {
        price_low = parseFloat(price_low);
        price_high = parseFloat(price_high);
        if (price_low >= price_high) {
            $('#price_high').val('');
            $('#price_high').select2({
                width: '100%'
            });
        }
    }
});
$('#price_high').change(function(event) {
    var price_low = $('#price_low').val();
    var price_high = $(this).val();
    if (price_low != "" && price_high != "") {
        price_low = parseFloat(price_low);
        price_high = parseFloat(price_high);
        if (price_high <= price_low) {
            $('#price_low').val('');
            $('#price_low').select2({
                width: '100%'
            });
        }
    }
});
$('#price_low,#price_high,input[name="post_type"]').change(function(event) {
    var post_type = $('input[name="post_type"]:checked').val();
    var price_low = $('#price_low').val();
    var price_high = $('#price_high').val();
    var text = "";
    if (post_type == 1 && price_low != "" && price_high == "") {
        price_low = parseFloat($('#price_low').val());
        text = price_low / 1000 + "k++";
    } else if (post_type == 1 && price_low != "" && price_high != "") {
        price_low = parseFloat($('#price_low').val());
        price_high = parseFloat($('#price_high').val());
        text = price_low / 1000 + "k - " + price_high / 1000 + "k";
    } else if (post_type == 1 && price_low == "" && price_high != "") {
        price_high = parseFloat($('#price_high').val());
        text = price_high / 1000 + "k--";
    } else if (post_type == 2 && price_low != "" && price_high == "") {
        price_low = parseFloat($('#price_low').val());
        text = price_low / 1000000 + "m++";
    } else if (post_type == 2 && price_low != "" && price_high != "") {
        price_low = parseFloat($('#price_low').val());
        price_high = parseFloat($('#price_high').val());
        text = price_low / 1000000 + "m - " + price_high / 1000000 + "m";
    } else if (post_type == 2 && price_low == "" && price_high != "") {
        price_high = parseFloat($('#price_high').val());
        text = price_high / 1000000 + "m--";
    } else if (price_low == "" && price_high == "") {
        text = "ราคา";
    }
    $("#show_price").html(text);
});
$(".ads-input-box-price").click(function(event) {
    if ($('.ads-input-select-price').hasClass('active')) {
        $('.ads-input-select-price').removeClass('active');
    } else {
        $('.ads-input-select-price').addClass('active');
    }
});
$("body").click(function(event) {
    if ($(event.target).closest(".ads-post-input-price").length === 0) {
        $(".ads-input-select-price").removeClass('active');
    }
});
$(".ads-tab-post .ads-tab-post-menu button").click(function(event) {
    $(".ads-tab-post .ads-tab-post-menu button").removeClass('active');
    $(this).addClass('active');
    $(".ads-tab-post .ads-tab-post-content").removeClass('active');
    $($(this).data('id')).addClass('active');
});
$(".area-box-condo .show-condo").click(function(event) {
    $(".area-box-condo .condo-box.hide").removeClass('hide');
    $(this).hide();
});
$("#area-search").click(function(event) {

  var search = $("#search-url").val();

  var type = "";
  var post_type = $('input[name="post_type"]:checked').val();
  if (post_type == 1) {
    type = "?ประเภท=เช่า";
  } else if (post_type == 2) {
    type = "?ประเภท=ซื้อ";
  }

  var price_low = $("#price_low").val();
  var low = "";
  if (price_low != "") {
    price_low = parseFloat(price_low);
    low = "&ราคาต่ำสุด=" + price_low;
  }


  var price_high = $("#price_high").val();
  var high = "";
  if (price_high != "") {
    price_high = parseFloat(price_high);
    high = "&ราคาสูงสุด=" + price_high;
  }

  var post_style = $("#post_style").val();
  var style = "";
  if (post_style != "") {
    post_style = parseFloat(post_style);
    post_style = "&จำนวนห้องนอน=" + post_style;
  }

  window.location.assign(search+type+low+high+style);

});
$('#price_low,#price_high,#post_type').change(function(event) {
    var post_type = $('#post_type').val();
    var price_low = $('#price_low').val();
    var price_high = $('#price_high').val();
    var text = "";
    if (post_type == 1 && price_low != "" && price_high == "") {
        price_low = parseFloat($('#price_low').val());
        text = price_low / 1000 + "k++";
    } else if (post_type == 1 && price_low != "" && price_high != "") {
        price_low = parseFloat($('#price_low').val());
        price_high = parseFloat($('#price_high').val());
        text = price_low / 1000 + "k - " + price_high / 1000 + "k";
    } else if (post_type == 1 && price_low == "" && price_high != "") {
        price_high = parseFloat($('#price_high').val());
        text = price_high / 1000 + "k--";
    } else if (post_type == 2 && price_low != "" && price_high == "") {
        price_low = parseFloat($('#price_low').val());
        text = price_low / 1000000 + "m++";
    } else if (post_type == 2 && price_low != "" && price_high != "") {
        price_low = parseFloat($('#price_low').val());
        price_high = parseFloat($('#price_high').val());
        text = price_low / 1000000 + "m - " + price_high / 1000000 + "m";
    } else if (post_type == 2 && price_low == "" && price_high != "") {
        price_high = parseFloat($('#price_high').val());
        text = price_high / 1000000 + "m--";
    } else if (price_low == "" && price_high == "") {
        text = "ราคา";
    }
    $("#show_price").html(text);
});