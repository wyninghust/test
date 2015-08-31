<?php

/**
 * Created by PhpStorm.
 * User: jp-1
 * Date: 2015/8/28
 * Time: 14:30
 */
class RemoteConnect
{
    public function connectToServer($serverName=null)  {
    if($serverName==null){
      throw new Exception("That's not a server name!");
    }
    $fp = fsockopen($serverName,80);
    return ($fp) ? true : false;
  }
  public function returnSampleObject()
  {
    return $this;
  }
}
