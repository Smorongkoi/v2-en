$("#btn-open-menu-mobile").click(function(event) {
  $("#menu-mobile").show();
  $("#menu-mobile").addClass('active');
});
$("#close-menu-mobile").click(function(event) {
  $("#menu-mobile").fadeOut('500', function() {
    $("#menu-mobile").removeClass('active');
  });
});
$(".tab-menu-mobile").click(function(event) {
  if ($(event.target).closest(".menu-mobile-content").length === 0) {
    $("#menu-mobile").fadeOut('500', function() {
      $("#menu-mobile").removeClass('active');
    });
  }
});

$(".tab-home-condo .tab-home-menu ul li").click(function(event) {

  $(".tab-home-condo .tab-home-menu ul li").removeClass('active');
  $(this).addClass('active');

  $(".tab-home-condo .tab-home-content").removeClass('active');
  $($(this).data('id')).addClass('active');

});

$(".tab-home-condo .tab-home-content .content.train .menu-train button").click(function(event) {

  $(".tab-home-condo .tab-home-content .content.train .menu-train button").removeClass('active');
  $(this).addClass('active');

  $(".tab-home-condo .tab-home-content .content.train .content-train .trainline").removeClass('active');
  $($(this).data('id')).addClass('active');

});

$(".tab-home-condo .tab-home-content .content.area .menu-area button").click(function(event) {
  $(".tab-home-condo .tab-home-content .content.area .menu-area button").removeClass('active');
  $(this).addClass('active');

  $(".tab-home-condo .tab-home-content .content.area .content-area .area-line").removeClass('active');
  $($(this).data('id')).addClass('active');
});

$(".tab-home-condo-mobile button").click(function(event) {
  $("#ModalTabHome-title").html($(this).data('title'));

  $(".tab-home-condo-mobile-content").removeClass('active');
  $($(this).data('id')).addClass('active');
});

$("#show-train select").change(function(event) {
  $("#show-train div").removeClass('active');
  $("#train-"+$(this).val()).addClass('active');
});

$("#show-area select").change(function(event) {
  $("#show-area div").removeClass('active');
  $("#area-"+$(this).val()).addClass('active');
});

function dokeyup(obj) {
  var key = event.keyCode;
  if (key != 37 & key != 39 & key != 110) {
    var value = obj.value;
    var svals = value.split("."); //แยกทศนิยมออก
    var sval = svals[0]; //ตัวเลขจำนวนเต็ม

    var n = 0;
    var result = "";
    var c = "";
    for (a = sval.length - 1; a >= 0; a--) {
      c = sval.charAt(a);
      if (c != ',') {
        n++;
        if (n == 4) {
          result = "," + result;
          n = 1;
        };
        result = c + result;
      };
    };

    if (svals[1]) {
      result = result + '.' + svals[1];
    };
    obj.value = result;
  };
};
function checknumber() {
  key = event.keyCode;
  if (key != 46 & (key < 48 || key > 57)) {
    event.returnValue = false;
  };
};

$(".input-number").keypress(function(event) {
  checknumber();
});
$(".input-number").keyup(function(event) {
  dokeyup(this);
});

$.fn.rotate = function(degrees, step, current) {
    var self = $(this);
    current = current || 0;
    step = step || 5;
    current += step;
    self.css({
        '-webkit-transform' : 'rotate(' + current + 'deg)',
        '-moz-transform' : 'rotate(' + current + 'deg)',
        '-ms-transform' : 'rotate(' + current + 'deg)',
        'transform' : 'rotate(' + current + 'deg)'
    });
    if (current != degrees) {
        setTimeout(function() {
            self.rotate(degrees, step, current);
        }, 5);
    }
};

typeof $.typeahead === 'function' && $.typeahead({
  input: ".js-typeahead",
  minLength: 1,
  order: "asc",
  group: true,
  maxItem: 0,
  // maxItemPerGroup: 100,
  // asyncResult: true,
  cancelButton: false,
  groupOrder: function(node, query, result, resultCount, resultCountPerGroup) {

    var scope = this,
      sortGroup = [];

    for (var i in result) {
      sortGroup.push({
        group: i,
        length: result[i].length
      });
    }

    sortGroup.sort(
      scope.helper.sort(
        ["length"],
        false, // false = desc, the most results on top
        function(a) {
          return a.toString().toUpperCase()
        }
      )
    );

    return $.map(sortGroup, function(val, i) {
      return val.group
    });
  },
  hint: true,
  template: "{{display}}",
  // emptyTemplate: "ไม่มีผลลัพธ์สำหรับ {{query}} , no result for {{query}}",
  source: {
    Station: {
      dynamic: true,
      template: "{{keyword}}",
      href: "{{url}}",
      display: ['keyword'],
      ajax: {
          url: "/searchTrain",
      }
    },
    Area: {
      dynamic: true,
      template: "{{keyword}}",
      href: "{{url}}",
      display: ['keyword'],
      ajax: {
          url: "/searchArea",
      }
    },
    University: {
      dynamic: true,
      template: "{{keyword}}",
      href: "{{url}}",
      display: ['keyword'],
      ajax: {
          url: "/searchUniversity",
      }
    },
    Landmark: {
      dynamic: true,
      template: "{{keyword}}",
      href: "{{url}}",
      display: ['keyword'],
      ajax: {
          url: "/searchLandmark",
      }
    },
    CondoName: {
      dynamic: true,
      template: "{{keyword}}",
      href: "{{url}}",
      display: ['keyword'],
      ajax: {
          url: "/searchCondo",
      }
    },
    
  },
  callback: {
    onClickAfter: function(node, a, item, event) {
      event.preventDefault();
      location.href = item.href;
    }
  },
  debug: false
});

function CheckHasValue(value) {
  return value.replace(/ /g, '').length;
}

function RemoveComma(value) {
  return value.replace(/,/g, '');
}


function ValidateImage(input) {
  var allowedExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
  var fileExtension = input.value.split('.').pop().toLowerCase();
  var isValidFile = false;
  for (var index in allowedExtension) {
      if (fileExtension === allowedExtension[index]) {
          isValidFile = true;
          break;
      }
  }
  if (!isValidFile) {
    Swal.fire(
      'ไม่สามารถดำเนินการได้',
      "ไฟล์ที่สามารถอัพโหลดได้ jpeg, jpg, png, gif, bmp เท่านั้น",
      'warning'
    );
  }
  return isValidFile;
}
