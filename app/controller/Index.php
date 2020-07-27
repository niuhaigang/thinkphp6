<?php
namespace app\controller;

use app\BaseController;
use think\facade\View;

class Index extends BaseController
{
    public function index()
    {
        function httpGet($url, $params = array(), $isJson = true) {
            if (strpos($url, 'appublisher.com') !== false)
                $params['terminal_type'] = 'pc_web';

            if (!empty($params))
                $url .= '?' . http_build_query($params);

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            $rawData = curl_exec($ch);
            if (!empty($rawData))
                return $isJson ? json_decode($rawData) : $rawData;

            return null;
        }
        $indexData = httpGet('http://spark.local/Web_Index/getIndexData');

        View::assign('saying', $indexData->data->saying->saying);
        View::assign('name', $indexData->data->saying->name);
        View::assign('main', $indexData->data->welcome->main);
        View::assign('word', $indexData->data->welcome->word);
        return View::fetch();
//        var_dump($resp);

    }
   
    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
