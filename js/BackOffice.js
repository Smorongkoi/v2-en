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

function RemoveComma(value) {
  return value.replace(/,/g, '');
}

function FormatDatepicker(value) {
  if (value != "") {
    value = value.split("/");
    value = value[2] + "-" + value[1] + "-" + value[0];
  }
  return value;
}
function numberWithCommas(number) {
  var parts = number.toString().split(".");
  parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  return parts.join(".");
}
