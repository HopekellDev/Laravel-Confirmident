<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use HopekellDev\Confirmident\Facades\Confirmident;

/**
 * Confirmident's Identity Verification laravel package
 * @author Hope Ezenwa- Hopekell <hopekelltech@gmail.com>
 * @version 1
 **/
class ConfirmidentController extends Controller
{
    /**
     * Verify NIN
     */
    public function verifyNin(Request $request)
    {
        $nin = $request->input('nin');

        $result = Confirmident::nin()->searchByNIN($nin);

        return response()->json($result);

        /**
         * Expected Response
         * -------------------------
         * {
         *   "success": true,
         *   "message": "Verification Successfull",
         *   "data": {
         *       "firs_tname": "John",
         *       "middlename": "Peter",
         *       "NIN": "12345678901",
         *       "State": "Katsina",
         *       "last_name": "Doe",
         *       "phone_number": "07060772240",
         *       "photo": "/9j/4AAQSkZJRgABAgAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0a\\nHBwgJC4...",
         *       "birthcountry": "Nigeria",
         *       "birthdate": "01-01-2000",
         *       "birthlga": "Kankia",
         *       "birthstate": "Katsina",
         *       "gender": "m",
         *       "height": "170",
         *       "maritalstatus": "Married",
         *       "educationlevel": "tertiary",
         *       "email": "test@gmail.com",
         *       "centralID": "8928395",
         *       "nok_address1": "GRA",
         *       "nok_firstname": "Peter",
         *       "nok_lga": "Kankia",
         *       "nok_middlename": "",
         *       "nok_state": "Katsina",
         *       "nok_surname": "Doe",
         *       "nspokenlang": "HAUSA",
         *       "ospkenlang": "",
         *       "othername": "",
         *       "profession": "STUDENT",
         *       "religion": "christianity",
         *       "residence_AdressLine1": "11 TUNAKIA STREET BARUWA",
         *       "residence_Town": "Kankia",
         *       "residence_lga": "Kankia",
         *       "residence_state": "Katsina",
         *       "residencestatus": "birth",
         *       "self_origin_lga": "Kankia",
         *       "self_origin_place": "Kankia",
         *       "self_origin_state": "Katsina"
         *   }
         * }
         */

    }

    /**
     * Search NIN by Phone Number
     */
    public function searchNinByPhone(Request $request)
    {
        $phone = $request->input('phone');

        $result = Confirmident::nin()->searchByPhoneNumber($phone);

        return response()->json($result);

        /**
         * Expected Response
         * -------------------------
         * {
         *   "success": true,
         *   "message": "Verification Successfull",
         *   "data": {
         *       "firs_tname": "John",
         *       "middlename": "Peter",
         *       "NIN": "12345678901",
         *       "State": "Katsina",
         *       "last_name": "Doe",
         *       "phone_number": "07060772240",
         *       "photo": "/9j/4AAQSkZJRgABAgAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0a\\nHBwgJC4...",
         *       "birthcountry": "Nigeria",
         *       "birthdate": "01-01-2000",
         *       "birthlga": "Kankia",
         *       "birthstate": "Katsina",
         *       "gender": "m",
         *       "height": "170",
         *       "maritalstatus": "Married",
         *       "educationlevel": "tertiary",
         *       "email": "test@gmail.com",
         *       "centralID": "8928395",
         *       "nok_address1": "GRA",
         *       "nok_firstname": "Peter",
         *       "nok_lga": "Kankia",
         *       "nok_middlename": "",
         *       "nok_state": "Katsina",
         *       "nok_surname": "Doe",
         *       "nspokenlang": "HAUSA",
         *       "ospkenlang": "",
         *       "othername": "",
         *       "profession": "STUDENT",
         *       "religion": "christianity",
         *       "residence_AdressLine1": "11 TUNAKIA STREET BARUWA",
         *       "residence_Town": "Kankia",
         *       "residence_lga": "Kankia",
         *       "residence_state": "Katsina",
         *       "residencestatus": "birth",
         *       "self_origin_lga": "Kankia",
         *       "self_origin_place": "Kankia",
         *       "self_origin_state": "Katsina"
         *   }
         * }
         */

    }

    /**
     * Search NIN by Demographic Info
     */
    public function searchNinByDemographic(Request $request)
    {
        $payload = $request->only(['firstname', 'lastname', 'dob', 'gender']);

        $result = Confirmident::nin()->searchByDemographicInfo($payload);

        return response()->json($result);

        /**
         * Expected Response
         * -------------------------
         * {
         *   "success": true,
         *   "message": "Verification Successfull",
         *   "data": {
         *       "firs_tname": "John",
         *       "middlename": "Peter",
         *       "NIN": "12345678901",
         *       "State": "Katsina",
         *       "last_name": "Doe",
         *       "phone_number": "07060772240",
         *       "photo": "/9j/4AAQSkZJRgABAgAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0a\\nHBwgJC4...",
         *       "birthcountry": "Nigeria",
         *       "birthdate": "01-01-2000",
         *       "birthlga": "Kankia",
         *       "birthstate": "Katsina",
         *       "gender": "m",
         *       "height": "170",
         *       "maritalstatus": "Married",
         *       "educationlevel": "tertiary",
         *       "email": "test@gmail.com",
         *       "centralID": "8928395",
         *       "nok_address1": "GRA",
         *       "nok_firstname": "Peter",
         *       "nok_lga": "Kankia",
         *       "nok_middlename": "",
         *       "nok_state": "Katsina",
         *       "nok_surname": "Doe",
         *       "nspokenlang": "HAUSA",
         *       "ospkenlang": "",
         *       "othername": "",
         *       "profession": "STUDENT",
         *       "religion": "christianity",
         *       "residence_AdressLine1": "11 TUNAKIA STREET BARUWA",
         *       "residence_Town": "Kankia",
         *       "residence_lga": "Kankia",
         *       "residence_state": "Katsina",
         *       "residencestatus": "birth",
         *       "self_origin_lga": "Kankia",
         *       "self_origin_place": "Kankia",
         *       "self_origin_state": "Katsina"
         *   }
         * }
         */

    }

    /**
     * Verify BVN
     */
    public function verifyBvn(Request $request)
    {
        $bvn = $request->input('bvn');

        $result = Confirmident::bvn()->verification($bvn);

        return response()->json($result);

        /**
         * Expected Response
         * -------------------------
         * {
         *   "success": true,
         *   "message": Verification Successfull,
         *   "data": {
         *       "firs_tname": "John",
         *       "last_name": "Doe",
         *       "image": "/9j/4AAQSkZJRgABAgAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0a\nHBwgJC4...",
         *       "middlename": "Peter",
         *       "email": "test@gmail.com",
         *       "gender": "Male",
         *       "State": "Katsina State",
         *       "alt_number": "",
         *       "phone_number": "07060772240",
         *       "date_of_birth": "01-01-2000",
         *       "bvn": "2221756393",
         *       "nin": "12345678901",
         *       "user_id": "null",
         *   }
         *}
         */
    }
}
