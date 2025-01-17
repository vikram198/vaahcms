<?php

function vh_get_country_by_country_code($country_code)
{
    $countries = vh_get_country_list();

    $country = vh_search_country($countries, 'country_code', $country_code);

    return $country;
}
//---------------------------------------------------
function vh_get_country_by_country_name($country_name)
{
    $countries = vh_get_country_list();

    $country = vh_search_country($countries, 'name', $country_name);

    return $country;
}
//---------------------------------------------------
function vh_get_country_by_calling_code($calling_code)
{
    $countries = vh_get_country_list();

    $country = vh_search_country($countries, 'calling_code', $calling_code);

    return $country;
}
//---------------------------------------------------
//---------------------------------------------------
//---------------------------------------------------
function vh_search_country($array, $key_name, $value)
{
    foreach($array as $key => $array_item)
    {
        if ( $array_item[$key_name] === $value )
            return $array[$key];
    }

    return false;
}
//---------------------------------------------------
function vh_get_country_list_select_options($show='country_name')
{
    $html = "";
    $list = vh_get_country_list();

    $html .= '<option value="">Select</option>';

    foreach ($list as $item)
    {
        if($show == 'country_name')
        {
            $html .= '<option value="'.$item['code'].'">'.$item['name'].'</option>';
        } else if($show == 'country_code')
        {
            $html .= '<option value="'.$item['code'].'">'.$item['code'].'</option>';
        }else if($show == 'calling_code')
        {
            $html .= '<option value="'.$item['calling_code'].'">'.$item['calling_code'].'</option>';
        }
    }

    return $html;
}
//---------------------------------------------------

//---------------------------------------------------
//---------------------------------------------------
//---------------------------------------------------
function vh_get_country_list()
{

    $countries = [];
    $countries[] = array("code" => "IN", "name" => "India", "calling_code" => "91");
    $countries[] = array("code" => "US", "name" => "United States", "calling_code" => "1");

    $countries[] = array("code" => "AF", "name" => "Afghanistan", "calling_code" => "93");
    $countries[] = array("code" => "AL", "name" => "Albania", "calling_code" => "355");
    $countries[] = array("code" => "DZ", "name" => "Algeria", "calling_code" => "213");
    $countries[] = array("code" => "AS", "name" => "American Samoa", "calling_code" => "1");
    $countries[] = array("code" => "AD", "name" => "Andorra", "calling_code" => "376");
    $countries[] = array("code" => "AO", "name" => "Angola", "calling_code" => "244");
    $countries[] = array("code" => "AI", "name" => "Anguilla", "calling_code" => "1");
    $countries[] = array("code" => "AG", "name" => "Antigua", "calling_code" => "1");
    $countries[] = array("code" => "AR", "name" => "Argentina", "calling_code" => "54");
    $countries[] = array("code" => "AM", "name" => "Armenia", "calling_code" => "374");
    $countries[] = array("code" => "AW", "name" => "Aruba", "calling_code" => "297");
    $countries[] = array("code" => "AU", "name" => "Australia", "calling_code" => "61");
    $countries[] = array("code" => "AT", "name" => "Austria", "calling_code" => "43");
    $countries[] = array("code" => "AZ", "name" => "Azerbaijan", "calling_code" => "994");
    $countries[] = array("code" => "BH", "name" => "Bahrain", "calling_code" => "973");
    $countries[] = array("code" => "BD", "name" => "Bangladesh", "calling_code" => "880");
    $countries[] = array("code" => "BB", "name" => "Barbados", "calling_code" => "1");
    $countries[] = array("code" => "BY", "name" => "Belarus", "calling_code" => "375");
    $countries[] = array("code" => "BE", "name" => "Belgium", "calling_code" => "32");
    $countries[] = array("code" => "BZ", "name" => "Belize", "calling_code" => "501");
    $countries[] = array("code" => "BJ", "name" => "Benin", "calling_code" => "229");
    $countries[] = array("code" => "BM", "name" => "Bermuda", "calling_code" => "1");
    $countries[] = array("code" => "BT", "name" => "Bhutan", "calling_code" => "975");
    $countries[] = array("code" => "BO", "name" => "Bolivia", "calling_code" => "591");
    $countries[] = array("code" => "BA", "name" => "Bosnia and Herzegovina", "calling_code" => "387");
    $countries[] = array("code" => "BW", "name" => "Botswana", "calling_code" => "267");
    $countries[] = array("code" => "BR", "name" => "Brazil", "calling_code" => "55");
    $countries[] = array("code" => "IO", "name" => "British Indian Ocean Territory", "calling_code" => "246");
    $countries[] = array("code" => "VG", "name" => "British Virgin Islands", "calling_code" => "1");
    $countries[] = array("code" => "BN", "name" => "Brunei", "calling_code" => "673");
    $countries[] = array("code" => "BG", "name" => "Bulgaria", "calling_code" => "359");
    $countries[] = array("code" => "BF", "name" => "Burkina Faso", "calling_code" => "226");
    $countries[] = array("code" => "MM", "name" => "Burma Myanmar", "calling_code" => "95");
    $countries[] = array("code" => "BI", "name" => "Burundi", "calling_code" => "257");
    $countries[] = array("code" => "KH", "name" => "Cambodia", "calling_code" => "855");
    $countries[] = array("code" => "CM", "name" => "Cameroon", "calling_code" => "237");
    $countries[] = array("code" => "CA", "name" => "Canada", "calling_code" => "1");
    $countries[] = array("code" => "CV", "name" => "Cape Verde", "calling_code" => "238");
    $countries[] = array("code" => "KY", "name" => "Cayman Islands", "calling_code" => "1");
    $countries[] = array("code" => "CF", "name" => "Central African Republic", "calling_code" => "236");
    $countries[] = array("code" => "TD", "name" => "Chad", "calling_code" => "235");
    $countries[] = array("code" => "CL", "name" => "Chile", "calling_code" => "56");
    $countries[] = array("code" => "CN", "name" => "China", "calling_code" => "86");
    $countries[] = array("code" => "CO", "name" => "Colombia", "calling_code" => "57");
    $countries[] = array("code" => "KM", "name" => "Comoros", "calling_code" => "269");
    $countries[] = array("code" => "CK", "name" => "Cook Islands", "calling_code" => "682");
    $countries[] = array("code" => "CR", "name" => "Costa Rica", "calling_code" => "506");
    $countries[] = array("code" => "CI", "name" => "Côte d'Ivoire", "calling_code" => "225");
    $countries[] = array("code" => "HR", "name" => "Croatia", "calling_code" => "385");
    $countries[] = array("code" => "CU", "name" => "Cuba", "calling_code" => "53");
    $countries[] = array("code" => "CY", "name" => "Cyprus", "calling_code" => "357");
    $countries[] = array("code" => "CZ", "name" => "Czech Republic", "calling_code" => "420");
    $countries[] = array("code" => "CD", "name" => "Democratic Republic of Congo", "calling_code" => "243");
    $countries[] = array("code" => "DK", "name" => "Denmark", "calling_code" => "45");
    $countries[] = array("code" => "DJ", "name" => "Djibouti", "calling_code" => "253");
    $countries[] = array("code" => "DM", "name" => "Dominica", "calling_code" => "1");
    $countries[] = array("code" => "DO", "name" => "Dominican Republic", "calling_code" => "1");
    $countries[] = array("code" => "EC", "name" => "Ecuador", "calling_code" => "593");
    $countries[] = array("code" => "EG", "name" => "Egypt", "calling_code" => "20");
    $countries[] = array("code" => "SV", "name" => "El Salvador", "calling_code" => "503");
    $countries[] = array("code" => "GQ", "name" => "Equatorial Guinea", "calling_code" => "240");
    $countries[] = array("code" => "ER", "name" => "Eritrea", "calling_code" => "291");
    $countries[] = array("code" => "EE", "name" => "Estonia", "calling_code" => "372");
    $countries[] = array("code" => "ET", "name" => "Ethiopia", "calling_code" => "251");
    $countries[] = array("code" => "FK", "name" => "Falkland Islands", "calling_code" => "500");
    $countries[] = array("code" => "FO", "name" => "Faroe Islands", "calling_code" => "298");
    $countries[] = array("code" => "FM", "name" => "Federated States of Micronesia", "calling_code" => "691");
    $countries[] = array("code" => "FJ", "name" => "Fiji", "calling_code" => "679");
    $countries[] = array("code" => "FI", "name" => "Finland", "calling_code" => "358");
    $countries[] = array("code" => "FR", "name" => "France", "calling_code" => "33");
    $countries[] = array("code" => "GF", "name" => "French Guiana", "calling_code" => "594");
    $countries[] = array("code" => "PF", "name" => "French Polynesia", "calling_code" => "689");
    $countries[] = array("code" => "GA", "name" => "Gabon", "calling_code" => "241");
    $countries[] = array("code" => "GE", "name" => "Georgia", "calling_code" => "995");
    $countries[] = array("code" => "DE", "name" => "Germany", "calling_code" => "49");
    $countries[] = array("code" => "GH", "name" => "Ghana", "calling_code" => "233");
    $countries[] = array("code" => "GI", "name" => "Gibraltar", "calling_code" => "350");
    $countries[] = array("code" => "GR", "name" => "Greece", "calling_code" => "30");
    $countries[] = array("code" => "GL", "name" => "Greenland", "calling_code" => "299");
    $countries[] = array("code" => "GD", "name" => "Grenada", "calling_code" => "1");
    $countries[] = array("code" => "GP", "name" => "Guadeloupe", "calling_code" => "590");
    $countries[] = array("code" => "GU", "name" => "Guam", "calling_code" => "1");
    $countries[] = array("code" => "GT", "name" => "Guatemala", "calling_code" => "502");
    $countries[] = array("code" => "GN", "name" => "Guinea", "calling_code" => "224");
    $countries[] = array("code" => "GW", "name" => "Guinea-Bissau", "calling_code" => "245");
    $countries[] = array("code" => "GY", "name" => "Guyana", "calling_code" => "592");
    $countries[] = array("code" => "HT", "name" => "Haiti", "calling_code" => "509");
    $countries[] = array("code" => "HN", "name" => "Honduras", "calling_code" => "504");
    $countries[] = array("code" => "HK", "name" => "Hong Kong", "calling_code" => "852");
    $countries[] = array("code" => "HU", "name" => "Hungary", "calling_code" => "36");
    $countries[] = array("code" => "IS", "name" => "Iceland", "calling_code" => "354");

    $countries[] = array("code" => "ID", "name" => "Indonesia", "calling_code" => "62");
    $countries[] = array("code" => "IR", "name" => "Iran", "calling_code" => "98");
    $countries[] = array("code" => "IQ", "name" => "Iraq", "calling_code" => "964");
    $countries[] = array("code" => "IE", "name" => "Ireland", "calling_code" => "353");
    $countries[] = array("code" => "IL", "name" => "Israel", "calling_code" => "972");
    $countries[] = array("code" => "IT", "name" => "Italy", "calling_code" => "39");
    $countries[] = array("code" => "JM", "name" => "Jamaica", "calling_code" => "1");
    $countries[] = array("code" => "JP", "name" => "Japan", "calling_code" => "81");
    $countries[] = array("code" => "JO", "name" => "Jordan", "calling_code" => "962");
    $countries[] = array("code" => "KZ", "name" => "Kazakhstan", "calling_code" => "7");
    $countries[] = array("code" => "KE", "name" => "Kenya", "calling_code" => "254");
    $countries[] = array("code" => "KI", "name" => "Kiribati", "calling_code" => "686");
    $countries[] = array("code" => "XK", "name" => "Kosovo", "calling_code" => "381");
    $countries[] = array("code" => "KW", "name" => "Kuwait", "calling_code" => "965");
    $countries[] = array("code" => "KG", "name" => "Kyrgyzstan", "calling_code" => "996");
    $countries[] = array("code" => "LA", "name" => "Laos", "calling_code" => "856");
    $countries[] = array("code" => "LV", "name" => "Latvia", "calling_code" => "371");
    $countries[] = array("code" => "LB", "name" => "Lebanon", "calling_code" => "961");
    $countries[] = array("code" => "LS", "name" => "Lesotho", "calling_code" => "266");
    $countries[] = array("code" => "LR", "name" => "Liberia", "calling_code" => "231");
    $countries[] = array("code" => "LY", "name" => "Libya", "calling_code" => "218");
    $countries[] = array("code" => "LI", "name" => "Liechtenstein", "calling_code" => "423");
    $countries[] = array("code" => "LT", "name" => "Lithuania", "calling_code" => "370");
    $countries[] = array("code" => "LU", "name" => "Luxembourg", "calling_code" => "352");
    $countries[] = array("code" => "MO", "name" => "Macau", "calling_code" => "853");
    $countries[] = array("code" => "MK", "name" => "Macedonia", "calling_code" => "389");
    $countries[] = array("code" => "MG", "name" => "Madagascar", "calling_code" => "261");
    $countries[] = array("code" => "MW", "name" => "Malawi", "calling_code" => "265");
    $countries[] = array("code" => "MY", "name" => "Malaysia", "calling_code" => "60");
    $countries[] = array("code" => "MV", "name" => "Maldives", "calling_code" => "960");
    $countries[] = array("code" => "ML", "name" => "Mali", "calling_code" => "223");
    $countries[] = array("code" => "MT", "name" => "Malta", "calling_code" => "356");
    $countries[] = array("code" => "MH", "name" => "Marshall Islands", "calling_code" => "692");
    $countries[] = array("code" => "MQ", "name" => "Martinique", "calling_code" => "596");
    $countries[] = array("code" => "MR", "name" => "Mauritania", "calling_code" => "222");
    $countries[] = array("code" => "MU", "name" => "Mauritius", "calling_code" => "230");
    $countries[] = array("code" => "YT", "name" => "Mayotte", "calling_code" => "262");
    $countries[] = array("code" => "MX", "name" => "Mexico", "calling_code" => "52");
    $countries[] = array("code" => "MD", "name" => "Moldova", "calling_code" => "373");
    $countries[] = array("code" => "MC", "name" => "Monaco", "calling_code" => "377");
    $countries[] = array("code" => "MN", "name" => "Mongolia", "calling_code" => "976");
    $countries[] = array("code" => "ME", "name" => "Montenegro", "calling_code" => "382");
    $countries[] = array("code" => "MS", "name" => "Montserrat", "calling_code" => "1");
    $countries[] = array("code" => "MA", "name" => "Morocco", "calling_code" => "212");
    $countries[] = array("code" => "MZ", "name" => "Mozambique", "calling_code" => "258");
    $countries[] = array("code" => "NA", "name" => "Namibia", "calling_code" => "264");
    $countries[] = array("code" => "NR", "name" => "Nauru", "calling_code" => "674");
    $countries[] = array("code" => "NP", "name" => "Nepal", "calling_code" => "977");
    $countries[] = array("code" => "NL", "name" => "Netherlands", "calling_code" => "31");
    $countries[] = array("code" => "AN", "name" => "Netherlands Antilles", "calling_code" => "599");
    $countries[] = array("code" => "NC", "name" => "New Caledonia", "calling_code" => "687");
    $countries[] = array("code" => "NZ", "name" => "New Zealand", "calling_code" => "64");
    $countries[] = array("code" => "NI", "name" => "Nicaragua", "calling_code" => "505");
    $countries[] = array("code" => "NE", "name" => "Niger", "calling_code" => "227");
    $countries[] = array("code" => "NG", "name" => "Nigeria", "calling_code" => "234");
    $countries[] = array("code" => "NU", "name" => "Niue", "calling_code" => "683");
    $countries[] = array("code" => "NF", "name" => "Norfolk Island", "calling_code" => "672");
    $countries[] = array("code" => "KP", "name" => "North Korea", "calling_code" => "850");
    $countries[] = array("code" => "MP", "name" => "Northern Mariana Islands", "calling_code" => "1");
    $countries[] = array("code" => "NO", "name" => "Norway", "calling_code" => "47");
    $countries[] = array("code" => "OM", "name" => "Oman", "calling_code" => "968");
    $countries[] = array("code" => "PK", "name" => "Pakistan", "calling_code" => "92");
    $countries[] = array("code" => "PW", "name" => "Palau", "calling_code" => "680");
    $countries[] = array("code" => "PS", "name" => "Palestine", "calling_code" => "970");
    $countries[] = array("code" => "PA", "name" => "Panama", "calling_code" => "507");
    $countries[] = array("code" => "PG", "name" => "Papua New Guinea", "calling_code" => "675");
    $countries[] = array("code" => "PY", "name" => "Paraguay", "calling_code" => "595");
    $countries[] = array("code" => "PE", "name" => "Peru", "calling_code" => "51");
    $countries[] = array("code" => "PH", "name" => "Philippines", "calling_code" => "63");
    $countries[] = array("code" => "PL", "name" => "Poland", "calling_code" => "48");
    $countries[] = array("code" => "PT", "name" => "Portugal", "calling_code" => "351");
    $countries[] = array("code" => "PR", "name" => "Puerto Rico", "calling_code" => "1");
    $countries[] = array("code" => "QA", "name" => "Qatar", "calling_code" => "974");
    $countries[] = array("code" => "CG", "name" => "Republic of the Congo", "calling_code" => "242");
    $countries[] = array("code" => "RE", "name" => "Réunion", "calling_code" => "262");
    $countries[] = array("code" => "RO", "name" => "Romania", "calling_code" => "40");
    $countries[] = array("code" => "RU", "name" => "Russia", "calling_code" => "7");
    $countries[] = array("code" => "RW", "name" => "Rwanda", "calling_code" => "250");
    $countries[] = array("code" => "BL", "name" => "Saint Barthélemy", "calling_code" => "590");
    $countries[] = array("code" => "SH", "name" => "Saint Helena", "calling_code" => "290");
    $countries[] = array("code" => "KN", "name" => "Saint Kitts and Nevis", "calling_code" => "1");
    $countries[] = array("code" => "MF", "name" => "Saint Martin", "calling_code" => "590");
    $countries[] = array("code" => "PM", "name" => "Saint Pierre and Miquelon", "calling_code" => "508");
    $countries[] = array("code" => "VC", "name" => "Saint Vincent and the Grenadines", "calling_code" => "1");
    $countries[] = array("code" => "WS", "name" => "Samoa", "calling_code" => "685");
    $countries[] = array("code" => "SM", "name" => "San Marino", "calling_code" => "378");
    $countries[] = array("code" => "ST", "name" => "São Tomé and Príncipe", "calling_code" => "239");
    $countries[] = array("code" => "SA", "name" => "Saudi Arabia", "calling_code" => "966");
    $countries[] = array("code" => "SN", "name" => "Senegal", "calling_code" => "221");
    $countries[] = array("code" => "RS", "name" => "Serbia", "calling_code" => "381");
    $countries[] = array("code" => "SC", "name" => "Seychelles", "calling_code" => "248");
    $countries[] = array("code" => "SL", "name" => "Sierra Leone", "calling_code" => "232");
    $countries[] = array("code" => "SG", "name" => "Singapore", "calling_code" => "65");
    $countries[] = array("code" => "SK", "name" => "Slovakia", "calling_code" => "421");
    $countries[] = array("code" => "SI", "name" => "Slovenia", "calling_code" => "386");
    $countries[] = array("code" => "SB", "name" => "Solomon Islands", "calling_code" => "677");
    $countries[] = array("code" => "SO", "name" => "Somalia", "calling_code" => "252");
    $countries[] = array("code" => "ZA", "name" => "South Africa", "calling_code" => "27");
    $countries[] = array("code" => "KR", "name" => "South Korea", "calling_code" => "82");
    $countries[] = array("code" => "ES", "name" => "Spain", "calling_code" => "34");
    $countries[] = array("code" => "LK", "name" => "Sri Lanka", "calling_code" => "94");
    $countries[] = array("code" => "LC", "name" => "St. Lucia", "calling_code" => "1");
    $countries[] = array("code" => "SD", "name" => "Sudan", "calling_code" => "249");
    $countries[] = array("code" => "SR", "name" => "Suriname", "calling_code" => "597");
    $countries[] = array("code" => "SZ", "name" => "Swaziland", "calling_code" => "268");
    $countries[] = array("code" => "SE", "name" => "Sweden", "calling_code" => "46");
    $countries[] = array("code" => "CH", "name" => "Switzerland", "calling_code" => "41");
    $countries[] = array("code" => "SY", "name" => "Syria", "calling_code" => "963");
    $countries[] = array("code" => "TW", "name" => "Taiwan", "calling_code" => "886");
    $countries[] = array("code" => "TJ", "name" => "Tajikistan", "calling_code" => "992");
    $countries[] = array("code" => "TZ", "name" => "Tanzania", "calling_code" => "255");
    $countries[] = array("code" => "TH", "name" => "Thailand", "calling_code" => "66");
    $countries[] = array("code" => "BS", "name" => "The Bahamas", "calling_code" => "1");
    $countries[] = array("code" => "GM", "name" => "The Gambia", "calling_code" => "220");
    $countries[] = array("code" => "TL", "name" => "Timor-Leste", "calling_code" => "670");
    $countries[] = array("code" => "TG", "name" => "Togo", "calling_code" => "228");
    $countries[] = array("code" => "TK", "name" => "Tokelau", "calling_code" => "690");
    $countries[] = array("code" => "TO", "name" => "Tonga", "calling_code" => "676");
    $countries[] = array("code" => "TT", "name" => "Trinidad and Tobago", "calling_code" => "1");
    $countries[] = array("code" => "TN", "name" => "Tunisia", "calling_code" => "216");
    $countries[] = array("code" => "TR", "name" => "Turkey", "calling_code" => "90");
    $countries[] = array("code" => "TM", "name" => "Turkmenistan", "calling_code" => "993");
    $countries[] = array("code" => "TC", "name" => "Turks and Caicos Islands", "calling_code" => "1");
    $countries[] = array("code" => "TV", "name" => "Tuvalu", "calling_code" => "688");
    $countries[] = array("code" => "UG", "name" => "Uganda", "calling_code" => "256");
    $countries[] = array("code" => "UA", "name" => "Ukraine", "calling_code" => "380");
    $countries[] = array("code" => "AE", "name" => "United Arab Emirates", "calling_code" => "971");
    $countries[] = array("code" => "GB", "name" => "United Kingdom", "calling_code" => "44");

    $countries[] = array("code" => "UY", "name" => "Uruguay", "calling_code" => "598");
    $countries[] = array("code" => "VI", "name" => "US Virgin Islands", "calling_code" => "1");
    $countries[] = array("code" => "UZ", "name" => "Uzbekistan", "calling_code" => "998");
    $countries[] = array("code" => "VU", "name" => "Vanuatu", "calling_code" => "678");
    $countries[] = array("code" => "VA", "name" => "Vatican City", "calling_code" => "39");
    $countries[] = array("code" => "VE", "name" => "Venezuela", "calling_code" => "58");
    $countries[] = array("code" => "VN", "name" => "Vietnam", "calling_code" => "84");
    $countries[] = array("code" => "WF", "name" => "Wallis and Futuna", "calling_code" => "681");
    $countries[] = array("code" => "YE", "name" => "Yemen", "calling_code" => "967");
    $countries[] = array("code" => "ZM", "name" => "Zambia", "calling_code" => "260");
    $countries[] = array("code" => "ZW", "name" => "Zimbabwe", "calling_code" => "263");

    return $countries;
}
//---------------------------------------------------
function vh_get_country_list_with_slugs()
{

    $countries = [];
    $countries[] = array("slug" => "IN", "name" => "India", "calling_code" => "91");
    $countries[] = array("slug" => "US", "name" => "United States", "calling_code" => "1");

    $countries[] = array("slug" => "AF", "name" => "Afghanistan", "calling_code" => "93");
    $countries[] = array("slug" => "AL", "name" => "Albania", "calling_code" => "355");
    $countries[] = array("slug" => "DZ", "name" => "Algeria", "calling_code" => "213");
    $countries[] = array("slug" => "AS", "name" => "American Samoa", "calling_code" => "1");
    $countries[] = array("slug" => "AD", "name" => "Andorra", "calling_code" => "376");
    $countries[] = array("slug" => "AO", "name" => "Angola", "calling_code" => "244");
    $countries[] = array("slug" => "AI", "name" => "Anguilla", "calling_code" => "1");
    $countries[] = array("slug" => "AG", "name" => "Antigua", "calling_code" => "1");
    $countries[] = array("slug" => "AR", "name" => "Argentina", "calling_code" => "54");
    $countries[] = array("slug" => "AM", "name" => "Armenia", "calling_code" => "374");
    $countries[] = array("slug" => "AW", "name" => "Aruba", "calling_code" => "297");
    $countries[] = array("slug" => "AU", "name" => "Australia", "calling_code" => "61");
    $countries[] = array("slug" => "AT", "name" => "Austria", "calling_code" => "43");
    $countries[] = array("slug" => "AZ", "name" => "Azerbaijan", "calling_code" => "994");
    $countries[] = array("slug" => "BH", "name" => "Bahrain", "calling_code" => "973");
    $countries[] = array("slug" => "BD", "name" => "Bangladesh", "calling_code" => "880");
    $countries[] = array("slug" => "BB", "name" => "Barbados", "calling_code" => "1");
    $countries[] = array("slug" => "BY", "name" => "Belarus", "calling_code" => "375");
    $countries[] = array("slug" => "BE", "name" => "Belgium", "calling_code" => "32");
    $countries[] = array("slug" => "BZ", "name" => "Belize", "calling_code" => "501");
    $countries[] = array("slug" => "BJ", "name" => "Benin", "calling_code" => "229");
    $countries[] = array("slug" => "BM", "name" => "Bermuda", "calling_code" => "1");
    $countries[] = array("slug" => "BT", "name" => "Bhutan", "calling_code" => "975");
    $countries[] = array("slug" => "BO", "name" => "Bolivia", "calling_code" => "591");
    $countries[] = array("slug" => "BA", "name" => "Bosnia and Herzegovina", "calling_code" => "387");
    $countries[] = array("slug" => "BW", "name" => "Botswana", "calling_code" => "267");
    $countries[] = array("slug" => "BR", "name" => "Brazil", "calling_code" => "55");
    $countries[] = array("slug" => "IO", "name" => "British Indian Ocean Territory", "calling_code" => "246");
    $countries[] = array("slug" => "VG", "name" => "British Virgin Islands", "calling_code" => "1");
    $countries[] = array("slug" => "BN", "name" => "Brunei", "calling_code" => "673");
    $countries[] = array("slug" => "BG", "name" => "Bulgaria", "calling_code" => "359");
    $countries[] = array("slug" => "BF", "name" => "Burkina Faso", "calling_code" => "226");
    $countries[] = array("slug" => "MM", "name" => "Burma Myanmar", "calling_code" => "95");
    $countries[] = array("slug" => "BI", "name" => "Burundi", "calling_code" => "257");
    $countries[] = array("slug" => "KH", "name" => "Cambodia", "calling_code" => "855");
    $countries[] = array("slug" => "CM", "name" => "Cameroon", "calling_code" => "237");
    $countries[] = array("slug" => "CA", "name" => "Canada", "calling_code" => "1");
    $countries[] = array("slug" => "CV", "name" => "Cape Verde", "calling_code" => "238");
    $countries[] = array("slug" => "KY", "name" => "Cayman Islands", "calling_code" => "1");
    $countries[] = array("slug" => "CF", "name" => "Central African Republic", "calling_code" => "236");
    $countries[] = array("slug" => "TD", "name" => "Chad", "calling_code" => "235");
    $countries[] = array("slug" => "CL", "name" => "Chile", "calling_code" => "56");
    $countries[] = array("slug" => "CN", "name" => "China", "calling_code" => "86");
    $countries[] = array("slug" => "CO", "name" => "Colombia", "calling_code" => "57");
    $countries[] = array("slug" => "KM", "name" => "Comoros", "calling_code" => "269");
    $countries[] = array("slug" => "CK", "name" => "Cook Islands", "calling_code" => "682");
    $countries[] = array("slug" => "CR", "name" => "Costa Rica", "calling_code" => "506");
    $countries[] = array("slug" => "CI", "name" => "Côte d'Ivoire", "calling_code" => "225");
    $countries[] = array("slug" => "HR", "name" => "Croatia", "calling_code" => "385");
    $countries[] = array("slug" => "CU", "name" => "Cuba", "calling_code" => "53");
    $countries[] = array("slug" => "CY", "name" => "Cyprus", "calling_code" => "357");
    $countries[] = array("slug" => "CZ", "name" => "Czech Republic", "calling_code" => "420");
    $countries[] = array("slug" => "CD", "name" => "Democratic Republic of Congo", "calling_code" => "243");
    $countries[] = array("slug" => "DK", "name" => "Denmark", "calling_code" => "45");
    $countries[] = array("slug" => "DJ", "name" => "Djibouti", "calling_code" => "253");
    $countries[] = array("slug" => "DM", "name" => "Dominica", "calling_code" => "1");
    $countries[] = array("slug" => "DO", "name" => "Dominican Republic", "calling_code" => "1");
    $countries[] = array("slug" => "EC", "name" => "Ecuador", "calling_code" => "593");
    $countries[] = array("slug" => "EG", "name" => "Egypt", "calling_code" => "20");
    $countries[] = array("slug" => "SV", "name" => "El Salvador", "calling_code" => "503");
    $countries[] = array("slug" => "GQ", "name" => "Equatorial Guinea", "calling_code" => "240");
    $countries[] = array("slug" => "ER", "name" => "Eritrea", "calling_code" => "291");
    $countries[] = array("slug" => "EE", "name" => "Estonia", "calling_code" => "372");
    $countries[] = array("slug" => "ET", "name" => "Ethiopia", "calling_code" => "251");
    $countries[] = array("slug" => "FK", "name" => "Falkland Islands", "calling_code" => "500");
    $countries[] = array("slug" => "FO", "name" => "Faroe Islands", "calling_code" => "298");
    $countries[] = array("slug" => "FM", "name" => "Federated States of Micronesia", "calling_code" => "691");
    $countries[] = array("slug" => "FJ", "name" => "Fiji", "calling_code" => "679");
    $countries[] = array("slug" => "FI", "name" => "Finland", "calling_code" => "358");
    $countries[] = array("slug" => "FR", "name" => "France", "calling_code" => "33");
    $countries[] = array("slug" => "GF", "name" => "French Guiana", "calling_code" => "594");
    $countries[] = array("slug" => "PF", "name" => "French Polynesia", "calling_code" => "689");
    $countries[] = array("slug" => "GA", "name" => "Gabon", "calling_code" => "241");
    $countries[] = array("slug" => "GE", "name" => "Georgia", "calling_code" => "995");
    $countries[] = array("slug" => "DE", "name" => "Germany", "calling_code" => "49");
    $countries[] = array("slug" => "GH", "name" => "Ghana", "calling_code" => "233");
    $countries[] = array("slug" => "GI", "name" => "Gibraltar", "calling_code" => "350");
    $countries[] = array("slug" => "GR", "name" => "Greece", "calling_code" => "30");
    $countries[] = array("slug" => "GL", "name" => "Greenland", "calling_code" => "299");
    $countries[] = array("slug" => "GD", "name" => "Grenada", "calling_code" => "1");
    $countries[] = array("slug" => "GP", "name" => "Guadeloupe", "calling_code" => "590");
    $countries[] = array("slug" => "GU", "name" => "Guam", "calling_code" => "1");
    $countries[] = array("slug" => "GT", "name" => "Guatemala", "calling_code" => "502");
    $countries[] = array("slug" => "GN", "name" => "Guinea", "calling_code" => "224");
    $countries[] = array("slug" => "GW", "name" => "Guinea-Bissau", "calling_code" => "245");
    $countries[] = array("slug" => "GY", "name" => "Guyana", "calling_code" => "592");
    $countries[] = array("slug" => "HT", "name" => "Haiti", "calling_code" => "509");
    $countries[] = array("slug" => "HN", "name" => "Honduras", "calling_code" => "504");
    $countries[] = array("slug" => "HK", "name" => "Hong Kong", "calling_code" => "852");
    $countries[] = array("slug" => "HU", "name" => "Hungary", "calling_code" => "36");
    $countries[] = array("slug" => "IS", "name" => "Iceland", "calling_code" => "354");

    $countries[] = array("slug" => "ID", "name" => "Indonesia", "calling_code" => "62");
    $countries[] = array("slug" => "IR", "name" => "Iran", "calling_code" => "98");
    $countries[] = array("slug" => "IQ", "name" => "Iraq", "calling_code" => "964");
    $countries[] = array("slug" => "IE", "name" => "Ireland", "calling_code" => "353");
    $countries[] = array("slug" => "IL", "name" => "Israel", "calling_code" => "972");
    $countries[] = array("slug" => "IT", "name" => "Italy", "calling_code" => "39");
    $countries[] = array("slug" => "JM", "name" => "Jamaica", "calling_code" => "1");
    $countries[] = array("slug" => "JP", "name" => "Japan", "calling_code" => "81");
    $countries[] = array("slug" => "JO", "name" => "Jordan", "calling_code" => "962");
    $countries[] = array("slug" => "KZ", "name" => "Kazakhstan", "calling_code" => "7");
    $countries[] = array("slug" => "KE", "name" => "Kenya", "calling_code" => "254");
    $countries[] = array("slug" => "KI", "name" => "Kiribati", "calling_code" => "686");
    $countries[] = array("slug" => "XK", "name" => "Kosovo", "calling_code" => "381");
    $countries[] = array("slug" => "KW", "name" => "Kuwait", "calling_code" => "965");
    $countries[] = array("slug" => "KG", "name" => "Kyrgyzstan", "calling_code" => "996");
    $countries[] = array("slug" => "LA", "name" => "Laos", "calling_code" => "856");
    $countries[] = array("slug" => "LV", "name" => "Latvia", "calling_code" => "371");
    $countries[] = array("slug" => "LB", "name" => "Lebanon", "calling_code" => "961");
    $countries[] = array("slug" => "LS", "name" => "Lesotho", "calling_code" => "266");
    $countries[] = array("slug" => "LR", "name" => "Liberia", "calling_code" => "231");
    $countries[] = array("slug" => "LY", "name" => "Libya", "calling_code" => "218");
    $countries[] = array("slug" => "LI", "name" => "Liechtenstein", "calling_code" => "423");
    $countries[] = array("slug" => "LT", "name" => "Lithuania", "calling_code" => "370");
    $countries[] = array("slug" => "LU", "name" => "Luxembourg", "calling_code" => "352");
    $countries[] = array("slug" => "MO", "name" => "Macau", "calling_code" => "853");
    $countries[] = array("slug" => "MK", "name" => "Macedonia", "calling_code" => "389");
    $countries[] = array("slug" => "MG", "name" => "Madagascar", "calling_code" => "261");
    $countries[] = array("slug" => "MW", "name" => "Malawi", "calling_code" => "265");
    $countries[] = array("slug" => "MY", "name" => "Malaysia", "calling_code" => "60");
    $countries[] = array("slug" => "MV", "name" => "Maldives", "calling_code" => "960");
    $countries[] = array("slug" => "ML", "name" => "Mali", "calling_code" => "223");
    $countries[] = array("slug" => "MT", "name" => "Malta", "calling_code" => "356");
    $countries[] = array("slug" => "MH", "name" => "Marshall Islands", "calling_code" => "692");
    $countries[] = array("slug" => "MQ", "name" => "Martinique", "calling_code" => "596");
    $countries[] = array("slug" => "MR", "name" => "Mauritania", "calling_code" => "222");
    $countries[] = array("slug" => "MU", "name" => "Mauritius", "calling_code" => "230");
    $countries[] = array("slug" => "YT", "name" => "Mayotte", "calling_code" => "262");
    $countries[] = array("slug" => "MX", "name" => "Mexico", "calling_code" => "52");
    $countries[] = array("slug" => "MD", "name" => "Moldova", "calling_code" => "373");
    $countries[] = array("slug" => "MC", "name" => "Monaco", "calling_code" => "377");
    $countries[] = array("slug" => "MN", "name" => "Mongolia", "calling_code" => "976");
    $countries[] = array("slug" => "ME", "name" => "Montenegro", "calling_code" => "382");
    $countries[] = array("slug" => "MS", "name" => "Montserrat", "calling_code" => "1");
    $countries[] = array("slug" => "MA", "name" => "Morocco", "calling_code" => "212");
    $countries[] = array("slug" => "MZ", "name" => "Mozambique", "calling_code" => "258");
    $countries[] = array("slug" => "NA", "name" => "Namibia", "calling_code" => "264");
    $countries[] = array("slug" => "NR", "name" => "Nauru", "calling_code" => "674");
    $countries[] = array("slug" => "NP", "name" => "Nepal", "calling_code" => "977");
    $countries[] = array("slug" => "NL", "name" => "Netherlands", "calling_code" => "31");
    $countries[] = array("slug" => "AN", "name" => "Netherlands Antilles", "calling_code" => "599");
    $countries[] = array("slug" => "NC", "name" => "New Caledonia", "calling_code" => "687");
    $countries[] = array("slug" => "NZ", "name" => "New Zealand", "calling_code" => "64");
    $countries[] = array("slug" => "NI", "name" => "Nicaragua", "calling_code" => "505");
    $countries[] = array("slug" => "NE", "name" => "Niger", "calling_code" => "227");
    $countries[] = array("slug" => "NG", "name" => "Nigeria", "calling_code" => "234");
    $countries[] = array("slug" => "NU", "name" => "Niue", "calling_code" => "683");
    $countries[] = array("slug" => "NF", "name" => "Norfolk Island", "calling_code" => "672");
    $countries[] = array("slug" => "KP", "name" => "North Korea", "calling_code" => "850");
    $countries[] = array("slug" => "MP", "name" => "Northern Mariana Islands", "calling_code" => "1");
    $countries[] = array("slug" => "NO", "name" => "Norway", "calling_code" => "47");
    $countries[] = array("slug" => "OM", "name" => "Oman", "calling_code" => "968");
    $countries[] = array("slug" => "PK", "name" => "Pakistan", "calling_code" => "92");
    $countries[] = array("slug" => "PW", "name" => "Palau", "calling_code" => "680");
    $countries[] = array("slug" => "PS", "name" => "Palestine", "calling_code" => "970");
    $countries[] = array("slug" => "PA", "name" => "Panama", "calling_code" => "507");
    $countries[] = array("slug" => "PG", "name" => "Papua New Guinea", "calling_code" => "675");
    $countries[] = array("slug" => "PY", "name" => "Paraguay", "calling_code" => "595");
    $countries[] = array("slug" => "PE", "name" => "Peru", "calling_code" => "51");
    $countries[] = array("slug" => "PH", "name" => "Philippines", "calling_code" => "63");
    $countries[] = array("slug" => "PL", "name" => "Poland", "calling_code" => "48");
    $countries[] = array("slug" => "PT", "name" => "Portugal", "calling_code" => "351");
    $countries[] = array("slug" => "PR", "name" => "Puerto Rico", "calling_code" => "1");
    $countries[] = array("slug" => "QA", "name" => "Qatar", "calling_code" => "974");
    $countries[] = array("slug" => "CG", "name" => "Republic of the Congo", "calling_code" => "242");
    $countries[] = array("slug" => "RE", "name" => "Réunion", "calling_code" => "262");
    $countries[] = array("slug" => "RO", "name" => "Romania", "calling_code" => "40");
    $countries[] = array("slug" => "RU", "name" => "Russia", "calling_code" => "7");
    $countries[] = array("slug" => "RW", "name" => "Rwanda", "calling_code" => "250");
    $countries[] = array("slug" => "BL", "name" => "Saint Barthélemy", "calling_code" => "590");
    $countries[] = array("slug" => "SH", "name" => "Saint Helena", "calling_code" => "290");
    $countries[] = array("slug" => "KN", "name" => "Saint Kitts and Nevis", "calling_code" => "1");
    $countries[] = array("slug" => "MF", "name" => "Saint Martin", "calling_code" => "590");
    $countries[] = array("slug" => "PM", "name" => "Saint Pierre and Miquelon", "calling_code" => "508");
    $countries[] = array("slug" => "VC", "name" => "Saint Vincent and the Grenadines", "calling_code" => "1");
    $countries[] = array("slug" => "WS", "name" => "Samoa", "calling_code" => "685");
    $countries[] = array("slug" => "SM", "name" => "San Marino", "calling_code" => "378");
    $countries[] = array("slug" => "ST", "name" => "São Tomé and Príncipe", "calling_code" => "239");
    $countries[] = array("slug" => "SA", "name" => "Saudi Arabia", "calling_code" => "966");
    $countries[] = array("slug" => "SN", "name" => "Senegal", "calling_code" => "221");
    $countries[] = array("slug" => "RS", "name" => "Serbia", "calling_code" => "381");
    $countries[] = array("slug" => "SC", "name" => "Seychelles", "calling_code" => "248");
    $countries[] = array("slug" => "SL", "name" => "Sierra Leone", "calling_code" => "232");
    $countries[] = array("slug" => "SG", "name" => "Singapore", "calling_code" => "65");
    $countries[] = array("slug" => "SK", "name" => "Slovakia", "calling_code" => "421");
    $countries[] = array("slug" => "SI", "name" => "Slovenia", "calling_code" => "386");
    $countries[] = array("slug" => "SB", "name" => "Solomon Islands", "calling_code" => "677");
    $countries[] = array("slug" => "SO", "name" => "Somalia", "calling_code" => "252");
    $countries[] = array("slug" => "ZA", "name" => "South Africa", "calling_code" => "27");
    $countries[] = array("slug" => "KR", "name" => "South Korea", "calling_code" => "82");
    $countries[] = array("slug" => "ES", "name" => "Spain", "calling_code" => "34");
    $countries[] = array("slug" => "LK", "name" => "Sri Lanka", "calling_code" => "94");
    $countries[] = array("slug" => "LC", "name" => "St. Lucia", "calling_code" => "1");
    $countries[] = array("slug" => "SD", "name" => "Sudan", "calling_code" => "249");
    $countries[] = array("slug" => "SR", "name" => "Suriname", "calling_code" => "597");
    $countries[] = array("slug" => "SZ", "name" => "Swaziland", "calling_code" => "268");
    $countries[] = array("slug" => "SE", "name" => "Sweden", "calling_code" => "46");
    $countries[] = array("slug" => "CH", "name" => "Switzerland", "calling_code" => "41");
    $countries[] = array("slug" => "SY", "name" => "Syria", "calling_code" => "963");
    $countries[] = array("slug" => "TW", "name" => "Taiwan", "calling_code" => "886");
    $countries[] = array("slug" => "TJ", "name" => "Tajikistan", "calling_code" => "992");
    $countries[] = array("slug" => "TZ", "name" => "Tanzania", "calling_code" => "255");
    $countries[] = array("slug" => "TH", "name" => "Thailand", "calling_code" => "66");
    $countries[] = array("slug" => "BS", "name" => "The Bahamas", "calling_code" => "1");
    $countries[] = array("slug" => "GM", "name" => "The Gambia", "calling_code" => "220");
    $countries[] = array("slug" => "TL", "name" => "Timor-Leste", "calling_code" => "670");
    $countries[] = array("slug" => "TG", "name" => "Togo", "calling_code" => "228");
    $countries[] = array("slug" => "TK", "name" => "Tokelau", "calling_code" => "690");
    $countries[] = array("slug" => "TO", "name" => "Tonga", "calling_code" => "676");
    $countries[] = array("slug" => "TT", "name" => "Trinidad and Tobago", "calling_code" => "1");
    $countries[] = array("slug" => "TN", "name" => "Tunisia", "calling_code" => "216");
    $countries[] = array("slug" => "TR", "name" => "Turkey", "calling_code" => "90");
    $countries[] = array("slug" => "TM", "name" => "Turkmenistan", "calling_code" => "993");
    $countries[] = array("slug" => "TC", "name" => "Turks and Caicos Islands", "calling_code" => "1");
    $countries[] = array("slug" => "TV", "name" => "Tuvalu", "calling_code" => "688");
    $countries[] = array("slug" => "UG", "name" => "Uganda", "calling_code" => "256");
    $countries[] = array("slug" => "UA", "name" => "Ukraine", "calling_code" => "380");
    $countries[] = array("slug" => "AE", "name" => "United Arab Emirates", "calling_code" => "971");
    $countries[] = array("slug" => "GB", "name" => "United Kingdom", "calling_code" => "44");

    $countries[] = array("slug" => "UY", "name" => "Uruguay", "calling_code" => "598");
    $countries[] = array("slug" => "VI", "name" => "US Virgin Islands", "calling_code" => "1");
    $countries[] = array("slug" => "UZ", "name" => "Uzbekistan", "calling_code" => "998");
    $countries[] = array("slug" => "VU", "name" => "Vanuatu", "calling_code" => "678");
    $countries[] = array("slug" => "VA", "name" => "Vatican City", "calling_code" => "39");
    $countries[] = array("slug" => "VE", "name" => "Venezuela", "calling_code" => "58");
    $countries[] = array("slug" => "VN", "name" => "Vietnam", "calling_code" => "84");
    $countries[] = array("slug" => "WF", "name" => "Wallis and Futuna", "calling_code" => "681");
    $countries[] = array("slug" => "YE", "name" => "Yemen", "calling_code" => "967");
    $countries[] = array("slug" => "ZM", "name" => "Zambia", "calling_code" => "260");
    $countries[] = array("slug" => "ZW", "name" => "Zimbabwe", "calling_code" => "263");

    return $countries;
}
//---------------------------------------------------
function vh_get_countries_calling_codes()
{
    $array = [
        ['slug'=>'91', 'name'=>'India (+91)'],
        ['slug'=>'1', 'name'=>'United States (+1)'],
        ['slug'=>'44', 'name'=>'UK (+44)'],
        ['slug'=>'213', 'name'=>'Algeria (+213)'],
        ['slug'=>'376', 'name'=>'Andorra (+376)'],
        ['slug'=>'244', 'name'=>'Angola (+244)'],
        ['slug'=>'1264', 'name'=>'Anguilla (+1264)'],
        ['slug'=>'1268', 'name'=>'Antigua & Barbuda (+1268)'],
        ['slug'=>'54', 'name'=>'Argentina (+54)'],
        ['slug'=>'374', 'name'=>'Armenia (+374)'],
        ['slug'=>'297', 'name'=>'Aruba (+297)'],
        ['slug'=>'61', 'name'=>'Australia (+61)'],
        ['slug'=>'43', 'name'=>'Austria (+43)'],
        ['slug'=>'994', 'name'=>'Azerbaijan (+994)'],
        ['slug'=>'1242', 'name'=>'Bahamas (+1242)'],
        ['slug'=>'973', 'name'=>'Bahrain (+973)'],
        ['slug'=>'880', 'name'=>'Bangladesh (+880)'],
        ['slug'=>'1246', 'name'=>'Barbados (+1246)'],
        ['slug'=>'375', 'name'=>'Belarus (+375)'],
        ['slug'=>'32', 'name'=>'Belgium (+32)'],
        ['slug'=>'501', 'name'=>'Belize (+501)'],
        ['slug'=>'229', 'name'=>'Benin (+229)'],
        ['slug'=>'1441', 'name'=>'Bermuda (+1441)'],
        ['slug'=>'975', 'name'=>'Bhutan (+975)'],
        ['slug'=>'591', 'name'=>'Bolivia (+591)'],
        ['slug'=>'387', 'name'=>'Bosnia Herzegovina (+387)'],
        ['slug'=>'267', 'name'=>'Botswana (+267)'],
        ['slug'=>'55', 'name'=>'Brazil (+55)'],
        ['slug'=>'673', 'name'=>'Brunei (+673)'],
        ['slug'=>'359', 'name'=>'Bulgaria (+359)'],
        ['slug'=>'226', 'name'=>'Burkina Faso (+226)'],
        ['slug'=>'257', 'name'=>'Burundi (+257)'],
        ['slug'=>'855', 'name'=>'Cambodia (+855)'],
        ['slug'=>'237', 'name'=>'Cameroon (+237)'],
        ['slug'=>'238', 'name'=>'Cape Verde Islands (+238)'],
        ['slug'=>'1345', 'name'=>'Cayman Islands (+1345)'],
        ['slug'=>'236', 'name'=>'Central African Republic (+236)'],
        ['slug'=>'56', 'name'=>'Chile (+56)'],
        ['slug'=>'86', 'name'=>'China (+86)'],
        ['slug'=>'57', 'name'=>'Colombia (+57)'],
        ['slug'=>'269', 'name'=>'Mayotte (+269)'],
        ['slug'=>'242', 'name'=>'Congo (+242)'],
        ['slug'=>'682', 'name'=>'Cook Islands (+682)'],
        ['slug'=>'506', 'name'=>'Costa Rica (+506)'],
        ['slug'=>'385', 'name'=>'Croatia (+385)'],
        ['slug'=>'53', 'name'=>'Cuba (+53)'],
        ['slug'=>'90392', 'name'=>'Cyprus North (+90392)'],
        ['slug'=>'357', 'name'=>'Cyprus South (+357)'],
        ['slug'=>'42', 'name'=>'Czech Republic (+42)'],
        ['slug'=>'45', 'name'=>'Denmark (+45)'],
        ['slug'=>'253', 'name'=>'Djibouti (+253)'],
        ['slug'=>'1809', 'name'=>'Dominican Republic (+1809)'],
        ['slug'=>'593', 'name'=>'Ecuador (+593)'],
        ['slug'=>'20', 'name'=>'Egypt (+20)'],
        ['slug'=>'503', 'name'=>'El Salvador (+503)'],
        ['slug'=>'240', 'name'=>'Equatorial Guinea (+240)'],
        ['slug'=>'291', 'name'=>'Eritrea (+291)'],
        ['slug'=>'372', 'name'=>'Estonia (+372)'],
        ['slug'=>'251', 'name'=>'Ethiopia (+251)'],
        ['slug'=>'500', 'name'=>'Falkland Islands (+500)'],
        ['slug'=>'298', 'name'=>'Faroe Islands (+298)'],
        ['slug'=>'679', 'name'=>'Fiji (+679)'],
        ['slug'=>'358', 'name'=>'Finland (+358)'],
        ['slug'=>'33', 'name'=>'France (+33)'],
        ['slug'=>'594', 'name'=>'French Guiana (+594)'],
        ['slug'=>'689', 'name'=>'French Polynesia (+689)'],
        ['slug'=>'241', 'name'=>'Gabon (+241)'],
        ['slug'=>'220', 'name'=>'Gambia (+220)'],
        ['slug'=>'7880', 'name'=>'Georgia (+7880)'],
        ['slug'=>'49', 'name'=>'Germany (+49)'],
        ['slug'=>'233', 'name'=>'Ghana (+233)'],
        ['slug'=>'350', 'name'=>'Gibraltar (+350)'],
        ['slug'=>'30', 'name'=>'Greece (+30)'],
        ['slug'=>'299', 'name'=>'Greenland (+299)'],
        ['slug'=>'1473', 'name'=>'Grenada (+1473)'],
        ['slug'=>'590', 'name'=>'Guadeloupe (+590)'],
        ['slug'=>'671', 'name'=>'Guam (+671)'],
        ['slug'=>'502', 'name'=>'Guatemala (+502)'],
        ['slug'=>'224', 'name'=>'Guinea (+224)'],
        ['slug'=>'245', 'name'=>'Guinea - Bissau (+245)'],
        ['slug'=>'592', 'name'=>'Guyana (+592)'],
        ['slug'=>'509', 'name'=>'Haiti (+509)'],
        ['slug'=>'504', 'name'=>'Honduras (+504)'],
        ['slug'=>'852', 'name'=>'Hong Kong (+852)'],
        ['slug'=>'36', 'name'=>'Hungary (+36)'],
        ['slug'=>'354', 'name'=>'Iceland (+354)'],
        ['slug'=>'62', 'name'=>'Indonesia (+62)'],
        ['slug'=>'98', 'name'=>'Iran (+98)'],
        ['slug'=>'964', 'name'=>'Iraq (+964)'],
        ['slug'=>'353', 'name'=>'Ireland (+353)'],
        ['slug'=>'972', 'name'=>'Israel (+972)'],
        ['slug'=>'39', 'name'=>'Italy (+39)'],
        ['slug'=>'1876', 'name'=>'Jamaica (+1876)'],
        ['slug'=>'81', 'name'=>'Japan (+81)'],
        ['slug'=>'962', 'name'=>'Jordan (+962)'],
        ['slug'=>'7', 'name'=>'Uzbekistan (+7)'],
        ['slug'=>'254', 'name'=>'Kenya (+254)'],
        ['slug'=>'686', 'name'=>'Kiribati (+686)'],
        ['slug'=>'850', 'name'=>'Korea North (+850)'],
        ['slug'=>'82', 'name'=>'Korea South (+82)'],
        ['slug'=>'965', 'name'=>'Kuwait (+965)'],
        ['slug'=>'996', 'name'=>'Kyrgyzstan (+996)'],
        ['slug'=>'856', 'name'=>'Laos (+856)'],
        ['slug'=>'371', 'name'=>'Latvia (+371)'],
        ['slug'=>'961', 'name'=>'Lebanon (+961)'],
        ['slug'=>'266', 'name'=>'Lesotho (+266)'],
        ['slug'=>'231', 'name'=>'Liberia (+231)'],
        ['slug'=>'218', 'name'=>'Libya (+218)'],
        ['slug'=>'417', 'name'=>'Liechtenstein (+417)'],
        ['slug'=>'370', 'name'=>'Lithuania (+370)'],
        ['slug'=>'352', 'name'=>'Luxembourg (+352)'],
        ['slug'=>'853', 'name'=>'Macao (+853)'],
        ['slug'=>'389', 'name'=>'Macedonia (+389)'],
        ['slug'=>'261', 'name'=>'Madagascar (+261)'],
        ['slug'=>'265', 'name'=>'Malawi (+265)'],
        ['slug'=>'60', 'name'=>'Malaysia (+60)'],
        ['slug'=>'960', 'name'=>'Maldives (+960)'],
        ['slug'=>'223', 'name'=>'Mali (+223)'],
        ['slug'=>'356', 'name'=>'Malta (+356)'],
        ['slug'=>'692', 'name'=>'Marshall Islands (+692)'],
        ['slug'=>'596', 'name'=>'Martinique (+596)'],
        ['slug'=>'222', 'name'=>'Mauritania (+222)'],
        ['slug'=>'52', 'name'=>'Mexico (+52)'],
        ['slug'=>'691', 'name'=>'Micronesia (+691)'],
        ['slug'=>'373', 'name'=>'Moldova (+373)'],
        ['slug'=>'377', 'name'=>'Monaco (+377)'],
        ['slug'=>'976', 'name'=>'Mongolia (+976)'],
        ['slug'=>'1664', 'name'=>'Montserrat (+1664)'],
        ['slug'=>'212', 'name'=>'Morocco (+212)'],
        ['slug'=>'258', 'name'=>'Mozambique (+258)'],
        ['slug'=>'95', 'name'=>'Myanmar (+95)'],
        ['slug'=>'264', 'name'=>'Namibia (+264)'],
        ['slug'=>'674', 'name'=>'Nauru (+674)'],
        ['slug'=>'977', 'name'=>'Nepal (+977)'],
        ['slug'=>'31', 'name'=>'Netherlands (+31)'],
        ['slug'=>'687', 'name'=>'New Caledonia (+687)'],
        ['slug'=>'64', 'name'=>'New Zealand (+64)'],
        ['slug'=>'505', 'name'=>'Nicaragua (+505)'],
        ['slug'=>'227', 'name'=>'Niger (+227)'],
        ['slug'=>'234', 'name'=>'Nigeria (+234)'],
        ['slug'=>'683', 'name'=>'Niue (+683)'],
        ['slug'=>'672', 'name'=>'Norfolk Islands (+672)'],
        ['slug'=>'670', 'name'=>'Northern Marianas (+670)'],
        ['slug'=>'47', 'name'=>'Norway (+47)'],
        ['slug'=>'968', 'name'=>'Oman (+968)'],
        ['slug'=>'680', 'name'=>'Palau (+680)'],
        ['slug'=>'507', 'name'=>'Panama (+507)'],
        ['slug'=>'675', 'name'=>'Papua New Guinea (+675)'],
        ['slug'=>'595', 'name'=>'Paraguay (+595)'],
        ['slug'=>'51', 'name'=>'Peru (+51)'],
        ['slug'=>'63', 'name'=>'Philippines (+63)'],
        ['slug'=>'48', 'name'=>'Poland (+48)'],
        ['slug'=>'351', 'name'=>'Portugal (+351)'],
        ['slug'=>'1787', 'name'=>'Puerto Rico (+1787)'],
        ['slug'=>'974', 'name'=>'Qatar (+974)'],
        ['slug'=>'262', 'name'=>'Reunion (+262)'],
        ['slug'=>'40', 'name'=>'Romania (+40)'],
        ['slug'=>'250', 'name'=>'Rwanda (+250)'],
        ['slug'=>'378', 'name'=>'San Marino (+378)'],
        ['slug'=>'239', 'name'=>'Sao Tome & Principe (+239)'],
        ['slug'=>'966', 'name'=>'Saudi Arabia (+966)'],
        ['slug'=>'221', 'name'=>'Senegal (+221)'],
        ['slug'=>'381', 'name'=>'Serbia (+381)'],
        ['slug'=>'248', 'name'=>'Seychelles (+248)'],
        ['slug'=>'232', 'name'=>'Sierra Leone (+232)'],
        ['slug'=>'65', 'name'=>'Singapore (+65)'],
        ['slug'=>'421', 'name'=>'Slovak Republic (+421)'],
        ['slug'=>'386', 'name'=>'Slovenia (+386)'],
        ['slug'=>'677', 'name'=>'Solomon Islands (+677)'],
        ['slug'=>'252', 'name'=>'Somalia (+252)'],
        ['slug'=>'27', 'name'=>'South Africa (+27)'],
        ['slug'=>'34', 'name'=>'Spain (+34)'],
        ['slug'=>'94', 'name'=>'Sri Lanka (+94)'],
        ['slug'=>'290', 'name'=>'St. Helena (+290)'],
        ['slug'=>'1869', 'name'=>'St. Kitts (+1869)'],
        ['slug'=>'1758', 'name'=>'St. Lucia (+1758)'],
        ['slug'=>'249', 'name'=>'Sudan (+249)'],
        ['slug'=>'597', 'name'=>'Suriname (+597)'],
        ['slug'=>'268', 'name'=>'Swaziland (+268)'],
        ['slug'=>'46', 'name'=>'Sweden (+46)'],
        ['slug'=>'41', 'name'=>'Switzerland (+41)'],
        ['slug'=>'963', 'name'=>'Syria (+963)'],
        ['slug'=>'886', 'name'=>'Taiwan (+886)'],
        ['slug'=>'66', 'name'=>'Thailand (+66)'],
        ['slug'=>'228', 'name'=>'Togo (+228)'],
        ['slug'=>'676', 'name'=>'Tonga (+676)'],
        ['slug'=>'1868', 'name'=>'Trinidad & Tobago (+1868)'],
        ['slug'=>'216', 'name'=>'Tunisia (+216)'],
        ['slug'=>'90', 'name'=>'Turkey (+90)'],
        ['slug'=>'993', 'name'=>'Turkmenistan (+993)'],
        ['slug'=>'1649', 'name'=>'Turks & Caicos Islands (+1649)'],
        ['slug'=>'688', 'name'=>'Tuvalu (+688)'],
        ['slug'=>'256', 'name'=>'Uganda (+256)'],
        ['slug'=>'380', 'name'=>'Ukraine (+380)'],
        ['slug'=>'971', 'name'=>'United Arab Emirates (+971)'],
        ['slug'=>'598', 'name'=>'Uruguay (+598)'],
        ['slug'=>'678', 'name'=>'Vanuatu (+678)'],
        ['slug'=>'379', 'name'=>'Vatican City (+379)'],
        ['slug'=>'58', 'name'=>'Venezuela (+58)'],
        ['slug'=>'84', 'name'=>'Virgin Islands - US (+1340)'],
        ['slug'=>'681', 'name'=>'Wallis & Futuna (+681)'],
        ['slug'=>'969', 'name'=>'Yemen (North)(+969)'],
        ['slug'=>'967', 'name'=>'Yemen (South)(+967)'],
        ['slug'=>'260', 'name'=>'Zambia (+260)'],
        ['slug'=>'263', 'name'=>'Zimbabwe (+263)'],

    ];

    return $array;
}
//---------------------------------------------------
function vh_get_timezones()
{
    $timezones = array(
        ['slug' => 'Pacific/Midway', 'name' => "(GMT-11:00) Midway Island"],
        ['slug' => 'US/Samoa', 'name' =>"(GMT-11:00) Samoa"],
        ['slug' => 'US/Hawaii', 'name' =>"(GMT-10:00) Hawaii"],
        ['slug' => 'US/Alaska', 'name' =>"(GMT-09:00) Alaska"],
        ['slug' => 'US/Pacific', 'name' =>"(GMT-08:00) Pacific Time (US &amp; Canada)"],
        ['slug' => 'America/Tijuana', 'name' =>"(GMT-08:00) Tijuana"],
        ['slug' => 'US/Arizona', 'name' =>"(GMT-07:00) Arizona"],
        ['slug' => 'US/Mountain', 'name' =>"(GMT-07:00) Mountain Time (US &amp; Canada)"],
        ['slug' => 'America/Chihuahua', 'name' =>"(GMT-07:00) Chihuahua"],
        ['slug' => 'America/Mazatlan', 'name' =>"(GMT-07:00) Mazatlan"],
        ['slug' => 'America/Mexico_City', 'name' =>"(GMT-06:00) Mexico City"],
        ['slug' => 'America/Monterrey', 'name' =>"(GMT-06:00) Monterrey"],
        ['slug' => 'Canada/Saskatchewan', 'name' =>"(GMT-06:00) Saskatchewan"],
        ['slug' => 'US/Central', 'name' =>"(GMT-06:00) Central Time (US &amp; Canada)"],
        ['slug' => 'US/Eastern', 'name' =>"(GMT-05:00) Eastern Time (US &amp; Canada)"],
        ['slug' => 'US/East-Indiana', 'name' =>"(GMT-05:00) Indiana (East)"],
        ['slug' => 'America/Bogota', 'name' =>"(GMT-05:00) Bogota"],
        ['slug' => 'America/Lima', 'name' =>"(GMT-05:00) Lima"],
        ['slug' => 'America/Caracas', 'name' =>"(GMT-04:30) Caracas"],
        ['slug' => 'Canada/Atlantic', 'name' =>"(GMT-04:00) Atlantic Time (Canada)"],
        ['slug' => 'America/La_Paz', 'name' =>"(GMT-04:00) La Paz"],
        ['slug' => 'America/Santiago', 'name' =>"(GMT-04:00) Santiago"],
        ['slug' => 'Canada/Newfoundland', 'name' =>"(GMT-03:30) Newfoundland"],
        ['slug' => 'America/Buenos_Aires', 'name' =>"(GMT-03:00) Buenos Aires"],
        ['slug' => 'Greenland', 'name' =>"(GMT-03:00) Greenland"],
        ['slug' => 'Atlantic/Stanley', 'name' =>"(GMT-02:00) Stanley"],
        ['slug' => 'Atlantic/Azores', 'name' =>"(GMT-01:00) Azores"],
        ['slug' => 'Atlantic/Cape_Verde', 'name' =>"(GMT-01:00) Cape Verde Is."],
        ['slug' => 'Africa/Casablanca', 'name' =>"(GMT) Casablanca"],
        ['slug' => 'Europe/Dublin', 'name' =>"(GMT) Dublin"],
        ['slug' => 'Europe/Lisbon', 'name' =>"(GMT) Lisbon"],
        ['slug' => 'Europe/London', 'name' =>"(GMT) London"],
        ['slug' => 'Africa/Monrovia', 'name' =>"(GMT) Monrovia"],
        ['slug' => 'Europe/Amsterdam', 'name' =>"(GMT+01:00) Amsterdam"],
        ['slug' => 'Europe/Belgrade', 'name' =>"(GMT+01:00) Belgrade"],
        ['slug' => 'Europe/Berlin', 'name' =>"(GMT+01:00) Berlin"],
        ['slug' => 'Europe/Bratislava', 'name' =>"(GMT+01:00) Bratislava"],
        ['slug' => 'Europe/Brussels', 'name' =>"(GMT+01:00) Brussels"],
        ['slug' => 'Europe/Budapest', 'name' =>"(GMT+01:00) Budapest"],
        ['slug' => 'Europe/Copenhagen', 'name' =>"(GMT+01:00) Copenhagen"],
        ['slug' => 'Europe/Ljubljana', 'name' =>"(GMT+01:00) Ljubljana"],
        ['slug' => 'Europe/Madrid', 'name' =>"(GMT+01:00) Madrid"],
        ['slug' => 'Europe/Paris', 'name' =>"(GMT+01:00) Paris"],
        ['slug' => 'Europe/Prague', 'name' =>"(GMT+01:00) Prague"],
        ['slug' => 'Europe/Rome', 'name' =>"(GMT+01:00) Rome"],
        ['slug' => 'Europe/Sarajevo', 'name' =>"(GMT+01:00) Sarajevo"],
        ['slug' => 'Europe/Skopje', 'name' =>"(GMT+01:00) Skopje"],
        ['slug' => 'Europe/Stockholm', 'name' =>"(GMT+01:00) Stockholm"],
        ['slug' => 'Europe/Vienna', 'name' =>"(GMT+01:00) Vienna"],
        ['slug' => 'Europe/Warsaw', 'name' =>"(GMT+01:00) Warsaw"],
        ['slug' => 'Europe/Zagreb', 'name' =>"(GMT+01:00) Zagreb"],
        ['slug' => 'Europe/Athens', 'name' =>"(GMT+02:00) Athens"],
        ['slug' => 'Europe/Bucharest', 'name' =>"(GMT+02:00) Bucharest"],
        ['slug' => 'Africa/Cairo', 'name' =>"(GMT+02:00) Cairo"],
        ['slug' => 'Africa/Harare', 'name' =>"(GMT+02:00) Harare"],
        ['slug' => 'Europe/Helsinki', 'name' =>"(GMT+02:00) Helsinki"],
        ['slug' => 'Europe/Istanbul', 'name' =>"(GMT+02:00) Istanbul"],
        ['slug' => 'Asia/Jerusalem', 'name' =>"(GMT+02:00) Jerusalem"],
        ['slug' => 'Europe/Kiev', 'name' =>"(GMT+02:00) Kyiv"],
        ['slug' => 'Europe/Minsk', 'name' =>"(GMT+02:00) Minsk"],
        ['slug' => 'Europe/Riga', 'name' =>"(GMT+02:00) Riga"],
        ['slug' => 'Europe/Sofia', 'name' =>"(GMT+02:00) Sofia"],
        ['slug' => 'Europe/Tallinn', 'name' =>"(GMT+02:00) Tallinn"],
        ['slug' => 'Europe/Vilnius', 'name' =>"(GMT+02:00) Vilnius"],
        ['slug' => 'Asia/Baghdad', 'name' =>"(GMT+03:00) Baghdad"],
        ['slug' => 'Asia/Kuwait', 'name' =>"(GMT+03:00) Kuwait"],
        ['slug' => 'Africa/Nairobi', 'name' =>"(GMT+03:00) Nairobi"],
        ['slug' => 'Asia/Riyadh', 'name' =>"(GMT+03:00) Riyadh"],
        ['slug' => 'Europe/Moscow', 'name' =>"(GMT+03:00) Moscow"],
        ['slug' => 'Asia/Tehran', 'name' =>"(GMT+03:30) Tehran"],
        ['slug' => 'Asia/Baku', 'name' =>"(GMT+04:00) Baku"],
        ['slug' => 'Europe/Volgograd', 'name' =>"(GMT+04:00) Volgograd"],
        ['slug' => 'Asia/Muscat', 'name' =>"(GMT+04:00) Muscat"],
        ['slug' => 'Asia/Tbilisi', 'name' =>"(GMT+04:00) Tbilisi"],
        ['slug' => 'Asia/Yerevan', 'name' =>"(GMT+04:00) Yerevan"],
        ['slug' => 'Asia/Kabul', 'name' =>"(GMT+04:30) Kabul"],
        ['slug' => 'Asia/Karachi', 'name' =>"(GMT+05:00) Karachi"],
        ['slug' => 'Asia/Tashkent', 'name' =>"(GMT+05:00) Tashkent"],
        ['slug' => 'Asia/Kolkata', 'name' =>"(GMT+05:30) Kolkata"],
        ['slug' => 'Asia/Kathmandu', 'name' =>"(GMT+05:45) Kathmandu"],
        ['slug' => 'Asia/Yekaterinburg', 'name' =>"(GMT+06:00) Ekaterinburg"],
        ['slug' => 'Asia/Almaty', 'name' =>"(GMT+06:00) Almaty"],
        ['slug' => 'Asia/Dhaka', 'name' =>"(GMT+06:00) Dhaka"],
        ['slug' => 'Asia/Novosibirsk', 'name' =>"(GMT+07:00) Novosibirsk"],
        ['slug' => 'Asia/Bangkok', 'name' =>"(GMT+07:00) Bangkok"],
        ['slug' => 'Asia/Jakarta', 'name' =>"(GMT+07:00) Jakarta"],
        ['slug' => 'Asia/Krasnoyarsk', 'name' =>"(GMT+08:00) Krasnoyarsk"],
        ['slug' => 'Asia/Chongqing', 'name' =>"(GMT+08:00) Chongqing"],
        ['slug' => 'Asia/Hong_Kong', 'name' =>"(GMT+08:00) Hong Kong"],
        ['slug' => 'Asia/Kuala_Lumpur', 'name' =>"(GMT+08:00) Kuala Lumpur"],
        ['slug' => 'Australia/Perth', 'name' =>"(GMT+08:00) Perth"],
        ['slug' => 'Asia/Singapore', 'name' =>"(GMT+08:00) Singapore"],
        ['slug' => 'Asia/Taipei', 'name' =>"(GMT+08:00) Taipei"],
        ['slug' => 'Asia/Ulaanbaatar', 'name' =>"(GMT+08:00) Ulaan Bataar"],
        ['slug' => 'Asia/Urumqi', 'name' =>"(GMT+08:00) Urumqi"],
        ['slug' => 'Asia/Irkutsk', 'name' =>"(GMT+09:00) Irkutsk"],
        ['slug' => 'Asia/Seoul', 'name' =>"(GMT+09:00) Seoul"],
        ['slug' => 'Asia/Tokyo', 'name' =>"(GMT+09:00) Tokyo"],
        ['slug' => 'Australia/Adelaide', 'name' =>"(GMT+09:30) Adelaide"],
        ['slug' => 'Australia/Darwin', 'name' =>"(GMT+09:30) Darwin"],
        ['slug' => 'Asia/Yakutsk', 'name' =>"(GMT+10:00) Yakutsk"],
        ['slug' => 'Australia/Brisbane', 'name' =>"(GMT+10:00) Brisbane"],
        ['slug' => 'Australia/Canberra', 'name' =>"(GMT+10:00) Canberra"],
        ['slug' => 'Pacific/Guam', 'name' =>"(GMT+10:00) Guam"],
        ['slug' => 'Australia/Hobart', 'name' =>"(GMT+10:00) Hobart"],
        ['slug' => 'Australia/Melbourne', 'name' =>"(GMT+10:00) Melbourne"],
        ['slug' => 'Pacific/Port_Moresby', 'name' =>"(GMT+10:00) Port Moresby"],
        ['slug' => 'Australia/Sydney', 'name' =>"(GMT+10:00) Sydney"],
        ['slug' => 'Asia/Vladivostok', 'name' =>"(GMT+11:00) Vladivostok"],
        ['slug' => 'Asia/Magadan', 'name' =>"(GMT+12:00) Magadan"],
        ['slug' => 'Pacific/Auckland', 'name' =>"(GMT+12:00) Auckland"],
        ['slug' => 'Pacific/Fiji', 'name' =>"(GMT+12:00) Fiji"],
    );

    return $timezones;
}
//---------------------------------------------------
//---------------------------------------------------