<?php

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


    function get_email($user){
        return User::where('id', $user)->value('email');
    }

function str_slug($string)
{
    return str_replace(' ', '-', $string);
}

function generateRandomPassword($length = 8)
{
    // Define a character pool for the password
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';

    $password = '';
    $poolLength = strlen($characters) - 1;

    // Generate a random password by picking characters from the pool
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, $poolLength)];
    }

    return $password;
}

function data($user){
    return User::where('id', $user)->first();
}

function avatar($user){
    if(User::where('id', $user)->value('profile_picture') === NULL){
        return "/images/avatar.webp";
    }
    else{
        $user_id = User::where('id', $user)->value('user_id');
        return '/users/'.$user_id.'/'.User::where('id', $user)->value('profile_picture');
    }
}

function cover($user){
    if(User::where('id', $user)->value('cover') == null){
        return "/images/20.webp";
    }
    else{
        $user_id = User::where('id', $user)->value('user_id');
        return '/users/'.$user_id.'/'.User::where('id', $user)->value('cover');
    }  
}

function is_subscriber($user){
    if(User::where('id', $user)->value('role') == 'subscriber'){
        return true;
    }
    else{
        return false;
    }
}

function name($user){
    return User::where('id', $user)->value('fname').' '.User::where('id', $user)->value('lname');
}

function getUsers($offset, $limit, $category=true){
    if(strtolower($category) == "discover"){
        return DB::table('users')->where('role', 'vendor')->where('completed', 1)->orderBy('created_at', 'desc')->take($limit)->offset($offset)->get();
    }
    else{
        return DB::table('users')->where('role', 'vendor')->where('completed', 1)->where('category', $category)->orderBy('created_at', 'desc')->take($limit)->offset($offset)->get();
    }
    
}

function subscribers($creator){
    if(DB::table('subscribers')->where('creator_id', $creator)->count() >0){
        return DB::table('subscribers')->where('creator_id', $creator)->count();
    }
    else{
        return 0;
    }
}

function country_iso($name){
 $CI_COUNTRIES_ARRAY = array (
  'AW' => 'Aruba',
  'AF' => 'Afghanistan',
  'AO' => 'Angola',
  'AL' => 'Albania',
  'AD' => 'Andorra',
  'AE' => 'United Arab Emirates',
  'AR' => 'Argentina',
  'AM' => 'Armenia',
  'AS' => 'American Samoa',
  'AG' => 'Antigua and Barbuda',
  'AU' => 'Australia',
  'AT' => 'Austria',
  'AZ' => 'Azerbaijan',
  'BI' => 'Burundi',
  'BE' => 'Belgium',
  'BJ' => 'Benin',
  'BF' => 'Burkina Faso',
  'BD' => 'Bangladesh',
  'BG' => 'Bulgaria',
  'BH' => 'Bahrain',
  'BS' => 'Bahamas, The',
  'BA' => 'Bosnia and Herzegovina',
  'BY' => 'Belarus',
  'BZ' => 'Belize',
  'BM' => 'Bermuda',
  'BO' => 'Bolivia',
  'BR' => 'Brazil',
  'BB' => 'Barbados',
  'BN' => 'Brunei Darussalam',
  'BT' => 'Bhutan',
  'BW' => 'Botswana',
  'CF' => 'Central African Republic',
  'CA' => 'Canada',
  'CH' => 'Switzerland',
  'JG' => 'Channel Islands',
  'CL' => 'Chile',
  'CN' => 'China',
  'CI' => 'Cote d\'Ivoire',
  'CM' => 'Cameroon',
  'CD' => 'Congo, Dem. Rep.',
  'CG' => 'Congo, Rep.',
  'CO' => 'Colombia',
  'KM' => 'Comoros',
  'CV' => 'Cabo Verde',
  'CR' => 'Costa Rica',
  'CU' => 'Cuba',
  'CW' => 'Curacao',
  'KY' => 'Cayman Islands',
  'CY' => 'Cyprus',
  'CZ' => 'Czech Republic',
  'DE' => 'Germany',
  'DJ' => 'Djibouti',
  'DM' => 'Dominica',
  'DK' => 'Denmark',
  'DO' => 'Dominican Republic',
  'DZ' => 'Algeria',
  'EC' => 'Ecuador',
  'EG' => 'Egypt, Arab Rep.',
  'ER' => 'Eritrea',
  'ES' => 'Spain',
  'EE' => 'Estonia',
  'ET' => 'Ethiopia',
  'FI' => 'Finland',
  'FJ' => 'Fiji',
  'FR' => 'France',
  'FO' => 'Faroe Islands',
  'FM' => 'Micronesia, Fed. Sts.',
  'GA' => 'Gabon',
  'GB' => 'United Kingdom',
  'GE' => 'Georgia',
  'GH' => 'Ghana',
  'GI' => 'Gibraltar',
  'GN' => 'Guinea',
  'GM' => 'Gambia, The',
  'GW' => 'Guinea-Bissau',
  'GQ' => 'Equatorial Guinea',
  'GR' => 'Greece',
  'GD' => 'Grenada',
  'GL' => 'Greenland',
  'GT' => 'Guatemala',
  'GU' => 'Guam',
  'GY' => 'Guyana',
  'HK' => 'Hong Kong SAR, China',
  'HN' => 'Honduras',
  'HR' => 'Croatia',
  'HT' => 'Haiti',
  'HU' => 'Hungary',
  'ID' => 'Indonesia',
  'IM' => 'Isle of Man',
  'IN' => 'India',
  'IE' => 'Ireland',
  'IR' => 'Iran, Islamic Rep.',
  'IQ' => 'Iraq',
  'IS' => 'Iceland',
  'IL' => 'Israel',
  'IT' => 'Italy',
  'JM' => 'Jamaica',
  'JO' => 'Jordan',
  'JP' => 'Japan',
  'KZ' => 'Kazakhstan',
  'KE' => 'Kenya',
  'KG' => 'Kyrgyz Republic',
  'KH' => 'Cambodia',
  'KI' => 'Kiribati',
  'KN' => 'St. Kitts and Nevis',
  'KR' => 'Korea, Rep.',
  'KW' => 'Kuwait',
  'LA' => 'Lao PDR',
  'LB' => 'Lebanon',
  'LR' => 'Liberia',
  'LY' => 'Libya',
  'LC' => 'St. Lucia',
  'LI' => 'Liechtenstein',
  'LK' => 'Sri Lanka',
  'LS' => 'Lesotho',
  'LT' => 'Lithuania',
  'LU' => 'Luxembourg',
  'LV' => 'Latvia',
  'MO' => 'Macao SAR, China',
  'MF' => 'St. Martin (French part)',
  'MA' => 'Morocco',
  'MC' => 'Monaco',
  'MD' => 'Moldova',
  'MG' => 'Madagascar',
  'MV' => 'Maldives',
  'MX' => 'Mexico',
  'MH' => 'Marshall Islands',
  'MK' => 'Macedonia, FYR',
  'ML' => 'Mali',
  'MT' => 'Malta',
  'MM' => 'Myanmar',
  'ME' => 'Montenegro',
  'MN' => 'Mongolia',
  'MP' => 'Northern Mariana Islands',
  'MZ' => 'Mozambique',
  'MR' => 'Mauritania',
  'MU' => 'Mauritius',
  'MW' => 'Malawi',
  'MY' => 'Malaysia',
  'NA' => 'Namibia',
  'NC' => 'New Caledonia',
  'NE' => 'Niger',
  'NG' => 'Nigeria',
  'NI' => 'Nicaragua',
  'NL' => 'Netherlands',
  'NO' => 'Norway',
  'NP' => 'Nepal',
  'NR' => 'Nauru',
  'NZ' => 'New Zealand',
  'OM' => 'Oman',
  'PK' => 'Pakistan',
  'PA' => 'Panama',
  'PE' => 'Peru',
  'PH' => 'Philippines',
  'PW' => 'Palau',
  'PG' => 'Papua New Guinea',
  'PL' => 'Poland',
  'PR' => 'Puerto Rico',
  'KP' => 'Korea, Dem. People’s Rep.',
  'PT' => 'Portugal',
  'PY' => 'Paraguay',
  'PS' => 'West Bank and Gaza',
  'PF' => 'French Polynesia',
  'QA' => 'Qatar',
  'RO' => 'Romania',
  'RU' => 'Russian Federation',
  'RW' => 'Rwanda',
  'SA' => 'Saudi Arabia',
  'SD' => 'Sudan',
  'SN' => 'Senegal',
  'SG' => 'Singapore',
  'SB' => 'Solomon Islands',
  'SL' => 'Sierra Leone',
  'SV' => 'El Salvador',
  'SM' => 'San Marino',
  'SO' => 'Somalia',
  'RS' => 'Serbia',
  'SS' => 'South Sudan',
  'ST' => 'Sao Tome and Principe',
  'SR' => 'Suriname',
  'SK' => 'Slovak Republic',
  'SI' => 'Slovenia',
  'SE' => 'Sweden',
  'SZ' => 'Swaziland',
  'SX' => 'Sint Maarten (Dutch part)',
  'SC' => 'Seychelles',
  'SY' => 'Syrian Arab Republic',
  'TC' => 'Turks and Caicos Islands',
  'TD' => 'Chad',
  'TG' => 'Togo',
  'TH' => 'Thailand',
  'TJ' => 'Tajikistan',
  'TM' => 'Turkmenistan',
  'TL' => 'Timor-Leste',
  'TO' => 'Tonga',
  'TT' => 'Trinidad and Tobago',
  'TN' => 'Tunisia',
  'TR' => 'Turkey',
  'TV' => 'Tuvalu',
  'TW' => 'Taiwan, China',
  'TZ' => 'Tanzania',
  'UG' => 'Uganda',
  'UA' => 'Ukraine',
  'UY' => 'Uruguay',
  'US' => 'United States',
  'UZ' => 'Uzbekistan',
  'VC' => 'St. Vincent and the Grenadines',
  'VE' => 'Venezuela, RB',
  'VG' => 'British Virgin Islands',
  'VI' => 'Virgin Islands (U.S.)',
  'VN' => 'Vietnam',
  'VU' => 'Vanuatu',
  'WS' => 'Samoa',
  'XK' => 'Kosovo',
  'YE' => 'Yemen, Rep.',
  'ZA' => 'South Africa',
  'ZM' => 'Zambia',
  'ZW' => 'Zimbabwe',
);

$countryCode = array_search($name, $CI_COUNTRIES_ARRAY);

return $countryCode !== false ? $countryCode : null;
}

function displayCountryFlag($countryCode)
{
    $flagUrl = "https://www.countryflags.io/{$countryCode}/flat/64.png";
    $flagHtml = "<img src=\"{$flagUrl}\" alt=\"Flag of {$countryCode}\">";
    echo $flagHtml;
}

function redirectToPrevious()
{
    $previousUrls = session('previousUrls', []);
    $previousUrls[] = url()->previous();
    session()->put('previousUrls', $previousUrls);
    return redirect()->back();
}


function subscriptions($user){
    return DB::table('subscriptions')->where('user_id', $user)->get();
}


function price($creator){
    return DB::table('users')->where('id', $creator)->value('price');
}

function subscribed_to_channel($user, $creator){
    if(DB::table('subscriptions')->where('user_id', $user)->where('creator', $creator)->count()>0){
        return true;
    }
    else{
        return false;
    }
}

function completed($user){
    if(DB::table('users')->where('id', $user)->where('completed', 1)->count() >0 ){
        return true;
    }
    else{
        return false;
    }
}

function has_review($user, $creator){
    if(DB::table('ratings')->where('user_id', $user)->where('creator_id', $creator)->count()>0){
        return true;
    }
    else{
        return false;
    }
}

function isSubscribed($id){
        return DB::table('subscribers')->where(['user_id'=>$id])->count()>0;
    }

function my_review($user, $creator){
    return DB::table('ratings')->where('user_id', $user)->where('creator_id', $creator)->first();
}

function review($creator){
    return DB::table('ratings')->where('creator_id', $creator)->get();
}

function categories(){
    return User::whereNotNull('category')->distinct()->pluck('category');
}

?>
