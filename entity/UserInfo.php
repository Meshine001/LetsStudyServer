<?php

/**
 * Created by PhpStorm.
 * User: Ming
 * Date: 2016/5/11
 * Time: 21:41
 */
class UserInfo
{
    private $username,
        $password,
        $appkey,
        $nickname,
        $birthday,
        $gender,
        $signature,
        $region,
        $address,
        $ctime,
        $mtime;

    /**
     * UserInfo constructor.
     * @param $username
     * @param $password
     * @param $appkey
     * @param $nickname
     * @param $birthday
     * @param $gender
     * @param $signature
     * @param $region
     * @param $address
     * @param $ctime
     * @param $mtime
     */
    public function __construct($username, $password, $appkey, $nickname, $birthday, $gender, $signature, $region, $address, $ctime, $mtime)
    {
        $this->username = $username;
        $this->password = $password;
        $this->appkey = $appkey;
        $this->nickname = $nickname;
        $this->birthday = $birthday;
        $this->gender = $gender;
        $this->signature = $signature;
        $this->region = $region;
        $this->address = $address;
        $this->ctime = $ctime;
        $this->mtime = $mtime;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getAppkey()
    {
        return $this->appkey;
    }

    /**
     * @param mixed $appkey
     */
    public function setAppkey($appkey)
    {
        $this->appkey = $appkey;
    }

    /**
     * @return mixed
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @param mixed $nickname
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * @param mixed $signature
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;
    }

    /**
     * @return mixed
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param mixed $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getCtime()
    {
        return $this->ctime;
    }

    /**
     * @param mixed $ctime
     */
    public function setCtime($ctime)
    {
        $this->ctime = $ctime;
    }

    /**
     * @return mixed
     */
    public function getMtime()
    {
        return $this->mtime;
    }

    /**
     * @param mixed $mtime
     */
    public function setMtime($mtime)
    {
        $this->mtime = $mtime;
    }



}