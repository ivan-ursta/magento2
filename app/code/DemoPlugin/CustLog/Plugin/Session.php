<?php

namespace DemoPlugin\CustLog\Plugin;


class Session
{
    public function afterLogout(\Magento\Customer\Model\Session $session, $result){
    echo "Hello Plugin" . "</br>";
    return $result;
}
}
