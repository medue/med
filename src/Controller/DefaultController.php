<?php
/**
 * Created by PhpStorm.
 * Authon: akio <medue8@gmail.com>
 * Date: 7/24/19
 * Time: 15:03
 */

namespace App\Controller;


use App\Service\Upload;
use Symfony\Component\HttpFoundation\Request;

class DefaultController
{

    public function index(Request $request)
    {
        $upload = new Upload($_FILES['file']['tmp_name'], $request->get('blob_num'), $request->get('total_blob_num'), $request->get('file_name'));
        print_r($upload->apiReturn());
        echo __CLASS__.':'.__FUNCTION__;exit;
    }

}