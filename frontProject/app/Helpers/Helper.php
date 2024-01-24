<?php

use Illuminate\Support\Facades\Storage;

function uploadResize( $file , $fileName_title , $path , $fix_size = null )
{
    $fileName_title = $fileName_title.".".$file->guessExtension();
    $size = GetimageSize($file);

    if ( $fix_size != null && $size[1] > $size[0] && $size[1] > $fix_size ) {
        $height = $fix_size;
        $width = round( $height * $size[0] / $size[1] );
    } elseif ( $fix_size != null && $size[1] <= $size[0] && $size[0] > $fix_size ) {
        $width = $fix_size;
        $height = round( $width * $size[1] / $size[0] );
    } else {
        $height = $size[1];
        $width = $size[0];
    }

    $image = Image::make($file->getRealPath())->resize($width, $height)->stream();

    if (Storage::disk('s3')->put($path.$fileName_title, $image)) {
        return $fileName_title;
    } else {
        return false;
    }

}

function deleteFile( $fileName_title , $path )
{
    Storage::disk('s3')->delete($path.$fileName_title);
}

function getFileUrl( $fileName_title , $path )
{
    return Storage::disk('s3')->temporaryUrl($path.$fileName_title, '+30 minutes');
}

function renameFileUrl( $fileName_title_old , $fileName_title_new , $path )
{
    $surnameFile = explode('.',$fileName_title_old);
    $fileName_title_new = $fileName_title_new.".".end($surnameFile);
    if (Storage::disk('s3')->move($path.$fileName_title_old , $path.$fileName_title_new)) {
        return $fileName_title_new;
    } else {
        return false;
    }
}

function datePickerFormat($text)
{
    if ($text != "") {
        $arrayData = explode('/',$text);
        return $arrayData[2] ."-". $arrayData[1] ."-". $arrayData[0];
    } else {
        return NULL;
    }

}

function DateTimeThai($strDate)
{
  $strYear = date("Y",strtotime($strDate))+543;
  $strMonth= date("n",strtotime($strDate));
  $strDay= date("j",strtotime($strDate));
  $strHour= date("H",strtotime($strDate));
  $strMinute= date("i",strtotime($strDate));
  $strSeconds= date("s",strtotime($strDate));
  $strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
  $strMonthThai=$strMonthCut[$strMonth];
  return "$strDay $strMonthThai $strYear, $strHour:$strMinute น.";
}

function DateThai($strDate)
{
  $strYear = date("Y",strtotime($strDate))+543;
  $strMonth= date("n",strtotime($strDate));
  $strDay= date("j",strtotime($strDate));
  $strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
  $strMonthThai=$strMonthCut[$strMonth];
  return "$strDay $strMonthThai $strYear";
}

function MonthThai($strDate)
{
  $strYear = date("Y",strtotime($strDate))+543;
  $strMonth= date("n",strtotime($strDate));
  $strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
  $strMonthThai=$strMonthCut[$strMonth];
  return "$strMonthThai $strYear";
}

const BAHT_TEXT_NUMBERS = array('ศูนย์', 'หนึ่ง', 'สอง', 'สาม', 'สี่', 'ห้า', 'หก', 'เจ็ด', 'แปด', 'เก้า');
const BAHT_TEXT_UNITS = array('', 'สิบ', 'ร้อย', 'พัน', 'หมื่น', 'แสน', 'ล้าน');
const BAHT_TEXT_ONE_IN_TENTH = 'เอ็ด';
const BAHT_TEXT_TWENTY = 'ยี่';
const BAHT_TEXT_INTEGER = 'ถ้วน';
const BAHT_TEXT_BAHT = 'บาท';
const BAHT_TEXT_SATANG = 'สตางค์';
const BAHT_TEXT_POINT = 'จุด';

/**
 * Convert baht number to Thai text
 * @param double|int $number
 * @param bool $include_unit
 * @param bool $display_zero
 * @return string|null
 */
function baht_text ($number, $include_unit = true, $display_zero = true)
{
    if (!is_numeric($number)) {
        return null;
    }

    $log = floor(log($number, 10));
    if ($log > 5) {
        $millions = floor($log / 6);
        $million_value = pow(1000000, $millions);
        $normalised_million = floor($number / $million_value);
        $rest = $number - ($normalised_million * $million_value);
        $millions_text = '';
        for ($i = 0; $i < $millions; $i++) {
            $millions_text .= BAHT_TEXT_UNITS[6];
        }
        return baht_text($normalised_million, false) . $millions_text . baht_text($rest, true, false);
    }

    $number_str = (string)floor($number);
    $text = '';
    $unit = 0;

    if ($display_zero && $number_str == '0') {
        $text = BAHT_TEXT_NUMBERS[0];
    } else for ($i = strlen($number_str) - 1; $i > -1; $i--) {
        $current_number = (int)$number_str[$i];

        $unit_text = '';
        if ($unit == 0 && $i > 0) {
            $previous_number = isset($number_str[$i - 1]) ? (int)$number_str[$i - 1] : 0;
            if ($current_number == 1 && $previous_number > 0) {
                $unit_text .= BAHT_TEXT_ONE_IN_TENTH;
            } else if ($current_number > 0) {
                $unit_text .= BAHT_TEXT_NUMBERS[$current_number];
            }
        } else if ($unit == 1 && $current_number == 2) {
            $unit_text .= BAHT_TEXT_TWENTY;
        } else if ($current_number > 0 && ($unit != 1 || $current_number != 1)) {
            $unit_text .= BAHT_TEXT_NUMBERS[$current_number];
        }

        if ($current_number > 0) {
            $unit_text .= BAHT_TEXT_UNITS[$unit];
        }

        $text = $unit_text . $text;
        $unit++;
    }

    if ($include_unit) {
        $text .= BAHT_TEXT_BAHT;

        $satang = explode('.', number_format($number, 2, '.', ''))[1];
        $text .= $satang == 0
            ? BAHT_TEXT_INTEGER
            : baht_text($satang, false) . BAHT_TEXT_SATANG;
    } else {
        $exploded = explode('.', $number);
        if (isset($exploded[1])) {
            $text .= BAHT_TEXT_POINT;
            $decimal = (string)$exploded[1];
            for ($i = 0; $i < strlen($decimal); $i++) {
                $text .= BAHT_TEXT_NUMBERS[$decimal[$i]];
            }
        }
    }

    return $text;
}

function CalMonths($time_from,$time_to)
{
  $date1 = $time_from;
  $date2 = $time_to;

  $ts1 = strtotime($date1);
  $ts2 = strtotime($date2);

  $year1 = date('Y', $ts1);
  $year2 = date('Y', $ts2);

  $month1 = date('m', $ts1);
  $month2 = date('m', $ts2);

  $day1 = date('d', $ts1);
  $day2 = date('d', $ts2);

  $year = $year2 - $year1;
  $month = (($year * 12) + $month2) - $month1;
  $day = (($month * 30) + $day2) - $day1;

  $new_diff = round($day / 30);

  if ($month1 < $month2) {
    $diff = (($year2 - $year1) * 12) + (($month2 - $month1) - 1);
  } elseif ($month1 == $month2) {
    $diff = (($year2 - $year1) * 12) + ($month2 - $month1);
  } else {
    $diff = (($year2 - $year1) * 12) + (($month2 - $month1) + 1);
  }

  return $new_diff;
}

function convertNumberToWord($num = false)
{
    $num = str_replace(array(',', ' '), '' , trim($num));
    if(! $num) {
        return false;
    }
    $num = (int) $num;
    $words = array();
    $list1 = array('', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven',
        'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'
    );
    $list2 = array('', 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety', 'hundred');
    $list3 = array('', 'thousand', 'million', 'billion', 'trillion', 'quadrillion', 'quintillion', 'sextillion', 'septillion',
        'octillion', 'nonillion', 'decillion', 'undecillion', 'duodecillion', 'tredecillion', 'quattuordecillion',
        'quindecillion', 'sexdecillion', 'septendecillion', 'octodecillion', 'novemdecillion', 'vigintillion'
    );
    $num_length = strlen($num);
    $levels = (int) (($num_length + 2) / 3);
    $max_length = $levels * 3;
    $num = substr('00' . $num, -$max_length);
    $num_levels = str_split($num, 3);
    for ($i = 0; $i < count($num_levels); $i++) {
        $levels--;
        $hundreds = (int) ($num_levels[$i] / 100);
        $hundreds = ($hundreds ? ' ' . $list1[$hundreds] . ' hundred' . ' ' : '');
        $tens = (int) ($num_levels[$i] % 100);
        $singles = '';
        if ( $tens < 20 ) {
            $tens = ($tens ? ' ' . $list1[$tens] . ' ' : '' );
        } else {
            $tens = (int)($tens / 10);
            $tens = ' ' . $list2[$tens] . ' ';
            $singles = (int) ($num_levels[$i] % 10);
            $singles = ' ' . $list1[$singles] . ' ';
        }
        $words[] = $hundreds . $tens . $singles . ( ( $levels && ( int ) ( $num_levels[$i] ) ) ? ' ' . $list3[$levels] . ' ' : '' );
    } //end for loop
    $commas = count($words);
    if ($commas > 1) {
        $commas = $commas - 1;
    }
    return implode(' ', $words);
}

function ChoiceAgreeSale($value)
{
  switch ($value) {
    case '0': $str = "-"; break;
    case '1': $str = "ผู้จะซื้อ"; break;
    case '2': $str = "ผู้จะขาย"; break;
    case '3': $str = "ผู้จะขายและผู้จะซื้อ ออกฝ่ายละครึ่ง"; break;
  }
  return $str;
}

function ChoiceAgreeSaleEN($value)
{
  switch ($value) {
    case '0': $str = "-"; break;
    case '1': $str = "Buyer"; break;
    case '2': $str = "Seller"; break;
    case '3': $str = "Seller and Buyer half off"; break;
  }
  return $str;
}

function AgreeType($value)
{
  switch ($value) {
    case '1': $str = "คอนโดมิเนียม"; break;
    case '2': $str = "บ้านเดี่ยว"; break;
    case '3': $str = "ทาวน์เฮ้าส์"; break;
  }
  return $str;
}

function AgreeTypeEN($value)
{
  switch ($value) {
    case '1': $str = "Condominium"; break;
    case '2': $str = "Detached house"; break;
    case '3': $str = "Townhouse"; break;
  }
  return $str;
}
?>
