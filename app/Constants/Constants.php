<?php
namespace App\Constants;

class Constants {

    public static $GEOIPCOUNTRY = ['AD' => 'Andorra', 'AE' => 'United Arab Emirates', 'AF' => 'Afghanistan', 'AG' => 'Antigua and Barbuda', 'AI' => 'Anguilla'
    , 'AL' => 'Albania', 'AM' => 'Armenia', 'AO' => 'Angola', 'AP' => 'Non-spec Asia Pas Location', 'AR' => 'Argentina'
    , 'AS' => 'American Samoa', 'AT' => 'Austria', 'AU' => 'Australia', 'AW' => 'Aruba', 'AX' => 'Aland Islands'
    , 'AZ' => 'Azerbaijan', 'BA' => 'Bosnia and Herzegowina', 'BB' => 'Barbados', 'BD' => 'Bangladesh', 'BE' => 'Belgium'
    , 'BF' => 'Burkina Faso', 'BG' => 'Bulgaria', 'BH' => 'Bahrain', 'BI' => 'Burundi', 'BJ' => 'Benin'
    , 'BM' => 'Bermuda', 'BN' => 'Brunei Darussalam', 'BO' => 'Bolivia', 'BQ' => 'Bonaire; Sint Eustatius; Saba', 'BR' => 'Brazil'
    , 'BS' => 'Bahamas', 'BT' => 'Bhutan', 'BW' => 'Botswana', 'BY' => 'Belarus', 'BZ' => 'Belize'
    , 'CA' => 'Canada', 'CD' => 'Congo The Democratic Republic of The', 'CF' => 'Central African Republic', 'CG' => 'Congo', 'CH' => 'Switzerland'
    , 'CI' => 'Cote D\'ivoire', 'CK' => 'Cook Islands', 'CL' => 'Chile', 'CM' => 'Cameroon', 'CN' => 'China'
    , 'CO' => 'Colombia', 'CR' => 'Costa Rica', 'CU' => 'Cuba', 'CV' => 'Cape Verde', 'CW' => 'Curacao'
    , 'CY' => 'Cyprus', 'CZ' => 'Czech Republic', 'DE' => 'Germany', 'DJ' => 'Djibouti', 'DK' => 'Denmark'
    , 'DM' => 'Dominica', 'DO' => 'Dominican Republic', 'DZ' => 'Algeria', 'EC' => 'Ecuador', 'EE' => 'Estonia'
    , 'EG' => 'Egypt', 'ER' => 'Eritrea', 'ES' => 'Spain', 'ET' => 'Ethiopia', 'EU' => 'European Union'
    , 'FI' => 'Finland', 'FJ' => 'Fiji', 'FK' => 'Falkland Islands (MALVINAS)', 'FM' => 'Micronesia Federated States of', 'FO' => 'Faroe Islands'
    , 'FR' => 'France', 'GA' => 'Gabon', 'GB' => 'United Kingdom', 'GD' => 'Grenada', 'GE' => 'Georgia'
    , 'GF' => 'French Guiana', 'GG' => 'Guernsey', 'GH' => 'Ghana', 'GI' => 'Gibraltar', 'GL' => 'Greenland'
    , 'GM' => 'Gambia', 'GN' => 'Guinea', 'GP' => 'Guadeloupe', 'GQ' => 'Equatorial Guinea', 'GR' => 'Greece'
    , 'GT' => 'Guatemala', 'GU' => 'Guam', 'GW' => 'Guinea-bissau', 'GY' => 'Guyana', 'HK' => 'Hong Kong'
    , 'HN' => 'Honduras', 'HR' => 'Croatia (LOCAL Name: Hrvatska)', 'HT' => 'Haiti', 'HU' => 'Hungary', 'ID' => 'Indonesia'
    , 'IE' => 'Ireland', 'IL' => 'Israel', 'IM' => 'Isle of Man', 'IN' => 'India', 'IO' => 'British Indian Ocean Territory'
    , 'IQ' => 'Iraq', 'IR' => 'Iran (ISLAMIC Republic Of)', 'IS' => 'Iceland', 'IT' => 'Italy', 'JE' => 'Jersey'
    , 'JM' => 'Jamaica', 'JO' => 'Jordan', 'JP' => 'Japan', 'KE' => 'Kenya', 'KG' => 'Kyrgyzstan'
    , 'KH' => 'Cambodia', 'KI' => 'Kiribati', 'KM' => 'Comoros', 'KN' => 'Saint Kitts and Nevis', 'KP' => 'Korea Democratic People\'s Republic of'
    , 'KR' => 'Korea Republic of', 'KW' => 'Kuwait', 'KY' => 'Cayman Islands', 'KZ' => 'Kazakhstan', 'LA' => 'Lao People\'s Democratic Republic'
    , 'LB' => 'Lebanon', 'LC' => 'Saint Lucia', 'LI' => 'Liechtenstein', 'LK' => 'Sri Lanka', 'LR' => 'Liberia'
    , 'LS' => 'Lesotho', 'LT' => 'Lithuania', 'LU' => 'Luxembourg', 'LV' => 'Latvia', 'LY' => 'Libyan Arab Jamahiriya'
    , 'MA' => 'Morocco', 'MC' => 'Monaco', 'MD' => 'Moldova Republic of', 'ME' => 'Montenegro', 'MF' => 'Saint Martin'
    , 'MG' => 'Madagascar', 'MH' => 'Marshall Islands', 'MK' => 'Macedonia', 'ML' => 'Mali', 'MM' => 'Myanmar'
    , 'MN' => 'Mongolia', 'MO' => 'Macau', 'MP' => 'Northern Mariana Islands', 'MQ' => 'Martinique', 'MR' => 'Mauritania'
    , 'MS' => 'Montserrat', 'MT' => 'Malta', 'MU' => 'Mauritius', 'MV' => 'Maldives', 'MW' => 'Malawi'
    , 'MX' => 'Mexico', 'MY' => 'Malaysia', 'MZ' => 'Mozambique', 'NA' => 'Namibia', 'NC' => 'New Caledonia'
    , 'NE' => 'Niger', 'NF' => 'Norfolk Island', 'NG' => 'Nigeria', 'NI' => 'Nicaragua', 'NL' => 'Netherlands'
    , 'NO' => 'Norway', 'NP' => 'Nepal', 'NR' => 'Nauru', 'NU' => 'Niue', 'NZ' => 'New Zealand'
    , 'OM' => 'Oman', 'PA' => 'Panama', 'PE' => 'Peru', 'PF' => 'French Polynesia', 'PG' => 'Papua New Guinea'
    , 'PH' => 'Philippines', 'PK' => 'Pakistan', 'PL' => 'Poland', 'PM' => 'St. Pierre and Miquelon', 'PR' => 'Puerto Rico'
    , 'PS' => 'Palestinian Territory Occupied', 'PT' => 'Portugal', 'PW' => 'Palau', 'PY' => 'Paraguay', 'QA' => 'Qatar'
    , 'RE' => 'Reunion', 'RO' => 'Romania', 'RS' => 'Serbia', 'RU' => 'Russian Federation', 'RW' => 'Rwanda'
    , 'SA' => 'Saudi Arabia', 'SB' => 'Solomon Islands', 'SC' => 'Seychelles', 'SD' => 'Sudan', 'SE' => 'Sweden'
    , 'SG' => 'Singapore', 'SI' => 'Slovenia', 'SK' => 'Slovakia (SLOVAK Republic)', 'SL' => 'Sierra Leone', 'SM' => 'San Marino'
    , 'SN' => 'Senegal', 'SO' => 'Somalia', 'SR' => 'Suriname', 'SS' => 'South Sudan', 'ST' => 'Sao Tome and Principe'
    , 'SV' => 'El Salvador', 'SX' => 'Sint Maarten', 'SY' => 'Syrian Arab Republic', 'SZ' => 'Swaziland', 'TC' => 'Turks and Caicos Islands'
    , 'TD' => 'Chad', 'TG' => 'Togo', 'TH' => 'Thailand', 'TJ' => 'Tajikistan', 'TK' => 'Tokelau'
    , 'TL' => 'Timor-leste', 'TM' => 'Turkmenistan', 'TN' => 'Tunisia', 'TO' => 'Tonga', 'TR' => 'Turkey'
    , 'TT' => 'Trinidad and Tobago', 'TV' => 'Tuvalu', 'TW' => 'Taiwan; Republic of China (ROC)', 'TZ' => 'Tanzania United Republic of', 'UA' => 'Ukraine'
    , 'UG' => 'Uganda', 'US' => 'United States', 'UY' => 'Uruguay', 'UZ' => 'Uzbekistan', 'VA' => 'Holy See (VATICAN City State)'
    , 'VC' => 'Saint Vincent and The Grenadines', 'VE' => 'Venezuela', 'VG' => 'Virgin Islands (BRITISH)', 'VI' => 'Virgin Islands (U.S.)', 'VN' => 'Viet Nam'
    , 'VU' => 'Vanuatu', 'WF' => 'Wallis and Futuna Islands', 'WS' => 'Samoa', 'YE' => 'Yemen', 'YT' => 'Mayotte'
    , 'ZA' => 'South Africa', 'ZM' => 'Zambia', 'ZW' => 'Zimbabwe'];

    public static $VISAS = ['Work Visa (Residence Permit)', 'Business Visa', 'Family Visa (Residence Permit)', 'Family Visit Visa', 'Tourist Visa', 'Qatari Citizenship', 'No Visa'];

    public static $enumDegrees = [
        'high' => "High school or equivalent",
        'diploma' => "Diploma",
        'bachelor' => "Bachelor's degree",
        'higherdiploma' => "Higher diploma",
        'master' => "Master's degree",
        'doctorate' => "Doctorate"
    ];
}
